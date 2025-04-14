<?php

use Illuminate\Support\Facades\Route;
use Modules\Demo\Http\Controllers\DemoController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('demo', DemoController::class)->names('demo');
});
