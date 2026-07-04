<header class="section theme-header">
    <div class="container">
        <div class="navbar">

            <a href="{{ route('home') }}" class="logo">
                <img
                    src="{{ asset('frontend/assets/images/logo/dapperstech-logo-trimmed.png') }}"
                    alt="DappersTech Logo"
                    class="header-logo-img logo-for-dark">
            </a>

            <button type="button" id="mobileNavToggle" class="mobile-nav-toggle" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="primaryNavMenu">
                <span></span><span></span><span></span>
            </button>

            <nav class="nav-menu" id="primaryNavMenu" aria-label="Primary navigation">
                <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}" @if(request()->routeIs('home')) aria-current="page" @endif>
                    Home
                </a>

               

                {{-- Single Services mega-menu --}}
                <div class="nav-item-dropdown nav-has-mega nav-dropdown-group">
                    <span class="nav-dropdown-trigger {{ request()->routeIs('services','ai_development','ai_rag_systems','ai_agents','ai_llm_integration','ai_backend_deployment','web_development','web_dev_custom','web_dev_laravel','web_dev_php','web_design','ui_ux_design','graphic_design_branding','responsive_design','digital_marketing','ppc_advertising','seo_optimization') ? 'active' : '' }}"
                       role="button" tabindex="0" aria-haspopup="true">
                        Services
                        <i class="fa-solid fa-chevron-down nav-chevron"></i>
                    </span>

                    <div class="nav-mega-menu" role="menu">

                        {{-- Col 1: AI Development --}}
                        <div class="nav-mega-col">
                            <a href="{{ route('ai_development') }}" class="nav-mega-heading">
                                <i class="fa-solid fa-brain"></i>
                                AI Development
                            </a>
                            <a href="{{ route('ai_rag_systems') }}" class="nav-mega-item {{ request()->routeIs('ai_rag_systems') ? 'nav-dd-active' : '' }}">
                                <span class="nav-mega-item-icon"><i class="fa-solid fa-database"></i></span>
                                <span class="nav-mega-item-text">
                                    <span class="nav-mega-item-title">RAG Systems</span>
                                    <span class="nav-mega-item-desc">Retrieval-augmented generation grounded in your data.</span>
                                </span>
                            </a>
                            <a href="{{ route('ai_agents') }}" class="nav-mega-item {{ request()->routeIs('ai_agents') ? 'nav-dd-active' : '' }}">
                                <span class="nav-mega-item-icon"><i class="fa-solid fa-robot"></i></span>
                                <span class="nav-mega-item-text">
                                    <span class="nav-mega-item-title">AI Agents</span>
                                    <span class="nav-mega-item-desc">Tool-calling agents with guardrails and fallbacks.</span>
                                </span>
                            </a>
                            <a href="{{ route('ai_llm_integration') }}" class="nav-mega-item {{ request()->routeIs('ai_llm_integration') ? 'nav-dd-active' : '' }}">
                                <span class="nav-mega-item-icon"><i class="fa-solid fa-comments"></i></span>
                                <span class="nav-mega-item-text">
                                    <span class="nav-mega-item-title">Custom GPT & LLM Integration</span>
                                    <span class="nav-mega-item-desc">OpenAI & Claude integration into your product.</span>
                                </span>
                            </a>
                            <a href="{{ route('ai_backend_deployment') }}" class="nav-mega-item {{ request()->routeIs('ai_backend_deployment') ? 'nav-dd-active' : '' }}">
                                <span class="nav-mega-item-icon"><i class="fa-solid fa-server"></i></span>
                                <span class="nav-mega-item-text">
                                    <span class="nav-mega-item-title">AI Backend & Deployment</span>
                                    <span class="nav-mega-item-desc">Production infrastructure, monitoring, and evals.</span>
                                </span>
                            </a>
                        </div>

                        <div class="nav-mega-divider"></div>

                        {{-- Col 2: Web Development --}}
                        <div class="nav-mega-col">
                            <a href="{{ route('web_development') }}" class="nav-mega-heading">
                                <i class="fa-solid fa-code"></i>
                                Web Development
                            </a>
                            <a href="{{ route('web_dev_custom') }}" class="nav-mega-item {{ request()->routeIs('web_dev_custom') ? 'nav-dd-active' : '' }}">
                                <span class="nav-mega-item-icon"><i class="fa-solid fa-laptop-code"></i></span>
                                <span class="nav-mega-item-text">
                                    <span class="nav-mega-item-title">Custom Website Development</span>
                                    <span class="nav-mega-item-desc">Tailored builds engineered for your business goals.</span>
                                </span>
                            </a>
                            <a href="{{ route('web_dev_laravel') }}" class="nav-mega-item {{ request()->routeIs('web_dev_laravel') ? 'nav-dd-active' : '' }}">
                                <span class="nav-mega-item-icon"><i class="fa-solid fa-layer-group"></i></span>
                                <span class="nav-mega-item-text">
                                    <span class="nav-mega-item-title">Laravel Development</span>
                                    <span class="nav-mega-item-desc">Robust, scalable apps built on the Laravel framework.</span>
                                </span>
                            </a>
                            <a href="{{ route('web_dev_php') }}" class="nav-mega-item {{ request()->routeIs('web_dev_php') ? 'nav-dd-active' : '' }}">
                                <span class="nav-mega-item-icon"><i class="fa-brands fa-php"></i></span>
                                <span class="nav-mega-item-text">
                                    <span class="nav-mega-item-title">PHP Development</span>
                                    <span class="nav-mega-item-desc">Reliable backend systems with clean, secure code.</span>
                                </span>
                            </a>
                        </div>

                        <div class="nav-mega-divider"></div>

                        {{-- Col 3: Web Design --}}
                        <div class="nav-mega-col">
                            <a href="{{ route('web_design') }}" class="nav-mega-heading">
                                <i class="fa-solid fa-palette"></i>
                                Web Design
                            </a>
                            <a href="{{ route('ui_ux_design') }}" class="nav-mega-item {{ request()->routeIs('ui_ux_design') ? 'nav-dd-active' : '' }}">
                                <span class="nav-mega-item-icon"><i class="fa-solid fa-pen-ruler"></i></span>
                                <span class="nav-mega-item-text">
                                    <span class="nav-mega-item-title">UI/UX Design</span>
                                    <span class="nav-mega-item-desc">Intuitive interfaces that keep users engaged.</span>
                                </span>
                            </a>
                            <a href="{{ route('graphic_design_branding') }}" class="nav-mega-item {{ request()->routeIs('graphic_design_branding') ? 'nav-dd-active' : '' }}">
                                <span class="nav-mega-item-icon"><i class="fa-solid fa-paintbrush"></i></span>
                                <span class="nav-mega-item-text">
                                    <span class="nav-mega-item-title">Graphic Design & Branding</span>
                                    <span class="nav-mega-item-desc">Visual identity that makes your brand memorable.</span>
                                </span>
                            </a>
                            <a href="{{ route('responsive_design') }}" class="nav-mega-item {{ request()->routeIs('responsive_design') ? 'nav-dd-active' : '' }}">
                                <span class="nav-mega-item-icon"><i class="fa-solid fa-mobile-screen"></i></span>
                                <span class="nav-mega-item-text">
                                    <span class="nav-mega-item-title">Responsive Design</span>
                                    <span class="nav-mega-item-desc">Pixel-perfect layouts on every screen size.</span>
                                </span>
                            </a>
                        </div>

                        <div class="nav-mega-divider"></div>

                        {{-- Col 4: Digital Marketing --}}
                        <div class="nav-mega-col">
                            <a href="{{ route('digital_marketing') }}" class="nav-mega-heading">
                                <i class="fa-solid fa-bullhorn"></i>
                                Digital Marketing
                            </a>
                            <a href="{{ route('seo_optimization') }}" class="nav-mega-item {{ request()->routeIs('seo_optimization') ? 'nav-dd-active' : '' }}">
                                <span class="nav-mega-item-icon"><i class="fa-solid fa-magnifying-glass-chart"></i></span>
                                <span class="nav-mega-item-text">
                                    <span class="nav-mega-item-title">SEO Optimization</span>
                                    <span class="nav-mega-item-desc">Rank higher and drive organic traffic that converts.</span>
                                </span>
                            </a>
                            <a href="{{ route('digital_marketing') }}#social-media" class="nav-mega-item">
                                <span class="nav-mega-item-icon"><i class="fa-solid fa-hashtag"></i></span>
                                <span class="nav-mega-item-text">
                                    <span class="nav-mega-item-title">Social Media Marketing</span>
                                    <span class="nav-mega-item-desc">Grow your audience and engagement across platforms.</span>
                                </span>
                            </a>
                            <a href="{{ route('ppc_advertising') }}" class="nav-mega-item {{ request()->routeIs('ppc_advertising') ? 'nav-dd-active' : '' }}">
                                <span class="nav-mega-item-icon"><i class="fa-solid fa-rectangle-ad"></i></span>
                                <span class="nav-mega-item-text">
                                    <span class="nav-mega-item-title">PPC Advertising</span>
                                    <span class="nav-mega-item-desc">Targeted campaigns that maximize ad spend ROI.</span>
                                </span>
                            </a>
                        </div>

                    </div>
                </div>

                <a class="{{ request()->routeIs('blogs') ? 'active' : '' }}" href="{{ route('blogs') }}" @if(request()->routeIs('blogs')) aria-current="page" @endif>
                    Blog
                </a>
                 <a class="{{ request()->routeIs('aboutus') ? 'active' : '' }}" href="{{ route('aboutus') }}" @if(request()->routeIs('aboutus')) aria-current="page" @endif>
                    About Us
                </a>
                <a class="{{ request()->routeIs('team') ? 'active' : '' }}" href="{{ route('team') }}" @if(request()->routeIs('team')) aria-current="page" @endif>
                    Team
                </a>

                <a class="{{ request()->routeIs('contact_us') ? 'active' : '' }}" href="{{ route('contact_us') }}" @if(request()->routeIs('contact_us')) aria-current="page" @endif>
                    Contact Us
                </a>
            </nav>

            <a href="tel:+923339302731" class="btn btn-primary header-cta">
                Call Now
            </a>

        </div>
    </div>
</header>

<script>
(function () {
    var header = document.querySelector('.theme-header');
    if (!header) return;
    function setHeaderHeight() {
        document.documentElement.style.setProperty('--header-h', header.offsetHeight + 'px');
    }
    setHeaderHeight();
    window.addEventListener('resize', setHeaderHeight);
})();

function isMobileNav() {
    return window.matchMedia('(max-width: 1200px)').matches;
}

document.querySelectorAll('.nav-dropdown-group').forEach(function (group) {
    var closeTimer = null;

    function open() {
        clearTimeout(closeTimer);
        group.classList.add('is-open');
    }

    function scheduleClose() {
        clearTimeout(closeTimer);
        closeTimer = setTimeout(function () {
            group.classList.remove('is-open');
        }, 300);
    }

    group.addEventListener('mouseenter', function () {
        if (!isMobileNav()) open();
    });
    group.addEventListener('mouseleave', function () {
        if (!isMobileNav()) scheduleClose();
    });
    group.addEventListener('focusin', function () {
        if (!isMobileNav()) open();
    });
    group.addEventListener('focusout', function (e) {
        if (!isMobileNav() && !group.contains(e.relatedTarget)) {
            scheduleClose();
        }
    });

    var trigger = group.querySelector('.nav-dropdown-trigger');
    if (trigger) {
        trigger.addEventListener('click', function (e) {
            if (isMobileNav()) {
                e.preventDefault();
                group.classList.toggle('is-open');
            }
        });
        trigger.addEventListener('keydown', function (e) {
            if (isMobileNav() && (e.key === 'Enter' || e.key === ' ')) {
                e.preventDefault();
                group.classList.toggle('is-open');
            }
        });
    }
});

(function () {
    var toggle = document.getElementById('mobileNavToggle');
    var navMenu = document.getElementById('primaryNavMenu');
    if (!toggle || !navMenu) return;

    function closeMobileNav() {
        document.body.classList.remove('mobile-nav-open');
        toggle.setAttribute('aria-expanded', 'false');
    }

    toggle.addEventListener('click', function () {
        var isOpen = document.body.classList.toggle('mobile-nav-open');
        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    navMenu.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
            if (isMobileNav()) closeMobileNav();
        });
    });

    document.addEventListener('click', function (e) {
        if (!document.body.classList.contains('mobile-nav-open')) return;
        if (navMenu.contains(e.target) || toggle.contains(e.target)) return;
        closeMobileNav();
    });

    window.addEventListener('resize', function () {
        if (!isMobileNav()) closeMobileNav();
    });
})();
</script>
