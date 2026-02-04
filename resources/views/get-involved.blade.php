@extends('layouts.app')

@section('title', 'Get Involved - Join Our Mission')
@section('content')

<!-- Hero Section -->
<div class="hero-slideshow" style="height: 60vh; min-height: 500px;">
    <div class="slide active" style="background-image: url('{{ asset('images/involved/hero-involved.jpg') }}');">
        <div class="slide-overlay">
            <div class="slide-text">
                <h2>Join Our Movement</h2>
                <p>Together, we can create lasting change in Uganda</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Impact Statement -->
    <div class="impact-statement animate-on-scroll">
        <h2>Your Action Creates Ripple Effects</h2>
        <p>Every effort you make multiplies across communities, creating sustainable transformation that reaches far beyond the initial impact.</p>

        <div class="impact-visual">
            <div class="impact-circle">
                <div class="circle-center">You</div>
                <div class="circle-ring">
                    <span>1 Volunteer</span>
                    <span>→</span>
                    <span>5 Children Mentored</span>
                </div>
                <div class="circle-ring">
                    <span>1 Donation</span>
                    <span>→</span>
                    <span>10 Lives Impacted</span>
                </div>
                <div class="circle-ring">
                    <span>1 Advocate</span>
                    <span>→</span>
                    <span>50 Community Members</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Ways to Get Involved -->
    <h2 class="section-title animate-on-scroll">Choose Your Path to Impact</h2>

    <div class="involvement-options animate-on-scroll">
        <div class="involvement-card">
            <div class="card-header volunteer">
                <i class="fas fa-hands-helping"></i>
                <h3>Volunteer</h3>
            </div>
            <div class="card-content">
                <p><strong>Share your time and skills</strong> to directly impact vulnerable communities</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> On-site volunteering in Uganda</li>
                    <li><i class="fas fa-check-circle"></i> Virtual mentoring programs</li>
                    <li><i class="fas fa-check-circle"></i> Skill-based volunteering (IT, education, healthcare)</li>
                    <li><i class="fas fa-check-circle"></i> Short-term mission trips</li>
                    <li><i class="fas fa-check-circle"></i> Professional services (legal, accounting, marketing)</li>
                </ul>
                <div class="card-image">
                    <img src="{{ asset('images/involved/volunteer.jpg') }}" alt="Volunteering">
                </div>
                <a href="#volunteer-form" class="action-button">
                    <i class="fas fa-user-plus"></i> Apply to Volunteer
                </a>
            </div>
        </div>

        <div class="involvement-card animate-on-scroll delay-200">
            <div class="card-header fundraiser">
                <i class="fas fa-hand-holding-heart"></i>
                <h3>Fundraise</h3>
            </div>
            <div class="card-content">
                <p><strong>Create your own campaign</strong> and inspire others to join our cause</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Birthday fundraiser</li>
                    <li><i class="fas fa-check-circle"></i> Sports challenge or marathon</li>
                    <li><i class="fas fa-check-circle"></i> Community event or concert</li>
                    <li><i class="fas fa-check-circle"></i> Corporate matching programs</li>
                    <li><i class="fas fa-check-circle"></i> Social media campaigns</li>
                </ul>
                <div class="success-tip">
                    <i class="fas fa-lightbulb"></i>
                    <p>People are 65% more likely to donate when they see friends participating</p>
                </div>
                <div class="card-image">
                    <img src="{{ asset('images/involved/fundraiser.jpg') }}" alt="Fundraising">
                </div>
                <a href="#fundraiser-tools" class="action-button">
                    <i class="fas fa-rocket"></i> Start Fundraising
                </a>
            </div>
        </div>

        <div class="involvement-card animate-on-scroll delay-400">
            <div class="card-header partner">
                <i class="fas fa-handshake"></i>
                <h3>Partner</h3>
            </div>
            <div class="card-content">
                <p><strong>Align your organization</strong> with our mission for greater impact</p>
                <ul>
                    <li><i class="fas fa-check-circle"></i> Corporate Social Responsibility (CSR) programs</li>
                    <li><i class="fas fa-check-circle"></i> Employee engagement initiatives</li>
                    <li><i class="fas fa-check-circle"></i> Cause marketing partnerships</li>
                    <li><i class="fas fa-check-circle"></i> Long-term strategic partnerships</li>
                    <li><i class="fas fa-check-circle"></i> In-kind donations and services</li>
                </ul>
                <div class="partner-logos">
                    <div class="logo-placeholder">Your Logo Here</div>
                    <div class="logo-placeholder">Company Partnership</div>
                </div>
                <a href="/contact" class="action-button">
                    <i class="fas fa-briefcase"></i> Partnership Inquiry
                </a>
            </div>
        </div>
    </div>

    <!-- Volunteer Application Form -->
    <div class="form-section animate-on-scroll" id="volunteer-form">
        <h2 class="section-title">Volunteer Application</h2>

        <div class="application-form">
            <div class="form-progress">
                <div class="progress-step active">1</div>
                <div class="progress-step">2</div>
                <div class="progress-step">3</div>
                <div class="progress-step">4</div>
            </div>

            <form id="volunteerForm">
                <div class="form-page active" id="page1">
                    <h3><i class="fas fa-user"></i> Personal Information</h3>
                    <div class="form-grid">
                        <input type="text" placeholder="First Name *" required>
                        <input type="text" placeholder="Last Name *" required>
                        <input type="email" placeholder="Email Address *" required>
                        <input type="tel" placeholder="Phone Number *" required>
                        <input type="text" placeholder="Country *" required>
                        <input type="text" placeholder="City *" required>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="next-button" onclick="nextPage(2)">
                            Next: Skills <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <div class="form-page" id="page2">
                    <h3><i class="fas fa-tools"></i> Skills & Experience</h3>
                    <div class="skills-selection">
                        <h4>Select Your Skills:</h4>
                        <div class="skills-grid">
                            <label class="skill-checkbox">
                                <input type="checkbox" name="skills[]" value="teaching">
                                <span>Teaching/Education</span>
                            </label>
                            <label class="skill-checkbox">
                                <input type="checkbox" name="skills[]" value="medical">
                                <span>Medical/Healthcare</span>
                            </label>
                            <label class="skill-checkbox">
                                <input type="checkbox" name="skills[]" value="construction">
                                <span>Construction/Building</span>
                            </label>
                            <label class="skill-checkbox">
                                <input type="checkbox" name="skills[]" value="agriculture">
                                <span>Agriculture/Farming</span>
                            </label>
                            <label class="skill-checkbox">
                                <input type="checkbox" name="skills[]" value="technology">
                                <span>Technology/IT</span>
                            </label>
                            <label class="skill-checkbox">
                                <input type="checkbox" name="skills[]" value="counseling">
                                <span>Counseling/Psychology</span>
                            </label>
                            <label class="skill-checkbox">
                                <input type="checkbox" name="skills[]" value="business">
                                <span>Business/Entrepreneurship</span>
                            </label>
                            <label class="skill-checkbox">
                                <input type="checkbox" name="skills[]" value="arts">
                                <span>Arts/Creative</span>
                            </label>
                        </div>
                    </div>
                    <div class="availability">
                        <h4>Availability:</h4>
                        <div class="availability-options">
                            <label class="availability-option">
                                <input type="radio" name="availability" value="virtual" checked>
                                <div class="option-content">
                                    <i class="fas fa-laptop"></i>
                                    <span>Virtual/Remote</span>
                                    <small>Work from anywhere</small>
                                </div>
                            </label>
                            <label class="availability-option">
                                <input type="radio" name="availability" value="onsite-short">
                                <div class="option-content">
                                    <i class="fas fa-plane"></i>
                                    <span>On-site (Short-term)</span>
                                    <small>1-4 weeks in Uganda</small>
                                </div>
                            </label>
                            <label class="availability-option">
                                <input type="radio" name="availability" value="onsite-long">
                                <div class="option-content">
                                    <i class="fas fa-home"></i>
                                    <span>On-site (Long-term)</span>
                                    <small>3+ months in Uganda</small>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="back-button" onclick="prevPage(1)">
                            <i class="fas fa-arrow-left"></i> Back
                        </button>
                        <button type="button" class="next-button" onclick="nextPage(3)">
                            Next: Motivation <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <div class="form-page" id="page3">
                    <h3><i class="fas fa-heart"></i> Your Motivation</h3>
                    <div class="motivation-section">
                        <label>Why do you want to volunteer with us? *</label>
                        <textarea rows="4" placeholder="Share your motivation and what you hope to achieve..." required></textarea>

                        <label>How did you hear about us? *</label>
                        <select required>
                            <option value="">Select an option</option>
                            <option value="website">Website</option>
                            <option value="social-media">Social Media</option>
                            <option value="friend">Friend/Family</option>
                            <option value="event">Event/Conference</option>
                            <option value="search">Search Engine</option>
                            <option value="other">Other</option>
                        </select>

                        <label>Relevant experience or background:</label>
                        <textarea rows="3" placeholder="Briefly describe any relevant experience..."></textarea>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="back-button" onclick="prevPage(2)">
                            <i class="fas fa-arrow-left"></i> Back
                        </button>
                        <button type="button" class="next-button" onclick="nextPage(4)">
                            Next: Review <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <div class="form-page" id="page4">
                    <h3><i class="fas fa-clipboard-check"></i> Review & Submit</h3>
                    <div class="review-section">
                        <div class="review-item">
                            <strong>Personal Information:</strong>
                            <span id="reviewName">[Name will appear here]</span>
                        </div>
                        <div class="review-item">
                            <strong>Skills Selected:</strong>
                            <span id="reviewSkills">[Skills will appear here]</span>
                        </div>
                        <div class="review-item">
                            <strong>Availability:</strong>
                            <span id="reviewAvailability">[Availability will appear here]</span>
                        </div>
                        <div class="review-item">
                            <strong>Motivation:</strong>
                            <span id="reviewMotivation">[Preview of motivation]</span>
                        </div>
                    </div>

                    <div class="terms-agreement">
                        <label class="terms-checkbox">
                            <input type="checkbox" required>
                            <span>I agree to the <a href="#">Volunteer Terms & Conditions</a> and understand that this is an unpaid volunteer position.</span>
                        </label>
                        <label class="terms-checkbox">
                            <input type="checkbox" required>
                            <span>I consent to my data being processed according to the <a href="#">Privacy Policy</a>.</span>
                        </label>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="back-button" onclick="prevPage(3)">
                            <i class="fas fa-arrow-left"></i> Back
                        </button>
                        <button type="submit" class="submit-button">
                            <i class="fas fa-paper-plane"></i> Submit Application
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Fundraiser Tools -->
    <div class="tools-section animate-on-scroll" id="fundraiser-tools">
        <h2 class="section-title">Fundraising Tools & Resources</h2>

        <div class="tools-grid">
            <div class="tool-card">
                <div class="tool-icon">
                    <i class="fas fa-palette"></i>
                </div>
                <h3>Campaign Materials</h3>
                <p>Download logos, templates, and promotional materials for your fundraiser</p>
                <a href="#" class="tool-link">Download Kit</a>
            </div>

            <div class="tool-card delay-200">
                <div class="tool-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3>Progress Tracker</h3>
                <p>Track your fundraising progress with our interactive dashboard</p>
                <a href="#" class="tool-link">Track Progress</a>
            </div>

            <div class="tool-card delay-400">
                <div class="tool-icon">
                    <i class="fas fa-share-alt"></i>
                </div>
                <h3>Social Media Toolkit</h3>
                <p>Pre-written posts and images for sharing on social media</p>
                <a href="#" class="tool-link">Get Toolkit</a>
            </div>

            <div class="tool-card delay-600">
                <div class="tool-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <h3>Recognition Program</h3>
                <p>Get recognized for your fundraising achievements</p>
                <a href="#" class="tool-link">View Rewards</a>
            </div>
        </div>
    </div>

    <!-- Success Stories -->
    <h2 class="section-title animate-on-scroll">Volunteer Success Stories</h2>

    <div class="success-stories animate-on-scroll">
        <div class="story-slider">
            <div class="story-slide active">
                <div class="story-image">
                    <img src="{{ asset('images/involved/volunteer1.jpg') }}" alt="Volunteer Story">
                </div>
                <div class="story-content">
                    <h4>Sarah's Teaching Journey</h4>
                    <p>"Spending 3 months teaching English in Uganda was life-changing. The children's eagerness to learn inspired me to continue supporting their education remotely."</p>
                    <div class="story-meta">
                        <span>Sarah K., Volunteer Teacher</span>
                        <span>2023</span>
                    </div>
                </div>
            </div>

            <div class="story-slide">
                <div class="story-content">
                    <h4>TechCorp Team Building</h4>
                    <p>"Our company's volunteer trip to build a computer lab not only helped the community but transformed our team's collaboration and purpose."</p>
                    <div class="story-meta">
                        <span>TechCorp Uganda Team</span>
                        <span>2024</span>
                    </div>
                </div>
                <div class="story-image">
                    <img src="{{ asset('images/involved/volunteer2.jpg') }}" alt="Volunteer Story">
                </div>
            </div>
        </div>

        <div class="story-controls">
            <button class="story-prev"><i class="fas fa-chevron-left"></i></button>
            <div class="story-dots">
                <div class="story-dot active"></div>
                <div class="story-dot"></div>
            </div>
            <button class="story-next"><i class="fas fa-chevron-right"></i></button>
        </div>
    </div>

    <!-- Quick Action Section -->
    <div class="quick-action animate-on-scroll">
        <h2>Take Your First Step Today</h2>
        <p>Join hundreds of changemakers already making a difference</p>
        <div class="action-buttons">
            <a href="#volunteer-form" class="cta-button">
                <i class="fas fa-user-plus"></i> Apply to Volunteer
            </a>
            <a href="/sponsor" class="cta-button secondary">
                <i class="fas fa-donate"></i> Make a Donation
            </a>
            <a href="/contact" class="cta-button outline">
                <i class="fas fa-envelope"></i> Contact Us
            </a>
        </div>
    </div>
</div>

<style>
    /* Impact Statement */
    .impact-statement {
        text-align: center;
        margin: 80px 0;
        padding: 40px;
        background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark));
        color: white;
        border-radius: 25px;
    }

    .impact-statement h2 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .impact-statement p {
        font-size: 1.2rem;
        max-width: 800px;
        margin: 0 auto 40px;
        line-height: 1.7;
    }

    .impact-visual {
        display: flex;
        justify-content: center;
        margin-top: 40px;
    }

    .impact-circle {
        position: relative;
        width: 300px;
        height: 300px;
    }

    .circle-center {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: var(--primary-orange);
        color: white;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
        z-index: 3;
    }

    .circle-ring {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
        color: white;
        font-size: 0.9rem;
        padding: 20px;
        text-align: center;
    }

    .circle-ring:nth-child(2) {
        width: 200px;
        height: 200px;
        animation: rotate 20s linear infinite;
    }

    .circle-ring:nth-child(3) {
        width: 250px;
        height: 250px;
        animation: rotate 25s linear infinite reverse;
    }

    .circle-ring:nth-child(4) {
        width: 300px;
        height: 300px;
        animation: rotate 30s linear infinite;
    }

    @keyframes rotate {
        100% { transform: translate(-50%, -50%) rotate(360deg); }
    }

    /* Involvement Options */
    .involvement-options {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 40px;
        margin: 60px 0;
    }

    .involvement-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: all 0.3s ease;
    }

    .involvement-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
    }

    .card-header {
        padding: 30px;
        color: white;
        text-align: center;
    }

    .card-header.volunteer {
        background: linear-gradient(135deg, #4CAF50, #8BC34A);
    }

    .card-header.fundraiser {
        background: linear-gradient(135deg, #FF6B35, #FF8B35);
    }

    .card-header.partner {
        background: linear-gradient(135deg, #2196F3, #03A9F4);
    }

    .card-header i {
        font-size: 3rem;
        margin-bottom: 15px;
        display: block;
    }

    .card-header h3 {
        font-size: 1.8rem;
        margin: 0;
    }

    .card-content {
        padding: 30px;
    }

    .card-content p {
        margin-bottom: 20px;
        font-size: 1.1rem;
        line-height: 1.6;
    }

    .card-content ul {
        margin: 20px 0;
        padding-left: 0;
    }

    .card-content li {
        margin-bottom: 12px;
        display: flex;
        align-items: flex-start;
        gap: 10px;
        color: var(--accent-black);
    }

    .card-content li i {
        color: #4CAF50;
        margin-top: 3px;
    }

    .success-tip {
        background: #FFF3E0;
        padding: 20px;
        border-radius: 10px;
        margin: 20px 0;
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }

    .success-tip i {
        color: #FF9800;
        font-size: 1.5rem;
        margin-top: 2px;
    }

    .success-tip p {
        margin: 0;
        font-style: italic;
    }

    .card-image {
        height: 200px;
        border-radius: 10px;
        overflow: hidden;
        margin: 25px 0;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .involvement-card:hover .card-image img {
        transform: scale(1.1);
    }

    .partner-logos {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        margin: 25px 0;
    }

    .logo-placeholder {
        background: #F5F5F5;
        border: 2px dashed #E0E0E0;
        padding: 30px 20px;
        border-radius: 10px;
        text-align: center;
        color: #999;
        font-weight: 500;
    }

    .action-button {
        display: block;
        width: 100%;
        padding: 15px;
        background: var(--primary-orange);
        color: white;
        text-align: center;
        text-decoration: none;
        border-radius: 10px;
        font-weight: bold;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .action-button:hover {
        background: var(--primary-blue);
        transform: scale(1.05);
    }

    /* Application Form */
    .form-section {
        margin: 80px 0;
    }

    .application-form {
        background: white;
        border-radius: 20px;
        padding: 40px;
        box-shadow: var(--shadow);
    }

    .form-progress {
        display: flex;
        justify-content: space-between;
        margin-bottom: 40px;
        position: relative;
    }

    .form-progress::before {
        content: '';
        position: absolute;
        top: 25px;
        left: 0;
        right: 0;
        height: 3px;
        background: #E0E0E0;
        z-index: 1;
    }

    .progress-step {
        width: 50px;
        height: 50px;
        background: #E0E0E0;
        color: #666;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        font-size: 1.2rem;
        position: relative;
        z-index: 2;
        transition: all 0.3s ease;
    }

    .progress-step.active {
        background: var(--primary-orange);
        color: white;
        transform: scale(1.2);
    }

    .form-page {
        display: none;
    }

    .form-page.active {
        display: block;
    }

    .form-page h3 {
        color: var(--primary-blue);
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 15px;
        font-size: 1.4rem;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
        margin-bottom: 30px;
    }

    .form-grid input {
        width: 100%;
        padding: 15px;
        border: 2px solid #E0E0E0;
        border-radius: 10px;
        font-size: 1rem;
    }

    .form-grid input:focus {
        border-color: var(--primary-orange);
        outline: none;
    }

    .skills-selection {
        margin-bottom: 40px;
    }

    .skills-selection h4 {
        color: var(--primary-blue);
        margin-bottom: 20px;
    }

    .skills-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    .skill-checkbox {
        display: flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        padding: 15px;
        border: 2px solid #E0E0E0;
        border-radius: 10px;
        transition: all 0.3s ease;
    }

    .skill-checkbox:hover {
        border-color: var(--primary-orange);
        background: var(--primary-orange-faded);
    }

    .skill-checkbox input[type="checkbox"] {
        width: 20px;
        height: 20px;
        accent-color: var(--primary-orange);
    }

    .availability {
        margin-bottom: 40px;
    }

    .availability h4 {
        color: var(--primary-blue);
        margin-bottom: 20px;
    }

    .availability-options {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
    }

    .availability-option {
        cursor: pointer;
    }

    .availability-option input {
        display: none;
    }

    .option-content {
        border: 2px solid #E0E0E0;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        transition: all 0.3s ease;
    }

    .option-content i {
        font-size: 2rem;
        color: var(--primary-blue);
        margin-bottom: 10px;
        display: block;
    }

    .option-content span {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .option-content small {
        color: #666;
        font-size: 0.9rem;
    }

    .availability-option input:checked + .option-content {
        border-color: var(--primary-orange);
        background: var(--primary-orange-faded);
    }

    .motivation-section label {
        display: block;
        margin: 20px 0 10px;
        color: var(--primary-blue);
        font-weight: 500;
    }

    .motivation-section textarea,
    .motivation-section select {
        width: 100%;
        padding: 15px;
        border: 2px solid #E0E0E0;
        border-radius: 10px;
        font-size: 1rem;
        margin-bottom: 20px;
    }

    .motivation-section textarea:focus,
    .motivation-section select:focus {
        border-color: var(--primary-orange);
        outline: none;
    }

    .review-section {
        background: #F8F9FA;
        padding: 30px;
        border-radius: 15px;
        margin-bottom: 30px;
    }

    .review-item {
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #E0E0E0;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .review-item:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }

    .terms-agreement {
        margin-bottom: 30px;
    }

    .terms-checkbox {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 15px;
        cursor: pointer;
    }

    .terms-checkbox input[type="checkbox"] {
        width: 20px;
        height: 20px;
        accent-color: var(--primary-orange);
        margin-top: 3px;
    }

    .terms-checkbox a {
        color: var(--primary-orange);
        text-decoration: none;
    }

    .terms-checkbox a:hover {
        text-decoration: underline;
    }

    .form-actions {
        display: flex;
        justify-content: space-between;
        margin-top: 30px;
    }

    .back-button,
    .next-button,
    .submit-button {
        padding: 15px 30px;
        border-radius: 10px;
        font-weight: bold;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s ease;
        border: none;
        font-size: 1rem;
    }

    .back-button {
        background: #F0F0F0;
        color: var(--accent-black);
    }

    .next-button,
    .submit-button {
        background: var(--primary-orange);
        color: white;
    }

    .back-button:hover {
        background: #E0E0E0;
    }

    .next-button:hover,
    .submit-button:hover {
        background: var(--primary-blue);
        transform: scale(1.05);
    }

    /* Tools Section */
    .tools-section {
        margin: 80px 0;
    }

    .tools-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }

    .tool-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        text-align: center;
        box-shadow: var(--shadow);
        transition: all 0.3s ease;
        border-top: 5px solid var(--primary-orange);
    }

    .tool-card:hover {
        transform: translateY(-10px) rotate(2deg);
    }

    .tool-icon {
        width: 70px;
        height: 70px;
        background: var(--primary-orange);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 1.8rem;
    }

    .tool-card h3 {
        color: var(--primary-blue);
        margin-bottom: 15px;
        font-size: 1.3rem;
    }

    .tool-card p {
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .tool-link {
        display: inline-block;
        color: var(--primary-orange);
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .tool-link:hover {
        color: var(--primary-blue);
        transform: translateX(5px);
    }

    /* Success Stories */
    .success-stories {
        margin: 80px 0;
    }

    .story-slider {
        position: relative;
        height: 400px;
        margin-bottom: 30px;
    }

    .story-slide {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        transition: opacity 0.8s ease;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--shadow);
    }

    .story-slide.active {
        opacity: 1;
    }

    .story-image {
        height: 100%;
    }

    .story-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .story-content {
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .story-content h4 {
        color: var(--primary-blue);
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    .story-content p {
        font-size: 1.1rem;
        line-height: 1.7;
        margin-bottom: 25px;
        font-style: italic;
    }

    .story-meta {
        display: flex;
        justify-content: space-between;
        color: #666;
        font-weight: 500;
    }

    .story-controls {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
    }

    .story-prev,
    .story-next {
        background: var(--primary-orange);
        color: white;
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        cursor: pointer;
        font-size: 1.2rem;
        transition: all 0.3s ease;
    }

    .story-prev:hover,
    .story-next:hover {
        background: var(--primary-blue);
        transform: scale(1.1);
    }

    .story-dots {
        display: flex;
        gap: 15px;
    }

    .story-dot {
        width: 12px;
        height: 12px;
        background: #E0E0E0;
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .story-dot.active {
        background: var(--primary-orange);
        transform: scale(1.3);
    }

    /* Quick Action */
    .quick-action {
        text-align: center;
        padding: 60px;
        background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark));
        color: white;
        border-radius: 25px;
        margin: 80px 0;
    }

    .quick-action h2 {
        font-size: 2.2rem;
        margin-bottom: 15px;
    }

    .quick-action p {
        font-size: 1.2rem;
        margin-bottom: 40px;
        opacity: 0.9;
    }

    .action-buttons {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
    }

    .cta-button {
        display: inline-block;
        padding: 18px 45px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: bold;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .cta-button:not(.secondary):not(.outline) {
        background: var(--primary-orange);
        color: white;
    }

    .cta-button.secondary {
        background: white;
        color: var(--primary-orange);
    }

    .cta-button.outline {
        background: transparent;
        color: white;
        border: 2px solid white;
    }

    .cta-button:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .story-slide {
            grid-template-columns: 1fr;
            height: auto;
        }

        .story-image {
            height: 300px;
        }

        .availability-options {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 768px) {
        .impact-circle {
            width: 250px;
            height: 250px;
        }

        .circle-ring:nth-child(2) {
            width: 150px;
            height: 150px;
        }

        .circle-ring:nth-child(3) {
            width: 200px;
            height: 200px;
        }

        .circle-ring:nth-child(4) {
            width: 250px;
            height: 250px;
        }

        .involvement-options {
            grid-template-columns: 1fr;
        }

        .form-grid {
            grid-template-columns: 1fr;
        }

        .skills-grid {
            grid-template-columns: 1fr;
        }

        .action-buttons {
            flex-direction: column;
        }
    }

    @media (max-width: 480px) {
        .application-form {
            padding: 25px;
        }

        .story-content {
            padding: 25px;
        }

        .quick-action {
            padding: 40px 25px;
        }
    }
</style>

<script>
    let currentPage = 1;

    function nextPage(pageNum) {
        document.getElementById('page' + currentPage).classList.remove('active');
        document.getElementById('page' + pageNum).classList.add('active');

        document.querySelectorAll('.progress-step').forEach((step, index) => {
            if (index + 1 <= pageNum) {
                step.classList.add('active');
            } else {
                step.classList.remove('active');
            }
        });

        currentPage = pageNum;
        updateReview();
    }

    function prevPage(pageNum) {
        nextPage(pageNum);
    }

    function updateReview() {
        // Update name
        const firstName = document.querySelector('#page1 input[placeholder="First Name *"]').value;
        const lastName = document.querySelector('#page1 input[placeholder="Last Name *"]').value;
        if (firstName || lastName) {
            document.getElementById('reviewName').textContent = firstName + ' ' + lastName;
        }

        // Update skills
        const skills = Array.from(document.querySelectorAll('input[name="skills[]"]:checked'))
            .map(cb => cb.value);
        document.getElementById('reviewSkills').textContent =
            skills.length > 0 ? skills.join(', ') : 'No skills selected';

        // Update availability
        const availability = document.querySelector('input[name="availability"]:checked');
        if (availability) {
            const label = availability.nextElementSibling.querySelector('span').textContent;
            document.getElementById('reviewAvailability').textContent = label;
        }

        // Update motivation preview
        const motivation = document.querySelector('#page3 textarea').value;
        if (motivation) {
            const preview = motivation.length > 100 ? motivation.substring(0, 100) + '...' : motivation;
            document.getElementById('reviewMotivation').textContent = preview;
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Story slider
        const slides = document.querySelectorAll('.story-slide');
        const dots = document.querySelectorAll('.story-dot');
        let currentSlide = 0;

        function showStorySlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));

            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        document.querySelector('.story-next').addEventListener('click', () => {
            showStorySlide(currentSlide + 1);
        });

        document.querySelector('.story-prev').addEventListener('click', () => {
            showStorySlide(currentSlide - 1);
        });

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showStorySlide(index);
            });
        });

        // Auto-advance stories
        setInterval(() => {
            showStorySlide(currentSlide + 1);
        }, 8000);

        // Form input listeners for real-time review updates
        document.querySelectorAll('#volunteerForm input, #volunteerForm textarea, #volunteerForm select')
            .forEach(input => {
                input.addEventListener('input', updateReview);
                input.addEventListener('change', updateReview);
            });

        // Form submission
        document.getElementById('volunteerForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your application! We will review it and contact you within 5-7 business days.');
            this.reset();
            nextPage(1);
        });

        // Initialize
        updateReview();
    });
</script>
@endsection
