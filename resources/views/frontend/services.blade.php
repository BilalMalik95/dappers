@extends('frontend.layout')

@section('title', 'Our Services | Software House in Rawalpindi - DapperSolutions')
@section('meta_description', 'DapperSolutions, a software house in Rawalpindi, delivers custom web application development services, AI automation agency solutions, generative AI integration, n8n workflow automation, fintech app development, SaaS development, and affordable web design services.')
@section('meta_keywords', 'software house in Rawalpindi, software house Rawalpindi, custom web application development services, AI automation agency, generative AI integration services, n8n development services, fintech app development, SaaS development, affordable web design services, software outsourcing company')

@section('content')

<section class="services-page-hero">
    <div class="services-page-hero__bg" style="background-image: linear-gradient(90deg, rgba(0,0,0,.96) 0%, rgba(0,0,0,.78) 45%, rgba(0,0,0,.38) 100%), url('https://images.pexels.com/photos/7693692/pexels-photo-7693692.jpeg?auto=compress&cs=tinysrgb&w=2200'); background-size: cover; background-position: center;"></div>
    <div class="services-page-hero__overlay"></div>

    <div class="container">
        <div class="services-page-hero__content">
            <span class="services-page-kicker">Our Services</span>

            <h1>
                Production-grade software<br>
                built for real business growth
            </h1>

            <p>
                Custom web application development services, AI automation agency solutions, n8n workflow automation,
                fintech app development, SaaS development, and premium cloud deployment - all delivered with milestones and full code ownership.
            </p>

            <div class="services-page-hero__actions">
                <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                    Get a Free Consultation
                    <i class="fa-solid fa-arrow-right"></i>
                </a>

                <a href="https://www.malikbilal.com" target="_blank" rel="noopener" class="services-page-btn services-page-btn--outline">
                    View Portfolio
                </a>
            </div>
        </div>
    </div>
</section>


<section class="services-premium-v2">
    <div class="container">

        <div class="services-v2-head">
            <span class="services-page-kicker">What We Provide</span>
            <h2>
                7 core services.<br>
                40+ production systems shipped.
            </h2>
            <p>
                From custom web application development services and SaaS platforms to generative AI integration,
                n8n workflow automation, fintech app development, and affordable web design - every service is delivered with full code ownership.
            </p>
        </div>

        <div class="services-v2-layout">

            <a href="{{ route('contact_us') }}" class="service-feature-card">
                <div class="service-feature-img">
                    <img src="https://images.pexels.com/photos/7644016/pexels-photo-7644016.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Custom web application development services and backend architecture" loading="lazy" decoding="async">
                </div>

                <div class="service-feature-content">
                    <span class="service-tag">Core Service</span>
                    <h3>Custom Web Application Development & Backend Architecture</h3>
                    <p>
                        Production-grade web applications, API-first backend systems, database design, cloud deployment,
                        and security hardening. Built to scale, maintain, and extend without bottlenecks.
                    </p>

                    <div class="service-feature-points">
                        <span><i class="fa-solid fa-check"></i> Custom web app development</span>
                        <span><i class="fa-solid fa-check"></i> API-first architecture</span>
                        <span><i class="fa-solid fa-check"></i> Scalable SaaS engineering</span>
                    </div>

                    <div class="service-card-action">
                        Discuss This Service
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <div class="services-v2-stack">

                <a href="{{ route('ai_development') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/12903168/pexels-photo-12903168.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Generative AI integration and LLM workflows" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>01</span>
                        <h3>Generative AI Integration Services</h3>
                        <p>OpenAI & Claude integrations, chatbots, document processing, RAG architecture, and intelligent workflow automation wired into your existing stack.</p>
                    </div>
                </a>

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/9034280/pexels-photo-9034280.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="SaaS development services and platform engineering" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>02</span>
                        <h3>SaaS Development Services</h3>
                        <p>Multi-tenant architecture, subscription billing, admin panels, role-based access, and modern frontends. From MVP to production-ready SaaS.</p>
                    </div>
                </a>

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/1143521/pexels-photo-1143521.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Fintech app development and payment systems" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>03</span>
                        <h3>Fintech App Development & Payment Systems</h3>
                        <p>Stripe, PayPal, billing automation, subscription management, secure checkout flows, and financial-grade web applications.</p>
                    </div>
                </a>

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/7640793/pexels-photo-7640793.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="API integration and workflow automation services" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>04</span>
                        <h3>API Integration & Workflow Automation</h3>
                        <p>RESTful API architecture, third-party integrations, n8n automation, and seamless data sync between your systems and external platforms.</p>
                    </div>
                </a>

            </div>

        </div>

        <div class="services-v2-bottom">

            <a href="{{ route('contact_us') }}" class="service-wide-card">
                <span>05</span>
                <h3>n8n Development Services & Workflow Automation</h3>
                <p>Eliminate repetitive operations by connecting tools and databases via n8n, Make, Zapier, and custom API orchestration - multi-step agentic pipelines included.</p>
                <i class="fa-solid fa-arrow-right"></i>
            </a>

            <a href="{{ route('contact_us') }}" class="service-wide-card">
                <span>06</span>
                <h3>SaaS Cloud Deployment & DevOps</h3>
                <p>Cloud infrastructure setup, deployment pipelines, security hardening, backups, monitoring, and server optimisation for SaaS and web applications.</p>
                <i class="fa-solid fa-arrow-right"></i>
            </a>

            <a href="{{ route('contact_us') }}" class="service-wide-card">
                <span>07</span>
                <h3>Project Rescue & Recovery</h3>
                <p>Full code audit, issue documentation, and a written recovery plan before a single line is changed. 40+ systems rescued.</p>
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>
</section>


<section class="services-feature services-feature-v2">
    <div class="container">
        <div class="why-choose-box">

            <div class="why-choose-content">
                <span class="services-page-kicker">Why Choose Us</span>

                <h2>
                    We create premium digital products that are built to perform
                </h2>

                <p>
                    We do not only design good-looking websites. We build reliable, scalable,
                    secure, and business-focused digital solutions that help your company grow,
                    automate work, and improve customer experience.
                </p>

                <div class="why-choose-grid">

                    <div class="why-item">
                        <div class="why-icon">
                            <i class="fa-solid fa-layer-group"></i>
                        </div>
                        <div>
                            <h3>Custom Built Solutions</h3>
                            <p>Every project is designed around your business flow, goals, and users.</p>
                        </div>
                    </div>

                    <div class="why-item">
                        <div class="why-icon">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div>
                            <h3>Secure Development</h3>
                            <p>We follow clean coding standards with security and performance in mind.</p>
                        </div>
                    </div>

                    <div class="why-item">
                        <div class="why-icon">
                            <i class="fa-solid fa-gauge-high"></i>
                        </div>
                        <div>
                            <h3>Fast Performance</h3>
                            <p>Optimized pages, scalable backend logic, and smooth user experiences.</p>
                        </div>
                    </div>

                    <div class="why-item">
                        <div class="why-icon">
                            <i class="fa-solid fa-headset"></i>
                        </div>
                        <div>
                            <h3>Long-Term Support</h3>
                            <p>We provide maintenance, improvements, updates, and technical support.</p>
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
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <span>5-star Upwork rating · 40+ systems shipped</span>
                    </div>
                </div>
            </div>

            <div class="why-choose-visual">
                <img src="https://images.pexels.com/photos/36733315/pexels-photo-36733315.jpeg?auto=compress&cs=tinysrgb&w=1400"
                    alt="Software team working on custom web application development" loading="lazy" decoding="async">

                <div class="why-floating-card why-floating-card--top">
                    <strong>7+</strong>
                    <span>Years Experience</span>
                </div>

                <div class="why-floating-card why-floating-card--bottom">
                    <strong>40+</strong>
                    <span>Systems Shipped</span>
                </div>

                <div class="why-tech-pill">
                    <i class="fa-solid fa-code"></i>
                    Laravel • Vue.js • OpenAI • Stripe
                </div>
            </div>

        </div>
    </div>
</section>


<section class="services-process services-process-v2">
    <div class="container">

        <div class="workflow-head">
            <span class="services-page-kicker">Our Workflow</span>
            <h2>From idea to launch, we follow a clear premium process</h2>
            <p>
                Every project follows a structured workflow so your website, app, or software system is planned,
                designed, developed, tested, and launched with confidence.
            </p>
        </div>

        <div class="workflow-layout">

            <div class="workflow-visual">
                <img src="https://images.pexels.com/photos/7693706/pexels-photo-7693706.jpeg?auto=compress&cs=tinysrgb&w=1400"
                    alt="Software development project planning workflow" loading="lazy" decoding="async">

                <div class="workflow-visual-content">
                    <span>Project Delivery</span>
                    <h3>Strategy. Design. Development. Launch.</h3>
                </div>
            </div>

            <div class="workflow-steps">

                <div class="workflow-step">
                    <div class="workflow-no">01</div>
                    <div class="workflow-content">
                        <span>Discovery</span>
                        <h3>Understand goals and requirements</h3>
                        <p>
                            We discuss your business goals, required features, target users, competitors,
                            and technical needs before starting the project.
                        </p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">02</div>
                    <div class="workflow-content">
                        <span>Planning & UI/UX</span>
                        <h3>Create structure and premium design</h3>
                        <p>
                            We prepare user flows, page structure, wireframes, and modern UI design that
                            looks premium and gives users a smooth experience.
                        </p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">03</div>
                    <div class="workflow-content">
                        <span>Development</span>
                        <h3>Build frontend, backend, APIs and logic</h3>
                        <p>
                            We develop responsive frontend, secure backend, database structure, admin panels,
                            APIs, payment systems, and required integrations.
                        </p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">04</div>
                    <div class="workflow-content">
                        <span>Testing & Launch</span>
                        <h3>Test, optimize, deploy and support</h3>
                        <p>
                            We test speed, responsiveness, security, functionality, and then safely launch
                            the project with ongoing support and improvements.
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

<section class="services-seo-keywords">
    <div class="container">
        <div class="services-v2-head">
            <span class="services-page-kicker">SEO & Service Focus</span>
            <h2>High-value service keywords for AI, automation, SaaS, fintech, and web application development</h2>
            <p>
                We target buyer-intent keywords that convert for newer agencies: AI automation agency, n8n development services,
                generative AI integration services, custom web application development services, fintech app development, and affordable web design services.
            </p>
        </div>

        <div class="services-keywords-list">
            <ul>
                <li>AI automation agency</li>
                <li>n8n development services</li>
                <li>generative AI integration services</li>
                <li>custom web application development services</li>
                <li>fintech app development</li>
                <li>software outsourcing company</li>
                <li>MVP development services</li>
                <li>affordable web design services</li>
            </ul>
        </div>
    </div>
</section>

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "What services does DapperSolutions provide?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "DapperSolutions provides custom web application development services, generative AI integration, n8n workflow automation, fintech app development, SaaS development, cloud deployment, and project rescue."
            }
        },
        {
            "@type": "Question",
            "name": "What is n8n development services?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "n8n development services automate workflows by connecting apps, APIs, and databases into reusable pipelines, improving efficiency and reducing manual work."
            }
        },
        {
            "@type": "Question",
            "name": "How does DapperSolutions support fintech app development?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "We build secure payment systems, subscription billing, user authentication, regulatory compliance, and fintech integrations for businesses that need reliable financial software."
            }
        },
        {
            "@type": "Question",
            "name": "How much does a project with DapperSolutions cost?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Cost depends on scope - a marketing website, a SaaS platform, and an AI integration each have different complexity. Most projects are scoped in milestones so you know the total cost before development starts. Book a free consultation for an estimate specific to your project."
            }
        },
        {
            "@type": "Question",
            "name": "Do I own the code and IP after the project is delivered?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Yes. Every project is delivered with full code ownership and no platform lock-in - the codebase, designs, and any custom AI logic are yours to keep, extend, or hand to another team."
            }
        }
    ]
}
</script>

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
    <h2>Our Services - Frequently Asked Questions</h2>
    <p class="hd-faq-sub">Answers to the questions US &amp; UK clients ask us most.</p>
      <details>
        <summary>What services does DapperSolutions provide?</summary>
        <p>DapperSolutions provides custom web application development services, generative AI integration, n8n workflow automation, fintech app development, SaaS development, cloud deployment, and project rescue.</p>
      </details>
      <details>
        <summary>What is n8n development services?</summary>
        <p>n8n development services automate workflows by connecting apps, APIs, and databases into reusable pipelines, improving efficiency and reducing manual work.</p>
      </details>
      <details>
        <summary>How does DapperSolutions support fintech app development?</summary>
        <p>We build secure payment systems, subscription billing, user authentication, regulatory compliance, and fintech integrations for businesses that need reliable financial software.</p>
      </details>
      <details>
        <summary>How much does a project with DapperSolutions cost?</summary>
        <p>Cost depends on scope - a marketing website, a SaaS platform, and an AI integration each have different complexity. Most projects are scoped in milestones so you know the total cost before development starts. Book a free consultation for an estimate specific to your project.</p>
      </details>
      <details>
        <summary>Do I own the code and IP after the project is delivered?</summary>
        <p>Yes. Every project is delivered with full code ownership and no platform lock-in - the codebase, designs, and any custom AI logic are yours to keep, extend, or hand to another team.</p>
      </details>
  </div>
</section>

<section class="services-cta-section">
    <div class="container">
        <div class="services-cta-box">
            <div>
                <span class="services-page-kicker">Let's Build</span>
                <h2>Have a project idea? Let's turn it into a production-ready digital product.</h2>
            </div>

            <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                Get a Free Consultation
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection
