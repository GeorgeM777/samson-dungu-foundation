@extends('layouts.app')

@section('title', 'Sponsorship Gateway - Coming Soon')
@section('content')

<section class="donation-hero" style="background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); padding: 120px 0; text-align: center; color: white;">
    <div class="container">
        <div style="font-size: 4rem; margin-bottom: 20px;">🚧</div>
        <h1 style="font-size: 3.5rem; font-weight: 800; margin-bottom: 20px; text-shadow: 0 2px 4px rgba(0,0,0,0.2);">Coming Soon</h1>
        <p style="font-size: 1.4rem; max-width: 700px; margin: 0 auto 30px; opacity: 0.95; line-height: 1.6;">Our secure sponsorship gateway is under development and will be available shortly.</p>
        <a href="/" class="cta-button" style="background: white; color: #1e3a8a; padding: 16px 40px; font-size: 1.1rem; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
            <i class="fas fa-arrow-left"></i> Back to Home
        </a>
    </div>
</section>

<div class="container" style="max-width: 800px; padding: 80px 20px; text-align: center;">
    <h2 style="color: #1e3a8a; font-size: 2rem; margin-bottom: 20px;">Sponsorship Gateway</h2>
    <p style="font-size: 1.15rem; color: #555; line-height: 1.8; margin-bottom: 30px;">
        We're building a better, safer way for you to sponsor children and support our programs online.<br>
        Thank you for your patience — we'll be live very soon.
    </p>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 25px; margin-top: 50px;">
        <div style="background: white; border-radius: 16px; padding: 30px; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
            <div style="font-size: 2.5rem; margin-bottom: 15px;">🔒</div>
            <h3 style="color: #1e3a8a; margin-bottom: 10px;">Secure Payments</h3>
            <p style="color: #777; font-size: 0.95rem;">Industry-standard encryption for every transaction</p>
        </div>
        <div style="background: white; border-radius: 16px; padding: 30px; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
            <div style="font-size: 2.5rem; margin-bottom: 15px;">💳</div>
            <h3 style="color: #1e3a8a; margin-bottom: 10px;">Multiple Options</h3>
            <p style="color: #777; font-size: 0.95rem;">Cards, bank transfer, and mobile money</p>
        </div>
        <div style="background: white; border-radius: 16px; padding: 30px; box-shadow: 0 10px 40px rgba(0,0,0,0.08);">
            <div style="font-size: 2.5rem; margin-bottom: 15px;">📊</div>
            <h3 style="color: #1e3a8a; margin-bottom: 10px;">Track Impact</h3>
            <p style="color: #777; font-size: 0.95rem;">See exactly how your support transforms lives</p>
        </div>
    </div>
</div>

@endsection
