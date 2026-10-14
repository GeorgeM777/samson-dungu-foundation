<?php

namespace Tests\Feature;

use App\Models\SiteSetting;
use App\Models\User;
use Database\Seeders\DonationPageSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DonationPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_edit_donation_page_content_and_amounts(): void
    {
        $this->seed(DonationPageSeeder::class);
        $admin = User::factory()->create(['role' => 'admin']);

        $this->actingAs($admin)
            ->get(route('admin.content.donation-page'))
            ->assertOk()
            ->assertSee('Suggested Donation Amounts');

        $this->actingAs($admin)
            ->get(route('admin.content.settings'))
            ->assertOk()
            ->assertDontSee('Donation Amounts');

        $this->actingAs($admin)
            ->get(route('admin.content.images'))
            ->assertOk()
            ->assertSee('Donation Page - Community Support')
            ->assertSee('Donation Page - Students');

        $fundraiserUrl = 'https://swapp.co.ug/fundraiser/SwAppMzI2ZGQ0NzEyMTgx';
        $this->actingAs($admin)
            ->put(route('admin.content.donation-page.update'), [
                'heading' => 'Give a young person a chance',
                'subheading' => 'Your gift supports practical training.',
                'story' => '<p>Young people learn useful skills.</p>',
                'button_text' => 'Support a trainee',
                'link' => $fundraiserUrl,
                'amounts' => [
                    ['amount' => '$15', 'description' => 'Provides a shared meal'],
                    ['amount' => '$40', 'description' => 'Funds workshop materials'],
                ],
            ])
            ->assertRedirect();

        $this->assertSame('Give a young person a chance', SiteSetting::get('donation_page_heading'));
        $this->assertSame(2, count(json_decode(SiteSetting::get('donation_page_amounts'), true)));

        $this->get(route('sponsor'))
            ->assertOk()
            ->assertSee('Give a young person a chance')
            ->assertSee('Support a trainee')
            ->assertSee('Provides a shared meal')
            ->assertSee('images/donate/hero-donate.jpg')
            ->assertSee('images/gallery/education-class.jpg')
            ->assertSee('href="' . $fundraiserUrl . '" target="_blank" rel="noopener noreferrer"', false);
    }
}