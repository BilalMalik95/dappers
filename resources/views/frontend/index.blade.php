@extends('frontend.layout')
@section('title', 'DapperSolutions - Software House in Rawalpindi | AI & Web Development')
@section('meta_description', 'DapperSolutions is a leading software house in Rawalpindi, Pakistan, delivering AI integration, custom software development, SaaS platforms, and Laravel backend systems for businesses worldwide.')
@section('meta_keywords', 'software house in Rawalpindi, software house Rawalpindi, IT company Rawalpindi, web development company Rawalpindi, AI software development company, AI automation agency, AI agent development company, generative AI integration services, custom built ChatGPT, RAG systems, AI-powered web development agency, custom software development company, SaaS development agency')

@section('styles')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => ['Organization', 'ProfessionalService'],
            '@id' => url('/#organization'),
            'name' => 'DapperSolutions IT Services',
            'alternateName' => 'DapperSolutions Software House',
            'url' => url('/'),
            'logo' => asset('frontend/assets/images/logo/logo-dappersolutions.png'),
            'image' => asset('frontend/assets/images/logo/logo-dappersolutions.png'),
            'description' => 'DapperSolutions is a software house in Rawalpindi, Pakistan, delivering AI-powered software development, SaaS platforms, AI integration services, Laravel backend systems, and workflow automation for clients worldwide.',
            'foundingDate' => '2017',
            'founder' => ['@type' => 'Person', 'name' => 'Bilal Malik', 'url' => 'https://malikbilal.com'],
            'sameAs' => [
                'https://malikbilal.com',
                'https://linkedin.com/in/bilal-malik95/',
                'https://wa.me/923339302731',
            ],
            'telephone' => '+92-333-9302731',
            'email' => 'imbilalmalik95@gmail.com',
            'priceRange' => '$$',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Mid City Mall, Rehmanabad, Murree Road',
                'addressLocality' => 'Rawalpindi',
                'addressRegion' => 'Punjab',
                'postalCode' => '46000',
                'addressCountry' => 'PK',
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => '33.6352256',
                'longitude' => '73.0739544',
            ],
            'hasMap' => 'https://www.google.com/maps?q=Mid+City+Mall+Rehmanabad+Murree+Road+Rawalpindi',
            'areaServed' => [
                ['@type' => 'City', 'name' => 'Rawalpindi'],
                ['@type' => 'City', 'name' => 'Islamabad'],
                ['@type' => 'Country', 'name' => 'Pakistan'],
                'Worldwide',
            ],
            'openingHoursSpecification' => [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                'opens' => '09:00',
                'closes' => '18:00',
            ],
            'knowsAbout' => [
                'Software House Services',
                'AI Software Development',
                'AI Integration Services',
                'Custom Software Development',
                'SaaS Platform Development',
                'Laravel Backend Development',
                'Workflow Automation',
                'UI/UX & Web Design',
                'Cloud & DevOps',
            ],
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name' => 'DapperSolutions Services',
                'itemListElement' => [
                    ['@type' => 'Service', 'name' => 'AI & Automation Integration', 'description' => 'Generative AI integration, OpenAI & Claude chatbots, RAG pipelines, and vector database systems.', 'provider' => ['@id' => url('/#organization')], 'areaServed' => 'Worldwide'],
                    ['@type' => 'Service', 'name' => 'Backend Development', 'description' => 'Laravel and Node.js backends, REST APIs, admin panels, and scalable database architecture.', 'provider' => ['@id' => url('/#organization')], 'areaServed' => 'Worldwide'],
                    ['@type' => 'Service', 'name' => 'SaaS Platform Development', 'description' => 'Multi-tenant SaaS architecture, subscription billing, and modern frontends.', 'provider' => ['@id' => url('/#organization')], 'areaServed' => 'Worldwide'],
                    ['@type' => 'Service', 'name' => 'UI/UX & Web Design', 'description' => 'User-centered interfaces and premium web design built for conversion.', 'provider' => ['@id' => url('/#organization')], 'areaServed' => 'Worldwide'],
                    ['@type' => 'Service', 'name' => 'Workflow Automation', 'description' => 'n8n, Make, and Zapier automation pipelines for business operations.', 'provider' => ['@id' => url('/#organization')], 'areaServed' => 'Worldwide'],
                    ['@type' => 'Service', 'name' => 'Digital Marketing & SEO', 'description' => 'Technical SEO, content strategy, and growth-focused digital marketing.', 'provider' => ['@id' => url('/#organization')], 'areaServed' => 'Worldwide'],
                    ['@type' => 'Service', 'name' => 'Cloud & DevOps', 'description' => 'Production hosting, CI/CD pipelines, and uptime monitoring.', 'provider' => ['@id' => url('/#organization')], 'areaServed' => 'Worldwide'],
                    ['@type' => 'Service', 'name' => 'API Integrations', 'description' => 'RESTful APIs, third-party integrations, and real-time data sync.', 'provider' => ['@id' => url('/#organization')], 'areaServed' => 'Worldwide'],
                ],
            ],
            
        ],
        [
            '@type' => 'WebSite',
            'name' => 'DapperSolutions',
            'url' => url('/'),
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endsection

@section('content')


<section class="home-slider-hero">
    <div class="home-slider">

        <div class="home-slide home-slide-one is-active">
            <div class="home-slide-overlay"></div>
            <div class="home-slide-content">
                <span class="home-slide-kicker">Software House in Rawalpindi · 7+ Years · 40+ Systems Shipped · 5-Star Upwork</span>
                <h1>Software House in Rawalpindi Engineering Production-Grade AI &amp; Web Systems for Growing Businesses</h1>
                <p>
                    DapperSolutions is a software house in Rawalpindi, Pakistan delivering AI-powered software
                    development, custom software, scalable SaaS platforms, Laravel backend systems, and
                    end-to-end AI integration services for businesses worldwide.
                </p>

                <div class="home-slide-actions">
                    <a href="{{ route('contact_us') }}" class="home-primary-btn">
                        Start Your AI Project
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="{{ route('team') }}" class="home-outline-btn">Meet Our Team</a>
                </div>

                <div class="home-trust-row">
                    <span class="home-trust-item"><i class="fa-solid fa-location-dot"></i> Rawalpindi, Pakistan</span>
                    <span class="home-trust-item"><i class="fa-solid fa-shield-halved"></i> 100% Code Ownership</span>
                    <span class="home-trust-item"><i class="fa-solid fa-file-shield"></i> NDA-Protected Engagements</span>
                    <span class="home-trust-item"><i class="fa-solid fa-user-tie"></i> Direct Access to Senior Engineers</span>
                </div>
            </div>
        </div>

        <div class="home-slide home-slide-two">
            <div class="home-slide-overlay"></div>
            <div class="home-slide-content">
                <span class="home-slide-kicker">SaaS & AI Development</span>
                <h2>Multi-tenant SaaS platforms and Generative AI integrations.</h2>
                <p>
                    From subscription billing and user management to OpenAI & Claude AI
                    chatbots, RAG systems, and vector database integrations.
                </p>

                <div class="home-slide-actions">
                    <a href="{{ route('contact_us') }}" class="home-primary-btn">
                        Discuss Your Idea
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="https://www.malikbilal.com" target="_blank" rel="noopener" class="home-outline-btn">View Portfolio</a>
                </div>
            </div>
        </div>

        <div class="home-slide home-slide-three">
            <div class="home-slide-overlay"></div>
            <div class="home-slide-content">
                <span class="home-slide-kicker">Workflow Automation & Project Rescue</span>
                <h2>Automate your business and rescue broken projects.</h2>
                <p>
                    We build n8n, Make, and Zapier automation pipelines. We also rescue
                    stalled or failing projects with a structured audit and recovery plan.
                </p>

                <div class="home-slide-actions">
                    <a href="{{ route('contact_us') }}" class="home-primary-btn">
                        Book a Consultation
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="{{ route('aboutus') }}" class="home-outline-btn">About DapperSolutions</a>
                </div>
            </div>
        </div>

    </div>

    <div class="home-slider-dots">
        <span></span>
        <span></span>
        <span></span>
    </div>
</section>

<script>
(function () {
    var slides = document.querySelectorAll('.home-slider .home-slide');
    if (!slides.length) return;
    var current = 0;
    slides.forEach(function (s, idx) {
        if (s.classList.contains('is-active')) current = idx;
    });

    function activate(i) {
        slides.forEach(function (s, idx) {
            s.classList.toggle('is-active', idx === i);
        });
    }

    setInterval(function () {
        current = (current + 1) % slides.length;
        activate(current);
    }, 6000);
})();
</script>
<section class="section believe">
    <div class="container">
        <div class="section-title-center">
            <h2>
                We believe that <span class="scribble">technology</span><br>
                should solve real problems
            </h2>
        </div>

        <div class="counter-banner">
            <div class="stats-box">
                <div class="stat-item">
                    <strong>7+</strong>
                    <span>Years Experience</span>
                </div>
                <div class="stat-item">
                    <strong>40+</strong>
                    <span>Systems Shipped</span>
                </div>
                <div class="stat-item">
                    <strong>5★</strong>
                    <span>Upwork Rating</span>
                </div>
                <div class="stat-item">
                    <strong>24h</strong>
                    <span>Response Time</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="home-services-v3">
    <div class="container">

        <div class="home-services-head">
            <span class="home-section-label">Core Services</span>
            <h2>AI Software Development Services Built for Real Business Growth</h2>
            <p>
                From AI integration services and SaaS platforms to Laravel backends, payment systems,
                workflow automation, and project rescue every engagement is scoped before work begins.
            </p>
        </div>

        <div class="home-services-v3-grid">

            <a href="{{ route('services') }}" class="home-service-feature">
                <div class="home-service-feature-img">
                    <img src="https://images.pexels.com/photos/31177212/pexels-photo-31177212.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Laravel backend development and scalable system architecture" width="700" height="467" loading="lazy" decoding="async">
                </div>

                <div class="home-service-feature-content">
                    <span>Core Expertise</span>
                    <h3>Backend Development & System Architecture</h3>
                    <p>
                        Laravel, PHP, MySQL - scalable backends, REST APIs, admin panels,
                        multi-tenant systems, and secure database architecture.
                    </p>

                    <div class="home-service-feature-link">
                        Explore Service
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <div class="home-service-list">

                <a href="{{ route('ai_development') }}" class="home-service-row">
                    <span>01</span>
                    <div>
                        <h3>Generative AI Integration</h3>
                        <p>OpenAI & Claude chatbots, RAG pipelines, and vector database systems.</p>
                    </div>
                </a>

                <a href="{{ route('services') }}" class="home-service-row">
                    <span>02</span>
                    <div>
                        <h3>SaaS Platform Development</h3>
                        <p>Multi-tenant architecture, subscription billing, and Vue.js frontends.</p>
                    </div>
                </a>

                <a href="{{ route('services') }}" class="home-service-row">
                    <span>03</span>
                    <div>
                        <h3>Payment Systems & Billing</h3>
                        <p>Stripe & PayPal integrations, webhooks, invoicing, and subscription flows.</p>
                    </div>
                </a>

                <a href="{{ route('services') }}" class="home-service-row">
                    <span>04</span>
                    <div>
                        <h3>Workflow Automation</h3>
                        <p>n8n, Make, and Zapier pipelines to automate your business operations.</p>
                    </div>
                </a>

            </div>

        </div>

        <div class="home-service-bottom">
            <div>
                <strong>API Integration Services</strong>
                <span>RESTful APIs, third-party integrations, and real-time data sync.</span>
            </div>

            <div>
                <strong>Cloud Deployment & DevOps</strong>
                <span>Production hosting, CI/CD pipelines, security hardening, and uptime monitoring.</span>
            </div>

            <div>
                <strong>Project Rescue & Recovery</strong>
                <span>Structured audit and recovery for stalled or broken software projects.</span>
            </div>
        </div>

    </div>
</section>

<section class="home-process-v3">
    <div class="container">

        <div class="home-process-head">
            <span class="home-section-label">Our Process</span>
            <h2>Our AI-Powered Software Development Process From Discovery to Launch</h2>
        </div>

        <div class="home-process-line">

            <div class="home-process-card">
                <span>01</span>
                <h3>Discover</h3>
                <p>
                    We understand your business goals, users, required features,
                    competitors, and technical needs.
                </p>
            </div>

            <div class="home-process-card">
                <span>02</span>
                <h3>Design</h3>
                <p>
                    We create clean user flows, wireframes, and premium UI layouts
                    that match your brand.
                </p>
            </div>

            <div class="home-process-card">
                <span>03</span>
                <h3>Develop</h3>
                <p>
                    We build frontend, backend, APIs, admin panels, databases,
                    and third-party integrations.
                </p>
            </div>

            <div class="home-process-card">
                <span>04</span>
                <h3>Launch</h3>
                <p>
                    We test speed, responsiveness, security, functionality, and
                    deploy the project safely.
                </p>
            </div>

        </div>

        <div class="home-process-banner">
            <div>
                <span>Clear Scope · Full Code Ownership · 24h Response</span>
                <h3>Every project is scoped and delivered on a written agreement.</h3>
            </div>

            <a href="{{ route('contact_us') }}" class="home-primary-btn">
                Start Your Project
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>

    </div>
</section>
<section class="section blog">
    <div class="container">

        <div class="blog-title">
            <span class="blog-kicker">Latest Insights</span>
            <h2>
                Insights on <span>AI software development</span>,<br>
                SaaS, and automation trends
            </h2>
            <p>
                Explore expert articles on AI integration, custom software development, SaaS platforms,
                and workflow automation to help your business move forward.
            </p>
        </div>

        <div class="blog-grid">
            @forelse ($blogs as $blog)
                <a class="blog-card blog-card-link" href="{{ route('SingleBlog', $blog->slug) }}">

                    <div class="blog-image">
                        <img src="{{ asset('frontend/assets/images/blog/' . $blog->image) }}" alt="{{ $blog->title }}" width="600" height="280" loading="lazy" decoding="async">

                        <div class="blog-category">
                            {{ $blog->category }}
                        </div>
                    </div>

                    <div class="blog-content">
                        <div class="blog-meta">
                            <span><i class="fa-regular fa-calendar"></i> {{ $blog->created_at->format('M d, Y') }}</span>
                            <span><i class="fa-regular fa-circle-user"></i> {{ $blog->user->name ?? 'DapperSolutions' }}</span>
                        </div>

                        <h3>{{ $blog->title }}</h3>

                        <p class="blog-excerpt">
                            {{ \Illuminate\Support\Str::limit(strip_tags($blog->short_description), 90) }}
                        </p>

                        <div class="blog-readmore">
                            Read Article
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>

                </a>
            @empty
                <div class="blog-empty-state">
                    <p>No blogs available right now.</p>
                </div>
            @endforelse
        </div>

        @if($blogs->isNotEmpty())
            <div class="blog-view-all">
                <a href="{{ route('blogs') }}" class="home-outline-btn">
                    View All Articles
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        @endif

    </div>
</section>
<section class="section testimonial">
    <div class="quote-big quote-left">“</div>
    <div class="quote-big quote-right">”</div>
    <div class="container">

        <div class="testimonial-card">
            <div class="testimonial-author">
                <img src="{{ asset('frontend/assets/images/team/image.jpg') }}" alt="Bilal Malik, Founder of DapperSolutions">
                <h4>Bilal Malik <span>Founder</span></h4>
                <span class="testimonial-badge"><i class="fa-solid fa-quote-left"></i> Message From The Founder</span>
            </div>
            <blockquote>
                "We treat every project like it's our own product. From the first call to final
                deployment, our focus stays on building AI-powered software that performs, scales,
                and earns your users' trust."
            </blockquote>
        </div>

    </div>
</section>
<div class="marquee team-skills-marquee">
        <div class="marquee-track">
            <div class="marquee-item"><span class="marquee-star">✱</span> Laravel</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> PHP</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Vue.js</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> JavaScript</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> MySQL</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> REST APIs</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> OpenAI / Claude AI</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> SaaS Architecture</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Stripe & PayPal</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> n8n · Make · Zapier</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> RAG & Vector DBs</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Cloud Deployment</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Security Hardening</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Multi-Tenant Systems</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Subscription Billing</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Workflow Automation</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Laravel</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> PHP</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Vue.js</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> JavaScript</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> MySQL</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> REST APIs</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> OpenAI / Claude AI</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> SaaS Architecture</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Stripe & PayPal</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> n8n · Make · Zapier</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> RAG & Vector DBs</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Cloud Deployment</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Security Hardening</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Multi-Tenant Systems</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Subscription Billing</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Workflow Automation</div>
        </div>s
    </div>
{{-- 
<section class="section partners">
    <div class="container">
        <marquee behavior="scroll" direction="left" scrollamount="5" class="partners-marquee">
             <div class="partners-grid">
            <div class="partner"><span class="partner-mark"></span>Laravel</div>
            <div class="partner"><span class="partner-mark"></span>Vue.js</div>
            <div class="partner"><span class="partner-mark"></span>OpenAI</div>
            <div class="partner"><span class="partner-mark"></span>Stripe</div>
            <div class="partner"><span class="partner-mark"></span>n8n</div>
            <div class="partner"><span class="partner-mark"></span>MySQL</div>
        </div>
        </marquee>
    </div>
</section> --}}
@endsection
