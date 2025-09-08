@extends('layouts.public')

@section('title', $title . ' - Buhimba United Saints FC')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-4 text-club-green mb-4">{{ $title }}</h1>
            <p class="lead text-muted mb-4">This page is under construction and will be available soon.</p>
            <div class="bg-light p-4 rounded">
                <h5 class="text-club-green mb-3">Coming Soon</h5>
                <p class="mb-3">We're working hard to bring you comprehensive {{ strtolower($title) }} information.</p>
                <a href="{{ route('home') }}" class="btn btn-club-primary">Return Home</a>
            </div>
        </div>
    </div>
</div>
@endsection
