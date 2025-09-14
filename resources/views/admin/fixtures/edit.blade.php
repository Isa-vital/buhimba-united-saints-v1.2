@extends('layouts.admin')

@section('title', 'Edit Fixture')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Fixture</h1>
        <a href="{{ route('admin.fixtures.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Back to Fixtures
        </a>
    </div>

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Fixture Details</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.fixtures.update', $fixture) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="opponent" class="form-label">Opponent Team <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('opponent') is-invalid @enderror"
                                id="opponent" name="opponent" value="{{ old('opponent', $fixture->opponent) }}" required>
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
                                <option value="Uganda Premier League" {{ (old('competition', $fixture->competition) == 'Uganda Premier League') ? 'selected' : '' }}>Uganda Premier League</option>
                                <option value="Uganda Cup" {{ (old('competition', $fixture->competition) == 'Uganda Cup') ? 'selected' : '' }}>Uganda Cup</option>
                                <option value="CECAFA Club Championship" {{ (old('competition', $fixture->competition) == 'CECAFA Club Championship') ? 'selected' : '' }}>CECAFA Club Championship</option>
                                <option value="Friendly" {{ (old('competition', $fixture->competition) == 'Friendly') ? 'selected' : '' }}>Friendly</option>
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
                                id="match_date" name="match_date"
                                value="{{ old('match_date', $fixture->match_date ? $fixture->match_date->format('Y-m-d\TH:i') : '') }}" required>
                            @error('match_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="venue" class="form-label">Venue <span class="text-danger">*</span></label>
                            <select class="form-select @error('venue') is-invalid @enderror"
                                id="venue" name="venue" required>
                                <option value="">Select Venue</option>
                                <option value="Home" {{ (old('venue', $fixture->venue) == 'Home') ? 'selected' : '' }}>Home</option>
                                <option value="Away" {{ (old('venue', $fixture->venue) == 'Away') ? 'selected' : '' }}>Away</option>
                                <option value="Neutral" {{ (old('venue', $fixture->venue) == 'Neutral') ? 'selected' : '' }}>Neutral</option>
                            </select>
                            @error('venue')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="location" class="form-label">Location/Stadium</label>
                            <input type="text" class="form-control @error('location') is-invalid @enderror"
                                id="location" name="location" value="{{ old('location', $fixture->location) }}"
                                placeholder="e.g., MTN Omondi Lugogo">
                            @error('location')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="match_type" class="form-label">Match Type</label>
                            <select class="form-select @error('match_type') is-invalid @enderror"
                                id="match_type" name="match_type">
                                <option value="">Select Match Type</option>
                                <option value="League" {{ (old('match_type', $fixture->match_type) == 'League') ? 'selected' : '' }}>League</option>
                                <option value="Cup" {{ (old('match_type', $fixture->match_type) == 'Cup') ? 'selected' : '' }}>Cup</option>
                                <option value="Playoff" {{ (old('match_type', $fixture->match_type) == 'Playoff') ? 'selected' : '' }}>Playoff</option>
                                <option value="Friendly" {{ (old('match_type', $fixture->match_type) == 'Friendly') ? 'selected' : '' }}>Friendly</option>
                            </select>
                            @error('match_type')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="season" class="form-label">Season</label>
                            <input type="number" class="form-control @error('season') is-invalid @enderror"
                                id="season" name="season" value="{{ old('season', $fixture->season) }}"
                                min="2020" max="2030" placeholder="e.g., 2025">
                            @error('season')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="matchday" class="form-label">Matchday</label>
                            <input type="number" class="form-control @error('matchday') is-invalid @enderror"
                                id="matchday" name="matchday" value="{{ old('matchday', $fixture->matchday) }}"
                                min="1" max="50" placeholder="e.g., 15">
                            @error('matchday')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="preview" class="form-label">Match Preview</label>
                    <textarea class="form-control @error('preview') is-invalid @enderror"
                        id="preview" name="preview" rows="4"
                        placeholder="Brief preview or notes about the upcoming match">{{ old('preview', $fixture->preview) }}</textarea>
                    @error('preview')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="is_completed" name="is_completed" value="1"
                            {{ old('is_completed', $fixture->is_completed) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_completed">
                            Mark as Completed
                        </label>
                    </div>
                    <small class="form-text text-muted">Check this if the match has been played</small>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Update Fixture
                    </button>
                    <a href="{{ route('admin.fixtures.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times me-2"></i>Cancel
                    </a>
                    <button type="button" class="btn btn-danger ms-auto" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        <i class="fas fa-trash me-2"></i>Delete Fixture
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete this fixture?</p>
                <p class="text-muted"><strong>{{ $fixture->opponent }}</strong> - {{ $fixture->match_date->format('M j, Y g:i A') }}</p>
                <p class="text-danger"><strong>This action cannot be undone.</strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form action="{{ route('admin.fixtures.destroy', $fixture) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete Fixture</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Auto-set current year as default season if empty
        const seasonInput = document.getElementById('season');
        if (!seasonInput.value) {
            seasonInput.value = new Date().getFullYear();
        }

        // Validate match date is not in the past (unless marking as completed)
        const matchDateInput = document.getElementById('match_date');
        const isCompletedCheckbox = document.getElementById('is_completed');

        function validateMatchDate() {
            if (!isCompletedCheckbox.checked) {
                const selectedDate = new Date(matchDateInput.value);
                const now = new Date();

                if (selectedDate < now) {
                    matchDateInput.setCustomValidity('Match date cannot be in the past unless marked as completed');
                } else {
                    matchDateInput.setCustomValidity('');
                }
            } else {
                matchDateInput.setCustomValidity('');
            }
        }

        matchDateInput.addEventListener('change', validateMatchDate);
        isCompletedCheckbox.addEventListener('change', validateMatchDate);
    });
</script>
@endpush