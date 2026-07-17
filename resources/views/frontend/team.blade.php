@extends('frontend.layout')

@section('title', 'Meet Our Team | DappersTech Software & IT Experts')
@section('meta_description', 'Meet the DappersTech team: the founders, engineers, designers, and growth specialists behind every project we deliver worldwide.')
@section('meta_keywords', 'DappersTech team, Bilal Malik, software development team, web development experts, UI UX designers, IT services team, Laravel developers, digital marketing team')

@section('styles')
@php
    $personNodes = $teamMembers->reject(fn ($member) => $member->is_placeholder)->map(function ($member) {
        $node = [
            '@type' => 'Person',
            'name' => $member->name,
            'jobTitle' => $member->designation,
            'worksFor' => ['@id' => url('/#organization'), '@type' => 'Organization', 'name' => 'DappersTech IT Services'],
        ];

        if ($member->image) {
            $node['image'] = asset('frontend/assets/images/team/' . $member->image);
        }
        if ($member->bio) {
            $node['description'] = $member->bio;
        }

        $sameAs = array_filter([$member->linkedin, $member->github, $member->website]);
        if (!empty($sameAs)) {
            $node['sameAs'] = array_values($sameAs);
        }

        if ($member->is_founder) {
            $node['url'] = $member->website ?: url('/team');
        }

        return $node;
    })->values()->all();

    $schemaGraph = [
        [
            '@type' => 'AboutPage',
            'name' => 'Meet Our Team | DappersTech',
            'url' => url('/team'),
            'description' => 'Meet the DappersTech team: the founders, engineers, designers, and growth specialists behind every project we deliver worldwide.',
            'mainEntity' => [
                '@id' => url('/#organization'),
                '@type' => 'Organization',
                'name' => 'DappersTech IT Services',
                'url' => url('/'),
                'employee' => $personNodes,
            ],
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Our Team', 'item' => url('/team')],
            ],
        ],
    ];
@endphp
<script type="application/ld+json">
{!! json_encode(['@context' => 'https://schema.org', '@graph' => $schemaGraph], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endsection

@section('content')

<section class="team-hero">
    <div class="container">
        <div class="team-hero-grid">

            <div class="team-hero-content">
                <span class="team-label">Meet The Team</span>

                <h1>
                    Meet the team behind DappersTech
                </h1>

                <p>
                    @if ($founder)
                        DappersTech is founded by {{ $founder->name }}, {{ $founder->designation }}, specialising in
                        backend systems, SaaS platforms, Generative AI integration, payment systems, and workflow automation.
                        40+ software systems shipped. 5-star Upwork rating.
                    @else
                        DappersTech is a focused software studio delivering backend systems, SaaS platforms,
                        Generative AI integration, payment systems, and workflow automation.
                        40+ software systems shipped. 5-star Upwork rating.
                    @endif
                </p>
            </div>
        </div>
    </div>
</section>


<section class="team-members-section">
    <div class="container">

        <div class="team-section-head">
            <span class="team-label">Our Team</span>
            <h2>The people behind every project</h2>
                   </div>

        <div class="team-person-grid">

            @forelse ($teamMembers as $member)
                @if ($member->is_founder)
                    <article class="founder-card" itemscope itemtype="https://schema.org/Person">
                        <div class="founder-card-photo">
                            @if ($member->image)
                                <img src="{{ asset('frontend/assets/images/team/' . $member->image) }}"
                                     alt="{{ $member->name }}, {{ $member->designation }} at DappersTech"
                                     width="320" height="320" loading="lazy" decoding="async" itemprop="image">
                            @else
                                <span class="founder-card-fallback" aria-hidden="true">{{ Illuminate\Support\Str::of($member->name)->explode(' ')->map(fn($w) => mb_substr($w, 0, 1))->take(2)->implode('') }}</span>
                            @endif

                            <span class="founder-card-tag">Founder</span>
                        </div>

                        <div class="founder-card-body">
                            <h3 itemprop="name">{{ $member->name }}</h3>
                            <span class="founder-card-role" itemprop="jobTitle">{{ $member->designation }}</span>

                            @if ($member->bio)
                                <p class="founder-card-bio" itemprop="description">{{ $member->bio }}</p>
                            @endif

                            <a href="https://malikbilal.com" target="_blank" rel="noopener" class="founder-card-link" itemprop="url">
                                <i class="fa-solid fa-globe"></i> View Portfolio
                            </a>
                        </div>
                    </article>
                @else
                    <article class="team-person-card {{ $member->is_placeholder ? 'team-person-card--placeholder' : '' }}"
                        @if (!$member->is_placeholder) itemscope itemtype="https://schema.org/Person" @endif>
                        <div class="team-person-photo">
                            @if ($member->image)
                                <img src="{{ asset('frontend/assets/images/team/' . $member->image) }}"
                                     alt="{{ $member->name }}, {{ $member->designation }} at DappersTech"
                                     width="320" height="320" loading="lazy" decoding="async" @if (!$member->is_placeholder) itemprop="image" @endif>
                            @else
                                <span class="team-person-fallback" aria-hidden="true">{{ Illuminate\Support\Str::of($member->name)->explode(' ')->map(fn($w) => mb_substr($w, 0, 1))->take(2)->implode('') }}</span>
                            @endif

                            @if ($member->is_placeholder)
                                <span class="team-person-founder-tag team-person-founder-tag--placeholder">Open Role</span>
                            @endif
                        </div>

                        <div class="team-person-body">
                            <h3 @if (!$member->is_placeholder) itemprop="name" @endif>{{ $member->name }}</h3>
                            <span class="team-person-role" @if (!$member->is_placeholder) itemprop="jobTitle" @endif>{{ $member->designation }}</span>

                            @if ($member->bio)
                                <p class="team-person-bio" @if (!$member->is_placeholder) itemprop="description" @endif>{{ $member->bio }}</p>
                            @endif
                       </div>
                    </article>
                @endif
            @empty
                <p class="team-empty-state">Team profiles are being updated check back shortly.</p>
            @endforelse

        </div>

    </div>
</section>


<section class="team-culture-section">
    <div class="container">

        <div class="team-culture-layout">

            <div class="team-culture-content">
                <span class="team-label">Our Culture</span>

                <h2>We work with clarity, creativity, and technical responsibility.</h2>

                <p>
                    Our team culture is built on communication, learning, clean execution, and long-term client success.
                    We believe every project should be easy to manage, simple to scale, and valuable for the business.
                </p>
            </div>

            <div class="team-culture-list">

                <div class="team-culture-item">
                    <div class="team-culture-icon"><i class="fa-solid fa-comments"></i></div>
                    <div>
                        <h3>Clear Communication</h3>
                        <p>We keep clients updated with progress, tasks, timelines, and next steps.</p>
                    </div>
                </div>

                <div class="team-culture-item">
                    <div class="team-culture-icon"><i class="fa-solid fa-code"></i></div>
                    <div>
                        <h3>Quality Development</h3>
                        <p>We focus on clean code, secure architecture, and maintainable systems.</p>
                    </div>
                </div>

                <div class="team-culture-item">
                    <div class="team-culture-icon"><i class="fa-solid fa-lightbulb"></i></div>
                    <div>
                        <h3>Design Thinking</h3>
                        <p>We create digital experiences that are modern, simple, and user-friendly.</p>
                    </div>
                </div>

                <div class="team-culture-item">
                    <div class="team-culture-icon"><i class="fa-solid fa-life-ring"></i></div>
                    <div>
                        <h3>Long-Term Support</h3>
                        <p>We help clients improve, update, and scale their digital products after launch.</p>
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>


<section class="team-skills-section">
    <div class="container">

        <div class="team-skills-head">
            <span class="team-label">What We Work With</span>
            <h2>Technologies and skills our team uses</h2>
        </div>

    </div>

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
            <div class="marquee-item"><span class="marquee-star">✱</span> n8n, Make, Zapier</div>
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
            <div class="marquee-item"><span class="marquee-star">✱</span> n8n, Make, Zapier</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> RAG & Vector DBs</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Cloud Deployment</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Security Hardening</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Multi-Tenant Systems</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Subscription Billing</div>
            <div class="marquee-item"><span class="marquee-star">✱</span> Workflow Automation</div>
        </div>
    </div>
</section>


<section class="section testimonial">
    <div class="quote-big quote-left">“</div>
    <div class="quote-big quote-right">”</div>
    <div class="container">

        <div class="testimonial-card">
            <div class="testimonial-author">
                <div class="testimonial-avatar-fallback" aria-hidden="true"><i class="fa-solid fa-users"></i></div>
                <h4>DappersTech <span>Engineering Team</span></h4>
                <span class="testimonial-badge"><i class="fa-solid fa-quote-left"></i> Message From The Team</span>
            </div>
            <blockquote>
                "We're engineers first. Every backend, every integration, and every AI workflow we
                ship is tested in real conditions before it reaches your users."
            </blockquote>
        </div>

    </div>
</section>

<section class="team-cta-section">
    <div class="container">
        <div class="team-cta-box">
            <div>
                <span class="team-label">Work With Us</span>
                <h2>Have a project idea? Our team is ready to build it.</h2>
            </div>

            <a href="{{ route('contact_us') }}" class="team-main-btn">
                Start a Project
                <i class="fa-solid fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

@endsection
