@extends('frontend.layout')

@section('title', $category?->meta_title ?? 'Web Development Services | Custom Websites & SaaS Platforms')
@section('meta_description', $category?->meta_description ?? 'Professional web development services - custom websites, SaaS platforms, backend APIs, and e-commerce solutions. Laravel & Vue.js experts. Full code ownership. Get a free quote today.')
@section('meta_keywords', $category?->meta_keywords ?? 'web development services, custom website development, Laravel development, SaaS development company, web application development, backend development Pakistan, hire web developer')

@section('styles')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Web Development Services",
      "serviceType": "Web Development",
      "provider": {
        "@type": "Organization",
        "name": "DapperSolutions IT Services",
        "url": "https://dappersolution.com",
        "foundingDate": "2017",
        "founder": {"@type": "Person", "name": "Bilal Malik", "url": "https://malikbilal.com"}
      },
      "description": "Professional web development services including custom websites, SaaS platforms, backend APIs, e-commerce solutions, and admin panels - delivered with Laravel, Vue.js, and MySQL.",
      "areaServed": "Worldwide",
      "url": "https://dappersolution.com/services/web-development",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Web Development Packages",
        "itemListElement": [
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Custom Website Development"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "SaaS Platform Development"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Backend API Development"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "E-commerce Development"}}
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://dappersolution.com/"},
        {"@type": "ListItem", "position": 2, "name": "Services", "item": "https://dappersolution.com/services"},
        {"@type": "ListItem", "position": 3, "name": "Web Development", "item": "https://dappersolution.com/services/web-development"}
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
      "name": "How long does a custom web development project take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A marketing website typically takes 3-5 weeks, a SaaS platform or web application 8-16 weeks, and backend APIs or admin panels 4-8 weeks depending on scope. We confirm an exact timeline during discovery, before any milestone is agreed."
      }
    },
    {
      "@type": "Question",
      "name": "How is the cost of a web development project structured?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Every project is quoted in milestones tied to deliverables, not hourly billing. You know the total cost upfront, you pay as each milestone is completed and approved, and there are no surprise invoices along the way."
      }
    },
    {
      "@type": "Question",
      "name": "What technology stack do you build with?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our core stack is Laravel, Vue.js, and MySQL, with Stripe for payments - chosen because it is production-proven, well-documented, and easy for any future developer to maintain. We adapt the stack (PHP frameworks, specific databases, third-party APIs) to fit your specific requirements."
      }
    },
    {
      "@type": "Question",
      "name": "Do I own the code after the project is delivered?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Full code ownership transfers to you on delivery - there is no vendor lock-in, no proprietary platform, and no licensing fees. You receive the complete, documented source code and can take it to any developer or hosting provider you choose."
      }
    },
    {
      "@type": "Question",
      "name": "Do you offer support after the website or platform goes live?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Every project includes post-launch support with a 24-hour response time on questions or issues. We also offer ongoing maintenance plans for security patches, performance monitoring, and feature updates once you're live."
      }
    }
  ]
}
</script>
@endsection

@section('content')

<section class="services-page-hero">
    <div class="services-page-hero__bg" style="background-image: linear-gradient(90deg, rgba(0,0,0,.96) 0%, rgba(0,0,0,.78) 45%, rgba(0,0,0,.38) 100%), url('https://images.pexels.com/photos/6804610/pexels-photo-6804610.jpeg?auto=compress&cs=tinysrgb&w=2200'); background-size: cover; background-position: center;"></div>
    <div class="services-page-hero__overlay"></div>
    <div class="container">
        <div class="services-page-hero__content">
            <nav class="svc-breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="{{ route('services') }}">Services</a>
                <i class="fa-solid fa-chevron-right"></i>
                <span>Web Development</span>
            </nav>
            <span class="services-page-kicker">Web Development</span>
            <h1>
                {{ $category?->title ?? 'Expert web development services built to scale and perform' }}
            </h1>
            <p>
                Custom websites, SaaS platforms, backend APIs, and admin panels - designed with precision
                and delivered with milestones and full code ownership since 2017.
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
            <span class="services-page-kicker">What We Build</span>
            <h2>
                {{ $category?->service->count() ?? 7 }} web development specialisations.<br>
                40+ production systems delivered.
            </h2>
            <p>
                From high-performance marketing websites and multi-tenant SaaS platforms to complex backend APIs
                and e-commerce solutions - every project delivered with full code ownership.
            </p>
        </div>

        @include('frontend.partials.dynamic-service-cards', ['services' => $category?->service ?? collect()])

    </div>
</section>


<section class="services-feature services-feature-v2">
    <div class="container">
        <div class="why-choose-box">

            <div class="why-choose-content">
                <span class="services-page-kicker">Why Choose Us</span>
                <h2>
                    We build websites that work as hard as your business does
                </h2>
                <p>
                    Every website we build is engineered for speed, security, and conversions - not just aesthetics.
                    With 7+ years of production experience, we anticipate problems before they cost you money.
                </p>
                <div class="why-choose-grid">
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-bolt"></i></div>
                        <div>
                            <h3>Performance-First Development</h3>
                            <p>Optimised for Google Core Web Vitals, sub-2s load times, and smooth UX - engineered in, not patched on after.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-shield-halved"></i></div>
                        <div>
                            <h3>Security by Default</h3>
                            <p>CSRF protection, SQL injection prevention, XSS sanitisation, and HTTPS enforced on every project we deliver.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-code-branch"></i></div>
                        <div>
                            <h3>Clean, Maintainable Code</h3>
                            <p>You own the code. We write it cleanly, document it clearly, and hand it over - no lock-in, no surprises.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-headset"></i></div>
                        <div>
                            <h3>24h Response & Ongoing Support</h3>
                            <p>Questions answered within 24 hours. Post-launch support included. We treat every project as a long-term partnership.</p>
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
                        <span>5-star Upwork rating · 40+ systems shipped</span>
                    </div>
                </div>
            </div>

            <div class="why-choose-visual">
                <img src="https://images.pexels.com/photos/6804080/pexels-photo-6804080.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Web developer working on laptop with multiple code screens" loading="lazy" decoding="async">
                <div class="why-floating-card why-floating-card--top">
                    <strong>40+</strong>
                    <span>Sites Shipped</span>
                </div>
                <div class="why-floating-card why-floating-card--bottom">
                    <strong>7+</strong>
                    <span>Years Experience</span>
                </div>
                <div class="why-tech-pill">
                    <i class="fa-solid fa-code"></i>
                    Laravel · Vue.js · MySQL · Stripe
                </div>
            </div>

        </div>
    </div>
</section>


<section class="services-process services-process-v2">
    <div class="container">

        <div class="workflow-head">
            <span class="services-page-kicker">Our Process</span>
            <h2>From concept to live website - a clear, structured process</h2>
            <p>
                No surprises, no scope creep. Every web development project follows our proven 4-stage workflow
                so you always know exactly what is happening and when your site will be ready.
            </p>
        </div>

        <div class="workflow-layout">

            <div class="workflow-visual">
                <img src="https://images.pexels.com/photos/7988115/pexels-photo-7988115.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Web development process planning and wireframing" loading="lazy" decoding="async">
                <div class="workflow-visual-content">
                    <span>How We Work</span>
                    <h3>Discovery · Design · Code · Launch</h3>
                </div>
            </div>

            <div class="workflow-steps">

                <div class="workflow-step">
                    <div class="workflow-no">01</div>
                    <div class="workflow-content">
                        <span>Discovery</span>
                        <h3>Understand your business and technical goals</h3>
                        <p>We review your business model, target audience, competitor sites, and technical requirements before writing a single line of code.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">02</div>
                    <div class="workflow-content">
                        <span>Design & Architecture</span>
                        <h3>UI/UX design and database architecture</h3>
                        <p>Wireframes, user flows, page structure, database schema, and premium UI design - all approved before development starts.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">03</div>
                    <div class="workflow-content">
                        <span>Development</span>
                        <h3>Build, integrate, and rigorously test</h3>
                        <p>Frontend, backend, APIs, admin panels, and integrations - developed with clean code, cross-browser tested, and performance optimised.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">04</div>
                    <div class="workflow-content">
                        <span>Launch & Support</span>
                        <h3>Deploy, monitor, and continuously improve</h3>
                        <p>Production deployment on your server, SEO configuration, post-launch monitoring, and ongoing support to keep your site fast and secure.</p>
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
    <h2>Web Development - Frequently Asked Questions</h2>
    <p class="hd-faq-sub">Answers to the questions US &amp; UK clients ask us most.</p>
      <details>
        <summary>How long does a custom web development project take?</summary>
        <p>A marketing website typically takes 3-5 weeks, a SaaS platform or web application 8-16 weeks, and backend APIs or admin panels 4-8 weeks depending on scope. We confirm an exact timeline during discovery, before any milestone is agreed.</p>
      </details>
      <details>
        <summary>How is the cost of a web development project structured?</summary>
        <p>Every project is quoted in milestones tied to deliverables, not hourly billing. You know the total cost upfront, you pay as each milestone is completed and approved, and there are no surprise invoices along the way.</p>
      </details>
      <details>
        <summary>What technology stack do you build with?</summary>
        <p>Our core stack is Laravel, Vue.js, and MySQL, with Stripe for payments - chosen because it is production-proven, well-documented, and easy for any future developer to maintain. We adapt the stack (PHP frameworks, specific databases, third-party APIs) to fit your specific requirements.</p>
      </details>
      <details>
        <summary>Do I own the code after the project is delivered?</summary>
        <p>Yes. Full code ownership transfers to you on delivery - there is no vendor lock-in, no proprietary platform, and no licensing fees. You receive the complete, documented source code and can take it to any developer or hosting provider you choose.</p>
      </details>
      <details>
        <summary>Do you offer support after the website or platform goes live?</summary>
        <p>Yes. Every project includes post-launch support with a 24-hour response time on questions or issues. We also offer ongoing maintenance plans for security patches, performance monitoring, and feature updates once you're live.</p>
      </details>
  </div>
</section>

<section class="services-cta-section">
    <div class="container">
        <div class="services-cta-box">
            <div>
                <span class="services-page-kicker">Start Building</span>
                <h2>Ready to build a website that actually works for your business?</h2>
            </div>
            <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                Get a Free Consultation
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection
