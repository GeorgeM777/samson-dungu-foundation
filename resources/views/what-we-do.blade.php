@extends('layouts.app')

@section('title', 'What We Do - Our Programs & Initiatives')
@section('content')

@php
    $heroTitle = \App\Models\SiteSetting::get('what_we_do_hero_title', 'Our Comprehensive Programs');
    $heroSubtitle = \App\Models\SiteSetting::get('what_we_do_hero_subtitle', "Holistic support for Uganda's most vulnerable communities");
    $approachQuote = \App\Models\SiteSetting::get('approach_quote', "There's a solution to solve a problem. At Samson Ddungu Foundation, we are that solution for Uganda's most vulnerable.");
    $programs = \App\Models\Program::where('is_active', true)->orderBy('order')->get();
    $stories = \App\Models\ImpactStory::where('is_active', true)->orderBy('order')->take(3)->get();
@endphp

<!-- Hero Section -->
<div class="hero-slideshow" style="height: 60vh; min-height: 500px;">
    <div class="slide active" style="background-image: url('{{ asset('images/programs/hero-programs.jpg') }}');">
        <div class="slide-overlay">
            <div class="slide-text">
                <h2>{{ $heroTitle }}</h2>
                <p>{{ $heroSubtitle }}</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Programs Overview -->
    <h2 class="section-title animate-on-scroll">Core Initiatives</h2>
    <p class="section-subtitle animate-on-scroll delay-200">Integrated programs addressing the root causes of poverty and vulnerability</p>

    <div class="programs-grid animate-on-scroll">
        @forelse($programs as $index => $program)
            <div class="program-card animate-on-scroll {{ $index > 0 ? 'delay-' . ($index * 200) : '' }}" @if($program->image) style="background-image: url('{{ asset($program->image) }}');" @endif>
                <div class="program-content">
                    <h3>@if($program->icon)<i class="{{ $program->icon }}"></i>@endif {{ $program->title }}</h3>
                    <p>{{ $program->short_description }}</p>
                    @if(is_array($program->bullets) && count($program->bullets) > 0)
                        <ul>
                            @foreach($program->bullets as $bullet)
                                <li>{{ $bullet }}</li>
                            @endforeach
                        </ul>
                    @endif
                    @if(is_array($program->stats) && count($program->stats) > 0)
                        <div class="program-stats">
                            @foreach($program->stats as $stat)
                                @php
                                    $parts = explode('|', $stat);
                                    $num = trim($parts[0] ?? '');
                                    $lbl = trim($parts[1] ?? '');
                                @endphp
                                <span><strong>{{ $num }}</strong> {{ $lbl }}</span>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>

            @if($index == 1)
                <!-- School Partnership Program (static) -->
                <div class="program-highlight animate-on-scroll">
                    <div class="highlight-content">
                        <div class="highlight-text">
                            <div class="highlight-badge">Partnership Program</div>
                            <h3><i class="fas fa-handshake"></i> School Partnerships for Inclusive Education</h3>
                            <p>We collaborate with local schools to ensure orphaned and less privileged children receive quality education in nurturing environments.</p>

                            <div class="partnership-details">
                                <h4>Our Partner Schools:</h4>
                                <div class="partner-schools">
                                    <div class="partner-school">
                                        <h5>Bushenyi Preparatory Primary School</h5>
                                        <p><i class="fas fa-map-pin"></i> Serving the Bushenyi community with comprehensive primary education</p>
                                        <div class="school-features">
                                            <span><i class="fas fa-user-graduate"></i> 300+ students</span>
                                            <span><i class="fas fa-chalkboard-teacher"></i> 20 qualified teachers</span>
                                            <span><i class="fas fa-building"></i> Modern facilities</span>
                                        </div>
                                    </div>

                                    <div class="partner-school">
                                        <h5>Prime Junior Primary School Ishaka</h5>
                                        <p><i class="fas fa-map-pin"></i> Specialized early childhood education in Ishaka</p>
                                        <div class="school-features">
                                            <span><i class="fas fa-user-graduate"></i> 200+ students</span>
                                            <span><i class="fas fa-chalkboard-teacher"></i> 15 dedicated teachers</span>
                                            <span><i class="fas fa-child"></i> Child-friendly environment</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="partnership-benefits">
                                <h4>What We Provide:</h4>
                                <div class="benefits-grid">
                                    <div class="benefit">
                                        <i class="fas fa-money-check-alt"></i>
                                        <span>Full School Fee Coverage</span>
                                    </div>
                                    <div class="benefit">
                                        <i class="fas fa-tshirt"></i>
                                        <span>Uniforms & Supplies</span>
                                    </div>
                                    <div class="benefit">
                                        <i class="fas fa-utensils"></i>
                                        <span>Nutritious Meals</span>
                                    </div>
                                    <div class="benefit">
                                        <i class="fas fa-stethoscope"></i>
                                        <span>Healthcare Support</span>
                                    </div>
                                    <div class="benefit">
                                        <i class="fas fa-book"></i>
                                        <span>Learning Materials</span>
                                    </div>
                                    <div class="benefit">
                                        <i class="fas fa-bus"></i>
                                        <span>Transportation Assistance</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="highlight-images">
                            <div class="image-collage">
                                <img src="{{ asset('images/schools/partnership-group.jpg') }}" alt="School Partnership Group Photo" class="main-collage-img">
                                <div class="collage-grid">
                                    <img src="{{ asset('images/schools/learning-together.jpg') }}" alt="Children Learning Together">
                                    <img src="{{ asset('images/schools/school-community.jpg') }}" alt="School Community Activities">
                                    <img src="{{ asset('images/schools/teacher-student.jpg') }}" alt="Teacher with Students">
                                    <img src="{{ asset('images/schools/playground-fun.jpg') }}" alt="Playground Activities">
                                </div>
                            </div>

                            <div class="success-metrics">
                                <div class="metric">
                                    <div class="metric-value">95%</div>
                                    <div class="metric-label">Attendance Rate</div>
                                </div>
                                <div class="metric">
                                    <div class="metric-value">85%</div>
                                    <div class="metric-label">Academic Improvement</div>
                                </div>
                                <div class="metric">
                                    <div class="metric-value">100%</div>
                                    <div class="metric-label">Transition Rate</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @empty
            <p style="text-align: center; color: #777; padding: 40px;">No programs available. Add some from the admin panel.</p>
        @endforelse
    </div>

    <!-- Approach Section -->
    <div class="approach-section animate-on-scroll">
        <h2 class="section-title">Our Holistic Approach</h2>
        <div class="approach-content">
            <div class="approach-text">
                <h3>Integrated Community Development</h3>
                <p>At Samson Ddungu Foundation, we believe in addressing poverty and vulnerability through integrated programs that provide both immediate relief and long-term solutions.</p>
                <p>Our approach recognizes that education without healthcare, or shelter without economic empowerment, creates only temporary solutions. That's why we implement comprehensive programs that address multiple needs simultaneously.</p>
                <blockquote>
                    "{{ $approachQuote }}"
                </blockquote>
            </div>
            <div class="approach-image">
                <img src="{{ asset('images/programs/approach.jpg') }}" alt="Our Approach">
            </div>
        </div>
    </div>

    <!-- Program Impact -->
    <h2 class="section-title animate-on-scroll">Program Impact & Success Stories</h2>

    <div class="impact-stories animate-on-scroll">
        @forelse($stories as $index => $story)
            <div class="story-card {{ $index > 0 ? 'delay-' . ($index * 200) : '' }}">
                @if($story->image)
                    <div class="story-image" style="background-image: url('{{ asset($story->image) }}');"></div>
                @endif
                <div class="story-content">
                    <h4>{{ $story->title }}</h4>
                    <p>{{ $story->description }}</p>
                    @if($story->link)
                        <a href="{{ $story->link }}" class="story-link">Read Full Story →</a>
                    @endif
                </div>
            </div>
        @empty
            <p style="text-align: center; color: #777; padding: 40px;">No stories available. Add some from the admin panel.</p>
        @endforelse
    </div>
</div>

<style>
    /* Programs Grid Styles */
    .programs-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
        gap: 40px;
        margin: 60px 0;
    }

    @media (max-width: 768px) {
        .programs-grid {
            grid-template-columns: 1fr;
        }
    }

    .program-card {
        position: relative;
        min-height: 450px;
        background-size: cover;
        background-position: center;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        align-items: flex-end;
    }

    .program-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .program-card::before {
        content: '';
        position: absolute;
        top: -10px;
        left: -10px;
        right: -10px;
        bottom: -10px;
        background: inherit;
        background-size: cover;
        background-position: center;
        filter: blur(10px);
        z-index: 0;
        animation: zoomForward 18s ease-in-out infinite alternate;
    }

    @keyframes zoomForward {
        from {
            transform: scale(1);
        }
        to {
            transform: scale(1.12);
        }
    }

    .program-card:hover::before {
        animation-duration: 7s;
    }

    .program-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(0,0,0,0.5) 50%, rgba(0,0,0,0.3) 100%);
        z-index: 1;
    }

    .program-image {
        display: none;
    }

    .program-image img {
        display: none;
    }

    .program-card:hover .program-image img {
        transform: none;
    }

    .program-content {
        position: relative;
        z-index: 2;
        padding: 30px;
        color: white;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .program-content h3 {
        color: white;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 15px;
        font-size: 1.4rem;
        text-shadow: 0 2px 4px rgba(0,0,0,0.5);
    }

    .program-content p {
        margin-bottom: 20px;
        line-height: 1.7;
        color: rgba(255, 255, 255, 0.9);
    }

    .program-content ul {
        margin: 15px 0 20px 20px;
        flex: 1;
    }

    .program-content li {
        margin-bottom: 8px;
        color: rgba(255, 255, 255, 0.85);
    }

    .program-stats {
        display: flex;
        justify-content: space-between;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(10px);
        padding: 15px;
        border-radius: 10px;
        margin-top: 20px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .program-stats span {
        text-align: center;
        flex: 1;
        color: white;
    }

    .program-stats strong {
        display: block;
        font-size: 1.5rem;
        color: var(--primary-orange);
    }

    /* School Partnership Program Styles */
    .program-highlight {
        background: linear-gradient(135deg, #E8F5E9, #C8E6C9);
        border-radius: 20px;
        padding: 50px;
        margin: 60px 0;
        grid-column: 1 / -1;
    }

    .highlight-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
    }

    @media (max-width: 1024px) {
        .highlight-content {
            grid-template-columns: 1fr;
        }
    }

    .highlight-badge {
        background: var(--primary-blue);
        color: white;
        padding: 8px 20px;
        border-radius: 20px;
        display: inline-block;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .highlight-text h3 {
        color: var(--primary-blue);
        font-size: 2rem;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .partnership-details {
        margin: 30px 0;
    }

    .partner-schools {
        display: grid;
        gap: 25px;
        margin: 20px 0;
    }

    .partner-school {
        background: white;
        padding: 25px;
        border-radius: 15px;
        border-left: 5px solid var(--primary-blue);
    }

    .partner-school h5 {
        color: var(--primary-blue);
        margin-bottom: 10px;
        font-size: 1.3rem;
    }

    .school-features {
        display: flex;
        gap: 20px;
        margin-top: 15px;
        flex-wrap: wrap;
    }

    .school-features span {
        background: var(--primary-orange-faded);
        padding: 8px 15px;
        border-radius: 20px;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .benefits-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        margin: 20px 0;
    }

    .benefit {
        background: white;
        padding: 15px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        gap: 15px;
        font-weight: 500;
    }

    .benefit i {
        color: var(--primary-orange);
        font-size: 1.2rem;
    }

    .highlight-images {
        position: relative;
    }

    .image-collage {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .main-collage-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        animation: zoomForward 18s ease-in-out infinite alternate;
    }

    .collage-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        margin-top: 10px;
    }

    .collage-grid img {
        width: 100%;
        height: 120px;
        object-fit: cover;
        border-radius: 8px;
        animation: zoomForward 14s ease-in-out infinite alternate;
    }

    .image-collage:hover .main-collage-img {
        animation-duration: 6s;
    }

    .image-collage:hover .collage-grid img {
        animation-duration: 5s;
    }

    .success-metrics {
        display: flex;
        justify-content: space-around;
        margin-top: 30px;
        background: white;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .metric {
        text-align: center;
    }

    .metric-value {
        font-size: 2rem;
        font-weight: bold;
        color: var(--primary-orange);
    }

    .metric-label {
        font-size: 0.9rem;
        color: #666;
        margin-top: 5px;
    }

    /* Approach Section */
    .approach-section {
        margin: 80px 0;
        padding: 60px;
        background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark));
        color: white;
        border-radius: 25px;
        position: relative;
        overflow: hidden;
    }

    .approach-section .section-title {
        color: white;
    }

    .approach-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    .approach-text h3 {
        font-size: 1.8rem;
        margin-bottom: 20px;
        color: white;
    }

    .approach-text p {
        margin-bottom: 25px;
        line-height: 1.8;
        font-size: 1.1rem;
    }

    blockquote {
        border-left: 4px solid var(--primary-orange);
        padding-left: 20px;
        margin: 30px 0;
        font-style: italic;
        font-size: 1.2rem;
    }

    .approach-image {
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .approach-image img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        animation: zoomForward 16s ease-in-out infinite alternate;
    }

    .approach-image:hover img {
        animation-duration: 6s;
    }

    /* Impact Stories */
    .impact-stories {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }

    .story-card {
        position: relative;
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        min-height: 420px;
        display: flex;
        align-items: flex-end;
    }

    .story-card:hover {
        transform: translateY(-8px);
    }

    .story-image {
        position: absolute;
        top: -10px;
        left: -10px;
        right: -10px;
        bottom: -10px;
        background-size: cover;
        background-position: center;
        filter: blur(3px);
        z-index: 0;
        animation: zoomForward 22s ease-in-out infinite alternate;
    }

    .story-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to top, rgba(255,255,255,0.95) 0%, rgba(255,255,255,0.7) 60%, rgba(255,255,255,0.3) 100%);
        z-index: 1;
    }

    .story-card img {
        display: none;
    }

    .story-card:hover .story-image {
        animation-duration: 9s;
    }

    .story-content {
        position: relative;
        z-index: 2;
        padding: 25px;
    }

    .story-content h4 {
        color: var(--primary-blue);
        margin-bottom: 10px;
        font-size: 1.3rem;
    }

    .story-content p {
        margin-bottom: 15px;
        line-height: 1.6;
    }

    .story-link {
        color: var(--primary-orange);
        text-decoration: none;
        font-weight: bold;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }

    .story-link:hover {
        gap: 15px;
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

    /* Responsive Design */
    @media (max-width: 1024px) {
        .approach-content {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .approach-image {
            order: -1;
        }
    }

    @media (max-width: 768px) {
        .approach-section {
            padding: 40px 25px;
        }

        .programs-grid {
            gap: 30px;
        }

        .benefits-grid {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .program-stats {
            flex-direction: column;
            gap: 15px;
        }

        .impact-stories {
            grid-template-columns: 1fr;
        }

        .program-highlight {
            padding: 30px 20px;
        }

        .highlight-content {
            gap: 30px;
        }

        .success-metrics {
            flex-direction: column;
            gap: 20px;
        }
    }
</style>
@endsection
