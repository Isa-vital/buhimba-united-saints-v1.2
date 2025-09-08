@extends('layouts.admin')

@section('title', 'Image Management')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <i class="bi bi-images me-2"></i>Image Management
        </h1>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle me-2"></i>{{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="row">
        <!-- Club Logo -->
        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-shield-check me-2"></i>Club Logo
                    </h5>
                </div>
                <div class="card-body text-center">
                    <div class="mb-3">
                        @if(file_exists(public_path('images/club-logo.png')))
                            <img src="{{ asset('images/club-logo.png') }}?v={{ time() }}" 
                                 alt="Club Logo" 
                                 class="img-fluid border rounded"
                                 style="max-width: 150px; max-height: 150px;">
                        @else
                            <div class="border rounded d-flex align-items-center justify-content-center" 
                                 style="width: 150px; height: 150px; margin: 0 auto; background-color: #f8f9fa;">
                                <i class="bi bi-image text-muted" style="font-size: 3rem;"></i>
                            </div>
                        @endif
                    </div>
                    <p class="text-muted small">
                        <strong>Usage:</strong> Navigation bar, social media sharing<br>
                        <strong>Recommended:</strong> 200x200px, PNG with transparency
                    </p>
                    
                    <form action="{{ route('admin.settings.upload-image') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="type" value="logo">
                        <div class="mb-3">
                            <input type="file" class="form-control" name="image" accept="image/*" required>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-upload me-2"></i>Upload Logo
                        </button>
                        @if(file_exists(public_path('images/club-logo.png')))
                            <button type="button" class="btn btn-outline-danger ms-2" onclick="deleteImage('logo')">
                                <i class="bi bi-trash me-2"></i>Delete
                            </button>
                        @endif
                    </form>
                </div>
            </div>
        </div>

        <!-- Hero Logo -->
        <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-star me-2"></i>Hero Section Logo
                    </h5>
                </div>
                <div class="card-body text-center">
                    <div class="mb-3">
                        @if(file_exists(public_path('images/logo.png')))
                            <img src="{{ asset('images/logo.png') }}?v={{ time() }}" 
                                 alt="Hero Logo" 
                                 class="img-fluid border rounded"
                                 style="max-width: 150px; max-height: 150px;">
                        @else
                            <div class="border rounded d-flex align-items-center justify-content-center" 
                                 style="width: 150px; height: 150px; margin: 0 auto; background-color: #f8f9fa;">
                                <i class="bi bi-image text-muted" style="font-size: 3rem;"></i>
                            </div>
                        @endif
                    </div>
                    <p class="text-muted small">
                        <strong>Usage:</strong> Homepage hero section<br>
                        <strong>Recommended:</strong> 300x300px, PNG with transparency
                    </p>
                    
                    <form action="{{ route('admin.settings.upload-image') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="type" value="hero-logo">
                        <div class="mb-3">
                            <input type="file" class="form-control" name="image" accept="image/*" required>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-upload me-2"></i>Upload Hero Logo
                        </button>
                        @if(file_exists(public_path('images/logo.png')))
                            <button type="button" class="btn btn-outline-danger ms-2" onclick="deleteImage('hero-logo')">
                                <i class="bi bi-trash me-2"></i>Delete
                            </button>
                        @endif
                    </form>
                </div>
            </div>
        </div>

        <!-- Hero Background -->
        <div class="col-lg-12 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-image me-2"></i>Hero Background Image
                    </h5>
                </div>
                <div class="card-body text-center">
                    <div class="mb-3">
                        @if(file_exists(public_path('images/hero-background.jpg')))
                            <img src="{{ asset('images/hero-background.jpg') }}?v={{ time() }}" 
                                 alt="Hero Background" 
                                 class="img-fluid border rounded"
                                 style="max-width: 100%; max-height: 200px; object-fit: cover;">
                        @else
                            <div class="border rounded d-flex align-items-center justify-content-center" 
                                 style="width: 100%; height: 200px; background-color: #f8f9fa;">
                                <div class="text-center">
                                    <i class="bi bi-image text-muted" style="font-size: 4rem;"></i>
                                    <p class="text-muted mt-2">No background image uploaded</p>
                                </div>
                            </div>
                        @endif
                    </div>
                    <p class="text-muted small">
                        <strong>Usage:</strong> Background for homepage hero section<br>
                        <strong>Recommended:</strong> 1920x1080px, JPG format, should complement Saints green colors
                    </p>
                    
                    <form action="{{ route('admin.settings.upload-image') }}" method="POST" enctype="multipart/form-data" class="d-inline">
                        @csrf
                        <input type="hidden" name="type" value="hero-background">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="file" class="form-control" name="image" accept="image/*" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-upload me-2"></i>Upload Background
                        </button>
                        @if(file_exists(public_path('images/hero-background.jpg')))
                            <button type="button" class="btn btn-outline-danger ms-2" onclick="deleteImage('hero-background')">
                                <i class="bi bi-trash me-2"></i>Delete
                            </button>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Instructions Card -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="bi bi-info-circle me-2"></i>Image Guidelines
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="fw-bold">File Requirements:</h6>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-check-circle text-success me-2"></i>Maximum file size: 2MB</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>Supported formats: JPG, PNG, GIF</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>PNG recommended for logos (transparency)</li>
                                <li><i class="bi bi-check-circle text-success me-2"></i>JPG recommended for backgrounds (smaller size)</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6 class="fw-bold">Design Tips:</h6>
                            <ul class="list-unstyled">
                                <li><i class="bi bi-lightbulb text-warning me-2"></i>Use Saints green (#1B5E20) in your designs</li>
                                <li><i class="bi bi-lightbulb text-warning me-2"></i>Ensure logos work on both light and dark backgrounds</li>
                                <li><i class="bi bi-lightbulb text-warning me-2"></i>Hero backgrounds should not be too busy</li>
                                <li><i class="bi bi-lightbulb text-warning me-2"></i>Test images on mobile devices</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this image? This action cannot be undone.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form id="deleteForm" method="POST" action="{{ route('admin.settings.delete-image') }}" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="type" id="deleteType">
                    <button type="submit" class="btn btn-danger">Delete Image</button>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function deleteImage(type) {
    document.getElementById('deleteType').value = type;
    new bootstrap.Modal(document.getElementById('deleteModal')).show();
}
</script>
@endpush

@endsection
