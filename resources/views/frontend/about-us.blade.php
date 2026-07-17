@extends('frontend.layout')

@section('title', 'About DappersTech | Software House in Rawalpindi, Pakistan')
@section('meta_description', 'DappersTech is a premium software house in Rawalpindi, Pakistan providing web development, custom software, UI/UX design, ecommerce, SEO, APIs, cloud and automation solutions.')
@section('meta_keywords', 'about DappersTech, software house in Rawalpindi, software house Rawalpindi, software development company, IT services company, web development, custom software, UI UX design, ecommerce development, API development, cloud solutions')

@section('styles')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "AboutPage",
      "name": "About DappersTech",
      "url": "https://dapperstech.com/aboutus",
      "description": "DappersTech is a premium IT services and software development company providing web development, custom software, UI/UX design, ecommerce, SEO, APIs, cloud and automation solutions.",
      "mainEntity": {
        "@id": "https://dapperstech.com/#organization",
        "@type": ["Organization", "ProfessionalService"],
        "name": "DappersTech IT Services",
        "alternateName": "DappersTech Software House",
        "url": "https://dapperstech.com",
        "foundingDate": "2017",
        "founder": {"@type": "Person", "name": "Bilal Malik", "url": "https://malikbilal.com"},
        "description": "Software house in Rawalpindi, Pakistan helping businesses build premium websites, ecommerce platforms, custom dashboards, APIs, automation systems, and digital growth solutions.",
        "telephone": "+92-51-6125246",
        "email": "info@dapperstech.com",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Mid City Mall, Rehmanabad, Murree Road",
          "addressLocality": "Rawalpindi",
          "addressRegion": "Punjab",
          "postalCode": "46000",
          "addressCountry": "PK"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": "33.6352256",
          "longitude": "73.0739544"
        }
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://dapperstech.com/"},
        {"@type": "ListItem", "position": 2, "name": "About Us", "item": "https://dapperstech.com/aboutus"}
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
      "name": "Where is DappersTech located?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "DappersTech is a software house based in Rawalpindi, Pakistan, at Mid City Mall, Rehmanabad, Murree Road. We work with clients in Rawalpindi, Islamabad, and worldwide, both on-site and remotely."
      }
    },
    {
      "@type": "Question",
      "name": "What does DappersTech actually do?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "DappersTech is a software house and IT services company. We build websites, ecommerce platforms, custom dashboards, APIs, AI integrations, and automation systems for startups, service businesses, and growing companies."
      }
    },
    {
      "@type": "Question",
      "name": "How long has DappersTech been in business?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "DappersTech has been delivering software and IT services since 2017 - over 9 years of production experience across web development, custom software, and digital growth projects."
      }
    },
    {
      "@type": "Question",
      "name": "What industries or business sizes do you work with?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We work with startups, service companies, ecommerce brands, and growing businesses across a range of industries. Our projects range from single-page marketing sites to complex multi-tenant SaaS platforms."
      }
    },
    {
      "@type": "Question",
      "name": "Do you only build websites, or also custom software?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Both. Alongside websites and ecommerce stores, we build custom dashboards, backend APIs, AI-powered features, and workflow automation - anything that needs to function as real software, not just a page."
      }
    },
    {
      "@type": "Question",
      "name": "What happens after my project launches?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Every project includes post-launch support - monitoring, updates, performance improvements, and new features as your business grows. We treat each engagement as a long-term partnership, not a one-off handoff."
      }
    }
  ]
}
</script>
@endsection

@section('content')

<section class="about-editorial-hero">
    <div class="container">
        <div class="about-editorial-grid">

            <div class="about-editorial-left">
                <span class="about-label">About DappersTech</span>

                <h1>
                    We design and build digital systems that help businesses move forward.
                </h1>
            </div>

            <div class="about-editorial-right">
                <p>
                    DappersTech is a software house in Rawalpindi, Pakistan helping businesses build premium
                    websites, ecommerce platforms, custom dashboards, APIs, automation systems,
                    and digital growth solutions for clients locally and worldwide.
                </p>

                <div class="about-editorial-actions">
                    <a href="{{ route('contact_us') }}" class="about-main-btn">
                        Start a Project
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>

        <div class="about-hero-media">
            <img src="https://images.pexels.com/photos/6804612/pexels-photo-6804612.jpeg?auto=compress&cs=tinysrgb&w=1800"
                 alt="Software development team working on IT services">

            <div class="about-hero-note">
                <span>Premium IT Partner</span>
                <strong>Web • Software • Apps • Automation</strong>
            </div>
        </div>
    </div>
</section>


<section class="about-metrics-strip">
    <div class="container">
        <div class="about-metrics">
            <div>
                <strong>9+</strong>
                <span>Years of Experience</span>
            </div>

            <div>
                <strong>40+</strong>
                <span>Systems Shipped</span>
            </div>

            <div>
                <strong>5★</strong>
                <span>Upwork Rating</span>
            </div>

            <div>
                <strong>24h</strong>
                <span>Response Commitment</span>
            </div>
        </div>
    </div>
</section>


<section class="about-story-new">
    <div class="container">
        <div class="about-story-new-grid">

            <div class="about-story-copy">
                <span class="about-label">Who We Are</span>

                <h2>
                    A practical technology team focused on design, development, and business results.
                </h2>

                <p>
                    We help startups, service companies, ecommerce brands, and growing businesses turn ideas
                    into functional digital products. Our work is not only about making things look attractive;
                    we focus on speed, usability, security, clean backend logic, and long-term scalability.
                </p>

                <p>
                    Whether you need a company website, ecommerce store, customer portal, admin dashboard,
                    API integration, or complete custom software, our goal is to build something that works
                    smoothly for your team and creates value for your customers.
                </p>
            </div>

            <div class="about-collage">
                <div class="about-collage-main">
                    <img src="https://images.pexels.com/photos/6805161/pexels-photo-6805161.jpeg?auto=compress&cs=tinysrgb&w=1200"
                         alt="IT services meeting" loading="lazy" decoding="async">
                </div>

                <div class="about-collage-small about-collage-small-one">
                    <img src="https://images.pexels.com/photos/2102416/pexels-photo-2102416.jpeg?auto=compress&cs=tinysrgb&w=700"
                         alt="Web development code" loading="lazy" decoding="async">
                </div>

                <div class="about-collage-small about-collage-small-two">
                    <img src="https://images.pexels.com/photos/7988743/pexels-photo-7988743.jpeg?auto=compress&cs=tinysrgb&w=700"
                         alt="API development" loading="lazy" decoding="async">
            </div>

        </div>
    </div>
</section>


<section class="about-difference">
    <div class="container">

        <div class="about-section-split">
            <span class="about-label">What Makes Us Different</span>
            <h2>We do not just build pages. We build complete digital experiences.</h2>
        </div>

        <div class="about-difference-list">

            <div class="about-difference-row">
                <div class="about-row-number">01</div>
                <div>
                    <h3>Business-first planning</h3>
                    <p>
                        We understand your business model, users, goals, and operations before writing code.
                    </p>
                </div>
            </div>

            <div class="about-difference-row">
                <div class="about-row-number">02</div>
                <div>
                    <h3>Premium interface design</h3>
                    <p>
                        We create clean, modern, market-based layouts that make your brand look trustworthy.
                    </p>
                </div>
            </div>

            <div class="about-difference-row">
                <div class="about-row-number">03</div>
                <div>
                    <h3>Scalable development</h3>
                    <p>
                        We build secure backend systems, APIs, dashboards, databases, and integrations that can grow.
                    </p>
                </div>
            </div>

            <div class="about-difference-row">
                <div class="about-row-number">04</div>
                <div>
                    <h3>Long-term support</h3>
                    <p>
                        We help after launch with updates, improvements, maintenance, performance, and new features.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>


<section class="about-capabilities">
    <div class="container">

        <div class="about-capabilities-head">
            <span class="about-label">Capabilities</span>
            <h2>Everything your business needs to launch, manage, and grow online.</h2>
        </div>

        <div class="about-capability-grid">

            <div class="about-capability-item">
                <i class="fa-solid fa-code"></i>
                <span>Web Development</span>
            </div>

            <div class="about-capability-item">
                <i class="fa-solid fa-brain"></i>
                <span>AI Development</span>
            </div>

            <div class="about-capability-item">
                <i class="fa-solid fa-pen-nib"></i>
                <span>UI/UX Design</span>
            </div>

            <div class="about-capability-item">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Ecommerce Solutions</span>
            </div>

            <div class="about-capability-item">
                <i class="fa-solid fa-gears"></i>
                <span>Custom Software</span>
            </div>

            <div class="about-capability-item">
                <i class="fa-solid fa-link"></i>
                <span>API Development</span>
            </div>

            <div class="about-capability-item">
                <i class="fa-solid fa-cloud"></i>
                <span>Cloud & DevOps</span>
            </div>

            <div class="about-capability-item">
                <i class="fa-solid fa-chart-line"></i>
                <span>SEO & Digital Marketing</span>
            </div>

        </div>

    </div>
</section>


<section class="about-journey">
    <div class="container">

        <div class="about-journey-layout">

            <div class="about-journey-title">
                <span class="about-label">Our Approach</span>
                <h2>How we turn your idea into a working digital product.</h2>
            </div>

            <div class="about-journey-timeline">

                <div class="about-journey-item">
                    <span>Step 01</span>
                    <h3>Discover</h3>
                    <p>We collect requirements, understand your business goals, and define the project scope.</p>
                </div>

                <div class="about-journey-item">
                    <span>Step 02</span>
                    <h3>Design</h3>
                    <p>We create user flows, wireframes, and premium visual design for your digital product.</p>
                </div>

                <div class="about-journey-item">
                    <span>Step 03</span>
                    <h3>Develop</h3>
                    <p>We build the frontend, backend, database, APIs, admin panel, and integrations.</p>
                </div>

                <div class="about-journey-item">
                    <span>Step 04</span>
                    <h3>Launch</h3>
                    <p>We test, optimize, deploy, and support your product after launch.</p>
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
    <h2>About DappersTech - Frequently Asked Questions</h2>
    <p class="hd-faq-sub">Answers to the questions US &amp; UK clients ask us most.</p>
      <details>
        <summary>Where is DappersTech located?</summary>
        <p>DappersTech is a software house based in Rawalpindi, Pakistan, at Mid City Mall, Rehmanabad, Murree Road. We work with clients in Rawalpindi, Islamabad, and worldwide, both on-site and remotely.</p>
      </details>
      <details>
        <summary>What does DappersTech actually do?</summary>
        <p>DappersTech is a software house and IT services company. We build websites, ecommerce platforms, custom dashboards, APIs, AI integrations, and automation systems for startups, service businesses, and growing companies.</p>
      </details>
      <details>
        <summary>How long has DappersTech been in business?</summary>
        <p>DappersTech has been delivering software and IT services since 2017 - over 9 years of production experience across web development, custom software, and digital growth projects.</p>
      </details>
      <details>
        <summary>What industries or business sizes do you work with?</summary>
        <p>We work with startups, service companies, ecommerce brands, and growing businesses across a range of industries. Our projects range from single-page marketing sites to complex multi-tenant SaaS platforms.</p>
      </details>
      <details>
        <summary>Do you only build websites, or also custom software?</summary>
        <p>Both. Alongside websites and ecommerce stores, we build custom dashboards, backend APIs, AI-powered features, and workflow automation - anything that needs to function as real software, not just a page.</p>
      </details>
      <details>
        <summary>What happens after my project launches?</summary>
        <p>Every project includes post-launch support - monitoring, updates, performance improvements, and new features as your business grows. We treat each engagement as a long-term partnership, not a one-off handoff.</p>
      </details>
  </div>
</section>

<section class="about-final-cta">
    <div class="container">
        <div class="about-final-box">
            <h2>Let's build something useful, scalable, and premium for your business.</h2>

            <a href="{{ route('contact_us') }}" class="about-main-btn">
                Get a Free Consultation
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection
