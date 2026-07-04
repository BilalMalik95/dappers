<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        @yield('title') - {{ config('app.name', 'DappersTech') }}
    </title>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#07090d">
    <meta name="color-scheme" content="dark">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="@yield('meta_description')" />
    <meta name="keywords" content="@yield('meta_keywords')" />

    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:image" content="@yield('og_image', asset('frontend/assets/images/logo/og-image.png'))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('meta_description')">
    <meta name="twitter:image" content="@yield('og_image', asset('frontend/assets/images/logo/og-image.png'))">

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

    {{-- Preload critical logo asset --}}
    <link rel="preload" as="image" href="{{ asset('frontend/assets/images/logo/dapperstech-lockup-dark-bg-transparent.png') }}">

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
    @yield('scripts')
</body>

</html>
