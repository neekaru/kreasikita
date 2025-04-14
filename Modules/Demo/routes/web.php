<?php

use Illuminate\Support\Facades\Route;
use Modules\Demo\Http\Controllers\DemoController;
use Modules\Demo\Http\Controllers\AdminController;

// Regular demo routes
// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::resource('demo', DemoController::class)->names('demo');
// });
Route::get('demo', [DemoController::class, 'index'])->name('demo');
// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
});
