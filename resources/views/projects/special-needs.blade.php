@extends('layouts.app')

@section('title', 'Special Needs Support - Inclusive Care for Individuals with Disabilities in Uganda')
@section('content')

<!-- Hero Section -->
<section class="hero-slideshow">
    <div class="slide active" style="background-image: url('{{ asset('images/projects/special-needs-hero.jpg') }}');">
        <div class="slide-overlay">
            <div class="slide-text">
                <h2>Special Needs Support</h2>
                <p>Creating inclusive communities and specialized care for individuals with disabilities</p>
                <div style="margin-top: 30px; display: inline-block; background: var(--primary-blue); color: white; padding: 10px 25px; border-radius: 25px; font-weight: 600;">
                    Inclusion & Empowerment
                </div>
            </div>
        </div>
    </div>
<!--
    <div class="slide-controls">
        <div class="slide-dot active"></div>
        <div class="slide-dot"></div>
        <div class="slide-dot"></div>
    </div> -->
</section>

<div class="container">
    <!-- Hero Stats -->
    <div class="impact-stats animate-on-scroll" style="margin: 50px 0;">
        <div class="stat-card animate-up">
            <div class="stat-number">50+</div>
            <p>Individuals Served</p>
        </div>
        <div class="stat-card animate-up delay-200">
            <div class="stat-number">5</div>
            <p>Support Programs</p>
        </div>
        <div class="stat-card animate-up delay-400">
            <div class="stat-number">3</div>
            <p>Therapy Centers</p>
        </div>
        <div class="stat-card animate-up delay-600">
            <div class="stat-number">10+</div>
            <p>Trained Caregivers</p>
        </div>
    </div>

    <!-- Project Mission -->
    <section class="mission-section animate-on-scroll">
        <h2 class="section-title">Building an Inclusive Uganda</h2>
        <p class="section-subtitle">Every individual deserves the opportunity to thrive, regardless of ability</p>

        <div class="mission-content" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
            <div class="mission-image" style="position: relative; border-radius: 20px; overflow: hidden; box-shadow: var(--shadow);">
                <img src="{{ asset('images/projects/special-needs-mission.jpg') }}" alt="Inclusive community activities" style="width: 100%; height: 400px; object-fit: cover;">
                <div class="mission-quote" style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0, 71, 171, 0.9)); color: white; padding: 25px;">
                    <i class="fas fa-quote-left" style="font-size: 1.8rem; opacity: 0.7; margin-bottom: 10px; display: block;"></i>
                    <p style="font-size: 1.2rem; font-style: italic; line-height: 1.6;">"Disability does not mean inability. With the right support, every individual can achieve their dreams."</p>
                </div>
            </div>
            <div class="mission-text">
                <p style="font-size: 1.2rem; line-height: 1.8; margin-bottom: 30px; color: var(--accent-black);">
                    Our Special Needs Support program is dedicated to creating a Uganda where individuals with disabilities are fully included in society. We believe that with proper support, therapy, and community integration, every person can reach their full potential.
                </p>

                <div class="mission-highlights" style="display: flex; flex-direction: column; gap: 20px;">
                    <div class="highlight" style="display: flex; align-items: flex-start; gap: 20px; background: var(--primary-blue-faded); padding: 20px; border-radius: 15px; border-left: 4px solid var(--primary-blue); transition: all 0.3s ease;">
                        <i class="fas fa-hand-holding-heart" style="color: var(--primary-blue); font-size: 1.5rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="color: var(--primary-blue); margin-bottom: 5px; font-size: 1.2rem;">Person-Centered Care</h4>
                            <p style="color: var(--accent-black);">Tailored support plans for each individual</p>
                        </div>
                    </div>
                    <div class="highlight" style="display: flex; align-items: flex-start; gap: 20px; background: var(--primary-blue-faded); padding: 20px; border-radius: 15px; border-left: 4px solid var(--primary-blue); transition: all 0.3s ease;">
                        <i class="fas fa-users" style="color: var(--primary-blue); font-size: 1.5rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="color: var(--primary-blue); margin-bottom: 5px; font-size: 1.2rem;">Family Support</h4>
                            <p style="color: var(--accent-black);">Training and resources for families and caregivers</p>
                        </div>
                    </div>
                    <div class="highlight" style="display: flex; align-items: flex-start; gap: 20px; background: var(--primary-blue-faded); padding: 20px; border-radius: 15px; border-left: 4px solid var(--primary-blue); transition: all 0.3s ease;">
                        <i class="fas fa-graduation-cap" style="color: var(--primary-blue); font-size: 1.5rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="color: var(--primary-blue); margin-bottom: 5px; font-size: 1.2rem;">Inclusive Education</h4>
                            <p style="color: var(--accent-black);">Specialized learning support in mainstream schools</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Gallery -->
    <section class="services-gallery animate-on-scroll">
        <h2 class="section-title">Our Specialized Services</h2>
        <p class="section-subtitle">Comprehensive support services designed for different needs</p>

        <div class="mission-cards" style="grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));">
            <div class="mission-card animate-up">
                <div class="service-header" style="display: flex; align-items: center; gap: 20px; margin-bottom: 20px;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark)); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem;">
                        <i class="fas fa-running"></i>
                    </div>
                    <h3 style="color: var(--primary-blue); margin: 0;">Physical Rehabilitation</h3>
                </div>
                <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 20px;">
                    Customized therapy programs to enhance physical abilities and promote independence in daily activities. Our trained therapists work with individuals to improve mobility, strength, and coordination.
                </p>
                <div class="service-features">
                    <span style="display: inline-flex; align-items: center; gap: 8px; background: var(--primary-orange-faded); color: var(--primary-orange); padding: 8px 16px; border-radius: 20px; margin-right: 10px; margin-bottom: 10px; font-size: 0.9rem;">
                        <i class="fas fa-check-circle"></i> Mobility Training
                    </span>
                    <span style="display: inline-flex; align-items: center; gap: 8px; background: var(--primary-orange-faded); color: var(--primary-orange); padding: 8px 16px; border-radius: 20px; margin-right: 10px; margin-bottom: 10px; font-size: 0.9rem;">
                        <i class="fas fa-check-circle"></i> Strength Building
                    </span>
                    <span style="display: inline-flex; align-items: center; gap: 8px; background: var(--primary-orange-faded); color: var(--primary-orange); padding: 8px 16px; border-radius: 20px; margin-right: 10px; margin-bottom: 10px; font-size: 0.9rem;">
                        <i class="fas fa-check-circle"></i> Adaptive Equipment
                    </span>
                </div>
            </div>

            <div class="mission-card animate-up delay-200">
                <div class="service-header" style="display: flex; align-items: center; gap: 20px; margin-bottom: 20px;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark)); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem;">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3 style="color: var(--primary-blue); margin: 0;">Cognitive Development</h3>
                </div>
                <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 20px;">
                    Specialized educational support and cognitive therapy to help individuals with learning disabilities thrive academically. We focus on developing essential cognitive skills for independent living.
                </p>
                <div class="service-features">
                    <span style="display: inline-flex; align-items: center; gap: 8px; background: var(--primary-orange-faded); color: var(--primary-orange); padding: 8px 16px; border-radius: 20px; margin-right: 10px; margin-bottom: 10px; font-size: 0.9rem;">
                        <i class="fas fa-check-circle"></i> Learning Support
                    </span>
                    <span style="display: inline-flex; align-items: center; gap: 8px; background: var(--primary-orange-faded); color: var(--primary-orange); padding: 8px 16px; border-radius: 20px; margin-right: 10px; margin-bottom: 10px; font-size: 0.9rem;">
                        <i class="fas fa-check-circle"></i> Memory Training
                    </span>
                    <span style="display: inline-flex; align-items: center; gap: 8px; background: var(--primary-orange-faded); color: var(--primary-orange); padding: 8px 16px; border-radius: 20px; margin-right: 10px; margin-bottom: 10px; font-size: 0.9rem;">
                        <i class="fas fa-check-circle"></i> Problem Solving
                    </span>
                </div>
            </div>

            <div class="mission-card animate-up delay-400">
                <div class="service-header" style="display: flex; align-items: center; gap: 20px; margin-bottom: 20px;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark)); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem;">
                        <i class="fas fa-comments"></i>
                    </div>
                    <h3 style="color: var(--primary-blue); margin: 0;">Communication Support</h3>
                </div>
                <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 20px;">
                    Speech therapy and alternative communication methods to help individuals express themselves effectively. We use various techniques including sign language, picture boards, and speech-generating devices.
                </p>
                <div class="service-features">
                    <span style="display: inline-flex; align-items: center; gap: 8px; background: var(--primary-orange-faded); color: var(--primary-orange); padding: 8px 16px; border-radius: 20px; margin-right: 10px; margin-bottom: 10px; font-size: 0.9rem;">
                        <i class="fas fa-check-circle"></i> Speech Therapy
                    </span>
                    <span style="display: inline-flex; align-items: center; gap: 8px; background: var(--primary-orange-faded); color: var(--primary-orange); padding: 8px 16px; border-radius: 20px; margin-right: 10px; margin-bottom: 10px; font-size: 0.9rem;">
                        <i class="fas fa-check-circle"></i> Sign Language
                    </span>
                    <span style="display: inline-flex; align-items: center; gap: 8px; background: var(--primary-orange-faded); color: var(--primary-orange); padding: 8px 16px; border-radius: 20px; margin-right: 10px; margin-bottom: 10px; font-size: 0.9rem;">
                        <i class="fas fa-check-circle"></i> AAC Devices
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="success-stories animate-on-scroll">
        <h2 class="section-title">Success Stories</h2>
        <p class="section-subtitle">Real impact through personalized care and support</p>

        <div class="partnership-cards" style="grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));">
            <div class="partnership-card animate-up">
                <div class="school-badge" style="background: var(--primary-orange);">
                    <i class="fas fa-star"></i> Featured Story
                </div>
                <div class="school-content">
                    <h3>Joseph's Journey</h3>
                    <div class="school-location">
                        <i class="fas fa-map-marker-alt"></i> Kampala, Uganda
                    </div>

                    <div class="school-images" style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px; margin: 30px 0;">
                        <div class="main-school-image" style="border-radius: 10px; overflow: hidden; height: 250px;">
                            <img src="{{ asset('images/success/joseph-story.jpg') }}" alt="Joseph's Story" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="school-gallery" style="display: grid; gap: 20px;">
                            <div class="gallery-item" style="border-radius: 8px; overflow: hidden; height: 115px;">
                                <img src="{{ asset('images/projects/special-needs-1.jpg') }}" alt="Joseph in therapy" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="gallery-item" style="border-radius: 8px; overflow: hidden; height: 115px;">
                                <img src="{{ asset('images/projects/special-needs-2.jpg') }}" alt="Joseph learning" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>

                    <div class="school-impact" style="margin: 30px 0; padding: 25px; background: #F8F9FA; border-radius: 10px;">
                        <h4 style="color: var(--primary-blue); margin-bottom: 20px; font-size: 1.3rem;">Joseph's Progress</h4>
                        <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 20px;">
                            Born with cerebral palsy, Joseph struggled with mobility and communication. Through our physical therapy program and specialized education support, he's now walking with assistance and attending school. He dreams of becoming a computer programmer.
                        </p>

                        <div style="display: flex; gap: 20px; flex-wrap: wrap; margin-top: 20px;">
                            <span style="background: var(--primary-orange-faded); color: var(--primary-orange); padding: 8px 15px; border-radius: 20px; font-size: 0.9rem; font-weight: 500;">
                                3 years in program
                            </span>
                            <span style="background: var(--primary-orange-faded); color: var(--primary-orange); padding: 8px 15px; border-radius: 20px; font-size: 0.9rem; font-weight: 500;">
                                Age: 14
                            </span>
                            <span style="background: var(--primary-orange-faded); color: var(--primary-orange); padding: 8px 15px; border-radius: 20px; font-size: 0.9rem; font-weight: 500;">
                                School: Inclusive Primary
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="partnership-card animate-up delay-200">
                <div class="school-badge" style="background: var(--primary-blue);">
                    <i class="fas fa-users"></i> Family Success
                </div>
                <div class="school-content">
                    <h3>Grace's Family Support</h3>
                    <div class="school-location">
                        <i class="fas fa-map-marker-alt"></i> Wakiso, Uganda
                    </div>

                    <div class="school-images" style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px; margin: 30px 0;">
                        <div class="main-school-image" style="border-radius: 10px; overflow: hidden; height: 250px;">
                            <img src="{{ asset('images/success/grace-family.jpg') }}" alt="Grace's Family Story" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="school-gallery" style="display: grid; gap: 20px;">
                            <div class="gallery-item" style="border-radius: 8px; overflow: hidden; height: 115px;">
                                <img src="{{ asset('images/projects/special-needs-3.jpg') }}" alt="Family support" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="gallery-item" style="border-radius: 8px; overflow: hidden; height: 115px;">
                                <img src="{{ asset('images/projects/special-needs-4.jpg') }}" alt="Speech therapy" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>

                    <div class="school-impact" style="margin: 30px 0; padding: 25px; background: #F8F9FA; border-radius: 10px;">
                        <h4 style="color: var(--primary-blue); margin-bottom: 20px; font-size: 1.3rem;">Family Transformation</h4>
                        <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 20px;">
                            "Our daughter Grace has Down syndrome. The foundation provided us with training, resources, and community connections. They helped her get into an inclusive school and provided speech therapy. We've seen incredible progress in her communication skills."
                        </p>

                        <div style="display: flex; gap: 20px; flex-wrap: wrap; margin-top: 20px;">
                            <span style="background: var(--primary-blue-faded); color: var(--primary-blue); padding: 8px 15px; border-radius: 20px; font-size: 0.9rem; font-weight: 500;">
                                Family support: 2 years
                            </span>
                            <span style="background: var(--primary-blue-faded); color: var(--primary-blue); padding: 8px 15px; border-radius: 20px; font-size: 0.9rem; font-weight: 500;">
                                School integration success
                            </span>
                            <span style="background: var(--primary-blue-faded); color: var(--primary-blue); padding: 8px 15px; border-radius: 20px; font-size: 0.9rem; font-weight: 500;">
                                Speech therapy ongoing
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Community Integration -->
    <section class="program-highlight animate-on-scroll">
        <div class="highlight-badge" style="background: #4CAF50; color: white;">
            <i class="fas fa-hands-helping"></i> Community Integration
        </div>
        <div class="highlight-content">
            <div class="highlight-text">
                <h3 style="color: var(--primary-blue); font-size: 2.2rem; margin-bottom: 25px;">
                    Building Inclusive Communities
                </h3>
                <p style="font-size: 1.2rem; line-height: 1.8; margin-bottom: 30px;">
                    We work with local communities to break down barriers and create environments where individuals with disabilities can fully participate. Our community integration program focuses on accessibility, awareness, and acceptance.
                </p>

                <div class="community-initiatives" style="display: grid; gap: 25px;">
                    <div class="initiative" style="background: white; padding: 25px; border-radius: 15px; display: flex; align-items: flex-start; gap: 20px; transition: all 0.3s ease;">
                        <i class="fas fa-church" style="color: #4CAF50; font-size: 1.8rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="color: var(--primary-blue); margin-bottom: 5px; font-size: 1.3rem;">Church Partnerships</h4>
                            <p style="color: var(--accent-black);">Making religious communities accessible and inclusive</p>
                        </div>
                    </div>
                    <div class="initiative" style="background: white; padding: 25px; border-radius: 15px; display: flex; align-items: flex-start; gap: 20px; transition: all 0.3s ease;">
                        <i class="fas fa-store" style="color: #4CAF50; font-size: 1.8rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="color: var(--primary-blue); margin-bottom: 5px; font-size: 1.3rem;">Business Inclusion</h4>
                            <p style="color: var(--accent-black);">Training businesses to be disability-friendly</p>
                        </div>
                    </div>
                    <div class="initiative" style="background: white; padding: 25px; border-radius: 15px; display: flex; align-items: flex-start; gap: 20px; transition: all 0.3s ease;">
                        <i class="fas fa-school" style="color: #4CAF50; font-size: 1.8rem; margin-top: 5px;"></i>
                        <div>
                            <h4 style="color: var(--primary-blue); margin-bottom: 5px; font-size: 1.3rem;">School Integration</h4>
                            <p style="color: var(--accent-black);">Supporting inclusive education in mainstream schools</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="highlight-image" style="position: relative;">
                <img src="{{ asset('images/projects/community-inclusion.jpg') }}" alt="Community inclusion activities" style="width: 100%; height: 400px; object-fit: cover; border-radius: 15px; box-shadow: var(--shadow);">
                <div class="image-badge" style="position: absolute; top: 20px; right: 20px; background: rgba(255, 255, 255, 0.95); padding: 10px 20px; border-radius: 25px; display: flex; align-items: center; gap: 10px; font-weight: bold; color: var(--primary-blue);">
                    <i class="fas fa-heart"></i> Community Acceptance
                </div>
            </div>
        </div>
    </section>

    <!-- Get Involved Section -->
    <section class="get-involved animate-on-scroll">
        <h2 class="section-title">How You Can Support</h2>
        <p class="section-subtitle">Join us in creating a more inclusive Uganda for individuals with disabilities</p>

        <div class="involvement-options" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin: 60px 0;">
            <div class="option-card animate-up" style="background: white; padding: 40px 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); border-top: 5px solid var(--primary-blue); transition: all 0.3s ease; text-align: center;">
                <div class="option-icon" style="width: 70px; height: 70px; background: var(--primary-blue); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; margin: 0 auto 25px;">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3 style="color: var(--primary-blue); margin-bottom: 15px; font-size: 1.5rem;">Volunteer as a Therapist</h3>
                <p style="color: var(--accent-black); margin-bottom: 20px; line-height: 1.6;">Share your expertise in physical, speech, or occupational therapy</p>
                <a href="{{ url('/get-involved') }}#volunteer" class="option-link" style="color: var(--primary-orange); text-decoration: none; font-weight: bold; display: inline-flex; align-items: center; gap: 8px; transition: gap 0.3s ease;">
                    Apply to Volunteer <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="option-card animate-up delay-200" style="background: white; padding: 40px 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); border-top: 5px solid var(--primary-blue); transition: all 0.3s ease; text-align: center;">
                <div class="option-icon" style="width: 70px; height: 70px; background: var(--primary-blue); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; margin: 0 auto 25px;">
                    <i class="fas fa-donate"></i>
                </div>
                <h3 style="color: var(--primary-blue); margin-bottom: 15px; font-size: 1.5rem;">Sponsor Equipment</h3>
                <p style="color: var(--accent-black); margin-bottom: 20px; line-height: 1.6;">Help us purchase specialized therapy equipment</p>
                <a href="{{ url('/sponsor') }}" class="option-link" style="color: var(--primary-orange); text-decoration: none; font-weight: bold; display: inline-flex; align-items: center; gap: 8px; transition: gap 0.3s ease;">
                    Donate for Equipment <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="option-card animate-up delay-400" style="background: white; padding: 40px 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); border-top: 5px solid var(--primary-blue); transition: all 0.3s ease; text-align: center;">
                <div class="option-icon" style="width: 70px; height: 70px; background: var(--primary-blue); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; margin: 0 auto 25px;">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <h3 style="color: var(--primary-blue); margin-bottom: 15px; font-size: 1.5rem;">Support Education</h3>
                <p style="color: var(--accent-black); margin-bottom: 20px; line-height: 1.6;">Fund inclusive education for children with disabilities</p>
                <a href="{{ url('/sponsor') }}#education" class="option-link" style="color: var(--primary-orange); text-decoration: none; font-weight: bold; display: inline-flex; align-items: center; gap: 8px; transition: gap 0.3s ease;">
                    Support Education <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="involvement-cta" style="background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark)); color: white; padding: 50px; border-radius: 20px; margin-top: 60px; text-align: center;">
            <p style="font-size: 1.3rem; margin-bottom: 30px;">
                <strong>Ready to make a difference?</strong> Contact us to learn more about our special needs programs.
            </p>
            <a href="{{ url('/contact') }}" class="cta-button" style="background: white; color: var(--primary-blue); padding: 18px 45px; border-radius: 30px; text-decoration: none; font-size: 1.2rem; font-weight: 600; display: inline-flex; align-items: center; gap: 15px; transition: all 0.3s ease;">
                <i class="fas fa-envelope"></i> Contact Our Special Needs Team
            </a>
        </div>
    </section>

    <!-- Program Impact Stats -->
    <section class="partnership-impact animate-on-scroll">
        <h2 class="section-title">Program Impact</h2>

        <div class="impact-stats" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 35px; margin: 50px 0;">
            <div class="impact-stat">
                <div class="stat-number">85%</div>
                <div class="stat-label">Improved Mobility</div>
            </div>
            <div class="impact-stat">
                <div class="stat-number">70%</div>
                <div class="stat-label">School Enrollment</div>
            </div>
            <div class="impact-stat">
                <div class="stat-number">92%</div>
                <div class="stat-label">Parent Satisfaction</div>
            </div>
            <div class="impact-stat">
                <div class="stat-number">15+</div>
                <div class="stat-label">Communities Served</div>
            </div>
        </div>
    </section>
</div>

<style>
    /* Hover effects for cards */
    .mission-card:hover,
    .option-card:hover,
    .partnership-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    }

    .highlight:hover,
    .initiative:hover {
        transform: translateX(10px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .option-link:hover {
        gap: 15px;
    }

    .cta-button:hover {
        background: var(--primary-orange);
        color: white;
        transform: translateY(-5px);
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .mission-content {
            grid-template-columns: 1fr;
        }

        .highlight-content {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .mission-quote {
            padding: 20px;
        }

        .mission-quote p {
            font-size: 1.1rem;
        }

        .school-images {
            grid-template-columns: 1fr;
        }

        .main-school-image {
            height: 200px !important;
        }

        .school-gallery {
            grid-template-columns: repeat(2, 1fr);
        }

        .partnership-cards {
            grid-template-columns: 1fr;
        }

        .involvement-options {
            grid-template-columns: 1fr;
        }

        .involvement-cta {
            padding: 40px 25px;
        }
    }

    @media (max-width: 480px) {
        .mission-highlights {
            gap: 15px;
        }

        .highlight {
            padding: 15px;
        }

        .impact-stats {
            grid-template-columns: repeat(2, 1fr);
        }

        .mission-cards {
            grid-template-columns: 1fr;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize hero slideshow
        const slides = document.querySelectorAll('.slide');
        const dots = document.querySelectorAll('.slide-dot');
        let currentSlide = 0;
        const slideInterval = 5000;

        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        let slideTimer = setInterval(nextSlide, slideInterval);

        // Dot navigation
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showSlide(index);
                clearInterval(slideTimer);
                slideTimer = setInterval(nextSlide, slideInterval);
            });
        });

        // Pause on hover
        const slideshow = document.querySelector('.hero-slideshow');
        if (slideshow) {
            slideshow.addEventListener('mouseenter', () => clearInterval(slideTimer));
            slideshow.addEventListener('mouseleave', () => {
                slideTimer = setInterval(nextSlide, slideInterval);
            });
        }

        // Gallery thumbnail interaction
        document.querySelectorAll('.gallery-item img').forEach(img => {
            img.addEventListener('click', function() {
                // Find the main image in the same card
                const card = this.closest('.partnership-card');
                const mainImg = card.querySelector('.main-school-image img');
                if (mainImg) {
                    mainImg.src = this.src;
                }
            });
        });

        // Scroll animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');

                    // Random animation class for variety
                    const animations = ['animate-left', 'animate-right', 'animate-float', 'animate-rotate'];
                    const randomAnim = animations[Math.floor(Math.random() * animations.length)];
                    entry.target.classList.add(randomAnim);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        });

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            observer.observe(el);
        });

        // Hover effects for cards
        document.querySelectorAll('.mission-card, .option-card, .partnership-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-15px)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    });
</script>
@endsection
