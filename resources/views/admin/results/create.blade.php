@extends('layouts.admin')

@section('title', 'Add Match Result')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New Match Result</h1>
        <a href="{{ route('admin.results.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Back to Results
        </a>
    </div>

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Match Result Details</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.results.store') }}" method="POST">
                @csrf
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="fixture_id" class="form-label">Link to Fixture (Optional)</label>
                            <select class="form-select @error('fixture_id') is-invalid @enderror" 
                                    id="fixture_id" name="fixture_id">
                                <option value="">Select existing fixture (optional)</option>
                                @foreach($fixtures as $fixture)
                                    <option value="{{ $fixture->id }}" {{ old('fixture_id') == $fixture->id ? 'selected' : '' }}>
                                        {{ $fixture->opponent }} - {{ $fixture->match_date->format('M d, Y') }}
                                    </option>
                                @endforeach
                            </select>
                            @error('fixture_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Link this result to an existing fixture or leave empty to create independently</div>
                        </div>
                    </div>
                    
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
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="home_score" class="form-label">Home Team Score <span class="text-danger">*</span></label>
                            <input type="number" class="form-control @error('home_score') is-invalid @enderror" 
                                   id="home_score" name="home_score" value="{{ old('home_score') }}" 
                                   min="0" required>
                            @error('home_score')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="away_score" class="form-label">Away Team Score <span class="text-danger">*</span></label>
                            <input type="number" class="form-control @error('away_score') is-invalid @enderror" 
                                   id="away_score" name="away_score" value="{{ old('away_score') }}" 
                                   min="0" required>
                            @error('away_score')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="attendance" class="form-label">Attendance</label>
                            <input type="number" class="form-control @error('attendance') is-invalid @enderror" 
                                   id="attendance" name="attendance" value="{{ old('attendance') }}" 
                                   min="0" placeholder="e.g., 5000">
                            @error('attendance')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
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
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Buhimba United Saints played as</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_home" id="home_team" 
                                       value="1" {{ old('is_home', '1') == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="home_team">
                                    <i class="fas fa-home text-success me-1"></i>Home Team
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="is_home" id="away_team" 
                                       value="0" {{ old('is_home') == '0' ? 'checked' : '' }}>
                                <label class="form-check-label" for="away_team">
                                    <i class="fas fa-plane text-primary me-1"></i>Away Team
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="match_report" class="form-label">Match Report</label>
                    <textarea class="form-control @error('match_report') is-invalid @enderror" 
                              id="match_report" name="match_report" rows="6" 
                              placeholder="Detailed match report, highlights, key events...">{{ old('match_report') }}</textarea>
                    @error('match_report')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.results.index') }}" class="btn btn-secondary me-2">Cancel</a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Add Result
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
