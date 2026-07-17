@extends('frontend.layout')

@section('title', 'UI/UX Design Services | Wireframes, Prototypes & Design Systems')
@section('meta_description', 'Professional UI/UX design services, user research, wireframes, interactive prototypes, and design systems that reduce friction and maximise conversions.')
@section('meta_keywords', 'UI UX design services, user interface design, user experience design, wireframes, interactive prototypes, design systems, Figma design, conversion focused design')

@section('styles')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "UI/UX Design",
      "serviceType": "UI/UX Design",
      "provider": {
        "@id": "https://dapperstech.com/#organization",
        "@type": "Organization",
        "name": "DappersTech IT Services",
        "url": "https://dapperstech.com"
      },
      "description": "Intuitive and visually engaging interfaces built on real user research, wireframes, interactive prototypes, and design systems that reduce friction and maximise conversions.",
      "areaServed": "Worldwide",
      "url": "https://dapperstech.com/services/web-design/ui-ux-design"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://dapperstech.com/"},
        {"@type": "ListItem", "position": 2, "name": "Services", "item": "https://dapperstech.com/services"},
        {"@type": "ListItem", "position": 3, "name": "Web Design", "item": "https://dapperstech.com/services/web-design"},
        {"@type": "ListItem", "position": 4, "name": "UI/UX Design", "item": "https://dapperstech.com/services/web-design/ui-ux-design"}
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
      "name": "What's the difference between UI design and UX design?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "UX design is the research and structure behind a product, user personas, journey maps, and wireframes that define how it should work. UI design is the visual layer built on top, colours, typography, and components. We handle both, starting with research so the visuals are never just decoration."
      }
    },
    {
      "@type": "Question",
      "name": "Do you build wireframes and prototypes before the final design?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Every project starts with low-fidelity wireframes that map the user journey and information architecture, then moves into high-fidelity, clickable Figma prototypes. This lets you test flows and gather feedback before a single line of code is written."
      }
    },
    {
      "@type": "Question",
      "name": "Do you run usability testing on the designs?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We run real user testing sessions on our interactive prototypes to uncover friction points and validate flows before handoff to development, so design decisions are backed by evidence rather than opinion."
      }
    },
    {
      "@type": "Question",
      "name": "What is a design system and do I need one?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A design system is a reusable library of components, colour palettes, and typography rules that keeps every screen consistent as your product grows. It's especially valuable if you have multiple pages or plan to keep adding features, since it speeds up future design and development work."
      }
    },
    {
      "@type": "Question",
      "name": "How does UI/UX design improve conversions?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Every wireframe, prototype, and interaction we design is built to reduce friction and guide users toward the action that matters, whether that's a purchase, a signup, or a contact form. Research-backed, tested design consistently outperforms designs built on guesswork."
      }
    }
  ]
}
</script>
@endsection

@section('content')

<section class="services-page-hero">
    <div class="services-page-hero__bg" style="background-image: linear-gradient(90deg, rgba(0, 0, 0,.96) 0%, rgba(0, 0, 0,.78) 45%, rgba(0, 0, 0,.36) 100%), url('https://images.pexels.com/photos/196644/pexels-photo-196644.jpeg?auto=compress&cs=tinysrgb&w=2200'); background-size: cover; background-position: center;"></div>
    <div class="services-page-hero__overlay"></div>
    <div class="container">
        <div class="services-page-hero__content">
            <nav class="svc-breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <i class="fa-solid fa-chevron-right"></i>
                <span>Web Design</span>
                <i class="fa-solid fa-chevron-right"></i>
                <span>UI/UX Design</span>
            </nav>
            <span class="services-page-kicker">UI/UX Design</span>
            <h1>
                Intuitive interfaces that<br>
                keep users engaged and convert
            </h1>
            <p>
                User research, wireframes, interactive prototypes, and design systems
                that reduce friction and turn visitors into customers.
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
                Research-led design.<br>
                Every screen built to convert.
            </h2>
            <p>
                We don't guess what users want, we research it, design for it, and validate it
                with real prototypes before a single line of code is written.
            </p>
        </div>

        <div class="services-v2-layout">

            <a href="{{ route('contact_us') }}" class="service-feature-card">
                <div class="service-feature-img">
                    <img src="https://images.pexels.com/photos/196646/pexels-photo-196646.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="UI UX design wireframes and prototypes on screen" loading="lazy" decoding="async">
                </div>
                <div class="service-feature-content">
                    <span class="service-tag">Most Requested</span>
                    <h3>User Research & Wireframes</h3>
                    <p>
                        We study your audience, their goals, and pain points, then translate findings into
                        low-fidelity wireframes that map out a clear, frictionless user journey.
                    </p>
                    <div class="service-feature-points">
                        <span><i class="fa-solid fa-check"></i> User Personas & Journey Maps</span>
                        <span><i class="fa-solid fa-check"></i> Low-Fidelity Wireframes</span>
                        <span><i class="fa-solid fa-check"></i> Information Architecture</span>
                    </div>
                    <div class="service-card-action">
                        Start UI/UX Project
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <div class="services-v2-stack">

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/196645/pexels-photo-196645.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Interactive prototype on screen" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>01</span>
                        <h3>Interactive Prototypes</h3>
                        <p>Clickable Figma prototypes that simulate the real product, letting you test flows and gather feedback before development begins.</p>
                    </div>
                </a>

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/326514/pexels-photo-326514.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Design system component library" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>02</span>
                        <h3>Design Systems & Style Guides</h3>
                        <p>Reusable component libraries, colour palettes, and typography rules that keep every screen consistent as your product scales.</p>
                    </div>
                </a>

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/273230/pexels-photo-273230.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Usability testing session" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>03</span>
                        <h3>Usability Testing</h3>
                        <p>Real user testing sessions to validate flows, uncover friction points, and refine the design before it ever reaches development.</p>
                    </div>
                </a>

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/6289025/pexels-photo-6289025.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Accessibility focused UI design" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>04</span>
                        <h3>Accessibility-First UI</h3>
                        <p>Designs built to WCAG guidelines, readable contrast, keyboard navigation, and screen-reader friendly structure for every user.</p>
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
                <span class="services-page-kicker">Our Design Philosophy</span>
                <h2>
                    Design that goes beyond aesthetics, built to convert
                </h2>
                <p>
                    Every wireframe, prototype, and interaction is intentional, designed to guide users
                    towards the action that matters most to your business.
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
                            <p>Every design starts on mobile and scales up beautifully, because over 60% of your visitors are on a smartphone.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                        <div>
                            <h3>100% Custom, No Templates</h3>
                            <p>Every interface is built from scratch to reflect your unique brand identity, values, and business objectives.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-gauge-high"></i></div>
                        <div>
                            <h3>Validated, Not Guessed</h3>
                            <p>Prototypes are tested with real users before handoff, so design decisions are backed by evidence, not opinion.</p>
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
                <img src="https://images.pexels.com/photos/326518/pexels-photo-326518.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Designer working on UI UX design on screen" loading="lazy" decoding="async">
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
                    Figma, Adobe XD, Maze, Hotjar
                </div>
            </div>

        </div>
    </div>
</section>


<section class="services-process services-process-v2">
    <div class="container">

        <div class="workflow-head">
            <span class="services-page-kicker">Design Process</span>
            <h2>A structured UI/UX process from research to handoff</h2>
            <p>
                Great UX is not accidental, it follows a clear, collaborative process grounded
                in research and validated with real users at every stage.
            </p>
        </div>

        <div class="workflow-layout">

            <div class="workflow-visual">
                <img src="https://images.pexels.com/photos/907489/pexels-photo-907489.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="UX research and wireframing workflow" loading="lazy" decoding="async">
                <div class="workflow-visual-content">
                    <span>Our UX Flow</span>
                    <h3>Research, Wireframe, Prototype, Test</h3>
                </div>
            </div>

            <div class="workflow-steps">

                <div class="workflow-step">
                    <div class="workflow-no">01</div>
                    <div class="workflow-content">
                        <span>Discovery & Research</span>
                        <h3>Understand your users, goals, and competitors</h3>
                        <p>User interviews, competitor audits, and a review of analytics data to uncover what's working and what's causing friction.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">02</div>
                    <div class="workflow-content">
                        <span>Wireframing & Structure</span>
                        <h3>Map out the user journey and page layouts</h3>
                        <p>Low-fidelity wireframes and user flow diagrams establish the structure and logic of every screen before visual design begins.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">03</div>
                    <div class="workflow-content">
                        <span>Prototyping</span>
                        <h3>Build interactive, clickable prototypes</h3>
                        <p>High-fidelity Figma prototypes that simulate real interactions, ready for stakeholder review and usability testing.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">04</div>
                    <div class="workflow-content">
                        <span>Testing & Handoff</span>
                        <h3>Validate with users, then deliver dev-ready files</h3>
                        <p>Usability testing refines the design, then a fully documented Figma file and design system is handed off to development.</p>
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
    <h2>UI/UX Design, Frequently Asked Questions</h2>
    <p class="hd-faq-sub">Answers to the questions US &amp; UK clients ask us most.</p>
      <details>
        <summary>What's the difference between UI design and UX design?</summary>
        <p>UX design is the research and structure behind a product, user personas, journey maps, and wireframes that define how it should work. UI design is the visual layer built on top, colours, typography, and components. We handle both, starting with research so the visuals are never just decoration.</p>
      </details>
      <details>
        <summary>Do you build wireframes and prototypes before the final design?</summary>
        <p>Yes. Every project starts with low-fidelity wireframes that map the user journey and information architecture, then moves into high-fidelity, clickable Figma prototypes. This lets you test flows and gather feedback before a single line of code is written.</p>
      </details>
      <details>
        <summary>Do you run usability testing on the designs?</summary>
        <p>Yes. We run real user testing sessions on our interactive prototypes to uncover friction points and validate flows before handoff to development, so design decisions are backed by evidence rather than opinion.</p>
      </details>
      <details>
        <summary>What is a design system and do I need one?</summary>
        <p>A design system is a reusable library of components, colour palettes, and typography rules that keeps every screen consistent as your product grows. It's especially valuable if you have multiple pages or plan to keep adding features, since it speeds up future design and development work.</p>
      </details>
      <details>
        <summary>How does UI/UX design improve conversions?</summary>
        <p>Every wireframe, prototype, and interaction we design is built to reduce friction and guide users toward the action that matters, whether that's a purchase, a signup, or a contact form. Research-backed, tested design consistently outperforms designs built on guesswork.</p>
      </details>
  </div>
</section>

<section class="services-cta-section">
    <div class="container">
        <div class="services-cta-box">
            <div>
                <span class="services-page-kicker">Let's Design</span>
                <h2>Ready to create an interface your users will love?</h2>
            </div>
            <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                Get a Free Consultation
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection
