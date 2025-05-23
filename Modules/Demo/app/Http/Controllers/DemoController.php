<?php

namespace Modules\Demo\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('demo::index');
    }

    public function chat()
    {
        return view('demo::chat');
    }

    public function login()
    {
        return view('demo::login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('demo::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('demo::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('demo::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {}
}
