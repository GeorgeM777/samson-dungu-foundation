@extends('layouts.app')

@section('title', 'Blog & News')
@section('content')

<div class="hero" style="background: linear-gradient(rgba(0, 71, 171, 0.85), rgba(0, 71, 171, 0.9)), url('/images/blog-bg.jpg');">
    <h1>Stories of Hope & Impact</h1>
    <p>Follow our journey as we transform lives in Uganda. Real stories, real impact.</p>
</div>

<div class="container">
    <!-- Featured Story -->
    <div style="background: linear-gradient(135deg, #FFF9F0, #FFF3E0); padding: 30px; border-radius: 15px; margin: 40px 0; border-left: 8px solid var(--primary-orange);">
        <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
            <div>
                <div style="background-color: var(--primary-orange); color: white; padding: 5px 15px; border-radius: 5px; display: inline-block; font-weight: bold; margin-bottom: 15px;">
                    FEATURED STORY
                </div>
                <img src="/images/blog/featured.jpg" alt="Featured Story" style="width: 100%; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
            </div>
            <div>
                <h2 style="color: var(--primary-blue); margin-bottom: 15px;">From Street to Classroom: Rebecca's Journey</h2>
                <p style="color: #666; margin-bottom: 15px;"><i class="far fa-calendar"></i> March 15, 2024 | <i class="far fa-user"></i> Ida Ddungu Muwanga</p>
                <p style="font-size: 1.1rem; line-height: 1.8; margin-bottom: 20px;">
                    When we found 12-year-old Rebecca on the streets of Wakiso, she had lost both parents to AIDS and was surviving by begging. Today, she's top of her class and dreams of becoming a doctor. Read her incredible transformation...
                </p>
                <a href="#" style="color: var(--primary-orange); font-weight: bold; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    Read Full Story <i class="fas fa-arrow-right"></i>
                </a>
                <div style="margin-top: 25px; padding-top: 20px; border-top: 1px solid #FFE0B2;">
                    <div style="display: inline-block; background: white; padding: 8px 15px; border-radius: 20px; margin-right: 10px; font-size: 0.9rem;">
                        <i class="fas fa-heart" style="color: #E91E63;"></i> 124 Reactions
                    </div>
                    <div style="display: inline-block; background: white; padding: 8px 15px; border-radius: 20px; font-size: 0.9rem;">
                        <i class="fas fa-comment"></i> 28 Comments
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="section-title">Latest Updates</h2>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px; margin: 40px 0;">
        @foreach([
            [
                'category' => 'Education',
                'title' => 'New Vocational Training Center Opens',
                'excerpt' => 'Our new center in Wakiso is now training 50 youths in carpentry, tailoring, and computer skills...',
                'date' => 'April 10, 2024',
                'image' => 'education.jpg',
                'color' => 'var(--primary-blue)'
            ],
            [
                'category' => 'Healthcare',
                'title' => 'Medical Outreach Serves 200+ Patients',
                'excerpt' => 'Our quarterly medical camp provided free consultations, HIV testing, and medications to vulnerable community members...',
                'date' => 'April 5, 2024',
                'image' => 'medical.jpg',
                'color' => '#4CAF50'
            ],
            [
                'category' => 'Land Project',
                'title' => '25% Milestone Reached!',
                'excerpt' => 'Thanks to generous donors worldwide, we\'ve reached 25% of our land acquisition goal. The dream is becoming reality...',
                'date' => 'March 28, 2024',
                'image' => 'land.jpg',
                'color' => 'var(--primary-orange)'
            ],
            [
                'category' => 'Success Story',
                'title' => 'Widow Builds Successful Tailoring Business',
                'excerpt' => 'After losing her husband, Jane received vocational training and a microloan. She now employs 3 other widows...',
                'date' => 'March 20, 2024',
                'image' => 'success.jpg',
                'color' => '#9C27B0'
            ],
            [
                'category' => 'Event',
                'title' => 'Annual Fundraising Gala Raises £15,000',
                'excerpt' => 'Our virtual gala brought together supporters from 12 countries to support orphans and widows in Uganda...',
                'date' => 'March 15, 2024',
                'image' => 'gala.jpg',
                'color' => '#2196F3'
            ],
            [
                'category' => 'Report',
                'title' => '2023 Annual Impact Report Released',
                'excerpt' => 'See how your support transformed lives last year. 100+ children educated, 70 widows empowered, 20 families housed...',
                'date' => 'March 10, 2024',
                'image' => 'report.jpg',
                'color' => '#FF9800'
            ]
        ] as $post)
        <div class="blog-card" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.08); transition: transform 0.3s;">
            <div style="height: 200px; background: #E0E0E0; position: relative;">
                <!-- Placeholder for blog image -->
                <div style="position: absolute; top: 15px; left: 15px; background: {{ $post['color'] }}; color: white; padding: 5px 15px; border-radius: 5px; font-size: 0.9rem; font-weight: bold;">
                    {{ $post['category'] }}
                </div>
                <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 5px; background: {{ $post['color'] }};"></div>
            </div>
            <div style="padding: 25px;">
                <h3 style="color: var(--primary-blue); margin-bottom: 10px; font-size: 1.2rem;">{{ $post['title'] }}</h3>
                <p style="color: #666; margin-bottom: 15px; font-size: 0.9rem;">
                    <i class="far fa-calendar"></i> {{ $post['date'] }}
                </p>
                <p style="margin-bottom: 20px; line-height: 1.6;">{{ $post['excerpt'] }}</p>
                <a href="#" style="color: var(--primary-orange); font-weight: bold; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                    Read More <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Newsletter Signup -->
    <div style="background: linear-gradient(135deg, var(--primary-blue), #003388); color: white; padding: 50px; border-radius: 15px; text-align: center; margin: 60px 0;">
        <h2 style="font-size: 2rem; margin-bottom: 15px;">Stay Connected</h2>
        <p style="font-size: 1.1rem; max-width: 600px; margin: 0 auto 30px;">
            Get inspiring stories, impact updates, and opportunities delivered to your inbox
        </p>
        <form style="max-width: 500px; margin: 0 auto;">
            <div style="display: flex; gap: 10px;">
                <input type="email" placeholder="Your email address" style="flex: 1; padding: 15px; border: none; border-radius: 5px; font-size: 1rem;">
                <button type="submit" class="cta-button" style="padding: 15px 30px; background-color: var(--primary-orange); color: white; border: none; border-radius: 5px; font-weight: bold; cursor: pointer;">
                    Subscribe
                </button>
            </div>
            <p style="font-size: 0.9rem; margin-top: 15px; opacity: 0.8;">
                We respect your privacy. Unsubscribe at any time.
            </p>
        </form>
    </div>
</div>

<style>
.blog-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.15);
}
</style>

@endsection
