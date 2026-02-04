@extends('layouts.app')

@section('title', 'Donate - Support Our Mission')
@section('content')

<!-- Hero Section -->
<div class="hero-slideshow" style="height: 60vh; min-height: 500px;">
    <div class="slide active" style="background-image: url('{{ asset('images/donate/hero-donate.jpg') }}');">
        <div class="slide-overlay">
            <div class="slide-text">
                <h2>Your Support Changes Lives</h2>
                <p>Every contribution directly impacts vulnerable communities in Uganda</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Urgent Land Project -->
    <div class="urgent-project animate-on-scroll">
        <div class="project-badge">URGENT PROJECT</div>
        <h2>🚨 Land Acquisition: Building Hope Center</h2>
        <p>We urgently need to raise <strong>£177,778</strong> to purchase 10 acres of land for our new comprehensive center that will serve over 1,000 vulnerable people annually.</p>

        <div class="project-progress">
            <div class="progress-bar">
                <div class="progress-fill" style="width: 25%;"></div>
            </div>
            <div class="progress-stats">
                <span>£44,444 Raised</span>
                <span>25% Complete</span>
                <span>127 Donors</span>
            </div>
        </div>

        <div class="project-actions">
            <a href="#donate-now" class="cta-button pulse">
                <i class="fas fa-donate"></i> Donate to Land Project
            </a>
            <a href="/special-projects" class="secondary-button">
                <i class="fas fa-info-circle"></i> Learn More
            </a>
        </div>
    </div>

    <!-- Ways to Give -->
    <h2 class="section-title animate-on-scroll">Ways to Support Our Mission</h2>
    <p class="section-subtitle animate-on-scroll delay-200">Choose the giving option that fits you best</p>

    <div class="giving-options animate-on-scroll">
        <div class="giving-card">
            <div class="giving-header">
                <i class="fas fa-child"></i>
                <h3>Sponsor a Child</h3>
                <div class="giving-amount">£30/month</div>
            </div>
            <div class="giving-content">
                <p>Provide education, meals, and healthcare for one orphaned child</p>
                <ul>
                    <li>✓ School fees and supplies</li>
                    <li>✓ Daily nutritious meals</li>
                    <li>✓ Medical care and checkups</li>
                    <li>✓ Regular progress reports</li>
                    <li>✓ Personal connection updates</li>
                </ul>
                <button class="giving-button" data-amount="30" data-type="child">
                    <i class="fas fa-heart"></i> Sponsor Now
                </button>
            </div>
        </div>

        <div class="giving-card delay-200">
            <div class="giving-header">
                <i class="fas fa-hand-holding-medical"></i>
                <h3>Medical Support</h3>
                <div class="giving-amount">£50-£500</div>
            </div>
            <div class="giving-content">
                <p>Fund healthcare services for vulnerable community members</p>
                <div class="amount-options">
                    <button class="amount-option" data-amount="50">£50</button>
                    <button class="amount-option" data-amount="100">£100</button>
                    <button class="amount-option" data-amount="250">£250</button>
                    <button class="amount-option" data-amount="500">£500</button>
                </div>
                <p class="giving-note">£100 funds a medical outreach clinic for 50 people</p>
                <button class="giving-button" data-type="medical">
                    <i class="fas fa-stethoscope"></i> Support Healthcare
                </button>
            </div>
        </div>

        <div class="giving-card delay-400">
            <div class="giving-header">
                <i class="fas fa-graduation-cap"></i>
                <h3>Vocational Training</h3>
                <div class="giving-amount">£200/student</div>
            </div>
            <div class="giving-content">
                <p>Provide skills training for sustainable livelihoods</p>
                <ul>
                    <li>✓ Carpentry & woodworking</li>
                    <li>✓ Tailoring & fashion design</li>
                    <li>✓ Computer literacy</li>
                    <li>✓ Agricultural training</li>
                    <li>✓ Startup toolkits</li>
                </ul>
                <button class="giving-button" data-amount="200" data-type="training">
                    <i class="fas fa-tools"></i> Fund Training
                </button>
            </div>
        </div>
    </div>




   <!-- Donation Form -->
<div class="donation-form-section" id="donate-now">
    <h2 class="section-title animate-on-scroll">Make Your Donation</h2>

    @if(session('error'))
        <div class="alert alert-danger animate-on-scroll">
            <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
        </div>
    @endif

    <div class="donation-form-wrapper animate-on-scroll">
        <form action="{{ route('donation.process') }}" method="POST" id="donationForm">
            @csrf

            <div class="donation-form">
                <!-- Amount Step -->
                <div class="form-step active" id="step-amount">
                    <h3><i class="fas fa-pound-sign"></i> Select Donation Amount</h3>
                    <div class="amount-choices">
                        <button type="button" class="amount-choice" data-amount="25">£25</button>
                        <button type="button" class="amount-choice" data-amount="50">£50</button>
                        <button type="button" class="amount-choice" data-amount="100">£100</button>
                        <button type="button" class="amount-choice" data-amount="250">£250</button>
                        <button type="button" class="amount-choice" data-amount="500">£500</button>
                    </div>
                    <div class="custom-amount">
                        <input type="number" id="customAmount" name="custom_amount"
                               placeholder="Other Amount (£)" min="1" step="0.01">
                    </div>
                    <input type="hidden" name="amount" id="donationAmount" value="100" required>
                    <button type="button" class="next-button" onclick="nextStep('frequency')">
                        Next: Choose Frequency <i class="fas fa-arrow-right"></i>
                    </button>
                </div>

                <!-- Frequency Step -->
                <div class="form-step" id="step-frequency">
                    <h3><i class="fas fa-sync-alt"></i> Donation Frequency</h3>
                    <div class="frequency-options">
                        <label class="frequency-option">
                            <input type="radio" name="frequency" value="one-time" checked>
                            <div class="option-content">
                                <i class="fas fa-gift"></i>
                                <span>One-Time Gift</span>
                            </div>
                        </label>
                        <label class="frequency-option">
                            <input type="radio" name="frequency" value="monthly">
                            <div class="option-content">
                                <i class="fas fa-calendar-alt"></i>
                                <span>Monthly</span>
                                <small>Ongoing impact</small>
                            </div>
                        </label>
                        <label class="frequency-option">
                            <input type="radio" name="frequency" value="quarterly">
                            <div class="option-content">
                                <i class="fas fa-calendar"></i>
                                <span>Quarterly</span>
                                <small>Every 3 months</small>
                            </div>
                        </label>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="back-button" onclick="prevStep('amount')">
                            <i class="fas fa-arrow-left"></i> Back
                        </button>
                        <button type="button" class="next-button" onclick="nextStep('details')">
                            Next: Your Details <i class="fas fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <!-- Details Step -->
                <div class="form-step" id="step-details">
                    <h3><i class="fas fa-user"></i> Your Information</h3>
                    <div class="form-grid">
                        <input type="text" name="first_name" placeholder="First Name *" required>
                        <input type="text" name="last_name" placeholder="Last Name *" required>
                        <input type="email" name="email" placeholder="Email Address *" required>
                        <input type="tel" name="phone" placeholder="Phone Number *" required>
                        <input type="hidden" name="name" id="fullName">
                        <input type="hidden" name="designation" id="donationDesignation" value="General Fund">
                    </div>

                    <div class="designation-options">
                        <h4>Designate Your Donation</h4>
                        <div class="designation-buttons">
                            <button type="button" class="designation-btn" data-designation="General Fund">
                                General Fund
                            </button>
                            <button type="button" class="designation-btn" data-designation="Land Project">
                                Land Project
                            </button>
                            <button type="button" class="designation-btn" data-designation="Medical Support">
                                Medical Support
                            </button>
                            <button type="button" class="designation-btn" data-designation="Education">
                                Education
                            </button>
                        </div>
                    </div>

                    <div class="payment-note">
                        <i class="fas fa-lock"></i>
                        <span>You'll be redirected to Flutterwave's secure payment page</span>
                    </div>

                    <div class="form-actions">
                        <button type="button" class="back-button" onclick="prevStep('frequency')">
                            <i class="fas fa-arrow-left"></i> Back
                        </button>
                        <button type="submit" class="submit-button">
                            <i class="fas fa-lock"></i> Proceed to Payment
                        </button>
                    </div>
                </div>
            </div>
        </form>

        <div class="donation-summary">
            <h3><i class="fas fa-receipt"></i> Donation Summary</h3>
            <div class="summary-item">
                <span>Amount:</span>
                <span id="summaryAmount">£100</span>
            </div>
            <div class="summary-item">
                <span>Frequency:</span>
                <span id="summaryFrequency">One-Time</span>
            </div>
            <div class="summary-item">
                <span>Designation:</span>
                <span id="summaryType">General Fund</span>
            </div>
            <div class="summary-total">
                <span>Total:</span>
                <span id="summaryTotal">£100</span>
            </div>
            <div class="security-badge">
                <i class="fas fa-shield-alt"></i>
                <span>Secure & Encrypted Payment</span>
            </div>

            <div class="payment-logos">
                <img src="{{ asset('images/flutterwave-logo.png') }}" alt="Flutterwave" style="max-width: 150px;">
                <div class="card-icons">
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-amex"></i>
                    <i class="fas fa-university"></i>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- Impact Visualization -->
    <h2 class="section-title animate-on-scroll">Your Donation's Impact</h2>

    <div class="impact-visualization animate-on-scroll">
        <div class="impact-item">
            <div class="impact-icon">£25</div>
            <p>Feeds a family of 5 for one week</p>
        </div>
        <div class="impact-item delay-200">
            <div class="impact-icon">£50</div>
            <p>Provides HIV medication for 3 months</p>
        </div>
        <div class="impact-item delay-400">
            <div class="impact-icon">£100</div>
            <p>Covers school fees for one child/year</p>
        </div>
        <div class="impact-item delay-600">
            <div class="impact-icon">£200</div>
            <p>Funds vocational training for one youth</p>
        </div>
    </div>

    <!-- Trust Indicators -->
    <div class="trust-section animate-on-scroll">
        <h3>Your Donation is Safe & Secure</h3>
        <div class="trust-badges">
            <div class="trust-badge">
                <i class="fas fa-lock"></i>
                <span>256-bit Encryption</span>
            </div>
            <div class="trust-badge">
                <i class="fas fa-shield-alt"></i>
                <span>PCI DSS Compliant</span>
            </div>
            <div class="trust-badge">
                <i class="fas fa-certificate"></i>
                <span>Registered Charity</span>
            </div>
            <div class="trust-badge">
                <i class="fas fa-chart-line"></i>
                <span>Annual Reports Published</span>
            </div>
        </div>
    </div>
</div>

<style>
    /* Urgent Project Styles */
    .urgent-project {
        background: linear-gradient(135deg, #FF6B35, #FF8B35);
        color: white;
        padding: 50px;
        border-radius: 25px;
        margin: 60px 0;
        position: relative;
        overflow: hidden;
        box-shadow: 0 15px 40px rgba(255, 107, 53, 0.3);
    }

    .project-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: var(--primary-blue);
        color: white;
        padding: 8px 20px;
        border-radius: 20px;
        font-weight: bold;
        font-size: 0.9rem;
    }

    .urgent-project h2 {
        font-size: 2.2rem;
        margin-bottom: 20px;
    }

    .urgent-project p {
        font-size: 1.2rem;
        margin-bottom: 30px;
        max-width: 800px;
    }

    .project-progress {
        background: rgba(255, 255, 255, 0.2);
        padding: 30px;
        border-radius: 15px;
        margin: 30px 0;
        backdrop-filter: blur(10px);
    }

    .progress-bar {
        height: 20px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 15px;
    }

    .progress-fill {
        height: 100%;
        background: var(--primary-blue);
        width: 25%;
        transition: width 1s ease;
    }

    .progress-stats {
        display: flex;
        justify-content: space-between;
        color: rgba(255, 255, 255, 0.9);
        font-weight: 500;
    }

    .project-actions {
        display: flex;
        gap: 20px;
        margin-top: 30px;
    }

    .secondary-button {
        background: transparent;
        color: white;
        border: 2px solid white;
        padding: 15px 35px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .secondary-button:hover {
        background: white;
        color: var(--primary-orange);
    }

    /* Giving Options */
    .giving-options {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }

    .giving-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: all 0.3s ease;
    }

    .giving-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    }

    .giving-header {
        background: var(--primary-blue);
        color: white;
        padding: 30px;
        text-align: center;
        position: relative;
    }

    .giving-header i {
        font-size: 2.5rem;
        margin-bottom: 15px;
        display: block;
    }

    .giving-header h3 {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .giving-amount {
        font-size: 2rem;
        font-weight: bold;
        color: var(--primary-orange);
        background: white;
        padding: 5px 15px;
        border-radius: 25px;
        display: inline-block;
        margin-top: 10px;
    }

    .giving-content {
        padding: 30px;
    }

    .giving-content p {
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .giving-content ul {
        margin: 20px 0;
        padding-left: 20px;
    }

    .giving-content li {
        margin-bottom: 10px;
        color: var(--accent-black);
    }

    .amount-options {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        margin: 20px 0;
    }

    .amount-option {
        background: var(--primary-orange-faded);
        border: 2px solid transparent;
        padding: 12px;
        border-radius: 8px;
        font-weight: bold;
        color: var(--primary-orange);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .amount-option:hover {
        background: var(--primary-orange);
        color: white;
        border-color: var(--primary-orange);
    }

    .giving-note {
        font-size: 0.9rem;
        color: #666;
        font-style: italic;
        margin: 15px 0 20px;
    }

    .giving-button {
        width: 100%;
        background: var(--primary-orange);
        color: white;
        border: none;
        padding: 15px;
        border-radius: 10px;
        font-weight: bold;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    .giving-button:hover {
        background: var(--primary-blue);
        transform: scale(1.05);
    }

    /* Donation Form */
    .donation-form-section {
        margin: 80px 0;
    }

    .donation-form-wrapper {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 40px;
    }

    .donation-form {
        background: white;
        padding: 40px;
        border-radius: 20px;
        box-shadow: var(--shadow);
    }

    .form-step {
        display: none;
    }

    .form-step.active {
        display: block;
    }

    .form-step h3 {
        color: var(--primary-blue);
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 15px;
        font-size: 1.4rem;
    }

    .amount-choices {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
        margin-bottom: 30px;
    }

    .amount-choice {
        background: var(--primary-orange-faded);
        border: 2px solid transparent;
        padding: 20px;
        border-radius: 10px;
        font-size: 1.2rem;
        font-weight: bold;
        color: var(--primary-orange);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .amount-choice:hover,
    .amount-choice.active {
        background: var(--primary-orange);
        color: white;
        border-color: var(--primary-orange);
    }

    .custom-amount input {
        width: 100%;
        padding: 15px;
        border: 2px solid #E0E0E0;
        border-radius: 10px;
        font-size: 1.1rem;
        text-align: center;
        margin-bottom: 30px;
    }

    .custom-amount input:focus {
        border-color: var(--primary-orange);
        outline: none;
    }

    .frequency-options {
        display: grid;
        gap: 15px;
        margin-bottom: 30px;
    }

    .frequency-option {
        cursor: pointer;
    }

    .frequency-option input {
        display: none;
    }

    .option-content {
        border: 2px solid #E0E0E0;
        padding: 20px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        gap: 15px;
        transition: all 0.3s ease;
    }

    .option-content i {
        font-size: 1.5rem;
        color: var(--primary-blue);
    }

    .frequency-option input:checked + .option-content {
        border-color: var(--primary-orange);
        background: var(--primary-orange-faded);
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

    .payment-methods {
        display: flex;
        gap: 20px;
        margin: 20px 0 30px;
    }

    .payment-method {
        flex: 1;
        cursor: pointer;
    }

    .payment-method input {
        display: none;
    }

    .payment-method i {
        font-size: 2rem;
        margin-bottom: 10px;
        display: block;
        color: var(--primary-blue);
    }

    .payment-method input:checked + i {
        color: var(--primary-orange);
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
    }

    .back-button {
        background: #F0F0F0;
        color: var(--accent-black);
        border: none;
    }

    .next-button {
        background: var(--primary-blue);
        color: white;
        border: none;
    }

    .submit-button {
        background: var(--primary-orange);
        color: white;
        border: none;
    }

    .back-button:hover {
        background: #E0E0E0;
    }

    .next-button:hover,
    .submit-button:hover {
        transform: scale(1.05);
    }

    /* Donation Summary */
    .donation-summary {
        background: white;
        padding: 30px;
        border-radius: 20px;
        box-shadow: var(--shadow);
        height: fit-content;
        position: sticky;
        top: 100px;
    }

    .donation-summary h3 {
        color: var(--primary-blue);
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .summary-item {
        display: flex;
        justify-content: space-between;
        padding: 15px 0;
        border-bottom: 1px solid #F0F0F0;
    }

    .summary-total {
        display: flex;
        justify-content: space-between;
        padding: 20px 0;
        font-size: 1.3rem;
        font-weight: bold;
        color: var(--primary-orange);
        border-top: 2px solid var(--primary-orange);
        margin-top: 20px;
    }

    .security-badge {
        background: var(--primary-orange-faded);
        padding: 15px;
        border-radius: 10px;
        margin-top: 25px;
        display: flex;
        align-items: center;
        gap: 15px;
        color: var(--primary-orange);
        font-weight: 500;
    }

    /* Impact Visualization */
    .impact-visualization {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }

    .impact-item {
        text-align: center;
        background: white;
        padding: 30px 20px;
        border-radius: 15px;
        box-shadow: var(--shadow);
        transition: all 0.3s ease;
    }

    .impact-item:hover {
        transform: translateY(-10px) rotate(3deg);
    }

    .impact-icon {
        font-size: 2rem;
        font-weight: bold;
        color: var(--primary-orange);
        background: var(--primary-orange-faded);
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }

    .impact-item p {
        font-weight: 500;
        line-height: 1.5;
    }

    /* Trust Section */
    .trust-section {
        background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark));
        color: white;
        padding: 40px;
        border-radius: 20px;
        margin: 60px 0;
        text-align: center;
    }

    .trust-section h3 {
        margin-bottom: 30px;
        font-size: 1.5rem;
    }

    .trust-badges {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    .trust-badge {
        background: rgba(255, 255, 255, 0.1);
        padding: 20px;
        border-radius: 10px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        transition: all 0.3s ease;
    }

    .trust-badge:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-5px);
    }

    .trust-badge i {
        font-size: 2rem;
        color: var(--primary-orange);
    }

    /* Animations */
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .pulse {
        animation: pulse 2s infinite;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .donation-form-wrapper {
            grid-template-columns: 1fr;
        }

        .donation-summary {
            position: static;
        }
    }

    @media (max-width: 768px) {
        .urgent-project {
            padding: 30px;
        }

        .amount-choices {
            grid-template-columns: repeat(2, 1fr);
        }

        .form-grid {
            grid-template-columns: 1fr;
        }

        .giving-options {
            grid-template-columns: 1fr;
        }
    }

    @media (max-width: 480px) {
        .project-actions {
            flex-direction: column;
        }

        .impact-visualization {
            grid-template-columns: 1fr;
        }

        .trust-badges {
            grid-template-columns: 1fr;
        }
    }

    /* Fix for form step display */
.form-step {
    display: none !important;
}

.form-step.active {
    display: block !important;
}

/* Fix for button conflicts */
.designation-btn {
    background: var(--primary-orange-faded);
    border: 2px solid transparent;
    padding: 12px;
    border-radius: 8px;
    font-weight: bold;
    color: var(--primary-orange);
    cursor: pointer;
    transition: all 0.3s ease;
    width: 100%;
    margin: 5px 0;
}

.designation-btn:hover,
.designation-btn.active {
    background: var(--primary-orange);
    color: white;
    border-color: var(--primary-orange);
}

.designation-options {
    margin: 20px 0;
}

.designation-options h4 {
    color: var(--primary-blue);
    margin-bottom: 15px;
}

.designation-buttons {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
}

.payment-note {
    background: #F0F7FF;
    padding: 15px;
    border-radius: 10px;
    margin: 20px 0;
    display: flex;
    align-items: center;
    gap: 15px;
    color: var(--primary-blue);
    font-weight: 500;
}

.alert-danger {
    background: #FFEBEE;
    color: #C62828;
    padding: 15px 20px;
    border-radius: 10px;
    margin: 20px 0;
    display: flex;
    align-items: center;
    gap: 15px;
    border-left: 4px solid #C62828;
}

.payment-logos {
    margin-top: 25px;
    padding-top: 25px;
    border-top: 1px solid #F0F0F0;
    text-align: center;
}

.payment-logos img {
    max-width: 150px;
    margin-bottom: 15px;
}

.card-icons {
    display: flex;
    justify-content: center;
    gap: 15px;
    font-size: 1.8rem;
    color: var(--primary-blue);
}
</style>

<script>
    let donationData = {
        amount: 100,
        frequency: 'one-time',
        type: 'general',
        designation: 'General Fund'
    };

    function nextStep(stepId) {
        document.querySelector('.form-step.active').classList.remove('active');
        document.getElementById('step-' + stepId).classList.add('active');

        // Combine first and last name for full name
        if (stepId === 'details') {
            const firstName = document.querySelector('input[name="first_name"]').value;
            const lastName = document.querySelector('input[name="last_name"]').value;
            document.getElementById('fullName').value = firstName + ' ' + lastName;
        }

        updateSummary();
    }

    function prevStep(stepId) {
        document.querySelector('.form-step.active').classList.remove('active');
        document.getElementById('step-' + stepId).classList.add('active');
    }

    function updateSummary() {
        document.getElementById('summaryAmount').textContent = '£' + donationData.amount;
        document.getElementById('summaryFrequency').textContent =
            donationData.frequency === 'one-time' ? 'One-Time' :
            donationData.frequency === 'monthly' ? 'Monthly' : 'Quarterly';
        document.getElementById('summaryType').textContent = donationData.designation;
        document.getElementById('summaryTotal').textContent = '£' + donationData.amount;

        // Update hidden form fields
        document.getElementById('donationAmount').value = donationData.amount;
        document.getElementById('donationDesignation').value = donationData.designation;
    }

    document.addEventListener('DOMContentLoaded', function() {
        // Amount choice buttons
        document.querySelectorAll('.amount-choice').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelectorAll('.amount-choice').forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                donationData.amount = parseInt(this.dataset.amount);
                document.getElementById('customAmount').value = '';
                updateSummary();
            });
        });

        // Giving option buttons from top section
        document.querySelectorAll('.giving-button').forEach(button => {
            button.addEventListener('click', function() {
                if (this.dataset.amount) {
                    donationData.amount = parseInt(this.dataset.amount);
                }
                if (this.dataset.type === 'child') {
                    donationData.designation = 'Child Sponsorship';
                } else if (this.dataset.type === 'medical') {
                    donationData.designation = 'Medical Support';
                } else if (this.dataset.type === 'training') {
                    donationData.designation = 'Vocational Training';
                }
                updateSummary();
                nextStep('frequency');
            });
        });

        // Custom amount input
        document.getElementById('customAmount').addEventListener('input', function() {
            const value = parseFloat(this.value);
            if (!isNaN(value) && value > 0) {
                donationData.amount = value;
                document.querySelectorAll('.amount-choice').forEach(btn => btn.classList.remove('active'));
                updateSummary();
            }
        });

        // Frequency radio buttons
        document.querySelectorAll('input[name="frequency"]').forEach(radio => {
            radio.addEventListener('change', function() {
                donationData.frequency = this.value;
                updateSummary();
            });
        });

        // Designation buttons
        document.querySelectorAll('.designation-btn').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelectorAll('.designation-btn').forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                donationData.designation = this.dataset.designation;
                updateSummary();
            });
        });

        // Initialize with default values
        updateSummary();
    });
</script>


@endsection
