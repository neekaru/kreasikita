{{-- <x-demo::layouts.master>
    <h1>Hello World</h1>

    <p>Module: {!! config('demo.name') !!}</p>
</x-demo::layouts.master> --}}

@extends('demo::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('demo.name') !!}</p>
@endsection