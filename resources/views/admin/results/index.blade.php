@extends('layouts.admin')

@section('title', 'Manage Results')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Results</h1>
        <a href="{{ route('admin.results.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Add Result
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Match Results</h6>
        </div>
        <div class="card-body">
            @if($results->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Match</th>
                                <th>Score</th>
                                <th>Date</th>
                                <th>Location</th>
                                <th>Competition</th>
                                <th>Result</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($results as $result)
                                <tr>
                                    <td>
                                        <strong>
                                            @if($result->is_home)
                                                Buhimba United Saints vs {{ $result->opponent }}
                                            @else
                                                {{ $result->opponent }} vs Buhimba United Saints
                                            @endif
                                        </strong>
                                        <br>
                                        <small class="text-muted">
                                            <i class="fas fa-{{ $result->is_home ? 'home' : 'plane' }} me-1"></i>
                                            {{ $result->is_home ? 'Home' : 'Away' }}
                                        </small>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <strong class="h5">
                                                @if($result->is_home)
                                                    {{ $result->home_score }} - {{ $result->away_score }}
                                                @else
                                                    {{ $result->away_score }} - {{ $result->home_score }}
                                                @endif
                                            </strong>
                                            @if($result->attendance)
                                                <br><small class="text-muted">{{ number_format($result->attendance) }} fans</small>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <strong>{{ $result->match_date->format('M d, Y') }}</strong>
                                        <br>
                                        <small class="text-muted">{{ $result->match_date->format('g:i A') }}</small>
                                    </td>
                                    <td>{{ $result->location }}</td>
                                    <td>{{ $result->competition }}</td>
                                    <td>
                                        @php
                                            $ourScore = $result->is_home ? $result->home_score : $result->away_score;
                                            $theirScore = $result->is_home ? $result->away_score : $result->home_score;
                                        @endphp
                                        @if($ourScore > $theirScore)
                                            <span class="badge bg-success">Win</span>
                                        @elseif($ourScore < $theirScore)
                                            <span class="badge bg-danger">Loss</span>
                                        @else
                                            <span class="badge bg-warning">Draw</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.results.show', $result) }}" class="btn btn-info btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.results.edit', $result) }}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.results.destroy', $result) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this result?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="d-flex justify-content-center">
                    {{ $results->links() }}
                </div>
            @else
                <div class="text-center py-4">
                    <i class="fas fa-chart-bar fa-3x text-muted mb-3"></i>
                    <h5 class="text-muted">No results found</h5>
                    <p class="text-muted">Start by adding your first match result.</p>
                    <a href="{{ route('admin.results.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Add Result
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
