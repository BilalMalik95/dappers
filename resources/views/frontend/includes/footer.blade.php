<script>
document.addEventListener('DOMContentLoaded', function () {
    function isMobileFooter() {
        return window.matchMedia('(max-width: 768px)').matches;
    }

    document.querySelectorAll('.footer-col-toggle').forEach(function (toggle) {
        toggle.addEventListener('click', function () {
            if (!isMobileFooter()) return;
            toggle.closest('.footer-col--collapsible').classList.toggle('is-open');
        });
    });

    document.querySelectorAll('.footer-sublink-trigger').forEach(function (trigger) {
        trigger.addEventListener('click', function (e) {
            e.preventDefault();
            var group = trigger.closest('.footer-sublink-group');
            var wasOpen = group.classList.contains('is-open');
            group.parentElement.querySelectorAll('.footer-sublink-group.is-open').forEach(function (g) {
                g.classList.remove('is-open');
            });
            if (!wasOpen) group.classList.add('is-open');
        });
    });

    document.addEventListener('click', function (e) {
        document.querySelectorAll('.footer-sublink-group.is-open').forEach(function (g) {
            if (!g.contains(e.target)) g.classList.remove('is-open');
        });
    });
});

function showSiteModal(type, message, title) {
    var modal = document.getElementById('siteNoticeModal');
    if (!modal) {
        alert(message);
        return;
    }

    var panel = document.getElementById('siteNoticeModalPanel');
    var titleEl = document.getElementById('siteNoticeModalTitle');
    var messageEl = document.getElementById('siteNoticeModalMessage');
    var iconEl = document.getElementById('siteNoticeModalIcon');

    panel.classList.remove('success', 'error');
    panel.classList.add(type === 'error' ? 'error' : 'success');
    titleEl.textContent = title || (type === 'error' ? 'Something went wrong' : 'Thank you!');
    messageEl.textContent = message || '';
    iconEl.innerHTML = type === 'error' ? '<i class="fa-solid fa-triangle-exclamation"></i>' : '<i class="fa-solid fa-check"></i>';

    modal.classList.add('open');
    modal.setAttribute('aria-hidden', 'false');
}

function closeSiteModal() {
    var modal = document.getElementById('siteNoticeModal');
    if (!modal) return;
    modal.classList.remove('open');
    modal.setAttribute('aria-hidden', 'true');
}

function sendEmail() {
    const emailInput = document.getElementById("email");
    const userEmail = emailInput.value.trim();

    if (!userEmail) {
        showSiteModal('error', 'Please enter your email address.');
        return;
    }

    fetch('{{ route('newsletter.subscribe') }}', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ email: userEmail })
    })
        .then(response => response.json().then(data => ({ status: response.status, data })))
        .then(({ status, data }) => {
            if (status === 200) {
                emailInput.value = '';
                showSiteModal('success', data.message || 'Thanks for contacting us! We will respond within 24 hours.');
            } else {
                showSiteModal('error', data.message || 'Unable to subscribe right now. Please try again later.');
            }
        })
        .catch(() => {
            showSiteModal('error', 'Unable to subscribe right now. Please try again later.');
        });
}
</script>
<footer class="section footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-left">
                <h2>Let's build your next <span class="scribble">AI-powered</span> <br class="footer-heading-break">digital product together</h2>
            </div>
            <div class="footer-right">
                <div class="subscribe">
                    <input type="email" id="email" placeholder="Enter email">
                    <button type="button" onclick="sendEmail() ">Send Email</button>
                 </div>
            </div>
        </div>

        <div class="footer-line"></div>

        <div class="footer-grid">
            <div class="footer-col footer-col--brand">
                <a href="{{ route('home') }}" class="footer-logo">
                    <img src="{{ asset('frontend/assets/images/logo/dapperstech-logo-trimmed.png') }}" class="footer-logo-img" alt="DappersTech logo">
                </a>
                <p class="footer-brand-desc">A software house delivering AI integration, custom software development, and SaaS platforms for businesses worldwide.</p>
                <div class="footer-socials">
                    <a href="https://wa.me/923339994544" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="https://www.instagram.com/dapper_solutions/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=61582958314198" target="_blank" rel="noopener" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.linkedin.com/company/dappersolutions/posts/?feedView=all" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="footer-col footer-col--collapsible">
                <h4 class="footer-col-toggle">Company <i class="fa-solid fa-chevron-down"></i></h4>
                <div class="footer-col-links">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('aboutus') }}">About Us</a>
                    <a href="{{ route('team') }}">Meet Our Team</a>
                    <a href="{{ route('blogs') }}">Blogs</a>
                    <a href="{{ route('contact_us') }}">Contact Us</a>
                </div>
            </div>

            <div class="footer-col footer-col--collapsible footer-col--services">
                <h4 class="footer-col-toggle">Services <i class="fa-solid fa-chevron-down"></i></h4>
                <div class="footer-col-links footer-services-links">

                    <div class="footer-sublink-group">
                        <a class="footer-sublink-trigger">
                            AI Development
                        </a>
                        <div class="footer-sublinks">
                            <a href="{{ route('ai_rag_systems') }}">RAG Systems</a>
                            <a href="{{ route('ai_agents') }}">AI Agents</a>
                            <a href="{{ route('ai_llm_integration') }}">Custom GPT & LLM Integration</a>
                            <a href="{{ route('ai_backend_deployment') }}">AI Backend & Deployment</a>
                        </div>
                    </div>

                    <div class="footer-sublink-group">
                        <a class="footer-sublink-trigger">
                            Web Development
                        </a>
                        <div class="footer-sublinks">
                            <a href="{{ route('web_dev_custom') }}">Custom Website Development</a>
                            <a href="{{ route('web_dev_laravel') }}">Laravel Development</a>
                            <a href="{{ route('web_dev_php') }}">PHP Development</a>
                        </div>
                    </div>

                    <div class="footer-sublink-group">
                        <a class="footer-sublink-trigger">
                            Web Design
                        </a>
                        <div class="footer-sublinks">
                            <a href="{{ route('ui_ux_design') }}">UI/UX Design</a>
                            <a href="{{ route('graphic_design_branding') }}">Graphic Design & Branding</a>
                            <a href="{{ route('responsive_design') }}">Responsive Design</a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="footer-col footer-col--contact">
                <h4>Get In Touch</h4>
                <div class="footer-contact-list">
                    <a href="https://mail.google.com/mail/u/0/?to=info@dapperstech.com&su=Project+Inquiry&fs=1&tf=cm"><i class="fa-solid fa-envelope"></i> info@dapperstech.com</a>
                    <a href="tel:+92 516125246"><i class="fa-solid fa-phone"></i> +92 516125246</a>
                    <a href="https://wa.me/923339994544" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> +92 333 9994544</a>
                    <span><i class="fa-solid fa-location-dot"></i> Islamabad, Pakistan</span>
                </div>
            </div>
        </div>
        

        <div class="copyright">
            &copy; {{ config('app.name', 'DappersTech') }} {{ date('Y') }}. All Rights Reserved.
          </div>
    </div>

</footer>

<div class="site-modal" id="siteNoticeModal" aria-hidden="true">
    <div class="site-modal-backdrop" onclick="closeSiteModal()"></div>
    <div class="site-modal-panel success" id="siteNoticeModalPanel">
        <div class="site-modal-header">
            <button type="button" class="site-modal-close" aria-label="Close" onclick="closeSiteModal()">&times;</button>
        </div>
        <div class="site-modal-body">
            <div class="site-modal-icon" id="siteNoticeModalIcon"><i class="fa-solid fa-check"></i></div>
            <h3 class="site-modal-title" id="siteNoticeModalTitle">Thank you!</h3>
            <p class="site-modal-message" id="siteNoticeModalMessage"></p>
        </div>
    </div>
</div>

<button type="button" id="backToTopBtn" class="back-to-top-btn" aria-label="Back to top">
    <i class="fa-solid fa-chevron-up"></i>
</button>

<script>
(function () {
    var btn = document.getElementById('backToTopBtn');
    if (!btn) return;

    function toggleBtn() {
        btn.classList.toggle('is-visible', window.scrollY > 400);
    }

    window.addEventListener('scroll', toggleBtn, { passive: true });
    toggleBtn();

    btn.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
})();
</script>
