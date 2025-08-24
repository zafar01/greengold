@extends('admin.layouts.app')

@section('title', 'Blog Management')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Blog Management</h1>
    <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i>Add New Blog Post
    </a>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">All Blog Posts</h5>
    </div>
    <div class="card-body">
        @if($blogs->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="50">#</th>
                            <th width="80">Image</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th width="100">Status</th>
                            <th width="120">Published</th>
                            <th width="150">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{ $blog->id }}</td>
                            <td>
                                @if($blog->featured_image)
                                    <img src="{{ url('storage/' . $blog->featured_image) }}" 
                                         alt="{{ $blog->title }}" 
                                         class="rounded" 
                                         style="width: 60px; height: 40px; object-fit: cover;">
                                @else
                                    <div class="bg-secondary rounded d-flex align-items-center justify-content-center" 
                                         style="width: 60px; height: 40px;">
                                        <i class="fas fa-image text-white"></i>
                                    </div>
                                @endif
                            </td>
                            <td>
                                <div>
                                    <strong>{{ Str::limit($blog->title, 60) }}</strong>
                                    @if($blog->excerpt)
                                        <br><small class="text-muted">{{ Str::limit($blog->excerpt, 80) }}</small>
                                    @endif
                                </div>
                            </td>
                            <td>
                                <span class="badge bg-info">{{ $blog->author->name }}</span>
                            </td>
                            <td>
                                <span class="badge bg-{{ 
                                    $blog->status === 'published' ? 'success' : 
                                    ($blog->status === 'draft' ? 'warning' : 'secondary') 
                                }}">
                                    {{ ucfirst($blog->status) }}
                                </span>
                            </td>
                            <td>
                                @if($blog->published_at)
                                    <small class="text-muted">{{ $blog->published_at->format('M j, Y') }}</small>
                                @else
                                    <small class="text-muted">Not published</small>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.blogs.show', $blog) }}" class="btn btn-outline-info" title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.blogs.edit', $blog) }}" class="btn btn-outline-warning" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.blogs.destroy', $blog) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this blog post?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger" title="Delete">
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
            
            <!-- Pagination -->
            <div class="d-flex justify-content-center mt-4">
                {{ $blogs->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-newspaper fa-4x text-muted mb-3"></i>
                <h4 class="text-muted">No blog posts found</h4>
                <p class="text-muted">Get started by writing your first blog post.</p>
                <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-plus me-2"></i>Write Your First Blog Post
                </a>
            </div>
        @endif
    </div>
</div>
@endsection

