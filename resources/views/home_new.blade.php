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
                            <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top h-100 w-100 img-fluid" style="object-fit: cover;" alt="{{ $article->title }}">
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
                                 style="max-height: 80px; filter: grayscale(100%); transition: all 0.3s ease;"
                                 onmouseover="this.style.filter='grayscale(0%)'"
                                 onmouseout="this.style.filter='grayscale(100%)'">
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

<!-- Newsletter Subscription JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Newsletter subscription form
    const newsletterForm = document.getElementById('newsletterForm');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitButton = this.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            
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
                
                if (result.success) {
                    alert('Thank you for subscribing!');
                    newsletterForm.reset();
                } else {
                    alert(result.message || 'Subscription failed. Please try again.');
                }
                
            } catch (error) {
                alert('Network error. Please try again later.');
            } finally {
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
            }
        });
    }
});
</script>
@endsection
