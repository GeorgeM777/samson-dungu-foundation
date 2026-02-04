@extends('layouts.app')

@section('title', 'What We Do - Our Programs & Initiatives')
@section('content')

<!-- Hero Section -->
<div class="hero-slideshow" style="height: 60vh; min-height: 500px;">
    <div class="slide active" style="background-image: url('{{ asset('images/programs/hero-programs.jpg') }}');">
        <div class="slide-overlay">
            <div class="slide-text">
                <h2>Our Comprehensive Programs</h2>
                <p>Holistic support for Uganda's most vulnerable communities</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Programs Overview -->
    <h2 class="section-title animate-on-scroll">Core Initiatives</h2>
    <p class="section-subtitle animate-on-scroll delay-200">Integrated programs addressing the root causes of poverty and vulnerability</p>

    <div class="programs-grid animate-on-scroll">
        <div class="program-card">
            <div class="program-image">
                <img src="{{ asset('images/programs/education.jpg') }}" alt="Education Support">
            </div>
            <div class="program-content">
                <h3><i class="fas fa-graduation-cap"></i> Education Support</h3>
                <p>Providing scholarships, school supplies, and tutoring for orphaned and vulnerable children to break the cycle of poverty through education.</p>
                <ul>
                    <li>Primary & secondary school scholarships</li>
                    <li>School supplies distribution</li>
                    <li>After-school tutoring programs</li>
                    <li>Computer literacy training</li>
                </ul>
                <div class="program-stats">
                    <span><strong>100+</strong> Children Educated</span>
                    <span><strong>12</strong> Schools Partnered</span>
                </div>
            </div>
        </div>

        <div class="program-card animate-on-scroll delay-200">
            <div class="program-image">
                <img src="{{ asset('images/programs/healthcare.jpg') }}" alt="Healthcare">
            </div>
            <div class="program-content">
                <h3><i class="fas fa-heartbeat"></i> Healthcare & Medical Support</h3>
                <p>Ensuring access to medical care, HIV/AIDS treatment, and health education for vulnerable community members.</p>
                <ul>
                    <li>Medical outreach clinics</li>
                    <li>HIV/AIDS treatment support</li>
                    <li>Maternal health programs</li>
                    <li>Health education workshops</li>
                </ul>
                <div class="program-stats">
                    <span><strong>500+</strong> Patients Served</span>
                    <span><strong>4</strong> Annual Medical Camps</span>
                </div>
            </div>
        </div>

        <!-- School Partnership Program -->
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

        <div class="program-card animate-on-scroll delay-600">
            <div class="program-image">
                <img src="{{ asset('images/programs/shelter.jpg') }}" alt="Shelter & Housing">
            </div>
            <div class="program-content">
                <h3><i class="fas fa-home"></i> Shelter & Housing</h3>
                <p>Building and providing safe, decent housing for orphans, widows, and homeless community members.</p>
                <ul>
                    <li>New home construction</li>
                    <li>Home renovations</li>
                    <li>Orphanage support</li>
                    <li>Emergency shelter</li>
                </ul>
                <div class="program-stats">
                    <span><strong>50</strong> Homes Built</span>
                    <span><strong>20</strong> Families Housed</span>
                </div>
            </div>
        </div>

        <div class="program-card animate-on-scroll delay-800">
            <div class="program-image">
                <img src="{{ asset('images/programs/nutrition.jpg') }}" alt="Nutrition">
            </div>
            <div class="program-content">
                <h3><i class="fas fa-utensils"></i> Nutrition & Food Security</h3>
                <p>Addressing malnutrition and food insecurity through sustainable agriculture and feeding programs.</p>
                <ul>
                    <li>School feeding programs</li>
                    <li>Agricultural training</li>
                    <li>Food distribution</li>
                    <li>Nutrition education</li>
                </ul>
                <div class="program-stats">
                    <span><strong>1,000+</strong> Meals Served Monthly</span>
                    <span><strong>10</strong> Community Gardens</span>
                </div>
            </div>
        </div>

        <div class="program-card animate-on-scroll">
            <div class="program-image">
                <img src="{{ asset('images/programs/counseling.jpg') }}" alt="Counseling">
            </div>
            <div class="program-content">
                <h3><i class="fas fa-hands-helping"></i> Counseling & Psychosocial Support</h3>
                <p>Providing emotional and psychological support for traumatized individuals and families.</p>
                <ul>
                    <li>Individual counseling</li>
                    <li>Support groups</li>
                    <li>Trauma healing workshops</li>
                    <li>Child protection services</li>
                </ul>
                <div class="program-stats">
                    <span><strong>300+</strong> Individuals Counseled</span>
                    <span><strong>24/7</strong> Support Hotline</span>
                </div>
            </div>
        </div>
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
                    "There's a solution to solve a problem. At Samson Ddungu Foundation, we are that solution for Uganda's most vulnerable."
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
        <div class="story-card">
            <img src="{{ asset('images/success/graduate.jpg') }}" alt="Success Story">
            <div class="story-content">
                <h4>From Orphan to Graduate</h4>
                <p>Rebecca, supported since 2015, just graduated secondary school with top marks and is now studying nursing.</p>
                <a href="/blog#rebecca-story" class="story-link">Read Full Story →</a>
            </div>
        </div>

        <div class="story-card delay-200">
            <img src="{{ asset('images/success/business.jpg') }}" alt="Success Story">
            <div class="story-content">
                <h4>Widow's Business Success</h4>
                <p>After vocational training, Jane now runs a successful tailoring business employing 3 other widows.</p>
                <a href="/blog#jane-story" class="story-link">Read Full Story →</a>
            </div>
        </div>

        <div class="story-card delay-400">
            <img src="{{ asset('images/success/family.jpg') }}" alt="Success Story">
            <div class="story-content">
                <h4>Family Transformation</h4>
                <p>The Muwanguzi family received housing, medical care, and agricultural training - now self-sufficient.</p>
                <a href="/blog#muwanguzi-story" class="story-link">Read Full Story →</a>
            </div>
        </div>
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
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .program-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    }

    .program-image {
        height: 250px;
        overflow: hidden;
    }

    .program-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .program-card:hover .program-image img {
        transform: scale(1.1);
    }

    .program-content {
        padding: 30px;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .program-content h3 {
        color: var(--primary-blue);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 15px;
        font-size: 1.4rem;
    }

    .program-content p {
        margin-bottom: 20px;
        line-height: 1.7;
    }

    .program-content ul {
        margin: 15px 0 20px 20px;
        flex: 1;
    }

    .program-content li {
        margin-bottom: 8px;
        color: var(--accent-black);
    }

    .program-stats {
        display: flex;
        justify-content: space-between;
        background: var(--primary-orange-faded);
        padding: 15px;
        border-radius: 10px;
        margin-top: 20px;
    }

    .program-stats span {
        text-align: center;
        flex: 1;
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
    }

    /* Impact Stories */
    .impact-stories {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }

    .story-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: all 0.3s ease;
    }

    .story-card:hover {
        transform: translateY(-10px);
    }

    .story-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .story-content {
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
