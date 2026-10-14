@php
    $defaultAmounts = [
        ['amount' => '$10', 'description' => 'Provides a meal for a trainee'],
        ['amount' => '$25', 'description' => 'Buys crafting materials'],
        ['amount' => '$50', 'description' => 'Supports one week of training'],
        ['amount' => '$100', 'description' => 'Sponsors a full month for one beneficiary'],
    ];
    $donationHeading = \App\Models\SiteSetting::get('donation_page_heading', 'Your Generosity Changes Lives');
    $donationSubheading = \App\Models\SiteSetting::get('donation_page_subheading', 'Every donation helps us train, feed, and empower vulnerable youth in Uganda.');
    $donationStory = \App\Models\SiteSetting::get('donation_page_story', 'We support orphans and youth with special needs through vocational training and practical skills. With your help, they can learn to create handmade crafts, build independence, and shape a brighter future.');
    $donationButtonText = \App\Models\SiteSetting::get('donation_page_button_text', 'Donate Now');
    $donationLink = \App\Models\SiteSetting::get('donation_page_link', 'https://swapp.co.ug/fundraiser/SwAppMzI2ZGQ0NzEyMTgx');
    $donationAmounts = json_decode(\App\Models\SiteSetting::get('donation_page_amounts', json_encode($defaultAmounts)), true);
    $donationImages = \App\Models\SiteImage::whereIn('key', ['donation_hero', 'donation_story'])->get()->keyBy('key');
    $donationHeroRecord = $donationImages->get('donation_hero');
    $donationStoryRecord = $donationImages->get('donation_story');
    $donationHeroPath = $donationHeroRecord?->image ?? '/images/donate/hero-donate.jpg';
    $donationStoryPath = $donationStoryRecord?->image ?? '/images/gallery/education-class.jpg';
    $donationHeroImage = str_starts_with($donationHeroPath, 'http://') || str_starts_with($donationHeroPath, 'https://')
        ? $donationHeroPath
        : asset(ltrim($donationHeroPath, '/'));
    $donationStoryImage = str_starts_with($donationStoryPath, 'http://') || str_starts_with($donationStoryPath, 'https://')
        ? $donationStoryPath
        : asset(ltrim($donationStoryPath, '/'));
    if (!is_array($donationAmounts)) {
        $donationAmounts = $defaultAmounts;
    }
@endphp

<main class="donation-page">
    <section class="donation-hero">
        <div class="donation-inner donation-hero-grid">
            <div class="donation-hero-content">
                <p class="donation-eyebrow">A gift today. A stronger tomorrow.</p>
                <h1>{{ $donationHeading }}</h1>
                <p class="donation-lead">{{ $donationSubheading }}</p>
                <a class="donation-button" href="{{ $donationLink }}" target="_blank" rel="noopener noreferrer">
                    <i class="fas fa-heart" aria-hidden="true"></i>
                    {{ $donationButtonText }}
                </a>
                <p class="donation-trust-note"><i class="fas fa-hands-helping" aria-hidden="true"></i> Your support helps young people learn, create, and thrive.</p>
            </div>
            <figure class="donation-hero-photo">
                <img src="{{ $donationHeroImage }}" alt="{{ $donationHeroRecord?->label ?? 'Community food distribution in Uganda' }}" fetchpriority="high">
                <figcaption><span class="donation-photo-dot"></span> Every act of care creates possibility.</figcaption>
            </figure>
        </div>
    </section>

    <section class="donation-story donation-inner" aria-labelledby="donation-story-title">
        <figure class="donation-story-photo">
            <img src="{{ $donationStoryImage }}" alt="{{ $donationStoryRecord?->label ?? 'Students gathered outside their classroom' }}" loading="lazy">
            <figcaption>Education and practical skills can change a young person's path.</figcaption>
        </figure>
        <div class="donation-story-content">
            <p class="donation-eyebrow donation-eyebrow-light">A future built with opportunity</p>
            <h2 id="donation-story-title">Skills that open a future</h2>
            <div class="donation-story-copy">{!! $donationStory !!}</div>
            <a class="donation-story-link" href="{{ $donationLink }}" target="_blank" rel="noopener noreferrer">
                Be part of their story <span aria-hidden="true">&rarr;</span>
            </a>
        </div>
    </section>

    <section class="donation-amounts donation-inner" aria-labelledby="donation-amounts-title">
        <div class="donation-section-heading">
            <p class="donation-eyebrow donation-eyebrow-light">Small gifts. Meaningful change.</p>
            <h2 id="donation-amounts-title">Choose the impact you want to make</h2>
            <p>Choose a starting point. Your generosity helps create practical support for vulnerable youth.</p>
        </div>
        <div class="donation-tier-grid">
            @foreach($donationAmounts as $index => $tier)
                @if(!empty($tier['amount']) && !empty($tier['description']))
                    <a class="donation-tier" href="{{ $donationLink }}" target="_blank" rel="noopener noreferrer">
                        <span class="donation-tier-index">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <span class="donation-tier-amount">{{ $tier['amount'] }}</span>
                        <span class="donation-tier-description">{{ $tier['description'] }}</span>
                        <span class="donation-tier-action">Give this amount <span aria-hidden="true">&rarr;</span></span>
                    </a>
                @endif
            @endforeach
        </div>
    </section>

    <section class="donation-bottom-cta">
        <div class="donation-inner donation-bottom-content">
            <div>
                <h2>Help make the next opportunity possible.</h2>
                <p>Your generosity gives vulnerable youth the support to thrive.</p>
            </div>
            <a class="donation-button donation-button-blue" href="{{ $donationLink }}" target="_blank" rel="noopener noreferrer">
                {{ $donationButtonText }}
            </a>
        </div>
    </section>
</main>

<style>
    .donation-page {
        --donation-blue: #0047ab;
        --donation-blue-dark: #003388;
        --donation-orange: #ff6b35;
        --donation-ink: #2d2d2d;
        --donation-muted: #59636f;
        padding-top: 90px;
        color: var(--donation-ink);
    }

    .donation-inner {
        width: min(1120px, calc(100% - 48px));
        margin: 0 auto;
    }

    .donation-hero {
        background: linear-gradient(115deg, var(--donation-blue-dark), var(--donation-blue) 70%, #0b5e7c);
        color: #fff;
        overflow: hidden;
    }

    .donation-hero-grid {
        display: grid;
        grid-template-columns: minmax(0, 0.9fr) minmax(0, 1.1fr);
        align-items: center;
        gap: 42px;
        padding-top: 44px;
        padding-bottom: 44px;
    }

    .donation-hero-content {
        padding: 28px 0;
    }

    .donation-hero-photo {
        position: relative;
        height: 430px;
        margin: 0;
        overflow: hidden;
        border-radius: 7px;
        background: #0b5e7c;
    }

    .donation-hero-photo img,
    .donation-story-photo img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 700ms cubic-bezier(0.2, 0.75, 0.25, 1);
    }

    .donation-hero-photo img {
        object-position: center 45%;
    }

    .donation-hero-photo figcaption {
        position: absolute;
        right: 16px;
        bottom: 16px;
        left: 16px;
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 12px 15px;
        border-radius: 4px;
        background: rgba(0, 31, 82, 0.86);
        color: #fff;
        font-size: 0.9rem;
        font-weight: 600;
    }

    .donation-photo-dot {
        width: 9px;
        height: 9px;
        flex: 0 0 9px;
        border-radius: 50%;
        background: var(--donation-orange);
    }

    .donation-eyebrow {
        margin: 0 0 14px;
        color: #ffd5c5;
        font-size: 0.82rem;
        font-weight: 700;
        text-transform: uppercase;
    }

    .donation-hero h1 {
        max-width: 780px;
        margin: 0;
        font-size: 3.1rem;
        line-height: 1.12;
        color: #fff;
    }

    .donation-lead {
        max-width: 680px;
        margin: 20px 0 28px;
        color: rgba(255, 255, 255, 0.9);
        font-size: 1.15rem;
    }

    .donation-trust-note {
        display: flex;
        align-items: center;
        gap: 9px;
        margin: 18px 0 0;
        color: rgba(255, 255, 255, 0.84);
        font-size: 0.88rem;
        line-height: 1.5;
    }

    .donation-trust-note i {
        color: #ffd5c5;
    }

    .donation-button {
        display: inline-flex;
        min-height: 52px;
        align-items: center;
        justify-content: center;
        padding: 12px 25px;
        background: var(--donation-orange);
        color: #fff;
        border-radius: 5px;
        font-size: 1rem;
        font-weight: 700;
        text-decoration: none;
        transition: background 0.2s ease, transform 0.2s ease;
    }

    .donation-button:hover {
        background: #e85827;
        color: #fff;
        transform: translateY(-2px);
    }

    .donation-story {
        display: grid;
        grid-template-columns: minmax(0, 1fr) minmax(0, 1.05fr);
        gap: 54px;
        align-items: center;
        padding-top: 78px;
        padding-bottom: 78px;
    }

    .donation-story-photo {
        position: relative;
        height: 390px;
        margin: 0;
        overflow: hidden;
        border-radius: 7px;
        background: #e8eef3;
    }

    .donation-story-photo img {
        object-position: center 35%;
    }

    @media (hover: hover) and (prefers-reduced-motion: no-preference) {
        .donation-hero-photo:hover img,
        .donation-story-photo:hover img {
            transform: scale(1.075);
        }
    }

    @media (hover: none) and (prefers-reduced-motion: no-preference) {
        .donation-hero-photo:active img,
        .donation-story-photo:active img {
            transform: scale(1.045);
            transition-duration: 220ms;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .donation-hero-photo img,
        .donation-story-photo img {
            transition: none;
        }
    }

    .donation-story-photo figcaption {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 12px 16px;
        background: linear-gradient(transparent, rgba(22, 34, 45, 0.85));
        color: white;
        font-size: 0.85rem;
        font-weight: 600;
    }

    .donation-eyebrow-light {
        color: var(--donation-orange);
    }

    .donation-story h2,
    .donation-section-heading h2 {
        margin: 0 0 14px;
        color: var(--donation-blue-dark);
        font-size: 2rem;
        line-height: 1.2;
    }

    .donation-story-copy {
        max-width: 820px;
        color: var(--donation-muted);
        font-size: 1.05rem;
        line-height: 1.8;
    }

    .donation-story-copy p,
    .donation-story-copy ul,
    .donation-story-copy ol {
        margin: 0 0 12px;
    }

    .donation-story-copy > :last-child {
        margin-bottom: 0;
    }

    .donation-story-link {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        margin-top: 24px;
        color: var(--donation-blue);
        font-size: 0.96rem;
        font-weight: 700;
        text-decoration: none;
    }

    .donation-story-link span {
        color: var(--donation-orange);
        font-size: 1.2rem;
        transition: transform 0.2s ease;
    }

    .donation-story-link:hover span {
        transform: translateX(4px);
    }

    .donation-amounts {
        padding-bottom: 76px;
    }

    .donation-section-heading {
        max-width: 670px;
        margin-bottom: 26px;
    }

    .donation-section-heading p:last-child {
        margin: 0;
        color: var(--donation-muted);
    }

    .donation-tier-grid {
        display: grid;
        grid-template-columns: repeat(4, minmax(0, 1fr));
        gap: 16px;
    }

    .donation-tier {
        position: relative;
        display: flex;
        min-height: 230px;
        flex-direction: column;
        align-items: flex-start;
        padding: 24px;
        border: 1px solid #e5e8ed;
        border-top: 4px solid var(--donation-orange);
        background: #fff;
        color: inherit;
        text-decoration: none;
        transition: border-color 0.2s ease, box-shadow 0.2s ease, transform 0.2s ease;
    }

    .donation-tier-index {
        margin-bottom: 18px;
        color: var(--donation-orange);
        font-size: 0.76rem;
        font-weight: 800;
    }

    .donation-tier:hover {
        border-color: var(--donation-orange);
        box-shadow: 0 10px 24px rgba(0, 51, 136, 0.1);
        transform: translateY(-3px);
    }

    .donation-tier-amount {
        color: var(--donation-blue);
        font-size: 2rem;
        font-weight: 800;
        line-height: 1.1;
    }

    .donation-tier-description {
        margin-top: 12px;
        color: var(--donation-muted);
        font-size: 0.96rem;
        line-height: 1.5;
    }

    .donation-tier-action {
        display: flex;
        width: 100%;
        justify-content: space-between;
        margin-top: auto;
        padding-top: 20px;
        color: var(--donation-blue-dark);
        font-size: 0.88rem;
        font-weight: 700;
    }

    .donation-bottom-cta {
        padding: 34px 0;
        background: #fff0e8;
        border-top: 1px solid #f6d9cc;
    }

    .donation-bottom-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 24px;
    }

    .donation-bottom-content h2 {
        margin: 0 0 6px;
        color: var(--donation-blue-dark);
        font-size: 1.5rem;
        line-height: 1.3;
    }

    .donation-bottom-content p {
        margin: 0;
        color: var(--donation-muted);
    }

    .donation-button-blue {
        flex: 0 0 auto;
        background: var(--donation-blue);
    }

    .donation-button-blue:hover {
        background: var(--donation-blue-dark);
    }

    @media (max-width: 900px) {
        .donation-hero-grid {
            grid-template-columns: minmax(0, 0.95fr) minmax(0, 1.05fr);
            gap: 26px;
        }

        .donation-hero-photo {
            height: 390px;
        }

        .donation-hero h1 {
            font-size: 2.65rem;
        }

        .donation-story {
            gap: 34px;
        }

        .donation-story-photo {
            height: 340px;
        }

        .donation-tier-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }

    @media (max-width: 600px) {
        .donation-page {
            padding-top: 70px;
        }

        .donation-inner {
            width: min(100% - 36px, 1120px);
        }

        .donation-hero {
            padding: 0;
        }

        .donation-hero-grid {
            grid-template-columns: 1fr;
            gap: 22px;
            padding-top: 32px;
            padding-bottom: 24px;
        }

        .donation-hero-content {
            padding: 20px 0 0;
        }

        .donation-hero-photo {
            height: min(72vw, 360px);
            min-height: 240px;
        }

        .donation-hero h1 {
            font-size: 2.2rem;
        }

        .donation-lead {
            font-size: 1rem;
        }

        .donation-story {
            grid-template-columns: 1fr;
            gap: 26px;
            padding-top: 52px;
            padding-bottom: 52px;
        }

        .donation-story-photo {
            height: min(78vw, 360px);
            min-height: 240px;
        }

        .donation-story h2,
        .donation-section-heading h2 {
            font-size: 1.7rem;
        }

        .donation-tier-grid {
            grid-template-columns: 1fr;
        }

        .donation-tier {
            min-height: 190px;
        }

        .donation-bottom-content {
            align-items: flex-start;
            flex-direction: column;
        }
    }
</style>
