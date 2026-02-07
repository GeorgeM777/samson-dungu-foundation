<?php
// app/Http\Controllers/DonationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Donation;
use App\Mail\DonationInformationReceived;
use App\Mail\DonationConfirmation;

class DonationController extends Controller
{
    public function submitInfo(Request $request)
    {
        // Map form data to match database fields
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string|max:500',
            'amount' => 'required|numeric|min:1',
            'currency' => 'required|string|in:USD,UGX,GBP,EUR,GBP',
            'payment_method' => 'required|string|in:bank_ugx,bank_usd,mobile_money,cash',
            'transaction_id' => 'required|string|max:100',
            'designation' => 'required|string',
            'frequency' => 'required|string|in:one_time,monthly,quarterly,yearly',
            'message' => 'nullable|string|max:1000',
        ]);

        try {
            // Adjust frequency format if needed
            if ($validated['frequency'] === 'one-time') {
                $validated['frequency'] = 'one_time';
            }

            // Create donation record
            $donation = Donation::create($validated);

            // Send email to admin
            Mail::to('director@samsondungufoundation.org')
                ->send(new DonationInformationReceived($donation));

            // Send confirmation to donor
            Mail::to($donation->email)
                ->send(new DonationConfirmation($donation));

            return redirect()->back()->with('success',
                'Thank you! Your donation information has been submitted. Reference: ' . $donation->reference_code .
                '. We will contact you shortly to confirm receipt.');

        } catch (\Exception $e) {
            \Log::error('Donation submission failed: ' . $e->getMessage());

            return redirect()->back()
                ->with('error', 'There was an error submitting your donation information. Please try again or contact us directly.')
                ->withInput();
        }
    }
}
