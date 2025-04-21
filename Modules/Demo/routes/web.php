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

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
});
