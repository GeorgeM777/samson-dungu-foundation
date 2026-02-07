@extends('layouts.app')

@section('title', 'Support Our Mission - Donation Instructions')
@section('content')

<!-- Hero Section -->
<div class="hero-slideshow" style="height: 60vh; min-height: 500px;">
    <div class="slide active" style="background-image: url('{{ asset('images/donate/hero-donate.jpg') }}');">
        <div class="slide-overlay">
            <div class="slide-text">
                <h2>Support Our Mission in Uganda</h2>
                <p>Your contributions directly impact vulnerable communities through sustainable programs</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Important Notice - Contact Director First -->
    <div class="urgent-notice animate-on-scroll">
        <div class="notice-badge">IMPORTANT</div>
        <div class="notice-content">
            <h2><i class="fas fa-exclamation-circle"></i> Before Making a Donation</h2>
            <p><strong>All volunteers and donors must first contact our Country Director for guidance on the donation process.</strong> This ensures your funds are properly allocated and you receive acknowledgment.</p>

            <div class="contact-director-box">
                <div class="director-info">
                    <div class="director-avatar">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="director-details">
                        <h3>Contact Country Director</h3>
                        <p><strong>Kisigula Martin</strong><br>
                        Country Director, Uganda Operations<br>
                        <i class="fas fa-phone"></i> +256 782 488 116<br>
                        <i class="fas fa-envelope"></i> kisigula.martin@samsondungufoundation.org</p>
                    </div>
                </div>
                <div class="contact-actions">
                    <a href="tel:+256782488116" class="contact-button phone">
                        <i class="fas fa-phone"></i> Call Now
                    </a>
                    <a href="sms:+256782488116?body=Hello%20Kisigula%2C%20I%20would%20like%20to%20make%20a%20donation%20to%20Samson%20Ddungu%20Foundation.%20Please%20guide%20me%20through%20the%20process."
                       class="contact-button sms">
                        <i class="fas fa-sms"></i> Send SMS
                    </a>
                    <a href="mailto:kisigula.martin@samsondungufoundation.org?subject=Donation%20Guidance%20Request&body=Dear%20Kisigula%2C%0A%0AI%20am%20interested%20in%20making%20a%20donation%20to%20Samson%20Ddungu%20Foundation.%20Please%20provide%20me%20with%20guidance%20on%20the%20process.%0A%0ABest%20regards%2C"
                       class="contact-button email">
                        <i class="fas fa-envelope"></i> Email
                    </a>
                </div>
            </div>

            <div class="notice-instructions">
                <h4><i class="fas fa-list-ol"></i> Donation Process Steps:</h4>
                <ol>
                    <li><strong>Contact Country Director</strong> - Call or message Kisigula Martin at +256 782 488 116</li>
                    <li><strong>Discuss Donation Purpose</strong> - Specify which project or program you wish to support</li>
                    <li><strong>Receive Guidance</strong> - Get instructions on the best payment method for your situation</li>
                    <li><strong>Make Payment</strong> - Transfer funds using the provided bank or mobile money details</li>
                    <li><strong>Send Confirmation</strong> - Share proof of payment for receipt and acknowledgment</li>
                </ol>
            </div>
        </div>
    </div>

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
            <a href="#payment-methods" class="cta-button pulse">
                <i class="fas fa-donate"></i> Support Land Project
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
                <a href="#donate-instructions" class="giving-button">
                    <i class="fas fa-heart"></i> Sponsor Now
                </a>
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
                    <span class="amount-option">£50</span>
                    <span class="amount-option">£100</span>
                    <span class="amount-option">£250</span>
                    <span class="amount-option">£500</span>
                </div>
                <p class="giving-note">£100 funds a medical outreach clinic for 50 people</p>
                <a href="#donate-instructions" class="giving-button">
                    <i class="fas fa-stethoscope"></i> Support Healthcare
                </a>
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
                <a href="#donate-instructions" class="giving-button">
                    <i class="fas fa-tools"></i> Fund Training
                </a>
            </div>
        </div>
    </div>

    <!-- Bank Transfer Instructions -->
    <div class="payment-section animate-on-scroll" id="payment-methods">
        <h2 class="section-title">Bank Transfer Instructions</h2>
        <p class="section-subtitle">Official Bank Account Details for Samson Ddungu Foundation</p>

        <div class="payment-methods-grid">
            <!-- Uganda Shillings Account -->
            <div class="payment-method-card">
                <div class="payment-header ugx">
                    <i class="fas fa-university"></i>
                    <h3>UGX Account (Uganda Shillings)</h3>
                </div>
                <div class="payment-details">
                    <div class="detail-row">
                        <span class="detail-label">Bank Name:</span>
                        <span class="detail-value">Centenary Bank</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Account Name:</span>
                        <span class="detail-value">SAMSON DDUNGU ACCOUNTS</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Account Number:</span>
                        <span class="detail-value highlight">3100110253</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Currency:</span>
                        <span class="detail-value">UGX (Uganda Shillings)</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Branch:</span>
                        <span class="detail-value">Main Branch, Kampala</span>
                    </div>
                </div>
                <div class="payment-note">
                    <i class="fas fa-info-circle"></i>
                    <span>For local transfers within Uganda</span>
                </div>
            </div>

            <!-- USD Account -->
            <div class="payment-method-card">
                <div class="payment-header usd">
                    <i class="fas fa-globe-americas"></i>
                    <h3>USD Account (US Dollars)</h3>
                </div>
                <div class="payment-details">
                    <div class="detail-row">
                        <span class="detail-label">Bank Name:</span>
                        <span class="detail-value">Centenary Bank</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Account Name:</span>
                        <span class="detail-value">SAMSON DDUNGU ACCOUNTS</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Account Number:</span>
                        <span class="detail-value highlight">3100110258</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Currency:</span>
                        <span class="detail-value">USD (US Dollars)</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">SWIFT Code:</span>
                        <span class="detail-value">CERBUGKAXXX</span>
                    </div>
                </div>
                <div class="payment-note">
                    <i class="fas fa-info-circle"></i>
                    <span>For international transfers</span>
                </div>
            </div>

            <!-- Mobile Money -->
            <div class="payment-method-card">
                <div class="payment-header mobile">
                    <i class="fas fa-mobile-alt"></i>
                    <h3>Mobile Money</h3>
                </div>
                <div class="payment-details">
                    <div class="detail-row">
                        <span class="detail-label">Provider:</span>
                        <span class="detail-value">MTN Mobile Money</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Phone Number:</span>
                        <span class="detail-value highlight">+256 782 488 116</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Account Name:</span>
                        <span class="detail-value">Samson Ddungu Foundation</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Supported:</span>
                        <span class="detail-value">MTN, Airtel, Africell</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">Reference:</span>
                        <span class="detail-value">Your Name + "DONATION"</span>
                    </div>
                </div>
                <div class="payment-note">
                    <i class="fas fa-info-circle"></i>
                    <span>Quick transfers within Uganda</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Donation Instructions Form -->
    <div class="donation-form-section" id="donate-instructions">
        <h2 class="section-title animate-on-scroll">Donation Information Form</h2>
        <p class="section-subtitle animate-on-scroll delay-200">Fill this form to help us track your donation</p>

        <div class="donation-form-wrapper animate-on-scroll">
            <div class="donation-instructions">
                <h3><i class="fas fa-file-invoice-dollar"></i> Important Instructions</h3>
                <div class="instructions-list">
                    <div class="instruction-step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h4>Contact Country Director First</h4>
                            <p>Call or message Kisigula Martin (+256 782 488 116) to discuss your donation before proceeding.</p>
                        </div>
                    </div>
                    <div class="instruction-step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h4>Use Correct Reference</h4>
                            <p>When making payment, use your full name + "DONATION" as reference (e.g., "JOHN SMITH DONATION").</p>
                        </div>
                    </div>
                    <div class="instruction-step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h4>Keep Proof of Payment</h4>
                            <p>Save transaction receipts, SMS confirmations, or bank slips for verification.</p>
                        </div>
                    </div>
                    <div class="instruction-step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h4>Submit This Form</h4>
                            <p>Complete the form below and we'll contact you to confirm receipt and provide a donation certificate.</p>
                        </div>
                    </div>
                </div>
            </div>

            <form action="{{ route('donation.submit-info') }}" method="POST" id="donationInfoForm" class="donation-form">
                @csrf

                <div class="form-step active">
                    <h3><i class="fas fa-user-circle"></i> Your Information</h3>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="first_name">First Name *</label>
                            <input type="text" id="first_name" name="first_name" placeholder="John" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name *</label>
                            <input type="text" id="last_name" name="last_name" placeholder="Smith" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" placeholder="john@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" placeholder="+256 700 000 000" required>
                        </div>
                        <div class="form-group full-width">
                            <label for="address">Address (Optional)</label>
                            <input type="text" id="address" name="address" placeholder="City, Country">
                        </div>
                    </div>

                    <h4><i class="fas fa-bullseye"></i> Donation Details</h4>
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="amount">Amount *</label>
                            <input type="number" id="amount" name="amount" placeholder="100" min="1" step="0.01" required>
                            <select id="currency" name="currency" class="currency-select">
                                <option value="UGX">UGX</option>
                                <option value="USD" selected>USD</option>
                                <option value="GBP">GBP</option>
                                <option value="EUR">EUR</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="payment_method">Payment Method *</label>
                            <select id="payment_method" name="payment_method" required>
                                <option value="">Select method</option>
                                <option value="bank_ugx">Bank Transfer (UGX)</option>
                                <option value="bank_usd">Bank Transfer (USD)</option>
                                <option value="mobile_money">Mobile Money</option>
                                <option value="cash">Cash Deposit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="frequency">Frequency</label>
                            <select id="frequency" name="frequency">
                                <option value="one_time">One-time gift</option>
                                <option value="monthly">Monthly</option>
                                <option value="quarterly">Quarterly</option>
                                <option value="yearly">Yearly</option>
                            </select>
                        </div>
                        <div class="form-group full-width">
                            <label for="designation">Where would you like your donation to go? *</label>
                            <select id="designation" name="designation" required>
                                <option value="">Select program</option>
                                <option value="general">General Fund (Where most needed)</option>
                                <option value="land_project">Land Acquisition Project</option>
                                <option value="child_sponsorship">Child Sponsorship Program</option>
                                <option value="medical_support">Medical Support</option>
                                <option value="vocational_training">Vocational Training</option>
                                <option value="special_needs">Special Needs Support</option>
                                <option value="elderly_care">Elderly Care Program</option>
                                <option value="education">Education Support</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group full-width">
                        <label for="transaction_id">Transaction/Reference Number *</label>
                        <input type="text" id="transaction_id" name="transaction_id"
                               placeholder="Enter your bank reference or MOMO transaction ID" required>
                        <small class="help-text">This helps us identify your payment</small>
                    </div>

                    <div class="form-group full-width">
                        <label for="message">Additional Notes (Optional)</label>
                        <textarea id="message" name="message" rows="3"
                                  placeholder="Any special instructions or dedication for your donation..."></textarea>
                    </div>

                    <div class="form-actions">
                        <button type="submit" class="submit-button">
                            <i class="fas fa-paper-plane"></i> Submit Donation Information
                        </button>
                        <p class="form-note">
                            <i class="fas fa-shield-alt"></i> Your information is secure and will only be used for donation acknowledgment
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- After Donation Process -->
    <div class="after-donation animate-on-scroll">
        <h2 class="section-title">What Happens After Your Donation</h2>
        <div class="process-steps">
            <div class="process-step">
                <div class="step-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <h3>Confirmation</h3>
                <p>We'll verify your payment within 24-48 hours and send you a confirmation email</p>
            </div>
            <div class="process-step">
                <div class="step-icon">
                    <i class="fas fa-file-invoice"></i>
                </div>
                <h3>Receipt Issued</h3>
                <p>Official donation receipt will be emailed to you for tax purposes</p>
            </div>
            <div class="process-step">
                <div class="step-icon">
                    <i class="fas fa-heart"></i>
                </div>
                <h3>Impact Update</h3>
                <p>Receive updates on how your donation is making a difference</p>
            </div>
            <div class="process-step">
                <div class="step-icon">
                    <i class="fas fa-certificate"></i>
                </div>
                <h3>Recognition</h3>
                <p>Your name will be added to our annual donor report (if you consent)</p>
            </div>
        </div>
    </div>

    <!-- Trust Indicators -->
    <div class="trust-section animate-on-scroll">
        <h3>Transparency & Accountability</h3>
        <div class="trust-badges">
            <div class="trust-badge">
                <i class="fas fa-file-alt"></i>
                <span>Annual Reports Available</span>
            </div>
            <div class="trust-badge">
                <i class="fas fa-chart-line"></i>
                <span>Financial Audits Conducted</span>
            </div>
            <div class="trust-badge">
                <i class="fas fa-certificate"></i>
                <span>Registered Non-Profit</span>
            </div>
            <div class="trust-badge">
                <i class="fas fa-handshake"></i>
                <span>Direct Community Impact</span>
            </div>
        </div>
    </div>
</div>

<style>
    /* Urgent Notice */
    .urgent-notice {
        background: linear-gradient(135deg, #ffeb3b, #ff9800);
        color: #333;
        padding: 30px;
        border-radius: 20px;
        margin: 40px 0;
        position: relative;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(255, 152, 0, 0.3);
        border: 3px solid #ff9800;
    }

    .notice-badge {
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

    .urgent-notice h2 {
        color: var(--primary-blue);
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .urgent-notice h2 i {
        color: #f44336;
    }

    .contact-director-box {
        background: white;
        border-radius: 15px;
        padding: 25px;
        margin: 25px 0;
        border-left: 5px solid var(--primary-blue);
    }

    .director-info {
        display: flex;
        align-items: center;
        gap: 25px;
        margin-bottom: 20px;
    }

    .director-avatar {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 2rem;
    }

    .director-details h3 {
        color: var(--primary-blue);
        margin-bottom: 10px;
    }

    .director-details p {
        color: #555;
        line-height: 1.6;
    }

    .contact-actions {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
    }

    .contact-button {
        padding: 12px 25px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: bold;
        display: flex;
        align-items: center;
        gap: 10px;
        transition: all 0.3s ease;
    }

    .contact-button.phone {
        background: #4CAF50;
        color: white;
    }

    .contact-button.sms {
        background: #2196F3;
        color: white;
    }

    .contact-button.email {
        background: #9C27B0;
        color: white;
    }

    .contact-button:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .notice-instructions {
        background: rgba(255, 255, 255, 0.9);
        border-radius: 15px;
        padding: 25px;
        margin-top: 20px;
    }

    .notice-instructions h4 {
        color: var(--primary-blue);
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .notice-instructions ol {
        padding-left: 20px;
    }

    .notice-instructions li {
        margin-bottom: 15px;
        line-height: 1.6;
        padding-left: 10px;
    }

    /* Payment Methods */
    .payment-section {
        margin: 80px 0;
    }

    .payment-methods-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 30px;
        margin: 50px 0;
    }

    .payment-method-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: var(--shadow);
        transition: all 0.3s ease;
    }

    .payment-method-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .payment-header {
        color: white;
        padding: 25px;
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .payment-header.ugx {
        background: linear-gradient(135deg, #4CAF50, #2E7D32);
    }

    .payment-header.usd {
        background: linear-gradient(135deg, #2196F3, #0D47A1);
    }

    .payment-header.mobile {
        background: linear-gradient(135deg, #9C27B0, #6A1B9A);
    }

    .payment-header i {
        font-size: 2.5rem;
    }

    .payment-header h3 {
        font-size: 1.3rem;
        margin: 0;
    }

    .payment-details {
        padding: 25px;
    }

    .detail-row {
        display: flex;
        justify-content: space-between;
        padding: 12px 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .detail-row:last-child {
        border-bottom: none;
    }

    .detail-label {
        color: #666;
        font-weight: 500;
    }

    .detail-value {
        font-weight: 600;
        color: #333;
    }

    .detail-value.highlight {
        color: var(--primary-orange);
        font-size: 1.2rem;
    }

    .payment-note {
        background: #f8f9fa;
        padding: 15px 25px;
        display: flex;
        align-items: center;
        gap: 15px;
        color: #666;
        border-top: 1px solid #eee;
    }

    /* Donation Form */
    .donation-form-section {
        margin: 80px 0;
    }

    .donation-form-wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }

    @media (max-width: 1024px) {
        .donation-form-wrapper {
            grid-template-columns: 1fr;
        }
    }

    .donation-instructions {
        background: linear-gradient(135deg, #E3F2FD, #BBDEFB);
        padding: 30px;
        border-radius: 20px;
    }

    .instructions-list {
        margin-top: 20px;
    }

    .instruction-step {
        display: flex;
        gap: 20px;
        margin-bottom: 25px;
    }

    .step-number {
        width: 40px;
        height: 40px;
        background: var(--primary-orange);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        flex-shrink: 0;
    }

    .step-content h4 {
        color: var(--primary-blue);
        margin-bottom: 5px;
    }

    .step-content p {
        color: #555;
        line-height: 1.6;
    }

    .donation-form {
        background: white;
        padding: 30px;
        border-radius: 20px;
        box-shadow: var(--shadow);
    }

    .donation-form h3 {
        color: var(--primary-blue);
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .donation-form h4 {
        color: var(--primary-blue);
        margin: 25px 0 15px;
    }

    .form-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    @media (max-width: 768px) {
        .form-grid {
            grid-template-columns: 1fr;
        }
    }

    .form-group {
        position: relative;
    }

    .form-group.full-width {
        grid-column: 1 / -1;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #444;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 10px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: var(--primary-orange);
        outline: none;
        box-shadow: 0 0 0 3px rgba(255, 107, 53, 0.2);
    }

    .currency-select {
        position: absolute;
        right: 10px;
        top: 38px;
        border: none;
        background: #f8f9fa;
        padding: 5px;
        border-radius: 5px;
        width: auto !important;
    }

    .help-text {
        display: block;
        margin-top: 5px;
        color: #666;
        font-size: 0.9rem;
    }

    .form-actions {
        margin-top: 30px;
    }

    .submit-button {
        width: 100%;
        background: var(--primary-orange);
        color: white;
        border: none;
        padding: 15px;
        border-radius: 10px;
        font-size: 1.1rem;
        font-weight: bold;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: all 0.3s ease;
    }

    .submit-button:hover {
        background: var(--primary-blue);
        transform: translateY(-3px);
    }

    .form-note {
        text-align: center;
        margin-top: 15px;
        color: #666;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }

    /* After Donation Process */
    .after-donation {
        margin: 80px 0;
    }

    .process-steps {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin-top: 50px;
    }

    .process-step {
        text-align: center;
        padding: 30px 20px;
        background: white;
        border-radius: 15px;
        box-shadow: var(--shadow);
        transition: all 0.3s ease;
    }

    .process-step:hover {
        transform: translateY(-10px);
    }

    .step-icon {
        width: 70px;
        height: 70px;
        background: var(--primary-orange-faded);
        color: var(--primary-orange);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        font-size: 2rem;
    }

    .process-step h3 {
        color: var(--primary-blue);
        margin-bottom: 15px;
    }

    .process-step p {
        color: #666;
        line-height: 1.6;
    }

    /* Updated Trust Section */
    .trust-section {
        background: linear-gradient(135deg, var(--primary-blue), var(--primary-blue-dark));
        color: white;
        padding: 50px;
        border-radius: 20px;
        margin: 60px 0;
        text-align: center;
    }

    .trust-section h3 {
        margin-bottom: 40px;
        font-size: 2rem;
    }

    .trust-badges {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
    }

    .trust-badge {
        background: rgba(255, 255, 255, 0.1);
        padding: 25px;
        border-radius: 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
        transition: all 0.3s ease;
    }

    .trust-badge:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-5px);
    }

    .trust-badge i {
        font-size: 2.5rem;
        color: var(--primary-orange);
    }

    .trust-badge span {
        font-size: 1.1rem;
        font-weight: 500;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .contact-director-box {
            padding: 20px;
        }

        .director-info {
            flex-direction: column;
            text-align: center;
            gap: 15px;
        }

        .contact-actions {
            justify-content: center;
        }

        .payment-methods-grid {
            grid-template-columns: 1fr;
        }

        .payment-header {
            flex-direction: column;
            text-align: center;
            gap: 15px;
            padding: 20px;
        }

        .urgent-notice {
            padding: 20px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Auto-copy bank account numbers on click
        document.querySelectorAll('.detail-value.highlight').forEach(element => {
            element.style.cursor = 'pointer';
            element.title = 'Click to copy';

            element.addEventListener('click', function() {
                const text = this.textContent;
                navigator.clipboard.writeText(text).then(() => {
                    const originalText = this.textContent;
                    this.textContent = 'Copied!';
                    this.style.color = '#4CAF50';

                    setTimeout(() => {
                        this.textContent = originalText;
                        this.style.color = 'var(--primary-orange)';
                    }, 2000);
                });
            });
        });

        // Form validation
        const donationForm = document.getElementById('donationInfoForm');
        if (donationForm) {
            donationForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Basic validation
                const requiredFields = this.querySelectorAll('[required]');
                let valid = true;

                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        valid = false;
                        field.style.borderColor = '#f44336';
                    } else {
                        field.style.borderColor = '#e0e0e0';
                    }
                });

                if (valid) {
                    // Show success message
                    alert('Thank you! Your donation information has been submitted. We will contact you shortly to confirm receipt.');
                    this.submit();
                } else {
                    alert('Please fill in all required fields marked with *.');
                }
            });
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');
                if (href === '#') return;

                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 100,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Update currency symbol based on selection
        const currencySelect = document.getElementById('currency');
        const amountInput = document.getElementById('amount');

        if (currencySelect && amountInput) {
            currencySelect.addEventListener('change', function() {
                // You could add currency symbol updates here if needed
            });
        }
    });
</script>

@endsection
