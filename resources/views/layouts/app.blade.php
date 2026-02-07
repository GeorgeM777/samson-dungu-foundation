<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Samson Ddungu Foundation</title>

    <!-- Logo Colors: Orange (#FF6B35), Blue (#0047AB), Black (#000000) -->
 <style>
        :root {
            --primary-orange: #FF6B35;
            --primary-orange-light: rgba(255, 107, 53, 0.9);
            --primary-orange-faded: rgba(255, 107, 53, 0.15);
            --primary-blue: #0047AB;
            --primary-blue-dark: #003388;
            --accent-black: #2D2D2D;
            --light-bg: #FFF9F5;
            --white: #FFFFFF;
            --gray-light: #F8F9FA;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            color: var(--accent-black);
            line-height: 1.7; /* Increased line height for better readability */
            background-color: var(--light-bg);
            overflow-x: hidden;
            font-size: 18px; /* Increased base font size from default 16px */
        }

        /* MOBILE HEADER IMPROVEMENTS */
        .site-header {
            background-color: var(--white);
            box-shadow: var(--shadow);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        .site-header.scrolled {
            background-color: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 90px; /* Increased from 80px */
        }

        /* MOBILE: Reduce header height */
        @media (max-width: 768px) {
            .nav-container {
                height: 70px; /* Increased from 60px */
                padding: 0 20px;
            }
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .logo {
            height: 70px; /* Increased from 60px */
            width: auto;
            transition: transform 0.3s ease;
            object-fit: contain;
        }

        /* MOBILE: Make logo smaller but still visible */
        @media (max-width: 768px) {
            .logo {
                height: 50px; /* Increased from 40px */
            }
            .logo-text h1 {
                font-size: 1.2rem; /* Increased from 1rem */
            }
            .logo-text span {
                font-size: 0.85rem; /* Increased from 0.7rem */
            }
        }

        /* MOBILE: Very small screens - further reduce logo */
        @media (max-width: 480px) {
            .logo {
                height: 45px; /* Increased from 35px */
            }
            .logo-text h1 {
                font-size: 1.1rem; /* Increased from 0.9rem */
            }
            .logo-text span {
                font-size: 0.75rem; /* Increased from 0.6rem */
            }
        }

        .logo:hover {
            transform: scale(1.05) rotate(5deg);
        }

        .logo-text h1 {
            color: var(--primary-blue);
            font-size: 1.6rem; /* Increased from 1.4rem */
            margin-bottom: 5px;
            font-weight: 700;
        }

        .logo-text span {
            color: var(--primary-orange);
            font-size: 1rem; /* Increased from 0.85rem */
            font-weight: 600;
        }

        .main-nav ul {
            display: flex;
            list-style: none;
            gap: 30px;
        }

        .main-nav a {
            text-decoration: none;
            color: var(--accent-black);
            font-weight: 600;
            padding: 8px 12px; /* Increased padding */
            transition: all 0.3s ease;
            position: relative;
            font-size: 1.1rem; /* Increased from 1rem */
        }

        .main-nav a:hover {
            color: var(--primary-orange);
        }

        .main-nav a::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 12px;
            right: 12px;
            height: 4px; /* Slightly thicker underline */
            background-color: var(--primary-orange);
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .main-nav a:hover::after,
        .main-nav a.active::after {
            transform: scaleX(1);
        }

        .main-nav a.active {
            color: var(--primary-blue);
        }

        /* FLOATING CONTACT BUTTON CONTAINER */
        .float-contact-container {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 9998;
            display: flex;
            flex-direction: column-reverse;
            align-items: flex-end;
            gap: 15px;
        }

        /* MAIN TOGGLE BUTTON (The one you always see) */
        .contact-toggle {
            width: 65px; /* Slightly larger */
            height: 65px;
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark));
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px; /* Larger icon */
            box-shadow: var(--shadow);
            cursor: pointer;
            border: none;
            transition: all 0.4s ease;
        }
        .contact-toggle:hover {
            transform: scale(1.08);
            box-shadow: 0 8px 25px rgba(0, 71, 171, 0.4);
        }
        .contact-toggle.active {
            transform: rotate(135deg);
            background: linear-gradient(135deg, var(--primary-orange), #FF8B35);
        }

        /* INDIVIDUAL CONTACT ACTION BUTTONS (Hidden by default) */
        .contact-action {
            width: 55px; /* Larger */
            height: 55px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px; /* Larger icons */
            text-decoration: none;
            box-shadow: var(--shadow);
            opacity: 0;
            transform: scale(0.5) translateY(20px);
            transition: all 0.3s ease;
            pointer-events: none;
        }
        /* Button Colors */
        .contact-action.whatsapp { background-color: #25D366; }
        .contact-action.email { background-color: #4285F4; }
        .contact-action.phone { background-color: #34B7F1; }
        .contact-action.sms { background-color: var(--primary-orange); }

        /* When the container is active, show the action buttons */
        .float-contact-container.active .contact-action {
            opacity: 1;
            transform: scale(1) translateY(0);
            pointer-events: auto;
        }
        .contact-action:hover {
            transform: scale(1.1) !important;
        }

        /* Button Labels */
        .contact-label {
            position: absolute;
            right: 70px; /* Adjusted for larger button */
            background: rgba(45, 45, 45, 0.9);
            color: white;
            padding: 10px 18px; /* Increased padding */
            border-radius: 6px;
            font-size: 16px; /* Larger label text */
            font-weight: 500;
            white-space: nowrap;
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
        }
        .contact-label::after {
            content: '';
            position: absolute;
            top: 50%;
            right: -5px;
            transform: translateY(-50%);
            border-width: 5px 0 5px 5px;
            border-style: solid;
            border-color: transparent transparent transparent rgba(45, 45, 45, 0.9);
        }
        .contact-action:hover .contact-label {
            opacity: 1;
        }

        /* RESPONSIVE DESIGN for floating widget */
        @media (max-width: 768px) {
            .float-contact-container {
                bottom: 20px;
                right: 20px;
            }
            .contact-toggle {
                width: 60px;
                height: 60px;
                font-size: 26px;
            }
            .contact-action {
                width: 52px;
                height: 52px;
                font-size: 22px;
            }
            .contact-label {
                font-size: 14px; /* Slightly larger */
                padding: 8px 15px;
                right: 65px;
            }
        }
        @media (max-width: 480px) {
            .float-contact-container {
                bottom: 15px;
                right: 15px;
            }
        }

        /* Animations (unchanged) */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-100px) rotate(-10deg);
            }
            to {
                opacity: 1;
                transform: translateX(0) rotate(0);
            }
        }

        @keyframes slideInRight {
            from {
                opacity: 0;
                transform: translateX(100px) rotate(10deg);
            }
            to {
                opacity: 1;
                transform: translateX(0) rotate(0);
            }
        }

        @keyframes floatIn {
            0% {
                opacity: 0;
                transform: translateY(50px) scale(0.9);
            }
            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes rotateIn {
            from {
                opacity: 0;
                transform: rotate(-180deg) scale(0.5);
            }
            to {
                opacity: 1;
                transform: rotate(0) scale(1);
            }
        }

        .animate-on-scroll {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s ease-out;
        }

        .animate-on-scroll.animated {
            opacity: 1;
            transform: translateY(0);
        }

        .animate-left {
            animation: slideInLeft 1s ease-out;
        }

        .animate-right {
            animation: slideInRight 1s ease-out;
        }

        .animate-float {
            animation: floatIn 1.2s ease-out;
        }

        .animate-rotate {
            animation: rotateIn 1s ease-out;
        }

        .animate-up {
            animation: fadeInUp 0.8s ease-out;
        }

        .delay-200 { animation-delay: 0.2s; }
        .delay-400 { animation-delay: 0.4s; }
        .delay-600 { animation-delay: 0.6s; }
        .delay-800 { animation-delay: 0.8s; }

        /* Hero Slideshow - Clean Version */
        .hero-slideshow {
            height: 100vh;
            min-height: 700px;
            position: relative;
            overflow: hidden;
            margin-top: 90px; /* Adjusted for taller header */
        }

        /* MOBILE: Adjust for smaller header */
        @media (max-width: 768px) {
            .hero-slideshow {
                margin-top: 70px; /* Adjusted */
                min-height: 500px;
            }
        }

        .slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            opacity: 0;
            transition: opacity 1.2s ease-in-out;
            z-index: 1;
        }

        .slide.active {
            opacity: 1;
            z-index: 2;
        }

        .slide-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 3;
            background: rgba(0, 0, 0, 0.3);
        }

        .slide-text {
            text-align: center;
            color: white;
            max-width: 800px;
            padding: 0 30px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        .slide-text h2 {
            font-size: 4rem; /* Increased from 3.5rem */
            font-weight: 800;
            margin-bottom: 25px;
            animation: fadeInUp 0.8s ease-out;
        }

        .slide-text p {
            font-size: 1.8rem; /* Increased from 1.5rem */
            font-weight: 300;
            animation: fadeInUp 0.8s ease-out 0.3s both;
        }

        /* Simple Slide Controls */
        .slide-controls {
            position: absolute;
            bottom: 40px; /* More spacing */
            left: 0;
            right: 0;
            z-index: 5;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .slide-dot {
            width: 14px; /* Slightly larger */
            height: 14px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .slide-dot.active {
            background: var(--primary-orange);
            transform: scale(1.4); /* Slightly larger active state */
        }

        /* Image Gallery Styles */
        .image-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin: 60px 0;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            height: 300px;
            box-shadow: var(--shadow);
            transition: all 0.5s ease;
        }

        .gallery-item:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.1);
        }

        .gallery-caption {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            color: white;
            padding: 25px; /* Increased padding */
            font-size: 1.1rem; /* Larger caption text */
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

        .gallery-item:hover .gallery-caption {
            transform: translateY(0);
        }

        /* Staggered Image Layout */
        .staggered-images {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin: 60px 0;
        }

        .staggered-img {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: var(--shadow);
            height: 300px;
        }

        .staggered-img:nth-child(odd) {
            transform: rotate(-2deg);
        }

        .staggered-img:nth-child(even) {
            transform: rotate(2deg);
        }

        .staggered-img:hover {
            transform: rotate(0) scale(1.05);
            transition: transform 0.5s ease;
        }

        /* Content Sections */
        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 30px;
        }

        .section-title {
            text-align: center;
            color: var(--primary-blue);
            margin: 90px 0 40px; /* Increased margins */
            position: relative;
            font-size: 3rem; /* Increased from 2.5rem */
            font-weight: 700;
        }

        .section-title::after {
            content: '';
            display: block;
            width: 140px; /* Wider line */
            height: 6px; /* Thicker line */
            background: linear-gradient(to right, var(--primary-blue), var(--primary-orange));
            margin: 25px auto; /* More spacing */
            border-radius: 5px;
        }

        .section-subtitle {
            text-align: center;
            color: var(--accent-black);
            font-size: 1.4rem; /* Increased from 1.2rem */
            max-width: 800px;
            margin: 0 auto 70px; /* Increased bottom margin */
            font-weight: 300;
            line-height: 1.8;
        }

        /* Impact Section */
        .impact-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 35px; /* More spacing */
            margin: 70px 0; /* More spacing */
        }

        .stat-card {
            background: white;
            padding: 45px 35px; /* More padding */
            border-radius: 15px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            border-top: 6px solid var(--primary-orange); /* Thicker border */
        }

        .stat-card:hover {
            transform: translateY(-10px) rotate(3deg);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .stat-number {
            font-size: 4rem; /* Increased from 3.5rem */
            font-weight: 800;
            color: var(--primary-orange);
            margin-bottom: 15px;
            line-height: 1;
        }

        .stat-card p {
            color: var(--accent-black);
            font-size: 1.3rem; /* Increased from 1.1rem */
            font-weight: 600;
        }

        /* Mission & Vision Cards */
        .mission-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 45px; /* More spacing */
            margin: 70px 0; /* More spacing */
        }

        .mission-card {
            background: white;
            border-radius: 20px;
            padding: 45px 40px; /* More padding */
            box-shadow: var(--shadow);
            border-top: 6px solid var(--primary-orange); /* Thicker border */
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .mission-card:hover {
            transform: translateY(-15px) rotate(1deg);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }

        .mission-card h3 {
            color: var(--primary-blue);
            margin-bottom: 25px;
            font-size: 1.8rem; /* Increased from 1.6rem */
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .mission-card h3 i {
            color: var(--primary-orange);
            font-size: 2rem; /* Larger icons */
        }

        /* Inclusive Statement */
        .inclusive-statement {
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark));
            color: white;
            padding: 70px; /* More padding */
            border-radius: 25px;
            margin: 90px 0; /* More spacing */
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .inclusive-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            margin: 0 auto;
        }

        .inclusive-statement h2 {
            text-align: center;
            margin-bottom: 35px;
            font-size: 2.5rem; /* Increased from 2.2rem */
            font-weight: 700;
        }

        .inclusive-statement p {
            font-size: 1.4rem; /* Increased from 1.2rem */
            line-height: 1.9;
            margin-bottom: 35px;
            text-align: center;
        }

        /* Urgent Appeal Section */
        .urgent-appeal {
            background: linear-gradient(135deg, #FF6B35, #FF8B35);
            color: white;
            padding: 80px 0; /* More padding */
            margin: 90px 0; /* More spacing */
            position: relative;
            overflow: hidden;
        }

        .appeal-content {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        /* Footer */
        .site-footer {
            background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark));
            color: white;
            padding: 80px 0 40px; /* More padding */
            margin-top: 120px; /* More spacing */
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 60px; /* More spacing */
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 30px;
        }

        .footer-section h3 {
            color: var(--primary-orange);
            margin-bottom: 30px; /* More spacing */
            font-size: 1.5rem; /* Increased from 1.3rem */
            font-weight: 700;
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 15px; /* More spacing */
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 12px; /* More spacing */
            font-size: 1.1rem; /* Larger link text */
        }

        .footer-links a:hover {
            color: var(--primary-orange);
            transform: translateX(5px);
        }

        .social-links {
            display: flex;
            gap: 20px;
            margin-top: 25px; /* More spacing */
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 50px; /* Larger buttons */
            height: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            color: white;
            font-size: 1.4rem; /* Larger icons */
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary-orange);
            transform: translateY(-5px) rotate(15deg);
        }

        .copyright {
            text-align: center;
            margin-top: 70px; /* More spacing */
            padding-top: 35px; /* More padding */
            border-top: 2px solid rgba(255, 255, 255, 0.1); /* Thicker border */
            font-size: 1.1rem; /* Larger text */
            opacity: 0.8;
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.8;
        }

        /* School Partnership Specific Styles - UPDATED */
        .school-partnerships {
            margin: 90px 0; /* More spacing */
            padding: 50px 0; /* More padding */
        }

        .partnership-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 45px; /* More spacing */
            margin: 60px 0; /* More spacing */
        }

        @media (max-width: 768px) {
            .partnership-cards {
                grid-template-columns: 1fr;
            }
        }

        .partnership-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .partnership-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }

        .school-badge {
            color: white;
            padding: 18px 35px; /* More padding */
            display: inline-flex;
            align-items: center;
            gap: 12px; /* More spacing */
            font-weight: 600;
            border-radius: 0 0 20px 0;
            font-size: 1.1rem; /* Larger text */
        }

        .school-badge i {
            font-size: 1.4rem; /* Larger icon */
        }

        .school-content {
            padding: 35px; /* More padding */
        }

        .school-content h3 {
            color: var(--primary-blue);
            font-size: 2rem; /* Increased from 1.8rem */
            margin-bottom: 15px; /* More spacing */
        }

        .school-location {
            color: #666;
            margin-bottom: 30px; /* More spacing */
            display: flex;
            align-items: center;
            gap: 10px; /* More spacing */
            font-size: 1.1rem; /* Larger text */
        }

        .school-images {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px; /* More spacing */
            margin: 30px 0; /* More spacing */
        }

        .main-school-image {
            border-radius: 10px;
            overflow: hidden;
            height: 300px; /* Taller */
        }

        .main-school-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .school-gallery {
            display: grid;
            gap: 20px; /* More spacing */
        }

        .gallery-item {
            border-radius: 8px;
            overflow: hidden;
            height: 140px; /* Taller */
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .school-impact {
            margin: 30px 0; /* More spacing */
            padding: 25px; /* More padding */
            background: #F8F9FA;
            border-radius: 10px;
        }

        .school-impact h4 {
            color: var(--primary-blue);
            margin-bottom: 20px; /* More spacing */
            font-size: 1.3rem; /* Larger */
        }

        .school-impact ul {
            list-style: none;
            padding: 0;
        }

        .school-impact li {
            margin-bottom: 12px; /* More spacing */
            display: flex;
            align-items: flex-start;
            gap: 12px; /* More spacing */
            font-size: 1.05rem; /* Slightly larger */
        }

        .school-impact i {
            color: #4CAF50;
            margin-top: 3px;
            font-size: 1.1rem; /* Larger icons */
        }

        .student-testimonial {
            background: linear-gradient(135deg, var(--primary-blue-faded), #E3F2FD);
            padding: 25px; /* More padding */
            border-radius: 10px;
            border-left: 5px solid var(--primary-orange); /* Thicker border */
            margin-top: 30px; /* More spacing */
        }

        .student-testimonial p {
            font-style: italic;
            margin-bottom: 15px; /* More spacing */
            line-height: 1.8;
            font-size: 1.1rem; /* Larger text */
        }

        .student-name {
            color: var(--primary-blue);
            font-weight: 600; /* Bolder */
            font-size: 1.1rem; /* Larger */
        }

        .partnership-impact {
            background: linear-gradient(135deg, #FFF9F0, #FFF3E0);
            padding: 50px; /* More padding */
            border-radius: 20px;
            text-align: center;
            margin-top: 70px; /* More spacing */
        }

        .impact-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 35px; /* More spacing */
            margin: 50px 0; /* More spacing */
        }

        .impact-stat {
            text-align: center;
        }

        .stat-number {
            font-size: 3.5rem; /* Increased from 3rem */
            font-weight: bold;
            color: var(--primary-orange);
            margin-bottom: 15px; /* More spacing */
        }

        .stat-label {
            color: var(--primary-blue);
            font-weight: 500;
            font-size: 1.2rem; /* Larger */
        }

        /* Program Highlight Section */
        .program-highlight {
            background: linear-gradient(135deg, #E8F5E9, #C8E6C9);
            border-radius: 20px;
            padding: 60px; /* More padding */
            margin: 70px 0; /* More spacing */
        }

        .highlight-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px; /* More spacing */
        }

        @media (max-width: 1024px) {
            .highlight-content {
                grid-template-columns: 1fr;
            }
        }

        .highlight-badge {
            background: var(--primary-blue);
            color: white;
            padding: 10px 25px; /* More padding */
            border-radius: 20px;
            display: inline-block;
            font-weight: 600;
            margin-bottom: 25px; /* More spacing */
            font-size: 1.1rem; /* Larger */
        }

        .highlight-text h3 {
            color: var(--primary-blue);
            font-size: 2.2rem; /* Increased from 2rem */
            margin-bottom: 25px; /* More spacing */
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .highlight-text h3 i {
            font-size: 2.5rem; /* Larger icon */
        }

        .partnership-details {
            margin: 35px 0; /* More spacing */
            font-size: 1.1rem; /* Larger text */
            line-height: 1.8;
        }

        .partner-schools {
            display: grid;
            gap: 30px; /* More spacing */
            margin: 25px 0; /* More spacing */
        }

        .partner-school {
            background: white;
            padding: 30px; /* More padding */
            border-radius: 15px;
            border-left: 6px solid var(--primary-blue); /* Thicker border */
        }

        .partner-school h5 {
            color: var(--primary-blue);
            margin-bottom: 15px; /* More spacing */
            font-size: 1.4rem; /* Larger */
        }

        .school-features {
            display: flex;
            gap: 20px;
            margin-top: 20px;
            flex-wrap: wrap;
        }

        .school-features span {
            background: var(--primary-orange-faded);
            padding: 10px 18px; /* More padding */
            border-radius: 20px;
            font-size: 1rem; /* Larger */
            display: flex;
            align-items: center;
            gap: 10px; /* More spacing */
        }

        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px; /* More spacing */
            margin: 25px 0; /* More spacing */
        }

        .benefit {
            background: white;
            padding: 20px; /* More padding */
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 20px; /* More spacing */
            font-weight: 500;
            font-size: 1.1rem; /* Larger text */
        }

        .benefit i {
            color: var(--primary-orange);
            font-size: 1.4rem; /* Larger icons */
        }

        /* Responsive adjustments */
        @media (max-width: 1024px) {
            body {
                font-size: 17px; /* Slightly smaller for tablets */
            }

            .hero-slideshow {
                min-height: 600px;
            }

            .slide-text h2 {
                font-size: 3.2rem;
            }

            .slide-text p {
                font-size: 1.6rem;
            }

            .appeal-content {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .staggered-images {
                grid-template-columns: repeat(2, 1fr);
            }

            .section-title {
                font-size: 2.6rem;
            }

            .section-subtitle {
                font-size: 1.3rem;
            }
        }

        @media (max-width: 768px) {
            body {
                font-size: 16px; /* Back to normal for mobile */
            }

            .nav-container {
                flex-direction: column;
                padding: 15px;
                height: auto;
                gap: 15px;
            }

            .main-nav ul {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .hero-slideshow {
                min-height: 500px;
                height: 70vh;
            }

            .slide-text h2 {
                font-size: 2.5rem; /* Still larger than original */
            }

            .slide-text p {
                font-size: 1.4rem; /* Still larger than original */
            }

            .section-title {
                font-size: 2.3rem;
            }

            .section-subtitle {
                font-size: 1.2rem;
            }

            .staggered-images {
                grid-template-columns: 1fr;
            }

            .mission-cards {
                grid-template-columns: 1fr;
            }

            .impact-stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .stat-number {
                font-size: 3.2rem;
            }

            .mission-card h3 {
                font-size: 1.6rem;
            }

            .inclusive-statement {
                padding: 40px 25px;
            }

            .inclusive-statement h2 {
                font-size: 2rem;
            }

            .inclusive-statement p {
                font-size: 1.2rem;
            }

            .footer-section h3 {
                font-size: 1.3rem;
            }

            .footer-links a {
                font-size: 1rem;
            }

            .school-content h3 {
                font-size: 1.7rem;
            }

            .highlight-text h3 {
                font-size: 1.8rem;
            }

            .benefits-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .impact-stats {
                grid-template-columns: 1fr;
            }

            .stat-number {
                font-size: 3rem;
            }

            .inclusive-statement {
                padding: 35px 20px;
            }

            .inclusive-statement h2 {
                font-size: 1.8rem;
            }

            .slide-text h2 {
                font-size: 2rem;
            }

            .slide-text p {
                font-size: 1.2rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .footer-links a {
                font-size: 0.95rem;
            }
        }

        /* Hamburger Menu Styles */
        .hamburger-menu {
            display: none;
            background: none;
            border: none;
            font-size: 1.8rem; /* Larger menu icon */
            color: var(--primary-blue);
            cursor: pointer;
            padding: 12px; /* More padding */
            z-index: 1001;
        }

        /* Mobile Navigation */
        @media (max-width: 768px) {
            .hamburger-menu {
                display: block;
            }

            .main-nav {
                position: fixed;
                top: 70px; /* Adjusted for taller header */
                right: -100%;
                width: 85%; /* Slightly wider */
                height: calc(100vh - 70px);
                background: var(--white);
                box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
                transition: right 0.3s ease;
                overflow-y: auto;
                z-index: 1000;
            }

            .main-nav.active {
                right: 0;
            }

            .main-nav ul {
                flex-direction: column;
                padding: 25px; /* More padding */
                gap: 15px; /* More spacing */
            }

            .main-nav li {
                width: 100%;
                border-bottom: 2px solid var(--gray-light); /* Thicker border */
            }

            .main-nav a {
                display: block;
                padding: 18px 0; /* More padding */
                font-size: 1.2rem; /* Larger menu items */
            }
        }

        /* Additional typography improvements */
        h1, h2, h3, h4, h5, h6 {
            line-height: 1.3;
        }

        p {
            margin-bottom: 1.5em; /* More paragraph spacing */
        }

        /* Larger button text */
        button, .btn, input[type="submit"] {
            font-size: 1.1rem; /* Larger button text */
        }

        /* Larger form elements */
        input, textarea, select {
            font-size: 1.1rem; /* Larger form text */
            padding: 12px 15px; /* More padding */
        }

        /* Larger table text */
        table {
            font-size: 1.1rem;
        }

        th, td {
            padding: 15px; /* More table cell padding */
        }

        /* Larger blockquote */
        blockquote {
            font-size: 1.3rem;
            padding: 25px;
        }

        /* Larger code blocks */
        code, pre {
            font-size: 1.1rem;
        }

        /* Larger list items */
        li {
            font-size: 1.1rem;
            margin-bottom: 10px; /* More spacing between list items */
        }

        /* Larger breadcrumb text */
        .breadcrumb {
            font-size: 1.1rem;
        }

        /* Larger alert text */
        .alert {
            font-size: 1.1rem;
            padding: 20px;
        }
        /* Dropdown Menu Styles */
.dropdown {
    position: relative;
}

.dropdown > a {
    display: flex;
    align-items: center;
    gap: 8px;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    background: white;
    min-width: 280px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    border-radius: 15px;
    padding: 20px 0;
    opacity: 0;
    visibility: hidden;
    transform: translateY(20px);
    transition: all 0.3s ease;
    z-index: 1000;
    overflow: hidden;
}

.dropdown:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.dropdown-menu a {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 25px;
    color: var(--accent-black);
    text-decoration: none;
    transition: all 0.3s ease;
    font-weight: 500;
    font-size: 1rem;
    border-left: 3px solid transparent;
}

.dropdown-menu a:hover {
    background: var(--primary-orange-faded);
    color: var(--primary-orange);
    border-left: 3px solid var(--primary-orange);
    padding-left: 30px;
}

.dropdown-menu a i {
    width: 20px;
    text-align: center;
    font-size: 1.1rem;
}

.dropdown-divider {
    height: 1px;
    background: #E0E0E0;
    margin: 15px 25px;
}

/* Mobile dropdown adjustments */
@media (max-width: 768px) {
    .dropdown-menu {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none;
        box-shadow: none;
        padding: 10px 0 10px 30px;
        background: var(--gray-light);
        border-radius: 10px;
        margin-top: 10px;
        display: none;
    }

    .dropdown.active .dropdown-menu {
        display: block;
    }

    .dropdown > a {
        position: relative;
    }

    .dropdown > a::after {
        content: '+';
        position: absolute;
        right: 0;
        font-size: 1.2rem;
        transition: transform 0.3s ease;
    }

    .dropdown.active > a::after {
        content: '-';
        transform: rotate(180deg);
    }

}


    </style>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>


   <header class="site-header" id="siteHeader">
    <div class="nav-container">
        <div class="logo-section">
            <img src="{{ asset('images/logo.png') }}" alt="Samson Ddungu Foundation Logo" class="logo">
            <div class="logo-text">
                <h1>Samson Ddungu Foundation</h1>
                <span>Bringing Hope to Uganda Since 2012</span>
            </div>
        </div>

        <!-- Hamburger Menu Button for Mobile -->
        <button class="hamburger-menu" id="hamburgerMenu" aria-label="Toggle navigation menu">
            <i class="fas fa-bars"></i>
        </button>

<nav class="main-nav" id="mainNav">
    <ul>
        <li><a href="{{ url('/') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>

        <!-- What We Do Dropdown -->
        <li class="dropdown">
            <a href="{{ url('/what-we-do') }}" class="{{ request()->is('what-we-do') ? 'active' : '' }}">
                What We Do <i class="fas fa-chevron-down"></i>
            </a>
            <div class="dropdown-menu">
                <a href="{{ url('/what-we-do') }}">
                    <i class="fas fa-tasks"></i> All Programs Overview
                </a>
                <a href="{{ url('/projects/orphans') }}">
                    <i class="fas fa-child"></i> Orphans Support Program
                </a>
                <a href="{{ url('/projects/special-needs') }}">
                    <i class="fas fa-wheelchair"></i> Special Needs Support
                </a>
                <a href="{{ url('/projects/elderly-medical-camps') }}">
                    <i class="fas fa-heartbeat"></i> Elderly & Medical Camps
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ url('/special-projects') }}">
                    <i class="fas fa-star"></i> Special Projects
                </a>
            </div>
        </li>

        <li><a href="{{ url('/sponsor') }}" class="{{ request()->is('sponsor') ? 'active' : '' }}">Sponsor</a></li>
        <li><a href="{{ url('/get-involved') }}" class="{{ request()->is('get-involved') ? 'active' : '' }}">Get Involved</a></li>
        <!-- <li><a href="{{ url('/blog') }}" class="{{ request()->is('blog*') ? 'active' : '' }}">Blog & News</a></li> -->
        <li><a href="{{ url('/special-projects') }}" class="{{ request()->is('special-projects') ? 'active' : '' }}">Special Projects</a></li>
        <li><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact Us</a></li>
    </ul>
</nav>
        </nav>
    </div>
</header>
    <main>
        @yield('content')
    </main>

    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Contact Information</h3>
                <ul class="footer-links">
                    <li><i class="fas fa-map-marker-alt"></i> Wakiso District, Central Uganda</li>
                    <li><i class="fas fa-phone"></i>+256 782 488 116</li>
                    <li><i class="fas fa-envelope"></i> info@samsondungufoundation.org</li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="/"><i class="fas fa-chevron-right"></i> Home</a></li>
                    <li><a href="/what-we-do"><i class="fas fa-chevron-right"></i> Our Programs</a></li>
                    <li><a href="/sponsor"><i class="fas fa-chevron-right"></i> Donate</a></li>
                    <li><a href="/special-projects"><i class="fas fa-chevron-right"></i> Land Project</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Follow Our Journey</h3>
                <div class="social-links">
                    <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" title="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
                <p style="margin-top: 25px; opacity: 0.9;">Subscribe to our newsletter for updates</p>
            </div>
        </div>
        <div class="copyright">
            &copy; {{ date('Y') }} Samson Ddungu Foundation. All rights reserved.<br>
            Registered Non-Profit Organization in Uganda | Registration No: 80034053198295
        </div>
    </footer>


     <!-- Floating Contact Widget -->
    <div class="float-contact-container" id="floatContact">
        <!-- Main Toggle Button -->
        <button class="contact-toggle" id="contactToggle" aria-label="Open contact options">
            <i class="fas fa-comment-dots"></i>
        </button>

        <!-- Individual Contact Action Buttons -->
        <!-- SMS/Message Button -->
        <a href="sms:+256782488116" class="contact-action sms" aria-label="Send a text message">
            <i class="fas fa-sms"></i>
            <span class="contact-label">Text Message</span>
        </a>
        <!-- Phone Call Button -->
        <a href="tel:+256782488116" class="contact-action phone" aria-label="Call us">
            <i class="fas fa-phone-alt"></i>
            <span class="contact-label">Call: +256 782 488 116</span>
        </a>
        <!-- Email Button -->
        <a href="mailto:info@samsondungufoundation.org?subject=Inquiry%20from%20Website&body=Hello%20Samson%20Ddungu%20Foundation,"
           class="contact-action email"
           aria-label="Send us an email">
            <i class="fas fa-envelope"></i>
            <span class="contact-label">info@samsondungufoundation.org</span>
        </a>
        <!-- WhatsApp Button -->
        <a href="https://api.whatsapp.com/send?phone=256782488116&text=Hello%20Samson%20Ddungu%20Foundation,%20I%20would%20like%20more%20information."
           class="contact-action whatsapp"
           target="_blank"
           aria-label="Chat with us on WhatsApp">
            <i class="fab fa-whatsapp"></i>
            <span class="contact-label">Chat on WhatsApp</span>
        </a>
    </div>

    <script>
// Scroll Animation for School Sections
function checkScrollAnimations() {
    const elements = document.querySelectorAll('.animate-on-scroll');

    elements.forEach(element => {
        const elementTop = element.getBoundingClientRect().top;
        const elementVisible = 150;

        if (elementTop < window.innerHeight - elementVisible) {
            element.classList.add('visible');
        }
    });
}

// School Gallery Lightbox
function initSchoolGalleries() {
    document.querySelectorAll('.gallery-thumbs img').forEach(thumb => {
        thumb.addEventListener('click', function() {
            const mainImg = this.closest('.project-gallery').querySelector('.gallery-main img');
            mainImg.src = this.src;

            // Add active state to clicked thumb
            this.closest('.gallery-thumbs').querySelectorAll('img').forEach(img => {
                img.style.opacity = '0.7';
            });
            this.style.opacity = '1';
        });
    });
}

// Timeline animation
function initTimelineAnimation() {
    const timelineItems = document.querySelectorAll('.timeline-item');

    timelineItems.forEach((item, index) => {
        item.style.animationDelay = `${index * 200}ms`;
    });
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', function() {
    // Check scroll animations
    checkScrollAnimations();
    window.addEventListener('scroll', checkScrollAnimations);

    // Initialize galleries if they exist
    if (document.querySelector('.gallery-thumbs')) {
        initSchoolGalleries();
    }

    // Initialize timeline animation if it exists
    if (document.querySelector('.timeline-item')) {
        initTimelineAnimation();
    }

    // Add hover effects to partnership cards
    document.querySelectorAll('.partnership-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
});


        // Hamburger Menu Toggle
const hamburgerMenu = document.getElementById('hamburgerMenu');
const mainNav = document.getElementById('mainNav');

hamburgerMenu.addEventListener('click', function() {
    mainNav.classList.toggle('active');
    const icon = this.querySelector('i');
    icon.classList.toggle('fa-bars');
    icon.classList.toggle('fa-times');
});

// Close menu when clicking outside or on a link
document.addEventListener('click', function(event) {
    if (!mainNav.contains(event.target) && !hamburgerMenu.contains(event.target)) {
        mainNav.classList.remove('active');
        hamburgerMenu.querySelector('i').classList.remove('fa-times');
        hamburgerMenu.querySelector('i').classList.add('fa-bars');
    }
});

// Close menu when clicking on a link
document.querySelectorAll('.main-nav a').forEach(link => {
    link.addEventListener('click', () => {
        mainNav.classList.remove('active');
        hamburgerMenu.querySelector('i').classList.remove('fa-times');
        hamburgerMenu.querySelector('i').classList.add('fa-bars');
    });
});
        // Floating contact widget functionality
        const floatContact = document.getElementById('floatContact');
        const contactToggle = document.getElementById('contactToggle');

        contactToggle.addEventListener('click', function() {
            floatContact.classList.toggle('active');
            this.classList.toggle('active');
            this.setAttribute('aria-label', floatContact.classList.contains('active')
                ? 'Close contact options'
                : 'Open contact options');
        });

        // Close floating widget when clicking outside
        document.addEventListener('click', function(event) {
            if (!floatContact.contains(event.target) && floatContact.classList.contains('active')) {
                floatContact.classList.remove('active');
                contactToggle.classList.remove('active');
                contactToggle.setAttribute('aria-label', 'Open contact options');
            }
        });

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('siteHeader');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Simplified Slideshow for Auto-Scroll
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            const dots = document.querySelectorAll('.slide-dot');
            let currentSlide = 0;
            const slideInterval = 3000; // Change slide every 3 seconds

            function showSlide(n) {
                // Remove active class from all slides and dots
                slides.forEach(slide => slide.classList.remove('active'));
                dots.forEach(dot => dot.classList.remove('active'));

                // Calculate new slide index with wrap-around
                currentSlide = (n + slides.length) % slides.length;

                // Add active class to current slide and dot
                slides[currentSlide].classList.add('active');
                if(dots[currentSlide]) {
                    dots[currentSlide].classList.add('active');
                }
            }

            function nextSlide() {
                showSlide(currentSlide + 1);
            }

            // Auto-advance slides
            let slideTimer = setInterval(nextSlide, slideInterval);

            // Optional: Pause on hover for user control
            const slideshow = document.querySelector('.hero-slideshow');
            if(slideshow) {
                slideshow.addEventListener('mouseenter', () => clearInterval(slideTimer));
                slideshow.addEventListener('mouseleave', () => {
                    slideTimer = setInterval(nextSlide, slideInterval);
                });
            }

            // Dot click navigation
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    showSlide(index);
                    // Reset timer on manual navigation
                    clearInterval(slideTimer);
                    slideTimer = setInterval(nextSlide, slideInterval);
                });
            });

            // Initialize
            showSlide(0);

            // Scroll Animation Trigger
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -100px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Randomly assign animation class
                        const animations = ['animate-left', 'animate-right', 'animate-float', 'animate-rotate'];
                        const randomAnim = animations[Math.floor(Math.random() * animations.length)];
                        entry.target.classList.add('animated', randomAnim);
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe all elements with animate-on-scroll class
            document.querySelectorAll('.animate-on-scroll').forEach(el => {
                observer.observe(el);
            });

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if (targetId === '#') return;

                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 100,
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });

        // Mobile dropdown functionality
document.addEventListener('DOMContentLoaded', function() {
    const dropdowns = document.querySelectorAll('.dropdown > a');

    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                const parent = this.parentElement;
                parent.classList.toggle('active');

                // Close other dropdowns
                document.querySelectorAll('.dropdown').forEach(item => {
                    if (item !== parent) {
                        item.classList.remove('active');
                    }
                });
            }
        });
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.dropdown')) {
            document.querySelectorAll('.dropdown').forEach(item => {
                item.classList.remove('active');
            });
        }
    });
});
    </script>
</body>
</html>
