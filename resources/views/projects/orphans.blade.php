@extends('layouts.app')

@section('title', 'Orphans Support Program - Providing Hope & Family to Uganda\'s Orphaned Children')
@section('content')

<!-- Hero Section with Parallax -->
<div class="project-hero-section">
    <div class="hero-background" style="background-image: url('{{ asset('images/projects/orphans-hero.jpg') }}');"></div>
    <div class="hero-overlay">
        <div class="hero-content">
            <div class="hero-badge animate-on-scroll">Family & Care</div>
            <h1 class="animate-on-scroll">Orphans Support Program</h1>
            <p class="animate-on-scroll delay-200">Providing loving homes, education, and family support for orphaned children across Uganda</p>
        </div>
    </div>
    <div class="hero-stats animate-on-scroll delay-400">
        <div class="stat">
            <div class="stat-number">100+</div>
            <div class="stat-label">Children Supported</div>
        </div>
        <div class="stat">
            <div class="stat-number">12</div>
            <div class="stat-label">Years of Care</div>
        </div>
        <div class="stat">
            <div class="stat-number">20+</div>
            <div class="stat-label">Loving Homes</div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Project Overview -->
    <section class="project-overview animate-on-scroll">
        <h2 class="section-title">Bringing Families Together</h2>
        <p class="section-subtitle">Creating lasting bonds and bright futures for Uganda's orphaned children</p>

        <div class="overview-content">
            <div class="overview-text">
                <p>Our Orphans Support Program is built on the belief that every child deserves a loving family, quality education, and the opportunity to dream. Since 2012, we've been providing comprehensive care for orphaned children across Uganda, ensuring they grow up in safe, nurturing environments.</p>
                <p>We work closely with local communities to identify children who have lost their parents due to HIV/AIDS, poverty, or other circumstances. Through our network of foster families and care centers, we provide not just basic necessities, but emotional support, education, and pathways to a better future.</p>
            </div>
            <div class="overview-image">
                <img src="{{ asset('images/projects/orphans-group.jpg') }}" alt="Orphaned children at our center">
            </div>
        </div>
    </section>

    <!-- Impact Stories with Animation -->
    <section class="impact-stories-section">
        <h2 class="section-title animate-on-scroll">Stories of Hope</h2>

        <div class="stories-container">
            <div class="story-card animate-on-scroll">
                <div class="story-image">
                    <img src="{{ asset('images/stories/sarah-story.jpg') }}" alt="Sarah's Story">
                    <div class="story-overlay">
                        <div class="story-duration">Since 2015</div>
                    </div>
                </div>
                <div class="story-content">
                    <h3>Sarah's Journey</h3>
                    <p>"After losing both parents, I thought my education was over. Samson Ddungu Foundation not only put me through school but gave me a family. Today, I'm studying nursing and hope to help other children like me."</p>
                    <div class="story-tags">
                        <span class="tag">Education</span>
                        <span class="tag">Family Support</span>
                    </div>
                </div>
            </div>

            <div class="story-card animate-on-scroll delay-200">
                <div class="story-content">
                    <h3>The Muwanguzi Family</h3>
                    <p>"We opened our home to three orphaned siblings through the foundation's foster program. With the foundation's support, we've been able to provide them with love, education, and a bright future. They're not foster children - they're our children."</p>
                    <div class="story-tags">
                        <span class="tag">Foster Care</span>
                        <span class="tag">Family Integration</span>
                    </div>
                </div>
                <div class="story-image">
                    <img src="{{ asset('images/stories/muwanguzi-family.jpg') }}" alt="Muwanguzi Family">
                    <div class="story-overlay">
                        <div class="story-duration">Foster Family since 2020</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services We Provide -->
    <section class="services-section animate-on-scroll">
        <h2 class="section-title">Our Support Services</h2>

        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3>Safe Housing</h3>
                <p>Providing secure, loving homes through our network of vetted foster families and care centers.</p>
                <ul>
                    <li>Family-style living arrangements</li>
                    <li>24/7 caregiver support</li>
                    <li>Safe, child-friendly environments</li>
                </ul>
            </div>

            <div class="service-card delay-200">
                <div class="service-icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3>Education Support</h3>
                <p>Ensuring every child receives quality education from primary through vocational training.</p>
                <ul>
                    <li>School fees and supplies</li>
                    <li>After-school tutoring</li>
                    <li>Computer literacy training</li>
                </ul>
            </div>

            <div class="service-card delay-400">
                <div class="service-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Emotional Care</h3>
                <p>Providing counseling and psychological support to help children heal and thrive.</p>
                <ul>
                    <li>Individual counseling</li>
                    <li>Support groups</li>
                    <li>Trauma healing programs</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- How to Help Section -->
    <section class="help-section animate-on-scroll">
        <div class="help-content">
            <div class="help-text">
                <h2>You Can Make a Difference</h2>
                <p>Join us in providing hope and future to Uganda's orphaned children. Your support creates lasting change.</p>

                <div class="help-options">
                    <div class="help-option">
                        <i class="fas fa-user-friends"></i>
                        <h4>Become a Foster Family</h4>
                        <p>Open your home to a child in need</p>
                        <a href="{{ url('/get-involved') }}#volunteer" class="help-link">Learn More →</a>
                    </div>

                    <div class="help-option">
                        <i class="fas fa-hands-helping"></i>
                        <h4>Sponsor a Child</h4>
                        <p>Provide education and care for one child</p>
                        <a href="{{ url('/sponsor') }}" class="help-link">Sponsor Now →</a>
                    </div>

                    <div class="help-option">
                        <i class="fas fa-donate"></i>
                        <h4>Make a Donation</h4>
                        <p>Support our orphan care programs</p>
                        <a href="{{ url('/sponsor') }}" class="help-link">Donate →</a>
                    </div>
                </div>
            </div>

            <div class="help-image">
                <img src="{{ asset('images/projects/orphans-hope.jpg') }}" alt="Children with hope">
            </div>
        </div>
    </section>
</div>

<style>
    /* Project Hero Section */
    .project-hero-section {
        height: 80vh;
        min-height: 600px;
        position: relative;
        overflow: hidden;
        margin-top: 90px;
    }

    .hero-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        transform: scale(1.1);
        transition: transform 10s ease;
        z-index: 1;
    }

    .project-hero-section:hover .hero-background {
        transform: scale(1);
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 71, 171, 0.3));
        z-index: 2;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero-content {
        text-align: center;
        color: white;
        max-width: 800px;
        padding: 0 20px;
    }

    .hero-badge {
        background: var(--primary-orange);
        color: white;
        padding: 10px 25px;
        border-radius: 25px;
        display: inline-block;
        font-weight: bold;
        margin-bottom: 20px;
        font-size: 1.1rem;
    }

    .hero-content h1 {
        font-size: 3.5rem;
        margin-bottom: 20px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .hero-content p {
        font-size: 1.3rem;
        opacity: 0.9;
        line-height: 1.6;
    }

    .hero-stats {
        position: absolute;
        bottom: 40px;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        gap: 40px;
        z-index: 3;
        flex-wrap: wrap;
    }

    .hero-stats .stat {
        text-align: center;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        padding: 20px 30px;
        border-radius: 15px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .hero-stats .stat-number {
        font-size: 2.5rem;
        font-weight: bold;
        color: var(--primary-orange);
    }

    .hero-stats .stat-label {
        color: white;
        font-size: 0.9rem;
        margin-top: 5px;
    }

    /* Project Overview */
    .project-overview {
        margin: 100px 0;
    }

    .overview-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    .overview-text p {
        font-size: 1.2rem;
        line-height: 1.8;
        margin-bottom: 25px;
        color: var(--accent-black);
    }

    .overview-image {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .overview-image img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .overview-image:hover img {
        transform: scale(1.05);
    }

    /* Impact Stories */
    .impact-stories-section {
        margin: 100px 0;
    }

    .stories-container {
        display: flex;
        flex-direction: column;
        gap: 60px;
    }

    .story-card {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .story-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    }

    .story-card:nth-child(even) {
        direction: rtl;
    }

    .story-card:nth-child(even) .story-content {
        direction: ltr;
    }

    .story-image {
        position: relative;
        height: 350px;
        overflow: hidden;
    }

    .story-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .story-card:hover .story-image img {
        transform: scale(1.1);
    }

    .story-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
        padding: 20px;
        color: white;
    }

    .story-duration {
        font-size: 0.9rem;
        opacity: 0.9;
    }

    .story-content {
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .story-content h3 {
        color: var(--primary-blue);
        font-size: 1.8rem;
        margin-bottom: 20px;
    }

    .story-content p {
        font-size: 1.1rem;
        line-height: 1.7;
        margin-bottom: 25px;
        font-style: italic;
        color: var(--accent-black);
    }

    .story-tags {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .tag {
        background: var(--primary-orange-faded);
        color: var(--primary-orange);
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 500;
    }

    /* Services Section */
    .services-section {
        margin: 100px 0;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin-top: 60px;
    }

    .service-card {
        background: white;
        padding: 40px 30px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        border-top: 5px solid var(--primary-orange);
        transition: all 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-15px);
        border-top-color: var(--primary-blue);
    }

    .service-icon {
        width: 70px;
        height: 70px;
        background: var(--primary-orange);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        margin-bottom: 25px;
    }

    .service-card h3 {
        color: var(--primary-blue);
        margin-bottom: 15px;
        font-size: 1.5rem;
    }

    .service-card p {
        margin-bottom: 20px;
        line-height: 1.6;
        color: var(--accent-black);
    }

    .service-card ul {
        list-style: none;
        padding-left: 0;
    }

    .service-card li {
        margin-bottom: 10px;
        padding-left: 25px;
        position: relative;
    }

    .service-card li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: var(--primary-orange);
        font-weight: bold;
    }

    /* Help Section */
    .help-section {
        margin: 100px 0;
        background: linear-gradient(135deg, #FFF9F5, #FFF0E6);
        padding: 60px;
        border-radius: 30px;
    }

    .help-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    .help-text h2 {
        color: var(--primary-blue);
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .help-text p {
        font-size: 1.2rem;
        line-height: 1.7;
        margin-bottom: 40px;
        color: var(--accent-black);
    }

    .help-options {
        display: grid;
        gap: 25px;
    }

    .help-option {
        background: white;
        padding: 25px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        border-left: 4px solid transparent;
    }

    .help-option:hover {
        border-left-color: var(--primary-orange);
        transform: translateX(10px);
    }

    .help-option i {
        color: var(--primary-orange);
        font-size: 1.8rem;
        margin-bottom: 15px;
        display: block;
    }

    .help-option h4 {
        color: var(--primary-blue);
        margin-bottom: 10px;
        font-size: 1.3rem;
    }

    .help-option p {
        margin-bottom: 15px;
        font-size: 1rem;
        color: #666;
    }

    .help-link {
        color: var(--primary-orange);
        text-decoration: none;
        font-weight: bold;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: gap 0.3s ease;
    }

    .help-link:hover {
        gap: 15px;
    }

    .help-image {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .help-image img {
        width: 100%;
        height: 500px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .help-image:hover img {
        transform: scale(1.05);
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .hero-content h1 {
            font-size: 2.8rem;
        }

        .overview-content,
        .story-card,
        .help-content {
            grid-template-columns: 1fr;
        }

        .story-card:nth-child(even) {
            direction: ltr;
        }

        .services-grid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }
    }

    @media (max-width: 768px) {
        .project-hero-section {
            height: 70vh;
            min-height: 500px;
        }

        .hero-content h1 {
            font-size: 2.2rem;
        }

        .hero-content p {
            font-size: 1.1rem;
        }

        .hero-stats {
            bottom: 20px;
            gap: 20px;
        }

        .hero-stats .stat {
            padding: 15px 20px;
        }

        .help-section {
            padding: 40px 25px;
        }
    }

    @media (max-width: 480px) {
        .story-content {
            padding: 25px;
        }

        .help-option {
            padding: 20px;
        }

        .services-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Parallax effect for hero background
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const heroBackground = document.querySelector('.hero-background');
            if (heroBackground) {
                heroBackground.style.transform = `scale(${1 + scrolled * 0.0005})`;
            }
        });

        // Animation on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });
    });
</script>
@endsection
