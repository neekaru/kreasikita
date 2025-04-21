<?php

use Illuminate\Support\Facades\Route;
use Modules\Demo\Http\Controllers\DemoController;
use Modules\Demo\Http\Controllers\AdminController;

// Regular demo routes
// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::resource('demo', DemoController::class)->names('demo');
// });
Route::prefix('demo')->group(function () {
    Route::get('/', [DemoController::class, 'index'])->name('demo');
    Route::get('chat', [DemoController::class, 'chat'])->name('chat');
    Route::get('login', [DemoController::class, 'login'])->name('login');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/reviews', [AdminController::class, 'review_index'])->name('reviews');
    Route::post('/reviews/{review}', [AdminController::class, 'review_update'])->name('reviews.update');
    Route::delete('/reviews/{review}', [AdminController::class, 'review_destroy'])->name('reviews.destroy');
});

// Route::prefix('/admin', function () {
//     return view('home', ['section' => 'admin']);
// });
// Admin routes

