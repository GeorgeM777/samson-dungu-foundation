@extends('layouts.app')

@section('title', 'Donation Failed')
@section('content')

<div class="container text-center py-5">
    <div class="failed-icon">
        <i class="fas fa-exclamation-circle"></i>
    </div>

    <h1 class="mt-4">Donation Processing Failed</h1>
    <p class="lead">There was an issue processing your donation. Please try again.</p>

    @if(session('error'))
        <div class="alert alert-warning mt-4">
            <strong>Note:</strong> {{ session('error') }}
        </div>
    @endif

    <div class="troubleshooting mt-5">
        <h3>Possible Solutions:</h3>
        <ul class="list-unstyled">
            <li><i class="fas fa-check text-success"></i> Check your card details</li>
            <li><i class="fas fa-check text-success"></i> Ensure sufficient funds</li>
            <li><i class="fas fa-check text-success"></i> Try a different payment method</li>
            <li><i class="fas fa-check text-success"></i> Contact your bank if needed</li>
        </ul>
    </div>

    <div class="action-buttons mt-5">
        <a href="/sponsor" class="btn btn-primary btn-lg">
            <i class="fas fa-redo"></i> Try Again
        </a>
        <a href="/contact" class="btn btn-outline-primary btn-lg">
            <i class="fas fa-envelope"></i> Contact Support
        </a>
    </div>
</div>

<style>
.failed-icon {
    font-size: 6rem;
    color: #dc3545;
    animation: pulseWarning 1.5s infinite;
}

@keyframes pulseWarning {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}
</style>
@endsection
