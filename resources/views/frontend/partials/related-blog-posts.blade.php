@php
    $relatedPosts = \App\Models\Blog::where('status', 1)
        ->whereIn('category', $categories ?? [])
        ->latest()
        ->take(3)
        ->get();
@endphp
@if ($relatedPosts->isNotEmpty())
<section class="section related-reading-section">
    <div class="container">
        <span class="services-page-kicker">From Our Blog</span>
        <h2>Related Reading</h2>
        <div class="related-reading-grid">
            @foreach ($relatedPosts as $post)
                <a href="{{ route('SingleBlog', $post->slug) }}" class="related-reading-card">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ \Illuminate\Support\Str::limit(strip_tags($post->short_description), 120) }}</p>
                </a>
            @endforeach
        </div>
    </div>
</section>
<style>
    .related-reading-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px; margin-top: 24px; }
    .related-reading-card { display: block; padding: 24px; border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; text-decoration: none; color: inherit; transition: border-color .2s ease, transform .2s ease; }
    .related-reading-card:hover { border-color: rgba(255,255,255,0.35); transform: translateY(-2px); }
    .related-reading-card h3 { font-size: 1.05rem; margin-bottom: 8px; }
    .related-reading-card p { font-size: .9rem; opacity: .75; margin: 0; }
</style>
@endif
