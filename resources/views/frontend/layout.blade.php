<!DOCTYPE html>
<html lang="en">

<head>
    @php
        $brand = config('app.name', 'DappersTech');
        // Blade runs e() over inline @section content, so yieldContent() hands back
        // already-escaped HTML. Everything derived from it must be echoed with {!! !!}
        // or the entities get escaped twice ("&" -> "&amp;amp;").
        $brandEscaped = e($brand);
        $rawTitle = trim($__env->yieldContent('title'));
        // Blog/category/service titles come from the DB and rarely carry the brand,
        // while the static pages already end in it. Only append where it's missing.
        $pageTitle = $rawTitle === ''
            ? $brandEscaped
            : (\Illuminate\Support\Str::contains($rawTitle, $brandEscaped) ? $rawTitle : $rawTitle . ' - ' . $brandEscaped);

        $defaultOgImage = asset('frontend/assets/images/logo/og-image-1200x630.png');
        $ogImage = trim($__env->yieldContent('og_image')) ?: e($defaultOgImage);
        // Only the default card is known to be 1200x630; blog images are arbitrary,
        // so declaring dimensions for them would misreport the aspect to scrapers.
        $ogImageIsDefault = $ogImage === e($defaultOgImage);
    @endphp
    <title>{!! $pageTitle !!}</title>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#07090d">
    <meta name="color-scheme" content="dark">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description')" />
    <meta name="keywords" content="@yield('meta_keywords')" />

    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title" content="{!! $pageTitle !!}">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:image" content="{!! $ogImage !!}">
    @if ($ogImageIsDefault)
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="{{ $brand }} - Software House for AI &amp; Web Development">
    @else
    <meta property="og:image:alt" content="{!! $pageTitle !!}">
    @endif
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:site_name" content="{{ $brand }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{!! $pageTitle !!}">
    <meta name="twitter:description" content="@yield('meta_description')">
    <meta name="twitter:image" content="{!! $ogImage !!}">

    <link rel="canonical" href="{{ Request::url() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/assets/images/logo/favicon-32.png') }}?v=99">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/images/logo/favicon-32.png') }}?v=99">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/assets/images/logo/favicon-16.png') }}?v=99">
    <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('frontend/assets/images/logo/favicon-48.png') }}?v=99">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/assets/images/logo/apple-touch-icon-180.png') }}?v=99">

    {{-- DNS Prefetch for performance --}}
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="//www.googletagmanager.com">
    {{-- Several service pages hotlink hero/section images from Pexels; this
         shaves the DNS+TLS handshake off whichever one ends up being the LCP element. --}}
    <link rel="preconnect" href="https://images.pexels.com" crossorigin>

    {{-- Critical CSS first --}}
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/site-theme.min.css') }}?v={{ file_exists(public_path('frontend/assets/css/site-theme.min.css')) ? filemtime(public_path('frontend/assets/css/site-theme.min.css')) : '1' }}">

    {{-- Non-critical CSS loaded with preload for better performance --}}
    <link rel="preload" href="{{ asset('frontend/assets/css/plugins/animation.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/animation.css') }}"></noscript>
    <link rel="preload" href="{{ asset('frontend/assets/css/plugins/feature.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/feature.css') }}"></noscript>
    <link rel="preload" href="{{ asset('frontend/assets/css/plugins/magnify.min.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/magnify.min.css') }}"></noscript>
    <link rel="preload" href="{{ asset('frontend/assets/css/plugins/slick.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/slick.css') }}"></noscript>
    <link rel="preload" href="{{ asset('frontend/assets/css/plugins/slick-theme.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/slick-theme.css') }}"></noscript>
    <link rel="preload" href="{{ asset('frontend/assets/css/plugins/lightbox.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins/lightbox.css') }}"></noscript>

    {{-- jQuery needed synchronously for inline scripts --}}
    <script src="{{ asset('frontend/assets/js/vendor/jquery.min.js') }}"></script>

    {{-- Google Fonts with display=swap for faster perceived load --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Kanit:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet"></noscript>

    {{-- Font Awesome deferred for performance --}}
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"></noscript>

    @yield('styles')
    <style>
        .my_switcher button {
            border: none;
            outline: none;
            background: transparent;
            color: #fff !important;
        }
    </style>
    {{-- Google Analytics deferred --}}
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BGZZV870SC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'G-BGZZV870SC');
    </script>
</head>

<body>
    @include('frontend.includes.header')

    <main>
        @yield('content')
    </main>

    @include('frontend.includes.footer')
    <script src="{{ asset('frontend/assets/js/mobile-sliders.js') }}" defer></script>
    <script>
    (function () {
        // Two rAFs so the browser paints the hero's initial (hidden) state
        // before we flip it to visible - otherwise the CSS transition never
        // has a "from" state to animate from, since is-active is on the
        // first slide from the very first paint.
        requestAnimationFrame(function () {
            requestAnimationFrame(function () {
                document.body.classList.add('hero-ready');
            });
        });

        var revealSelectors = '.service-feature-card, .service-mini-card, .service-wide-card, .home-service-feature, .home-service-row, .home-process-card, .blog-card, .stat-item, .home-process-banner, .testimonial-card';

        if (!('IntersectionObserver' in window)) {
            document.querySelectorAll(revealSelectors).forEach(function (el) { el.classList.add('is-visible'); });
            document.querySelectorAll('[data-count-to]').forEach(function (el) {
                el.textContent = el.dataset.countTo + (el.dataset.countSuffix || '');
            });
            return;
        }

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

        function reveal(selector, stepSeconds, maxSteps) {
            document.querySelectorAll(selector).forEach(function (el, i) {
                el.style.transitionDelay = Math.min(i, maxSteps) * stepSeconds + 's';
                observer.observe(el);
            });
        }

        reveal('.service-feature-card, .service-mini-card, .service-wide-card', 0.08, 3);
        reveal('.home-service-feature', 0, 0);
        reveal('.home-service-row', 0.15, 3);
        reveal('.home-process-card', 0.2, 3);
        reveal('.blog-card', 0.2, 2);
        reveal('.stat-item', 0.1, 3);
        reveal('.home-process-banner', 0, 0);
        reveal('.testimonial-card', 0, 0);

        // Count up each stat number (9+, 40+, 5*, 24h ...) once it scrolls into view.
        var countEls = document.querySelectorAll('[data-count-to]');
        if (countEls.length) {
            var countObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (!entry.isIntersecting) return;
                    countObserver.unobserve(entry.target);

                    var el = entry.target;
                    var target = parseInt(el.dataset.countTo, 10);
                    var suffix = el.dataset.countSuffix || '';
                    var duration = 1100;
                    var start = null;

                    function step(timestamp) {
                        if (start === null) start = timestamp;
                        var progress = Math.min((timestamp - start) / duration, 1);
                        var eased = 1 - Math.pow(1 - progress, 3);
                        el.textContent = Math.round(target * eased) + suffix;
                        if (progress < 1) requestAnimationFrame(step);
                    }
                    requestAnimationFrame(step);
                });
            }, { threshold: 0.6 });
            countEls.forEach(function (el) { countObserver.observe(el); });
        }
    })();
    </script>
    @yield('scripts')
</body>

</html>
