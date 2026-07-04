@extends('frontend.layout')

@section('title', $category?->meta_title ?? 'Web Design Services | UI/UX, Custom Design & Branding')
@section('meta_description', $category?->meta_description ?? 'Creative & conversion-focused web design services - UI/UX design, Figma to HTML, custom website design, landing pages, website redesign, graphic design & branding. Mobile-first. SEO-ready.')
@section('meta_keywords', $category?->meta_keywords ?? 'web design services, UI UX design, Figma to HTML, custom website design, landing page design, website redesign, graphic design, branding, responsive web design Pakistan')

@section('styles')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Web Design Services",
      "serviceType": "Web Design",
      "provider": {
        "@type": "Organization",
        "name": "DappersTech IT Services",
        "url": "https://dapperstech.com"
      },
      "description": "Creative and conversion-focused web design services including UI/UX design, Figma to HTML, custom website design, landing pages, website redesign, graphic design and branding.",
      "areaServed": "Worldwide",
      "url": "https://dapperstech.com/services/web-design"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://dapperstech.com/"},
        {"@type": "ListItem", "position": 2, "name": "Services", "item": "https://dapperstech.com/services"},
        {"@type": "ListItem", "position": 3, "name": "Web Design", "item": "https://dapperstech.com/services/web-design"}
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
      "name": "What does your web design process look like from start to finish?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We start with discovery and a creative brief, move into wireframes that map the user journey, then build full visual designs in Figma. Once approved, we hand off pixel-perfect HTML/CSS or work directly with your dev team. Every project follows this same structured flow, from brief to beautiful."
      }
    },
    {
      "@type": "Question",
      "name": "How many design revisions are included in a web design project?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Revisions are scoped per project, but our process is built around feedback loops at the wireframe and visual design stages, so changes happen early when they're cheap to make rather than after development. We work with you until the design meets your expectations before any code is written."
      }
    },
    {
      "@type": "Question",
      "name": "What design tools do you use for web design projects?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We design primarily in Figma, with Adobe XD and Illustrator for specific branding and graphic work. Final designs are delivered as documented Figma files with all assets, or coded directly into clean, responsive HTML/CSS - whichever fits your workflow."
      }
    },
    {
      "@type": "Question",
      "name": "What's included in a complete web design package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A typical package covers UI/UX design, custom branding and graphic design, and fully responsive layouts across mobile, tablet, and desktop. Every design is 100% custom - never a recycled template - and built mobile-first since over 60% of visitors browse on a smartphone."
      }
    },
    {
      "@type": "Question",
      "name": "How long does a website design project take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Timelines depend on scope - a landing page moves faster than a full multi-page redesign with custom branding. Our four-stage process (discovery, wireframing, visual design, handoff) keeps projects on track, and we'll give you a clear timeline estimate during your free consultation."
      }
    }
  ]
}
</script>
@endsection

@section('content')

<section class="services-page-hero">
    <div class="services-page-hero__bg" style="background-image: linear-gradient(90deg, rgba(0,0,0,.96) 0%, rgba(0,0,0,.78) 45%, rgba(0,0,0,.36) 100%), url('https://images.pexels.com/photos/7971543/pexels-photo-7971543.jpeg?auto=compress&cs=tinysrgb&w=2200'); background-size: cover; background-position: center;"></div>
    <div class="services-page-hero__overlay"></div>
    <div class="container">
        <div class="services-page-hero__content">
            <nav class="svc-breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="{{ route('services') }}">Services</a>
                <i class="fa-solid fa-chevron-right"></i>
                <span>Web Design</span>
            </nav>
            <span class="services-page-kicker">Web Design</span>
            <h1>
                {{ $category?->title ?? 'Creative & conversion-focused web design that turns visitors into customers' }}
            </h1>
            <p>
                UI/UX design, Figma to HTML, landing pages, custom branding, and responsive design - beautiful websites built to engage users and drive real business results.
            </p>
            <div class="services-page-hero__actions">
                <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                    Get a Free Consultation
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="https://malikbilal.com" target="_blank" rel="noopener" class="services-page-btn services-page-btn--outline">
                    View Portfolio
                </a>
            </div>
        </div>
    </div>
</section>


<section class="services-premium-v2">
    <div class="container">

        <div class="services-v2-head">
            <span class="services-page-kicker">Design Services</span>
            <h2>
                {{ $category?->service->count() ?? 8 }} web design specialisations.<br>
                Every pixel purposeful.
            </h2>
            <p>
                From intuitive UI/UX flows and Figma-to-code conversions to high-converting landing pages
                and premium brand identities - we design websites that look stunning and perform even better.
            </p>
        </div>

        @include('frontend.partials.dynamic-service-cards', ['services' => $category?->service ?? collect()])

    </div>
</section>


<section class="services-feature services-feature-v2">
    <div class="container">
        <div class="why-choose-box">

            <div class="why-choose-content">
                <span class="services-page-kicker">Our Design Philosophy</span>
                <h2>
                    Design that goes beyond aesthetics - built to convert
                </h2>
                <p>
                    We combine creativity with UX/UI best practices to create websites that do not just look great
                    but actively guide visitors towards becoming customers. Every design decision is intentional.
                </p>
                <div class="why-choose-grid">
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-users"></i></div>
                        <div>
                            <h3>User-Centric Strategy</h3>
                            <p>Research-backed designs that understand your audience, their goals, and the journey they take from first visit to conversion.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-mobile-screen"></i></div>
                        <div>
                            <h3>Mobile-First Approach</h3>
                            <p>Every design starts on mobile and scales up beautifully - because over 60% of your visitors are on a smartphone.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                        <div>
                            <h3>100% Custom, No Templates</h3>
                            <p>Every design is built from scratch to reflect your unique brand identity, values, and business objectives - never a recycled template.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-gauge-high"></i></div>
                        <div>
                            <h3>Performance Optimised</h3>
                            <p>Designs coded for speed - optimised images, minimal dependencies, and clean markup that scores high on PageSpeed and Core Web Vitals.</p>
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
                        <span>5-star design portfolio · 40+ projects delivered</span>
                    </div>
                </div>
            </div>

            <div class="why-choose-visual">
                <img src="https://images.pexels.com/photos/4623079/pexels-photo-4623079.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Web designer creating custom UI UX design on screen" loading="lazy" decoding="async">
                <div class="why-floating-card why-floating-card--top">
                    <strong>100%</strong>
                    <span>Custom Design</span>
                </div>
                <div class="why-floating-card why-floating-card--bottom">
                    <strong>40+</strong>
                    <span>Designs Delivered</span>
                </div>
                <div class="why-tech-pill">
                    <i class="fa-solid fa-palette"></i>
                    Figma · Adobe XD · Illustrator · CSS3
                </div>
            </div>

        </div>
    </div>
</section>


<section class="services-process services-process-v2">
    <div class="container">

        <div class="workflow-head">
            <span class="services-page-kicker">Design Process</span>
            <h2>A structured design process from brief to beautiful</h2>
            <p>
                Great design is not accidental - it follows a clear, collaborative process.
                We work closely with you at every stage to ensure the final product exceeds your expectations.
            </p>
        </div>

        <div class="workflow-layout">

            <div class="workflow-visual">
                <img src="https://images.pexels.com/photos/16323439/pexels-photo-16323439.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Design process wireframing and prototyping workflow" loading="lazy" decoding="async">
                <div class="workflow-visual-content">
                    <span>Our Design Flow</span>
                    <h3>Brief · Wireframe · Design · Deliver</h3>
                </div>
            </div>

            <div class="workflow-steps">

                <div class="workflow-step">
                    <div class="workflow-no">01</div>
                    <div class="workflow-content">
                        <span>Discovery & Brief</span>
                        <h3>Understand your brand, audience, and goals</h3>
                        <p>We begin with a deep-dive into your brand identity, target audience, competitors, and design preferences to create a clear creative brief.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">02</div>
                    <div class="workflow-content">
                        <span>Wireframing & Structure</span>
                        <h3>Map out the user journey and page layouts</h3>
                        <p>Low-fidelity wireframes and user flow diagrams establish the structure and logic of every page before a single pixel of design is created.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">03</div>
                    <div class="workflow-content">
                        <span>Visual Design</span>
                        <h3>Create the full visual design and prototype</h3>
                        <p>High-fidelity Figma designs with your brand colours, typography, and imagery - interactive prototypes for review and approval before development.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">04</div>
                    <div class="workflow-content">
                        <span>Handoff & Development</span>
                        <h3>Pixel-perfect code delivery with full assets</h3>
                        <p>Clean, responsive HTML/CSS code from your approved designs - or handoff to your dev team with a fully documented Figma file and all design assets.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>


<style>
.hd-faq{padding:80px 0;background:linear-gradient(180deg,rgba(20,141,255,.04),transparent);}
.hd-faq .hd-faq-inner{max-width:900px;margin:0 auto;padding:0 20px;}
.hd-faq h2{font-family:"Kanit",sans-serif;font-size:clamp(28px,4vw,40px);color:#fff;text-align:center;margin-bottom:14px;font-weight:700;}
.hd-faq .hd-faq-sub{text-align:center;color:rgba(255,255,255,.6);font-family:"Poppins",sans-serif;margin-bottom:40px;}
.hd-faq details{background:#171821;border:1px solid rgba(255,255,255,.08);border-radius:16px;margin-bottom:14px;padding:0 22px;transition:border-color .25s ease;}
.hd-faq details[open]{border-color:rgba(20,141,255,.5);}
.hd-faq summary{cursor:pointer;list-style:none;padding:22px 0;font-family:"Kanit",sans-serif;font-size:18px;font-weight:500;color:#fff;display:flex;justify-content:space-between;align-items:center;gap:16px;}
.hd-faq summary::-webkit-details-marker{display:none;}
.hd-faq summary::after{content:"+";font-size:26px;color:#148dff;font-weight:300;line-height:1;transition:transform .25s ease;}
.hd-faq details[open] summary::after{transform:rotate(45deg);}
.hd-faq details p{color:rgba(255,255,255,.7);font-family:"Poppins",sans-serif;font-size:15px;line-height:1.7;padding:0 0 24px;margin:0;}
</style>

<section class="hd-faq">
  <div class="hd-faq-inner">
    <h2>Web Design - Frequently Asked Questions</h2>
    <p class="hd-faq-sub">Answers to the questions US &amp; UK clients ask us most.</p>
      <details>
        <summary>What does your web design process look like from start to finish?</summary>
        <p>We start with discovery and a creative brief, move into wireframes that map the user journey, then build full visual designs in Figma. Once approved, we hand off pixel-perfect HTML/CSS or work directly with your dev team. Every project follows this same structured flow, from brief to beautiful.</p>
      </details>
      <details>
        <summary>How many design revisions are included in a web design project?</summary>
        <p>Revisions are scoped per project, but our process is built around feedback loops at the wireframe and visual design stages, so changes happen early when they're cheap to make rather than after development. We work with you until the design meets your expectations before any code is written.</p>
      </details>
      <details>
        <summary>What design tools do you use for web design projects?</summary>
        <p>We design primarily in Figma, with Adobe XD and Illustrator for specific branding and graphic work. Final designs are delivered as documented Figma files with all assets, or coded directly into clean, responsive HTML/CSS - whichever fits your workflow.</p>
      </details>
      <details>
        <summary>What's included in a complete web design package?</summary>
        <p>A typical package covers UI/UX design, custom branding and graphic design, and fully responsive layouts across mobile, tablet, and desktop. Every design is 100% custom - never a recycled template - and built mobile-first since over 60% of visitors browse on a smartphone.</p>
      </details>
      <details>
        <summary>How long does a website design project take?</summary>
        <p>Timelines depend on scope - a landing page moves faster than a full multi-page redesign with custom branding. Our four-stage process (discovery, wireframing, visual design, handoff) keeps projects on track, and we'll give you a clear timeline estimate during your free consultation.</p>
      </details>
  </div>
</section>

<section class="services-cta-section">
    <div class="container">
        <div class="services-cta-box">
            <div>
                <span class="services-page-kicker">Let's Design</span>
                <h2>Ready to create a website design that captivates your audience and drives growth?</h2>
            </div>
            <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                Get a Free Consultation
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection
