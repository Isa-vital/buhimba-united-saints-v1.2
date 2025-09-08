@extends('layouts.public')

@section('title', 'Fixtures - Buhimba United Saints FC')
@section('description', 'View upcoming fixtures and match schedule for Buhimba United Saints FC in the Uganda Premier League.')

@section('content')
<!-- Page Header -->
<section class="bg-club-green text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">Fixtures</h1>
                <p class="lead mb-0">Upcoming matches and schedule for Buhimba United Saints FC</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="bg-white bg-opacity-20 rounded p-3">
                    <h5 class="mb-1">Next Match</h5>
                    @if($nextFixture)
                        <div class="fw-bold">{{ $nextFixture->home_team }} vs {{ $nextFixture->away_team }}</div>
                        <small>{{ $nextFixture->match_date->format('M d, Y - H:i') }}</small>
                    @else
                        <small>No upcoming matches</small>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@if($fixtures->count() > 0)
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
                    <small class="text-muted">{{ $fixtures->total() }} total fixtures</small>
                </div>
            </div>
        </div>
    </section>

    <!-- Fixtures List -->
    <section class="py-5">
        <div class="container">
            @foreach($fixtures->groupBy(function($fixture) { return $fixture->match_date->format('F Y'); }) as $month => $monthFixtures)
                <div class="mb-5">
                    <h3 class="fw-bold text-club-green mb-4 border-bottom pb-2">
                        <i class="bi bi-calendar-event me-2"></i>{{ $month }}
                    </h3>
                    
                    <div class="row">
                        @foreach($monthFixtures as $fixture)
                            <div class="col-lg-6 mb-4">
                                <div class="card fixture-card h-100 shadow-sm {{ $fixture->home_team == 'Buhimba United Saints FC' ? 'border-club-green' : '' }}">
                                    <div class="card-header bg-{{ $fixture->home_team == 'Buhimba United Saints FC' ? 'club-green text-white' : 'light' }}">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="mb-1 fw-bold">{{ $fixture->competition }}</h6>
                                                <small class="{{ $fixture->home_team == 'Buhimba United Saints FC' ? 'text-white-50' : 'text-muted' }}">
                                                    Matchday {{ $fixture->matchday ?? 'TBD' }}
                                                </small>
                                            </div>
                                            <div class="col-auto">
                                                @if($fixture->home_team == 'Buhimba United Saints FC')
                                                    <span class="badge bg-white text-club-green">HOME</span>
                                                @else
                                                    <span class="badge bg-secondary">AWAY</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card-body">
                                        <!-- Match Teams -->
                                        <div class="row align-items-center text-center mb-3">
                                            <div class="col-4">
                                                <div class="team-info">
                                                    @if($fixture->home_team == 'Buhimba United Saints FC')
                                                        <img src="{{ asset('images/logo.png') }}" alt="Buhimba United Saints FC" class="team-logo mb-2">
                                                    @else
                                                        <div class="team-logo-placeholder bg-light rounded-circle mx-auto mb-2 d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-shield-fill text-muted"></i>
                                                        </div>
                                                    @endif
                                                    <h6 class="fw-bold mb-0 {{ $fixture->home_team == 'Buhimba United Saints FC' ? 'text-club-green' : '' }}">
                                                        {{ $fixture->home_team }}
                                                    </h6>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4">
                                                <div class="vs-section">
                                                    <div class="fw-bold text-muted mb-1">VS</div>
                                                    <div class="match-time">
                                                        <div class="fw-bold">{{ $fixture->match_date->format('H:i') }}</div>
                                                        <small class="text-muted">{{ $fixture->match_date->format('M d') }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4">
                                                <div class="team-info">
                                                    @if($fixture->away_team == 'Buhimba United Saints FC')
                                                        <img src="{{ asset('images/logo.png') }}" alt="Buhimba United Saints FC" class="team-logo mb-2">
                                                    @else
                                                        <div class="team-logo-placeholder bg-light rounded-circle mx-auto mb-2 d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-shield-fill text-muted"></i>
                                                        </div>
                                                    @endif
                                                    <h6 class="fw-bold mb-0 {{ $fixture->away_team == 'Buhimba United Saints FC' ? 'text-club-green' : '' }}">
                                                        {{ $fixture->away_team }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Match Details -->
                                        <div class="match-details">
                                            <div class="row text-center small">
                                                <div class="col-6">
                                                    <i class="bi bi-geo-alt text-muted me-1"></i>
                                                    <span class="text-muted">{{ $fixture->venue ?: 'Venue TBD' }}</span>
                                                </div>
                                                <div class="col-6">
                                                    <i class="bi bi-calendar3 text-muted me-1"></i>
                                                    <span class="text-muted">{{ $fixture->match_date->format('D, M d Y') }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        @if($fixture->description)
                                            <div class="mt-3 pt-3 border-top">
                                                <small class="text-muted">{{ $fixture->description }}</small>
                                            </div>
                                        @endif

                                        <!-- Match Status -->
                                        @if($fixture->status)
                                            <div class="mt-3">
                                                <span class="badge bg-{{ 
                                                    $fixture->status == 'scheduled' ? 'success' : 
                                                    ($fixture->status == 'postponed' ? 'warning' : 
                                                    ($fixture->status == 'cancelled' ? 'danger' : 'secondary')) 
                                                }}">
                                                    {{ ucfirst($fixture->status) }}
                                                </span>
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Ticket/Match Info -->
                                    <div class="card-footer bg-light">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                @if($fixture->ticket_price)
                                                    <small class="text-muted">
                                                        <i class="bi bi-ticket-perforated me-1"></i>
                                                        Tickets: UGX {{ number_format($fixture->ticket_price) }}
                                                    </small>
                                                @else
                                                    <small class="text-muted">
                                                        <i class="bi bi-info-circle me-1"></i>
                                                        Ticket info coming soon
                                                    </small>
                                                @endif
                                            </div>
                                            <div class="col-auto">
                                                @if($fixture->match_date->isFuture())
                                                    <small class="text-club-green fw-semibold">
                                                        {{ $fixture->match_date->diffForHumans() }}
                                                    </small>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $fixtures->links() }}
            </div>
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
.fixture-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.fixture-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.team-logo {
    width: 60px;
    height: 60px;
    object-fit: contain;
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

@media (max-width: 768px) {
    .team-logo, .team-logo-placeholder {
        width: 40px;
        height: 40px;
    }
    
    .team-logo-placeholder {
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
    const fixtureCards = document.querySelectorAll('.fixture-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter cards
            fixtureCards.forEach(card => {
                const isHome = card.querySelector('.badge').textContent.trim() === 'HOME';
                const isAway = card.querySelector('.badge').textContent.trim() === 'AWAY';
                
                if (filter === 'all' || 
                    (filter === 'home' && isHome) || 
                    (filter === 'away' && isAway)) {
                    card.closest('.col-lg-6').style.display = 'block';
                } else {
                    card.closest('.col-lg-6').style.display = 'none';
                }
            });
        });
    });
});
</script>
@endpush
