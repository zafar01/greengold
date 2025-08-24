@extends('admin.layouts.app')

@section('title', 'View Blog Post')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Blog Post Details</h1>
    <div class="d-flex gap-2">
        <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning">
            <i class="fas fa-edit me-2"></i>Edit Blog Post
        </a>
        <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Back to Blog Posts
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Blog Post Information</h5>
            </div>
            <div class="card-body">
                <div class="mb-4">
                    <h6 class="text-primary mb-2">
                        <i class="fas fa-heading me-2"></i>Title
                    </h6>
                    <h3 class="mb-0">{{ $blog->title }}</h3>
                </div>
                
                @if($blog->excerpt)
                <div class="mb-4">
                    <h6 class="text-success mb-2">
                        <i class="fas fa-quote-left me-2"></i>Excerpt
                    </h6>
                    <p class="lead">{{ $blog->excerpt }}</p>
                </div>
                @endif
                
                <div class="mb-4">
                    <h6 class="text-info mb-2">
                        <i class="fas fa-file-text me-2"></i>Content
                    </h6>
                    <div class="bg-light p-3 rounded">
                        {!! nl2br(e($blog->content)) !!}
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Status</label>
                            <p class="mb-0">
                                <span class="badge bg-{{ 
                                    $blog->status === 'published' ? 'success' : 
                                    ($blog->status === 'draft' ? 'warning' : 'secondary') 
                                }} fs-6">
                                    {{ ucfirst($blog->status) }}
                                </span>
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Author</label>
                            <p class="mb-0">
                                <span class="badge bg-info fs-6">{{ $blog->author->name }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Published At</label>
                            <p class="mb-0 text-muted">
                                @if($blog->published_at)
                                    {{ $blog->published_at->format('F j, Y \a\t g:i A') }}
                                @else
                                    Not published yet
                                @endif
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Slug</label>
                            <p class="mb-0 text-muted">{{ $blog->slug }}</p>
                        </div>
                    </div>
                </div>
                
                @if($blog->tags)
                <div class="mb-3">
                    <label class="form-label fw-bold">Tags</label>
                    <div class="mb-0">
                        @foreach($blog->tags as $tag)
                            <span class="badge bg-secondary me-1">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
                @endif
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Created At</label>
                            <p class="mb-0 text-muted">{{ $blog->created_at->format('F j, Y \a\t g:i A') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Last Updated</label>
                            <p class="mb-0 text-muted">{{ $blog->updated_at->format('F j, Y \a\t g:i A') }}</p>
                        </div>
                    </div>
                </div>
                
                @if($blog->meta_title || $blog->meta_description)
                <div class="mb-4">
                    <h6 class="text-warning mb-2">
                        <i class="fas fa-search me-2"></i>SEO Information
                    </h6>
                    @if($blog->meta_title)
                    <div class="mb-2">
                        <strong>Meta Title:</strong>
                        <p class="mb-0 text-muted">{{ $blog->meta_title }}</p>
                    </div>
                    @endif
                    @if($blog->meta_description)
                    <div>
                        <strong>Meta Description:</strong>
                        <p class="mb-0 text-muted">{{ $blog->meta_description }}</p>
                    </div>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Featured Image</h6>
            </div>
            <div class="card-body">
                @if($blog->featured_image)
                    <img src="{{ url('storage/' . $blog->featured_image) }}" 
                         alt="{{ $blog->title }}" 
                         class="img-fluid rounded mb-2">
                    <small class="text-muted d-block">Featured image for this blog post</small>
                @else
                    <div class="text-center py-4">
                        <i class="fas fa-image fa-3x text-muted mb-2"></i>
                        <p class="text-muted mb-0">No featured image</p>
                    </div>
                @endif
            </div>
        </div>
        
        <div class="card mt-3">
            <div class="card-header">
                <h6 class="mb-0">Quick Actions</h6>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-warning">
                        <i class="fas fa-edit me-2"></i>Edit This Blog Post
                    </a>
                    
                    <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this blog post? This action cannot be undone.')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="fas fa-trash me-2"></i>Delete Blog Post
                        </button>
                    </form>
                    
                    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Add New Blog Post
                    </a>
                    
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-secondary">
                        <i class="fas fa-list me-2"></i>View All Blog Posts
                    </a>
                </div>
            </div>
        </div>
        
        <div class="card mt-3">
            <div class="card-header">
                <h6 class="mb-0">Blog Preview</h6>
            </div>
            <div class="card-body">
                <div class="card border-0 shadow-sm">
                    @if($blog->featured_image)
                        <img src="{{ url('storage/' . $blog->featured_image) }}" 
                             class="card-img-top" alt="{{ $blog->title }}">
                    @endif
                    <div class="card-body">
                        <h6 class="card-title">{{ Str::limit($blog->title, 50) }}</h6>
                        <p class="card-text small text-muted">
                            {{ Str::limit($blog->excerpt ?: $blog->content, 100) }}
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">{{ $blog->author->name }}</small>
                            <span class="badge bg-{{ 
                                $blog->status === 'published' ? 'success' : 
                                ($blog->status === 'draft' ? 'warning' : 'secondary') 
                            }}">
                                {{ ucfirst($blog->status) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

