@extends('frontend.layout')

@section('title', 'PPC Advertising Services | Google Ads & Paid Search Management')
@section('meta_description', 'Results-driven PPC advertising services - Google Ads, Search, Shopping, Display, and YouTube campaigns with keyword research, audience targeting, and continuous bid optimisation for maximum ROAS.')
@section('meta_keywords', 'PPC advertising, Google Ads management, paid search, pay per click marketing, Google Shopping ads, display advertising, YouTube ads, ROAS optimisation')

@section('styles')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "PPC Advertising",
      "serviceType": "Pay-Per-Click Advertising",
      "provider": {
        "@type": "Organization",
        "name": "DapperSolutions IT Services",
        "url": "https://dappersolution.com"
      },
      "description": "Search, Shopping, Display, and YouTube ad campaigns - keyword research, audience targeting, ad copy testing, and continuous bid optimisation for maximum ROAS.",
      "areaServed": "Worldwide",
      "url": "https://dappersolution.com/services/digital-marketing/ppc-advertising"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://dappersolution.com/"},
        {"@type": "ListItem", "position": 2, "name": "Services", "item": "https://dappersolution.com/services"},
        {"@type": "ListItem", "position": 3, "name": "Digital Marketing", "item": "https://dappersolution.com/services/digital-marketing"},
        {"@type": "ListItem", "position": 4, "name": "PPC Advertising", "item": "https://dappersolution.com/services/digital-marketing/ppc-advertising"}
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
      "name": "Should I run Google Ads or Meta Ads for my business?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "It depends on intent. Google Search Ads capture people actively searching to buy right now, while Meta Ads are stronger for building awareness and retargeting browsers who haven't converted yet. Most clients get the best ROAS running both together, but we'll recommend a starting channel based on your product and budget."
      }
    },
    {
      "@type": "Question",
      "name": "How much budget do I need for a PPC campaign?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "There's no universal minimum - it depends on your industry's cost-per-click and how fast you want data to compound. We review your market and goals during onboarding and recommend a realistic starting budget, then scale spend once a campaign proves its ROAS."
      }
    },
    {
      "@type": "Question",
      "name": "How do you track ROI and ROAS on ad spend?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We set up GA4 and Google Ads conversion tracking before launch, so every lead or sale is tied back to the exact campaign, ad group, and keyword that drove it. Monthly reports break down spend, conversions, and ROAS so you always know what your ad spend is actually delivering."
      }
    },
    {
      "@type": "Question",
      "name": "What's the difference between ad spend and your management fee?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ad spend goes directly to Google or Meta to run your campaigns and is billed separately from our management fee, which covers strategy, campaign builds, daily monitoring, bid optimisation, and reporting. You always see exactly how much is going to platform spend versus management."
      }
    },
    {
      "@type": "Question",
      "name": "Can you also build the landing pages my ads send traffic to?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We build dedicated, conversion-focused landing pages matched to ad intent, since sending paid traffic to a generic homepage is one of the biggest reasons campaigns underperform. Landing page optimisation is included as part of our PPC service."
      }
    }
  ]
}
</script>
@endsection

@section('content')

<section class="services-page-hero">
    <div class="services-page-hero__bg" style="background-image: linear-gradient(90deg, rgba(0,0,0,.96) 0%, rgba(0,0,0,.80) 48%, rgba(0,0,0,.35) 100%), url('https://images.pexels.com/photos/15635245/pexels-photo-15635245.jpeg?auto=compress&cs=tinysrgb&w=2200'); background-size: cover; background-position: center;"></div>
    <div class="services-page-hero__overlay"></div>
    <div class="container">
        <div class="services-page-hero__content">
            <nav class="svc-breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="{{ route('digital_marketing') }}">Digital Marketing</a>
                <i class="fa-solid fa-chevron-right"></i>
                <span>PPC Advertising</span>
            </nav>
            <span class="services-page-kicker">PPC Advertising</span>
            <h1>
                Paid search campaigns that turn<br>
                ad spend into real revenue
            </h1>
            <p>
                Google Search, Shopping, Display, and YouTube campaigns - built on keyword research,
                precise audience targeting, and continuous bid optimisation for maximum ROAS.
            </p>
            <div class="services-page-hero__actions">
                <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                    Get a Free Consultation
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="{{ route('digital_marketing') }}" class="services-page-btn services-page-btn--outline">
                    All Marketing Services
                </a>
            </div>
        </div>
    </div>
</section>


<section class="services-premium-v2">
    <div class="container">

        <div class="services-v2-head">
            <span class="services-page-kicker">What's Included</span>
            <h2>
                Every ad dollar tracked,<br>
                tested, and optimised.
            </h2>
            <p>
                We don't just launch ads and walk away - every campaign is actively managed,
                tested, and refined to lower your cost per acquisition and grow your ROAS.
            </p>
        </div>

        <div class="services-v2-layout">

            <a href="{{ route('contact_us') }}" class="service-feature-card">
                <div class="service-feature-img">
                    <img src="https://images.pexels.com/photos/31165586/pexels-photo-31165586.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Google Ads PPC campaign dashboard" loading="lazy" decoding="async">
                </div>
                <div class="service-feature-content">
                    <span class="service-tag">High ROI</span>
                    <h3>Google Search Ads</h3>
                    <p>
                        Keyword research, ad copy testing, and bid management for Google Search campaigns
                        that capture high-intent customers exactly when they're ready to buy.
                    </p>
                    <div class="service-feature-points">
                        <span><i class="fa-solid fa-check"></i> Keyword Research & Match Types</span>
                        <span><i class="fa-solid fa-check"></i> Ad Copy A/B Testing</span>
                        <span><i class="fa-solid fa-check"></i> Bid & Budget Optimisation</span>
                    </div>
                    <div class="service-card-action">
                        Launch My Search Campaign
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <div class="services-v2-stack">

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/11836075/pexels-photo-11836075.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Google Shopping ads for ecommerce products" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>01</span>
                        <h3>Google Shopping Ads</h3>
                        <p>Product feed optimisation and Shopping campaigns that put your products in front of buyers actively searching to purchase.</p>
                    </div>
                </a>

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/9749104/pexels-photo-9749104.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Display advertising banners across the web" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>02</span>
                        <h3>Display & Remarketing</h3>
                        <p>Banner campaigns and remarketing ads that keep your brand in front of visitors who didn't convert the first time.</p>
                    </div>
                </a>

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/6956300/pexels-photo-6956300.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="YouTube video advertising campaign" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>03</span>
                        <h3>YouTube Ads</h3>
                        <p>Video ad campaigns with precise audience targeting to build awareness and drive action at every stage of the funnel.</p>
                    </div>
                </a>

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/7661590/pexels-photo-7661590.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="PPC analytics and conversion tracking dashboard" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>04</span>
                        <h3>Conversion Tracking & Reporting</h3>
                        <p>GA4 and Google Ads conversion tracking with monthly reports so you always know exactly what your ad spend is delivering.</p>
                    </div>
                </a>

            </div>

        </div>

        <div class="services-v2-bottom">

            <a href="{{ route('contact_us') }}" class="service-wide-card">
                <span>05</span>
                <h3>Landing Page Optimisation for PPC</h3>
                <p>Dedicated, conversion-focused landing pages built to match ad intent and turn clicks into leads, not just traffic.</p>
                <i class="fa-solid fa-arrow-right"></i>
            </a>

            <a href="{{ route('contact_us') }}" class="service-wide-card">
                <span>06</span>
                <h3>Audience & Retargeting Strategy</h3>
                <p>Custom and lookalike audience targeting plus retargeting funnels that bring back high-intent visitors at a lower cost.</p>
                <i class="fa-solid fa-arrow-right"></i>
            </a>

            <a href="{{ route('contact_us') }}" class="service-wide-card">
                <span>07</span>
                <h3>Bid & Budget Management</h3>
                <p>Daily monitoring and bid adjustments across campaigns to maximise conversions while keeping cost per acquisition under control.</p>
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

    </div>
</section>


<section class="services-feature services-feature-v2">
    <div class="container">
        <div class="why-choose-box">

            <div class="why-choose-content">
                <span class="services-page-kicker">Why Work With Us</span>
                <h2>
                    PPC campaigns managed for ROI, not just clicks
                </h2>
                <p>
                    We treat every dollar of your ad spend like it's our own - campaigns are
                    structured, tested, and optimised continuously to drive real business results.
                </p>
                <div class="why-choose-grid">
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-bullseye"></i></div>
                        <div>
                            <h3>Strategy-First Approach</h3>
                            <p>We start with your business goals, audience research, and competitor analysis before launching a single ad.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-chart-bar"></i></div>
                        <div>
                            <h3>ROI-Focused Campaigns</h3>
                            <p>Every campaign is tracked, measured, and optimised for return on ad spend - not just clicks and impressions.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-layer-group"></i></div>
                        <div>
                            <h3>Full-Funnel Coverage</h3>
                            <p>Search, Shopping, Display, and YouTube working together to capture demand at every stage of the buyer journey.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-file-lines"></i></div>
                        <div>
                            <h3>Transparent Reporting</h3>
                            <p>Monthly reports with spend breakdown, conversion data, and clear next steps - full transparency, no smoke-and-mirrors.</p>
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
                <img src="https://images.pexels.com/photos/32459951/pexels-photo-32459951.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="PPC team reviewing Google Ads campaign performance" loading="lazy" decoding="async">
                <div class="why-floating-card why-floating-card--top">
                    <strong>5×</strong>
                    <span>Avg. ROAS</span>
                </div>
                <div class="why-floating-card why-floating-card--bottom">
                    <strong>7+</strong>
                    <span>Years Managing Ads</span>
                </div>
                <div class="why-tech-pill">
                    <i class="fa-solid fa-bullhorn"></i>
                    Google Ads · GA4 · Google Tag Manager
                </div>
            </div>

        </div>
    </div>
</section>


<section class="services-process services-process-v2">
    <div class="container">

        <div class="workflow-head">
            <span class="services-page-kicker">Our Approach</span>
            <h2>A 4 step PPC process built for sustainable ROAS</h2>
            <p>
                Great PPC management is not about launching ads and hoping for the best. Our
                structured process ensures every campaign is planned, executed, measured, and improved.
            </p>
        </div>

        <div class="workflow-layout">

            <div class="workflow-visual">
                <img src="https://images.pexels.com/photos/12641815/pexels-photo-12641815.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="PPC team planning Google Ads campaign strategy" loading="lazy" decoding="async">
                <div class="workflow-visual-content">
                    <span>PPC Blueprint</span>
                    <h3>Research · Build · Launch · Optimise</h3>
                </div>
            </div>

            <div class="workflow-steps">

                <div class="workflow-step">
                    <div class="workflow-no">01</div>
                    <div class="workflow-content">
                        <span>Research & Audit</span>
                        <h3>Understand your market and keyword opportunity</h3>
                        <p>Keyword research, competitor ad analysis, and a full audit of any existing campaigns before we spend a single dollar.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">02</div>
                    <div class="workflow-content">
                        <span>Campaign Build</span>
                        <h3>Structure campaigns, ad groups, and creatives</h3>
                        <p>Tightly themed ad groups, compelling ad copy, conversion tracking, and landing pages - all built before launch.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">03</div>
                    <div class="workflow-content">
                        <span>Launch & Manage</span>
                        <h3>Go live and actively monitor performance</h3>
                        <p>Daily monitoring, bid adjustments, and audience refinement - hands-on management from day one.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">04</div>
                    <div class="workflow-content">
                        <span>Optimise & Scale</span>
                        <h3>Report on results and scale what works</h3>
                        <p>Monthly performance reviews, ROAS analysis, and a clear plan for scaling winning campaigns and cutting underperformers.</p>
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
    <h2>PPC Advertising - Frequently Asked Questions</h2>
    <p class="hd-faq-sub">Answers to the questions US &amp; UK clients ask us most.</p>
      <details>
        <summary>Should I run Google Ads or Meta Ads for my business?</summary>
        <p>It depends on intent. Google Search Ads capture people actively searching to buy right now, while Meta Ads are stronger for building awareness and retargeting browsers who haven't converted yet. Most clients get the best ROAS running both together, but we'll recommend a starting channel based on your product and budget.</p>
      </details>
      <details>
        <summary>How much budget do I need for a PPC campaign?</summary>
        <p>There's no universal minimum - it depends on your industry's cost-per-click and how fast you want data to compound. We review your market and goals during onboarding and recommend a realistic starting budget, then scale spend once a campaign proves its ROAS.</p>
      </details>
      <details>
        <summary>How do you track ROI and ROAS on ad spend?</summary>
        <p>We set up GA4 and Google Ads conversion tracking before launch, so every lead or sale is tied back to the exact campaign, ad group, and keyword that drove it. Monthly reports break down spend, conversions, and ROAS so you always know what your ad spend is actually delivering.</p>
      </details>
      <details>
        <summary>What's the difference between ad spend and your management fee?</summary>
        <p>Ad spend goes directly to Google or Meta to run your campaigns and is billed separately from our management fee, which covers strategy, campaign builds, daily monitoring, bid optimisation, and reporting. You always see exactly how much is going to platform spend versus management.</p>
      </details>
      <details>
        <summary>Can you also build the landing pages my ads send traffic to?</summary>
        <p>Yes. We build dedicated, conversion-focused landing pages matched to ad intent, since sending paid traffic to a generic homepage is one of the biggest reasons campaigns underperform. Landing page optimisation is included as part of our PPC service.</p>
      </details>
  </div>
</section>

<section class="services-cta-section">
    <div class="container">
        <div class="services-cta-box">
            <div>
                <span class="services-page-kicker">Let's Grow</span>
                <h2>Ready to turn ad spend into a predictable revenue channel?</h2>
            </div>
            <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                Get a Free Consultation
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection
