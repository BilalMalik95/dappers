@extends('frontend.layout')

@section('title', 'Graphic Design & Branding Services | Logos, Identity & Visual Assets')
@section('meta_description', 'Professional graphic design & branding services - logos, brand guidelines, visual identity, social media graphics, and marketing materials that build trust and recognition.')
@section('meta_keywords', 'graphic design services, branding agency, logo design, brand identity, brand guidelines, social media graphics, marketing materials, visual identity design')

@section('styles')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Service",
      "name": "Graphic Design & Branding",
      "serviceType": "Graphic Design",
      "provider": {
        "@type": "Organization",
        "name": "DappersTech IT Services",
        "url": "https://dapperstech.com"
      },
      "description": "Logos, brand guidelines, visual identity, social media graphics, banners, and marketing materials - cohesive branding that builds trust and recognition across every platform.",
      "areaServed": "Worldwide",
      "url": "https://dapperstech.com/services/web-design/graphic-design-branding"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://dapperstech.com/"},
        {"@type": "ListItem", "position": 2, "name": "Services", "item": "https://dapperstech.com/services"},
        {"@type": "ListItem", "position": 3, "name": "Web Design", "item": "https://dapperstech.com/services/web-design"},
        {"@type": "ListItem", "position": 4, "name": "Graphic Design & Branding", "item": "https://dapperstech.com/services/web-design/graphic-design-branding"}
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
      "name": "What's included in a logo and brand identity package?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "A complete package includes your logo and its variations, a colour palette, typography selections, and a documented brand guidelines file. Many clients also add social media graphics and marketing materials so every touchpoint feels like one cohesive brand."
      }
    },
    {
      "@type": "Question",
      "name": "How many logo concepts will I see before we settle on a final design?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our process explores multiple logo concepts and moodboards in the Concept & Design stage, aligned to your brand personality. Once you choose a direction, we refine that concept with revisions until it's exactly right - rather than presenting one option and hoping it lands."
      }
    },
    {
      "@type": "Question",
      "name": "What are brand guidelines and why do I need them?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Brand guidelines are a documented style guide covering logo usage, colours, typography, and tone of voice. They keep your brand consistent across every team member, freelancer, and vendor who touches your marketing - so your business looks the same everywhere, every time."
      }
    },
    {
      "@type": "Question",
      "name": "Can you redesign our existing logo instead of starting from scratch?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We can evolve an existing logo and identity to feel more current while keeping the recognition you've already built, or start completely fresh if a full rebrand is the better move. We'll recommend the right approach after understanding your goals and audience."
      }
    },
    {
      "@type": "Question",
      "name": "Do you design social media graphics and marketing materials too?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Beyond logo and brand identity, we design on-brand social media post templates, story graphics, brochures, banners, business cards, and presentation decks - all built from your brand guidelines so every asset reinforces the same visual identity."
      }
    }
  ]
}
</script>
@endsection

@section('content')

<section class="services-page-hero">
    <div class="services-page-hero__bg" style="background-image: linear-gradient(90deg, rgba(0,0,0,.96) 0%, rgba(0,0,0,.78) 45%, rgba(0,0,0,.36) 100%), url('https://images.pexels.com/photos/7675029/pexels-photo-7675029.jpeg?auto=compress&cs=tinysrgb&w=2200'); background-size: cover; background-position: center;"></div>
    <div class="services-page-hero__overlay"></div>
    <div class="container">
        <div class="services-page-hero__content">
            <nav class="svc-breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('home') }}">Home</a>
                <i class="fa-solid fa-chevron-right"></i>
                <a href="{{ route('web_design') }}">Web Design</a>
                <i class="fa-solid fa-chevron-right"></i>
                <span>Graphic Design & Branding</span>
            </nav>
            <span class="services-page-kicker">Graphic Design & Branding</span>
            <h1>
                Visual identity that makes<br>
                your brand memorable
            </h1>
            <p>
                Logos, brand guidelines, visual identity, social media graphics, and marketing
                materials - cohesive branding that builds trust and recognition everywhere.
            </p>
            <div class="services-page-hero__actions">
                <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                    Get a Free Consultation
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="{{ route('web_design') }}" class="services-page-btn services-page-btn--outline">
                    All Design Services
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
                Brand identity built for<br>
                consistency and recognition.
            </h2>
            <p>
                From your logo to your last social media post, every visual asset is designed
                to feel like one cohesive brand - not a patchwork of mismatched graphics.
            </p>
        </div>

        <div class="services-v2-layout">

            <a href="{{ route('contact_us') }}" class="service-feature-card">
                <div class="service-feature-img">
                    <img src="https://images.pexels.com/photos/4348401/pexels-photo-4348401.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Logo and brand identity design on screen" loading="lazy" decoding="async">
                </div>
                <div class="service-feature-content">
                    <span class="service-tag">Most Requested</span>
                    <h3>Logo & Brand Identity</h3>
                    <p>
                        A distinctive, memorable logo paired with a full brand identity - colour palette,
                        typography, and imagery style that reflects who you are and stands out from competitors.
                    </p>
                    <div class="service-feature-points">
                        <span><i class="fa-solid fa-check"></i> Logo Design & Variations</span>
                        <span><i class="fa-solid fa-check"></i> Colour Palette & Typography</span>
                        <span><i class="fa-solid fa-check"></i> Brand Guidelines Document</span>
                    </div>
                    <div class="service-card-action">
                        Start Branding Project
                        <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </a>

            <div class="services-v2-stack">

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/6322370/pexels-photo-6322370.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Social media graphic templates" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>01</span>
                        <h3>Social Media Graphics</h3>
                        <p>On-brand post templates, story designs, and cover graphics that keep your social presence consistent and professional.</p>
                    </div>
                </a>

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/19400118/pexels-photo-19400118.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Marketing materials and brochure design" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>02</span>
                        <h3>Marketing Materials</h3>
                        <p>Brochures, banners, business cards, and presentation decks designed to reinforce your brand at every touchpoint.</p>
                    </div>
                </a>

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/9902807/pexels-photo-9902807.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Brand guidelines style guide" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>03</span>
                        <h3>Brand Guidelines</h3>
                        <p>A documented style guide covering logo usage, colours, typography, and tone - so your brand stays consistent across every team and vendor.</p>
                    </div>
                </a>

                <a href="{{ route('contact_us') }}" class="service-mini-card">
                    <div class="service-mini-icon">
                        <img src="https://images.pexels.com/photos/16323603/pexels-photo-16323603.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Brand strategy and positioning" loading="lazy" decoding="async">
                    </div>
                    <div>
                        <span>04</span>
                        <h3>Brand Strategy & Positioning</h3>
                        <p>Messaging framework and competitor analysis that defines what your brand stands for and how it stands out in the market.</p>
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
                <span class="services-page-kicker">Our Branding Philosophy</span>
                <h2>
                    Branding that builds trust at first glance
                </h2>
                <p>
                    A strong brand identity is not just a logo - it's a consistent visual language
                    that makes your business instantly recognisable and trustworthy.
                </p>
                <div class="why-choose-grid">
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-palette"></i></div>
                        <div>
                            <h3>Cohesive Visual Language</h3>
                            <p>Every asset - from logo to social posts - shares the same colours, fonts, and tone for instant recognition.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-magnifying-glass"></i></div>
                        <div>
                            <h3>Competitor-Aware Design</h3>
                            <p>We research your market first, so your brand stands apart instead of blending in with competitors.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                        <div>
                            <h3>100% Custom, No Templates</h3>
                            <p>Every logo and asset is designed from scratch to reflect your unique brand identity and values.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-icon"><i class="fa-solid fa-file-lines"></i></div>
                        <div>
                            <h3>Documented Guidelines</h3>
                            <p>A clear brand guide so your team and future vendors always use your assets correctly.</p>
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
                        <span>5-star design portfolio · 40+ brands built</span>
                    </div>
                </div>
            </div>

            <div class="why-choose-visual">
                <img src="https://images.pexels.com/photos/16313508/pexels-photo-16313508.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Brand identity moodboard and logo design" loading="lazy" decoding="async">
                <div class="why-floating-card why-floating-card--top">
                    <strong>100%</strong>
                    <span>Custom Identity</span>
                </div>
                <div class="why-floating-card why-floating-card--bottom">
                    <strong>40+</strong>
                    <span>Brands Delivered</span>
                </div>
                <div class="why-tech-pill">
                    <i class="fa-solid fa-brush"></i>
                    Illustrator · Photoshop · Figma
                </div>
            </div>

        </div>
    </div>
</section>


<section class="services-process services-process-v2">
    <div class="container">

        <div class="workflow-head">
            <span class="services-page-kicker">Branding Process</span>
            <h2>A structured branding process from brief to brand book</h2>
            <p>
                Strong branding follows a clear process - we work closely with you at every
                stage to ensure the final identity truly represents your business.
            </p>
        </div>

        <div class="workflow-layout">

            <div class="workflow-visual">
                <img src="https://images.pexels.com/photos/16698508/pexels-photo-16698508.jpeg?auto=compress&cs=tinysrgb&w=1400" alt="Branding workflow moodboard and logo sketches" loading="lazy" decoding="async">
                <div class="workflow-visual-content">
                    <span>Our Branding Flow</span>
                    <h3>Discover · Design · Refine · Deliver</h3>
                </div>
            </div>

            <div class="workflow-steps">

                <div class="workflow-step">
                    <div class="workflow-no">01</div>
                    <div class="workflow-content">
                        <span>Discovery & Brief</span>
                        <h3>Understand your brand, audience, and competitors</h3>
                        <p>A deep dive into your business goals, target audience, and competitor landscape to create a clear creative brief.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">02</div>
                    <div class="workflow-content">
                        <span>Concept & Design</span>
                        <h3>Explore logo concepts and visual direction</h3>
                        <p>Multiple logo concepts and moodboards explored, with colour and typography options aligned to your brand personality.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">03</div>
                    <div class="workflow-content">
                        <span>Refinement</span>
                        <h3>Refine the chosen direction based on feedback</h3>
                        <p>Your selected concept is refined into a polished logo and identity system, with revisions until it's just right.</p>
                    </div>
                </div>

                <div class="workflow-step">
                    <div class="workflow-no">04</div>
                    <div class="workflow-content">
                        <span>Delivery & Guidelines</span>
                        <h3>Final assets and a documented brand guide</h3>
                        <p>All logo files, colour codes, fonts, and a full brand guidelines document delivered, ready for use everywhere.</p>
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
    <h2>Graphic Design &amp; Branding - Frequently Asked Questions</h2>
    <p class="hd-faq-sub">Answers to the questions US &amp; UK clients ask us most.</p>
      <details>
        <summary>What's included in a logo and brand identity package?</summary>
        <p>A complete package includes your logo and its variations, a colour palette, typography selections, and a documented brand guidelines file. Many clients also add social media graphics and marketing materials so every touchpoint feels like one cohesive brand.</p>
      </details>
      <details>
        <summary>How many logo concepts will I see before we settle on a final design?</summary>
        <p>Our process explores multiple logo concepts and moodboards in the Concept & Design stage, aligned to your brand personality. Once you choose a direction, we refine that concept with revisions until it's exactly right - rather than presenting one option and hoping it lands.</p>
      </details>
      <details>
        <summary>What are brand guidelines and why do I need them?</summary>
        <p>Brand guidelines are a documented style guide covering logo usage, colours, typography, and tone of voice. They keep your brand consistent across every team member, freelancer, and vendor who touches your marketing - so your business looks the same everywhere, every time.</p>
      </details>
      <details>
        <summary>Can you redesign our existing logo instead of starting from scratch?</summary>
        <p>Yes. We can evolve an existing logo and identity to feel more current while keeping the recognition you've already built, or start completely fresh if a full rebrand is the better move. We'll recommend the right approach after understanding your goals and audience.</p>
      </details>
      <details>
        <summary>Do you design social media graphics and marketing materials too?</summary>
        <p>Yes. Beyond logo and brand identity, we design on-brand social media post templates, story graphics, brochures, banners, business cards, and presentation decks - all built from your brand guidelines so every asset reinforces the same visual identity.</p>
      </details>
  </div>
</section>

<section class="services-cta-section">
    <div class="container">
        <div class="services-cta-box">
            <div>
                <span class="services-page-kicker">Let's Build Your Brand</span>
                <h2>Ready for a brand identity people remember?</h2>
            </div>
            <a href="{{ route('contact_us') }}" class="services-page-btn services-page-btn--primary">
                Get a Free Consultation
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection
