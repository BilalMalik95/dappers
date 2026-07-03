@extends('frontend.layout')

@section('title', $category?->meta_title ?? 'Digital Marketing Services | Social Media, PPC & Content Marketing')
@section('meta_description', $category?->meta_description ?? 'Full-service digital marketing - social media management, Google Ads PPC, email marketing, content marketing, and conversion rate optimization. Grow your business online. Get started today.')
@section('meta_keywords', $category?->meta_keywords ?? 'digital marketing services, social media marketing, Google Ads management, PPC advertising, email marketing, content marketing, conversion optimization, digital marketing company Pakistan')

@section('styles')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Digital Marketing Services",
      "serviceType": "Digital Marketing",
      "provider": {
        "@type": "Organization",
        "name": "DapperSolutions IT Services",
        "url": "https://dappersolution.com",
        "foundingDate": "2017",
        "founder": {"@type": "Person", "name": "Bilal Malik", "url": "https://malikbilal.com"}
      },
      "description": "Full-service digital marketing including social media management, Google Ads PPC, email marketing, content marketing, and conversion rate optimization - strategies that turn traffic into real customers.",
      "areaServed": "Worldwide",
      "url": "https://dappersolution.com/services/digital-marketing",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Digital Marketing Services",
        "itemListElement": [
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Social Media Marketing"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Google Ads PPC Management"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Email Marketing Automation"}},
          {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Content Marketing"}}
        ]
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://dappersolution.com/"},
        {"@type": "ListItem", "position": 2, "name": "Services", "item": "https://dappersolution.com/services"},
        {"@type": "ListItem", "position": 3, "name": "Digital Marketing", "item": "https://dappersolution.com/services/digital-marketing"}
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
      "name": "What digital marketing channels does DapperSolutions manage?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We manage social media marketing, Google Ads PPC, email marketing automation, content marketing, and conversion rate optimisation as part of one connected strategy rather than isolated campaigns. If you only need one channel, such as PPC or SEO, we also offer those as standalone services."
      }
    },
    {
      "@type": "Question",
      "name": "How do you report on digital marketing performance?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You get monthly reports covering campaign performance, spend breakdown, lead attribution, and clear next steps. We track everything through GA4 and channel-native dashboards so you always know exactly what's working and why."
      }
    },
    {
      "@type": "Question",
      "name": "Is there a minimum contract length for digital marketing services?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We don't lock clients into long, rigid contracts. Most engagements run month-to-month after an initial strategy phase, so you can scale up, scale down, or change channel focus as your results and goals evolve."
      }
    },
    {
      "@type": "Question",
      "name": "How soon will I see results from digital marketing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Paid channels like Google Ads and social ads can drive traffic and leads within the first few weeks. Organic and content-driven channels build momentum over 2-3 months. We agree realistic, channel-specific timelines with you before work starts."
      }
    },
    {
      "@type": "Question",
      "name": "Do I need a big budget to start with digital marketing?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No. We build a channel strategy and budget allocation around your actual goals and starting point, then scale spend as campaigns prove out. Many clients start with one or two channels and expand once they see measurable ROI."
      }
    }
  ]
}
</script>
@endsection

@section('content')

<section class="services-page-hero">
    <div class="services-page-hero__bg" style="background-image: linear-gradient(90deg, rgba(0,0,0,.96) 0%, rgba(0,0,0,.80) 48%, rgba(0,0,0,.35) 100%), url('https://images.pexels.com/photos/6476260/pexels-photo-6476260.jpeg?auto=compress&cs=tinysrgb&w=2200'); background-size: cover; background-position: center;"></div>
    <div class="services-page-hero__overlay"></div>
    <div class="container">
        <div class="services-page-hero__content">
            <nav class="svc-breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="{{ route('services') }}">Services</a>
                <i class="fa-solid fa-chevron-right"></i>
                <span>Digital Marketing</span>
            </nav>
            <span class="services-page-kicker">Digital Marketing</span>
            <h1>
                {{ $category?->title ?? 'Digital marketing services that turn traffic into real, paying customers' }}
            </h1>
            <p>
                Social media management, Google Ads, email marketing, content strategy, and conversion
                optimisation integrated campaigns that grow your brand and your bottom line.
            </p>
            <div class="services-page-hero__actions">
                <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                    Get a Free Consultation
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="{{ route('services') }}" class="services-page-btn services-page-btn--outline">
                    All Services
                </a>
            </div>
        </div>
    </div>
</section>


<section class="services-premium-v2">
    <div class="container">

        <div class="services-v2-head">
            <span class="services-page-kicker">What We Do</span>
            <h2>
                {{ $category?->service->count() ?? 7 }} digital marketing services.<br>
                One strategy that connects them all.
            </h2>
            <p>
                From paid social and Google Ads to SEO-driven content and email automation every channel
                is managed as part of a cohesive strategy designed to maximise your marketing ROI.
            </p>
        </div>

        @include('frontend.partials.dynamic-service-cards', ['services' => $category?->service ?? collect()])

    </div>
</section>


<section class="services-feature services-feature-v2">
    <div class="container">
        <div class="why-choose-box">

            <div class="why-choose-content">
                <span class="services-page-kicker">Why Work With Us</span>
                <h2>
                    Integrated digital marketing that drives real business growth
                </h2>
                <p>
                    We don't run isolated campaigns in silos. Every channel we manage is part of a unified strategy
                    designed to build brand awareness, capture demand, and convert visitors into loyal customers.
                </p>
                <div class="why-choose-grid">
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-bullseye"></i></div>
                        <div>
                            <h3>Strategy-First Approach</h3>
                            <p>We start with your business goals, audience research, and competitor analysis before launching a single ad or publishing a single post.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-chart-bar"></i></div>
                        <div>
                            <h3>ROI-Focused Campaigns</h3>
                            <p>Every campaign is tracked, measured, and optimised for return on investment not just clicks and impressions that don't move your business forward.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-layer-group"></i></div>
                        <div>
                            <h3>Multi-Channel Integration</h3>
                            <p>Paid, organic, email, and social all working together. Consistent messaging across every touchpoint builds trust and accelerates the buyer journey.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-file-lines"></i></div>
                        <div>
                            <h3>Transparent Reporting</h3>
                            <p>Monthly reports with campaign performance, spend breakdown, lead attribution, and clear next steps full transparency, no agency smoke-and-mirrors.</p>
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
                        <span>5-star client results · Proven campaigns</span>
                    </div>
                </div>
            </div>

            <div class="why-choose-visual">
                <img src="https://images.pexels.com/photos/7651801/pexels-photo-7651801.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Digital marketing team reviewing campaign performance and analytics" loading="lazy" decoding="async">
                <div class="why-floating-card why-floating-card--top">
                    <strong>5×</strong>
                    <span>Avg. ROAS</span>
                </div>
                <div class="why-floating-card why-floating-card--bottom">
                    <strong>7+</strong>
                    <span>Years Marketing</span>
                </div>
                <div class="why-tech-pill">
                    <i class="fa-solid fa-bullhorn"></i>
                    Meta · Google · Mailchimp · GA4
                </div>
            </div>

        </div>
    </div>
</section>


<section class="services-process services-process-v2">
    <div class="container">

        <div class="workflow-head">
            <span class="services-page-kicker">Our Approach</span>
            <h2>A 4 step digital marketing process built for sustainable growth</h2>
            <p>
                Great digital marketing is not about running ads and hoping for the best. Our structured process
                ensures every campaign is planned, executed, measured, and continuously improved.
            </p>
        </div>

        <div class="workflow-layout">

            <div class="workflow-visual">
                <img src="https://images.pexels.com/photos/6476785/pexels-photo-6476785.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Digital marketing team planning campaign strategy" loading="lazy" decoding="async">
                <div class="workflow-visual-content">
                    <span>Marketing Blueprint</span>
                    <h3>Research · Plan · Execute · Optimise</h3>
                </div>
            </div>

            <div class="workflow-steps">

                <div class="workflow-step">
                    <div class="workflow-no">01</div>
                    <div class="workflow-content">
                        <span>Research & Discovery</span>
                        <h3>Understand your audience and market position</h3>
                        <p>Audience research, buyer persona development, competitor marketing analysis, and a full audit of your current digital presence before we spend a single dollar.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">02</div>
                    <div class="workflow-content">
                        <span>Strategy & Planning</span>
                        <h3>Build a channel strategy aligned to your goals</h3>
                        <p>A bespoke marketing strategy with channel selection, budget allocation, content calendar, campaign structure, and KPIs all agreed with you before launch.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">03</div>
                    <div class="workflow-content">
                        <span>Execution</span>
                        <h3>Launch, manage, and actively optimise campaigns</h3>
                        <p>Campaign setup, creative production, A/B testing, audience refinement, and active daily management hands-on execution that drives consistent results.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">04</div>
                    <div class="workflow-content">
                        <span>Measure & Improve</span>
                        <h3>Report on results and scale what works</h3>
                        <p>Monthly performance reviews, ROI analysis, funnel conversion data, and a clear plan for scaling the campaigns that deliver results and cutting those that don't.</p>
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
    <h2>Digital Marketing - Frequently Asked Questions</h2>
    <p class="hd-faq-sub">Answers to the questions US &amp; UK clients ask us most.</p>
      <details>
        <summary>What digital marketing channels does DapperSolutions manage?</summary>
        <p>We manage social media marketing, Google Ads PPC, email marketing automation, content marketing, and conversion rate optimisation as part of one connected strategy rather than isolated campaigns. If you only need one channel, such as PPC or SEO, we also offer those as standalone services.</p>
      </details>
      <details>
        <summary>How do you report on digital marketing performance?</summary>
        <p>You get monthly reports covering campaign performance, spend breakdown, lead attribution, and clear next steps. We track everything through GA4 and channel-native dashboards so you always know exactly what's working and why.</p>
      </details>
      <details>
        <summary>Is there a minimum contract length for digital marketing services?</summary>
        <p>We don't lock clients into long, rigid contracts. Most engagements run month-to-month after an initial strategy phase, so you can scale up, scale down, or change channel focus as your results and goals evolve.</p>
      </details>
      <details>
        <summary>How soon will I see results from digital marketing?</summary>
        <p>Paid channels like Google Ads and social ads can drive traffic and leads within the first few weeks. Organic and content-driven channels build momentum over 2-3 months. We agree realistic, channel-specific timelines with you before work starts.</p>
      </details>
      <details>
        <summary>Do I need a big budget to start with digital marketing?</summary>
        <p>No. We build a channel strategy and budget allocation around your actual goals and starting point, then scale spend as campaigns prove out. Many clients start with one or two channels and expand once they see measurable ROI.</p>
      </details>
  </div>
</section>

<section class="services-cta-section">
    <div class="container">
        <div class="services-cta-box">
            <div>
                <span class="services-page-kicker">Let's Grow</span>
                <h2>Ready to build a digital marketing engine that grows your business?</h2>
            </div>
            <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                Get a Free Consultation
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection
