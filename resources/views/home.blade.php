@extends('layouts.app')

@section('title', 'Home - Building Hope for Uganda\'s Most Vulnerable')
@section('content')

<!-- Hero Slideshow Section -->
<div class="hero-slideshow">
    <!-- Slide 1 -->
    <div class="slide active" style="background-image: url('{{ asset('images/hero/slide1-children.jpg') }}');">
        <div class="slide-overlay">
            <div class="slide-text">
                <h2>Honoring Legacy, Transforming Lives</h2>
                <p>Continuing Samson Ddungu's mission of compassion since 2012</p>
            </div>
        </div>
    </div>

    <!-- Slide 2 -->
    <div class="slide" style="background-image: url('{{ asset('images/hero/slide2-community.jpg') }}');">
        <div class="slide-overlay">
            <div class="slide-text">
                <h2>Empowering Vulnerable Communities</h2>
                <p>Education, healthcare, and sustainable development for all</p>
            </div>
        </div>
    </div>

    <!-- Slide 3 -->
    <div class="slide" style="background-image: url('{{ asset('images/hero/slide3-education.jpg') }}');">
        <div class="slide-overlay">
            <div class="slide-text">
                <h2>Building Brighter Futures</h2>
                <p>From orphan support to vocational training - creating lasting change</p>
            </div>
        </div>
    </div>


     <!-- Slide 4 -->
    <div class="slide" style="background-image: url('{{ asset('images/hero/slide4-community.jpg') }}');">
        <div class="slide-overlay">
            <div class="slide-text">
                <h2>Empowering Vulnerable Communities</h2>
                <p>Education, healthcare, and sustainable development for all</p>
            </div>
        </div>
    </div>

    <!-- Simple Slide Controls -->
    <div class="slide-controls">
        <div class="slide-dot active" data-slide="0"></div>
        <div class="slide-dot" data-slide="1"></div>
        <div class="slide-dot" data-slide="2"></div>
    </div>
</div>

<div class="container">
    <!-- Impact Statistics -->
    <h2 class="section-title animate-on-scroll">Our Impact in Numbers</h2>
    <p class="section-subtitle animate-on-scroll delay-200">Real change measured in lives transformed, communities empowered, and futures secured</p>

    <div class="impact-stats">
        <div class="stat-card animate-on-scroll delay-200">
            <div class="stat-number">100+</div>
            <p>Orphaned Children Educated & Cared For</p>
        </div>

        <div class="stat-card animate-on-scroll delay-400">
            <div class="stat-number">70</div>
            <p>Widows Empowered with Skills Training</p>
        </div>

        <div class="stat-card animate-on-scroll delay-600">
            <div class="stat-number">20+</div>
            <p>Vulnerable Families Supported</p>
        </div>

        <div class="stat-card animate-on-scroll delay-800">
            <div class="stat-number">12</div>
            <p>Years of Dedicated Service</p>
        </div>
    </div>

    <!-- Image Gallery Section 1: Our Work in Action -->
    <h2 class="section-title animate-on-scroll">Our Work in Action</h2>
    <p class="section-subtitle animate-on-scroll delay-200">Capturing moments of transformation, education, and community empowerment</p>

    <div class="staggered-images">
        <div class="staggered-img animate-on-scroll">
            <img src="{{ asset('images/gallery/education-class.jpg') }}" alt="Classroom Learning" style="width:100%; height:100%; object-fit:cover;">
        </div>
        <div class="staggered-img animate-on-scroll delay-200">
            <img src="{{ asset('images/gallery/medical-outreach.jpg') }}" alt="Medical Outreach" style="width:100%; height:100%; object-fit:cover;">
        </div>
        <div class="staggered-img animate-on-scroll delay-400">
            <img src="{{ asset('images/gallery/vocational-training.jpg') }}" alt="Vocational Training" style="width:100%; height:100%; object-fit:cover;">
        </div>
    </div>



    <!-- Educational Partnerships Section -->
<div class="school-partnerships animate-on-scroll">
    <h2 class="section-title">Educational Partnerships Creating Hope</h2>
    <p class="section-subtitle delay-200">Collaborating with local schools to provide quality education for orphaned and less privileged children</p>

    <div class="partnership-cards">
        <!-- Bushenyi Preparatory Primary School -->
        <div class="partnership-card animate-on-scroll">
            <div class="school-badge" style="background-color: #0047AB;">
                <i class="fas fa-school"></i>
                <span>Primary Education Partner</span>
            </div>
            <div class="school-content">
                <h3>Bushenyi Preparatory Primary School</h3>
                <p class="school-location"><i class="fas fa-map-marker-alt"></i> Bushenyi, Uganda</p>

                <div class="school-images">
                    <div class="main-school-image">
                        <img src="{{ asset('images/schools/bushenyi-building.jpg') }}" alt="Bushenyi Preparatory School Building">
                    </div>
                    <div class="school-gallery">
                        <div class="gallery-item">
                            <img src="{{ asset('images/schools/bushenyi-students.jpg') }}" alt="Bushenyi Students Learning">
                        </div>
                        <div class="gallery-item">
                            <img src="{{ asset('images/schools/bushenyi-playground.jpg') }}" alt="Children Playing at Bushenyi School">
                        </div>
                    </div>
                </div>

                <div class="school-impact">
                    <h4>Impact Created:</h4>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Providing free education for 50+ orphaned children</li>
                        <li><i class="fas fa-check-circle"></i> School supplies and uniform distribution</li>
                        <li><i class="fas fa-check-circle"></i> Daily nutritious meals program</li>
                        <li><i class="fas fa-check-circle"></i> Safe learning environment with trained teachers</li>
                    </ul>
                </div>

                <div class="student-testimonial">
                    <p>"Thanks to this partnership, I can go to school like other children and dream of becoming a doctor."</p>
                    <span class="student-name">- Sarah, Grade 5 Student</span>
                </div>
            </div>
        </div>

        <!-- Prime Junior Primary School -->
        <div class="partnership-card animate-on-scroll delay-200">
            <div class="school-badge" style="background-color: #FF6B35;">
                <i class="fas fa-graduation-cap"></i>
                <span>Junior Education Partner</span>
            </div>
            <div class="school-content">
                <h3>Prime Junior Primary School Ishaka</h3>
                <p class="school-location"><i class="fas fa-map-marker-alt"></i> Ishaka, Bushenyi District</p>

                <div class="school-images">
                    <div class="main-school-image">
                        <img src="{{ asset('images/schools/prime-building.jpg') }}" alt="Prime Junior Primary School Building">
                    </div>
                    <div class="school-gallery">
                        <div class="gallery-item">
                            <img src="{{ asset('images/schools/prime-classroom.jpg') }}" alt="Prime School Classroom Activities">
                        </div>
                        <div class="gallery-item">
                            <img src="{{ asset('images/schools/prime-activities.jpg') }}" alt="Students in Activities at Prime School">
                        </div>
                    </div>
                </div>

                <div class="school-impact">
                    <h4>Impact Created:</h4>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Comprehensive early childhood education</li>
                        <li><i class="fas fa-check-circle"></i> Psychosocial support for traumatized children</li>
                        <li><i class="fas fa-check-circle"></i> After-school tutoring and mentorship</li>
                        <li><i class="fas fa-check-circle"></i> Parental engagement programs</li>
                    </ul>
                </div>

                <div class="student-testimonial">
                    <p>"My children have found hope and education at Prime School. They're not just learning, they're thriving."</p>
                    <span class="student-name">- Grace, Mother of 3 students</span>
                </div>
            </div>
        </div>
    </div>

    <div class="partnership-impact animate-on-scroll delay-400">
        <div class="impact-stats">
            <div class="impact-stat">
                <div class="stat-number">100+</div>
                <div class="stat-label">Children Enrolled</div>
            </div>
            <div class="impact-stat">
                <div class="stat-number">2</div>
                <div class="stat-label">Partner Schools</div>
            </div>
            <div class="impact-stat">
                <div class="stat-number">15+</div>
                <div class="stat-label">Dedicated Teachers</div>
            </div>
            <div class="impact-stat">
                <div class="stat-number">100%</div>
                <div class="stat-label">School Fee Coverage</div>
            </div>
        </div>

        <a href="/what-we-do#education" class="cta-button" style="margin-top: 30px;">
            <i class="fas fa-book-open"></i> Learn More About Our Education Programs
        </a>
    </div>
</div>


    <!-- Mission & Vision -->
    <h2 class="section-title animate-on-scroll">Our Guiding Principles</h2>
    <p class="section-subtitle animate-on-scroll delay-200">Driven by compassion, guided by vision, committed to sustainable change</p>

    <div class="mission-cards">
        <div class="mission-card animate-on-scroll">
            <h3><i class="fas fa-heart"></i> Our Mission</h3>
            <p>Uplifting poor Ugandans through medical outreach, elderly care, and support for orphans and widows — restoring dignity, health, and hope.</p>
            <div class="staggered-img" style="height:200px; margin-top:20px;">
                <img src="{{ asset('images/mission/mission1.jpg') }}" alt="Mission in Action" style="width:100%; height:100%; object-fit:cover; border-radius:10px;">
            </div>
        </div>

        <div class="mission-card animate-on-scroll delay-400">
            <h3><i class="fas fa-eye"></i> Our Vision</h3>
            <p>A Uganda where no poor family is denied medical care, and every elderly person, orphan, and widow lives with dignity and hope.</p>
            <div class="staggered-img" style="height:200px; margin-top:20px;">
                <img src="{{ asset('images/mission/vision1.jpg') }}" alt="Vision for Future" style="width:100%; height:100%; object-fit:cover; border-radius:10px;">
            </div>
        </div>
    </div>

    <!-- Image Gallery Section 2: Community Impact -->
    <!-- <h2 class="section-title animate-on-scroll">Community Impact</h2>
    <p class="section-subtitle animate-on-scroll delay-200">Transforming communities through holistic development programs</p>

    <div class="image-gallery">
        <div class="gallery-item animate-on-scroll">
            <img src="{{ asset('images/impact/community1.jpg') }}" alt="Community Gathering">
            <div class="gallery-caption">
                <h4>Community Meetings</h4>
                <p>Engaging with local leaders and families</p>
            </div>
        </div>
        <div class="gallery-item animate-on-scroll delay-200">
            <img src="{{ asset('images/impact/agriculture.jpg') }}" alt="Agriculture Project">
            <div class="gallery-caption">
                <h4>Agricultural Training</h4>
                <p>Teaching sustainable farming techniques</p>
            </div>
        </div>
        <div class="gallery-item animate-on-scroll delay-400">
            <img src="{{ asset('images/impact/water-project.jpg') }}" alt="Water Project">
            <div class="gallery-caption">
                <h4>Water Access Projects</h4>
                <p>Building clean water sources for communities</p>
            </div>
        </div>
    </div> -->

    <!-- Inclusive Statement Section -->
    <div class="inclusive-statement animate-on-scroll">
        <div class="inclusive-content">
            <h2>About Samson Ddungu Foundation</h2>
            <p>Samson Ddungu Foundation is a non-denominational, non-political organization working with communities across Uganda. We collaborate with all organizations, religions (Muslims, Christians, Protestants, Catholics, and others), and political entities, focusing on supporting vulnerable groups without discrimination. Our mission is to uplift poor families, orphans, marginalized children, and the elderly through collective efforts.</p>

            <div class="staggered-images" style="margin-top:40px;">
                <div class="staggered-img" style="height:200px;">
                    <img src="{{ asset('images/inclusive/community2.jpg') }}" alt="Inclusive Community" style="width:100%; height:100%; object-fit:cover;">
                </div>
                <div class="staggered-img" style="height:200px;">
                    <img src="{{ asset('images/inclusive/collaboration.jpg') }}" alt="Collaboration" style="width:100%; height:100%; object-fit:cover;">
                </div>
                <div class="staggered-img" style="height:200px;">
                    <img src="{{ asset('images/inclusive/diversity.jpg') }}" alt="Diversity" style="width:100%; height:100%; object-fit:cover;">
                </div>
            </div>
        </div>
    </div>

    <!-- Urgent Appeal Section -->
    <div class="urgent-appeal animate-on-scroll">
        <div class="container">
            <div class="appeal-content">
                <div class="appeal-text animate-on-scroll">
                    <h2>🚨 Urgent Appeal: Land for Hope 2024</h2>
                    <p>We urgently need to purchase 10 acres of land in Wakiso District to expand our services. With rising cases of orphaned children due to HIV/AIDS and poverty, our current rented facilities are overcrowded and inadequate.</p>
                    <p style="font-size: 1.3rem; margin: 25px 0;">
                        <i class="fas fa-exclamation-circle"></i> <strong>Goal: £177,778 for 10 acres</strong>
                    </p>
                    <div style="margin-top: 30px;">
                        <a href="/special-projects" class="cta-button" style="background-color: white; color: var(--primary-orange); padding: 15px 35px; margin-right: 15px;">
                            <i class="fas fa-info-circle"></i> Learn More
                        </a>
                        <a href="/sponsor" class="cta-button" style="background-color: var(--primary-blue); color: white; padding: 15px 35px;">
                            <i class="fas fa-donate"></i> Donate Now
                        </a>
                    </div>
                </div>

                <div class="goal-progress animate-on-scroll delay-400">
                    <div class="staggered-img" style="height:300px;">
                        <img src="{{ asset('images/project/land-project.jpg') }}" alt="Land Project" style="width:100%; height:100%; object-fit:cover; border-radius:10px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Final Image Gallery: Success Stories -->
    <!-- <h2 class="section-title animate-on-scroll">Success Stories</h2>
    <p class="section-subtitle animate-on-scroll delay-200">Real people, real transformations, real hope</p>

    <div class="image-gallery">
        <div class="gallery-item animate-on-scroll">
            <img src="{{ asset('images/success/graduate.jpg') }}" alt="Graduation Success">
            <div class="gallery-caption">
                <h4>Education Success</h4>
                <p>Former orphans now graduating from school</p>
            </div>
        </div>
        <div class="gallery-item animate-on-scroll delay-200">
            <img src="{{ asset('images/success/business.jpg') }}" alt="Small Business">
            <div class="gallery-caption">
                <h4>Entrepreneurial Success</h4>
                <p>Widows running successful small businesses</p>
            </div>
        </div>
        <div class="gallery-item animate-on-scroll delay-400">
            <img src="{{ asset('images/success/family.jpg') }}" alt="Family Transformation">
            <div class="gallery-caption">
                <h4>Family Transformation</h4>
                <p>Whole families lifted out of poverty</p>
            </div>
        </div>
    </div> -->

    <!-- Call to Action -->
    <div style="text-align: center; margin: 100px 0;">
        <h2 class="section-title animate-on-scroll">Ready to Make a Difference?</h2>
        <p class="section-subtitle animate-on-scroll delay-200">Join us in creating lasting change for Uganda's most vulnerable communities</p>

        <div style="display: flex; gap: 20px; justify-content: center; margin-top: 50px; flex-wrap: wrap;">
            <a href="/sponsor" class="cta-button animate-on-scroll" style="padding: 18px 45px; font-size: 1.1rem;">
                <i class="fas fa-hand-holding-heart"></i> Donate Today
            </a>
            <a href="/get-involved" class="cta-button animate-on-scroll delay-200" style="padding: 18px 45px; font-size: 1.1rem; background-color: var(--primary-blue); color: white;">
                <i class="fas fa-users"></i> Get Involved
            </a>
            <a href="/contact" class="cta-button animate-on-scroll delay-400" style="padding: 18px 45px; font-size: 1.1rem; background-color: var(--accent-black); color: white;">
                <i class="fas fa-envelope"></i> Contact Us
            </a>
        </div>
    </div>
</div>

<style>
    /* Additional styles for home page */
    .cta-button {
        display: inline-block;
        background-color: var(--primary-orange);
        color: white;
        padding: 15px 40px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        box-shadow: 0 5px 15px rgba(255, 107, 53, 0.3);
    }

    .cta-button:hover {
        transform: translateY(-5px) rotate(3deg);
        box-shadow: 0 15px 30px rgba(255, 107, 53, 0.4);
    }

    .goal-progress {
        background: rgba(255, 255, 255, 0.15);
        padding: 20px;
        border-radius: 15px;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.2);
    }

    @keyframes zoomForward {
        from {
            transform: scale(1);
        }
        to {
            transform: scale(1.12);
        }
    }

    .hero-slideshow .slide::before {
        content: '';
        position: absolute;
        top: -10px;
        left: -10px;
        right: -10px;
        bottom: -10px;
        background: inherit;
        background-size: cover;
        background-position: center;
        z-index: 0;
        animation: zoomForward 24s ease-in-out infinite alternate;
    }

    .hero-slideshow .slide:hover::before {
        animation-duration: 10s;
    }

    .staggered-img img,
    .main-school-image img,
    .gallery-item img {
        animation: zoomForward 16s ease-in-out infinite alternate;
    }

    .staggered-img:hover img,
    .main-school-image:hover img,
    .gallery-item:hover img {
        animation-duration: 6s;
    }
</style>
@endsection
"<!-- Test auto-deployment -->" 
