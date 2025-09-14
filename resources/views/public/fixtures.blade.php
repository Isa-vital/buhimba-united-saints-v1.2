@extends('layouts.public')

@section('title', 'Fixtures - Buhimba United Saints FC')
@section('description', 'View upcoming fixtures and match schedule for Buhimba United Saints FC in the Uganda Premier League.')

@section('content')
<!-- Page Header with Background -->
<section class="fixtures-hero position-relative text-white py-5">
    <div class="hero-background" style="background-image: url('{{ asset('images/hero-background.jpg') }}');"></div>
    <div class="hero-overlay"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">Fixtures</h1>
                <p class="lead mb-0">Upcoming matches and schedule for Buhimba United Saints FC</p>
            </div>

        </div>
    </div>
</section>

@if($upcomingFixtures->count() > 0 || $recentFixtures->count() > 0)
<!-- Filter Options -->
<section class="py-3 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-outline-club-green active" data-filter="all">All Matches</button>
                    <button type="button" class="btn btn-outline-club-green" data-filter="home">Home</button>
                    <button type="button" class="btn btn-outline-club-green" data-filter="away">Away</button>
                </div>
            </div>
            <div class="col-md-6 text-md-end">
                <small class="text-muted">{{ $upcomingFixtures->count() + $recentFixtures->count() }} total fixtures</small>
            </div>
        </div>
    </div>
</section>

<!-- Fixtures List -->
<section class="py-5">
    <div class="container">
        <!-- Upcoming Fixtures -->
        @if($upcomingFixtures->count() > 0)
        <div class="mb-5">
            <h2 class="fw-bold text-club-green mb-4">
                <i class="bi bi-calendar-event me-2"></i>Upcoming Fixtures
            </h2>
            <div class="row">
                @foreach($upcomingFixtures as $fixture)
                <div class="col-lg-6 mb-4 fixture-item" data-venue="{{ strtolower($fixture->venue) }}">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge bg-{{ $fixture->venue === 'Home' ? 'success' : 'primary' }} px-3 py-2">
                                    {{ $fixture->venue }} Match
                                </span>
                                <small class="text-muted">{{ $fixture->competition }}</small>
                            </div>

                            <div class="row align-items-center mb-3">
                                <div class="col text-center">
                                    <div class="team-logo-container mb-2">
                                        <img src="{{ asset('images/logo.png') }}" alt="Buhimba United Saints" class="team-logo">
                                    </div>
                                    <h6 class="fw-bold mb-0">Buhimba United Saints</h6>
                                </div>
                                <div class="col-auto">
                                    <div class="text-center">
                                        <h4 class="fw-bold text-club-green mb-0">VS</h4>
                                    </div>
                                </div>
                                <div class="col text-center">
                                    <div class="opponent-logo-container bg-light rounded-circle mx-auto mb-2 d-flex align-items-center justify-content-center">
                                        <i class="bi bi-shield fs-3 text-muted"></i>
                                    </div>
                                    <h6 class="fw-bold mb-0">{{ $fixture->opponent }}</h6>
                                </div>
                            </div>

                            <div class="text-center bg-light rounded p-3">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <small class="text-muted d-block">Date & Time</small>
                                        <strong>{{ $fixture->match_date->format('M d, Y') }}</strong><br>
                                        <strong>{{ $fixture->match_date->format('H:i') }}</strong>
                                    </div>
                                    <div class="col-6">
                                        <small class="text-muted d-block">Venue</small>
                                        <strong>{{ $fixture->location ?: ($fixture->venue === 'Home' ? 'Home Ground' : 'Away Ground') }}</strong>
                                    </div>
                                </div>
                            </div>

                            @if($fixture->preview)
                            <div class="mt-3">
                                <small class="text-muted">{{ Str::limit($fixture->preview, 100) }}</small>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif

        <!-- Recent Fixtures -->
        @if($recentFixtures->count() > 0)
        <div>
            <h2 class="fw-bold text-secondary mb-4">
                <i class="bi bi-clock-history me-2"></i>Recent Fixtures
            </h2>
            <div class="row">
                @foreach($recentFixtures as $fixture)
                <div class="col-lg-6 mb-4 fixture-item" data-venue="{{ strtolower($fixture->venue) }}">
                    <div class="card border-0 shadow-sm h-100 opacity-75">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <span class="badge bg-secondary px-3 py-2">
                                    {{ $fixture->venue }} Match
                                </span>
                                <small class="text-muted">{{ $fixture->competition }}</small>
                            </div>

                            <div class="row align-items-center mb-3">
                                <div class="col text-center">
                                    <div class="team-logo-container mb-2">
                                        <img src="{{ asset('images/logo.png') }}" alt="Buhimba United Saints" class="team-logo">
                                    </div>
                                    <h6 class="fw-bold mb-0">Buhimba United Saints</h6>
                                </div>
                                <div class="col-auto">
                                    <div class="text-center">
                                        <h4 class="fw-bold text-muted mb-0">VS</h4>
                                    </div>
                                </div>
                                <div class="col text-center">
                                    <div class="opponent-logo-container bg-light rounded-circle mx-auto mb-2 d-flex align-items-center justify-content-center">
                                        <i class="bi bi-shield fs-3 text-muted"></i>
                                    </div>
                                    <h6 class="fw-bold mb-0">{{ $fixture->opponent }}</h6>
                                </div>
                            </div>

                            <div class="text-center bg-light rounded p-3">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <small class="text-muted d-block">Date & Time</small>
                                        <strong>{{ $fixture->match_date->format('M d, Y') }}</strong><br>
                                        <strong>{{ $fixture->match_date->format('H:i') }}</strong>
                                    </div>
                                    <div class="col-6">
                                        <small class="text-muted d-block">Venue</small>
                                        <strong>{{ $fixture->location ?: ($fixture->venue === 'Home' ? 'Home Ground' : 'Away Ground') }}</strong>
                                    </div>
                                </div>
                            </div>

                            @if($fixture->is_completed)
                            <div class="mt-3 text-center">
                                <span class="badge bg-success">Match Completed</span>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>

@else
<!-- No Fixtures -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <i class="bi bi-calendar-x fs-1 text-muted mb-3"></i>
                <h3 class="text-muted">No Fixtures Scheduled</h3>
                <p class="text-muted">The match schedule is being updated. Check back soon for upcoming fixtures.</p>
                <a href="{{ route('home') }}" class="btn btn-club-primary">Return Home</a>
            </div>
        </div>
    </div>
</section>
@endif

<!-- Season Information -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="fw-bold text-club-green mb-3">Season Information</h3>
                <p class="mb-4">
                    Follow Buhimba United Saints FC throughout the {{ date('Y') }} Uganda Premier League season.
                    All match times are in East Africa Time (EAT). Home matches are played at our home ground.
                </p>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-house-door text-club-green fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-1 fw-bold">Home Ground</h6>
                                <small class="text-muted">Buhimba Stadium</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-trophy text-club-green fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-1 fw-bold">Competition</h6>
                                <small class="text-muted">Uganda Premier League</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-range text-club-green fs-4 me-3"></i>
                            <div>
                                <h6 class="mb-1 fw-bold">Season</h6>
                                <small class="text-muted">{{ date('Y') }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card border-club-green">
                    <div class="card-header bg-club-green text-white">
                        <h6 class="mb-0 fw-bold">Quick Links</h6>
                    </div>
                    <div class="card-body">
                        <div class="d-grid gap-2">
                            <a href="{{ route('results.index') }}" class="btn btn-outline-club-green btn-sm">
                                <i class="bi bi-list-check me-1"></i>Results
                            </a>
                            <a href="{{ route('league-table.index') }}" class="btn btn-outline-club-green btn-sm">
                                <i class="bi bi-table me-1"></i>League Table
                            </a>
                            <a href="{{ route('players.index') }}" class="btn btn-outline-club-green btn-sm">
                                <i class="bi bi-people me-1"></i>Squad
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    /* Hero Section with Background */
    .fixtures-hero {
        min-height: 60vh;
        display: flex;
        align-items: center;
    }

    .hero-background {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        z-index: 1;
    }

    .hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(27, 94, 32, 0.85), rgba(46, 125, 50, 0.85));
        z-index: 2;
    }

    .fixtures-hero .container {
        z-index: 3;
    }

    .backdrop-blur {
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
    }

    /* Team Logo Styling */
    .team-logo-container {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        padding: 8px;
    }

    .team-logo {
        width: 45px;
        height: 45px;
        object-fit: contain;
        border-radius: 50%;
    }

    .opponent-logo-container {
        width: 60px;
        height: 60px;
    }

    /* Fixture Cards */
    .fixture-card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        border-radius: 15px;
        overflow: hidden;
    }

    .fixture-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }

    .team-logo-placeholder {
        width: 60px;
        height: 60px;
        font-size: 1.5rem;
    }

    .vs-section {
        font-size: 0.9rem;
    }

    .match-time {
        background: #f8f9fa;
        border-radius: 8px;
        padding: 8px;
    }

    /* Badge Styling */
    .badge {
        font-size: 0.75rem;
        padding: 0.5rem 0.75rem;
    }

    /* Enhanced Button Styles */
    .btn-outline-club-green {
        border: 2px solid #1b5e20;
        color: #1b5e20;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-outline-club-green:hover,
    .btn-outline-club-green.active {
        background: linear-gradient(135deg, #1b5e20, #2e7d32);
        border-color: #1b5e20;
        color: white;
        transform: translateY(-1px);
        box-shadow: 0 4px 15px rgba(27, 94, 32, 0.3);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .fixtures-hero {
            min-height: 50vh;
            text-align: center;
        }

        .team-logo-container,
        .opponent-logo-container {
            width: 50px;
            height: 50px;
        }

        .team-logo {
            width: 35px;
            height: 35px;
        }

        .team-logo-placeholder {
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
        }

        .display-4 {
            font-size: 2.5rem;
        }
    }

    @media (max-width: 576px) {

        .team-logo-container,
        .opponent-logo-container {
            width: 40px;
            height: 40px;
        }

        .team-logo {
            width: 30px;
            height: 30px;
        }

        .team-logo-placeholder {
            width: 40px;
            height: 40px;
            font-size: 1rem;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Filter functionality
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('[data-filter]');
        const fixtureItems = document.querySelectorAll('.fixture-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');

                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // Filter fixture items
                fixtureItems.forEach(item => {
                    const venue = item.getAttribute('data-venue');

                    if (filter === 'all' || venue === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
@endpush