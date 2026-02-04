@extends('layouts.app')

@section('title', 'Special Projects')
@section('content')

<div class="hero" style="background: linear-gradient(rgba(0, 71, 171, 0.85), rgba(0, 71, 171, 0.9)), url('/images/projects-bg.jpg');">
    <h1>Building for the Future</h1>
    <p>Transformative projects that create sustainable change in Ugandan communities.</p>
</div>

<div class="container">
    <!-- Main Land Project -->
    <div style="background: linear-gradient(135deg, #FFF9F0, #FFF3E0); padding: 40px; border-radius: 15px; margin: 40px 0; position: relative; overflow: hidden;">
        <div style="position: absolute; top: 0; right: 0; background: var(--primary-orange); color: white; padding: 10px 30px; transform: rotate(45deg) translate(30px, -10px); font-weight: bold; font-size: 0.9rem;">
            URGENT PRIORITY
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; align-items: center;">
            <div>
                <h2 style="color: var(--primary-blue); font-size: 2.2rem; margin-bottom: 20px; line-height: 1.2;">
                    <i class="fas fa-seedling" style="color: #4CAF50; margin-right: 10px;"></i>
                    Land Acquisition Project 2024
                </h2>
                <p style="font-size: 1.1rem; margin-bottom: 25px; line-height: 1.8;">
                    Our most critical project: Acquiring 10 acres of land in Wakiso District to build a comprehensive center that will serve over 1,000 vulnerable people annually.
                </p>

                <div style="background: white; padding: 25px; border-radius: 10px; margin-bottom: 30px; border-left: 5px solid var(--primary-orange);">
                    <h3 style="color: var(--primary-blue); margin-bottom: 15px;">Why This Land is Essential</h3>
                    <ul style="margin-left: 20px;">
                        <li style="margin-bottom: 10px;">Current rented facilities are overcrowded and inadequate</li>
                        <li style="margin-bottom: 10px;">Rising orphan cases due to HIV/AIDS require expanded capacity</li>
                        <li style="margin-bottom: 10px;">Need for integrated services in one location</li>
                        <li>Long-term sustainability through on-site agriculture</li>
                    </ul>
                </div>

                <div style="display: flex; gap: 20px; margin-top: 30px;">
                    <div style="text-align: center;">
                        <div style="font-size: 2.5rem; color: var(--primary-orange); font-weight: bold;">10</div>
                        <div>Acres Needed</div>
                    </div>
                    <div style="text-align: center;">
                        <div style="font-size: 2.5rem; color: var(--primary-orange); font-weight: bold;">£177,778</div>
                        <div>Total Cost</div>
                    </div>
                    <div style="text-align: center;">
                        <div style="font-size: 2.5rem; color: var(--primary-orange); font-weight: bold;">1,000+</div>
                        <div>Annual Beneficiaries</div>
                    </div>
                </div>
            </div>

            <div>
                <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                    <h3 style="color: var(--primary-blue); margin-bottom: 20px; text-align: center;">Project Timeline</h3>
                    <div style="position: relative; padding-left: 30px;">
                        <div style="position: absolute; left: 0; top: 0; bottom: 0; width: 3px; background: var(--primary-orange);"></div>

                        <div style="position: relative; margin-bottom: 30px;">
                            <div style="position: absolute; left: -38px; top: 0; width: 15px; height: 15px; background: var(--primary-orange); border-radius: 50%;"></div>
                            <div style="background: #E3F2FD; padding: 15px; border-radius: 8px;">
                                <div style="font-weight: bold; color: var(--primary-blue);">Q2 2024</div>
                                <div>Land acquisition & legal processes</div>
                            </div>
                        </div>

                        <div style="position: relative; margin-bottom: 30px;">
                            <div style="position: absolute; left: -38px; top: 0; width: 15px; height: 15px; background: var(--primary-blue); border-radius: 50%;"></div>
                            <div style="background: #FFF3E0; padding: 15px; border-radius: 8px;">
                                <div style="font-weight: bold; color: var(--primary-orange);">Q3-Q4 2024</div>
                                <div>Infrastructure planning & design</div>
                            </div>
                        </div>

                        <div style="position: relative; margin-bottom: 30px;">
                            <div style="position: absolute; left: -38px; top: 0; width: 15px; height: 15px; background: var(--primary-orange); border-radius: 50%;"></div>
                            <div style="background: #E8F5E9; padding: 15px; border-radius: 8px;">
                                <div style="font-weight: bold; color: #4CAF50;">2025</div>
                                <div>Phase 1 construction: School & clinic</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 40px;">
            <a href="/sponsor" class="cta-button" style="padding: 15px 50px; font-size: 1.2rem;">
                <i class="fas fa-donate"></i> Fund This Project
            </a>
            <a href="#vision" style="margin-left: 20px; color: var(--primary-blue); font-weight: bold; text-decoration: none;">
                <i class="fas fa-eye"></i> See the Full Vision
            </a>
        </div>
    </div>

    <h2 class="section-title" id="vision">The Future SDF Center Vision</h2>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin: 40px 0;">
        @foreach([
            ['icon' => 'fa-school', 'title' => 'Primary School', 'desc' => 'Modern classrooms for 300+ orphaned and vulnerable children', 'color' => '#2196F3'],
            ['icon' => 'fa-clinic-medical', 'title' => 'Medical Clinic', 'desc' => 'Healthcare services for children and community members', 'color' => '#4CAF50'],
            ['icon' => 'fa-home', 'title' => 'Dormitories', 'desc' => 'Safe housing for 150 orphaned children', 'color' => '#FF9800'],
            ['icon' => 'fa-laptop', 'title' => 'Computer Lab', 'desc' => 'Digital skills training for youth empowerment', 'color' => '#9C27B0'],
            ['icon' => 'fa-music', 'title' => 'Music & Arts Center', 'desc' => 'Talent development and therapeutic arts programs', 'color' => '#E91E63'],
            ['icon' => 'fa-seedling', 'title' => 'Agricultural Projects', 'desc' => 'Piggery, poultry, and food gardens for sustainability', 'color' => '#8BC34A'],
            ['icon' => 'fa-futbol', 'title' => 'Sports Facilities', 'desc' => 'Football pitch and playground for physical development', 'color' => '#009688'],
            ['icon' => 'fa-industry', 'title' => 'Vocational Workshops', 'desc' => 'Training in carpentry, tailoring, and construction', 'color' => '#795548']
        ] as $facility)
        <div style="background: white; padding: 25px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.08); text-align: center; border-top: 5px solid {{ $facility['color'] }}; transition: transform 0.3s;">
            <div style="font-size: 2.5rem; color: {{ $facility['color'] }}; margin-bottom: 20px;">
                <i class="fas {{ $facility['icon'] }}"></i>
            </div>
            <h3 style="color: var(--primary-blue); margin-bottom: 15px;">{{ $facility['title'] }}</h3>
            <p>{{ $facility['desc'] }}</p>
        </div>
        @endforeach
    </div>

    <!-- Funding Breakdown -->
    <div style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.1); margin: 60px 0;">
        <h2 style="color: var(--primary-blue); text-align: center; margin-bottom: 40px;">Project Funding Breakdown</h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px; margin-bottom: 40px;">
            <div>
                <h3 style="color: var(--primary-orange); margin-bottom: 20px;">Land Acquisition</h3>
                <div style="height: 20px; background: #E0E0E0; border-radius: 10px; overflow: hidden; margin-bottom: 10px;">
                    <div style="width: 100%; height: 100%; background: var(--primary-orange);"></div>
                </div>
                <div style="display: flex; justify-content: space-between; font-size: 0.9rem;">
                    <span>£177,778</span>
                    <span>100% of land cost</span>
                </div>
            </div>

            <div>
                <h3 style="color: var(--primary-blue); margin-bottom: 20px;">Phase 1 Construction</h3>
                <div style="height: 20px; background: #E0E0E0; border-radius: 10px; overflow: hidden; margin-bottom: 10px;">
                    <div style="width: 40%; height: 100%; background: var(--primary-blue);"></div>
                </div>
                <div style="display: flex; justify-content: space-between; font-size: 0.9rem;">
                    <span>£80,000</span>
                    <span>40% of £200,000 goal</span>
                </div>
            </div>

            <div>
                <h3 style="color: #4CAF50; margin-bottom: 20px;">Equipment & Furnishings</h3>
                <div style="height: 20px; background: #E0E0E0; border-radius: 10px; overflow: hidden; margin-bottom: 10px;">
                    <div style="width: 25%; height: 100%; background: #4CAF50;"></div>
                </div>
                <div style="display: flex; justify-content: space-between; font-size: 0.9rem;">
                    <span>£15,000</span>
                    <span>25% of £60,000 goal</span>
                </div>
            </div>
        </div>

        <div style="text-align: center; background: #F5F9FF; padding: 30px; border-radius: 10px; margin-top: 40px;">
            <h3 style="color: var(--primary-blue); margin-bottom: 15px;">Naming Opportunities</h3>
            <p style="margin-bottom: 25px;">Your generous contribution can permanently name facilities within the new center:</p>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px;">
                <div style="background: white; padding: 15px; border-radius: 8px; border: 2px solid #E0E0E0;">
                    <div style="font-weight: bold; color: var(--primary-blue);">Library</div>
                    <div style="color: var(--primary-orange); font-weight: bold;">£10,000</div>
                </div>
                <div style="background: white; padding: 15px; border-radius: 8px; border: 2px solid #E0E0E0;">
                    <div style="font-weight: bold; color: var(--primary-blue);">Computer Lab</div>
                    <div style="color: var(--primary-orange); font-weight: bold;">£15,000</div>
                </div>
                <div style="background: white; padding: 15px; border-radius: 8px; border: 2px solid #E0E0E0;">
                    <div style="font-weight: bold; color: var(--primary-blue);">Classroom Block</div>
                    <div style="color: var(--primary-orange); font-weight: bold;">£25,000</div>
                </div>
                <div style="background: white; padding: 15px; border-radius: 8px; border: 2px solid #E0E0E0;">
                    <div style="font-weight: bold; color: var(--primary-blue);">Medical Clinic</div>
                    <div style="color: var(--primary-orange); font-weight: bold;">£30,000</div>
                </div>
            </div>
        </div>
    </div>


    <!-- School Partnership Expansion Project -->
<div class="expansion-project animate-on-scroll">
    <div class="project-header">
        <h2><i class="fas fa-school"></i> School Partnership Expansion Project</h2>
        <div class="project-status">Active Partnership</div>
    </div>

    <div class="project-overview">
        <div class="project-vision">
            <h3>Expanding Educational Access</h3>
            <p>Building on our successful partnerships with Bushenyi Preparatory and Prime Junior Primary, we're expanding our educational outreach to reach more orphaned and vulnerable children.</p>

            <div class="current-partners">
                <h4>Current School Partners:</h4>
                <div class="partner-logos">
                    <div class="partner-logo">
                        <div class="logo-placeholder" style="background: linear-gradient(135deg, #0047AB, #0066CC);">
                            <i class="fas fa-university"></i>
                            <span>Bushenyi Preparatory</span>
                        </div>
                        <p>Primary Education Partner<br>Since 2018</p>
                    </div>
                    <div class="partner-logo">
                        <div class="logo-placeholder" style="background: linear-gradient(135deg, #FF6B35, #FF8B35);">
                            <i class="fas fa-graduation-cap"></i>
                            <span>Prime Junior Primary</span>
                        </div>
                        <p>Early Childhood Partner<br>Since 2020</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="project-images">
            <div class="project-gallery">
                <div class="gallery-main">
                    <img src="{{ asset('images/schools/school-composite.jpg') }}" alt="School Partnership Composite">
                </div>
                <div class="gallery-thumbs">
                    <img src="{{ asset('images/schools/bushenyi-campus.jpg') }}" alt="Bushenyi Campus">
                    <img src="{{ asset('images/schools/prime-campus.jpg') }}" alt="Prime Campus">
                    <img src="{{ asset('images/schools/students-together.jpg') }}" alt="Students Together">
                </div>
            </div>
        </div>
    </div>

    <div class="project-goals">
        <h3>Project Goals & Timeline</h3>
        <div class="goals-timeline">
            <div class="timeline-item">
                <div class="timeline-date">2024</div>
                <div class="timeline-content">
                    <h5>Phase 1: Strengthen Current Partnerships</h5>
                    <ul>
                        <li>Increase sponsored children from 100 to 150</li>
                        <li>Provide digital learning equipment</li>
                        <li>Teacher training programs</li>
                    </ul>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2025</div>
                <div class="timeline-content">
                    <h5>Phase 2: Add New School Partners</h5>
                    <ul>
                        <li>Partner with 2 additional schools</li>
                        <li>Expand to secondary education</li>
                        <li>Vocational training integration</li>
                    </ul>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-date">2026</div>
                <div class="timeline-content">
                    <h5>Phase 3: Build Educational Center</h5>
                    <ul>
                        <li>Construct dedicated learning center</li>
                        <li>Computer and science labs</li>
                        <li>Library and resource center</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="funding-needs">
        <h3>Funding Needs for School Partnerships</h3>
        <div class="funding-breakdown">
            <div class="funding-item">
                <div class="funding-label">School Fees & Supplies</div>
                <div class="funding-amount">£40,000/year</div>
                <div class="funding-progress" style="width: 60%;"></div>
                <span class="progress-text">60% Funded</span>
            </div>
            <div class="funding-item">
                <div class="funding-label">Infrastructure Improvements</div>
                <div class="funding-amount">£25,000</div>
                <div class="funding-progress" style="width: 30%;"></div>
                <span class="progress-text">30% Funded</span>
            </div>
            <div class="funding-item">
                <div class="funding-label">Nutrition Program</div>
                <div class="funding-amount">£15,000/year</div>
                <div class="funding-progress" style="width: 75%;"></div>
                <span class="progress-text">75% Funded</span>
            </div>
        </div>
    </div>

    <div class="project-cta">
        <p><strong>Support our educational partnerships</strong> and help orphaned children receive the quality education they deserve.</p>
        <div class="cta-buttons">
            <a href="/sponsor" class="cta-button">
                <i class="fas fa-graduation-cap"></i> Sponsor a Child
            </a>
            <a href="/donate#education" class="cta-button secondary">
                <i class="fas fa-donate"></i> Donate to Education
            </a>
            <a href="/contact#partnership" class="cta-button outline">
                <i class="fas fa-handshake"></i> School Partnership Inquiry
            </a>
        </div>
    </div>
</div>

    <!-- Partnership Opportunities -->
    <div style="background: linear-gradient(135deg, var(--primary-blue), #003388); color: white; padding: 50px; border-radius: 15px; text-align: center; margin: 60px 0;">
        <h2 style="font-size: 2rem; margin-bottom: 20px;">Become a Project Partner</h2>
        <p style="font-size: 1.1rem; max-width: 700px; margin: 0 auto 30px;">
            Corporations, foundations, and major donors can partner with us to make this vision a reality
        </p>
        <div style="display: flex; gap: 20px; justify-content: center; flex-wrap: wrap; margin-top: 40px;">
            <a href="/contact" class="cta-button" style="background-color: white; color: var(--primary-blue); padding: 15px 40px;">
                <i class="fas fa-handshake"></i> Partnership Inquiry
            </a>
            <a href="/sponsor" class="cta-button" style="background-color: var(--primary-orange); color: white; padding: 15px 40px;">
                <i class="fas fa-donate"></i> Make a Major Gift
            </a>
            <a href="/get-involved" class="cta-button" style="background-color: #4CAF50; color: white; padding: 15px 40px;">
                <i class="fas fa-users"></i> Start a Fundraiser
            </a>
        </div>
    </div>
</div>

<style>
.facility-card:hover {
    transform: translateY(-10px);
}
</style>

@endsection
