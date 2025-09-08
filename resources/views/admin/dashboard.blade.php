@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <div class="d-none d-sm-inline-block">
            <span class="text-muted">Welcome back, {{ Auth::user()->name }}!</span>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Total News Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total News Articles
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\News::count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Published News Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Published Articles
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\News::where('is_published', true)->count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-check-circle fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Players Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Squad Players
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\Player::where('is_active', true)->count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-people fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Upcoming Matches Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Upcoming Matches
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\Fixture::where('match_date', '>', now())->count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Recent News -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Recent News Articles</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Actions:</div>
                            <a class="dropdown-item" href="{{ route('admin.news.index') }}">View All</a>
                            <a class="dropdown-item" href="{{ route('admin.news.create') }}">Create New</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @php
                        $recentNews = \App\Models\News::with('author')->latest()->take(5)->get();
                    @endphp
                    @forelse($recentNews as $article)
                        <div class="d-flex align-items-center mb-3">
                            <div class="mr-3">
                                <div class="icon-circle bg-primary">
                                    <i class="bi bi-newspaper text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="small text-gray-500">{{ $article->created_at->format('M d, Y') }}</div>
                                <div class="font-weight-bold">{{ Str::limit($article->title, 50) }}</div>
                                <div class="small text-muted">by {{ $article->author ? $article->author->name : 'Unknown' }}</div>
                            </div>
                            <div class="text-right">
                                <span class="badge badge-{{ $article->is_published ? 'success' : 'warning' }}">
                                    {{ $article->is_published ? 'Published' : 'Draft' }}
                                </span>
                            </div>
                        </div>
                    @empty
                        <div class="text-center text-muted">
                            <i class="bi bi-newspaper fa-3x mb-3"></i>
                            <p>No news articles yet</p>
                            <a href="{{ route('admin.news.create') }}" class="btn btn-primary btn-sm">Create First Article</a>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Upcoming Fixtures -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Upcoming Fixtures</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                            aria-labelledby="dropdownMenuLink2">
                            <div class="dropdown-header">Actions:</div>
                            <a class="dropdown-item" href="{{ route('admin.fixtures.index') }}">View All</a>
                            <a class="dropdown-item" href="{{ route('admin.fixtures.create') }}">Add New</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @php
                        $upcomingFixtures = \App\Models\Fixture::where('match_date', '>', now())
                            ->orderBy('match_date')
                            ->take(3)
                            ->get();
                    @endphp
                    @forelse($upcomingFixtures as $fixture)
                        <div class="d-flex align-items-center mb-3">
                            <div class="mr-3">
                                <div class="icon-circle bg-info">
                                    <i class="bi bi-calendar text-white"></i>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <div class="font-weight-bold">{{ $fixture->home_team }} vs {{ $fixture->away_team }}</div>
                                <div class="small text-gray-500">
                                    {{ $fixture->match_date->format('M d, Y - H:i') }}
                                </div>
                                <div class="small text-muted">{{ $fixture->venue ?: 'Venue TBD' }}</div>
                            </div>
                            <div class="text-right">
                                <span class="badge badge-primary">{{ $fixture->competition }}</span>
                            </div>
                        </div>
                    @empty
                        <div class="text-center text-muted">
                            <i class="bi bi-calendar fa-3x mb-3"></i>
                            <p>No upcoming fixtures</p>
                            <a href="{{ route('admin.fixtures.create') }}" class="btn btn-primary btn-sm">Add Fixture</a>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Quick Actions -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Quick Actions</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <a href="{{ route('admin.news.create') }}" class="btn btn-primary btn-icon-split btn-block">
                                <span class="icon text-white-50">
                                    <i class="bi bi-plus-circle"></i>
                                </span>
                                <span class="text">Add News</span>
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="{{ route('admin.players.create') }}" class="btn btn-success btn-icon-split btn-block">
                                <span class="icon text-white-50">
                                    <i class="bi bi-person-plus"></i>
                                </span>
                                <span class="text">Add Player</span>
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="{{ route('admin.fixtures.create') }}" class="btn btn-info btn-icon-split btn-block">
                                <span class="icon text-white-50">
                                    <i class="bi bi-calendar-plus"></i>
                                </span>
                                <span class="text">Add Fixture</span>
                            </a>
                        </div>
                        <div class="col-md-6 mb-3">
                            <a href="{{ route('home') }}" class="btn btn-warning btn-icon-split btn-block" target="_blank">
                                <span class="icon text-white-50">
                                    <i class="bi bi-eye"></i>
                                </span>
                                <span class="text">View Site</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- System Info -->
        <div class="col-lg-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">System Information</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Laravel Version</div>
                            <div class="font-weight-bold">{{ app()->version() }}</div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">PHP Version</div>
                            <div class="font-weight-bold">{{ PHP_VERSION }}</div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Total Users</div>
                            <div class="font-weight-bold">{{ \App\Models\User::count() }}</div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Database</div>
                            <div class="font-weight-bold">SQLite</div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Environment</div>
                            <div class="font-weight-bold">{{ app()->environment() }}</div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <div class="text-xs font-weight-bold text-uppercase mb-1">Debug Mode</div>
                            <div class="font-weight-bold">{{ config('app.debug') ? 'Enabled' : 'Disabled' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.border-left-primary {
    border-left: 0.25rem solid #4e73df !important;
}

.border-left-success {
    border-left: 0.25rem solid #1cc88a !important;
}

.border-left-info {
    border-left: 0.25rem solid #36b9cc !important;
}

.border-left-warning {
    border-left: 0.25rem solid #f6c23e !important;
}

.icon-circle {
    height: 2.5rem;
    width: 2.5rem;
    border-radius: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.btn-icon-split {
    padding: 0;
    overflow: hidden;
    display: flex;
    align-items: stretch;
    justify-content: center;
}

.btn-icon-split .icon {
    background: rgba(0, 0, 0, 0.15);
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 0.375rem 0.75rem;
}

.btn-icon-split .text {
    padding: 0.375rem 0.75rem;
    display: flex;
    align-items: center;
}
</style>
@endsection
