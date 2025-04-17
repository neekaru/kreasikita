<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Display the home page with Bootstrap and Alpine.js dark/light mode.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Display the about us page.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }
}