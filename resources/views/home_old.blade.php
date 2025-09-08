@extends('layouts.public')

@section('title', 'Home - Buhimba United Saints FC')
@section('description', 'Official website of Buhimba United Saints FC - Uganda Premier League football club. Latest news, fixtures, results and player information.')

@section('content')

<!-- 1. Hero Banner Section -->
<section class="hero-banner position-relative overflow-hidden">
    <div class="hero-background" style="background: linear-gradient(rgba(27, 94, 32, 0.7), rgba(0, 0, 0, 0.5)), url('/images/hero-background.jpg'); background-size: cover; background-position: center; min-height: 100vh;"></div>
    
    <div class="container position-relative" style="z-index: 10;">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-8 col-md-10 mx-auto text-center text-white">
                <div class="hero-content py-5">
                    <!-- Club Badge -->
                    <div class="club-badge mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Buhimba United Saints FC" class="img-fluid" style="max-height: 120px;">
                    </div>
                    
                    <!-- Club Name & Tagline -->
                    <h1 class="display-1 fw-bold mb-3 club-name-gradient">
                        BUHIMBA UNITED SAINTS FC
                    </h1>
                    <p class="h3 mb-4 text-white-75 fw-light">
                        — Pride of Buhimba —
                    </p>
                    
                    <!-- Call to Action -->
                    <div class="hero-cta mt-5">
                        <a href="{{ route('fixtures.index') }}" class="btn btn-primary btn-lg px-5 py-3 me-3 shadow-lg">
                            <i class="bi bi-calendar-event me-2"></i>View Fixtures
                        </a>
                        <a href="{{ route('players.index') }}" class="btn btn-outline-light btn-lg px-5 py-3 shadow-lg">
                            <i class="bi bi-people me-2"></i>Meet The Squad
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Next Match & Latest Result Section -->
<section class="matches-section py-5 bg-light">
    <div class="container">
        <div class="row g-4">
            <!-- Next Match Card -->
            <div class="col-lg-6">
                @if($nextFixture)
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">
                            <i class="bi bi-calendar-plus me-2"></i>Next Match
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="match-teams text-center mb-4">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="team-info">
                                        <img src="{{ asset('images/logo.png') }}" alt="Buhimba United Saints" class="img-fluid mb-2" style="max-height: 50px;">
                                        <h6 class="fw-bold">{{ $nextFixture->home_team }}</h6>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="vs-section">
                                        <span class="badge bg-secondary fs-6">VS</span>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="team-info">
                                        <div class="opponent-logo bg-secondary text-white rounded-circle mx-auto mb-2 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            {{ substr($nextFixture->away_team, 0, 2) }}
                                        </div>
                                        <h6 class="fw-bold">{{ $nextFixture->away_team }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="match-details">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="bi bi-calendar3 text-primary me-2"></i>
                                    <strong>Date:</strong> {{ $nextFixture->match_date->format('l, F j, Y') }}
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-clock text-primary me-2"></i>
                                    <strong>Kickoff:</strong> {{ $nextFixture->match_date->format('g:i A') }}
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-geo-alt text-primary me-2"></i>
                                    <strong>Venue:</strong> {{ $nextFixture->venue }}
                                </li>
                                <li class="mb-0">
                                    <i class="bi bi-trophy text-primary me-2"></i>
                                    <strong>Competition:</strong> {{ $nextFixture->competition }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @else
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title mb-0">
                            <i class="bi bi-calendar-plus me-2"></i>Next Match
                        </h5>
                    </div>
                    <div class="card-body text-center">
                        <i class="bi bi-calendar-x text-muted" style="font-size: 3rem;"></i>
                        <p class="text-muted mt-3">No upcoming fixtures scheduled</p>
                    </div>
                </div>
                @endif
            </div>
            
            <!-- Latest Result Card -->
            <div class="col-lg-6">
                @if($latestResult)
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">
                            <i class="bi bi-check-circle me-2"></i>Latest Result
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="match-teams text-center mb-4">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <div class="team-info">
                                        <img src="{{ asset('images/logo.png') }}" alt="Buhimba United Saints" class="img-fluid mb-2" style="max-height: 50px;">
                                        <h6 class="fw-bold">{{ $latestResult->home_team }}</h6>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="score-section">
                                        <h2 class="fw-bold text-primary mb-0">{{ $latestResult->home_goals }} - {{ $latestResult->away_goals }}</h2>
                                        <small class="text-muted">FINAL</small>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="team-info">
                                        <div class="opponent-logo bg-secondary text-white rounded-circle mx-auto mb-2 d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                            {{ substr($latestResult->away_team, 0, 2) }}
                                        </div>
                                        <h6 class="fw-bold">{{ $latestResult->away_team }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="match-details">
                            <ul class="list-unstyled">
                                <li class="mb-2">
                                    <i class="bi bi-calendar3 text-success me-2"></i>
                                    <strong>Date:</strong> {{ $latestResult->match_date->format('F j, Y') }}
                                </li>
                                <li class="mb-2">
                                    <i class="bi bi-geo-alt text-success me-2"></i>
                                    <strong>Venue:</strong> {{ $latestResult->venue }}
                                </li>
                                <li class="mb-0">
                                    <i class="bi bi-trophy text-success me-2"></i>
                                    <strong>Competition:</strong> {{ $latestResult->competition }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @else
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-header bg-success text-white">
                        <h5 class="card-title mb-0">
                            <i class="bi bi-check-circle me-2"></i>Latest Result
                        </h5>
                    </div>
                    <div class="card-body text-center">
                        <i class="bi bi-trophy text-muted" style="font-size: 3rem;"></i>
                        <p class="text-muted mt-3">No recent results available</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- 3. News Highlights Section -->
@if($featuredNews->count() > 0)
<section class="news-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="display-4 fw-bold text-primary mb-3">Latest News</h2>
                <p class="lead text-muted">Stay up to date with the latest happenings at the club</p>
            </div>
        </div>
        
        <div class="row g-4">
            @foreach($featuredNews->take(3) as $article)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm border-0 news-card">
                    <div class="card-img-wrapper position-relative" style="height: 250px; overflow: hidden;">
                        @if($article->image)
                            <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top h-100 w-100" style="object-fit: cover;" alt="{{ $article->title }}">
                        @else
                            <div class="placeholder-img bg-light d-flex align-items-center justify-content-center h-100">
                                <i class="bi bi-newspaper text-muted" style="font-size: 3rem;"></i>
                            </div>
                        @endif
                        <div class="news-overlay position-absolute bottom-0 start-0 end-0 bg-gradient" style="background: linear-gradient(transparent, rgba(0,0,0,0.7)); height: 50px;"></div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <div class="news-meta mb-2">
                            <small class="text-muted">
                                <i class="bi bi-calendar3 me-1"></i>{{ $article->published_at->format('M j, Y') }}
                            </small>
                        </div>
                        <h5 class="card-title fw-bold">{{ Str::limit($article->title, 60) }}</h5>
                        <p class="card-text text-muted flex-grow-1">{{ Str::limit(strip_tags($article->content), 120) }}</p>
                        <a href="{{ route('news.show', $article->slug) }}" class="btn btn-outline-primary btn-sm mt-auto">
                            Read More <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('news.index') }}" class="btn btn-primary btn-lg">
                <i class="bi bi-newspaper me-2"></i>View All News
            </a>
        </div>
    </div>
</section>
@endif

<!-- 4. Player Spotlight Section -->
<section class="players-section py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="display-4 fw-bold text-primary mb-3">Player Spotlight</h2>
                <p class="lead text-muted">Meet our star players making the difference on the pitch</p>
            </div>
        </div>
        
        @if($featuredPlayers->count() > 0)
        <div id="playerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach($featuredPlayers->chunk(3) as $index => $chunk)
                <button type="button" data-bs-target="#playerCarousel" data-bs-slide-to="{{ $index }}" 
                        class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>
            
            <div class="carousel-inner">
                @foreach($featuredPlayers->chunk(3) as $index => $playerChunk)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <div class="row g-4">
                        @foreach($playerChunk as $player)
                        <div class="col-lg-4">
                            <div class="card player-card h-100 text-center shadow-sm border-0">
                                <div class="card-body p-4">
                                    <div class="player-image mb-3">
                                        @if($player->image)
                                            <img src="{{ asset('storage/' . $player->image) }}" class="rounded-circle img-fluid" 
                                                 style="width: 120px; height: 120px; object-fit: cover;" alt="{{ $player->name }}">
                                        @else
                                            <div class="player-placeholder bg-primary text-white rounded-circle mx-auto d-flex align-items-center justify-content-center" 
                                                 style="width: 120px; height: 120px; font-size: 2rem;">
                                                {{ substr($player->name, 0, 1) }}
                                            </div>
                                        @endif
                                    </div>
                                    <h5 class="fw-bold text-primary">{{ $player->name }}</h5>
                                    <p class="text-muted mb-2">{{ $player->position }}</p>
                                    <div class="player-number mb-3">
                                        <span class="badge bg-primary fs-6">#{{ $player->shirt_number }}</span>
                                    </div>
                                    <div class="player-stats">
                                        <div class="row text-center">
                                            <div class="col-4">
                                                <div class="stat-item">
                                                    <h6 class="fw-bold text-success mb-0">{{ $player->goals }}</h6>
                                                    <small class="text-muted">Goals</small>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="stat-item">
                                                    <h6 class="fw-bold text-info mb-0">{{ $player->assists }}</h6>
                                                    <small class="text-muted">Assists</small>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="stat-item">
                                                    <h6 class="fw-bold text-warning mb-0">{{ $player->appearances }}</h6>
                                                    <small class="text-muted">Apps</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
            
            <button class="carousel-control-prev" type="button" data-bs-target="#playerCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#playerCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        @else
        <div class="text-center">
            <i class="bi bi-people text-muted" style="font-size: 4rem;"></i>
            <p class="text-muted mt-3">No featured players available</p>
        </div>
        @endif
        
        <div class="text-center mt-5">
            <a href="{{ route('players.index') }}" class="btn btn-primary btn-lg">
                <i class="bi bi-people me-2"></i>View Full Squad
            </a>
        </div>
    </div>
</section>

<!-- 5. Sponsors Section -->
@if($sponsors->count() > 0)
<section class="sponsors-section py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="display-4 fw-bold text-primary mb-3">Our Sponsors</h2>
                <p class="lead text-muted">Proud partners supporting Buhimba United Saints FC</p>
            </div>
        </div>
        
        <div class="sponsors-carousel">
            <div class="row align-items-center g-4">
                @foreach($sponsors as $sponsor)
                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                    <div class="sponsor-item text-center p-3">
                        @if($sponsor->logo)
                            <img src="{{ asset('storage/' . $sponsor->logo) }}" 
                                 class="img-fluid sponsor-logo" 
                                 alt="{{ $sponsor->name }}" 
                                 style="max-height: 80px; filter: grayscale(100%); transition: all 0.3s ease;">
                        @else
                            <div class="sponsor-placeholder bg-light border rounded p-3 d-flex align-items-center justify-content-center" 
                                 style="height: 80px; filter: grayscale(100%); transition: all 0.3s ease;">
                                <span class="text-muted fw-bold">{{ $sponsor->name }}</span>
                            </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('sponsors') }}" class="btn btn-outline-primary btn-lg">
                <i class="bi bi-handshake me-2"></i>Partnership Opportunities
            </a>
        </div>
    </div>
</section>
@endif

<!-- 6. Fan Engagement Section -->
<section class="fan-engagement-section py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <!-- Newsletter Subscription -->
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="newsletter-section">
                    <h3 class="fw-bold mb-3">
                        <i class="bi bi-envelope me-2"></i>Stay Connected
                    </h3>
                    <p class="mb-4">Get the latest news, match updates, and exclusive content delivered to your inbox.</p>
                    
                    <form id="newsletterForm" action="{{ route('newsletter.subscribe') }}" method="POST" class="row g-2">
                        @csrf
                        <div class="col-8">
                            <input type="email" class="form-control form-control-lg" name="email" 
                                   placeholder="Enter your email" required>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-warning btn-lg w-100 fw-bold">
                                Subscribe
                            </button>
                        </div>
                    </form>
                    
                    <small class="text-white-50 mt-2 d-block">
                        <i class="bi bi-shield-check me-1"></i>We respect your privacy. Unsubscribe anytime.
                    </small>
                </div>
            </div>
            
            <!-- Social Media -->
            <div class="col-lg-6">
                <div class="social-media-section">
                    <h3 class="fw-bold mb-3">
                        <i class="bi bi-share me-2"></i>Follow Us
                    </h3>
                    <p class="mb-4">Connect with us on social media for live updates and behind-the-scenes content.</p>
                    
                    <div class="social-icons">
                        <a href="#" class="btn btn-outline-light btn-lg me-3 mb-2" target="_blank">
                            <i class="bi bi-facebook"></i>
                            <span class="d-none d-sm-inline ms-2">Facebook</span>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-lg me-3 mb-2" target="_blank">
                            <i class="bi bi-instagram"></i>
                            <span class="d-none d-sm-inline ms-2">Instagram</span>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-lg me-3 mb-2" target="_blank">
                            <i class="bi bi-twitter-x"></i>
                            <span class="d-none d-sm-inline ms-2">Twitter/X</span>
                        </a>
                        <a href="#" class="btn btn-outline-light btn-lg mb-2" target="_blank">
                            <i class="bi bi-youtube"></i>
                            <span class="d-none d-sm-inline ms-2">YouTube</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
            
            <!-- Right Content - Match Cards -->
            <div class="col-lg-4">
                <div class="hero-sidebar animate__animated animate__fadeInRight animate__delay-2s">
                    @if($nextFixture)
                        <!-- Next Match Card -->
                        <div class="modern-match-card next-match mb-4">
                            <div class="match-card-header">
                                <div class="match-type">
                                    <i class="bi bi-calendar-event"></i>
                                    <span>Next Match</span>
                                </div>
                                <div class="match-countdown" data-date="{{ $nextFixture->match_date->toISOString() }}">
                                    <div class="countdown-group">
                                        <div class="countdown-item">
                                            <span class="countdown-number days">00</span>
                                            <span class="countdown-label">D</span>
                                        </div>
                                        <div class="countdown-separator">:</div>
                                        <div class="countdown-item">
                                            <span class="countdown-number hours">00</span>
                                            <span class="countdown-label">H</span>
                                        </div>
                                        <div class="countdown-separator">:</div>
                                        <div class="countdown-item">
                                            <span class="countdown-number minutes">00</span>
                                            <span class="countdown-label">M</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="match-teams">
                                <div class="team home-team">
                                    <div class="team-logo">
                                        <img src="{{ asset('images/logo.png') }}" alt="Buhimba United Saints">
                                    </div>
                                    <div class="team-info">
                                        <span class="team-name">{{ $nextFixture->home_team }}</span>
                                        <span class="team-label">HOME</span>
                                    </div>
                                </div>
                                
                                <div class="vs-section">
                                    <div class="vs-circle">
                                        <span>VS</span>
                                    </div>
                                </div>
                                
                                <div class="team away-team">
                                    <div class="team-info text-end">
                                        <span class="team-name">{{ $nextFixture->away_team }}</span>
                                        <span class="team-label">AWAY</span>
                                    </div>
                                    <div class="team-logo opponent">
                                        <span>{{ substr($nextFixture->away_team, 0, 2) }}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="match-info">
                                <div class="info-row">
                                    <i class="bi bi-geo-alt text-warning"></i>
                                    <span>{{ $nextFixture->venue }}</span>
                                </div>
                                <div class="info-row">
                                    <i class="bi bi-clock text-info"></i>
                                    <span>{{ $nextFixture->match_date->format('M j, Y • g:i A') }}</span>
                                </div>
                                <div class="info-row">
                                    <i class="bi bi-trophy text-success"></i>
                                    <span>{{ $nextFixture->competition }}</span>
                                </div>
                            </div>
                            
                            <a href="{{ route('fixtures.index') }}" class="match-details-btn">
                                <span>Match Details</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    @endif
                    
                    @if($latestResult)
                        <!-- Latest Result Card -->
                        <div class="modern-match-card latest-result mb-4">
                            <div class="match-card-header">
                                <div class="match-type">
                                    <i class="bi bi-check-circle"></i>
                                    <span>Latest Result</span>
                                </div>
                                <div class="result-badge {{ $latestResult->home_team === 'Buhimba United Saints' ? ($latestResult->home_goals > $latestResult->away_goals ? 'win' : ($latestResult->home_goals < $latestResult->away_goals ? 'loss' : 'draw')) : ($latestResult->away_goals > $latestResult->home_goals ? 'win' : ($latestResult->away_goals < $latestResult->home_goals ? 'loss' : 'draw')) }}">
                                    {{ $latestResult->home_team === 'Buhimba United Saints' ? ($latestResult->home_goals > $latestResult->away_goals ? 'WIN' : ($latestResult->home_goals < $latestResult->away_goals ? 'LOSS' : 'DRAW')) : ($latestResult->away_goals > $latestResult->home_goals ? 'WIN' : ($latestResult->away_goals < $latestResult->home_goals ? 'LOSS' : 'DRAW')) }}
                                </div>
                            </div>
                            
                            <div class="match-teams result-teams">
                                <div class="team home-team">
                                    <div class="team-logo">
                                        <img src="{{ asset('images/logo.png') }}" alt="Buhimba United Saints">
                                    </div>
                                    <span class="team-name">{{ $latestResult->home_team }}</span>
                                </div>
                                
                                <div class="score-section">
                                    <div class="final-score">
                                        <span class="score">{{ $latestResult->home_goals }}</span>
                                        <span class="separator">-</span>
                                        <span class="score">{{ $latestResult->away_goals }}</span>
                                    </div>
                                    <span class="final-label">FINAL</span>
                                </div>
                                
                                <div class="team away-team">
                                    <span class="team-name">{{ $latestResult->away_team }}</span>
                                    <div class="team-logo opponent">
                                        <span>{{ substr($latestResult->away_team, 0, 2) }}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="match-date">
                                <i class="bi bi-calendar"></i>
                                <span>{{ $latestResult->match_date->format('M j, Y') }}</span>
                            </div>
                        </div>
                    @endif
                    
                    <!-- Quick Actions -->
                    <div class="quick-actions glass-card">
                        <h6 class="mb-3">Quick Links</h6>
                        <div class="d-grid gap-2">
                            <a href="{{ route('news.index') }}" class="btn btn-outline-light btn-sm">
                                <i class="bi bi-newspaper me-2"></i>Latest News
                            </a>
                            <a href="{{ route('players.index') }}" class="btn btn-outline-light btn-sm">
                                <i class="bi bi-people me-2"></i>Squad
                            </a>
                            <a href="{{ route('sponsors') }}" class="btn btn-outline-light btn-sm">
                                <i class="bi bi-handshake me-2"></i>Sponsors
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Enhanced News & Updates Section -->
@if($featuredNews->count() > 0)
<section class="news-section section-bg-subtle py-5">
    <div class="container">
        <!-- Section Header with Modern Design -->
        <div class="section-header text-center mb-5">
            <div class="section-badge">
                <span class="badge bg-primary-light text-primary px-4 py-2 rounded-pill">
                    <i class="bi bi-newspaper me-2"></i>Latest Updates
                </span>
            </div>
            <h2 class="display-4 fw-black mt-4 mb-3">News & Highlights</h2>
            <p class="lead text-muted mb-4">Stay connected with the latest happenings at Buhimba United Saints FC</p>
            <div class="section-divider">
                <div class="divider-line"></div>
                <div class="divider-icon">
                    <i class="bi bi-star-fill text-primary"></i>
                </div>
                <div class="divider-line"></div>
            </div>
        </div>
        
        <div class="news-grid">
            <!-- Featured Article with Enhanced Design -->
            @if($featuredNews->first())
                @php $featured = $featuredNews->first(); @endphp
                <div class="featured-article">
                    <div class="featured-news-card">
                        @if($featured->featured_image)
                            <div class="featured-image-container">
                                <img src="{{ asset('storage/' . $featured->featured_image) }}" 
                                     class="featured-image" 
                                     alt="{{ $featured->title }}">
                                <div class="image-overlay"></div>
                                <div class="article-badge">
                                    <span class="badge bg-primary">{{ $featured->category }}</span>
                                </div>
                            </div>
                        @endif
                        <div class="featured-content">
                            <div class="article-meta">
                                <span class="meta-item">
                                    <i class="bi bi-clock"></i>
                                    {{ $featured->published_at->diffForHumans() }}
                                </span>
                                <span class="meta-item">
                                    <i class="bi bi-eye"></i>
                                    {{ rand(250, 850) }} views
                                </span>
                            </div>
                            <h3 class="featured-title">{{ $featured->title }}</h3>
                            <p class="featured-excerpt">{{ Str::limit($featured->excerpt, 160) }}</p>
                            <div class="featured-footer">
                                <a href="{{ route('news.show', $featured->slug) }}" class="btn-read-more">
                                    <span>Read Full Story</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                                <div class="article-tags">
                                    <span class="tag">#{{ str_replace(' ', '', $featured->category) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            
            <!-- Secondary Articles Grid -->
            <div class="secondary-articles">
                <div class="articles-grid">
                    @foreach($featuredNews->skip(1)->take(4) as $article)
                        <div class="secondary-article">
                            <div class="secondary-news-card">
                                @if($article->featured_image)
                                    <div class="secondary-image-container">
                                        <img src="{{ asset('storage/' . $article->featured_image) }}" 
                                             class="secondary-image" 
                                             alt="{{ $article->title }}">
                                        <div class="image-hover-overlay">
                                            <i class="bi bi-arrow-up-right"></i>
                                        </div>
                                    </div>
                                @endif
                                <div class="secondary-content">
                                    <div class="article-category">
                                        <span class="category-tag">{{ $article->category }}</span>
                                    </div>
                                    <h5 class="secondary-title">{{ Str::limit($article->title, 75) }}</h5>
                                    <p class="secondary-excerpt">{{ Str::limit($article->excerpt, 100) }}</p>
                                    <div class="secondary-footer">
                                        <span class="article-date">{{ $article->published_at->format('M j') }}</span>
                                        <a href="{{ route('news.show', $article->slug) }}" class="read-link">
                                            Read more <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <!-- View All News Button -->
                <div class="text-center mt-4">
                    <a href="{{ route('news.index') }}" class="btn-view-all">
                        <span>View All News</span>
                        <i class="bi bi-arrow-right"></i>
                        <div class="btn-glow"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Enhanced Statistics & Performance Section -->
<section class="stats-section grass-texture-bg py-5">
    <div class="stats-background">
        <div class="stats-pattern"></div>
    </div>
    <div class="container position-relative">
        <div class="row">
            <!-- Main Statistics -->
            <div class="col-lg-8">
                <div class="stats-header mb-5">
                    <div class="d-flex align-items-center mb-3">
                        <div class="section-icon me-3">
                            <i class="bi bi-graph-up-arrow text-primary"></i>
                        </div>
                        <div>
                            <h3 class="display-5 fw-black text-dark mb-2">Season Performance</h3>
                            <p class="lead text-muted mb-0">Real-time statistics and achievements</p>
                        </div>
                    </div>
                </div>
                
                <!-- Enhanced Stats Grid -->
                <div class="enhanced-stats-grid">
                    <div class="stat-card-modern">
                        <div class="stat-icon-container">
                            <div class="stat-icon-bg goals-bg"></div>
                            <i class="bi bi-trophy stat-icon"></i>
                        </div>
                        <div class="stat-content">
                            <div class="stat-number" data-target="{{ $topScorers->sum('goals') }}">0</div>
                            <div class="stat-label">Goals Scored</div>
                            <div class="stat-progress">
                                <div class="progress-bar" style="width: {{ min(100, ($topScorers->sum('goals') / 50) * 100) }}%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="stat-card-modern">
                        <div class="stat-icon-container">
                            <div class="stat-icon-bg matches-bg"></div>
                            <i class="bi bi-calendar-check stat-icon"></i>
                        </div>
                        <div class="stat-content">
                            <div class="stat-number" data-target="{{ $topScorers->sum('appearances') }}">0</div>
                            <div class="stat-label">Total Appearances</div>
                            <div class="stat-progress">
                                <div class="progress-bar" style="width: {{ min(100, ($topScorers->sum('appearances') / 200) * 100) }}%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="stat-card-modern">
                        <div class="stat-icon-container">
                            <div class="stat-icon-bg assists-bg"></div>
                            <i class="bi bi-hand-thumbs-up stat-icon"></i>
                        </div>
                        <div class="stat-content">
                            <div class="stat-number" data-target="{{ $topScorers->sum('assists') }}">0</div>
                            <div class="stat-label">Total Assists</div>
                            <div class="stat-progress">
                                <div class="progress-bar" style="width: {{ min(100, ($topScorers->sum('assists') / 30) * 100) }}%"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="stat-card-modern">
                        <div class="stat-icon-container">
                            <div class="stat-icon-bg squad-bg"></div>
                            <i class="bi bi-people stat-icon"></i>
                        </div>
                        <div class="stat-content">
                            <div class="stat-number" data-target="{{ $topScorers->count() }}">0</div>
                            <div class="stat-label">Squad Players</div>
                            <div class="stat-progress">
                                <div class="progress-bar" style="width: {{ min(100, ($topScorers->count() / 25) * 100) }}%"></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Action Buttons -->
                <div class="action-buttons-section mt-5">
                    <div class="action-buttons-grid">
                        <a href="{{ route('league-table.index') }}" class="action-btn table-btn">
                            <div class="action-btn-icon">
                                <i class="bi bi-table"></i>
                            </div>
                            <div class="action-btn-content">
                                <span class="action-btn-title">League Table</span>
                                <span class="action-btn-subtitle">Current standings</span>
                            </div>
                            <div class="action-btn-arrow">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </a>
                        
                        <a href="{{ route('fixtures.index') }}" class="action-btn fixtures-btn">
                            <div class="action-btn-icon">
                                <i class="bi bi-calendar3"></i>
                            </div>
                            <div class="action-btn-content">
                                <span class="action-btn-title">Fixtures</span>
                                <span class="action-btn-subtitle">Upcoming matches</span>
                            </div>
                            <div class="action-btn-arrow">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </a>
                        
                        <a href="{{ route('results.index') }}" class="action-btn results-btn">
                            <div class="action-btn-icon">
                                <i class="bi bi-list-check"></i>
                            </div>
                            <div class="action-btn-content">
                                <span class="action-btn-title">Results</span>
                                <span class="action-btn-subtitle">Match reports</span>
                            </div>
                            <div class="action-btn-arrow">
                                <i class="bi bi-chevron-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Enhanced Top Scorers Section -->
            @if($topScorers->count() > 0)
            <div class="col-lg-4">
                <div class="top-scorers-section">
                    <div class="scorers-header">
                        <div class="header-content">
                            <h4 class="section-title">
                                <i class="bi bi-award text-warning me-2"></i>
                                Top Scorers
                            </h4>
                            <p class="section-subtitle">Leading goal scorers this season</p>
                        </div>
                        <div class="header-decoration">
                            <div class="decoration-line"></div>
                            <div class="decoration-star">⭐</div>
                        </div>
                    </div>
                    
                    <div class="scorers-list">
                        @foreach($topScorers->take(5) as $index => $player)
                            <div class="scorer-item {{ $index === 0 ? 'golden' : '' }}">
                                <div class="position-badge">
                                    <span class="position-number {{ $index === 0 ? 'gold' : ($index === 1 ? 'silver' : ($index === 2 ? 'bronze' : 'regular')) }}">
                                        {{ $index + 1 }}
                                    </span>
                                    @if($index === 0)
                                        <div class="crown-icon">👑</div>
                                    @endif
                                </div>
                                
                                <div class="player-avatar">
                                    @if($player->photo)
                                        <img src="{{ asset('storage/' . $player->photo) }}" 
                                             alt="{{ $player->full_name }}" 
                                             class="avatar-image">
                                    @else
                                        <div class="avatar-placeholder">
                                            {{ substr($player->first_name, 0, 1) }}{{ substr($player->last_name, 0, 1) }}
                                        </div>
                                    @endif
                                    <div class="avatar-ring"></div>
                                </div>
                                
                                <div class="player-info">
                                    <h6 class="player-name">{{ $player->full_name }}</h6>
                                    <div class="player-details">
                                        <span class="position">{{ $player->position }}</span>
                                        <span class="separator">•</span>
                                        <span class="shirt-number">#{{ $player->shirt_number }}</span>
                                    </div>
                                </div>
                                
                                <div class="goals-display">
                                    <div class="goals-number">{{ $player->goals }}</div>
                                    <div class="goals-label">Goals</div>
                                    @if($player->assists > 0)
                                        <div class="assists-info">{{ $player->assists }}A</div>
                                    @endif
                                </div>
                                
                                <div class="item-decoration"></div>
                            </div>
                        @endforeach
                    </div>
                    
                    <div class="scorers-footer">
                        <a href="{{ route('players.index') }}" class="view-squad-btn">
                            <span>View Full Squad</span>
                            <i class="bi bi-arrow-right"></i>
                            <div class="btn-ripple"></div>
                        </a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</section>

<!-- Sponsor Carousel -->
@if($sponsors->count() > 0)
<section class="sponsors-section py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h3 class="display-6 fw-bold text-club-green mb-3">Our Valued Partners</h3>
            <p class="lead text-muted">Supporting Buhimba United Saints FC in our journey to excellence</p>
        </div>
        
        <!-- Main Sponsors -->
        @if($sponsors->where('sponsor_type', 'Main')->count() > 0)
            <div class="main-sponsors mb-5">
                <h4 class="text-center fw-bold text-club-green mb-4">Main Sponsors</h4>
                <div class="row justify-content-center">
                    @foreach($sponsors->where('sponsor_type', 'Main') as $sponsor)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card sponsor-main-card h-100 border-club-green shadow-sm text-center">
                                <div class="card-body p-4">
                                    @if($sponsor->logo)
                                        <img src="{{ asset('storage/' . $sponsor->logo) }}" 
                                             alt="{{ $sponsor->company_name }}" 
                                             class="sponsor-logo-main mb-3"
                                             style="max-height: 120px; max-width: 100%; object-fit: contain;">
                                    @else
                                        <div class="sponsor-placeholder bg-light p-4 rounded mb-3">
                                            <h5 class="mb-0 text-club-green">{{ $sponsor->company_name }}</h5>
                                        </div>
                                    @endif
                                    <h5 class="fw-bold text-club-green">{{ $sponsor->company_name }}</h5>
                                    @if($sponsor->description)
                                        <p class="text-muted small">{{ Str::limit($sponsor->description, 100) }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        
        <!-- Sponsor Carousel -->
        <div class="sponsor-carousel-section">
            <h5 class="text-center fw-bold text-club-green mb-4">Official Partners</h5>
            <div id="sponsorCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    @php
                        $otherSponsors = $sponsors->where('sponsor_type', '!=', 'Main');
                        $chunks = $otherSponsors->chunk(6);
                    @endphp
                    
                    @foreach($chunks as $index => $chunk)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <div class="row align-items-center justify-content-center g-4">
                                @foreach($chunk as $sponsor)
                                    <div class="col-lg-2 col-md-3 col-4">
                                        <div class="sponsor-carousel-item text-center p-3">
                                            @if($sponsor->logo)
                                                <img src="{{ asset('storage/' . $sponsor->logo) }}" 
                                                     alt="{{ $sponsor->company_name }}" 
                                                     class="sponsor-logo img-fluid"
                                                     style="max-height: 80px; max-width: 100%; object-fit: contain; filter: grayscale(100%); transition: filter 0.3s ease;"
                                                     onmouseover="this.style.filter='grayscale(0%)'"
                                                     onmouseout="this.style.filter='grayscale(100%)'">
                                            @else
                                                <div class="sponsor-placeholder-small bg-light rounded p-2">
                                                    <small class="text-club-green fw-bold">{{ Str::limit($sponsor->company_name, 15) }}</small>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <!-- Carousel Controls -->
                @if($chunks->count() > 1)
                    <button class="carousel-control-prev" type="button" data-bs-target="#sponsorCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bg-club-green rounded-circle p-3" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#sponsorCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon bg-club-green rounded-circle p-3" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                @endif
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="{{ route('sponsors') }}" class="btn btn-outline-club-green btn-lg">
                <i class="bi bi-handshake me-2"></i>View All Partners
            </a>
            <a href="{{ route('contact') }}" class="btn btn-club-primary btn-lg ms-3">
                <i class="bi bi-briefcase me-2"></i>Become a Partner
            </a>
        </div>
    </div>
</section>
@endif

<!-- Fan Zone -->
<section class="fan-zone-section bg-club-green text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="display-5 fw-bold mb-4">Join the Saints Family</h2>
                <p class="lead mb-4">
                    Connect with fellow fans, get exclusive updates, and be part of our growing community. 
                    Follow us on social media and never miss a moment of Saints action!
                </p>
                
                <!-- Newsletter Subscription -->
                <div class="newsletter-section mb-4">
                    <h4 class="fw-bold mb-3">📧 Newsletter Subscription</h4>
                    <form class="newsletter-form d-flex flex-column flex-md-row gap-2" id="newsletterForm">
                        @csrf
                        <input type="text" name="name" class="form-control form-control-lg" placeholder="Your Name (Optional)">
                        <input type="email" name="email" class="form-control form-control-lg" placeholder="Enter your email address" required>
                        <button type="submit" class="btn btn-light btn-lg px-4">
                            <i class="bi bi-envelope me-2"></i>Subscribe
                        </button>
                    </form>
                    <div id="newsletter-message" class="mt-3" style="display: none;"></div>
                    <small class="text-white-75 mt-2 d-block">
                        Get match updates, team news, and exclusive content delivered to your inbox.
                    </small>
                </div>
            </div>
            
            <div class="col-lg-6">
                <!-- Social Media Feeds -->
                <div class="social-media-section">
                    <h4 class="fw-bold mb-4 text-center">Follow Us on Social Media</h4>
                    
                    <div class="row g-3">
                        <div class="col-6">
                            <a href="#" class="btn btn-light btn-lg w-100 social-btn" target="_blank">
                                <i class="bi bi-facebook fs-3 mb-2 text-primary"></i>
                                <div class="fw-bold">Facebook</div>
                                <small class="text-muted">@BuhimbaSaints</small>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-light btn-lg w-100 social-btn" target="_blank">
                                <i class="bi bi-instagram fs-3 mb-2 text-danger"></i>
                                <div class="fw-bold">Instagram</div>
                                <small class="text-muted">@buhimbasaints</small>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-light btn-lg w-100 social-btn" target="_blank">
                                <i class="bi bi-twitter fs-3 mb-2 text-info"></i>
                                <div class="fw-bold">Twitter</div>
                                <small class="text-muted">@BuhimbaSaintsFC</small>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#" class="btn btn-light btn-lg w-100 social-btn" target="_blank">
                                <i class="bi bi-youtube fs-3 mb-2 text-danger"></i>
                                <div class="fw-bold">YouTube</div>
                                <small class="text-muted">Buhimba Saints</small>
                            </a>
                        </div>
                    </div>
                    
                    <!-- Fan Stats -->
                    <div class="fan-stats mt-4 p-4 bg-white bg-opacity-15 rounded">
                        <h5 class="fw-bold text-center mb-3">Our Community</h5>
                        <div class="row text-center">
                            <div class="col-6">
                                <h4 class="fw-bold">12.5K</h4>
                                <small>Social Followers</small>
                            </div>
                            <div class="col-6">
                                <h4 class="fw-bold">3.2K</h4>
                                <small>Newsletter Subscribers</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced Newsletter Subscription
    const newsletterForm = document.getElementById('newsletterForm');
    const messageDiv = document.getElementById('newsletter-message');
    
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
            // Show loading state
            submitButton.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Subscribing...';
            submitButton.disabled = true;
            
            try {
                const response = await fetch('{{ route("newsletter.subscribe") }}', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                });
                
                const result = await response.json();
                
                messageDiv.style.display = 'block';
                messageDiv.className = `alert ${result.success ? 'alert-success' : 'alert-danger'} mt-3`;
                messageDiv.textContent = result.message;
                
                if (result.success) {
                    newsletterForm.reset();
                }
                
            } catch (error) {
                messageDiv.style.display = 'block';
                messageDiv.className = 'alert alert-danger mt-3';
                messageDiv.textContent = 'Network error. Please try again later.';
            } finally {
                // Restore button state
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            }
        });
    }
    
    // Animated Number Counters
    function animateCounter(element, target, duration = 2000) {
        const start = 0;
        const startTime = performance.now();
        
        function updateCounter(currentTime) {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            
            // Easing function
            const easeOutCubic = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(easeOutCubic * target);
            
            element.textContent = current;
            
            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                element.textContent = target;
            }
        }
        
        requestAnimationFrame(updateCounter);
    }
    
    // Initialize counters when they come into view
    const statNumbers = document.querySelectorAll('.stat-number[data-target]');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                const target = parseInt(entry.target.dataset.target);
                animateCounter(entry.target, target);
                entry.target.classList.add('animated');
            }
        });
    }, { threshold: 0.5 });
    
    statNumbers.forEach(stat => observer.observe(stat));
    
    // Match Countdown Timer
    const countdownElements = document.querySelectorAll('.match-countdown[data-date]');
    
    countdownElements.forEach(countdown => {
        const matchDate = new Date(countdown.dataset.date);
        
        function updateCountdown() {
            const now = new Date();
            const timeDiff = matchDate - now;
            
            if (timeDiff > 0) {
                const days = Math.floor(timeDiff / (1000 * 60 * 60 * 24));
                const hours = Math.floor((timeDiff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((timeDiff % (1000 * 60 * 60)) / (1000 * 60));
                
                countdown.querySelector('.days').textContent = String(days).padStart(2, '0');
                countdown.querySelector('.hours').textContent = String(hours).padStart(2, '0');
                countdown.querySelector('.minutes').textContent = String(minutes).padStart(2, '0');
            } else {
                countdown.querySelector('.days').textContent = '00';
                countdown.querySelector('.hours').textContent = '00';
                countdown.querySelector('.minutes').textContent = '00';
            }
        }
        
        updateCountdown();
        setInterval(updateCountdown, 60000); // Update every minute
    });
    
    // Parallax Effect for Hero Background
    function handleParallax() {
        const scrolled = window.pageYOffset;
        const heroElements = document.querySelectorAll('.floating-ball');
        
        heroElements.forEach((element, index) => {
            const speed = 0.5 + (index * 0.1);
            element.style.transform = `translateY(${scrolled * speed}px)`;
        });
    }
    
    // Throttled scroll handler
    let ticking = false;
    function onScroll() {
        if (!ticking) {
            requestAnimationFrame(() => {
                handleParallax();
                ticking = false;
            });
            ticking = true;
        }
    }
    
    window.addEventListener('scroll', onScroll);
    
    // Image Lazy Loading with Fade-in Effect
    const images = document.querySelectorAll('img[data-src]');
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.add('fade-in');
                imageObserver.unobserve(img);
            }
        });
    });
    
    images.forEach(img => imageObserver.observe(img));
    
    // Enhanced Card Hover Effects
    const cards = document.querySelectorAll('.match-card, .stat-card-modern, .secondary-news-card');
    
    cards.forEach(card => {
        card.addEventListener('mouseenter', function(e) {
            this.style.transform = 'translateY(-8px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function(e) {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
    
    // Smooth Reveal Animation on Scroll
    const revealElements = document.querySelectorAll('.news-section, .stats-section, .top-scorers-section');
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, { threshold: 0.1 });
    
    revealElements.forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(30px)';
        element.style.transition = 'all 0.8s ease-out';
        revealObserver.observe(element);
    });
    
    // Enhanced Button Ripple Effect
    const buttons = document.querySelectorAll('.btn-hero, .view-squad-btn, .btn-read-more');
    
    buttons.forEach(button => {
        button.addEventListener('click', function(e) {
            const rect = this.getBoundingClientRect();
            const ripple = document.createElement('span');
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple-effect');
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
    
    // Dynamic Background Color Change Based on Scroll
    let lastScrollTop = 0;
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const heroHeight = document.querySelector('.hero-banner').offsetHeight;
        const scrollPercent = Math.min(scrollTop / heroHeight, 1);
        
        if (scrollTop > lastScrollTop && scrollTop > 100) {
            // Scrolling down
            document.body.style.background = `linear-gradient(to bottom, rgba(27, 94, 32, ${0.05 * scrollPercent}), #f8f9fa)`;
        }
        
        lastScrollTop = scrollTop;
    });
});

// CSS for ripple effect (add to your stylesheet)
const rippleCSS = `
.ripple-effect {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.6);
    transform: scale(0);
    animation: ripple 0.6s linear;
    pointer-events: none;
}

@keyframes ripple {
    to {
        transform: scale(4);
        opacity: 0;
    }
}

.fade-in {
    opacity: 0;
    animation: fadeIn 0.8s ease-in forwards;
}

@keyframes fadeIn {
    to {
        opacity: 1;
    }
}
`;

// Inject CSS
const style = document.createElement('style');
style.textContent = rippleCSS;
document.head.appendChild(style);
</script>
@endsection
