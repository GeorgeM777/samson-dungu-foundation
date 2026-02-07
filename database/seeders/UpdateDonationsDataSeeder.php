<?php
// database/seeders/UpdateDonationsDataSeeder.php

namespace Database\Seeders;

use App\Models\Donation;
use Illuminate\Database\Seeder;

class UpdateDonationsDataSeeder extends Seeder
{
    public function run(): void
    {
        // Update existing donations to split names
        $donations = Donation::whereNotNull('old_name')->get();

        foreach ($donations as $donation) {
            $nameParts = explode(' ', $donation->old_name, 2);
            $donation->first_name = $nameParts[0] ?? 'Unknown';
            $donation->last_name = $nameParts[1] ?? 'Donor';
            $donation->save();
        }

        // Remove old_name column after migration
        // Note: This requires another migration to drop the column
    }
}
