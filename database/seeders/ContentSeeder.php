<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteSetting;
use App\Models\HeroSlide;
use App\Models\ImpactStat;
use App\Models\Program;
use App\Models\ImpactStory;
use App\Models\LeadershipTeam;

class ContentSeeder extends Seeder
{
    public function run(): void
    {
        // Site settings (text content)
        $settings = [
            // Header / Footer
            ['key' => 'site_tagline', 'value' => 'Bringing Hope to Uganda Since 2012', 'type' => 'text', 'group' => 'general', 'label' => 'Site Tagline (in header)'],
            ['key' => 'footer_address', 'value' => 'Wakiso District, Central Uganda', 'type' => 'text', 'group' => 'contact', 'label' => 'Footer Address'],
            ['key' => 'footer_phone', 'value' => '+256 782 488 116', 'type' => 'text', 'group' => 'contact', 'label' => 'Footer Phone'],
            ['key' => 'footer_email', 'value' => 'info@samsondungufoundation.org', 'type' => 'text', 'group' => 'contact', 'label' => 'Footer Email'],
            ['key' => 'footer_registration', 'value' => '80034053198295', 'type' => 'text', 'group' => 'contact', 'label' => 'Registration Number'],

            // Home page - Our Mission & Vision
            ['key' => 'mission_text', 'value' => 'Uplifting poor Ugandans through medical outreach, elderly care, and support for orphans and widows — restoring dignity, health, and hope.', 'type' => 'textarea', 'group' => 'mission', 'label' => 'Mission Statement (Home)'],
            ['key' => 'vision_text', 'value' => 'A Uganda where no poor family is denied medical care, and every elderly person, orphan, and widow lives with dignity and hope.', 'type' => 'textarea', 'group' => 'mission', 'label' => 'Vision Statement (Home)'],
            ['key' => 'inclusive_statement', 'value' => "Samson Ddungu Foundation is a non-denominational, non-political organization working with communities across Uganda. We collaborate with all organizations, religions (Muslims, Christians, Protestants, Catholics, and others), and political entities, focusing on supporting vulnerable groups without discrimination. Our mission is to uplift poor families, orphans, marginalized children, and the elderly through collective efforts.", 'type' => 'textarea', 'group' => 'mission', 'label' => 'About / Inclusive Statement'],

            // Home - Urgent Appeal
            ['key' => 'urgent_appeal_title', 'value' => '🚨 Urgent Appeal: Land for Hope 2024', 'type' => 'text', 'group' => 'appeals', 'label' => 'Urgent Appeal Title'],
            ['key' => 'urgent_appeal_text', 'value' => 'We urgently need to purchase 10 acres of land in Wakiso District to expand our services. With rising cases of orphaned children due to HIV/AIDS and poverty, our current rented facilities are overcrowded and inadequate.', 'type' => 'textarea', 'group' => 'appeals', 'label' => 'Urgent Appeal Description'],
            ['key' => 'urgent_appeal_goal', 'value' => '£177,778 for 10 acres', 'type' => 'text', 'group' => 'appeals', 'label' => 'Urgent Appeal Goal'],

            // What We Do
            ['key' => 'what_we_do_hero_title', 'value' => 'Our Comprehensive Programs', 'type' => 'text', 'group' => 'what_we_do', 'label' => 'What We Do - Hero Title'],
            ['key' => 'what_we_do_hero_subtitle', 'value' => 'Holistic support for Uganda\'s most vulnerable communities', 'type' => 'text', 'group' => 'what_we_do', 'label' => 'What We Do - Hero Subtitle'],
            ['key' => 'approach_quote', 'value' => 'There\'s a solution to solve a problem. At Samson Ddungu Foundation, we are that solution for Uganda\'s most vulnerable.', 'type' => 'textarea', 'group' => 'what_we_do', 'label' => 'Approach Quote'],

            // Contact
            ['key' => 'contact_address', 'value' => 'Wakiso District, Central Uganda', 'type' => 'text', 'group' => 'contact', 'label' => 'Contact Page Address'],
            ['key' => 'contact_office_hours', 'value' => 'Monday - Friday: 8:00 AM - 5:00 PM EAT', 'type' => 'text', 'group' => 'contact', 'label' => 'Office Hours'],
            ['key' => 'contact_email_info', 'value' => 'info@samsondungufoundation.org', 'type' => 'text', 'group' => 'contact', 'label' => 'Contact - General Email'],
            ['key' => 'contact_email_partnerships', 'value' => 'partnerships@samsondungufoundation.org', 'type' => 'text', 'group' => 'contact', 'label' => 'Contact - Partnerships Email'],
            ['key' => 'contact_email_donations', 'value' => 'donations@samsondungufoundation.org', 'type' => 'text', 'group' => 'contact', 'label' => 'Contact - Donations Email'],
            ['key' => 'contact_email_volunteer', 'value' => 'volunteer@samsondungufoundation.org', 'type' => 'text', 'group' => 'contact', 'label' => 'Contact - Volunteer Email'],
        ];

        foreach ($settings as $s) {
            SiteSetting::updateOrCreate(['key' => $s['key']], $s);
        }

        // Hero Slides
        $heroSlides = [
            ['image' => '/images/hero/slide1-children.jpg', 'title' => 'Honoring Legacy, Transforming Lives', 'subtitle' => "Continuing Samson Ddungu's mission of compassion since 2012", 'order' => 1],
            ['image' => '/images/hero/slide2-community.jpg', 'title' => 'Empowering Vulnerable Communities', 'subtitle' => 'Education, healthcare, and sustainable development for all', 'order' => 2],
            ['image' => '/images/hero/slide3-education.jpg', 'title' => 'Building Brighter Futures', 'subtitle' => 'From orphan support to vocational training - creating lasting change', 'order' => 3],
        ];

        foreach ($heroSlides as $slide) {
            HeroSlide::firstOrCreate(['title' => $slide['title']], array_merge($slide, ['is_active' => true]));
        }

        // Impact Stats
        $stats = [
            ['number' => '100+', 'label' => 'Orphaned Children Educated & Cared For', 'order' => 1],
            ['number' => '70', 'label' => 'Widows Empowered with Skills Training', 'order' => 2],
            ['number' => '20+', 'label' => 'Vulnerable Families Supported', 'order' => 3],
            ['number' => '12', 'label' => 'Years of Dedicated Service', 'order' => 4],
        ];

        foreach ($stats as $stat) {
            ImpactStat::firstOrCreate(['label' => $stat['label']], array_merge($stat, ['is_active' => true]));
        }

        // Programs
        $programs = [
            [
                'title' => 'Education Support',
                'icon' => 'fas fa-graduation-cap',
                'short_description' => 'Providing scholarships, school supplies, and tutoring for orphaned and vulnerable children to break the cycle of poverty through education.',
                'image' => '/images/programs/education.jpg',
                'bullets' => ['Primary & secondary school scholarships', 'School supplies distribution', 'After-school tutoring programs', 'Computer literacy training'],
                'stats' => ['100+ Children Educated', '12 Schools Partnered'],
                'order' => 1,
            ],
            [
                'title' => 'Healthcare & Medical Support',
                'icon' => 'fas fa-heartbeat',
                'short_description' => 'Ensuring access to medical care, HIV/AIDS treatment, and health education for vulnerable community members.',
                'image' => '/images/programs/healthcare.jpg',
                'bullets' => ['Medical outreach clinics', 'HIV/AIDS treatment support', 'Maternal health programs', 'Health education workshops'],
                'stats' => ['500+ Patients Served', '4 Annual Medical Camps'],
                'order' => 2,
            ],
            [
                'title' => 'Shelter & Housing',
                'icon' => 'fas fa-home',
                'short_description' => 'Building and providing safe, decent housing for orphans, widows, and homeless community members.',
                'image' => '/images/programs/shelter.jpg',
                'bullets' => ['New home construction', 'Home renovations', 'Orphanage support', 'Emergency shelter'],
                'stats' => ['50 Homes Built', '20 Families Housed'],
                'order' => 3,
            ],
            [
                'title' => 'Nutrition & Food Security',
                'icon' => 'fas fa-utensils',
                'short_description' => 'Addressing malnutrition and food insecurity through sustainable agriculture and feeding programs.',
                'image' => '/images/programs/nutrition.jpg',
                'bullets' => ['School feeding programs', 'Agricultural training', 'Food distribution', 'Nutrition education'],
                'stats' => ['1,000+ Meals Served Monthly', '10 Community Gardens'],
                'order' => 4,
            ],
            [
                'title' => 'Counseling & Psychosocial Support',
                'icon' => 'fas fa-hands-helping',
                'short_description' => 'Providing emotional and psychological support for traumatized individuals and families.',
                'image' => '/images/programs/counseling.jpg',
                'bullets' => ['Individual counseling', 'Support groups', 'Trauma healing workshops', 'Child protection services'],
                'stats' => ['300+ Individuals Counseled', '24/7 Support Hotline'],
                'order' => 5,
            ],
        ];

        foreach ($programs as $program) {
            Program::firstOrCreate(['title' => $program['title']], array_merge($program, ['is_active' => true]));
        }

        // Impact Stories
        $stories = [
            [
                'title' => 'From Orphan to Graduate',
                'description' => 'Rebecca, supported since 2015, just graduated secondary school with top marks and is now studying nursing.',
                'image' => '/images/success/graduate.jpg',
                'link' => '/blog#rebecca-story',
                'order' => 1,
            ],
            [
                'title' => "Widow's Business Success",
                'description' => 'After vocational training, Jane now runs a successful tailoring business employing 3 other widows.',
                'image' => '/images/success/business.jpg',
                'link' => '/blog#jane-story',
                'order' => 2,
            ],
            [
                'title' => 'Family Transformation',
                'description' => 'The Muwanguzi family received housing, medical care, and agricultural training - now self-sufficient.',
                'image' => '/images/success/family.jpg',
                'link' => '/blog#muwanguzi-story',
                'order' => 3,
            ],
        ];

        foreach ($stories as $story) {
            ImpactStory::firstOrCreate(['title' => $story['title']], array_merge($story, ['is_active' => true]));
        }

        // Leadership Team
        $leaders = [
            [
                'name' => 'Ida Nakimwero Ddungu Muwanga',
                'position' => 'Executive Director',
                'phone' => '+46 72 925 71 01',
                'email' => 'ida@samsondungufoundation.org',
                'bio' => 'Ida leads the foundation with deep compassion and a vision for empowering Uganda\'s most vulnerable communities.',
                'order' => 1,
            ],
            [
                'name' => 'Kisigula Martin Wiseman',
                'position' => 'Director / Country Coordinator',
                'phone' => '+256 782 488 116',
                'email' => 'martin@samsondungufoundation.org',
                'bio' => 'Martin coordinates all on-the-ground operations in Uganda, ensuring programs deliver meaningful impact to the communities we serve.',
                'order' => 2,
            ],
        ];

        foreach ($leaders as $leader) {
            LeadershipTeam::firstOrCreate(['email' => $leader['email']], array_merge($leader, ['is_active' => true]));
        }
    }
}
