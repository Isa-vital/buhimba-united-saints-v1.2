@extends('layouts.admin')

@section('title', 'Edit News Article')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit News Article</h1>
        <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Back to News
        </a>
    </div>

    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Article: {{ $news->title }}</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" 
                                   id="title" name="title" value="{{ old('title', $news->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select class="form-select @error('category') is-invalid @enderror" 
                                    id="category" name="category">
                                <option value="">Select Category</option>
                                <option value="Match Reports" {{ old('category', $news->category) == 'Match Reports' ? 'selected' : '' }}>Match Reports</option>
                                <option value="Transfer News" {{ old('category', $news->category) == 'Transfer News' ? 'selected' : '' }}>Transfer News</option>
                                <option value="Club News" {{ old('category', $news->category) == 'Club News' ? 'selected' : '' }}>Club News</option>
                                <option value="Community" {{ old('category', $news->category) == 'Community' ? 'selected' : '' }}>Community</option>
                                <option value="Youth" {{ old('category', $news->category) == 'Youth' ? 'selected' : '' }}>Youth</option>
                                <option value="Women's Team" {{ old('category', $news->category) == "Women's Team" ? 'selected' : '' }}>Women's Team</option>
                            </select>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="excerpt" class="form-label">Excerpt</label>
                    <textarea class="form-control @error('excerpt') is-invalid @enderror" 
                              id="excerpt" name="excerpt" rows="3" 
                              placeholder="Brief summary of the article...">{{ old('excerpt', $news->excerpt) }}</textarea>
                    @error('excerpt')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                    <textarea class="form-control @error('content') is-invalid @enderror" 
                              id="content" name="content" rows="10" required>{{ old('content', $news->content) }}</textarea>
                    @error('content')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="featured_image" class="form-label">Featured Image</label>
                            @if($news->featured_image)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $news->featured_image) }}" 
                                         alt="Current featured image" class="img-thumbnail" style="max-height: 150px;">
                                    <div class="form-text">Current featured image</div>
                                </div>
                            @endif
                            <input type="file" class="form-control @error('featured_image') is-invalid @enderror" 
                                   id="featured_image" name="featured_image" accept="image/*">
                            @error('featured_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Upload a new image to replace current one (JPEG, PNG, JPG - Max 2MB)</div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="published_at" class="form-label">Publish Date & Time</label>
                            <input type="datetime-local" class="form-control @error('published_at') is-invalid @enderror" 
                                   id="published_at" name="published_at" 
                                   value="{{ old('published_at', $news->published_at ? $news->published_at->format('Y-m-d\TH:i') : '') }}">
                            @error('published_at')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Leave empty to publish immediately</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_published" id="is_published" 
                                       value="1" {{ old('is_published', $news->is_published) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_published">
                                    Publish Article
                                </label>
                            </div>
                            <div class="form-text">Uncheck to save as draft</div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_featured" id="is_featured" 
                                       value="1" {{ old('is_featured', $news->is_featured) ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_featured">
                                    Featured Article
                                </label>
                            </div>
                            <div class="form-text">Featured articles appear prominently on the homepage</div>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="tags" class="form-label">Tags</label>
                            <input type="text" class="form-control @error('tags') is-invalid @enderror" 
                                   id="tags" name="tags" value="{{ old('tags', $news->tags) }}" 
                                   placeholder="tag1,tag2,tag3">
                            @error('tags')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Separate tags with commas</div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Article Statistics</label>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-text">
                                        <strong>Views:</strong> {{ number_format($news->views) }}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-text">
                                        <strong>Created:</strong> {{ $news->created_at->format('M d, Y H:i') }}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-text">
                                        <strong>Last Updated:</strong> {{ $news->updated_at->format('M d, Y H:i') }}
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-text">
                                        <strong>Slug:</strong> {{ $news->slug }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <div>
                        <a href="{{ route('admin.news.index') }}" class="btn btn-secondary me-2">Cancel</a>
                        <a href="{{ route('news.show', $news->slug) }}" class="btn btn-outline-primary me-2" target="_blank">
                            <i class="fas fa-eye me-2"></i>Preview Article
                        </a>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save me-2"></i>Update Article
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto-generate slug from title
    const titleInput = document.getElementById('title');
    const slugDisplay = document.querySelector('.form-text strong:contains("Slug:")');
    
    if (titleInput && slugDisplay) {
        titleInput.addEventListener('input', function() {
            const slug = this.value
                .toLowerCase()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-')
                .replace(/-+/g, '-')
                .trim('-');
            
            if (slug) {
                slugDisplay.nextSibling.textContent = slug;
            }
        });
    }
});
</script>
@endsection
