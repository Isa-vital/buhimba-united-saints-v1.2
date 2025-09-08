@extends('layouts.admin')

@section('title', 'Add Sponsor')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add New Sponsor</h1>
        <a href="{{ route('admin.sponsors.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Back to Sponsors
        </a>
    </div>

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Sponsor Details</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.sponsors.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Sponsor Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                   id="name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="website" class="form-label">Website URL</label>
                            <input type="url" class="form-control @error('website') is-invalid @enderror" 
                                   id="website" name="website" value="{{ old('website') }}"
                                   placeholder="https://example.com">
                            @error('website')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Contact Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                   id="email" name="email" value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="phone" class="form-label">Contact Phone</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" 
                                   id="phone" name="phone" value="{{ old('phone') }}"
                                   placeholder="e.g., +256 700 123 456">
                            @error('phone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="logo" class="form-label">Sponsor Logo</label>
                    <input type="file" class="form-control @error('logo') is-invalid @enderror" 
                           id="logo" name="logo" accept="image/*">
                    @error('logo')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">Upload sponsor logo (JPEG, PNG, JPG, SVG - Max 2MB)</div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" 
                              id="description" name="description" rows="4" 
                              placeholder="Brief description of the sponsor and partnership...">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="contract_start" class="form-label">Contract Start Date</label>
                            <input type="date" class="form-control @error('contract_start') is-invalid @enderror" 
                                   id="contract_start" name="contract_start" value="{{ old('contract_start') }}">
                            @error('contract_start')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="contract_end" class="form-label">Contract End Date</label>
                            <input type="date" class="form-control @error('contract_end') is-invalid @enderror" 
                                   id="contract_end" name="contract_end" value="{{ old('contract_end') }}">
                            @error('contract_end')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="sponsorship_amount" class="form-label">Sponsorship Amount (UGX)</label>
                            <input type="number" class="form-control @error('sponsorship_amount') is-invalid @enderror" 
                                   id="sponsorship_amount" name="sponsorship_amount" value="{{ old('sponsorship_amount') }}" 
                                   min="0" step="1000" placeholder="e.g., 5000000">
                            @error('sponsorship_amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="is_active" id="is_active" 
                               value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">
                            Active Sponsor
                        </label>
                    </div>
                    <div class="form-text">Uncheck if this sponsorship is currently inactive</div>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.sponsors.index') }}" class="btn btn-secondary me-2">Cancel</a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Add Sponsor
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
