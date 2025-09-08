@extends('layouts.public')

@section('title', 'Home - Buhimba United Saints FC')
@section('description', 'Official website of Buhimba United Saints FC - Uganda Premier League football club. Latest news, fixtures, results and player information.')

@section('content')

<!-- 1. Hero Banner Section -->
<section class="hero-banner position-relative overflow-hidden">
    <!-- Animated Background Particles -->
    <div class="hero-particles position-absolute w-100 h-100">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>
    
    <!-- Dynamic Background with Team Photo -->
    <div class="hero-background position-absolute w-100 h-100" style="
        background: linear-gradient(135deg, rgba(27, 94, 32, 0.85) 0%, rgba(0, 0, 0, 0.6) 50%, rgba(27, 94, 32, 0.85) 100%), 
                    url('data:image/svg+xml,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1200 600\"><defs><pattern id=\"football\" x=\"0\" y=\"0\" width=\"40\" height=\"40\" patternUnits=\"userSpaceOnUse\"><circle cx=\"20\" cy=\"20\" r=\"2\" fill=\"rgba(255,255,255,0.1)\"/></pattern></defs><rect width=\"100%\" height=\"100%\" fill=\"url(%23football)\"/></svg>'),
                    linear-gradient(45deg, #1B5E20 25%, transparent 25%), 
                    linear-gradient(-45deg, #1B5E20 25%, transparent 25%);
        background-size: cover, 40px 40px, 80px 80px, 80px 80px;
        background-position: center, 0 0, 0 0, 40px 40px;
        min-height: 100vh;
        animation: backgroundSlide 20s ease-in-out infinite;
    "></div>
    
    <!-- Floating Soccer Balls -->
    <div class="floating-elements position-absolute w-100 h-100">
        <div class="floating-ball ball-1">⚽</div>
        <div class="floating-ball ball-2">⚽</div>
        <div class="floating-ball ball-3">⚽</div>
    </div>
    
    <!-- Stadium Silhouette Overlay -->
    <div class="stadium-silhouette position-absolute bottom-0 w-100">
        <svg viewBox="0 0 1200 200" style="width: 100%; height: 200px;">
            <path d="M0,200 Q150,120 300,140 T600,130 T900,140 T1200,120 L1200,200 Z" fill="rgba(0,0,0,0.3)"/>
            <path d="M0,200 Q200,100 400,120 T800,110 T1200,100 L1200,200 Z" fill="rgba(0,0,0,0.2)"/>
        </svg>
    </div>
    
    <div class="container position-relative" style="z-index: 10;">
        <div class="row align-items-center min-vh-100">
            <!-- Main Hero Content -->
            <div class="col-lg-8 col-md-10 mx-auto text-center text-white">
                <div class="hero-content py-5">
                    <!-- Animated Club Badge with Glow -->
                    <div class="club-badge mb-4 position-relative">
                        <div class="badge-glow"></div>
                        <img src="{{ asset('images/logo.png') }}" alt="Buhimba United Saints FC" class="img-fluid logo-animated" style="max-height: 120px; filter: drop-shadow(0 0 20px rgba(255, 215, 0, 0.5));">
                    </div>
                    
                    <!-- Animated Club Name with Typewriter Effect -->
                    <div class="hero-title-container mb-4">
                        <h1 class="display-1 fw-bold mb-3 club-name-animated">
                            <span class="text-primary-glow">BUHIMBA</span>
                            <span class="text-white-glow">UNITED</span>
                            <span class="text-gold-glow">SAINTS FC</span>
                        </h1>
                        <div class="title-underline"></div>
                    </div>
                    
                    <!-- Dynamic Tagline with Icons -->
                    <div class="hero-tagline mb-4">
                        <div class="tagline-icons mb-3">
                            <i class="bi bi-trophy-fill text-warning me-3"></i>
                            <i class="bi bi-heart-fill text-danger me-3"></i>
                            <i class="bi bi-lightning-fill text-primary"></i>
                        </div>
                        <p class="h3 fw-light text-white-glow mb-2">
                            — <span class="typing-text">Pride of Buhimba</span> —
                        </p>
                        <p class="lead text-white-75">
                            Excellence • Unity • Victory
                        </p>
                    </div>
                    
                    <!-- Enhanced Call to Action with Stats -->
                    <div class="hero-stats-bar mb-4">
                        <div class="row text-center">
                            <div class="col-md-3 col-6 mb-3">
                                <div class="stat-item">
                                    <h3 class="stat-number text-warning" data-count="{{ $totalMatches }}">0</h3>
                                    <small class="text-white-75">Matches</small>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <div class="stat-item">
                                    <h3 class="stat-number text-success" data-count="{{ $totalPlayers }}">0</h3>
                                    <small class="text-white-75">Players</small>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <div class="stat-item">
                                    <h3 class="stat-number text-info" data-count="15">0</h3>
                                    <small class="text-white-75">Trophies</small>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <div class="stat-item">
                                    <h3 class="stat-number text-primary" data-count="2025">0</h3>
                                    <small class="text-white-75">Established</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Enhanced Action Buttons -->
                    <div class="hero-cta mt-5">
                        <div class="row justify-content-center g-3">
                            <div class="col-md-auto">
                                <a href="{{ route('fixtures.index') }}" class="btn btn-primary btn-lg px-5 py-3 shadow-lg btn-animated">
                                    <i class="bi bi-calendar-event me-2"></i>
                                    <span>View Fixtures</span>
                                    <div class="btn-ripple"></div>
                                </a>
                            </div>
                            <div class="col-md-auto">
                                <a href="{{ route('players.index') }}" class="btn btn-outline-light btn-lg px-5 py-3 shadow-lg btn-animated">
                                    <i class="bi bi-people me-2"></i>
                                    <span>Meet The Squad</span>
                                    <div class="btn-ripple"></div>
                                </a>
                            </div>
                            <div class="col-md-auto">
                                <a href="{{ route('news.index') }}" class="btn btn-warning btn-lg px-5 py-3 shadow-lg btn-animated">
                                    <i class="bi bi-newspaper me-2"></i>
                                    <span>Latest News</span>
                                    <div class="btn-ripple"></div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Proof -->
                    <div class="social-proof mt-5">
                        <p class="text-white-50 mb-3">Follow our journey</p>
                        <div class="social-icons">
                            <a href="#" class="social-icon me-3" target="_blank">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#" class="social-icon me-3" target="_blank">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="#" class="social-icon me-3" target="_blank">
                                <i class="bi bi-twitter-x"></i>
                            </a>
                            <a href="#" class="social-icon" target="_blank">
                                <i class="bi bi-youtube"></i>
                            </a>
                        </div>
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
        
        @if($keyPlayers->count() > 0)
        <div id="playerCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach($keyPlayers->chunk(3) as $index => $chunk)
                <button type="button" data-bs-target="#playerCarousel" data-bs-slide-to="{{ $index }}" 
                        class="{{ $index === 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>
            
            <div class="carousel-inner">
                @foreach($keyPlayers->chunk(3) as $index => $playerChunk)
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
            <a href="{{ route('sponsors.index') }}" class="btn btn-outline-primary btn-lg">
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
    
    // Hero Section Animations and Effects
    
    // Animated Counter for Stats
    function animateCounters() {
        const counters = document.querySelectorAll('.stat-number');
        
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-count'));
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 16); // 60fps
            let current = 0;
            
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                counter.textContent = Math.floor(current);
            }, 16);
        });
    }
    
    // Intersection Observer for Animations
    const observerOptions = {
        threshold: 0.3,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains('hero-stats-bar')) {
                    animateCounters();
                }
                entry.target.classList.add('animate-in');
            }
        });
    }, observerOptions);
    
    // Observe hero elements
    const heroElements = document.querySelectorAll('.hero-stats-bar, .hero-cta, .social-proof');
    heroElements.forEach(el => observer.observe(el));
    
    // Parallax Effect for Hero Background
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const heroBackground = document.querySelector('.hero-background');
        const heroParticles = document.querySelector('.hero-particles');
        
        if (heroBackground) {
            heroBackground.style.transform = `translateY(${scrolled * 0.5}px)`;
        }
        
        if (heroParticles) {
            heroParticles.style.transform = `translateY(${scrolled * 0.3}px)`;
        }
    });
    
    // Dynamic Typing Effect
    function typeWriter(element, text, speed = 100) {
        element.textContent = '';
        let i = 0;
        
        function type() {
            if (i < text.length) {
                element.textContent += text.charAt(i);
                i++;
                setTimeout(type, speed);
            }
        }
        
        type();
    }
    
    // Initialize typing effect for tagline
    const typingElement = document.querySelector('.typing-text');
    if (typingElement) {
        const phrases = ['Pride of Buhimba', 'Champions Rising', 'Unity in Victory', 'Saints Forever'];
        let currentPhrase = 0;
        
        function cycleText() {
            typeWriter(typingElement, phrases[currentPhrase], 100);
            currentPhrase = (currentPhrase + 1) % phrases.length;
        }
        
        cycleText();
        setInterval(cycleText, 4000);
    }
    
    // Button Ripple Effect
    document.querySelectorAll('.btn-animated').forEach(button => {
        button.addEventListener('click', function(e) {
            const ripple = this.querySelector('.btn-ripple');
            if (ripple) {
                ripple.style.width = ripple.style.height = '0';
                
                setTimeout(() => {
                    ripple.style.width = ripple.style.height = '200px';
                }, 10);
            }
        });
    });
    
    // Add smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});
</script>

<!-- Additional CSS for animations -->
<style>
.animate-in {
    animation: fadeInUp 0.8s ease-out forwards;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive adjustments for hero */
@media (max-width: 768px) {
    .hero-banner {
        min-height: 80vh;
    }
    
    .display-1 {
        font-size: 2.5rem;
    }
    
    .floating-ball {
        font-size: 1.5rem;
    }
    
    .particle {
        width: 3px;
        height: 3px;
    }
    
    .social-icon {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
    
    .stat-number {
        font-size: 2rem;
    }
}

@media (max-width: 576px) {
    .hero-cta .row {
        flex-direction: column;
        gap: 1rem;
    }
    
    .hero-cta .btn {
        width: 100%;
    }
    
    .club-name-animated {
        font-size: 2rem !important;
    }
    
    .hero-tagline .h3 {
        font-size: 1.5rem;
    }
}
</style>
@endsection
