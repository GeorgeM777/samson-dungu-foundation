<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;
Route::get('/', function () {
    return view('home');
});

Route::get('/what-we-do', function () {
    return view('what-we-do');
});

Route::get('/sponsor', function () {
    return view('sponsor');
});

Route::get('/get-involved', function () {
    return view('get-involved');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/special-projects', function () {
    return view('special-projects');
});

Route::get('/contact', function () {
    return view('contact');
});

// Add these routes
Route::get('/get-involved', function () {
    return view('get-involved');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/special-projects', function () {
    return view('special-projects');
});

Route::get('/test-flutterwave', function() {
    return 'Flutterwave test route is working!';
});

// Add these with your existing routes
// Route::get('/sponsor', [DonationController::class, 'index'])->name('sponsor');
Route::get('/sponsor', function () {
    return view('sponsor'); // or whatever your view name is
});
Route::post('/donate/process', [DonationController::class, 'process'])->name('donation.process');
Route::get('/donate/callback', [DonationController::class, 'callback'])->name('donation.callback');
Route::get('/donate/success', [DonationController::class, 'success'])->name('donation.success');
Route::get('/donate/failed', [DonationController::class, 'failed'])->name('donation.failed');

// Test Flutterwave connection
Route::get('/test-flutterwave-connection', [DonationController::class, 'testConnection']);


Route::get('/projects/orphans', function () {
    return view('projects.orphans');
})->name('projects.orphans');

Route::get('/projects/special-needs', function () {
    return view('projects.special-needs');
})->name('projects.special-needs');

Route::get('/projects/elderly-medical-camps', function () {
    return view('projects.elderly-medical-camps');
})->name('projects.elderly-medical-camps');

// routes/web.php
Route::post('/donation/submit-info', [DonationController::class, 'submitInfo'])->name('donation.submit-info');
