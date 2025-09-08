@extends('layouts.public')

@section('title', 'League Table - Uganda Premier League')
@section('description', 'Current Uganda Premier League standings and league table featuring Buhimba United Saints FC position and statistics.')

@section('content')
<!-- Page Header -->
<section class="bg-club-green text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">League Table</h1>
                <p class="lead mb-0">Current Uganda Premier League standings for the {{ date('Y') }} season</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="bg-white bg-opacity-20 rounded p-3">
                    <h5 class="mb-1">Our Position</h5>
                    @if($ourPosition)
                        <div class="fw-bold">#{{ $ourPosition->position }}</div>
                        <small>{{ $ourPosition->points }} points</small>
                    @else
                        <small>Not available</small>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@if($leagueTable->count() > 0)
    <!-- League Statistics -->
    <section class="py-4 bg-light">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-card">
                        <h3 class="fw-bold text-club-green mb-1">{{ $leagueTable->count() }}</h3>
                        <small class="text-muted">Teams</small>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-card">
                        <h3 class="fw-bold text-club-green mb-1">{{ $totalMatches }}</h3>
                        <small class="text-muted">Matches Played</small>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-card">
                        <h3 class="fw-bold text-club-green mb-1">{{ $totalGoals }}</h3>
                        <small class="text-muted">Goals Scored</small>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="stat-card">
                        <h3 class="fw-bold text-club-green mb-1">{{ $matchday ?: 'N/A' }}</h3>
                        <small class="text-muted">Current Matchday</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- League Table -->
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow">
                        <div class="card-header bg-club-green text-white">
                            <h4 class="mb-0 fw-bold">
                                <i class="bi bi-trophy me-2"></i>Uganda Premier League {{ date('Y') }}
                            </h4>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="text-center" style="width: 60px;">#</th>
                                        <th style="min-width: 200px;">Team</th>
                                        <th class="text-center" style="width: 60px;">MP</th>
                                        <th class="text-center" style="width: 60px;">W</th>
                                        <th class="text-center" style="width: 60px;">D</th>
                                        <th class="text-center" style="width: 60px;">L</th>
                                        <th class="text-center" style="width: 80px;">GF</th>
                                        <th class="text-center" style="width: 80px;">GA</th>
                                        <th class="text-center" style="width: 80px;">GD</th>
                                        <th class="text-center fw-bold" style="width: 80px;">Pts</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($leagueTable as $team)
                                        <tr class="{{ 
                                            $team->team_name == 'Buhimba United Saints FC' ? 'table-success' : 
                                            ($team->position <= 3 ? 'table-warning' : 
                                            ($team->position >= $leagueTable->count() - 2 ? 'table-danger' : '')) 
                                        }}">
                                            <!-- Position -->
                                            <td class="text-center fw-bold">
                                                {{ $team->position }}
                                                @if($team->position <= 3)
                                                    <i class="bi bi-trophy text-warning ms-1"></i>
                                                @elseif($team->position >= $leagueTable->count() - 2)
                                                    <i class="bi bi-arrow-down text-danger ms-1"></i>
                                                @endif
                                            </td>
                                            
                                            <!-- Team Name -->
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    @if($team->team_name == 'Buhimba United Saints FC')
                                                        <img src="{{ asset('images/logo.png') }}" alt="Buhimba United Saints FC" 
                                                             class="team-logo me-3" style="width: 32px; height: 32px; object-fit: contain;">
                                                    @else
                                                        <div class="team-logo-placeholder bg-light rounded me-3 d-flex align-items-center justify-content-center" 
                                                             style="width: 32px; height: 32px;">
                                                            <i class="bi bi-shield-fill text-muted"></i>
                                                        </div>
                                                    @endif
                                                    
                                                    <div>
                                                        <div class="fw-bold {{ $team->team_name == 'Buhimba United Saints FC' ? 'text-club-green' : '' }}">
                                                            {{ $team->team_name }}
                                                        </div>
                                                        @if($team->recent_form)
                                                            <div class="small">
                                                                @foreach(str_split($team->recent_form) as $result)
                                                                    <span class="badge badge-sm me-1 bg-{{ 
                                                                        $result == 'W' ? 'success' : 
                                                                        ($result == 'D' ? 'warning' : 'danger') 
                                                                    }}">{{ $result }}</span>
                                                                @endforeach
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <!-- Statistics -->
                                            <td class="text-center">{{ $team->matches_played }}</td>
                                            <td class="text-center">{{ $team->wins }}</td>
                                            <td class="text-center">{{ $team->draws }}</td>
                                            <td class="text-center">{{ $team->losses }}</td>
                                            <td class="text-center">{{ $team->goals_for }}</td>
                                            <td class="text-center">{{ $team->goals_against }}</td>
                                            <td class="text-center {{ $team->goal_difference >= 0 ? 'text-success' : 'text-danger' }}">
                                                {{ $team->goal_difference >= 0 ? '+' : '' }}{{ $team->goal_difference }}
                                            </td>
                                            <td class="text-center fw-bold">{{ $team->points }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                        <!-- Legend -->
                        <div class="card-footer bg-light">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="fw-bold mb-2">Legend:</h6>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="d-flex align-items-center">
                                            <div class="table-warning" style="width: 20px; height: 20px; border-radius: 3px;"></div>
                                            <small class="ms-2">Top 3 (Continental Competitions)</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="table-danger" style="width: 20px; height: 20px; border-radius: 3px;"></div>
                                            <small class="ms-2">Relegation Zone</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="table-success" style="width: 20px; height: 20px; border-radius: 3px;"></div>
                                            <small class="ms-2">Buhimba United Saints FC</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <h6 class="fw-bold mb-2">Abbreviations:</h6>
                                    <small class="text-muted">
                                        MP: Matches Played | W: Wins | D: Draws | L: Losses | 
                                        GF: Goals For | GA: Goals Against | GD: Goal Difference | Pts: Points
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Performance Analysis -->
    @if($ourPosition)
        <section class="bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <h3 class="fw-bold text-club-green mb-4">Buhimba United Saints FC Performance</h3>
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card border-club-green">
                                    <div class="card-body text-center">
                                        <h2 class="fw-bold text-club-green mb-1">#{{ $ourPosition->position }}</h2>
                                        <p class="text-muted mb-0">Current Position</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card border-club-green">
                                    <div class="card-body text-center">
                                        <h2 class="fw-bold text-club-green mb-1">{{ $ourPosition->points }}</h2>
                                        <p class="text-muted mb-0">Total Points</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3 col-6 mb-3">
                                <div class="text-center">
                                    <h4 class="fw-bold text-success mb-1">{{ $ourPosition->wins }}</h4>
                                    <small class="text-muted">Wins</small>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <div class="text-center">
                                    <h4 class="fw-bold text-warning mb-1">{{ $ourPosition->draws }}</h4>
                                    <small class="text-muted">Draws</small>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <div class="text-center">
                                    <h4 class="fw-bold text-danger mb-1">{{ $ourPosition->losses }}</h4>
                                    <small class="text-muted">Losses</small>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-3">
                                <div class="text-center">
                                    <h4 class="fw-bold text-club-green mb-1">{{ $ourPosition->matches_played }}</h4>
                                    <small class="text-muted">Played</small>
                                </div>
                            </div>
                        </div>

                        <!-- Goal Statistics -->
                        <div class="mt-4">
                            <h5 class="fw-bold text-club-green mb-3">Goal Statistics</h5>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="text-center">
                                        <h3 class="fw-bold text-success mb-1">{{ $ourPosition->goals_for }}</h3>
                                        <small class="text-muted">Goals Scored</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="text-center">
                                        <h3 class="fw-bold text-danger mb-1">{{ $ourPosition->goals_against }}</h3>
                                        <small class="text-muted">Goals Conceded</small>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="text-center">
                                        <h3 class="fw-bold {{ $ourPosition->goal_difference >= 0 ? 'text-success' : 'text-danger' }} mb-1">
                                            {{ $ourPosition->goal_difference >= 0 ? '+' : '' }}{{ $ourPosition->goal_difference }}
                                        </h3>
                                        <small class="text-muted">Goal Difference</small>
                                    </div>
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
                                    <a href="{{ route('results.index') }}" class="btn btn-outline-club-green btn-sm">
                                        <i class="bi bi-list-check me-1"></i>Results
                                    </a>
                                    <a href="{{ route('players.index') }}" class="btn btn-outline-club-green btn-sm">
                                        <i class="bi bi-people me-1"></i>Squad
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Recent Form -->
                        @if($ourPosition->recent_form)
                            <div class="card border-club-green mt-4">
                                <div class="card-header bg-light">
                                    <h6 class="mb-0 fw-bold text-club-green">Recent Form</h6>
                                </div>
                                <div class="card-body text-center">
                                    @foreach(str_split($ourPosition->recent_form) as $result)
                                        <span class="badge fs-6 me-2 mb-2 bg-{{ 
                                            $result == 'W' ? 'success' : 
                                            ($result == 'D' ? 'warning' : 'danger') 
                                        }}">{{ $result }}</span>
                                    @endforeach
                                    <div class="mt-2">
                                        <small class="text-muted">(Most recent on right)</small>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
    @endif

@else
    <!-- No League Table Data -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <i class="bi bi-table fs-1 text-muted mb-3"></i>
                    <h3 class="text-muted">League Table Not Available</h3>
                    <p class="text-muted">The league table will be updated as matches are played.</p>
                    <a href="{{ route('fixtures.index') }}" class="btn btn-club-primary">View Fixtures</a>
                </div>
            </div>
        </div>
    </section>
@endif

<!-- Season Information -->
<section class="bg-club-green text-white py-5">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-4">Uganda Premier League {{ date('Y') }}</h2>
                <p class="lead mb-4">
                    Follow the excitement of Uganda's premier football competition. 
                    16 teams competing for the ultimate prize in Ugandan football.
                </p>
                
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <i class="bi bi-trophy fs-2 mb-2"></i>
                        <h5>Championship</h5>
                        <small>Top team qualifies for CAF Champions League</small>
                    </div>
                    <div class="col-md-4 mb-3">
                        <i class="bi bi-globe fs-2 mb-2"></i>
                        <h5>Continental</h5>
                        <small>Top 3 teams qualify for CAF competitions</small>
                    </div>
                    <div class="col-md-4 mb-3">
                        <i class="bi bi-arrow-down fs-2 mb-2"></i>
                        <h5>Relegation</h5>
                        <small>Bottom 3 teams relegated to FUFA Big League</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
.stat-card {
    padding: 1rem;
    border-radius: 8px;
    background: white;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.table th {
    border-top: none;
    font-weight: 600;
    background-color: #f8f9fa;
}

.table-responsive {
    border-radius: 0;
}

.badge-sm {
    font-size: 0.6rem;
    padding: 0.2rem 0.4rem;
}

.team-logo-placeholder {
    font-size: 0.8rem;
}

@media (max-width: 768px) {
    .table-responsive {
        font-size: 0.9rem;
    }
    
    .table th, .table td {
        padding: 0.5rem 0.25rem;
    }
    
    .team-logo, .team-logo-placeholder {
        width: 24px !important;
        height: 24px !important;
    }
    
    .d-none-mobile {
        display: none !important;
    }
}

.table tbody tr:hover {
    background-color: rgba(var(--bs-primary-rgb), 0.1);
}

.table tbody tr.table-success:hover {
    background-color: rgba(var(--bs-success-rgb), 0.2);
}
</style>
@endpush
