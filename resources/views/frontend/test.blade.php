<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Websites That Turn Visitors Into Customers</title>
    {{--
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
        /* ========================================
   RESET & BASE STYLES
   ======================================== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #EF4444;
            --primary-dark: #DC2626;
            --primary-light: #FCA5A5;
            --accent-color: #EF4444;
            --bg-dark: #0F0F0F;
            --bg-dark-alt: #1A1A1A;
            --bg-card: #1F1F1F;
            --text-primary: #FFFFFF;
            --text-secondary: #A0A0A0;
            --text-muted: #6B7280;
            --border-color: #2A2A2A;
            --success-color: #10B981;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* ========================================
   TYPOGRAPHY
   ======================================== */
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-weight: 800;
            line-height: 1.2;
        }

        /* .text-accent {
            color: var(--accent-color);
        } */
        .text-accent {
            background: linear-gradient(135deg, #f04c83, #f56a47);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .text-muted {
            color: var(--text-muted);
        }

        h1,
        h2 {
            font-family: 'Space Grotesk', sans-serif;
        }

        .section-label {
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 2px;
            color: var(--primary-color);
            text-transform: uppercase;
            margin-bottom: 16px;
            text-align: center;
        }

        .section-title {
            font-size: 48px;
            font-weight: 900;
            text-align: center;
            margin-bottom: 16px;
        }

        .section-subtitle {
            font-size: 18px;
            color: var(--text-secondary);
            text-align: center;
            margin-bottom: 48px;
            line-height: 1.8;
        }

        /* ========================================
   BUTTONS
   ======================================== */
        .btn {
            display: inline-block;
            padding: 14px 32px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            border-radius: 9999px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            text-align: center;
        }

        /* .btn-primary {
            background: linear-gradient(135deg, #EF4444 0%, #DC2626 100%);
            color: white;
            box-shadow: 0 4px 20px rgba(239, 68, 68, 0.3);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, #DC2626 0%, #B91C1C 100%);
            box-shadow: 0 6px 30px rgba(239, 68, 68, 0.5);
            transform: translateY(-2px);
        } */
        .btn-primary {
            background: linear-gradient(135deg, #f04c83, #f56a47);
            color: #fff;
            box-shadow: 0 10px 30px rgba(240, 76, 131, 0.3);
            border: none;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(240, 76, 131, 0.5);
        }

        .btn-outline {
            background: transparent;
            color: var(--text-primary);
            border: 2px solid var(--border-color);
        }

        .btn-outline:hover {
            background: var(--bg-card);
            border-color: var(--primary-color);
        }

        .btn-lg {
            padding: 18px 48px;
            font-size: 18px;
        }

        .btn-submit {
            width: 100%;
            max-width: 400px;
            margin: 35px auto;
            display: block;
        }

        /* ========================================
   NAVIGATION
   ======================================== */
        .navbar {
            padding: 24px 0;
            background: rgba(15, 15, 15, 0.8);
            backdrop-filter: blur(10px);
            position: sticky;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid var(--border-color);
        }

        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            padding: 8px 0;
            /* gives breathing space */
        }

        /* .logo-img {
            height: 32px;

            width: auto;
            object-fit: contain;
        } */

        .logo-img {
            height: 48px;
            filter: brightness(1.2) contrast(1.1);
        }

        .nav-right {
            display: flex;
            gap: 32px;
            align-items: center;
        }

        .nav-link {
            color: var(--text-secondary);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--text-primary);
        }

        /* ========================================
   HERO SECTION
   ======================================== */

        .hero .container {
            position: relative;
            z-index: 2;
        }

        .hero-bg-dots {
            z-index: 0;
        }

        .hero-overlay {
            z-index: 1;
        }

        /*
        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(120deg, transparent 48%, rgba(0, 255, 200, 0.05) 50%, transparent 52%);
            background-size: 200px 200px;
            opacity: 0.3;
            pointer-events: none;
        } */

        .hero-bg-dots {
            position: absolute;
            inset: 0;
            z-index: 1;
            pointer-events: none;

            background:
                radial-gradient(circle at 20% 30%, rgba(0, 255, 200, 0.4) 3px, transparent 8px),
                radial-gradient(circle at 70% 40%, rgba(0, 255, 200, 0.3) 3px, transparent 8px),
                radial-gradient(circle at 40% 70%, rgba(0, 255, 200, 0.3) 3px, transparent 8px),
                radial-gradient(circle at 80% 75%, rgba(0, 255, 200, 0.25) 3px, transparent 8px),
                radial-gradient(circle at 10% 80%, rgba(0, 255, 200, 0.25) 3px, transparent 8px);

            filter: blur(1px);
            opacity: 0.6;
        }

        .hero {
            position: relative;
            /* 🔥 REQUIRED */
            padding: 29px 0 80px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        /* .hero {
            background: radial-gradient(circle at 20% 20%, rgba(240, 76, 131, 0.15), transparent 40%),
                radial-gradient(circle at 80% 30%, rgba(245, 106, 71, 0.1), transparent 40%),
                #07090f;
        } */

        .hero::before {
            display: none;
        }

        .glow-primary {
            box-shadow: 0 0 30px rgba(240, 76, 131, 0.1);
        }

        /* .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            left: 50%;
            transform: translateX(-50%);
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, rgba(239, 68, 68, 0.15) 0%, transparent 70%);
            pointer-events: none;
        } */

        .hero-badge {
            margin-bottom: 24px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;

            padding: 10px 22px;
            border-radius: 999px;

            font-size: 14px;
            font-weight: 600;

            color: #f04c83;

            background: rgba(240, 76, 131, 0.08);
            border: 1px solid rgba(240, 76, 131, 0.3);

            backdrop-filter: blur(10px);

            box-shadow: 0 0 20px rgba(240, 76, 131, 0.15);

            transition: all 0.3s ease;
        }

        .badge svg {
            color: #f04c83;
        }

        .hero-title {
            font-size: 72px;
            font-weight: 900;
            letter-spacing: -1.5px;
        }

        /* .badge {
            display: inline-block;
            padding: 8px 20px;
            background: linear-gradient(135deg, rgba(239, 68, 68, 0.2) 0%, rgba(220, 38, 38, 0.2) 100%);
            color: var(--primary-color);
            border-radius: 9999px;
            font-size: 14px;
            font-weight: 600;
            border: 1px solid rgba(239, 68, 68, 0.3);
        } */
        .badge {
            background: rgba(240, 76, 131, 0.1);
            color: #f04c83;
            border: 1px solid rgba(240, 76, 131, 0.3);
            backdrop-filter: blur(10px);
        }

        .hero-title {
            font-size: 72px;
            font-weight: 900;
            margin-bottom: 24px;
            line-height: 1.1;
            letter-spacing: -2px;
        }

        .hero-subtitle {
            font-size: 20px;
            color: var(--text-secondary);
            margin-bottom: 48px;
            line-height: 1.8;
        }

        .hero-cta {
            display: flex;
            gap: 16px;
            justify-content: center;
            margin-bottom: 48px;
        }

        .hero-features {
            display: flex;
            gap: 40px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #9ca3af;
            /* softer gray like design */
            font-size: 14px;
            font-weight: 500;
        }

        /* ICON STYLE (KEY PART 🔥) */
        .feature-icon {
            width: 18px;
            height: 18px;

            stroke: #f04c83;
            /* pink gradient tone */
            fill: none;
            color: #f04c83;
            opacity: 0.9;
        }

        /* subtle hover effect (optional but nice) */
        .feature-item:hover .feature-icon {
            opacity: 1;
            transform: scale(1.1);
            transition: all 0.3s ease;
        }

        /* ========================================
   SOCIAL PROOF SECTION
   ======================================== */
        .social-proof {
            padding: 100px 0;
            background: var(--bg-dark-alt);
        }

        .testimonials-container {
            position: relative;
            margin-top: 64px;
            display: flex;
            gap: 24px;
            align-items: flex-start;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 32px;
            max-height: 320px;
            /* Shows only 1 row (3 cards) by default */
            overflow-y: auto;
            overflow-x: hidden;
            padding-right: 16px;
            flex: 1;

            /* Hide default scrollbar */
            scrollbar-width: none;
            /* Firefox */
            -ms-overflow-style: none;
            /* IE and Edge */
        }

        .testimonials-grid::-webkit-scrollbar {
            display: none;
            /* Chrome, Safari, Opera */
        }

        .testimonial-card {
            background: var(--bg-card);
            padding: 18px;
            border-radius: 16px;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
            min-height: 280px;
            /* Ensures consistent card height */
        }

        .testimonial-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-4px);
            box-shadow: 0 8px 30px rgba(239, 68, 68, 0.2);
        }

        .testimonial-text {
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 24px;
            color: var(--text-secondary);
        }

        .testimonial-rating {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .stars {
            color: #FBBF24;
            font-size: 20px;
            letter-spacing: 4px;
        }

        .testimonial-author strong {
            color: var(--text-primary);
            font-size: 16px;
        }

        /* Custom Vertical Scrollbar */
        .custom-scrollbar {
            width: 12px;
            height: 320px;
            /* Match grid height */
            position: relative;
            flex-shrink: 0;
        }

        .scrollbar-track {
            width: 100%;
            height: 100%;
            background: var(--bg-card);
            border-radius: 6px;
            position: relative;
            border: 1px solid var(--border-color);
        }

        .scrollbar-thumb {
            width: 100%;
            /* background: linear-gradient(135deg, #EF4444 0%, #DC2626 100%); */
            background: whitesmoke;

            border-radius: 6px;
            position: absolute;
            top: 0;
            left: 0;
            cursor: pointer;
            transition: background 0.3s ease;
            box-shadow: 0 2px 8px rgba(239, 68, 68, 0.3);
        }

        .scrollbar-thumb:hover {
            background: linear-gradient(135deg, #DC2626 0%, #B91C1C 100%);
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.5);
        }

        .scrollbar-thumb:active {
            background: linear-gradient(135deg, #B91C1C 0%, #991B1B 100%);
            cursor: grabbing;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .testimonials-grid {
                grid-template-columns: repeat(2, 1fr);
                max-height: 350px;
                /* Adjusted for 2 columns */
            }

            .custom-scrollbar {
                height: 350px;
            }
        }

        @media (max-width: 768px) {
            .testimonials-container {
                flex-direction: column-reverse;
                gap: 16px;
            }

            .testimonials-grid {
                grid-template-columns: 1fr;
                max-height: 320px;
                /* Shows 1 card on mobile */
                padding-right: 0;
            }

            .custom-scrollbar {
                width: 100%;
                height: 8px;
                margin-bottom: 16px;
            }

            .scrollbar-track {
                width: 100%;
                height: 100%;
            }

            .scrollbar-thumb {
                height: 100%;
                width: auto;
                left: 0;
                top: 0;
            }

            .testimonial-card {
                min-height: 260px;
            }
        }

        @media (max-width: 480px) {
            .testimonials-grid {
                gap: 20px;
            }

            .testimonial-card {
                padding: 24px;
                min-height: 240px;
            }

            .testimonial-text {
                font-size: 14px;
            }

            .stars {
                font-size: 18px;
            }
        }

        /* ========================================
   SERVICES SECTION
   ======================================== */
        .services {
            padding: 100px 0;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 32px;
            margin-top: 64px;
        }

        .service-card {
            background: var(--bg-card);
            padding: 40px;
            border-radius: 16px;
            border: 1px solid var(--border-color);
            transition: all 0.3s ease;
            text-align: center;
        }

        .service-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-4px);
            box-shadow: 0 8px 30px rgba(239, 68, 68, 0.2);
        }

        .service-icon {
            margin-bottom: 24px;
            display: inline-block;
        }

        .service-title {
            font-size: 24px;
            margin-bottom: 16px;
            color: var(--text-primary);
        }

        .service-description {
            color: var(--text-secondary);
            line-height: 1.8;
        }

        /* ========================================
   STATS SECTION
   ======================================== */
        .stats {
            padding: 100px 0;
            background: var(--bg-dark-alt);
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 48px;
            margin-top: 64px;
        }

        /* .stat-card {
            text-align: center;
        } */
        .stat-card {
            padding-bottom: 16px;
            padding-top: 13px;
            border-radius: 27px;
            background: #1f1f1f;
            text-align: center;
        }

        .stat-icon {
            margin-bottom: 24px;
            display: flex;
            justify-content: center;
        }

        .stat-number {
            font-size: 56px;
            font-weight: 900;
            color: var(--primary-color);
            margin-bottom: 12px;
        }

        .stat-label {
            font-size: 18px;
            color: var(--text-secondary);
        }

        /* ========================================
   HOW IT WORKS SECTION
   ======================================== */
        .how-it-works {
            padding: 100px 0;
        }

        .process-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 48px;
            margin-top: 64px;
        }

        /* .process-card {
            text-align: center;

            display: flex;
            flex-direction: column;
            justify-content: space-between;


            background: var(--bg-card);
            padding: 40px;
            border-radius: 16px;
            border: 1px solid var(--border-color);

            min-height: 280px;

        } */
        .process-card {
            text-align: center;

            display: flex;
            flex-direction: column;
            align-items: center;

            background: var(--bg-card);
            padding: 12px 0px;
            border-radius: 16px;
            border: 1px solid var(--border-color);

            min-height: 280px;
        }

        .process-icon {
            margin-bottom: 8px;
            display: flex;
            justify-content: center;
        }

        .process-title {
            font-size: 22px;
            margin-bottom: 12px;
            color: var(--text-primary);

            min-height: 48px;
            /* 🔥 forces equal title height */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* .process-title {
            font-size: 24px;
            margin-bottom: 16px;
            color: var(--text-primary);
        } */

        .process-description {
            color: var(--text-secondary);
            line-height: 1.6;
            font-size: 14px;
            /* 🔥 smaller text */

            max-width: 240px;
            /* 🔥 tighter width */
            margin: 0 auto;
        }

        /* ========================================
   CTA AUDIT SECTION
   ======================================== */
        .cta-audit {
            padding: 100px 0;
            background: var(--bg-dark-alt);
        }

        .cta-content .section-label {
            margin-bottom: 12px;
            letter-spacing: 2px;
        }

        .cta-content .section-title {
            margin-bottom: 16px;
        }

        .cta-content .section-subtitle {
            margin-bottom: 40px;
        }

        .cta-content {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;

            background: #1f1f1f;
            border-radius: 20px;

            padding: 60px 50px;
            /* 🔥 IMPORTANT (main fix) */
            border: 1px solid rgba(255, 255, 255, 0.08);

            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.4);
        }

        /* .checklist {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin: 48px 0;
            text-align: left;
        } */
        .checklist {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            /* 🔥 fixed 3 columns like design */
            gap: 24px 40px;

            margin: 40px 0 50px;
            text-align: left;
        }

        /* .checklist-item {
            display: flex;
            gap: 16px;
            align-items: flex-start;
        }

        .check-icon {
            flex-shrink: 0;
            margin-top: 4px;
        }

        .checklist-item span {
            color: var(--text-secondary);
            line-height: 1.8;
        } */
        .checklist-item {
            display: flex;
            gap: 12px;
            align-items: flex-start;
        }

        .check-icon {
            flex-shrink: 0;
            margin-top: 5px;
        }

        .checklist-item span {
            color: var(--text-secondary);
            line-height: 1.6;
            font-size: 14px;
            /* 🔥 cleaner look */
        }

        /* ========================================
   CONTACT FORM SECTION
   ======================================== */
        .contact-form {
            padding: 100px 0;
        }

        .audit-form {
            max-width: 800px;
            margin: 0 auto;
            background: var(--bg-card);
            padding: 48px;
            border-radius: 16px;
            border: 1px solid var(--border-color);
        }

        /* .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
            margin-bottom: 32px;
        } */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        .form-group:nth-child(n+3) {
            grid-column: 1 / -1;
            /* 🔥 make all fields after first row full width */
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group {
                grid-column: 1 / -1 !important;
            }
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-group label {
            font-size: 14px;
            font-weight: 600;
            color: var(--text-primary);
        }

        .form-control {
            padding: 14px 20px;
            background: var(--bg-dark);
            border: 1px solid var(--border-color);
            border-radius: 8px;
            color: var(--text-primary);
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
        }

        .form-control::placeholder {
            color: var(--text-muted);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .form-footer {
            text-align: center;
        }

        .form-disclaimer {
            margin-top: 24px;
            font-size: 14px;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        /* ========================================
   FINAL CTA SECTION
   ======================================== */
        .final-cta {
            padding: 100px 0;
            background: var(--bg-dark-alt);
            text-align: center;
        }

        /* ========================================
   FOOTER
   ======================================== */
        .footer {
            padding: 48px 0;
            background: var(--bg-dark);
            border-top: 1px solid var(--border-color);
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer-text {
            color: var(--text-muted);
            font-size: 14px;
        }

        .footer-right {
            display: flex;
            gap: 32px;
        }

        .footer-link {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }

        .footer-link:hover {
            color: var(--text-primary);
        }

        /* ========================================
   SCROLL TO TOP BUTTON
   ======================================== */
        .scroll-top {
            position: fixed;
            bottom: 32px;
            right: 32px;
            width: 56px;
            height: 56px;
            background: var(--primary-color);
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 20px rgba(239, 68, 68, 0.3);
            z-index: 999;
        }

        .scroll-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .scroll-top:hover {
            background: var(--primary-dark);
            transform: translateY(-4px);
            box-shadow: 0 6px 30px rgba(239, 68, 68, 0.5);
        }

        /* ========================================
   RESPONSIVE DESIGN
   ======================================== */
        @media (max-width: 1024px) {
            .hero-title {
                font-size: 56px;
            }

            .section-title {
                font-size: 40px;
            }
        }

        @media (max-width: 768px) {
            .nav-right {
                gap: 16px;
            }

            .nav-link {
                display: none;
            }

            .hero-title {
                font-size: 40px;
            }

            .hero-subtitle {
                font-size: 18px;
            }

            .hero-cta {
                flex-direction: column;
            }

            .section-title {
                font-size: 32px;
            }

            .section-subtitle {
                font-size: 16px;
            }

            .testimonials-grid,
            .services-grid,
            .stats-grid,
            .process-grid {
                grid-template-columns: 1fr;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .audit-form {
                padding: 32px 24px;
            }

            .footer-content {
                flex-direction: column;
                gap: 16px;
                text-align: center;
            }

            .checklist {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .hero-title {
                font-size: 32px;
            }

            .btn-lg {
                padding: 16px 32px;
                font-size: 16px;
            }

            .stat-number {
                font-size: 40px;
            }
        }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <a href="/" class="logo">
                    <img src="{{ asset('frontend/assets/images/logo/logo-dappersolutions.png') }}" alt="DapperSolutions Logo"
                        class="logo-img">
                </a>
                <div class="nav-right">
                    {{-- <a href="#services" class="nav-link">Services</a>
                    <a href="#portfolio" class="nav-link">Portfolio</a>
                    <a href="#contact" class="nav-link">Contact</a> --}}
                    <a href="#audit" class="btn btn-primary">Get Free Audit</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg-dots"></div>
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-badge">
                <span class="badge">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                        <path d="M13 3L4 14H11L10 21L20 10H13L13 3Z" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    IT Services Company
                </span>
            </div>
            <h1 class="hero-title">
                Websites That Turn <span class="text-accent">Visitors</span><br>
                <span class="text-accent">Into Customers</span>
            </h1>
            <p class="hero-subtitle">
                We help 100+ businesses generate more leads with high-converting<br>
                websites and smart marketing strategies that matter to your ROI.
            </p>
            <div class="hero-cta">
                <a href="#audit" class="btn btn-primary btn-lg glow-primary">Get Your Website Audit</a>
                <a href="#call" class="btn btn-outline btn-lg glow-primary">Book a Call</a>
            </div>
            <div class="hero-features">

                <div class="feature-item">
                    <!-- Zap Icon -->
                    <svg class="feature-icon" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Fast Delivery</span>
                </div>

                <div class="feature-item">
                    <!-- Target Icon -->
                    <svg class="feature-icon" viewBox="0 0 24 24" fill="none">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="12" r="6"></circle>
                        <circle cx="12" cy="12" r="2"></circle>
                    </svg>
                    <span>Results-Focused</span>
                </div>

                <div class="feature-item">
                    <!-- Users Icon -->
                    <svg class="feature-icon" viewBox="0 0 24 24" fill="none">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <span>Trusted by Growing Businesses</span>
                </div>

            </div>
        </div>
    </section>

    <!-- Social Proof Section -->
    <section class="social-proof">
        <div class="container">
            <div class="section-label">SOCIAL PROOF</div>
            <h2 class="section-title">
                Trusted by Businesses <span class="text-accent">Across the US</span>
            </h2>
            <p class="section-subtitle">
                Join 100+ satisfied clients • Over 250+ projects delivered • Average 4.9/5 stars<br>
                reviews, and a 95% client retention rate
            </p>

            <div class="testimonials-container">
                <div class="testimonials-grid" id="testimonialsGrid">
                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "Hardywork built our website and what is<br>
                            amazing it's that with the great UX and UI<br>
                            features, they improved our sales."
                        </p>
                        <div class="testimonial-rating">
                            <div class="stars">★★★★★</div>
                            <div class="testimonial-author">
                                <strong>Ronald Richards</strong><br>
                                <span class="text-muted">Product Buyer</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "Hardywork, Inc. are the FAITH in<br>
                            transparency and efficiency coupled<br>
                            with clear plans and fair prices that set<br>
                            projects up with plan, the timeline."
                        </p>
                        <div class="testimonial-rating">
                            <div class="stars">★★★★★</div>
                            <div class="testimonial-author">
                                <strong>Esther Howard</strong><br>
                                <span class="text-muted">Digital Marketer</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "My skeleton tools really talk to scaling<br>
                            the apps. It made the process so much<br>
                            easier. I highly recommend it."
                        </p>
                        <div class="testimonial-rating">
                            <div class="stars">★★★★★</div>
                            <div class="testimonial-author">
                                <strong>Dianne Russell</strong><br>
                                <span class="text-muted">Founder, Caldo</span>
                            </div>
                        </div>
                    </div>

                    <!-- Additional testimonials -->
                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "Outstanding service! They transformed<br>
                            our outdated website into a modern,<br>
                            conversion-focused platform."
                        </p>
                        <div class="testimonial-rating">
                            <div class="stars">★★★★★</div>
                            <div class="testimonial-author">
                                <strong>Robert Fox</strong><br>
                                <span class="text-muted">CEO, TechStart</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "The team delivered exactly what we needed.<br>
                            Our lead generation increased by 150%<br>
                            within the first month!"
                        </p>
                        <div class="testimonial-rating">
                            <div class="stars">★★★★★</div>
                            <div class="testimonial-author">
                                <strong>Jenny Wilson</strong><br>
                                <span class="text-muted">Marketing Director</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "Professional, responsive, and creative.<br>
                            They understood our vision and brought<br>
                            it to life perfectly."
                        </p>
                        <div class="testimonial-rating">
                            <div class="stars">★★★★★</div>
                            <div class="testimonial-author">
                                <strong>Wade Warren</strong><br>
                                <span class="text-muted">Business Owner</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "Exceptional work! Our bounce rate dropped<br>
                            significantly and conversions are up 200%.<br>
                            Best investment we made."
                        </p>
                        <div class="testimonial-rating">
                            <div class="stars">★★★★★</div>
                            <div class="testimonial-author">
                                <strong>Cameron Williamson</strong><br>
                                <span class="text-muted">E-commerce Owner</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "They didn't just build a website, they built<br>
                            a powerful marketing tool. ROI has been<br>
                            incredible from day one!"
                        </p>
                        <div class="testimonial-rating">
                            <div class="stars">★★★★★</div>
                            <div class="testimonial-author">
                                <strong>Brooklyn Simmons</strong><br>
                                <span class="text-muted">Startup Founder</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <p class="testimonial-text">
                            "Amazing attention to detail and customer<br>
                            service. They truly care about the success<br>
                            of your business."
                        </p>
                        <div class="testimonial-rating">
                            <div class="stars">★★★★★</div>
                            <div class="testimonial-author">
                                <strong>Leslie Alexander</strong><br>
                                <span class="text-muted">Restaurant Owner</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Custom Vertical Scrollbar -->
                <div class="custom-scrollbar">
                    <div class="scrollbar-track">
                        <div class="scrollbar-thumb" id="scrollbarThumb"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <div class="section-label">WHAT WE DO</div>
            <h2 class="section-title">
                Services That <span class="text-accent">Drive Growth</span>
            </h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <rect width="40" height="40" rx="8" fill="rgba(239, 68, 68, 0.1)" />
                            <path d="M20 12V28M12 20H28" stroke="#EF4444" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </div>
                    <h3 class="service-title">Web Development</h3>
                    <p class="service-description">
                        High-quality websites crafted by a web design firm you can count on. Fast, scalable, and
                        SEO-optimized for exceptional results.
                    </p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <rect width="40" height="40" rx="8" fill="rgba(239, 68, 68, 0.1)" />
                            <circle cx="20" cy="20" r="8" stroke="#EF4444" stroke-width="2" />
                        </svg>
                    </div>
                    <h3 class="service-title">SEO Optimization</h3>
                    <p class="service-description">
                        Boost your online visibility with expert SEO strategies. Rank higher, attract more traffic, and
                        convert visitors into loyal customers.
                    </p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <rect width="40" height="40" rx="8" fill="rgba(239, 68, 68, 0.1)" />
                            <path d="M12 20L20 12L28 20L20 28L12 20Z" stroke="#EF4444" stroke-width="2" />
                        </svg>
                    </div>
                    <h3 class="service-title">App Development</h3>
                    <p class="service-description">
                        Custom mobile and web apps that bring your ideas to life. Scalable, user-friendly, and built
                        with cutting-edge technology.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="section-label">PROVEN RESULTS</div>
            <h2 class="section-title">
                Numbers That <span class="text-accent">Speak for Themselves</span>
            </h2>
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-icon">

                    </div>
                    <div class="stat-number">+120%</div>
                    <div class="stat-label">Average Revenue Increase</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">

                    </div>
                    <div class="stat-number">2.1s</div>
                    <div class="stat-label">Average Page Load Time</div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">

                    </div>
                    <div class="stat-number">+85%</div>
                    <div class="stat-label">Client Retention Rate</div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="how-it-works">
        <div class="container">
            <div class="section-label">SIMPLE PROCESS</div>
            <h2 class="section-title">
                How It <span class="text-accent">Works</span>
            </h2>
            <div class="process-grid">
                <div class="process-card">
                    <div class="process-icon">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none">
                            <rect x="10" y="15" width="30" height="25" rx="2" stroke="#EF4444" stroke-width="2" />
                            <path d="M20 15V10C20 8.89543 20.8954 8 22 8H28C29.1046 8 30 8.89543 30 10V15"
                                stroke="#EF4444" stroke-width="2" />
                        </svg>
                    </div>
                    <h3 class="process-title">Free Audit</h3>
                    <p class="process-description">
                        We analyze your current website or idea—100% free. We uncover gaps and identify opportunities
                        for growth.
                    </p>
                </div>
                <div class="process-card">
                    <div class="process-icon">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none">
                            <path d="M15 25C15 25 20 15 25 15C30 15 35 25 35 25C35 25 30 35 25 35C20 35 15 25 15 25Z"
                                stroke="#EF4444" stroke-width="2" />
                            <circle cx="25" cy="25" r="4" stroke="#EF4444" stroke-width="2" />
                        </svg>
                    </div>
                    <h3 class="process-title">Strategy Call</h3>
                    <p class="process-description">
                        We walk you through a custom plan based on your business needs, goals, and budget. Zero
                        pressure—just real value.
                    </p>
                </div>
                <div class="process-card">
                    <div class="process-icon">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none">
                            <path d="M25 10L30 20L40 22L32 30L34 40L25 35L16 40L18 30L10 22L20 20L25 10Z"
                                stroke="#EF4444" stroke-width="2" />
                        </svg>
                    </div>
                    <h3 class="process-title">Launch</h3>
                    <p class="process-description">
                        We build, test, and deploy your website. You focus on running your business, we handle the rest.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Free Audit CTA Section -->
    <section class="cta-audit">
        <div class="container">
            <div class="cta-content">
                <div class="section-label">LIMITED TIME OFFER</div>
                <h2 class="section-title">
                    Get Your <span class="text-accent">FREE</span> Website Audit
                </h2>
                <p class="section-subtitle">
                    Find out exactly where you're losing website traffic—and how to fix it in 3<br>
                    days or less (normally over 2 weeks).
                </p>
                <div class="checklist">
                    <div class="checklist-item">
                        <svg class="check-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="10" fill="#EF4444" />
                            <path d="M8 12L11 15L16 9" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <span>Discover what's killing your<br>website's performance</span>
                    </div>
                    <div class="checklist-item">
                        <svg class="check-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="10" fill="#EF4444" />
                            <path d="M8 12L11 15L16 9" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <span>Get no-fluff tips to improve<br>performance</span>
                    </div>
                    <div class="checklist-item">
                        <svg class="check-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="10" fill="#EF4444" />
                            <path d="M8 12L11 15L16 9" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <span>Understand your website's<br>strengths and weaknesses</span>
                    </div>
                    <div class="checklist-item">
                        <svg class="check-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="10" fill="#EF4444" />
                            <path d="M8 12L11 15L16 9" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <span>Learn what your competitors<br>are doing better</span>
                    </div>
                    <div class="checklist-item">
                        <svg class="check-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="10" fill="#EF4444" />
                            <path d="M8 12L11 15L16 9" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <span>Actionable SEO insights you<br>can implement today</span>
                    </div>
                    <div class="checklist-item">
                        <svg class="check-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="10" fill="#EF4444" />
                            <path d="M8 12L11 15L16 9" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                        <span>Page-by-page UX Audit</span>
                    </div>
                </div>
                <a href="#form" class="btn btn-primary btn-lg">Claim Your Free Audit</a>
            </div>
        </div>
    </section>
    @if ($errors->any())
    <div style="background:#ef4444;color:#fff;padding:10px;margin-bottom:20px;border-radius:8px;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- Contact Form Section -->
    <section class="contact-form" id="form">
        <div class="container">
            <div class="section-label">GET IN TOUCH</div>
            <h2 class="section-title">
                Request Your <span class="text-accent">Free Audit</span>
            </h2>
            <p class="section-subtitle">
                Fill out the form below and we'll get back to you within 24 hours with your<br>
                custom website audit and action plan.
            </p>
            <form id="auditForm" action="{{ route('lead.store') }}" method="POST" class="audit-form">
                @csrf
                <div class="form-grid">
                    <div class="form-group">
                        <label for="first_name">First Name *</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="John"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name *</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Doe"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="+1 (555) 000-0000">
                    </div>
                    <div class="form-group">
                        <label for="website">Current Website (if any)</label>
                        <input type="url" id="website" name="website" class="form-control"
                            placeholder="https://yourwebsite.com">
                    </div>
                    <div class="form-group full-width">
                        <label for="message">Tell Us About Your Business Goals</label>
                        <textarea id="message" name="message" class="form-control" rows="5"
                            placeholder="I'm looking to improve my website's conversion rate and..."></textarea>
                    </div>
                </div>
                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}" data-callback="enableSubmit"
                    data-expired-callback="disableSubmit">
                </div>
                <div id="captchaError" style="color:#ef4444; margin-top:10px; display:none;">
                    Please verify captcha first
                </div>
                <div class="form-footer">
                    <button type="submit" id="submitBtn" class="btn btn-primary btn-lg btn-submit">
                        Get Your Free Audit
                    </button>
                    <p class="form-disclaimer">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M8 1L10.5 6L16 7L12 11L13 16L8 13.5L3 16L4 11L0 7L5.5 6L8 1Z" fill="#10B981" />
                        </svg>
                        No spam, ever. • 24-hour response time. • 100% free—no strings attached.
                    </p>
                </div>
            </form>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="final-cta">
        <div class="container">
            <div class="section-label">LIMITED AVAILABILITY</div>
            <h2 class="section-title">
                Limited Audit Slots Available<br>
                <span class="text-accent">This Week</span>
            </h2>
            <p class="section-subtitle">
                We only take on 5 audits per week to ensure quality. Don't miss out on<br>
                actionable insights that could transform your business.
            </p>
            <a href="#form" class="btn btn-primary btn-lg">Secure Your Slot Now</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-left">
                    <span class="footer-text">© 2025, Hardywork Inc. All Rights Reserved. Trusted by businesses
                        everywhere.</span>
                </div>
                <div class="footer-right">
                    <a href="/privacy" class="footer-link">Privacy Policy</a>
                    <a href="/terms" class="footer-link">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-top" id="scrollTop">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M12 19V5M12 5L5 12M12 5L19 12" stroke="white" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round" />
        </svg>
    </button>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>
        // Custom Vertical Scrollbar for Testimonials
(function() {
    const grid = document.getElementById('testimonialsGrid');
    const thumb = document.getElementById('scrollbarThumb');
    const track = document.querySelector('.scrollbar-track');

    if (!grid || !thumb || !track) return;

    let isDragging = false;
    let startY = 0;
    let startScrollTop = 0;

    // Update scrollbar thumb size and position
    function updateScrollbar() {
        const scrollHeight = grid.scrollHeight;
        const clientHeight = grid.clientHeight;
        const scrollTop = grid.scrollTop;

        // Don't show scrollbar if content fits
        if (scrollHeight <= clientHeight) {
            thumb.style.display = 'none';
            return;
        } else {
            thumb.style.display = 'block';
        }

        // Calculate thumb height (proportional to visible content)
        const thumbHeight = Math.max(40, (clientHeight / scrollHeight) * track.clientHeight);
        thumb.style.height = thumbHeight + 'px';

        // Calculate thumb position
        const maxScrollTop = scrollHeight - clientHeight;
        const scrollPercentage = maxScrollTop > 0 ? scrollTop / maxScrollTop : 0;
        const maxThumbTop = track.clientHeight - thumbHeight;
        thumb.style.top = (scrollPercentage * maxThumbTop) + 'px';
    }

    // Handle scroll event
    grid.addEventListener('scroll', updateScrollbar);

    // Handle thumb drag
    thumb.addEventListener('mousedown', function(e) {
        e.preventDefault();
        isDragging = true;
        startY = e.clientY;
        startScrollTop = grid.scrollTop;
        document.body.style.userSelect = 'none';
        thumb.style.cursor = 'grabbing';
    });

    document.addEventListener('mousemove', function(e) {
        if (!isDragging) return;

        e.preventDefault();
        const deltaY = e.clientY - startY;
        const scrollHeight = grid.scrollHeight;
        const clientHeight = grid.clientHeight;
        const trackHeight = track.clientHeight;
        const thumbHeight = parseFloat(thumb.style.height);

        // Calculate scroll amount
        const maxScrollTop = scrollHeight - clientHeight;
        const maxThumbTop = trackHeight - thumbHeight;
        const scrollRatio = maxScrollTop / maxThumbTop;
        const newScrollTop = startScrollTop + (deltaY * scrollRatio);

        grid.scrollTop = Math.max(0, Math.min(newScrollTop, maxScrollTop));
    });

    document.addEventListener('mouseup', function() {
        if (isDragging) {
            isDragging = false;
            document.body.style.userSelect = '';
            thumb.style.cursor = 'pointer';
        }
    });

    // Handle track click (jump to position)
    track.addEventListener('click', function(e) {
        if (e.target === thumb) return;

        const rect = track.getBoundingClientRect();
        const clickY = e.clientY - rect.top;
        const trackHeight = track.clientHeight;
        const thumbHeight = parseFloat(thumb.style.height);
        const scrollHeight = grid.scrollHeight;
        const clientHeight = grid.clientHeight;

        // Calculate target scroll position
        const maxScrollTop = scrollHeight - clientHeight;
        const maxThumbTop = trackHeight - thumbHeight;
        const targetThumbTop = clickY - thumbHeight / 2;
        const scrollPercentage = Math.max(0, Math.min(1, targetThumbTop / maxThumbTop));
        const targetScroll = scrollPercentage * maxScrollTop;

        grid.scrollTo({
            top: targetScroll,
            behavior: 'smooth'
        });
    });

    // Mouse wheel support on scrollbar
    track.addEventListener('wheel', function(e) {
        e.preventDefault();
        grid.scrollTop += e.deltaY;
    }, { passive: false });

    // Smooth scroll with mouse wheel on grid
    grid.addEventListener('wheel', function(e) {
        e.preventDefault();
        const delta = e.deltaY || e.detail || e.wheelDelta;
        grid.scrollTop += delta;
    }, { passive: false });

    // Initialize scrollbar
    updateScrollbar();

    // Update on window resize
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(updateScrollbar, 100);
    });

    // Update when images load or content changes
    const observer = new MutationObserver(function() {
        setTimeout(updateScrollbar, 100);
    });
    observer.observe(grid, { childList: true, subtree: true });

    // Force update after fonts and images load
    window.addEventListener('load', function() {
        setTimeout(updateScrollbar, 200);
    });
})();

document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('auditForm');
    const errorBox = document.getElementById('captchaError');

    form.addEventListener('submit', function(e) {
        e.preventDefault(); // stop reload

        let captchaResponse = grecaptcha.getResponse();

        if (captchaResponse.length === 0) {
            errorBox.style.display = 'block';
            errorBox.innerText = "⚠ Please verify captcha first";
            return;
        }

        errorBox.style.display = 'none';

        // AJAX SUBMIT
        let formData = new FormData(form);

        fetch(form.action, {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
            body: formData
        })
        .then(res => res.json())
        .then(data => {

            // ✅ SHOW SUCCESS POPUP
            document.getElementById('successModal').style.display = 'flex';

            // reset form
            form.reset();
            grecaptcha.reset();

        })
        .catch(err => {
            console.log(err);
            alert("Something went wrong!");
        });

    });

});

function closeModal() {
    document.getElementById('successModal').style.display = 'none';
}

function enableSubmit() {
    document.getElementById('submitBtn').disabled = false;
}

function disableSubmit() {
    document.getElementById('submitBtn').disabled = true;
}
    </script>

    <div id="successModal" style="
    display:none;
    position:fixed;
    top:0; left:0;
    width:100%; height:100%;
    background:rgba(0,0,0,0.7);
    justify-content:center;
    align-items:center;
    z-index:9999;
">
        <div style="
        background:#1f1f1f;
        padding:30px 40px;
        border-radius:12px;
        text-align:center;
        max-width:400px;
        color:#fff;
    ">
            <h2 style="margin-bottom:10px;">✅ Success!</h2>
            <p>Your request has been submitted successfully.</p>
            <button onclick="closeModal()" style="
            margin-top:20px;
            padding:10px 20px;
            border:none;
            border-radius:8px;
            background:primary;
            color:black;
            cursor:pointer;
        ">
                OK
            </button>
        </div>
    </div>
</body>

</html>
