<?php

namespace Tests\Feature;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Covers the pages whose title/meta come from the database, which the static-page
 * SeoMetaTest cannot reach: the brand-suffix logic and the conditional OG-image
 * dimensions both branch on runtime values only these pages produce.
 */
class DynamicPageMetaTest extends TestCase
{
    use RefreshDatabase;

    private function makeBlog(array $overrides = []): Blog
    {
        $user = User::factory()->create();

        // meta_* and index are NOT NULL columns but deliberately excluded from the
        // model's $fillable, so they are assigned explicitly here just as
        // BlogController does — mass-assigning them would be silently dropped.
        $attributes = array_merge([
            'user_id' => $user->id,
            'title' => 'What Is RAG and Why It Matters',
            'slug' => 'what-is-rag',
            'short_description' => 'A short intro to retrieval augmented generation.',
            'description' => '<p>Body copy.</p>',
            'image' => 'rag.jpg',
            'meta_title' => 'What Is RAG',
            'meta_keywords' => 'rag',
            'meta_description' => 'Intro to RAG.',
            'status' => 1,
            'index' => 1,
            'feature_blog' => 1,
            'category' => 'AI Development',
        ], $overrides);

        $blog = new Blog();
        foreach ($attributes as $key => $value) {
            $blog->{$key} = $value;
        }
        $blog->save();

        return $blog;
    }

    private function makeCategory(): Category
    {
        return Category::create([
            'name' => 'Web Development',
            'slug' => 'web-development',
            'title' => 'Web Development That Grows Your Business, Based in Islamabad',
            'description' => '<p>We build web apps.</p>',
            'meta_title' => 'Web Development Services in Islamabad | DappersTech',
            'meta_keywords' => 'web development islamabad',
            'meta_description' => 'DappersTech is an Islamabad-based software house.',
            'image' => 'x.png',
        ]);
    }

    /** A DB title that lacks the brand gets " - DappersTech" appended exactly once. */
    public function test_blog_title_receives_brand_suffix(): void
    {
        $this->makeBlog();

        $html = $this->get('/blog/what-is-rag')->assertOk()->getContent();
        preg_match('#<title>(.*?)</title>#s', $html, $m);

        $this->assertSame('What Is RAG and Why It Matters - DappersTech', trim($m[1]));
    }

    /** A DB title that already contains the brand must not get a second copy. */
    public function test_category_title_is_not_double_branded(): void
    {
        $this->makeCategory();

        $html = $this->get('/web-development')->assertOk()->getContent();
        preg_match('#<title>(.*?)</title>#s', $html, $m);

        $this->assertSame(1, substr_count($m[1], 'DappersTech'), "Got: {$m[1]}");
    }

    /**
     * A blog overrides og_image with its own artwork, whose dimensions are unknown,
     * so the width/height meta tags must NOT be emitted (they would misreport it).
     */
    public function test_blog_omits_og_dimensions_for_custom_image(): void
    {
        $this->makeBlog();

        $html = $this->get('/blog/what-is-rag')->assertOk()->getContent();

        $this->assertStringContainsString('og:type" content="article"', $html);
        $this->assertStringContainsString('blog/rag.jpg', $html);
        $this->assertStringNotContainsString('og:image:width', $html);
        $this->assertStringNotContainsString('og:image:height', $html);
    }

    /**
     * blog.blade.php maps a post's category to a related-service link. The map
     * must key off existing category pages; a missing route/category previously
     * threw and 500'd the whole post.
     */
    public function test_blog_in_category_without_a_page_still_renders(): void
    {
        // "AI Development" has no category row, so the related-service CTA is dropped.
        $this->makeBlog(['category' => 'AI Development']);

        $this->get('/blog/what-is-rag')
            ->assertOk()
            ->assertDontSee('AI Development Services'); // CTA suppressed, no 500
    }

    public function test_blog_related_cta_links_to_a_real_category_page(): void
    {
        $this->makeCategory();
        $this->makeBlog(['slug' => 'web-post', 'category' => 'Web Development']);

        $this->get('/blog/web-post')
            ->assertOk()
            ->assertSee('Web Development Services')
            ->assertSee('href="'.url('/web-development').'"', false);
    }

    public function test_ai_development_hub_page_renders(): void
    {
        $this->get('/ai-development')
            ->assertOk()
            ->assertSee('AI Development')
            // Links out to all four AI service pages.
            ->assertSee(route('ai_rag_systems'), false)
            ->assertSee(route('ai_agents'), false)
            ->assertSee(route('ai_llm_integration'), false)
            ->assertSee(route('ai_backend_deployment'), false);
    }

    /**
     * Every URL used as a BreadcrumbList `item` in a service page's structured
     * data must resolve — a 404 breadcrumb was the original defect. The category
     * pages need their DB rows to exist, so seed them first.
     */
    public function test_service_page_breadcrumb_urls_all_resolve(): void
    {
        $this->makeCategory(); // web-development
        Category::create([
            'name' => 'Web Design', 'slug' => 'web-design',
            'title' => 'Web Design', 'description' => 'd',
            'meta_title' => 'Web Design Services in Islamabad | DappersTech',
            'meta_keywords' => 'k', 'meta_description' => 'd', 'image' => 'x.png',
        ]);

        $servicePages = [
            '/ai-development',
            '/services/ai-development/rag-systems',
            '/services/ai-development/ai-agents',
            '/services/ai-development/llm-integration',
            '/services/ai-development/ai-backend-deployment',
            '/services/web-development/laravel-development',
            '/services/web-design/ui-ux-design',
        ];

        foreach ($servicePages as $page) {
            $html = $this->get($page)->assertOk()->getContent();

            preg_match_all(
                '#"item": "https://dapperstech\.com([^"]*)"#',
                $html,
                $m
            );

            foreach (array_unique($m[1]) as $path) {
                $path = $path === '' ? '/' : $path;
                $status = $this->get($path)->baseResponse->getStatusCode();
                $this->assertContains(
                    $status,
                    [200, 301, 302],
                    "Breadcrumb item {$path} referenced by {$page} returned {$status}"
                );
            }
        }
    }
}
