<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use App\Models\SiteImage;
use Illuminate\Database\Seeder;

class DonationPageSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'donation_page_heading', 'value' => 'Your Generosity Changes Lives', 'type' => 'text', 'group' => 'donation_page', 'label' => 'Hero Heading'],
            ['key' => 'donation_page_subheading', 'value' => 'Every donation helps us train, feed, and empower vulnerable youth in Uganda.', 'type' => 'textarea', 'group' => 'donation_page', 'label' => 'Hero Subheading'],
            ['key' => 'donation_page_story', 'value' => 'We support orphans and youth with special needs through vocational training and practical skills. With your help, they can learn to create handmade crafts, build independence, and shape a brighter future.', 'type' => 'richtext', 'group' => 'donation_page', 'label' => 'Story Content'],
            ['key' => 'donation_page_button_text', 'value' => 'Donate Now', 'type' => 'text', 'group' => 'donation_page', 'label' => 'Donate Button Text'],
            ['key' => 'donation_page_link', 'value' => 'https://swapp.co.ug/fundraiser/SwAppMzI2ZGQ0NzEyMTgx', 'type' => 'url', 'group' => 'donation_page', 'label' => 'SwApp Link'],
            [
                'key' => 'donation_page_amounts',
                'value' => json_encode([
                    ['amount' => '$10', 'description' => 'Provides a meal for a trainee'],
                    ['amount' => '$25', 'description' => 'Buys crafting materials'],
                    ['amount' => '$50', 'description' => 'Supports one week of training'],
                    ['amount' => '$100', 'description' => 'Sponsors a full month for one beneficiary'],
                ], JSON_UNESCAPED_SLASHES),
                'type' => 'repeater',
                'group' => 'donation_page',
                'label' => 'Donation Amounts',
            ],
        ];

        foreach ($settings as $setting) {
            SiteSetting::firstOrCreate(['key' => $setting['key']], $setting);
        }

        $images = [
            [
                'key' => 'donation_hero',
                'image' => '/images/donate/hero-donate.jpg',
                'label' => 'Donation Page - Community Support',
                'description' => 'Hero image on the donation page. Replace it from the Site Images manager.',
                'group' => 'donation',
            ],
            [
                'key' => 'donation_story',
                'image' => '/images/gallery/education-class.jpg',
                'label' => 'Donation Page - Students',
                'description' => 'Story image on the donation page. Replace it from the Site Images manager.',
                'group' => 'donation',
            ],
        ];

        foreach ($images as $image) {
            SiteImage::firstOrCreate(['key' => $image['key']], $image);
        }
    }
}