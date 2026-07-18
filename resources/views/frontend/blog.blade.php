@extends('frontend.layout')
@section('title', $blog->title)
@section('meta_description', \Illuminate\Support\Str::limit(strip_tags($blog->short_description), 160))
@section('meta_keywords', $blog->category . ', ' . $blog->title)
@section('og_image', asset('frontend/assets/images/blog/' . $blog->image))
@section('og_type', 'article')

@section('styles')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "BlogPosting",
      "headline": "{{ addslashes($blog->title) }}",
      "description": "{{ addslashes(\Illuminate\Support\Str::limit(strip_tags($blog->short_description), 160)) }}",
      "image": "{{ asset('frontend/assets/images/blog/' . $blog->image) }}",
      "datePublished": "{{ $blog->created_at->toIso8601String() }}",
      "dateModified": "{{ $blog->updated_at->toIso8601String() }}",
      "author": {"@type": "Person", "name": "{{ addslashes($blog->user->name ?? 'DappersTech Team') }}"},
      "publisher": {
        "@id": "https://dapperstech.com/#organization",
        "@type": "Organization",
        "name": "DappersTech IT Services",
        "logo": {"@type": "ImageObject", "url": "{{ asset('frontend/assets/images/logo/dapperstech-logo-trimmed.png') }}"}
      },
      "mainEntityOfPage": {"@type": "WebPage", "@id": "{{ route('SingleBlog', $blog->slug) }}"}
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "{{ route('home') }}"},
        {"@type": "ListItem", "position": 2, "name": "Blogs", "item": "{{ route('blogs') }}"},
        {"@type": "ListItem", "position": 3, "name": "{{ addslashes($blog->title) }}", "item": "{{ route('SingleBlog', $blog->slug) }}"}
      ]
    }
  ]
}
</script>
@endsection

@section('content')
  <section class="section page-hero-wrap">
    <div class="container">
      <div class="page-hero-box">
        <div class="page-hero-content">
          <h1>{{ $blog->title }}</h1>
          <div class="breadcrumb">
            <i class="fas fa-home"></i>
            <a href="{{ route('home') }}">Home</a>
            <span class="sep">::</span>
            <a href="{{ route('blogs') }}">Blogs</a>
            <span class="sep">::</span>
            <span class="current">{{ $blog->title }}</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section blog-details">
    <div class="container">
      <div class="blog-details-image">
        <img src="{{ asset('frontend/assets/images/blog/' . $blog->image) }}" alt="{{ $blog->title }}" fetchpriority="high" decoding="async">
      </div>

      <div class="blog-detail-summary-card">
        <span class="blog-detail-category">{{ $blog->category }}</span>
        <h2>{{ $blog->title }}</h2>
        <p class="blog-detail-short">{!! nl2br(e($blog->short_description)) !!}</p>
        <div class="blog-detail-meta">
          <span><i class="fa-regular fa-calendar"></i> {{ $blog->created_at->format('M d, Y') }}</span>
          <span><i class="fa-regular fa-user"></i> {{ $blog->user->name ?? 'DappersTech Team' }}</span>
        </div>
      </div>

      <div class="blog-detail-content">
        {!! $blog->description !!}
      </div>

      @php
        // Keyed by category slug, not route name: there are no web_development /
        // web_design / ai_development routes, and route() on a missing name throws,
        // which 500s the whole post. Category pages are served by the /{category} route.
        $relatedServiceMap = [
          'Web Development' => ['slug' => 'web-development', 'label' => 'Web Development Services'],
          'UI/UX Design' => ['slug' => 'web-design', 'label' => 'Web Design Services'],
          'Design' => ['slug' => 'web-design', 'label' => 'Web Design Services'],
          'AI Development' => ['slug' => 'ai-development', 'label' => 'AI Development Services'],
        ];
        $relatedService = $relatedServiceMap[$blog->category] ?? null;

        // Drop the CTA when the category has no page (currently ai-development),
        // so a post in that category still renders instead of linking to a 404.
        if ($relatedService && !\App\Models\Category::where('slug', $relatedService['slug'])->exists()) {
            $relatedService = null;
        }
      @endphp
      @if ($relatedService)
        <div class="blog-related-service-cta">
          <p>Need help with this? Explore our <a href="{{ route('category', $relatedService['slug']) }}">{{ $relatedService['label'] }}</a>.</p>
        </div>
        <style>
          .blog-related-service-cta { margin-top: 32px; padding: 20px 24px; border-left: 3px solid currentColor; border-radius: 8px; background: rgba(255,255,255,0.04); }
          .blog-related-service-cta p { margin: 0; }
          .blog-related-service-cta a { font-weight: 600; text-decoration: underline; }
        </style>
      @endif
    </div>
  </section>

  <section class="blog-bottom-cta">
    <div class="container">
        <div class="blog-bottom-box">
            <div>
                <span class="blog-page-label">Let's Grow</span>
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
