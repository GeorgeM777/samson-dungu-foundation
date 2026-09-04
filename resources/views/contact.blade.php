@extends('layouts.app')

@section('title', 'Contact Us - Get in Touch with Samson Ddungu Foundation')
@section('content')

@php
    $leaders = \App\Models\LeadershipTeam::where('is_active', true)->orderBy('order')->get();
    $contactAddress = \App\Models\SiteSetting::get('contact_address', 'Wakiso District, Central Region, Uganda<br>(Near Kampala, the capital city)');
    $officeHours = \App\Models\SiteSetting::get('contact_office_hours', 'Monday - Friday: 8:00 AM - 5:00 PM<br>Saturday: 9:00 AM - 1:00 PM<br>Sunday: Closed');
    $emailInfo = \App\Models\SiteSetting::get('contact_email_info', 'info@samsondungufoundation.org');
    $emailPartnerships = \App\Models\SiteSetting::get('contact_email_partnerships', 'partnerships@samsondungufoundation.org');
    $emailDonations = \App\Models\SiteSetting::get('contact_email_donations', 'donations@samsondungufoundation.org');
    $emailVolunteer = \App\Models\SiteSetting::get('contact_email_volunteer', 'volunteer@samsondungufoundation.org');
@endphp

<!-- Hero Section -->
<div class="hero-slideshow" style="height: 60vh; min-height: 500px;">
    <div class="slide active" style="background-image: url('{{ asset('images/contact/hero-contact.jpg') }}');">
        <div class="slide-overlay">
            <div class="slide-text">
                <h2>Connect With Us</h2>
                <p>Reach out to make a difference together</p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- Leadership Team Section -->
    <h2 class="section-title animate-on-scroll">Our Leadership Team</h2>
    <p class="section-subtitle animate-on-scroll delay-200">Dedicated leaders driving our mission forward</p>

    <div class="leadership-team animate-on-scroll">
        @forelse($leaders as $index => $leader)
            <div class="leader-card {{ $index > 0 ? 'animate-on-scroll delay-' . ($index * 400) : '' }}">
                @if($index % 2 == 0)
                    <div class="leader-image">
                        @if($leader->photo)
                            <img src="{{ asset(ltrim($leader->photo, '/')) }}" alt="{{ $leader->name }}">
                        @else
                            <img src="{{ asset('images/contact/leadership/ida-dungu.jpg') }}" alt="{{ $leader->name }}" onerror="this.src='{{ asset('images/contact/leader-default.jpg') }}'">
                        @endif
                        <div class="leader-badge">{{ $leader->position }}</div>
                    </div>
                @endif
                <div class="leader-info">
                    <h3>{{ strtoupper($leader->name) }}</h3>
                    <p class="leader-title">{{ strtoupper($leader->position) }}</p>
                    <div class="leader-details">
                        @if($leader->phone)
                            <p><i class="fas fa-phone"></i> Contact: {{ $leader->phone }}</p>
                        @endif
                        @if($leader->email)
                            <p><i class="fas fa-envelope"></i> Email: {{ $leader->email }}</p>
                        @endif
                    </div>
                    <p class="leader-bio">{{ $leader->bio }}</p>
                </div>
                @if($index % 2 == 1)
                    <div class="leader-image">
                        @if($leader->photo)
                            <img src="{{ asset(ltrim($leader->photo, '/')) }}" alt="{{ $leader->name }}">
                        @else
                            <img src="{{ asset('images/contact/leadership/martin-wiseman.jpg') }}" alt="{{ $leader->name }}" onerror="this.src='{{ asset('images/contact/leader-default.jpg') }}'">
                        @endif
                        <div class="leader-badge">{{ $leader->position }}</div>
                    </div>
                @endif
            </div>
        @empty
            <p style="text-align: center; color: #777; padding: 40px;">No team members available. Add some from the admin panel.</p>
        @endforelse
    </div>

    <!-- Contact Information Section -->
    <div class="contact-grid animate-on-scroll">
        <div class="contact-info">
            <h2><i class="fas fa-map-marker-alt"></i> Our Location</h2>
            <p>{!! $contactAddress !!}</p>

            <h2><i class="fas fa-clock"></i> Office Hours</h2>
            <p>{!! $officeHours !!}</p>

            <h2><i class="fas fa-envelope"></i> Email Addresses</h2>
            <p>General Inquiries: {{ $emailInfo }}<br>
            Partnerships: {{ $emailPartnerships }}<br>
            Donations: {{ $emailDonations }}<br>
            Volunteering: {{ $emailVolunteer }}</p>
        </div>

        <div class="contact-form animate-on-scroll delay-400">
            <h2>Send Us a Message</h2>
            <form id="contactForm">
                <div class="form-group">
                    <input type="text" placeholder="Your Full Name *" required>
                </div>

                <div class="form-group">
                    <input type="email" placeholder="Email Address *" required>
                </div>

                <div class="form-group">
                    <input type="tel" placeholder="Phone Number">
                </div>

                <div class="form-group">
                    <select required>
                        <option value="">Select Inquiry Type</option>
                        <option value="donation">Donation Inquiry</option>
                        <option value="volunteer">Volunteering</option>
                        <option value="partnership">Partnership</option>
                        <option value="general">General Information</option>
                        <option value="media">Media Inquiry</option>
                    </select>
                </div>

                <div class="form-group">
                    <textarea rows="5" placeholder="Your Message *" required></textarea>
                </div>

                <button type="submit" class="cta-button">
                    <i class="fas fa-paper-plane"></i> Send Message
                </button>
            </form>
        </div>
    </div>

    <!-- Quick Contact Cards -->
    <h2 class="section-title animate-on-scroll">Quick Contact Options</h2>

    <div class="quick-contact animate-on-scroll">
        <div class="contact-card">
            <div class="contact-icon">
                <i class="fas fa-phone-alt"></i>
            </div>
            <h3>Call Us</h3>
            <p>+256 782 488 116</p>
            <a href="tel:+256782488116" class="contact-link">Call Now</a>
        </div>

        <div class="contact-card delay-200">
            <div class="contact-icon">
                <i class="fab fa-whatsapp"></i>
            </div>
            <h3>WhatsApp</h3>
            <p>+256 782 488 116</p>
            <a href="https://wa.me/256782488116" class="contact-link">Message on WhatsApp</a>
        </div>

        <div class="contact-card delay-400">
            <div class="contact-icon">
                <i class="fas fa-envelope"></i>
            </div>
            <h3>Email</h3>
            <p>info@samsondungufoundation.org</p>
            <a href="mailto:info@samsondungufoundation.org" class="contact-link">Send Email</a>
        </div>

        <div class="contact-card delay-600">
            <div class="contact-icon">
                <i class="fas fa-map-marked-alt"></i>
            </div>
            <h3>Visit Us</h3>
            <p>Wakiso District, Uganda</p>
            <a href="https://maps.google.com/?q=Wakiso+District+Uganda" class="contact-link">Get Directions</a>
        </div>
    </div>
</div>

<style>
    /* Leadership Team Styles */
    .leadership-team {
        margin: 60px 0;
    }

    .leader-card {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        background: white;
        border-radius: 20px;
        padding: 40px;
        margin: 40px 0;
        box-shadow: var(--shadow);
        border: 2px solid var(--primary-orange);
        transition: all 0.3s ease;
    }

    .leader-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 50px rgba(255, 107, 53, 0.15);
    }

    .leader-image {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
    }

    .leader-image img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .leader-card:hover .leader-image img {
        transform: scale(1.05);
    }

    .leader-badge {
        position: absolute;
        bottom: 20px;
        left: 20px;
        background: var(--primary-orange);
        color: white;
        padding: 10px 20px;
        border-radius: 25px;
        font-weight: bold;
        font-size: 0.9rem;
    }

    .leader-info h3 {
        color: var(--primary-blue);
        font-size: 1.8rem;
        margin-bottom: 10px;
    }

    .leader-title {
        color: var(--primary-orange);
        font-weight: bold;
        font-size: 1.2rem;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid var(--primary-orange-faded);
    }

    .leader-details {
        background: var(--primary-orange-faded);
        padding: 20px;
        border-radius: 10px;
        margin: 20px 0;
    }

    .leader-details p {
        margin: 10px 0;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .leader-bio {
        font-size: 1.1rem;
        line-height: 1.7;
        color: var(--accent-black);
    }

    /* Contact Grid Styles */
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        margin: 60px 0;
    }

    .contact-info h2 {
        color: var(--primary-blue);
        margin: 30px 0 15px;
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .contact-info h2:first-child {
        margin-top: 0;
    }

    .contact-info p {
        margin-bottom: 20px;
        line-height: 1.7;
    }

    /* Contact Form Styles */
    .contact-form {
        background: white;
        padding: 40px;
        border-radius: 20px;
        box-shadow: var(--shadow);
    }

    .contact-form h2 {
        color: var(--primary-blue);
        margin-bottom: 30px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 15px;
        border: 2px solid #E0E0E0;
        border-radius: 10px;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: var(--primary-orange);
        outline: none;
        box-shadow: 0 0 0 3px var(--primary-orange-faded);
    }

    /* Quick Contact Styles */
    .quick-contact {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        margin: 60px 0;
    }

    .contact-card {
        background: white;
        padding: 30px;
        border-radius: 15px;
        text-align: center;
        box-shadow: var(--shadow);
        transition: all 0.3s ease;
        border-top: 5px solid var(--primary-orange);
    }

    .contact-card:hover {
        transform: translateY(-10px) rotate(2deg);
    }

    .contact-icon {
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

    .contact-card h3 {
        color: var(--primary-blue);
        margin-bottom: 10px;
    }

    .contact-card p {
        color: var(--accent-black);
        margin-bottom: 20px;
        font-weight: 500;
    }

    .contact-link {
        display: inline-block;
        background: var(--primary-blue);
        color: white;
        padding: 10px 25px;
        border-radius: 25px;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .contact-link:hover {
        background: var(--primary-orange);
        transform: scale(1.05);
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .leader-card {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .contact-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }
    }

    @media (max-width: 768px) {
        .leader-image img {
            height: 300px;
        }

        .leader-card {
            padding: 25px;
        }

        .quick-contact {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 480px) {
        .quick-contact {
            grid-template-columns: 1fr;
        }

        .contact-card {
            padding: 25px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Contact form submission
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Get form values
                const name = this.querySelector('input[type="text"]').value;
                const email = this.querySelector('input[type="email"]').value;

                // Simple validation
                if (name && email) {
                    // Show success message
                    alert('Thank you, ' + name + '! Your message has been sent. We will contact you at ' + email + ' soon.');
                    contactForm.reset();
                }
            });
        }
    });
</script>
@endsection