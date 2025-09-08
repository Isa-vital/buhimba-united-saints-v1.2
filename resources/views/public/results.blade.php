@extends('layouts.public')

@section('title', 'Results - Buhimba United Saints FC')
@section('description', 'View match results and performance history for Buhimba United Saints FC in the Uganda Premier League.')

@section('content')
<!-- Page Header -->
<section class="bg-club-green text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">Match Results</h1>
                <p class="lead mb-0">Recent match results and performance history</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="bg-white bg-opacity-20 rounded p-3">
                    <h5 class="mb-1">Last Match</h5>
                    @if($lastResult)
                        <div class="fw-bold">{{ $lastResult->home_team }} {{ $lastResult->home_goals }}-{{ $lastResult->away_goals }} {{ $lastResult->away_team }}</div>
                        <small>{{ $lastResult->match_date->format('M d, Y') }}</small>
                    @else
                        <small>No recent matches</small>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@if($results->count() > 0)
    <!-- Season Stats -->
    <section class="py-4 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-card">
                        <h3 class="fw-bold text-club-green mb-1">{{ $seasonStats['matches'] }}</h3>
                        <small class="text-muted">Matches Played</small>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-card">
                        <h3 class="fw-bold text-success mb-1">{{ $seasonStats['wins'] }}</h3>
                        <small class="text-muted">Wins</small>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-card">
                        <h3 class="fw-bold text-warning mb-1">{{ $seasonStats['draws'] }}</h3>
                        <small class="text-muted">Draws</small>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-card">
                        <h3 class="fw-bold text-danger mb-1">{{ $seasonStats['losses'] }}</h3>
                        <small class="text-muted">Losses</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Options -->
    <section class="py-3 border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-outline-club-green active" data-filter="all">All Results</button>
                        <button type="button" class="btn btn-outline-club-green" data-filter="home">Home</button>
                        <button type="button" class="btn btn-outline-club-green" data-filter="away">Away</button>
                        <button type="button" class="btn btn-outline-club-green" data-filter="wins">Wins</button>
                    </div>
                </div>
                <div class="col-md-6 text-md-end">
                    <small class="text-muted">{{ $results->total() }} total results</small>
                </div>
            </div>
        </div>
    </section>

    <!-- Results List -->
    <section class="py-5">
        <div class="container">
            @foreach($results->groupBy(function($result) { return $result->match_date->format('F Y'); }) as $month => $monthResults)
                <div class="mb-5">
                    <h3 class="fw-bold text-club-green mb-4 border-bottom pb-2">
                        <i class="bi bi-calendar-check me-2"></i>{{ $month }}
                    </h3>
                    
                    <div class="row">
                        @foreach($monthResults as $result)
                            @php
                                $isHome = $result->home_team == 'Buhimba United Saints FC';
                                $isWin = ($isHome && $result->home_goals > $result->away_goals) || 
                                        (!$isHome && $result->away_goals > $result->home_goals);
                                $isDraw = $result->home_goals == $result->away_goals;
                                $isLoss = !$isWin && !$isDraw;
                            @endphp
                            
                            <div class="col-lg-6 mb-4">
                                <div class="card result-card h-100 shadow-sm border-{{ $isWin ? 'success' : ($isDraw ? 'warning' : 'danger') }}">
                                    <div class="card-header bg-{{ $isWin ? 'success' : ($isDraw ? 'warning' : 'danger') }} text-white">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="mb-1 fw-bold">{{ $result->competition }}</h6>
                                                <small class="text-white-50">
                                                    {{ $result->match_date->format('D, M d Y') }}
                                                </small>
                                            </div>
                                            <div class="col-auto">
                                                <span class="badge bg-white text-{{ $isWin ? 'success' : ($isDraw ? 'warning' : 'danger') }} fw-bold">
                                                    {{ $isWin ? 'WIN' : ($isDraw ? 'DRAW' : 'LOSS') }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="card-body">
                                        <!-- Match Result -->
                                        <div class="row align-items-center text-center mb-3">
                                            <div class="col-4">
                                                <div class="team-info">
                                                    @if($result->home_team == 'Buhimba United Saints FC')
                                                        <img src="{{ asset('images/logo.png') }}" alt="Buhimba United Saints FC" class="team-logo mb-2">
                                                    @else
                                                        <div class="team-logo-placeholder bg-light rounded-circle mx-auto mb-2 d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-shield-fill text-muted"></i>
                                                        </div>
                                                    @endif
                                                    <h6 class="fw-bold mb-0 {{ $result->home_team == 'Buhimba United Saints FC' ? 'text-club-green' : '' }}">
                                                        {{ $result->home_team }}
                                                    </h6>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4">
                                                <div class="score-section">
                                                    <div class="score-display bg-light rounded p-3">
                                                        <h2 class="fw-bold mb-0">
                                                            <span class="{{ $result->home_team == 'Buhimba United Saints FC' && $result->home_goals > $result->away_goals ? 'text-success' : '' }}">
                                                                {{ $result->home_goals }}
                                                            </span>
                                                            <span class="text-muted mx-2">-</span>
                                                            <span class="{{ $result->away_team == 'Buhimba United Saints FC' && $result->away_goals > $result->home_goals ? 'text-success' : '' }}">
                                                                {{ $result->away_goals }}
                                                            </span>
                                                        </h2>
                                                        <small class="text-muted">Final Score</small>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-4">
                                                <div class="team-info">
                                                    @if($result->away_team == 'Buhimba United Saints FC')
                                                        <img src="{{ asset('images/logo.png') }}" alt="Buhimba United Saints FC" class="team-logo mb-2">
                                                    @else
                                                        <div class="team-logo-placeholder bg-light rounded-circle mx-auto mb-2 d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-shield-fill text-muted"></i>
                                                        </div>
                                                    @endif
                                                    <h6 class="fw-bold mb-0 {{ $result->away_team == 'Buhimba United Saints FC' ? 'text-club-green' : '' }}">
                                                        {{ $result->away_team }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Match Details -->
                                        <div class="match-details mb-3">
                                            <div class="row text-center small">
                                                <div class="col-4">
                                                    <i class="bi bi-geo-alt text-muted me-1"></i>
                                                    <span class="text-muted">{{ $result->venue ?: 'Unknown' }}</span>
                                                </div>
                                                <div class="col-4">
                                                    <i class="bi bi-clock text-muted me-1"></i>
                                                    <span class="text-muted">{{ $result->match_date->format('H:i') }}</span>
                                                </div>
                                                <div class="col-4">
                                                    <i class="bi bi-flag text-muted me-1"></i>
                                                    <span class="text-muted">{{ $result->referee ?: 'TBD' }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Goal Scorers -->
                                        @if($result->goal_scorers && count($result->goal_scorers) > 0)
                                            <div class="goal-scorers mb-3">
                                                <h6 class="fw-bold text-club-green mb-2">
                                                    <i class="bi bi-trophy me-1"></i>Goal Scorers
                                                </h6>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <small class="text-muted fw-semibold">{{ $result->home_team }}</small>
                                                        @foreach($result->goal_scorers as $scorer)
                                                            @if($scorer['team'] == 'home')
                                                                <div class="small">
                                                                    <i class="bi bi-circle-fill text-success me-1" style="font-size: 0.5rem;"></i>
                                                                    {{ $scorer['player'] }} {{ $scorer['minute'] }}'
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="col-6">
                                                        <small class="text-muted fw-semibold">{{ $result->away_team }}</small>
                                                        @foreach($result->goal_scorers as $scorer)
                                                            @if($scorer['team'] == 'away')
                                                                <div class="small">
                                                                    <i class="bi bi-circle-fill text-success me-1" style="font-size: 0.5rem;"></i>
                                                                    {{ $scorer['player'] }} {{ $scorer['minute'] }}'
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        <!-- Match Stats -->
                                        @if($result->match_stats)
                                            <div class="match-stats">
                                                <h6 class="fw-bold text-club-green mb-2">
                                                    <i class="bi bi-bar-chart me-1"></i>Match Stats
                                                </h6>
                                                <div class="row small">
                                                    @foreach($result->match_stats as $stat => $values)
                                                        <div class="col-12 mb-1">
                                                            <div class="d-flex justify-content-between">
                                                                <span>{{ $values['home'] ?? 0 }}</span>
                                                                <span class="text-muted">{{ ucfirst(str_replace('_', ' ', $stat)) }}</span>
                                                                <span>{{ $values['away'] ?? 0 }}</span>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif
                                    </div>

                                    @if($result->match_report)
                                        <div class="card-footer bg-light">
                                            <small class="text-muted">
                                                <i class="bi bi-file-text me-1"></i>
                                                {{ Str::limit($result->match_report, 100) }}
                                            </small>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach

            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $results->links() }}
            </div>
        </div>
    </section>

@else
    <!-- No Results -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <i class="bi bi-calendar-x fs-1 text-muted mb-3"></i>
                    <h3 class="text-muted">No Match Results</h3>
                    <p class="text-muted">Match results will appear here once games have been played.</p>
                    <a href="{{ route('fixtures.index') }}" class="btn btn-club-primary">View Fixtures</a>
                </div>
            </div>
        </div>
    </section>
@endif

<!-- Season Performance -->
@if($results->count() > 0)
    <section class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h3 class="fw-bold text-club-green mb-4">Season Performance</h3>
                    
                    <!-- Form Guide -->
                    <div class="mb-4">
                        <h5 class="fw-bold mb-3">Recent Form (Last 5 Matches)</h5>
                        <div class="form-guide d-flex align-items-center">
                            @foreach($recentForm as $form)
                                <div class="form-result me-2 rounded-circle d-flex align-items-center justify-content-center 
                                           bg-{{ $form == 'W' ? 'success' : ($form == 'D' ? 'warning' : 'danger') }} text-white fw-bold"
                                     style="width: 40px; height: 40px;">
                                    {{ $form }}
                                </div>
                            @endforeach
                            <span class="ms-3 text-muted small">(Most recent on right)</span>
                        </div>
                    </div>

                    <!-- Additional Stats -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h6 class="fw-bold text-club-green">Goals</h6>
                            <div class="row">
                                <div class="col-6">
                                    <div class="text-center">
                                        <h4 class="fw-bold text-success mb-1">{{ $seasonStats['goals_for'] }}</h4>
                                        <small class="text-muted">Goals For</small>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="text-center">
                                        <h4 class="fw-bold text-danger mb-1">{{ $seasonStats['goals_against'] }}</h4>
                                        <small class="text-muted">Goals Against</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h6 class="fw-bold text-club-green">Goal Difference</h6>
                            <div class="text-center">
                                <h4 class="fw-bold mb-1 text-{{ $seasonStats['goal_difference'] >= 0 ? 'success' : 'danger' }}">
                                    {{ $seasonStats['goal_difference'] >= 0 ? '+' : '' }}{{ $seasonStats['goal_difference'] }}
                                </h4>
                                <small class="text-muted">Goal Difference</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="card border-club-green">
                        <div class="card-header bg-club-green text-white">
                            <h6 class="mb-0 fw-bold">Quick Navigation</h6>
                        </div>
                        <div class="card-body">
                            <div class="d-grid gap-2">
                                <a href="{{ route('fixtures.index') }}" class="btn btn-outline-club-green btn-sm">
                                    <i class="bi bi-calendar3 me-1"></i>Fixtures
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
@endif
@endsection

@push('styles')
<style>
.result-card {
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.result-card:hover {
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

.score-display {
    min-height: 80px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.form-result {
    font-size: 0.9rem;
}

.stat-card {
    padding: 1rem;
    border-radius: 8px;
    background: white;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

@media (max-width: 768px) {
    .team-logo, .team-logo-placeholder {
        width: 40px;
        height: 40px;
    }
    
    .team-logo-placeholder {
        font-size: 1rem;
    }
    
    .score-display h2 {
        font-size: 1.5rem;
    }
}
</style>
@endpush

@push('scripts')
<script>
// Filter functionality
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('[data-filter]');
    const resultCards = document.querySelectorAll('.result-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            // Filter cards
            resultCards.forEach(card => {
                const badge = card.querySelector('.card-header .badge');
                const isWin = badge.textContent.trim() === 'WIN';
                const isDraw = badge.textContent.trim() === 'DRAW';
                const isLoss = badge.textContent.trim() === 'LOSS';
                
                // Check if it's home or away by looking for Buhimba United Saints FC
                const homeTeam = card.querySelector('.team-info h6').textContent.trim();
                const isHome = homeTeam === 'Buhimba United Saints FC';
                
                if (filter === 'all' || 
                    (filter === 'home' && isHome) || 
                    (filter === 'away' && !isHome) ||
                    (filter === 'wins' && isWin)) {
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
