@extends('frontend.layout')

@section('title', 'Latest Blogs | Web Development, Software & Digital Marketing Insights')
@section('meta_description', 'Read the latest insights from DapperSolutions about web development, software development, UI/UX design, ecommerce, SEO, APIs, cloud solutions, and business automation.')
@section('meta_keywords', 'IT blog, software development blog, web development articles, SEO tips, digital marketing insights, ecommerce development, UI UX design, API development, DapperSolutions blog')
@section('og_image', $blogs->first() ? asset('frontend/assets/images/blog/' . $blogs->first()->image) : asset('frontend/assets/images/logo/logo-dappersolutions.png'))

@php
    $featured = $blogs->first();
    $restBlogs = $blogs->skip(1);
@endphp

@section('styles')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "CollectionPage",
      "name": "DapperSolutions Blog",
      "url": "https://dappersolution.com/blogs",
      "description": "Articles on web development, software development, UI/UX design, ecommerce, SEO, APIs, cloud solutions, and business automation."
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://dappersolution.com/"},
        {"@type": "ListItem", "position": 2, "name": "Blogs", "item": "https://dappersolution.com/blogs"}
      ]
    },
    {
      "@type": "ItemList",
      "itemListElement": [
        @foreach ($blogs->take(10) as $i => $blog)
        {
            "@type": "ListItem",
            "position": {{ $i + 1 }},
            "url": "{{ route('SingleBlog', $blog->slug) }}",
            "name": "{{ addslashes($blog->title) }}"
        }{{ $loop->last ? '' : ',' }}
        @endforeach
      ]
    }
  ]
}
</script>
@endsection

@section('content')

<section class="blog-list-hero">
    <div class="container">
        <div class="blog-list-hero-grid">

            <div class="blog-list-hero-content">
                <span class="blog-page-label">Insights & Resources</span>

                <h1>
                    Latest ideas on software, web, automation, and digital growth.
                </h1>

                <p>
                    Explore expert articles, practical guides, and digital strategies to help your
                    business build better websites, scalable software, ecommerce systems, and stronger
                    online visibility.
                </p>
            </div>

            <div class="blog-list-hero-card">
                <span>Featured Topic</span>
                <h2>Build smarter digital products for modern businesses.</h2>
                <p>
                    Learn how strong design, clean development, SEO, and automation can improve your
                    business operations and customer experience.
                </p>
                <a href="#blog-listing">
                    Explore Articles
                    <i class="fa-solid fa-arrow-down"></i>
                </a>
            </div>

        </div>
    </div>
</section>


@if ($featured)
<section class="blog-featured-section">
    <div class="container">

        <div class="blog-featured-card">
            <div class="blog-featured-image">
                <img src="{{ asset('frontend/assets/images/blog/' . $featured->image) }}"
                     alt="{{ $featured->title }}">
            </div>

            <div class="blog-featured-content">
                <span class="blog-page-label">Featured Insight</span>

                <h2>
                    {{ $featured->title }}
                </h2>

                <p>
                    {{ \Illuminate\Support\Str::limit(strip_tags($featured->short_description), 160) }}
                </p>

                <div class="blog-featured-meta">
                    <span><i class="fa-regular fa-calendar"></i> {{ $featured->created_at->format('M d, Y') }}</span>
                    <span><i class="fa-regular fa-user"></i> {{ $featured->user->name ?? 'DapperSolutions Team' }}</span>
                    <span><i class="fa-regular fa-folder"></i> {{ $featured->category }}</span>
                </div>

                <a href="{{ route('SingleBlog', $featured->slug) }}" class="blog-main-btn">
                    Read Featured Article
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>

    </div>
</section>
@endif


<section class="blog-listing-section" id="blog-listing">
    <div class="container">

        <div class="blog-listing-top">
            <div>
                <span class="blog-page-label">Latest Blogs</span>
                <h2>Explore our latest articles and digital insights</h2>
            </div>
        </div>

        <div class="blog-listing-layout">

            <div class="blog-listing-grid">

                @forelse ($restBlogs as $blog)
                    <a href="{{ route('SingleBlog', $blog->slug) }}" class="blog-list-card">

                        <div class="blog-list-image">
                            <img src="{{ asset('frontend/assets/images/blog/' . $blog->image) }}"
                                 alt="{{ $blog->title }}" loading="lazy" decoding="async">
                            <span class="blog-list-category">
                                {{ $blog->category }}
                            </span>
                        </div>

                        <div class="blog-list-content">
                            <div class="blog-list-meta">
                                <span><i class="fa-regular fa-calendar"></i> {{ $blog->created_at->format('M d, Y') }}</span>
                                <span><i class="fa-regular fa-user"></i> {{ $blog->user->name ?? 'DapperSolutions' }}</span>
                            </div>

                            <h3>{{ $blog->title }}</h3>

                            <p>
                                {{ \Illuminate\Support\Str::limit(strip_tags($blog->short_description), 110) }}
                            </p>

                            <div class="blog-list-read">
                                Read Article
                                <i class="fa-solid fa-arrow-right"></i>
                            </div>
                        </div>

                    </a>
                @empty
                    <div class="blog-empty-premium">
                        <h3>No blogs found</h3>
                        <p>
                            @if(request('search'))
                                No articles match "{{ request('search') }}". Try a different search term.
                            @else
                                No blogs are available right now. Please check back later.
                            @endif
                        </p>
                    </div>
                @endforelse

            </div>

            <aside class="blog-sidebar">

                <div class="blog-sidebar-box blog-search-box">
                    <h3>Search Articles</h3>

                    <form action="{{ route('blogs') }}" method="GET" class="blog-search-form">
                        <input type="text" name="search" placeholder="Search blog..." value="{{ request('search') }}">
                        <button type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>

                <div class="blog-sidebar-box">
                    <h3>Recent Insights</h3>

                    <div class="blog-recent-list">
                        @forelse ($blogs->take(3) as $recent)
                            <a href="{{ route('SingleBlog', $recent->slug) }}" class="blog-recent-item">
                                <div class="blog-recent-img">
                                    <img src="{{ asset('frontend/assets/images/blog/' . $recent->image) }}"
                                         alt="{{ $recent->title }}" loading="lazy" decoding="async">
                                </div>

                                <div>
                                    <span>{{ $recent->category }}</span>
                                    <h4>{{ $recent->title }}</h4>
                                </div>
                            </a>
                        @empty
                            <p class="blog-sidebar-empty">No recent posts available.</p>
                        @endforelse
                    </div>
                </div>

                <div class="blog-sidebar-cta">
                    <span>Need a digital solution?</span>
                    <h3>Let’s build your website, app, or software system.</h3>
                    <a href="{{ route('contact_us') }}">
                        Get a Free Consultation
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>

            </aside>

        </div>

        @if(method_exists($blogs, 'links'))
            <div class="blog-pagination">
                {{ $blogs->links() }}
            </div>
        @endif

    </div>
</section>


<section class="blog-bottom-cta">
    <div class="container">
        <div class="blog-bottom-box">
            <div>
                <span class="blog-page-label">Let’s Grow</span>
                <h2>Want to turn your business idea into a premium digital product?</h2>
            </div>

            <a href="{{ route('contact_us') }}" class="blog-main-btn">
                Get a Free Consultation
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection
