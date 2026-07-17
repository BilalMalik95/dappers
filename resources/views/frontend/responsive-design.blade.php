@extends('frontend.layout')

@section('title', 'Responsive Design Services | Pixel-Perfect on Every Screen')
@section('meta_description', 'Mobile-first responsive design services, pixel-perfect layouts on every screen size, from smartphones to large desktops, built for speed and usability.')
@section('meta_keywords', 'responsive web design, mobile-first design, cross-device design, pixel-perfect design, adaptive layouts, mobile optimization, responsive UI')

@section('styles')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Responsive Design",
      "serviceType": "Responsive Web Design",
      "provider": {
        "@id": "https://dapperstech.com/#organization",
        "@type": "Organization",
        "name": "DappersTech IT Services",
        "url": "https://dapperstech.com"
      },
      "description": "Mobile-first designs that look and function flawlessly across all devices and screen sizes, smartphones, tablets, laptops, and large desktops, every breakpoint perfect.",
      "areaServed": "Worldwide",
      "url": "https://dapperstech.com/services/web-design/responsive-design"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://dapperstech.com/"},
        {"@type": "ListItem", "position": 2, "name": "Services", "item": "https://dapperstech.com/services"},
        {"@type": "ListItem", "position": 3, "name": "Web Design", "item": "https://dapperstech.com/services/web-design"},
        {"@type": "ListItem", "position": 4, "name": "Responsive Design", "item": "https://dapperstech.com/services/web-design/responsive-design"}
      ]
    }
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is responsive web design and why does it matter?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Responsive design means your website automatically adapts its layout, images, and text to fit any screen size, from a small smartphone to a large desktop monitor. Since over 60% of visitors browse on mobile, a site that isn't responsive loses visitors, conversions, and search rankings."
      }
    },
    {
      "@type": "Question",
      "name": "Which devices and browsers do you actually test on?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We test on real iOS, Android, and desktop browsers, not just emulators, to catch layout issues emulators often miss. Every major breakpoint is checked, from 320px phones up to 4K monitors, not just two or three common sizes."
      }
    },
    {
      "@type": "Question",
      "name": "What are breakpoints and how do you decide where to place them?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Breakpoints are the screen widths where a layout shifts to a new arrangement. Rather than using generic device sizes, we design custom breakpoints around your actual content, so layouts never feel cramped on one screen or oddly stretched on another."
      }
    },
    {
      "@type": "Question",
      "name": "Does responsive design affect SEO and Google rankings?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Google uses mobile-first indexing, meaning it primarily evaluates the mobile version of your site for ranking. A responsive site that performs well on mobile, with fast load times and a usable layout, directly supports better search visibility and conversions."
      }
    },
    {
      "@type": "Question",
      "name": "Will responsive design slow down my website on mobile?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, done correctly, it's the opposite. We pair responsive layouts with optimised, responsive images and lazy loading, so mobile visitors get a fast experience even on slower connections, rather than downloading a full desktop-sized page on a phone."
      }
    }
  ]
}
</script>
@endsection

@section('content')

<section class="services-page-hero">
    <div class="services-page-hero__bg" style="background-image: linear-gradient(90deg, rgba(0, 0, 0,.96) 0%, rgba(0, 0, 0,.78) 45%, rgba(0, 0, 0,.36) 100%), url('https://images.pexels.com/photos/6278755/pexels-photo-6278755.jpeg?auto=compress&cs=tinysrgb&w=2200'); background-size: cover; background-position: center;"></div>
    <div class="services-page-hero__overlay"></div>
    <div class="container">
        <div class="services-page-hero__content">
            <nav class="svc-breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <i class="fa-solid fa-chevron-right"></i>
                <span>Web Design</span>
                <i class="fa-solid fa-chevron-right"></i>
                <span>Responsive Design</span>
            </nav>
            <span class="services-page-kicker">Responsive Design</span>
            <h1>
                Pixel-perfect layouts on<br>
                every screen size
            </h1>
            <p>
                Mobile first designs that look and function flawlessly across smartphones, tablets,
                laptops, and large desktops, every breakpoint tested and perfected.
            </p>
            <div class="services-page-hero__actions">
                <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                    Get a Free Consultation
                    <i class="fa-solid fa-arrow-right"></i>
                </a>            </div>
        </div>
    </div>
</section>


<section class="services-premium-v2">
    <div class="container">

        <div class="services-v2-head">
            <span class="services-page-kicker">What's Included</span>
            <h2>
                One design, flawless on<br>
                every device.
            </h2>
            <p>
                Over 60% of your visitors are on mobile, every layout we design is built mobile first
                and scales up cleanly to tablet and desktop without losing impact.
            </p>
        </div>

        <div class="services-v2-layout">

            <a href="{{ route('contact_us') }}" class="service-feature-card">
                <div class="service-feature-img">
                    <img src="https://images.pexels.com/photos/6278758/pexels-photo-6278758.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Responsive website design across multiple devices" loading="lazy" decoding="async">
                </div>
                <div class="service-feature-content">
                    <span class="service-tag">Mobile First</span>
                    <h3>Cross Device Layouts</h3>
                    <p>
                        Every page is designed to adapt fluidly across smartphones, tablets, laptops, and
                        large desktops, with layouts, type, and spacing tuned for each breakpoint.
                    </p>
                    <div class="service-feature-points">
                        <span><i class="fa-solid fa-check"></i> Mobile, Tablet & Desktop Layouts</span>
                        <span><i class="fa-solid fa-check"></i> Fluid Grids & Flexible Images</span>
                        <span><i class="fa-solid fa-check"></i> Real-Device Testing</span>
                    </div>
                    <div class="service-card-action">
                        Start Responsive Project
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <div class="services-v2-stack">

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/33607948/pexels-photo-33607948.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Breakpoint testing across devices" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>01</span>
                        <h3>Breakpoint Optimisation</h3>
                        <p>Custom breakpoints designed around your content, not generic device sizes, so layouts never feel cramped or stretched.</p>
                    </div>
                </a>

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/8217311/pexels-photo-8217311.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Touch friendly mobile navigation design" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>02</span>
                        <h3>Touch-Friendly Navigation</h3>
                        <p>Mobile menus, buttons, and forms sized and spaced for real thumbs, no accidental taps, no frustrating pinch-to-zoom.</p>
                    </div>
                </a>

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/887751/pexels-photo-887751.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Fast loading responsive images" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>03</span>
                        <h3>Performance-Optimised Assets</h3>
                        <p>Responsive images and lazy loading so mobile visitors get a fast experience even on slower connections.</p>
                    </div>
                </a>

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/263564/pexels-photo-263564.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Cross browser device testing lab" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>04</span>
                        <h3>Cross-Browser & Device QA</h3>
                        <p>Tested on real iOS, Android, and desktop browsers, not just emulators, to catch layout issues before launch.</p>
                    </div>
                </a>

            </div>

        </div>

    </div>
</section>


<section class="services-feature services-feature-v2">
    <div class="container">
        <div class="why-choose-box">

            <div class="why-choose-content">
                <span class="services-page-kicker">Our Approach</span>
                <h2>
                    Designed for mobile, perfected everywhere
                </h2>
                <p>
                    We start every design on the smallest screen and scale up, ensuring no feature
                    or content is ever an afterthought on mobile.
                </p>
                <div class="why-choose-grid">
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-mobile-screen"></i></div>
                        <div>
                            <h3>Mobile-First Approach</h3>
                            <p>Every design starts on mobile and scales up beautifully, because over 60% of your visitors are on a smartphone.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-display"></i></div>
                        <div>
                            <h3>Every Breakpoint Tested</h3>
                            <p>From 320px phones to 4K monitors, layouts are checked at every major breakpoint, not just two or three.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-gauge-high"></i></div>
                        <div>
                            <h3>Performance Optimised</h3>
                            <p>Responsive doesn't mean heavy, optimised images and minimal code keep mobile load times fast.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                        <div>
                            <h3>100% Custom, No Templates</h3>
                            <p>Every layout is built from scratch to fit your content, never a generic responsive template.</p>
                        </div>
                    </div>
                </div>
                <div class="why-choose-actions">
                    <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                        Get a Free Consultation
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <div class="why-rating">
                        <div class="why-stars">
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span>5-star design portfolio, 40+ projects delivered</span>
                    </div>
                </div>
            </div>

            <div class="why-choose-visual">
                <img src="https://images.pexels.com/photos/54284/pexels-photo-54284.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Responsive layouts shown across phone tablet and laptop" loading="lazy" decoding="async">
                <div class="why-floating-card why-floating-card--top">
                    <strong>100%</strong>
                    <span>Mobile-First</span>
                </div>
                <div class="why-floating-card why-floating-card--bottom">
                    <strong>40+</strong>
                    <span>Responsive Builds</span>
                </div>
                <div class="why-tech-pill">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                    Figma, CSS3, Flexbox, Grid
                </div>
            </div>

        </div>
    </div>
</section>


<section class="services-process services-process-v2">
    <div class="container">

        <div class="workflow-head">
            <span class="services-page-kicker">Our Process</span>
            <h2>A structured responsive design process, mobile to desktop</h2>
            <p>
                A clear, collaborative process ensures your design works flawlessly on every
                device before it ever reaches your users.
            </p>
        </div>

        <div class="workflow-layout">

            <div class="workflow-visual">
                <img src="https://images.pexels.com/photos/50614/pexels-photo-50614.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Responsive design workflow across breakpoints" loading="lazy" decoding="async">
                <div class="workflow-visual-content">
                    <span>Our Responsive Flow</span>
                    <h3>Mobile, Tablet, Desktop, Test</h3>
                </div>
            </div>

            <div class="workflow-steps">

                <div class="workflow-step">
                    <div class="workflow-no">01</div>
                    <div class="workflow-content">
                        <span>Mobile Layout First</span>
                        <h3>Design the smallest screen experience first</h3>
                        <p>We start with the mobile layout to ensure every core feature and piece of content works on the smallest screens.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">02</div>
                    <div class="workflow-content">
                        <span>Scale to Tablet & Desktop</span>
                        <h3>Expand the layout for larger screens</h3>
                        <p>Layouts are adapted for tablet and desktop, using the extra space to enhance, not just stretch, the design.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">03</div>
                    <div class="workflow-content">
                        <span>Build & Implement</span>
                        <h3>Develop with fluid grids and flexible assets</h3>
                        <p>Responsive code built with fluid grids, flexible images, and CSS breakpoints matched exactly to the design.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">04</div>
                    <div class="workflow-content">
                        <span>Cross-Device QA</span>
                        <h3>Test on real devices before launch</h3>
                        <p>Final testing across real iOS, Android, and desktop browsers to catch any layout issues before going live.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>


<style>
.hd-faq{padding:80px 0;background:linear-gradient(180deg, rgba(20,141,255,.04), transparent);}
.hd-faq .hd-faq-inner{max-width:900px;margin:0 auto;padding:0 20px;}
.hd-faq h2{font-family:"Kanit", sans-serif;font-size:clamp(28px, 4vw, 40px);color:#fff;text-align:center;margin-bottom:14px;font-weight:700;}
.hd-faq .hd-faq-sub{text-align:center;color:rgba(255,255,255,.6);font-family:"Poppins", sans-serif;margin-bottom:40px;}
.hd-faq details{background:#171821;border:1px solid rgba(255,255,255,.08);border-radius:16px;margin-bottom:14px;padding:0 22px;transition:border-color .25s ease;}
.hd-faq details[open]{border-color:rgba(20,141,255,.5);}
.hd-faq summary{cursor:pointer;list-style:none;padding:22px 0;font-family:"Kanit", sans-serif;font-size:18px;font-weight:500;color:#fff;display:flex;justify-content:space-between;align-items:center;gap:16px;}
.hd-faq summary::-webkit-details-marker{display:none;}
.hd-faq summary::after{content:"+";font-size:26px;color:#148dff;font-weight:300;line-height:1;transition:transform .25s ease;}
.hd-faq details[open] summary::after{transform:rotate(45deg);}
.hd-faq details p{color:rgba(255,255,255,.7);font-family:"Poppins", sans-serif;font-size:15px;line-height:1.7;padding:0 0 24px;margin:0;}
</style>

<section class="hd-faq">
  <div class="hd-faq-inner">
    <h2>Responsive Design, Frequently Asked Questions</h2>
    <p class="hd-faq-sub">Answers to the questions US &amp; UK clients ask us most.</p>
      <details>
        <summary>What is responsive web design and why does it matter?</summary>
        <p>Responsive design means your website automatically adapts its layout, images, and text to fit any screen size, from a small smartphone to a large desktop monitor. Since over 60% of visitors browse on mobile, a site that isn't responsive loses visitors, conversions, and search rankings.</p>
      </details>
      <details>
        <summary>Which devices and browsers do you actually test on?</summary>
        <p>We test on real iOS, Android, and desktop browsers, not just emulators, to catch layout issues emulators often miss. Every major breakpoint is checked, from 320px phones up to 4K monitors, not just two or three common sizes.</p>
      </details>
      <details>
        <summary>What are breakpoints and how do you decide where to place them?</summary>
        <p>Breakpoints are the screen widths where a layout shifts to a new arrangement. Rather than using generic device sizes, we design custom breakpoints around your actual content, so layouts never feel cramped on one screen or oddly stretched on another.</p>
      </details>
      <details>
        <summary>Does responsive design affect SEO and Google rankings?</summary>
        <p>Yes. Google uses mobile-first indexing, meaning it primarily evaluates the mobile version of your site for ranking. A responsive site that performs well on mobile, with fast load times and a usable layout, directly supports better search visibility and conversions.</p>
      </details>
      <details>
        <summary>Will responsive design slow down my website on mobile?</summary>
        <p>No, done correctly, it's the opposite. We pair responsive layouts with optimised, responsive images and lazy loading, so mobile visitors get a fast experience even on slower connections, rather than downloading a full desktop-sized page on a phone.</p>
      </details>
  </div>
</section>

<section class="services-cta-section">
    <div class="container">
        <div class="services-cta-box">
            <div>
                <span class="services-page-kicker">Let's Build</span>
                <h2>Ready for a website that looks perfect on every device?</h2>
            </div>
            <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                Get a Free Consultation
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection
