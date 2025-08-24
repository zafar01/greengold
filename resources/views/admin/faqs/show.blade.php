@extends('admin.layouts.app')

@section('title', 'View FAQ')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">FAQ Details</h1>
    <div class="d-flex gap-2">
        <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn btn-warning">
            <i class="fas fa-edit me-2"></i>Edit FAQ
        </a>
        <a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-2"></i>Back to FAQs
        </a>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">FAQ Information</h5>
            </div>
            <div class="card-body">
                <div class="mb-4">
                    <h6 class="text-primary mb-2">
                        <i class="fas fa-question-circle me-2"></i>Question
                    </h6>
                    <p class="lead">{{ $faq->question }}</p>
                </div>
                
                <div class="mb-4">
                    <h6 class="text-success mb-2">
                        <i class="fas fa-comment-dots me-2"></i>Answer
                    </h6>
                    <div class="bg-light p-3 rounded">
                        {!! nl2br(e($faq->answer)) !!}
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Display Order</label>
                            <p class="mb-0">
                                <span class="badge bg-info fs-6">{{ $faq->order }}</span>
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Status</label>
                            <p class="mb-0">
                                <span class="badge bg-{{ $faq->status === 'active' ? 'success' : 'secondary' }} fs-6">
                                    {{ ucfirst($faq->status) }}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Created At</label>
                            <p class="mb-0 text-muted">{{ $faq->created_at->format('F j, Y \a\t g:i A') }}</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Last Updated</label>
                            <p class="mb-0 text-muted">{{ $faq->updated_at->format('F j, Y \a\t g:i A') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Quick Actions</h6>
            </div>
            <div class="card-body">
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn btn-warning">
                        <i class="fas fa-edit me-2"></i>Edit This FAQ
                    </a>
                    
                    <form action="{{ route('admin.faqs.destroy', $faq) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this FAQ? This action cannot be undone.')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger w-100">
                            <i class="fas fa-trash me-2"></i>Delete FAQ
                        </button>
                    </form>
                    
                    <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus me-2"></i>Add New FAQ
                    </a>
                    
                    <a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary">
                        <i class="fas fa-list me-2"></i>View All FAQs
                    </a>
                </div>
            </div>
        </div>
        
        <div class="card mt-3">
            <div class="card-header">
                <h6 class="mb-0">FAQ Preview</h6>
            </div>
            <div class="card-body">
                <div class="accordion" id="faqPreview">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="heading{{ $faq->id }}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $faq->id }}">
                                {{ Str::limit($faq->question, 60) }}
                            </button>
                        </h2>
                        <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse show" data-bs-parent="#faqPreview">
                            <div class="accordion-body">
                                {{ Str::limit($faq->answer, 150) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

