@extends('layouts.admin')

@section('title', 'Manage Fixtures')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manage Fixtures</h1>
        <a href="{{ route('admin.fixtures.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-2"></i>Add Fixture
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
            <h6 class="m-0 font-weight-bold text-primary">Match Fixtures</h6>
        </div>
        <div class="card-body">
            @if($fixtures->count() > 0)
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Match</th>
                                <th>Date & Time</th>
                                <th>Location</th>
                                <th>Competition</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($fixtures as $fixture)
                                <tr>
                                    <td>
                                        <strong>
                                            @if($fixture->is_home)
                                                Buhimba United Saints vs {{ $fixture->opponent }}
                                            @else
                                                {{ $fixture->opponent }} vs Buhimba United Saints
                                            @endif
                                        </strong>
                                        <br>
                                        <small class="text-muted">
                                            <i class="fas fa-{{ $fixture->is_home ? 'home' : 'plane' }} me-1"></i>
                                            {{ $fixture->is_home ? 'Home' : 'Away' }}
                                        </small>
                                    </td>
                                    <td>
                                        <strong>{{ $fixture->match_date->format('M d, Y') }}</strong>
                                        <br>
                                        <small class="text-muted">{{ $fixture->match_date->format('g:i A') }}</small>
                                    </td>
                                    <td>{{ $fixture->location }}</td>
                                    <td>{{ $fixture->competition }}</td>
                                    <td>
                                        @switch($fixture->status)
                                            @case('scheduled')
                                                <span class="badge bg-primary">Scheduled</span>
                                                @break
                                            @case('live')
                                                <span class="badge bg-success">Live</span>
                                                @break
                                            @case('completed')
                                                <span class="badge bg-secondary">Completed</span>
                                                @break
                                            @case('postponed')
                                                <span class="badge bg-warning">Postponed</span>
                                                @break
                                            @case('cancelled')
                                                <span class="badge bg-danger">Cancelled</span>
                                                @break
                                        @endswitch
                                        @if($fixture->ticket_price)
                                            <br><small class="text-muted">UGX {{ number_format($fixture->ticket_price) }}</small>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.fixtures.show', $fixture) }}" class="btn btn-info btn-sm">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.fixtures.edit', $fixture) }}" class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.fixtures.destroy', $fixture) }}" method="POST" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this fixture?')">
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
                    {{ $fixtures->links() }}
                </div>
            @else
                <div class="text-center py-4">
                    <i class="fas fa-calendar-alt fa-3x text-muted mb-3"></i>
                    <h5 class="text-muted">No fixtures found</h5>
                    <p class="text-muted">Start by adding your first match fixture.</p>
                    <a href="{{ route('admin.fixtures.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Add Fixture
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
