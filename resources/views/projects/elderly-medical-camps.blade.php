@extends('layouts.app')

@section('title', 'Elderly Support & Medical Camps - Healthcare for Uganda\'s Senior Citizens')
@section('content')

<!-- Hero Section -->
<section class="hero-slideshow">
    <div class="slide active" style="background-image: url('{{ asset('images/projects/medical-camp-hero.jpg') }}');">
        <div class="slide-overlay">
            <div class="slide-text">
                <h2>Elderly & Medical Camps</h2>
                <p>Healthcare services and community support for Uganda's elderly population</p>
                <div style="margin-top: 30px; display: inline-block; background: #4CAF50; color: white; padding: 10px 25px; border-radius: 25px; font-weight: 600;">
                    <i class="fas fa-heartbeat"></i> Healthcare & Community
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="slide-controls">
        <div class="slide-dot active"></div>
        <div class="slide-dot"></div>
        <div class="slide-dot"></div>
    </div> -->
</section>

<div class="container">
    <!-- Hero Stats -->
    <div class="impact-stats animate-on-scroll" style="margin: 50px 0;">
        <div class="stat-card animate-up">
            <div class="stat-number">4</div>
            <p>Annual Medical Camps</p>
        </div>
        <div class="stat-card animate-up delay-200">
            <div class="stat-number">500+</div>
            <p>Patients Served</p>
        </div>
        <div class="stat-card animate-up delay-400">
            <div class="stat-number">10+</div>
            <p>Community Outreach</p>
        </div>
        <div class="stat-card animate-up delay-600">
            <div class="stat-number">20+</div>
            <p>Medical Volunteers</p>
        </div>
    </div>

    <!-- Medical Camps Focus -->
    <section class="camps-section animate-on-scroll">
        <h2 class="section-title">Mobile Medical Camps</h2>
        <p class="section-subtitle">Bringing healthcare to remote communities where access is limited</p>

        <div class="mission-cards" style="margin: 70px 0;">
            <div class="mission-card animate-up">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                    <div>
                        <div style="color: #4CAF50; font-weight: bold; margin-bottom: 10px;">
                            <i class="fas fa-calendar"></i> Quarterly Camps
                        </div>
                        <h3 style="color: var(--primary-blue); margin: 0;">Community Health Screenings</h3>
                    </div>
                    <div style="text-align: right;">
                        <div style="font-size: 1.8rem; font-weight: bold; color: var(--primary-orange);">2024</div>
                    </div>
                </div>
                <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 20px;">
                    Free medical check-ups, blood pressure monitoring, diabetes screening, and health consultations in remote villages across Uganda.
                </p>

                <div class="school-images" style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px; margin: 30px 0;">
                    <div class="main-school-image" style="border-radius: 10px; overflow: hidden; height: 250px;">
                        <img src="{{ asset('images/camps/screening-camp.jpg') }}" alt="Community Health Screening" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="school-gallery" style="display: grid; gap: 20px;">
                        <div class="gallery-item" style="border-radius: 8px; overflow: hidden; height: 115px;">
                            <img src="{{ asset('images/camps/camp-consultation.jpg') }}" alt="Doctor Consultation" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="gallery-item" style="border-radius: 8px; overflow: hidden; height: 115px;">
                            <img src="{{ asset('images/camps/camp-medicine.jpg') }}" alt="Medicine Distribution" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                </div>

                <div style="display: flex; gap: 20px; flex-wrap: wrap; margin-top: 20px;">
                    <span style="display: inline-flex; align-items: center; gap: 8px; background: #E8F5E9; color: #4CAF50; padding: 8px 16px; border-radius: 20px; font-size: 0.9rem;">
                        <i class="fas fa-user-md"></i> 15+ Medical Staff
                    </span>
                    <span style="display: inline-flex; align-items: center; gap: 8px; background: #E8F5E9; color: #4CAF50; padding: 8px 16px; border-radius: 20px; font-size: 0.9rem;">
                        <i class="fas fa-ambulance"></i> Mobile Clinic Units
                    </span>
                    <span style="display: inline-flex; align-items: center; gap: 8px; background: #E8F5E9; color: #4CAF50; padding: 8px 16px; border-radius: 20px; font-size: 0.9rem;">
                        <i class="fas fa-pills"></i> Free Medication
                    </span>
                </div>
            </div>

            <div class="mission-card animate-up delay-200">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                    <div>
                        <div style="color: #4CAF50; font-weight: bold; margin-bottom: 10px;">
                            <i class="fas fa-calendar-alt"></i> Bi-Annual Camps
                        </div>
                        <h3 style="color: var(--primary-blue); margin: 0;">Specialized Care Camps</h3>
                    </div>
                    <div style="text-align: right;">
                        <div style="font-size: 1.8rem; font-weight: bold; color: var(--primary-orange);">2024</div>
                    </div>
                </div>
                <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 20px;">
                    Focus camps for eye care, dental health, chronic disease management, and maternal health for elderly women.
                </p>

                <div class="school-images" style="display: grid; grid-template-columns: 2fr 1fr; gap: 20px; margin: 30px 0;">
                    <div class="main-school-image" style="border-radius: 10px; overflow: hidden; height: 250px;">
                        <img src="{{ asset('images/camps/eye-camp.jpg') }}" alt="Eye Care Camp" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <div class="school-gallery" style="display: grid; gap: 20px;">
                        <div class="gallery-item" style="border-radius: 8px; overflow: hidden; height: 115px;">
                            <img src="{{ asset('images/camps/camp-education.jpg') }}" alt="Health Education" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="gallery-item" style="border-radius: 8px; overflow: hidden; height: 115px;">
                            <img src="{{ asset('images/camps/camp-community.jpg') }}" alt="Community Gathering" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                </div>

                <div style="display: flex; gap: 20px; flex-wrap: wrap; margin-top: 20px;">
                    <span style="display: inline-flex; align-items: center; gap: 8px; background: #E8F5E9; color: #4CAF50; padding: 8px 16px; border-radius: 20px; font-size: 0.9rem;">
                        <i class="fas fa-eye"></i> Eye Care Services
                    </span>
                    <span style="display: inline-flex; align-items: center; gap: 8px; background: #E8F5E9; color: #4CAF50; padding: 8px 16px; border-radius: 20px; font-size: 0.9rem;">
                        <i class="fas fa-tooth"></i> Dental Care
                    </span>
                    <span style="display: inline-flex; align-items: center; gap: 8px; background: #E8F5E9; color: #4CAF50; padding: 8px 16px; border-radius: 20px; font-size: 0.9rem;">
                        <i class="fas fa-heart"></i> Chronic Disease Mgmt
                    </span>
                </div>
            </div>
        </div>
    </section>

    <!-- Medical Camp Gallery -->
    <section class="camp-gallery animate-on-scroll">
        <h2 class="section-title">Medical Camp in Action</h2>
        <p class="section-subtitle">Witness our medical outreach transforming lives in remote communities</p>

        <div class="program-highlight" style="background: linear-gradient(135deg, #F0F7FF, #E1F0FF); margin: 50px 0;">
            <div class="highlight-content">
                <div class="highlight-text">
                    <div class="highlight-badge" style="background: var(--primary-blue); color: white;">
                        <i class="fas fa-medkit"></i> Active Medical Camp
                    </div>
                    <h3 style="color: var(--primary-blue); font-size: 2.2rem; margin-bottom: 25px;">
                        Bushenyi Medical Outreach - April 2024
                    </h3>
                    <p style="font-size: 1.2rem; line-height: 1.8; margin-bottom: 30px; color: var(--primary-blue-dark);">
                        <strong>Serving 150+ elderly patients in one day</strong> with comprehensive medical care, free medications, and health education.
                    </p>

                    <div class="camp-features" style="display: grid; gap: 20px;">
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div style="width: 40px; height: 40px; background: var(--primary-orange); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">
                                <i class="fas fa-stethoscope"></i>
                            </div>
                            <span style="font-size: 1.1rem; font-weight: 500;">250+ Medical Consultations</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div style="width: 40px; height: 40px; background: var(--primary-orange); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">
                                <i class="fas fa-pills"></i>
                            </div>
                            <span style="font-size: 1.1rem; font-weight: 500;">500+ Prescriptions Filled</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 15px;">
                            <div style="width: 40px; height: 40px; background: var(--primary-orange); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem;">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <span style="font-size: 1.1rem; font-weight: 500;">Health Education Sessions</span>
                        </div>
                    </div>
                </div>

                <div class="highlight-image" style="position: relative;">
                    <img src="{{ asset('images/camps/camp-main.jpg') }}" alt="Medical Camp Main Photo" style="width: 100%; height: 350px; object-fit: cover; border-radius: 15px; box-shadow: var(--shadow);" id="mainGalleryImage">
                    <div class="gallery-thumbs" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; margin-top: 15px;">
                        <div class="gallery-thumb" onclick="changeGalleryImage(this)" data-src="{{ asset('images/camps/camp-consultation.jpg') }}" data-title="Doctor Consultation Session" style="border-radius: 8px; overflow: hidden; height: 80px; cursor: pointer; opacity: 0.7; transition: all 0.3s ease;">
                            <img src="{{ asset('images/camps/camp-consultation.jpg') }}" alt="Doctor Consultation" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="gallery-thumb" onclick="changeGalleryImage(this)" data-src="{{ asset('images/camps/camp-medicine.jpg') }}" data-title="Medicine Distribution" style="border-radius: 8px; overflow: hidden; height: 80px; cursor: pointer; opacity: 0.7; transition: all 0.3s ease;">
                            <img src="{{ asset('images/camps/camp-medicine.jpg') }}" alt="Medicine Distribution" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="gallery-thumb" onclick="changeGalleryImage(this)" data-src="{{ asset('images/camps/camp-community.jpg') }}" data-title="Community Gathering" style="border-radius: 8px; overflow: hidden; height: 80px; cursor: pointer; opacity: 0.7; transition: all 0.3s ease;">
                            <img src="{{ asset('images/camps/camp-community.jpg') }}" alt="Community Gathering" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                        <div class="gallery-thumb" onclick="changeGalleryImage(this)" data-src="{{ asset('images/camps/camp-education.jpg') }}" data-title="Health Education Session" style="border-radius: 8px; overflow: hidden; height: 80px; cursor: pointer; opacity: 0.7; transition: all 0.3s ease;">
                            <img src="{{ asset('images/camps/camp-education.jpg') }}" alt="Health Education" style="width: 100%; height: 100%; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Elderly Support Programs -->
    <section class="elderly-programs animate-on-scroll">
        <h2 class="section-title">Comprehensive Elderly Support</h2>
        <p class="section-subtitle">Holistic care and support for Uganda's senior citizens</p>

        <div class="mission-cards" style="grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); margin: 70px 0;">
            <div class="mission-card animate-up">
                <div class="program-header" style="display: flex; align-items: center; gap: 20px; margin-bottom: 20px;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #4CAF50, #2E7D32); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem;">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3 style="color: var(--primary-blue); margin: 0;">Shelter & Housing Support</h3>
                </div>
                <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 20px;">
                    Home repairs, safety modifications, and housing assistance for elderly living alone. Ensuring safe and dignified living conditions.
                </p>

                <div class="program-features" style="margin-top: 25px;">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px; padding: 12px; background: #F8F9FA; border-radius: 8px;">
                        <i class="fas fa-check-circle" style="color: #4CAF50;"></i>
                        <span>Roof repair and replacement</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px; padding: 12px; background: #F8F9FA; border-radius: 8px;">
                        <i class="fas fa-check-circle" style="color: #4CAF50;"></i>
                        <span>Accessibility modifications</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px; padding: 12px; background: #F8F9FA; border-radius: 8px;">
                        <i class="fas fa-check-circle" style="color: #4CAF50;"></i>
                        <span>Emergency housing support</span>
                    </div>
                </div>
            </div>

            <div class="mission-card animate-up delay-200">
                <div class="program-header" style="display: flex; align-items: center; gap: 20px; margin-bottom: 20px;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #4CAF50, #2E7D32); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem;">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3 style="color: var(--primary-blue); margin: 0;">Nutrition & Food Security</h3>
                </div>
                <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 20px;">
                    Ensuring proper nutrition through food distribution and community gardens. Promoting healthy eating habits for elderly well-being.
                </p>

                <div class="program-features" style="margin-top: 25px;">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px; padding: 12px; background: #F8F9FA; border-radius: 8px;">
                        <i class="fas fa-check-circle" style="color: #4CAF50;"></i>
                        <span>Monthly food packages</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px; padding: 12px; background: #F8F9FA; border-radius: 8px;">
                        <i class="fas fa-check-circle" style="color: #4CAF50;"></i>
                        <span>Community vegetable gardens</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px; padding: 12px; background: #F8F9FA; border-radius: 8px;">
                        <i class="fas fa-check-circle" style="color: #4CAF50;"></i>
                        <span>Nutrition education</span>
                    </div>
                </div>
            </div>

            <div class="mission-card animate-up delay-400">
                <div class="program-header" style="display: flex; align-items: center; gap: 20px; margin-bottom: 20px;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #4CAF50, #2E7D32); color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem;">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3 style="color: var(--primary-blue); margin: 0;">Social & Emotional Support</h3>
                </div>
                <p style="font-size: 1.1rem; line-height: 1.7; margin-bottom: 20px;">
                    Combatting loneliness and isolation through community activities. Creating meaningful connections for mental and emotional well-being.
                </p>

                <div class="program-features" style="margin-top: 25px;">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px; padding: 12px; background: #F8F9FA; border-radius: 8px;">
                        <i class="fas fa-check-circle" style="color: #4CAF50;"></i>
                        <span>Weekly social gatherings</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 15px; padding: 12px; background: #F8F9FA; border-radius: 8px;">
                        <i class="fas fa-check-circle" style="color: #4CAF50;"></i>
                        <span>Counseling services</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: 12px; padding: 12px; background: #F8F9FA; border-radius: 8px;">
                        <i class="fas fa-check-circle" style="color: #4CAF50;"></i>
                        <span>Inter-generational programs</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Program Impact Stats -->
        <div class="impact-stats animate-on-scroll" style="margin: 70px 0;">
            <div class="stat-card animate-up">
                <div class="stat-number">85%</div>
                <p>Health Improvement</p>
            </div>
            <div class="stat-card animate-up delay-200">
                <div class="stat-number">92%</div>
                <p>Satisfaction Rate</p>
            </div>
            <div class="stat-card animate-up delay-400">
                <div class="stat-number">100%</div>
                <p>Medication Access</p>
            </div>
            <div class="stat-card animate-up delay-600">
                <div class="stat-number">45%</div>
                <p>Reduced Isolation</p>
            </div>
        </div>
    </section>

    <!-- Patient Stories -->
    <section class="stories-section animate-on-scroll">
        <h2 class="section-title">Voices from Our Community</h2>
        <p class="section-subtitle">Real stories from elderly individuals whose lives have been transformed</p>

        <div class="partnership-cards" style="grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));">
            <div class="partnership-card animate-up">
                <div class="school-badge" style="background: #4CAF50;">
                    <i class="fas fa-heartbeat"></i> Diabetes Management
                </div>
                <div class="school-content">
                    <div style="display: flex; align-items: flex-start; gap: 20px; margin-bottom: 25px;">
                        <div style="position: relative;">
                            <!-- <img src="{{ asset('images/stories/mzee-story.jpg') }}" alt="Mzee John's Story" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; border: 4px solid #4CAF50;"> -->
                            <div style="position: absolute; bottom: 0; right: 0; background: var(--primary-orange); color: white; padding: 4px 8px; border-radius: 12px; font-size: 0.8rem;">
                                Age: 78
                            </div>
                        </div>
                        <div>
                            <h3>Mzee John's Diabetes Journey</h3>
                            <div class="school-location">
                                <i class="fas fa-map-marker-alt"></i> Bushenyi Village
                            </div>
                        </div>
                    </div>

                    <div class="student-testimonial" style="background: #E8F5E9; padding: 25px; border-radius: 10px; border-left: 5px solid #4CAF50; margin: 30px 0;">
                        <p style="font-style: italic; margin-bottom: 15px; line-height: 1.8; font-size: 1.1rem;">
                            "I've had diabetes for 15 years, but couldn't afford regular check-ups or medication. The foundation's medical camp not only gave me free medicine but taught me how to manage my condition. They even repaired my leaking roof so I can stay dry during rainy season."
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="student-name" style="color: #4CAF50; font-weight: 600; font-size: 1.1rem;">
                                Mzee John
                            </div>
                            <div style="display: flex; gap: 15px; font-size: 0.9rem; color: #666;">
                                <span><i class="fas fa-calendar-alt"></i> In program since 2022</span>
                                <span><i class="fas fa-medkit"></i> Diabetes management</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="partnership-card animate-up delay-200">
                <div class="school-badge" style="background: var(--primary-blue);">
                    <i class="fas fa-eye"></i> Vision Restoration
                </div>
                <div class="school-content">
                    <div style="display: flex; align-items: flex-start; gap: 20px; margin-bottom: 25px;">
                        <div style="position: relative;">
                            <!-- <img src="{{ asset('images/stories/mama-grace.jpg') }}" alt="Mama Grace's Story" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%; border: 4px solid var(--primary-blue);"> -->
                            <div style="position: absolute; bottom: 0; right: 0; background: var(--primary-orange); color: white; padding: 4px 8px; border-radius: 12px; font-size: 0.8rem;">
                                Age: 72
                            </div>
                        </div>
                        <div>
                            <h3>Mama Grace's Eye Surgery</h3>
                            <div class="school-location">
                                <i class="fas fa-map-marker-alt"></i> Ishaka Community
                            </div>
                        </div>
                    </div>

                    <div class="student-testimonial" style="background: #E3F2FD; padding: 25px; border-radius: 10px; border-left: 5px solid var(--primary-blue); margin: 30px 0;">
                        <p style="font-style: italic; margin-bottom: 15px; line-height: 1.8; font-size: 1.1rem;">
                            "For 5 years, I was nearly blind from cataracts. I couldn't recognize my own grandchildren. Through the foundation's eye camp, I received free cataract surgery. When they removed the bandages, I saw my family clearly for the first time in years. I cried tears of joy."
                        </p>
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div class="student-name" style="color: var(--primary-blue); font-weight: 600; font-size: 1.1rem;">
                                Mama Grace
                            </div>
                            <div style="display: flex; gap: 15px; font-size: 0.9rem; color: #666;">
                                <span><i class="fas fa-calendar-alt"></i> Treated in 2023</span>
                                <span><i class="fas fa-eye"></i> Cataract surgery</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Support -->
    <section class="support-section animate-on-scroll">
        <div class="program-highlight" style="background: linear-gradient(135deg, #FFF9F0, #FFF3E0);">
            <div class="highlight-content">
                <div class="highlight-text">
                    <div class="highlight-badge" style="background: var(--primary-orange); color: white;">
                        <i class="fas fa-hand-holding-heart"></i> Support Our Work
                    </div>
                    <h3 style="color: var(--primary-blue); font-size: 2.2rem; margin-bottom: 25px;">
                        Support Our Medical Work
                    </h3>
                    <p style="font-size: 1.2rem; line-height: 1.8; margin-bottom: 30px;">
                        Your contribution directly funds medical camps, medications, and elderly support programs.
                    </p>

                    <div class="donation-options" style="display: grid; gap: 25px;">
                        <div style="background: white; padding: 25px; border-radius: 15px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                            <div style="font-size: 2.5rem; font-weight: bold; color: var(--primary-orange); margin-bottom: 10px;">£50</div>
                            <p style="color: var(--accent-black); margin-bottom: 20px;">Provides medication for 10 elderly patients</p>
                            <a href="{{ url('/sponsor') }}?amount=50" class="donate-btn" style="background: var(--primary-blue); color: white; padding: 12px 25px; border-radius: 25px; text-decoration: none; font-weight: 600; display: inline-block; transition: all 0.3s ease;">
                                Donate Now
                            </a>
                        </div>

                        <div style="background: white; padding: 25px; border-radius: 15px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.1); border: 2px solid var(--primary-orange); transform: scale(1.05); transition: all 0.3s ease;">
                            <div style="font-size: 2.5rem; font-weight: bold; color: var(--primary-orange); margin-bottom: 10px;">£150</div>
                            <p style="color: var(--accent-black); margin-bottom: 20px;">Funds one day of medical camp operations</p>
                            <a href="{{ url('/sponsor') }}?amount=150" class="donate-btn" style="background: var(--primary-orange); color: white; padding: 12px 25px; border-radius: 25px; text-decoration: none; font-weight: 600; display: inline-block; transition: all 0.3s ease;">
                                Sponsor a Camp Day
                            </a>
                        </div>

                        <div style="background: white; padding: 25px; border-radius: 15px; text-align: center; box-shadow: 0 5px 15px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                            <div style="font-size: 2.5rem; font-weight: bold; color: var(--primary-orange); margin-bottom: 10px;">£500</div>
                            <p style="color: var(--accent-black); margin-bottom: 20px;">Provides home repair for elderly in need</p>
                            <a href="{{ url('/sponsor') }}?amount=500" class="donate-btn" style="background: var(--primary-blue); color: white; padding: 12px 25px; border-radius: 25px; text-decoration: none; font-weight: 600; display: inline-block; transition: all 0.3s ease;">
                                Fund Home Repair
                            </a>
                        </div>
                    </div>
                </div>

                <div class="highlight-image" style="position: relative;">
                    <img src="{{ asset('images/projects/medical-team.jpg') }}" alt="Our Medical Team" style="width: 100%; height: 350px; object-fit: cover; border-radius: 15px; box-shadow: var(--shadow);">
                    <div style="position: absolute; bottom: 0; left: 0; right: 0; background: linear-gradient(transparent, rgba(0,0,0,0.8)); color: white; padding: 20px; border-radius: 0 0 15px 15px;">
                        <h4 style="margin-bottom: 5px;">Our Dedicated Medical Team</h4>
                        <p style="opacity: 0.9;">Doctors, nurses, and volunteers committed to serving Uganda's elderly</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Volunteer Opportunities -->
    <section class="volunteer-section animate-on-scroll">
        <h2 class="section-title">Medical Volunteer Opportunities</h2>
        <p class="section-subtitle">Join our team of healthcare professionals making a difference</p>

        <div class="involvement-options" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin: 60px 0;">
            <div class="option-card animate-up" style="background: white; padding: 40px 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); border-top: 5px solid #4CAF50; transition: all 0.3s ease; text-align: center;">
                <div class="option-icon" style="width: 70px; height: 70px; background: #4CAF50; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; margin: 0 auto 25px;">
                    <i class="fas fa-user-md"></i>
                </div>
                <h3 style="color: var(--primary-blue); margin-bottom: 15px; font-size: 1.5rem;">Medical Doctors</h3>
                <p style="color: var(--accent-black); margin-bottom: 20px; line-height: 1.6;">Provide consultations and treatments during medical camps</p>
                <a href="{{ url('/get-involved') }}#medical-volunteer" class="option-link" style="color: #4CAF50; text-decoration: none; font-weight: bold; display: inline-flex; align-items: center; gap: 8px; transition: gap 0.3s ease;">
                    Apply Now <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="option-card animate-up delay-200" style="background: white; padding: 40px 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); border-top: 5px solid #4CAF50; transition: all 0.3s ease; text-align: center;">
                <div class="option-icon" style="width: 70px; height: 70px; background: #4CAF50; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; margin: 0 auto 25px;">
                    <i class="fas fa-user-nurse"></i>
                </div>
                <h3 style="color: var(--primary-blue); margin-bottom: 15px; font-size: 1.5rem;">Nurses</h3>
                <p style="color: var(--accent-black); margin-bottom: 20px; line-height: 1.6;">Assist with patient care and medication distribution</p>
                <a href="{{ url('/get-involved') }}#nurse-volunteer" class="option-link" style="color: #4CAF50; text-decoration: none; font-weight: bold; display: inline-flex; align-items: center; gap: 8px; transition: gap 0.3s ease;">
                    Apply Now <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="option-card animate-up delay-400" style="background: white; padding: 40px 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); border-top: 5px solid #4CAF50; transition: all 0.3s ease; text-align: center;">
                <div class="option-icon" style="width: 70px; height: 70px; background: #4CAF50; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.8rem; margin: 0 auto 25px;">
                    <i class="fas fa-ambulance"></i>
                </div>
                <h3 style="color: var(--primary-blue); margin-bottom: 15px; font-size: 1.5rem;">Logistics Team</h3>
                <p style="color: var(--accent-black); margin-bottom: 20px; line-height: 1.6;">Help with camp setup, transportation, and organization</p>
                <a href="{{ url('/get-involved') }}#logistics-volunteer" class="option-link" style="color: #4CAF50; text-decoration: none; font-weight: bold; display: inline-flex; align-items: center; gap: 8px; transition: gap 0.3s ease;">
                    Apply Now <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="involvement-cta" style="background: linear-gradient(135deg, #4CAF50, #2E7D32); color: white; padding: 50px; border-radius: 20px; margin-top: 60px; text-align: center;">
            <p style="font-size: 1.3rem; margin-bottom: 30px;">
                <strong>Not a medical professional?</strong> We also need volunteers for community outreach, data entry, and camp support.
            </p>
            <a href="{{ url('/get-involved') }}" class="cta-button" style="background: white; color: #4CAF50; padding: 18px 45px; border-radius: 30px; text-decoration: none; font-size: 1.2rem; font-weight: 600; display: inline-flex; align-items: center; gap: 15px; transition: all 0.3s ease;">
                <i class="fas fa-hands-helping"></i> View All Volunteer Roles
            </a>
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

    .donation-options > div:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .donate-btn:hover {
        transform: scale(1.05);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .option-link:hover {
        gap: 15px;
        color: var(--primary-orange) !important;
    }

    .cta-button:hover {
        background: var(--primary-orange) !important;
        color: white !important;
        transform: translateY(-5px);
    }

    .gallery-thumb:hover {
        opacity: 1 !important;
        transform: scale(1.05);
    }

    .gallery-thumb.active {
        opacity: 1 !important;
        border: 2px solid var(--primary-orange);
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .highlight-content {
            grid-template-columns: 1fr;
        }

        .donation-options {
            grid-template-columns: 1fr !important;
        }
    }

    @media (max-width: 768px) {
        .mission-cards {
            grid-template-columns: 1fr !important;
        }

        .school-images {
            grid-template-columns: 1fr !important;
        }

        .main-school-image {
            height: 200px !important;
        }

        .school-gallery {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .partnership-cards {
            grid-template-columns: 1fr !important;
        }

        .involvement-options {
            grid-template-columns: 1fr !important;
        }

        .involvement-cta {
            padding: 40px 25px !important;
        }

        .gallery-thumbs {
            grid-template-columns: repeat(4, 1fr) !important;
        }
    }

    @media (max-width: 480px) {
        .impact-stats {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .gallery-thumbs {
            grid-template-columns: repeat(2, 1fr) !important;
        }

        .program-features > div {
            padding: 10px !important;
        }

        .highlight-image {
            height: 250px !important;
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
        function changeGalleryImage(element) {
            const mainImage = document.getElementById('mainGalleryImage');
            const thumbs = document.querySelectorAll('.gallery-thumb');

            // Remove active class from all thumbs
            thumbs.forEach(thumb => {
                thumb.classList.remove('active');
                thumb.style.opacity = '0.7';
            });

            // Add active class to clicked thumb
            element.classList.add('active');
            element.style.opacity = '1';

            // Change main image
            const newSrc = element.getAttribute('data-src');
            const newAlt = element.querySelector('img').alt;

            mainImage.src = newSrc;
            mainImage.alt = newAlt;
        }

        // Set first thumbnail as active initially
        const firstThumb = document.querySelector('.gallery-thumb');
        if (firstThumb) {
            firstThumb.classList.add('active');
            firstThumb.style.opacity = '1';
        }

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

        // Donation option hover effects
        document.querySelectorAll('.donation-options > div').forEach(option => {
            option.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px)';
            });

            option.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    });
</script>
@endsection
