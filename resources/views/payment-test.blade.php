@extends('layouts.app')

@section('title', 'Test Payment Page')
@section('content')

<div class="container py-5 text-center">
    <div class="payment-test">
        <i class="fas fa-credit-card fa-4x text-primary mb-4"></i>
        <h1>Payment Test Mode</h1>
        <p>This shows your payment would work. In production, you'd be redirected to Flutterwave.</p>

        <div class="payment-details mt-4">
            <h3>Donation Details:</h3>
            <div class="details-card">
                <p><strong>Reference:</strong> {{ $donation->reference }}</p>
                <p><strong>Amount:</strong> £{{ number_format($donation->amount, 2) }}</p>
                <p><strong>For:</strong> {{ $donation->designation }}</p>
                <p><strong>Donor:</strong> {{ $donation->name }}</p>
                <p><strong>Email:</strong> {{ $donation->email }}</p>
                <p><strong>Status:</strong> <span class="badge bg-warning">Pending Payment</span></p>
            </div>
        </div>

        <div class="test-instructions mt-5">
            <h4>Next Steps for Full Implementation:</h4>
            <ol class="text-start">
                <li>Install Flutterwave PHP SDK: <code>composer require flutterwave/flutterwave-php</code></li>
                <li>Configure your .env file with Flutterwave credentials</li>
                <li>Update DonationController to use Flutterwave API</li>
                <li>Set up webhooks for payment confirmation</li>
            </ol>
        </div>

        <div class="action-buttons mt-5">
            <a href="{{ route('donation.success') }}" class="btn btn-success btn-lg">
                <i class="fas fa-check-circle"></i> Simulate Successful Payment
            </a>
            <a href="/sponsor" class="btn btn-secondary btn-lg">
                <i class="fas fa-redo"></i> Back to Donation Form
            </a>
        </div>
    </div>
</div>

<style>
.payment-test {
    max-width: 600px;
    margin: 0 auto;
    padding: 40px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.details-card {
    background: #f8f9fa;
    padding: 25px;
    border-radius: 15px;
    margin: 20px 0;
    text-align: left;
}

.details-card p {
    margin-bottom: 10px;
    font-size: 1.1rem;
}

.badge {
    padding: 5px 12px;
    border-radius: 20px;
}

.test-instructions {
    background: #e3f2fd;
    padding: 25px;
    border-radius: 15px;
    text-align: left;
}

.test-instructions ol {
    padding-left: 20px;
}

.test-instructions li {
    margin-bottom: 10px;
    font-size: 1rem;
}

code {
    background: #333;
    color: #fff;
    padding: 2px 8px;
    border-radius: 4px;
    font-family: monospace;
}

.action-buttons {
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
}
</style>
@endsection
