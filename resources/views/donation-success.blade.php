@extends('layouts.app')

@section('title', 'Thank You for Your Donation')
@section('content')

<div class="container text-center py-5">
    <div class="success-checkmark">
        <i class="fas fa-check-circle"></i>
    </div>

    <h1 class="mt-4">Thank You for Your Generous Donation!</h1>
    <p class="lead">Your support is making a real difference in Uganda.</p>

    @if(session('donation'))
        <div class="donation-receipt mt-5">
            <h3><i class="fas fa-receipt"></i> Donation Receipt</h3>
            <div class="receipt-details">
                <p><strong>Reference:</strong> {{ session('donation')->reference }}</p>
                <p><strong>Amount:</strong> £{{ number_format(session('donation')->amount, 2) }}</p>
<p><strong>Date:</strong> {{ session('donation')->completed_at ? session('donation')->completed_at->format('F j, Y') : now()->format('F j, Y') }}</p>
                <p><strong>Designation:</strong> {{ session('donation')->designation }}</p>
            </div>

            <p class="receipt-note">
                A receipt has been sent to {{ session('donation')->email }}
            </p>
        </div>
    @endif

    <div class="next-steps mt-5">
        <h3>What Happens Next?</h3>
        <div class="steps-timeline">
            <div class="step">
                <div class="step-icon">1</div>
                <p>You'll receive a detailed email receipt</p>
            </div>
            <div class="step">
                <div class="step-icon">2</div>
                <p>We'll process your donation within 24 hours</p>
            </div>
            <div class="step">
                <div class="step-icon">3</div>
                <p>You'll receive impact updates in our newsletter</p>
            </div>
        </div>
    </div>

    <div class="action-buttons mt-5">
        <a href="/" class="btn btn-primary btn-lg">
            <i class="fas fa-home"></i> Return Home
        </a>
        <a href="/get-involved" class="btn btn-outline-primary btn-lg">
            <i class="fas fa-hands-helping"></i> Get More Involved
        </a>
        <a href="/special-projects" class="btn btn-outline-primary btn-lg">
            <i class="fas fa-project-diagram"></i> View Other Projects
        </a>
    </div>
</div>

<style>
.success-checkmark {
    font-size: 6rem;
    color: #4CAF50;
    animation: scaleCheck 0.5s ease;
}

.donation-receipt {
    max-width: 500px;
    margin: 0 auto;
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.steps-timeline {
    display: flex;
    justify-content: center;
    gap: 40px;
    margin-top: 30px;
    flex-wrap: wrap;
}

.step {
    text-align: center;
    flex: 1;
    min-width: 200px;
}

.step-icon {
    width: 50px;
    height: 50px;
    background: var(--primary-orange);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    margin: 0 auto 15px;
}

@keyframes scaleCheck {
    0% { transform: scale(0); }
    70% { transform: scale(1.2); }
    100% { transform: scale(1); }
}
</style>
@endsection
