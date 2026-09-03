<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;

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

        // Content Management
        Route::prefix('content')->name('admin.content.')->group(function () {
            Route::get('/', [ContentController::class, 'dashboard'])->name('dashboard');

            Route::get('/settings', [ContentController::class, 'settings'])->name('settings');
            Route::put('/settings', [ContentController::class, 'updateSettings'])->name('settings.update');

            Route::get('/hero', [ContentController::class, 'heroSlides'])->name('hero');
            Route::post('/hero', [ContentController::class, 'storeHeroSlide'])->name('hero.store');
            Route::put('/hero/{id}', [ContentController::class, 'updateHeroSlide'])->name('hero.update');
            Route::delete('/hero/{id}', [ContentController::class, 'deleteHeroSlide'])->name('hero.delete');

            Route::get('/stats', [ContentController::class, 'impactStats'])->name('stats');
            Route::post('/stats', [ContentController::class, 'storeImpactStat'])->name('stats.store');
            Route::put('/stats/{id}', [ContentController::class, 'updateImpactStat'])->name('stats.update');
            Route::delete('/stats/{id}', [ContentController::class, 'deleteImpactStat'])->name('stats.delete');

            Route::get('/programs', [ContentController::class, 'programs'])->name('programs');
            Route::post('/programs', [ContentController::class, 'storeProgram'])->name('programs.store');
            Route::put('/programs/{id}', [ContentController::class, 'updateProgram'])->name('programs.update');
            Route::delete('/programs/{id}', [ContentController::class, 'deleteProgram'])->name('programs.delete');

            Route::get('/stories', [ContentController::class, 'stories'])->name('stories');
            Route::post('/stories', [ContentController::class, 'storeStory'])->name('stories.store');
            Route::put('/stories/{id}', [ContentController::class, 'updateStory'])->name('stories.update');
            Route::delete('/stories/{id}', [ContentController::class, 'deleteStory'])->name('stories.delete');

            Route::get('/leaders', [ContentController::class, 'leaders'])->name('leaders');
            Route::post('/leaders', [ContentController::class, 'storeLeader'])->name('leaders.store');
            Route::put('/leaders/{id}', [ContentController::class, 'updateLeader'])->name('leaders.update');
            Route::delete('/leaders/{id}', [ContentController::class, 'deleteLeader'])->name('leaders.delete');

            Route::get('/images', [ContentController::class, 'images'])->name('images');
            Route::post('/images', [ContentController::class, 'storeImage'])->name('images.store');
            Route::put('/images/{id}', [ContentController::class, 'updateImage'])->name('images.update');
            Route::delete('/images/{id}', [ContentController::class, 'deleteImage'])->name('images.delete');
        });
    });
});
