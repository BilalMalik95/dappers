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
                    <a class="nav-dropdown-trigger {{ request()->routeIs('ai_rag_systems','ai_agents','ai_llm_integration','ai_backend_deployment','web_dev_custom','web_dev_laravel','web_dev_php','ui_ux_design','graphic_design_branding','responsive_design') ? 'active' : '' }}"
                       role="button" tabindex="0" aria-haspopup="true">
                        Services
                        <i class="fa-solid fa-chevron-down nav-chevron"></i>
                    </a>

                    <div class="nav-mega-menu" role="menu">

                        {{-- Col 1: AI Development --}}
                        <div class="nav-mega-col">
                            <a class="nav-mega-heading">
                                <i class="fa-solid fa-brain"></i>
                                AI Development
                                <i class="fa-solid fa-chevron-down nav-mega-heading-chevron"></i>
                            </a>
                            <div class="nav-mega-items">
                            <a href="{{ route('ai_rag_systems') }}" class="nav-mega-item {{ request()->routeIs('ai_rag_systems') ? 'nav-dd-active' : '' }}">
                                <span class="nav-mega-item-icon"><i class="fa-solid fa-database"></i></span>
                                <span class="nav-mega-item-text">
                                    <span class="nav-mega-item-title">RAG Systems</span>
                                    <span class="nav-mega-item-desc">Retrieval augmented generation grounded in your data.</span>
                                </span>
                            </a>
                            <a href="{{ route('ai_agents') }}" class="nav-mega-item {{ request()->routeIs('ai_agents') ? 'nav-dd-active' : '' }}">
                                <span class="nav-mega-item-icon"><i class="fa-solid fa-robot"></i></span>
                                <span class="nav-mega-item-text">
                                    <span class="nav-mega-item-title">AI Agents</span>
                                    <span class="nav-mega-item-desc">Tool calling agents with guardrails and fallbacks.</span>
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
                        </div>

                        <div class="nav-mega-divider"></div>

                        {{-- Col 2: Web Development --}}
                        <div class="nav-mega-col">
                            <a class="nav-mega-heading">
                                <i class="fa-solid fa-code"></i>
                                Web Development
                                <i class="fa-solid fa-chevron-down nav-mega-heading-chevron"></i>
                            </a>
                            <div class="nav-mega-items">
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
                        </div>

                        <div class="nav-mega-divider"></div>

                        {{-- Col 3: Web Design --}}
                        <div class="nav-mega-col">
                            <a class="nav-mega-heading">
                                <i class="fa-solid fa-palette"></i>
                                Web Design
                                <i class="fa-solid fa-chevron-down nav-mega-heading-chevron"></i>
                            </a>
                            <div class="nav-mega-items">
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
                                    <span class="nav-mega-item-desc">Pixel perfect layouts on every screen size.</span>
                                </span>
                            </a>
                            </div>
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

            <a href="https://wa.me/923339994544" target="_blank" rel="noopener" class="btn btn-primary header-cta" aria-label="Chat on WhatsApp">
                <i class="fa-brands fa-whatsapp"></i>
                <span>WhatsApp</span>
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
            e.preventDefault();
            e.stopImmediatePropagation();
            if (isMobileNav()) {
                group.classList.toggle('is-open');
            } else {
                // Hover already previews the menu on desktop; a click should just
                // make sure it's open (and stays open), not toggle it shut again.
                open();
            }
        });
        trigger.addEventListener('keydown', function (e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                if (isMobileNav()) {
                    group.classList.toggle('is-open');
                } else {
                    open();
                }
            }
        });
    }

    document.addEventListener('click', function (e) {
        if (!isMobileNav() && !group.contains(e.target)) {
            group.classList.remove('is-open');
        }
    });

    // On mobile, each category heading toggles its own sub-list open/closed
    // (like the footer accordion) instead of dumping every service at once.
    group.querySelectorAll('.nav-mega-heading').forEach(function (heading) {
        heading.addEventListener('click', function (e) {
            if (!isMobileNav()) return;
            e.preventDefault();
            e.stopImmediatePropagation();
            heading.closest('.nav-mega-col').classList.toggle('is-open');
        });
    });
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
