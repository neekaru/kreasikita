<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/admin', function () {
    return view('home', ['section' => 'admin']);
});

Route::get('/demo', function () {
    return view('home', ['section' => 'demo']);
});
