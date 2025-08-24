@extends('admin.layouts.app')

@section('title', 'FAQ Management')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">FAQ Management</h1>
    <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary">
        <i class="fas fa-plus me-2"></i>Add New FAQ
    </a>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0">All FAQs</h5>
    </div>
    <div class="card-body">
        @if($faqs->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th width="50">#</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th width="100">Order</th>
                            <th width="100">Status</th>
                            <th width="150">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($faqs as $faq)
                        <tr>
                            <td>{{ $faq->id }}</td>
                            <td>
                                <strong>{{ Str::limit($faq->question, 80) }}</strong>
                            </td>
                            <td>
                                {{ Str::limit($faq->answer, 120) }}
                            </td>
                            <td>
                                <span class="badge bg-info">{{ $faq->order }}</span>
                            </td>
                            <td>
                                <span class="badge bg-{{ $faq->status === 'active' ? 'success' : 'secondary' }}">
                                    {{ ucfirst($faq->status) }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.faqs.show', $faq) }}" class="btn btn-outline-info" title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn btn-outline-warning" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this FAQ?')">
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
                {{ $faqs->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-question-circle fa-4x text-muted mb-3"></i>
                <h4 class="text-muted">No FAQs found</h4>
                <p class="text-muted">Get started by adding your first FAQ.</p>
                <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-plus me-2"></i>Add Your First FAQ
                </a>
            </div>
        @endif
    </div>
</div>
@endsection

