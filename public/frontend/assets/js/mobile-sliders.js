(function () {
    var SLIDER_SELECTORS = [
        '.home-service-bottom',
        '.blog-grid',
        '.services-v2-stack',
        '.services-v2-bottom',
        '.about-capability-grid',
        '.team-person-grid',
        '.blog-listing-grid',
        '.workflow-steps',
        '.about-journey-timeline',
        '.home-process-line',
    ];

    function debounce(fn, wait) {
        var t;
        return function () {
            var args = arguments;
            clearTimeout(t);
            t = setTimeout(function () { fn.apply(null, args); }, wait);
        };
    }

    function initSlider(slider) {
        if (slider.dataset.sliderInit) return;
        var items = Array.prototype.slice.call(slider.children);
        if (items.length < 2) return;
        slider.dataset.sliderInit = 'true';

        var nav = document.createElement('div');
        nav.className = 'slider-nav';

        var prevBtn = document.createElement('button');
        prevBtn.type = 'button';
        prevBtn.className = 'slider-nav-btn slider-nav-prev';
        prevBtn.setAttribute('aria-label', 'Previous');
        prevBtn.innerHTML = '<i class="fa-solid fa-chevron-left"></i>';

        var dots = document.createElement('div');
        dots.className = 'slider-dots';

        var nextBtn = document.createElement('button');
        nextBtn.type = 'button';
        nextBtn.className = 'slider-nav-btn slider-nav-next';
        nextBtn.setAttribute('aria-label', 'Next');
        nextBtn.innerHTML = '<i class="fa-solid fa-chevron-right"></i>';

        items.forEach(function (item, i) {
            var dot = document.createElement('button');
            dot.type = 'button';
            dot.className = 'slider-dot';
            dot.setAttribute('aria-label', 'Go to slide ' + (i + 1));
            dot.addEventListener('click', function () {
                slider.scrollTo({ left: item.offsetLeft - slider.offsetLeft, behavior: 'smooth' });
            });
            dots.appendChild(dot);
        });

        function update() {
            var scrollLeft = slider.scrollLeft;
            var maxScroll = slider.scrollWidth - slider.clientWidth;

            prevBtn.disabled = scrollLeft <= 4;
            nextBtn.disabled = scrollLeft >= maxScroll - 4;

            var active = 0;
            var closest = Infinity;
            items.forEach(function (item, i) {
                var diff = Math.abs((item.offsetLeft - slider.offsetLeft) - scrollLeft);
                if (diff < closest) {
                    closest = diff;
                    active = i;
                }
            });
            Array.prototype.forEach.call(dots.children, function (dot, i) {
                dot.classList.toggle('is-active', i === active);
            });
        }

        prevBtn.addEventListener('click', function () {
            slider.scrollBy({ left: -slider.clientWidth * 0.85, behavior: 'smooth' });
        });
        nextBtn.addEventListener('click', function () {
            slider.scrollBy({ left: slider.clientWidth * 0.85, behavior: 'smooth' });
        });

        slider.addEventListener('scroll', debounce(update, 80));
        window.addEventListener('resize', debounce(update, 150));

        nav.appendChild(prevBtn);
        nav.appendChild(dots);
        nav.appendChild(nextBtn);
        slider.insertAdjacentElement('afterend', nav);

        update();
    }

    function initAll() {
        SLIDER_SELECTORS.forEach(function (sel) {
            Array.prototype.forEach.call(document.querySelectorAll(sel), initSlider);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAll);
    } else {
        initAll();
    }
})();
