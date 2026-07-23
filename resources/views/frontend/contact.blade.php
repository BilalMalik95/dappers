{{-- @extends('frontend.layout')
@section('title','Contact Us | Web & App Development Experts')
@section('meta_description','Contact DappersTech to discuss your project or get a free quote. Let our expert developers bring your web, app, or Laravel project to life. We`re ready to help.')
@section('meta_keywords','contact dapperstech, contact web development company, contact laravel developers, website quote, hire web developers, get in touch web agency, web development support')

@section('styles')
<style>
.contact-form .form-group span.text-error {
  display: none;
  color: #ff7c8a;
  font-size: 13px;
  line-height: 1.4;
}

.contact-form .form-group.has-error input,
.contact-form .form-group.has-error textarea {
  border-color: #ff7c8a;
}

.theme-modal {
  position: fixed;
  inset: 0;
  display: none;
  align-items: center;
  justify-content: center;
  padding: 20px;
  z-index: 9999;
}

.theme-modal.open {
  display: flex;
}

.theme-modal-backdrop {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.68);
  backdrop-filter: blur(6px);
}

.theme-modal-panel {
  position: relative;
  z-index: 1;
  width: min(520px, 100%);
  border-radius: 24px;
  background: linear-gradient(180deg, #0f1e34 0%, #09111f 100%);
  border: 1px solid rgba(255, 255, 255, 0.08);
  box-shadow: 0 24px 60px rgba(0, 0, 0, 0.45);
  overflow: hidden;
}

.theme-modal-panel.success {
  border-color: rgba(20, 141, 255, 0.35);
}

.theme-modal-panel.error {
  border-color: rgba(255, 92, 92, 0.45);
}

.theme-modal-header {
  padding: 22px 26px 0;
  display: flex;
  justify-content: flex-end;
}

.theme-modal-close {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 1px solid rgba(255, 255, 255, 0.14);
  background: rgba(255, 255, 255, 0.05);
  color: #fff;
  font-size: 16px;
  cursor: pointer;
}

.theme-modal-body {
  padding: 10px 26px 30px;
  text-align: center;
}

.theme-modal-icon {
  width: 78px;
  height: 78px;
  border-radius: 50%;
  display: grid;
  place-items: center;
  margin: 0 auto 18px;
  font-size: 30px;
  color: #fff;
}

.theme-modal-panel.success .theme-modal-icon {
  background: linear-gradient(180deg, #18a6ff 0%, #0867ff 100%);
}

.theme-modal-panel.error .theme-modal-icon {
  background: linear-gradient(180deg, #ff7b7b 0%, #f03d3d 100%);
}

.theme-modal-title {
  font-size: 30px;
  line-height: 1.2;
  margin-bottom: 12px;
  color: #fff;
}

.theme-modal-message {
  font-size: 16px;
  line-height: 1.7;
  color: rgba(255, 255, 255, 0.72);
  margin-bottom: 18px;
}

.theme-modal-list {
  text-align: left;
  margin: 0 auto;
  padding-left: 18px;
  max-width: 420px;
  color: rgba(255, 255, 255, 0.82);
}

.theme-modal-list li {
  margin-bottom: 8px;
}

@media (max-width: 768px) {
  .theme-modal-panel {
    border-radius: 18px;
  }

  .theme-modal-body {
    padding: 6px 18px 24px;
  }

  .theme-modal-title {
    font-size: 24px;
  }

  .theme-modal-message {
    font-size: 14px;
  }
}

</style>
@endsection
@section('content')

<!-- ============== PAGE HERO ============== -->
<section class="section page-hero-wrap">
  <div class="container">
    <div class="page-hero-box">
      <div class="page-hero-content">
        <h1>Contact us</h1>
        <div class="breadcrumb">
          <i class="fas fa-home"></i>
          <a href="{{ route('home') }}">Home</a>
          <span class="sep">::</span>
          <span class="current">Contact Us</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============== CONTACT BODY ============== -->
<section class="section contact-page">
  <div class="container">
    <div class="contact-layout">

      <!-- LEFT: Info + map -->
      <div class="contact-info">
        <h2>Let's discuss your next project</h2>
        <p class="contact-intro">
          Share your requirements and Bilal Malik and the DappersTech team will guide you
          to the right digital solution – with a written scope before any work begins.
        </p>

        <div class="contact-meta">
          <a href="tel:+923339302731" class="contact-meta-item">+92 333 930 2731</a>
          <a href="mailto:imbilalmalik95@gmail.com" class="contact-meta-item underline">imbilalmalik95@gmail.com</a>
        </div>

        <div class="contact-socials">
          <a href="https://linkedin.com/in/bilal-malik95/" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          <a href="https://wa.me/923339994544" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
          <a href="https://malikbilal.com" target="_blank" rel="noopener" aria-label="Portfolio"><i class="fas fa-globe"></i></a>
          <a href="mailto:imbilalmalik95@gmail.com" aria-label="Email"><i class="fas fa-envelope"></i></a>
        </div>

        <div class="contact-map">
          <iframe
            src="https://www.google.com/maps?q=Rawalpindi%20Pakistan&output=embed"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>

      <!-- RIGHT: Form -->
      <div class="contact-form-card">
        <form class="contact-form" id="contactForm" action="{{ route('contact.save') }}" method="POST" novalidate>
          @csrf

          <div class="form-group">
            <label for="cf-name">Name<span>*</span></label>
            <input type="text" id="cf-name" name="name" placeholder="Your Name" required>
            <span class="text-error" data-error-for="name"></span>
          </div>

          <div class="form-group">
            <label for="cf-email">Email<span>*</span></label>
            <input type="email" id="cf-email" name="email" placeholder="Email Address" required>
            <span class="text-error" data-error-for="email"></span>
          </div>

          <div class="form-group">
            <label for="cf-phone">Phone Number<span>*</span></label>
            <input type="text" id="cf-phone" name="phone" placeholder="Phone Number" required>
            <span class="text-error" data-error-for="phone"></span>
          </div>

          <div class="form-group">
            <label for="cf-company">Company<span>*</span></label>
            <input type="text" id="cf-company" name="company" placeholder="Enter Your Company" required>
            <span class="text-error" data-error-for="company"></span>
          </div>

          <div class="form-group">
            <label for="cf-message">Message<span>*</span></label>
            <textarea id="cf-message" name="message" rows="5" placeholder="Enter Your Messages" required></textarea>
            <span class="text-error" data-error-for="message"></span>
          </div>

          <div class="form-footer">
            <button type="submit" class="btn-submit">Submit now</button>
            <p class="form-note">Want to work together? lets collaborate!</p>
          </div>

        </form>
      </div>

    </div>
  </div>
</section>

<div class="theme-modal" id="contactThemeModal" aria-hidden="true">
  <div class="theme-modal-backdrop"></div>
  <div class="theme-modal-panel success" id="contactThemeModalPanel">
    <div class="theme-modal-header">
      <button type="button" class="theme-modal-close" id="contactThemeModalClose" aria-label="Close modal">×</button>
    </div>
    <div class="theme-modal-body">
      <div class="theme-modal-icon" id="contactThemeModalIcon"><i class="fas fa-check"></i></div>
      <h3 class="theme-modal-title" id="contactThemeModalTitle">Success</h3>
      <p class="theme-modal-message" id="contactThemeModalMessage"></p>
      <ul class="theme-modal-list d-none" id="contactThemeModalList"></ul>
    </div>
  </div>
</div>

<!-- ============== MARQUEE (global) ============== -->
<div class="marquee">
  <div class="marquee-track">
    <div class="marquee-item"><span class="marquee-star">✱</span> Transform Ideas</div>
    <div class="marquee-item"><span class="marquee-star">✱</span> Inspired Creativity</div>
    <div class="marquee-item"><span class="marquee-star">✱</span> Design Creativity</div>
    <div class="marquee-item"><span class="marquee-star">✱</span> Transform Ideas</div>
    <div class="marquee-item"><span class="marquee-star">✱</span> Inspired Creativity</div>
    <div class="marquee-item"><span class="marquee-star">✱</span> Design Creativity</div>
  </div>
</div>




@endsection

@section('scripts')
<script>
  $(function () {
    const form = $('#contactForm');
    const modal = $('#contactThemeModal');
    const panel = $('#contactThemeModalPanel');
    const title = $('#contactThemeModalTitle');
    const message = $('#contactThemeModalMessage');
    const list = $('#contactThemeModalList');
    const icon = $('#contactThemeModalIcon');
    const closeButtons = $('#contactThemeModalClose, #contactThemeModal .theme-modal-backdrop');

    function resetFieldErrors() {
      form.find('.form-group').removeClass('has-error');
      form.find('.text-error').text('').hide();
    }

    function openModal(type, heading, body, errors = []) {
      panel.removeClass('success error').addClass(type);
      title.text(heading);
      message.text(body || '');
      list.empty().addClass('d-none');

      if (type === 'success') {
        icon.html('<i class="fas fa-check"></i>');
      } else {
        icon.html('<i class="fas fa-triangle-exclamation"></i>');
      }

      if (errors.length) {
        errors.forEach(function (item) {
          list.append($('<li>').text(item));
        });
        list.removeClass('d-none');
      }

      modal.addClass('open').attr('aria-hidden', 'false');
    }

    function closeModal() {
      modal.removeClass('open').attr('aria-hidden', 'true');
    }

    closeButtons.on('click', closeModal);

    form.on('submit', function (e) {
      e.preventDefault();
      resetFieldErrors();

      const formEl = this;
      if (!formEl.checkValidity()) {
        formEl.reportValidity();
        openModal('error', 'Validation error', 'Please fill in all required fields correctly.');
        return;
      }

      const formData = new FormData(formEl);

      $.ajax({
        url: form.attr('action'),
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        beforeSend: function () {
          form.find('button[type="submit"]').prop('disabled', true).text('Sending...');
        },
        success: function (response) {
          formEl.reset();
          openModal('success', 'Message sent', response.message || 'Thank you! Your message has been sent successfully.');
        },
        error: function (xhr) {
          if (xhr.status === 422 && xhr.responseJSON && xhr.responseJSON.errors) {
            const errors = xhr.responseJSON.errors;
            const errorMessages = [];

            Object.keys(errors).forEach(function (field) {
              const fieldMessages = errors[field];
              const messageText = Array.isArray(fieldMessages) ? fieldMessages[0] : fieldMessages;
              errorMessages.push(messageText);

              const errorEl = form.find('[data-error-for="' + field + '"]');
              const group = errorEl.closest('.form-group');
              group.addClass('has-error');
              errorEl.text(messageText).show();
            });

            openModal('error', 'Please check the form', xhr.responseJSON.message || 'Validation failed.', errorMessages);
            return;
          }

          openModal('error', 'Submission failed', (xhr.responseJSON && xhr.responseJSON.message) ? xhr.responseJSON.message : 'Something went wrong. Please try again later.');
        },
        complete: function () {
          form.find('button[type="submit"]').prop('disabled', false).text('Submit now');
        }
      });
    });
  });
</script>
@endsection
 --}}
@extends('frontend.layout')

@section('title', 'Contact DappersTech | Software House in Islamabad')
@section('meta_description', 'Contact DappersTech, a software house in Islamabad, Pakistan, for premium web development, software development, UI/UX design, ecommerce solutions, APIs, cloud services, SEO, and business automation.')
@section('meta_keywords', 'contact DappersTech, software house in Islamabad, software house Islamabad contact, IT services contact, software development company contact, web development agency, app development company, custom software, digital marketing services')

@section('styles')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => ['Organization', 'ProfessionalService'],
            '@id' => url('/#organization'),
            'name' => 'DappersTech IT Services',
            'alternateName' => 'DappersTech Software House',
            'url' => url('/'),
            'logo' => asset('frontend/assets/images/logo/dapperstech-logo-trimmed.png'),
            'telephone' => '+92-333-9994544',
            'email' => 'info@dapperstech.com',
            'address' => [
                '@type' => 'PostalAddress',
                'addressLocality' => 'Islamabad',
                'addressCountry' => 'PK',
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+92-333-9994544',
                'email' => 'info@dapperstech.com',
                'contactType' => 'customer service',
                'areaServed' => 'Worldwide',
            ],
        ],
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/')],
                ['@type' => 'ListItem', 'position' => 2, 'name' => 'Contact Us', 'item' => url('/contact-us')],
            ],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endsection

@section('content')

<section class="contact-hero">
    <div class="container">
        <div class="contact-hero-grid">

            <div class="contact-hero-content">
                <span class="contact-label">Contact Us</span>

                <h1>
                    Let’s discuss your next digital project.
                </h1>

                <p>
                    Have an idea for a website, ecommerce store, custom software,
                    API integration, or business automation system? Share your requirements and
                    our team will guide you with the right digital solution.
                </p>

                
            </div>

            <div class="contact-ceo-card">
                <div class="contact-ceo-top">
                    <div class="contact-ceo-avatar">
                        <img src="{{ asset('frontend/assets/images/team/image.jpg') }}"
                             alt="Bilal Malik, Founder of DappersTech">
                    </div>

                    <div>
                        <span>Message from Founder</span>
                        <h3>We are ready to build your vision.</h3>
                    </div>
                </div>

                <p>
                    “At DappersTech, our goal is to understand your business first, then build
                    digital solutions that are beautiful, reliable, secure, and ready to grow
                    with your company.”
                </p>

                <div class="contact-ceo-sign">
                    <strong>Founder, DappersTech</strong>
                    <span>Premium IT & Software Solutions</span>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="contact-info-section">
    <div class="container">

        <div class="contact-info-grid">

            <a href="tel:+923339994544" class="contact-info-card">
                <div class="contact-info-icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <span>Call or WhatsApp</span>
                <h3>+92 333 9994544</h3>
                <p>Speak directly with our team about your project requirements.</p>
            </a>

            <a href="mailto:info@dapperstech.com" class="contact-info-card">
                <div class="contact-info-icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <span>Email Address</span>
                <h3>info@dapperstech.com</h3>
                <p>Send us your idea, project details, or business requirements.</p>
            </a>

            <div class="contact-info-card">
                <div class="contact-info-icon">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <span>Office Location</span>
                <h3>Islamabad, Pakistan</h3>
        </div>

            <div class="contact-info-card">
                <div class="contact-info-icon">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <span>Working Hours</span>
                <h3>Mon – Sat</h3>
                <p>Available for project consultation, support, and development work.</p>
            </div>

        </div>

    </div>
</section>


<secstion class="contact-main-section">
    <div class="container">

        <div class="contact-main-layout">

            <div class="contact-form-panel">
                <span class="contact-label">Project Inquiry</span>

                <h2>Tell us about your project</h2>

                <p>
                    Fill out the form and we will contact you to discuss your business goals,
                    required features, timeline, and the best technical approach.
                </p>

                <form action="{{ route('contact.save') }}" method="POST" class="contact-form" id="contactMainForm" novalidate>
                    @csrf

                    <div class="contact-form-row">
                        <div class="contact-field">
                            <label>Your Name</label>
                            <input type="text" name="name" placeholder="Enter your name" required>
                        </div>

                        <div class="contact-field">
                            <label>Email Address</label>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <div class="contact-form-row">
                        <div class="contact-field">
                            <label>Phone Number</label>
                            <input type="text" name="phone" placeholder="Enter phone number" required>
                        </div>

                        <div class="contact-field">
                            <label>Service Interested In</label>
                            <select name="service">
                                <option value="">Select a service</option>
                                <option value="Web Development">Web Development</option>
                                <option value="UI/UX Design">UI/UX Design</option>
                                <option value="Custom Software">Custom Software</option>
                                <option value="Ecommerce Solution">Ecommerce Solution</option>
                                <option value="SEO & Digital Marketing">SEO & Digital Marketing</option>
                                <option value="API Development">API Development</option>
                                <option value="Cloud & DevOps">Cloud & DevOps</option>
                            </select>
                        </div>
                    </div>

                   
                    <div class="contact-field">
                        <label>Project Details</label>
                        <textarea name="message" rows="6" placeholder="Tell us about your project, required features, timeline, and goals..." required></textarea>
                    </div>

                    <button type="submit" class="contact-submit-btn">
                        Send Message
                        <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </form>
            </div>

            <div class="contact-side-panel">

                <div class="contact-side-box">
                    <span class="contact-label">Quick Contact</span>
                    <h3>Need a quick response?</h3>
                    <p>
                        Email or call us directly. We will review your requirements and guide you
                        with the right solution for your business.
                    </p>

                    <div class="contact-side-list">
                        <a href="mailto:info@dapperstech.com">
                            <i class="fa-solid fa-envelope"></i>
                            info@dapperstech.com
                        </a>

                        <a href="tel:+923339994544">
                            <i class="fa-solid fa-phone"></i>
                            +92 333 9994544
                        </a>

                        <a href="https://wa.me/923339994544" target="_blank" rel="noopener">
                            <i class="fa-brands fa-whatsapp"></i>
                            WhatsApp us
                        </a>

                        <span>
                            <i class="fa-solid fa-location-dot"></i>
                            Islamabad, Pakistan
                        </span>
                    </div>
                </div>

                <div class="contact-services-box">
                    <h3>We can help you with</h3>

                    <div class="contact-service-tags">
                        <span>Web Development</span>
                        <span>UI/UX Design</span>
                        <span>Custom Software</span>
                        <span>Ecommerce</span>
                        <span>APIs</span>
                        <span>SEO</span>
                        <span>Cloud</span>
                    </div>
                </div>

            </div>

        </div>

    </div>
</secstion>


@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('contactMainForm');
    if (!form) return;

    var submitBtn = form.querySelector('.contact-submit-btn');
    var submitBtnLabel = submitBtn ? submitBtn.innerHTML : '';

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        if (!form.checkValidity()) {
            form.reportValidity();
            return;
        }

        var formData = new FormData(form);

        var service = formData.get('service');
        var extra = [];
        if (service) extra.push('Service Interested In: ' + service);
          if (extra.length) {
            formData.set('message', formData.get('message') + '\n\n' + extra.join('\n'));
        }

        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = 'Sending...';
        }

        fetch(form.action, {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: formData
        })
            .then(function (response) {
                return response.json().then(function (data) {
                    return { status: response.status, data: data };
                });
            })
            .then(function (result) {
                if (result.status === 200) {
                    form.reset();
                    showSiteModal('success', result.data.message || 'Thanks for contacting us! We will respond within 24 hours.');
                } else if (result.status === 422 && result.data.errors) {
                    var firstError = Object.values(result.data.errors)[0];
                    showSiteModal('error', Array.isArray(firstError) ? firstError[0] : firstError, 'Please check the form');
                } else {
                    showSiteModal('error', result.data.message || 'Unable to submit your message right now. Please try again later.');
                }
            })
            .catch(function () {
                showSiteModal('error', 'Unable to submit your message right now. Please try again later.');
            })
            .finally(function () {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = submitBtnLabel;
                }
            });
    });
});
</script>
@endsection
