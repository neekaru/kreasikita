{{-- <x-demo::layouts.master>
    <h1>Hello World</h1>

    <p>Module: {!! config('demo.name') !!}</p>
</x-demo::layouts.master> --}}

@extends('demo::layouts.master')

@section('content')
    <div class="text-center">
        <h1 class="display-4">Hello World</h1>
        <p class="lead">Module: {!! config('demo.name') !!}</p>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <a href="/demo/chat" class="btn btn-primary btn-lg">Go to Chat</a>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <a href="/demo/login" class="btn btn-primary btn-lg">Go to Login</a>
    </div>
@endsection