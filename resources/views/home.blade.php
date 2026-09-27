@extends('layouts.app')

@section('title', 'Home - Building Hope for Uganda\'s Most Vulnerable')
@section('content')

@php
    $heroSlides = \App\Models\HeroSlide::where('is_active', true)->orderBy('order')->get();
    $impactStats = \App\Models\ImpactStat::where('is_active', true)->orderBy('order')->get();
    $impactStories = \App\Models\ImpactStory::where('is_active', true)->orderBy('order')->get();
    $videos = \App\Models\Video::where('is_active', true)->orderBy('order')->orderBy('id')->get();
    $founderName = \App\Models\SiteSetting::get('founder_name', 'Samson Ddungu');
    $founderTitle = \App\Models\SiteSetting::get('founder_title', 'Founder');
    $founderTribute = \App\Models\SiteSetting::get('founder_tribute', 'His compassion and vision continue to guide our work, creating hope and dignity for vulnerable communities across Uganda.');
    $founderPortrait = \App\Models\SiteSetting::get('founder_portrait');
    $founderPortraitUrl = $founderPortrait ? 'https://samsondungufoundation.org/' . ltrim($founderPortrait, '/') : null;
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
        <div class="slide {{ $index === 0 ? 'active' : '' }}" style="background-image: url('https://samsondungufoundation.org/{{ ltrim($slide->image, '/') }}');">
            <div class="slide-overlay">
                <div class="slide-text">
                    <h2>{{ $slide->title }}</h2>
                    <p>{{ $slide->subtitle }}</p>
                </div>
            </div>
        </div>
    @empty
        <div class="slide active" style="background-image: url('https://samsondungufoundation.org/images/hero/slide1-children.jpg');">
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

<section class="founder-tribute animate-on-scroll" aria-labelledby="founder-title">
    <div class="founder-tribute-inner">
        <div class="founder-media">
            @if($founderPortrait)
                @if(strtolower(pathinfo($founderPortrait, PATHINFO_EXTENSION)) === 'pdf')
                    <div class="founder-pdf-frame">
                        <canvas class="founder-pdf-canvas" data-pdf-url="{{ $founderPortraitUrl }}" aria-label="Founder tribute document for {{ $founderName }}" oncontextmenu="return false"></canvas>
                        <p class="founder-pdf-error" hidden>The founder tribute preview is temporarily unavailable.</p>
                    </div>
                @else
                    <div class="founder-photo"><img src="{{ $founderPortraitUrl }}" alt="{{ $founderName }}" draggable="false" oncontextmenu="return false"></div>
                @endif
            @else
                <div class="founder-photo"><span aria-hidden="true"><i class="fas fa-user-tie"></i></span></div>
            @endif
        </div>
        <div class="founder-copy">
            <p class="founder-eyebrow">A Vision That Lives On</p>
            <h2 id="founder-title">{{ $founderName }}</h2>
            <p class="founder-role">{{ $founderTitle }}</p>
            <p class="founder-message">{{ $founderTribute }}</p>
            <span class="founder-rule" aria-hidden="true"></span>
            <p class="founder-signoff">His legacy is carried forward in every life touched.</p>
        </div>
    </div>
</section>

<div class="container">
    <!-- Impact Statistics -->
    <h2 class="section-title animate-on-scroll" id="impact">Our Impact in Numbers</h2>
    <p class="section-subtitle animate-on-scroll delay-200">Real change measured in lives transformed, communities empowered, and futures secured</p>

    <div class="impact-stats">
        @forelse($impactStats as $index => $stat)
            @php
                $direction = 'slide-from-down';
                if ($index === 0) $direction = 'slide-from-left';
                elseif ($index == (($impactStats->count() ?? 4) - 1)) $direction = 'slide-from-right';
            @endphp
            <div class="stat-card animate-on-scroll delay-{{ ($index + 1) * 200 }} {{ $direction }}">
                <div class="stat-number">{{ $stat->number }}</div>
                <p>{{ $stat->label }}</p>
            </div>
        @empty
            <div class="stat-card animate-on-scroll delay-200 slide-from-left">
                <div class="stat-number">100+</div>
                <p>Orphaned Children Educated & Cared For</p>
            </div>
        @endforelse
    </div>

    <!-- Image Gallery Section 1: Our Work in Action -->
    <h2 class="section-title animate-on-scroll" id="work-in-action">Our Work in Action</h2>
    <p class="section-subtitle animate-on-scroll delay-200">Capturing moments of transformation, education, and community empowerment</p>

    <div class="staggered-images">
        <div class="staggered-img animate-on-scroll slide-from-left">
            <img src="https://samsondungufoundation.org/images/gallery/education-class.jpg" alt="Classroom Learning" style="width:100%; height:100%; object-fit:cover;">
        </div>
        <div class="staggered-img animate-on-scroll delay-200 slide-from-down">
            <img src="https://samsondungufoundation.org/images/gallery/medical-outreach.jpg" alt="Medical Outreach" style="width:100%; height:100%; object-fit:cover;">
        </div>
        <div class="staggered-img animate-on-scroll delay-400 slide-from-right">
            <img src="https://samsondungufoundation.org/images/gallery/vocational-training.jpg" alt="Vocational Training" style="width:100%; height:100%; object-fit:cover;">
        </div>
    </div>

    @if($videos->isNotEmpty())
        <section class="video-library" aria-labelledby="video-library-title">
            <h2 class="section-title animate-on-scroll" id="video-library-title">Stories in Motion</h2>
            <p class="section-subtitle animate-on-scroll delay-200">See the people, programs, and communities at the heart of our work</p>
            <div class="video-grid">
                @foreach($videos as $video)
                    <details class="video-card animate-on-scroll">
                        <summary class="video-summary">
                            <span class="video-preview">
                                @if($video->preview_image)
                                    <img src="{{ $video->preview_image }}" alt="">
                                @else
                                    <span class="video-preview-placeholder"><i class="fas fa-film" aria-hidden="true"></i></span>
                                @endif
                                <span class="video-play" aria-hidden="true"><i class="fas fa-play"></i></span>
                            </span>
                            <span class="video-card-copy">
                                <span class="video-card-title">{{ $video->title }}</span>
                                <span class="video-expand-label">Tap to play</span>
                            </span>
                        </summary>
                        <div class="video-frame">
                            @if($video->embed_url)
                                <iframe src="{{ $video->embed_url }}" title="{{ $video->title }}" loading="lazy" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                <a class="video-external-link" href="{{ $video->url }}" target="_blank" rel="noopener noreferrer">Open video on YouTube or Vimeo <i class="fas fa-external-link-alt" aria-hidden="true"></i></a>
                            @elseif($video->is_direct_file)
                                <video controls preload="metadata" @if($video->thumbnail) poster="{{ asset(ltrim($video->thumbnail, '/')) }}" @endif>
                                    <source src="{{ $video->url }}">
                                    Your browser does not support embedded video.
                                </video>
                            @else
                                <a class="video-link-fallback" href="{{ $video->url }}" target="_blank" rel="noopener noreferrer">
                                    <i class="fas fa-external-link-alt" aria-hidden="true"></i>
                                    <span>Open video in a new tab</span>
                                </a>
                            @endif
                        </div>
                        @if($video->description)
                            <p class="video-description">{{ $video->description }}</p>
                        @endif
                    </details>
                @endforeach
            </div>
        </section>
    @endif

    <!-- Educational Partnerships Section -->
<div class="school-partnerships animate-on-scroll">
        <h2 class="section-title" id="partnerships">Educational Partnerships Creating Hope</h2>
    <p class="section-subtitle delay-200">Collaborating with local schools to provide quality education for orphaned and less privileged children</p>

    <div class="partnership-cards">
        <!-- Bushenyi Preparatory Primary School -->
        <div class="partnership-card animate-on-scroll slide-from-left">
            <div class="school-badge" style="background-color: #0047AB;">
                <i class="fas fa-school"></i>
                <span>Primary Education Partner</span>
            </div>
            <div class="school-content">
                <h3>Bushenyi Preparatory Primary School</h3>
                <p class="school-location"><i class="fas fa-map-marker-alt"></i> Bushenyi, Uganda</p>

                <div class="school-images">
                    <div class="main-school-image">
                        <img src="https://samsondungufoundation.org/images/schools/bushenyi-building.jpg" alt="Bushenyi Preparatory School Building">
                    </div>
                    <div class="school-gallery">
                        <div class="gallery-item">
                            <img src="https://samsondungufoundation.org/images/schools/bushenyi-students.jpg" alt="Bushenyi Students Learning">
                        </div>
                        <div class="gallery-item">
                            <img src="https://samsondungufoundation.org/images/schools/bushenyi-playground.jpg" alt="Children Playing at Bushenyi School">
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
        <div class="partnership-card animate-on-scroll delay-200 slide-from-right">
            <div class="school-badge" style="background-color: #FF6B35;">
                <i class="fas fa-graduation-cap"></i>
                <span>Junior Education Partner</span>
            </div>
            <div class="school-content">
                <h3>Prime Junior Primary School Ishaka</h3>
                <p class="school-location"><i class="fas fa-map-marker-alt"></i> Ishaka, Bushenyi District</p>

                <div class="school-images">
                    <div class="main-school-image">
                        <img src="https://samsondungufoundation.org/images/schools/prime-building.jpg" alt="Prime Junior Primary School Building">
                    </div>
                    <div class="school-gallery">
                        <div class="gallery-item">
                            <img src="https://samsondungufoundation.org/images/schools/prime-classroom.jpg" alt="Prime School Classroom Activities">
                        </div>
                        <div class="gallery-item">
                            <img src="https://samsondungufoundation.org/images/schools/prime-activities.jpg" alt="Students in Activities at Prime School">
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
    <h2 class="section-title animate-on-scroll" id="mission-vision">Our Guiding Principles</h2>
    <p class="section-subtitle animate-on-scroll delay-200">Driven by compassion, guided by vision, committed to sustainable change</p>

    <div class="mission-cards">
        <div class="mission-card animate-on-scroll">
            <h3><i class="fas fa-heart"></i> Our Mission</h3>
            <p>{{ $mission }}</p>
            <div class="staggered-img" style="height:200px; margin-top:20px;">
                <img src="https://samsondungufoundation.org/images/mission/mission1.jpg" alt="Mission in Action" style="width:100%; height:100%; object-fit:cover; border-radius:10px;">
            </div>
        </div>

        <div class="mission-card animate-on-scroll delay-400">
            <h3><i class="fas fa-eye"></i> Our Vision</h3>
            <p>{{ $vision }}</p>
            <div class="staggered-img" style="height:200px; margin-top:20px;">
                <img src="https://samsondungufoundation.org/images/mission/vision1.jpg" alt="Vision for Future" style="width:100%; height:100%; object-fit:cover; border-radius:10px;">
            </div>
        </div>
    </div>

    <!-- Inclusive Statement Section -->
    <div class="inclusive-statement animate-on-scroll">
        <div class="inclusive-content">
            <h2 id="about">About Samson Ddungu Foundation</h2>
            <p>{{ $inclusiveStatement }}</p>

            <div class="staggered-images" style="margin-top:40px;">
                <div class="staggered-img" style="height:200px;">
                    <img src="https://samsondungufoundation.org/images/inclusive/community2.jpg" alt="Inclusive Community" style="width:100%; height:100%; object-fit:cover;">
                </div>
                <div class="staggered-img" style="height:200px;">
                    <img src="https://samsondungufoundation.org/images/inclusive/collaboration.jpg" alt="Collaboration" style="width:100%; height:100%; object-fit:cover;">
                </div>
                <div class="staggered-img" style="height:200px;">
                    <img src="https://samsondungufoundation.org/images/inclusive/diversity.jpg" alt="Diversity" style="width:100%; height:100%; object-fit:cover;">
                </div>
            </div>
        </div>
    </div>

    <!-- Urgent Appeal Section -->
    <div class="urgent-appeal animate-on-scroll">
        <div class="container">
            <div class="appeal-content">
                <div class="appeal-text animate-on-scroll">
                    <h2 id="urgent-appeal">{{ $urgentTitle }}</h2>
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
                        <img src="https://samsondungufoundation.org/images/project/land-project.jpg" alt="Land Project" style="width:100%; height:100%; object-fit:cover; border-radius:10px;">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div style="text-align: center; margin: 100px 0;">
        <h2 class="section-title animate-on-scroll" id="cta">Ready to Make a Difference?</h2>
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
    .founder-tribute {
        background: #f4f7f4;
        border-top: 1px solid #e1e9e1;
        border-bottom: 1px solid #e1e9e1;
        margin: 0 0 64px;
        padding: 52px 24px;
    }

    .founder-tribute-inner {
        max-width: 1120px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: minmax(260px, 360px) 1fr;
        gap: clamp(32px, 6vw, 80px);
        align-items: center;
    }

    .founder-media { width: 100%; max-width: 360px; }

    .founder-photo {
        aspect-ratio: 4 / 5;
        overflow: hidden;
        background: #e4ece6;
        border-bottom: 6px solid var(--primary-orange);
    }

    .founder-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center 25%;
        user-select: none;
        -webkit-user-drag: none;
    }

    .founder-photo > span {
        width: 100%;
        height: 100%;
        display: grid;
        place-items: center;
        color: #567466;
        font-size: 4rem;
    }

    .founder-pdf-frame { width: 100%; overflow: hidden; border-bottom: 6px solid var(--primary-orange); background: #fff; }
    .founder-pdf-canvas { display: block; width: 100%; height: auto; }
    .founder-pdf-error { padding: 20px; color: #59665e; font-size: .9rem; }

    .founder-copy { max-width: 670px; }
    .founder-eyebrow { color: var(--primary-orange); font-size: .78rem; font-weight: 700; text-transform: uppercase; margin: 0 0 10px; }
    .founder-copy h2 { color: var(--accent-black); font-size: 2.5rem; margin: 0; }
    .founder-role { color: #537060; font-weight: 600; margin: 8px 0 20px; }
    .founder-message { color: #39463e; font-size: 1.08rem; line-height: 1.8; margin: 0; }
    .founder-rule { display: block; width: 54px; height: 3px; background: var(--primary-orange); margin: 24px 0 14px; }
    .founder-signoff { color: #647168; font-size: .92rem; font-style: italic; margin: 0; }

    .video-library { margin: 72px 0; }
    .video-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 300px), 1fr)); align-items: start; gap: 20px; }
    .video-card { overflow: hidden; background: #fff; border: 1px solid #e3e8e3; border-radius: 6px; box-shadow: 0 7px 20px rgba(22, 43, 30, .09); transition: box-shadow .2s ease, transform .2s ease; }
    .video-card:hover { transform: translateY(-3px); box-shadow: 0 12px 26px rgba(22, 43, 30, .14); }
    .video-summary { display: block; cursor: pointer; list-style: none; }
    .video-summary::-webkit-details-marker { display: none; }
    .video-preview { display: block; width: 100%; aspect-ratio: 16 / 9; position: relative; overflow: hidden; background: #254438; }
    .video-preview > img { width: 100%; height: 100%; object-fit: cover; }
    .video-preview-placeholder { width: 100%; height: 100%; display: grid; place-items: center; color: #b9d0bf; font-size: 1.5rem; }
    .video-play { position: absolute; inset: 0; display: grid; place-items: center; color: #fff; text-shadow: 0 1px 4px #111; }
    .video-play i { width: 58px; height: 58px; display: grid; place-items: center; padding-left: 3px; border: 2px solid rgba(255,255,255,.9); border-radius: 50%; background: var(--primary-orange); font-size: 1.25rem; box-shadow: 0 3px 14px rgba(0,0,0,.3); transition: transform .2s ease; }
    .video-summary:hover .video-play i, .video-summary:focus-visible .video-play i { transform: scale(1.08); }
    .video-card-copy { min-width: 0; display: grid; gap: 5px; padding: 14px 16px 16px; }
    .video-card-title { color: #263a2e; font-size: 1.08rem; font-weight: 700; line-height: 1.35; }
    .video-expand-label { color: #647168; font-size: .82rem; }
    .video-card[open] .video-expand-label { color: var(--primary-orange); }
    .video-frame { aspect-ratio: 16 / 9; background: #14251d; }
    .video-frame iframe, .video-frame video { display: block; width: 100%; height: 100%; border: 0; object-fit: cover; }
    .video-frame:has(iframe) { height: auto; }
    .video-frame:has(iframe) iframe { aspect-ratio: 16 / 9; height: auto; }
    .video-external-link { display: flex; align-items: center; justify-content: flex-end; gap: 7px; padding: 8px 12px; color: #315e46; background: #fff; font-size: .82rem; text-decoration: none; }
    .video-external-link:hover { text-decoration: underline; }
    .video-link-fallback { width: 100%; height: 100%; display: grid; place-content: center; justify-items: center; gap: 8px; color: #fff; text-decoration: none; background: #254438; }
    .video-link-fallback i { font-size: 2.5rem; color: #f49b58; }
    .video-description { color: #657168; font-size: .93rem; line-height: 1.6; margin: 0; padding: 0 16px 16px; }

    @media (max-width: 680px) {
        .founder-tribute { padding: 36px 20px; margin-bottom: 44px; }
        .founder-tribute-inner { grid-template-columns: 1fr; gap: 24px; }
        .founder-media { max-width: 360px; }
        .founder-copy h2 { font-size: 1.85rem; }
        .video-library { margin: 52px 0; }
    }

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

    .animate-on-scroll.slide-from-left {
        transform: translateX(-120px);
        opacity: 0;
    }
    .animate-on-scroll.slide-from-left.animated {
        transform: translateX(0);
        opacity: 1;
    }

    .animate-on-scroll.slide-from-down {
        transform: translateY(120px);
        opacity: 0;
    }
    .animate-on-scroll.slide-from-down.animated {
        transform: translateY(0);
        opacity: 1;
    }

    .animate-on-scroll.slide-from-right {
        transform: translateX(120px);
        opacity: 0;
    }
    .animate-on-scroll.slide-from-right.animated {
        transform: translateX(0);
        opacity: 1;
    }
</style>

@if($founderPortrait && strtolower(pathinfo($founderPortrait, PATHINFO_EXTENSION)) === 'pdf')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', async function () {
            const canvas = document.querySelector('.founder-pdf-canvas');
            if (!canvas || !window.pdfjsLib) return;

            window.pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.worker.min.js';

            try {
                const pdf = await window.pdfjsLib.getDocument(canvas.dataset.pdfUrl).promise;
                const page = await pdf.getPage(1);
                const container = canvas.parentElement;

                const renderPage = async () => {
                    const baseViewport = page.getViewport({ scale: 1 });
                    const viewport = page.getViewport({ scale: container.clientWidth / baseViewport.width });
                    const outputScale = window.devicePixelRatio || 1;
                    const context = canvas.getContext('2d');

                    canvas.width = Math.floor(viewport.width * outputScale);
                    canvas.height = Math.floor(viewport.height * outputScale);
                    context.setTransform(outputScale, 0, 0, outputScale, 0, 0);
                    await page.render({ canvasContext: context, viewport }).promise;
                };

                await renderPage();
                new ResizeObserver(renderPage).observe(container);
            } catch (error) {
                canvas.hidden = true;
                canvas.nextElementSibling.hidden = false;
            }
        });
    </script>
@endif
@endsection