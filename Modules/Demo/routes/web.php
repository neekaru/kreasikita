<?php

use Illuminate\Support\Facades\Route;
use Modules\Demo\Http\Controllers\DemoController;
use Modules\Demo\Http\Controllers\AdminController;

// Regular demo routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('demo', DemoController::class)->names('demo');
});

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
});
