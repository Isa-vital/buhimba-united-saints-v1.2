@extends('layouts.admin')

@section('title', 'Players Management')
@section('pageTitle', 'Players')

@section('pageActions')
    <a href="{{ route('admin.players.create') }}" class="btn btn-club-primary">
        <i class="bi bi-plus-circle me-1"></i>Add New Player
    </a>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Squad Overview</h5>
            </div>
            <div class="card-body">
                <!-- Statistics Cards -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3>{{ $players->total() }}</h3>
                                        <p class="mb-0">Total Players</p>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="bi bi-people fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3>{{ $players->where('is_active', true)->count() }}</h3>
                                        <p class="mb-0">Active Players</p>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="bi bi-check-circle fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-warning text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3>{{ $players->sum('goals') }}</h3>
                                        <p class="mb-0">Total Goals</p>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="bi bi-award fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h3>{{ $players->sum('appearances') }}</h3>
                                        <p class="mb-0">Total Appearances</p>
                                    </div>
                                    <div class="align-self-center">
                                        <i class="bi bi-graph-up fs-1"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Players Table -->
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Age</th>
                                <th>Nationality</th>
                                <th>Goals</th>
                                <th>Assists</th>
                                <th>Appearances</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($players as $player)
                                <tr>
                                    <td><span class="badge bg-club-green">#{{ $player->shirt_number }}</span></td>
                                    <td>
                                        @if($player->photo)
                                            <img src="{{ asset('storage/' . $player->photo) }}" alt="{{ $player->full_name }}" class="rounded-circle" width="40" height="40">
                                        @else
                                            <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                {{ substr($player->first_name, 0, 1) }}{{ substr($player->last_name, 0, 1) }}
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <strong>{{ $player->full_name }}</strong>
                                        <br>
                                        <small class="text-muted">{{ $player->preferred_foot }} foot</small>
                                    </td>
                                    <td>
                                        <span class="badge 
                                            @if($player->position == 'Goalkeeper') bg-info
                                            @elseif($player->position == 'Defender') bg-primary
                                            @elseif($player->position == 'Midfielder') bg-warning
                                            @else bg-danger
                                            @endif">
                                            {{ $player->position }}
                                        </span>
                                    </td>
                                    <td>{{ $player->age ?? 'N/A' }}</td>
                                    <td>
                                        <span class="fi fi-{{ strtolower($player->nationality == 'Uganda' ? 'ug' : 'xx') }}"></span>
                                        {{ $player->nationality }}
                                    </td>
                                    <td>{{ $player->goals }}</td>
                                    <td>{{ $player->assists }}</td>
                                    <td>{{ $player->appearances }}</td>
                                    <td>
                                        @if($player->is_active)
                                            <span class="badge bg-success">Active</span>
                                        @else
                                            <span class="badge bg-secondary">Inactive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group">
                                            <a href="{{ route('admin.players.show', $player) }}" class="btn btn-outline-info" title="View">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.players.edit', $player) }}" class="btn btn-outline-warning" title="Edit">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{ route('admin.players.destroy', $player) }}" method="POST" class="d-inline" 
                                                  onsubmit="return confirm('Are you sure you want to delete this player?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger" title="Delete">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="11" class="text-center py-4">
                                        <div class="text-muted">
                                            <i class="bi bi-people fs-1 d-block mb-2"></i>
                                            <p>No players found. <a href="{{ route('admin.players.create') }}">Add the first player</a>.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                @if($players->hasPages())
                    <div class="d-flex justify-content-center">
                        {{ $players->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
