<?php

namespace Tests\Feature;

use Tests\TestCase;

/**
 * Guards the entity signals search engines and AI crawlers cross-check:
 * a single canonical NAP, one brand mention per title, and an OG card
 * whose declared dimensions match the image actually served.
 */
class SeoMetaTest extends TestCase
{
    /** Pages that render from Blade alone, with no database rows required. */
    public const STATIC_PAGES = ['/', '/aboutus', '/contact-us', '/team', '/ai-development'];

    public const CANONICAL_PHONE_LINK = 'tel:+923339994544';
    public const CANONICAL_PHONE_SCHEMA = '+92-333-9994544';
    public const CANONICAL_LOCALITY = 'Islamabad';

    /**
     * The brand suffix is appended only when a title lacks it, so a title that
     * already ends in "DappersTech" must not pick up a second copy.
     */
    public function test_titles_mention_the_brand_exactly_once(): void
    {
        foreach (self::STATIC_PAGES as $page) {
            preg_match('#<title>(.*?)</title>#s', $this->get($page)->getContent(), $m);

            $this->assertNotEmpty($m, "No <title> rendered on {$page}");
            $this->assertSame(
                1,
                substr_count($m[1], 'DappersTech'),
                "Title on {$page} should name the brand once, got: {$m[1]}"
            );
        }
    }

    /**
     * Inline @section content is escaped by Blade, so echoing it with {{ }}
     * would double-escape "&" into "&amp;amp;".
     */
    public function test_titles_are_not_double_escaped(): void
    {
        foreach (self::STATIC_PAGES as $page) {
            $this->get($page)->assertDontSee('&amp;amp;', false);
        }
    }

    public function test_titles_stay_within_the_serp_display_limit(): void
    {
        foreach (self::STATIC_PAGES as $page) {
            preg_match('#<title>(.*?)</title>#s', $this->get($page)->getContent(), $m);

            // Compare decoded length: "&amp;" occupies five bytes but renders as one character.
            $rendered = html_entity_decode(trim($m[1]), ENT_QUOTES);
            $this->assertLessThanOrEqual(
                60,
                mb_strlen($rendered),
                "Title on {$page} is ".mb_strlen($rendered)." chars and will be truncated: {$rendered}"
            );
        }
    }

    public function test_every_page_serves_one_canonical_phone_number(): void
    {
        foreach (self::STATIC_PAGES as $page) {
            $html = $this->get($page)->getContent();

            preg_match_all('#href="tel:([^"]+)"#', $html, $m);
            $this->assertNotEmpty($m[1], "No tel: link on {$page}");

            foreach (array_unique($m[1]) as $tel) {
                // A space in the href breaks click-to-dial in several mobile browsers.
                $this->assertSame(
                    self::CANONICAL_PHONE_LINK,
                    'tel:'.$tel,
                    "Non-canonical tel: link on {$page}"
                );
            }
        }
    }

    public function test_structured_data_is_valid_and_uses_the_canonical_nap(): void
    {
        foreach (self::STATIC_PAGES as $page) {
            preg_match_all(
                '#<script type="application/ld\+json">(.*?)</script>#s',
                $this->get($page)->getContent(),
                $m
            );
            $this->assertNotEmpty($m[1], "No JSON-LD on {$page}");

            foreach ($m[1] as $i => $json) {
                $data = json_decode(html_entity_decode($json), true);
                $this->assertNotNull($data, "JSON-LD block {$i} on {$page} is malformed: ".json_last_error_msg());

                array_walk_recursive($data, function ($value, $key) use ($page) {
                    if ($key === 'telephone') {
                        $this->assertSame(self::CANONICAL_PHONE_SCHEMA, $value, "Stale schema telephone on {$page}");
                    }
                    if ($key === 'addressLocality') {
                        $this->assertSame(self::CANONICAL_LOCALITY, $value, "Stale schema addressLocality on {$page}");
                    }
                });
            }
        }
    }

    /** The former Rawalpindi NAP and landline must not survive anywhere. */
    public function test_no_superseded_contact_details_remain(): void
    {
        foreach (self::STATIC_PAGES as $page) {
            $response = $this->get($page);

            foreach (['6125246', 'Rehmanabad', 'Mid City Mall', '46000', '9302731'] as $stale) {
                $response->assertDontSee($stale, false);
            }
        }
    }

    /**
     * og:image:width/height are only truthful for the default card; blog posts
     * override og_image with arbitrarily-sized artwork.
     */
    public function test_default_og_card_exists_and_matches_declared_dimensions(): void
    {
        $html = $this->get('/')->getContent();

        preg_match('#<meta property="og:image" content="([^"]+)"#', $html, $m);
        $this->assertNotEmpty($m, 'No og:image on homepage');
        $this->assertStringContainsString('og-image-1200x630.png', $m[1]);

        $file = public_path('frontend/assets/images/logo/og-image-1200x630.png');
        $this->assertFileExists($file, 'og:image points at a file that is not on disk');

        [$width, $height] = getimagesize($file);
        $this->assertSame(1200, $width);
        $this->assertSame(630, $height);

        $this->assertStringContainsString('<meta property="og:image:width" content="1200">', $html);
        $this->assertStringContainsString('<meta property="og:image:height" content="630">', $html);
    }
}
