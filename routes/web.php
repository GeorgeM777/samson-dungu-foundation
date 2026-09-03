<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;

// Public Routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/what-we-do', function () {
    return view('what-we-do');
})->name('what-we-do');

Route::get('/sponsor', function () {
    return view('sponsor');
})->name('sponsor');

Route::get('/get-involved', function () {
    return view('get-involved');
})->name('get-involved');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/special-projects', function () {
    return view('special-projects');
})->name('special-projects');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Project Routes
Route::prefix('projects')->group(function () {
    Route::get('/orphans', function () {
        return view('projects.orphans');
    })->name('projects.orphans');

    Route::get('/special-needs', function () {
        return view('projects.special-needs');
    })->name('projects.special-needs');

    Route::get('/elderly-medical-camps', function () {
        return view('projects.elderly-medical-camps');
    })->name('projects.elderly-medical-camps');
});

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
        Route::post('/users', [AdminController::class, 'addUser'])->name('admin.users.add');
        Route::post('/users/{id}/reset-password', [AdminController::class, 'resetPassword'])->name('admin.users.reset');
        Route::delete('/users/{id}', [AdminController::class, 'deleteUser'])->name('admin.users.delete');
    });
});
