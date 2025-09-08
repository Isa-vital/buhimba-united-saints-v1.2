@extends('layouts.public')

@section('title', 'Squad - Buhimba United Saints FC')
@section('description', 'Meet the Buhimba United Saints FC squad. Player profiles, statistics, and information about our talented team.')

@section('content')
<!-- Page Header -->
<section class="bg-club-green text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">Our Squad</h1>
                <p class="lead mb-0">Meet the talented players representing Buhimba United Saints FC in the Uganda Premier League</p>
            </div>
        </div>
    </div>
</section>

@if($players->count() > 0)
    @foreach(['Goalkeeper', 'Defender', 'Midfielder', 'Forward'] as $position)
        @if(isset($players[$position]) && $players[$position]->count() > 0)
            <section class="py-5 @if($loop->even) bg-light @endif">
                <div class="container">
                    <div class="row mb-4">
                        <div class="col">
                            <h2 class="fw-bold text-club-green mb-3">
                                <i class="bi bi-{{ $position == 'Goalkeeper' ? 'shield' : ($position == 'Defender' ? 'shield-fill' : ($position == 'Midfielder' ? 'circle' : 'triangle-fill')) }} me-2"></i>
                                {{ $position }}{{ $players[$position]->count() > 1 ? 's' : '' }}
                            </h2>
                            <div class="row">
                                @foreach($players[$position] as $player)
                                    <div class="col-lg-4 col-md-6 mb-4">
                                        <div class="card player-card h-100 shadow-sm">
                                            <div class="card-body text-center">
                                                <!-- Player Photo -->
                                                <div class="position-relative mb-3">
                                                    @if($player->photo)
                                                        <img src="{{ asset('storage/' . $player->photo) }}" 
                                                             alt="{{ $player->full_name }}" 
                                                             class="rounded-circle mx-auto d-block"
                                                             style="width: 120px; height: 120px; object-fit: cover;">
                                                    @else
                                                        <div class="bg-club-green text-white rounded-circle mx-auto d-flex align-items-center justify-content-center" 
                                                             style="width: 120px; height: 120px; font-size: 2rem; font-weight: bold;">
                                                            {{ substr($player->first_name, 0, 1) }}{{ substr($player->last_name, 0, 1) }}
                                                        </div>
                                                    @endif
                                                    
                                                    <!-- Shirt Number Badge -->
                                                    <span class="position-absolute top-0 end-0 badge bg-club-green fs-5 rounded-circle" 
                                                          style="width: 40px; height: 40px; line-height: 26px;">
                                                        {{ $player->shirt_number }}
                                                    </span>
                                                </div>

                                                <!-- Player Name & Details -->
                                                <h5 class="card-title fw-bold mb-2">{{ $player->full_name }}</h5>
                                                <p class="text-muted mb-1">
                                                    <span class="badge bg-{{ $position == 'Goalkeeper' ? 'info' : ($position == 'Defender' ? 'primary' : ($position == 'Midfielder' ? 'warning' : 'danger')) }}">
                                                        {{ $player->position }}
                                                    </span>
                                                </p>
                                                
                                                @if($player->age)
                                                    <p class="text-muted mb-2">Age: {{ $player->age }}</p>
                                                @endif
                                                
                                                @if($player->nationality)
                                                    <p class="text-muted mb-3">{{ $player->nationality }}</p>
                                                @endif

                                                <!-- Player Stats -->
                                                <div class="row text-center mb-3">
                                                    <div class="col-4">
                                                        <div class="fw-bold text-club-green">{{ $player->appearances }}</div>
                                                        <small class="text-muted">Apps</small>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="fw-bold text-club-green">{{ $player->goals }}</div>
                                                        <small class="text-muted">Goals</small>
                                                    </div>
                                                    <div class="col-4">
                                                        <div class="fw-bold text-club-green">{{ $player->assists }}</div>
                                                        <small class="text-muted">Assists</small>
                                                    </div>
                                                </div>

                                                <!-- Player Details -->
                                                @if($player->height || $player->preferred_foot)
                                                    <div class="small text-muted">
                                                        @if($player->height)
                                                            <div>Height: {{ $player->height }}m</div>
                                                        @endif
                                                        @if($player->preferred_foot)
                                                            <div>{{ $player->preferred_foot }} foot</div>
                                                        @endif
                                                    </div>
                                                @endif

                                                <!-- Social Media Links -->
                                                @if($player->social_media)
                                                    <div class="mt-3">
                                                        @if(isset($player->social_media['facebook']) && $player->social_media['facebook'])
                                                            <a href="{{ $player->social_media['facebook'] }}" target="_blank" class="btn btn-outline-primary btn-sm me-1">
                                                                <i class="bi bi-facebook"></i>
                                                            </a>
                                                        @endif
                                                        @if(isset($player->social_media['twitter']) && $player->social_media['twitter'])
                                                            <a href="{{ $player->social_media['twitter'] }}" target="_blank" class="btn btn-outline-info btn-sm me-1">
                                                                <i class="bi bi-twitter"></i>
                                                            </a>
                                                        @endif
                                                        @if(isset($player->social_media['instagram']) && $player->social_media['instagram'])
                                                            <a href="{{ $player->social_media['instagram'] }}" target="_blank" class="btn btn-outline-danger btn-sm">
                                                                <i class="bi bi-instagram"></i>
                                                            </a>
                                                        @endif
                                                    </div>
                                                @endif
                                            </div>

                                            @if($player->biography)
                                                <div class="card-footer bg-light">
                                                    <small class="text-muted">{{ Str::limit($player->biography, 100) }}</small>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endforeach
@else
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <i class="bi bi-people fs-1 text-muted mb-3"></i>
                    <h3 class="text-muted">Squad Information Coming Soon</h3>
                    <p class="text-muted">Player profiles are being updated. Check back soon for complete squad information.</p>
                    <a href="{{ route('home') }}" class="btn btn-club-primary">Return Home</a>
                </div>
            </div>
        </div>
    </section>
@endif

<!-- Call to Action -->
<section class="bg-club-green text-white py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-3">Support Our Team</h2>
        <p class="lead mb-4">Come and cheer for Buhimba United Saints FC at our next home match!</p>
        <a href="{{ route('fixtures.index') }}" class="btn btn-light btn-lg">View Fixtures</a>
    </div>
</section>
@endsection
