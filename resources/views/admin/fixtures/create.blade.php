@extends('layouts.admin')

@section('title', 'Add Fixture')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New Fixture</h1>
        <a href="{{ route('admin.fixtures.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Back to Fixtures
        </a>
    </div>

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Fixture Details</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.fixtures.store') }}" method="POST">
                @csrf
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="opponent" class="form-label">Opponent Team <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('opponent') is-invalid @enderror" 
                                   id="opponent" name="opponent" value="{{ old('opponent') }}" required>
                            @error('opponent')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="competition" class="form-label">Competition <span class="text-danger">*</span></label>
                            <select class="form-select @error('competition') is-invalid @enderror" 
                                    id="competition" name="competition" required>
                                <option value="">Select Competition</option>
                                <option value="Uganda Premier League" {{ old('competition') == 'Uganda Premier League' ? 'selected' : '' }}>Uganda Premier League</option>
                                <option value="Uganda Cup" {{ old('competition') == 'Uganda Cup' ? 'selected' : '' }}>Uganda Cup</option>
                                <option value="CECAFA Club Championship" {{ old('competition') == 'CECAFA Club Championship' ? 'selected' : '' }}>CECAFA Club Championship</option>
                                <option value="Friendly" {{ old('competition') == 'Friendly' ? 'selected' : '' }}>Friendly</option>
                            </select>
                            @error('competition')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="match_date" class="form-label">Match Date & Time <span class="text-danger">*</span></label>
                            <input type="datetime-local" class="form-control @error('match_date') is-invalid @enderror" 
                                   id="match_date" name="match_date" value="{{ old('match_date') }}" required>
                            @error('match_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="location" class="form-label">Stadium/Location <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('location') is-invalid @enderror" 
                                   id="location" name="location" value="{{ old('location') }}" required
                                   placeholder="e.g., Buhimba Stadium, Wankulukuku Stadium">
                            @error('location')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Match Type</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_home" id="home_match" 
                                       value="1" {{ old('is_home', '1') == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="home_match">
                                    <i class="fas fa-home text-success me-1"></i>Home Match
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_home" id="away_match" 
                                       value="0" {{ old('is_home') == '0' ? 'checked' : '' }}>
                                <label class="form-check-label" for="away_match">
                                    <i class="fas fa-plane text-primary me-1"></i>Away Match
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                            <select class="form-select @error('status') is-invalid @enderror" 
                                    id="status" name="status" required>
                                <option value="scheduled" {{ old('status', 'scheduled') == 'scheduled' ? 'selected' : '' }}>Scheduled</option>
                                <option value="live" {{ old('status') == 'live' ? 'selected' : '' }}>Live</option>
                                <option value="completed" {{ old('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="postponed" {{ old('status') == 'postponed' ? 'selected' : '' }}>Postponed</option>
                                <option value="cancelled" {{ old('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="ticket_price" class="form-label">Ticket Price (UGX)</label>
                            <input type="number" class="form-control @error('ticket_price') is-invalid @enderror" 
                                   id="ticket_price" name="ticket_price" value="{{ old('ticket_price') }}" 
                                   min="0" step="1000" placeholder="e.g., 10000">
                            @error('ticket_price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Leave empty if tickets are free</div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Match Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" 
                              id="description" name="description" rows="4" 
                              placeholder="Additional details about the match...">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.fixtures.index') }}" class="btn btn-secondary me-2">Cancel</a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Create Fixture
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
