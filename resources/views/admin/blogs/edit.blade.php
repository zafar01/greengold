@extends('admin.layouts.app')

@section('title', 'Edit Blog Post')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Edit Blog Post</h1>
    <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-2"></i>Back to Blog Posts
    </a>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Edit Blog Post Information</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.blogs.update', $blog) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                               id="title" name="title" value="{{ old('title', $blog->title) }}" 
                               placeholder="Enter blog post title..." required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="excerpt" class="form-label">Excerpt</label>
                        <textarea class="form-control @error('excerpt') is-invalid @enderror" 
                                  id="excerpt" name="excerpt" rows="3" 
                                  placeholder="Enter a brief excerpt (optional)...">{{ old('excerpt', $blog->excerpt) }}</textarea>
                        @error('excerpt')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">A short summary of your blog post (max 500 characters)</div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="content" class="form-label">Content <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('content') is-invalid @enderror" 
                                  id="content" name="content" rows="12" 
                                  placeholder="Write your blog post content here..." required>{{ old('content', $blog->content) }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="featured_image" class="form-label">Featured Image</label>
                            <input type="file" class="form-control @error('featured_image') is-invalid @enderror" 
                                   id="featured_image" name="featured_image" accept="image/*">
                            @error('featured_image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Recommended size: 1200x630px, Max: 2MB</div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                            <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                                <option value="">Select Status</option>
                                <option value="draft" {{ old('status', $blog->status) == 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="published" {{ old('status', $blog->status) == 'published' ? 'selected' : '' }}>Published</option>
                                <option value="archived" {{ old('status', $blog->status) == 'archived' ? 'selected' : '' }}>Archived</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="published_at" class="form-label">Publish Date</label>
                            <input type="datetime-local" class="form-control @error('published_at') is-invalid @enderror" 
                                   id="published_at" name="published_at" 
                                   value="{{ old('published_at', $blog->published_at ? $blog->published_at->format('Y-m-d\TH:i') : '') }}">
                            @error('published_at')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Leave empty to publish immediately</div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="tags" class="form-label">Tags</label>
                            <input type="text" class="form-control @error('tags') is-invalid @enderror" 
                                   id="tags" name="tags" 
                                   value="{{ old('tags', $blog->tags ? implode(', ', $blog->tags) : '') }}" 
                                   placeholder="tag1, tag2, tag3">
                            @error('tags')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Separate tags with commas</div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="meta_title" class="form-label">SEO Meta Title</label>
                        <input type="text" class="form-control @error('meta_title') is-invalid @enderror" 
                               id="meta_title" name="meta_title" 
                               value="{{ old('meta_title', $blog->meta_title) }}" 
                               placeholder="SEO optimized title (max 60 characters)">
                        @error('meta_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Leave empty to use the main title</div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="meta_description" class="form-label">SEO Meta Description</label>
                        <textarea class="form-control @error('meta_description') is-invalid @enderror" 
                                  id="meta_description" name="meta_description" rows="3" 
                                  placeholder="SEO description (max 160 characters)">{{ old('meta_description', $blog->meta_description) }}</textarea>
                        @error('meta_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Leave empty to use the excerpt</div>
                    </div>
                    
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Update Blog Post
                        </button>
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">
                            Cancel
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Current Image</h6>
            </div>
            <div class="card-body">
                @if($blog->featured_image)
                    <img src="{{ url('storage/' . $blog->featured_image) }}" 
                         alt="{{ $blog->title }}" 
                         class="img-fluid rounded mb-2">
                    <small class="text-muted d-block">Current featured image</small>
                @else
                    <div class="text-center py-3">
                        <i class="fas fa-image fa-3x text-muted mb-2"></i>
                        <p class="text-muted mb-0">No featured image</p>
                    </div>
                @endif
            </div>
        </div>
        
        <div class="card mt-3">
            <div class="card-header">
                <h6 class="mb-0">Blog Preview</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong class="text-primary">Title:</strong>
                    <p class="mb-2">{{ $blog->title }}</p>
                </div>
                <div class="mb-3">
                    <strong class="text-success">Excerpt:</strong>
                    <p class="mb-2">{{ Str::limit($blog->excerpt ?: $blog->content, 150) }}</p>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <small class="text-muted">Status: 
                        <span class="badge bg-{{ 
                            $blog->status === 'published' ? 'success' : 
                            ($blog->status === 'draft' ? 'warning' : 'secondary') 
                        }}">
                            {{ ucfirst($blog->status) }}
                        </span>
                    </small>
                    <small class="text-muted">Author: {{ $blog->author->name }}</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

