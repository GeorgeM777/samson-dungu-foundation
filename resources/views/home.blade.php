@extends('layouts.app')

@section('title', 'Home - Building Hope for Uganda\'s Most Vulnerable')
@section('content')

@php
    $heroSlides = \App\Models\HeroSlide::where('is_active', true)->orderBy('order')->get();
    $impactStats = \App\Models\ImpactStat::where('is_active', true)->orderBy('order')->get();
    $impactStories = \App\Models\ImpactStory::where('is_active', true)->orderBy('order')->get();
    $mission = \App\Models\SiteSetting::get('mission_text');
    $vision = \App\Models\SiteSetting::get('vision_text');
    $inclusiveStatement = \App\Models\SiteSetting::get('inclusive_statement');
    $urgentTitle = \App\Models\SiteSetting::get('urgent_appeal_title', '🚨 Urgent Appeal: Land for Hope 2024');
    $urgentText = \App\Models\SiteSetting::get('urgent_appeal_text');
    $urgentGoal = \App\Models\SiteSetting::get('urgent_appeal_goal', '£177,778 for 10 acres');
@endphp

<!-- Hero Slideshow Section -->
<div class="hero-slideshow">
    @forelse($heroSlides as $index => $slide)
        <div class="slide {{ $index === 0 ? 'active' : '' }}" style="background-image: url('{{ asset($slide->image) }}');">
            <div class="slide-overlay">
                <div class="slide-text">
                    <h2>{{ $slide->title }}</h2>
                    <p>{{ $slide->subtitle }}</p>
                </div>
            </div>
        </div>
    @empty
        <div class="slide active" style="background-image: url('{{ asset('images/hero/slide1-children.jpg') }}');">
            <div class="slide-overlay">
                <div class="slide-text">
                    <h2>Honoring Legacy, Transforming Lives</h2>
                    <p>Continuing Samson Ddungu's mission of compassion since 2012</p>
                </div>
            </div>
        </div>
    @endforelse

    <!-- Simple Slide Controls -->
    <div class="slide-controls">
        @for($i = 0; $i < max(1, $heroSlides->count()); $i++)
            <div class="slide-dot {{ $i === 0 ? 'active' : '' }}" data-slide="{{ $i }}"></div>
        @endfor
    </div>
</div>



<div class="container">
    <!-- Impact Statistics -->
    <h2 class="section-title animate-on-scroll">Our Impact in Numbers</h2>
    <p class="section-subtitle animate-on-scroll delay-200">Real change measured in lives transformed, communities empowered, and futures secured</p>

    <div class="impact-stats">
        @forelse($impactStats as $index => $stat)
            <div class="stat-card animate-on-scroll delay-{{ ($index + 1) * 200 }}">
                <div class="stat-number">{{ $stat->number }}</div>
                <p>{{ $stat->label }}</p>
            </div>
        @empty
            <div class="stat-card animate-on-scroll delay-200">
                <div class="stat-number">100+</div>
                <p>Orphaned Children Educated & Cared For</p>
            </div>
        @endforelse
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
            <p>{{ $mission }}</p>
            <div class="staggered-img" style="height:200px; margin-top:20px;">
                <img src="{{ asset('images/mission/mission1.jpg') }}" alt="Mission in Action" style="width:100%; height:100%; object-fit:cover; border-radius:10px;">
            </div>
        </div>

        <div class="mission-card animate-on-scroll delay-400">
            <h3><i class="fas fa-eye"></i> Our Vision</h3>
            <p>{{ $vision }}</p>
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
            <p>{{ $inclusiveStatement }}</p>

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
                    <h2>{{ $urgentTitle }}</h2>
                    <p>{{ $urgentText }}</p>
                    <p style="font-size: 1.3rem; margin: 25px 0;">
                        <i class="fas fa-exclamation-circle"></i> <strong>Goal: {{ $urgentGoal }}</strong>
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
