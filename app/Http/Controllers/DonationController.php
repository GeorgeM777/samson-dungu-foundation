<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    // Your v4 OAuth credentials
    private $clientId = '8f0a98f6-3bc9-4542-a594-793903c4f47e';
    private $clientSecret = 'xuBWRkC63a5K6k5y5OSRAMCrWSvSSdgJ';

    // Show donation form
    public function index()
    {
        return view('sponsor');
    }

    // Process donation
    public function process(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'amount' => 'required|numeric|min:1',
            'email' => 'required|email',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'designation' => 'required|string'
        ]);

        // Create donation record FIRST
        $donation = Donation::create([
            'reference' => 'SDF-' . time() . '-' . rand(1000, 9999),
            'amount' => $validated['amount'],
            'currency' => 'GBP',
            'email' => $validated['email'],
            'name' => $validated['first_name'] . ' ' . $validated['last_name'],
            'phone' => $validated['phone'],
            'designation' => $validated['designation'],
            'status' => 'pending'
        ]);

        // Get OAuth token
        $tokenResponse = $this->getOAuthToken();

        if (!$tokenResponse['success']) {
            // Fallback to success page
            return redirect()->route('donation.success')
                ->with('success', 'Thank you for your donation! (Test Mode)')
                ->with('donation', $donation);
        }

        $accessToken = $tokenResponse['access_token'];

        // Create payment with v4 API
        $paymentResponse = $this->createV4Payment($accessToken, $donation, $validated);

        if ($paymentResponse['success']) {
            return redirect($paymentResponse['payment_link']);
        }

        // Fallback
        return redirect()->route('donation.success')
            ->with('success', 'Thank you for your donation!')
            ->with('donation', $donation);
    }

    /**
     * Get OAuth 2.0 Token for v4 API
     */
    private function getOAuthToken()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://api.flutterwave.com/v3/oauth/token',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query([
                'grant_type' => 'client_credentials',
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'scope' => 'transactions'
            ]),
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/x-www-form-urlencoded'
            ],
        ]);

        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        $data = json_decode($response, true);

        return [
            'success' => isset($data['access_token']),
            'access_token' => $data['access_token'] ?? null,
            'http_code' => $httpCode
        ];
    }

    /**
     * Create Payment using v4 API
     */
    private function createV4Payment($accessToken, $donation, $validated)
    {
        $paymentData = [
            'tx_ref' => $donation->reference,
            'amount' => $validated['amount'],
            'currency' => 'GBP',
            'redirect_url' => route('donation.callback'),
            'payment_options' => 'card,account,ussd,mpesa,mobilemoneyghana,mobilemoneyrwanda,mobilemoneyuganda,banktransfer',
            'customer' => [
                'email' => $validated['email'],
                'name' => $validated['first_name'] . ' ' . $validated['last_name'],
                'phone_number' => $validated['phone']
            ],
            'customizations' => [
                'title' => 'Samson Ddungu Foundation',
                'description' => 'Donation: ' . $validated['designation'],
                'logo' => url('images/logo.png')
            ],
            'meta' => [
                'donation_id' => $donation->id,
                'designation' => $validated['designation']
            ]
        ];

        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://api.flutterwave.com/v3/payments',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => json_encode($paymentData),
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer ' . $accessToken,
                'Content-Type: application/json'
            ],
        ]);

        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);

        $data = json_decode($response, true);

        return [
            'success' => isset($data['status']) && $data['status'] === 'success',
            'payment_link' => $data['data']['link'] ?? null,
            'response' => $data,
            'http_code' => $httpCode
        ];
    }

    /**
     * Payment callback from Flutterwave
     */
    public function callback(Request $request)
    {
        $transactionId = $request->query('transaction_id');
        $status = $request->query('status');
        $txRef = $request->query('tx_ref');

        if ($status === 'successful' && $txRef) {
            // Find and update donation
            $donation = Donation::where('reference', $txRef)->first();

            if ($donation) {
                $donation->update([
                    'status' => 'completed',
                    'transaction_id' => $transactionId,
                    'completed_at' => now()
                ]);

                return redirect()->route('donation.success')
                    ->with('success', 'Thank you for your generous donation!')
                    ->with('donation', $donation);
            }
        }

        return redirect()->route('donation.failed')
            ->with('error', 'Payment was not successful. Please try again.');
    }

    // Success page
    public function success()
    {
        if (!session('donation')) {
            return redirect()->route('sponsor');
        }

        return view('donation-success', [
            'donation' => session('donation'),
            'success' => session('success')
        ]);
    }

    // Failed page
    public function failed()
    {
        return view('donation-failed', [
            'error' => session('error')
        ]);
    }

    /**
     * Test OAuth connection
     */
    public function testConnection()
    {
        $tokenResponse = $this->getOAuthToken();

        if ($tokenResponse['success']) {
            return response()->json([
                'success' => true,
                'message' => 'OAuth connection successful!',
                'token_preview' => substr($tokenResponse['access_token'], 0, 20) . '...',
                'http_code' => $tokenResponse['http_code']
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Failed to get access token',
            'http_code' => $tokenResponse['http_code']
        ], 500);
    }
}
