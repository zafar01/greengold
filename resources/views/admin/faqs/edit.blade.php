@extends('admin.layouts.app')

@section('title', 'Edit FAQ')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-0">Edit FAQ</h1>
    <a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left me-2"></i>Back to FAQs
    </a>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Edit FAQ Information</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.faqs.update', $faq) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="question" class="form-label">Question <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('question') is-invalid @enderror" id="question" name="question" rows="3" placeholder="Enter the FAQ question..." required>{{ old('question', $faq->question) }}</textarea>
                        @error('question')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="answer" class="form-label">Answer <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('answer') is-invalid @enderror" id="answer" name="answer" rows="6" placeholder="Enter the detailed answer..." required>{{ old('answer', $faq->answer) }}</textarea>
                        @error('answer')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="order" class="form-label">Display Order</label>
                            <input type="number" class="form-control @error('order') is-invalid @enderror" id="order" name="order" value="{{ old('order', $faq->order) }}" min="0">
                            @error('order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Lower numbers appear first</div>
                        </div>
                        
                        <div class="col-md-6 mb-3">
                            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                            <select class="form-select @error('status') is-invalid @enderror" id="status" name="status" required>
                                <option value="">Select Status</option>
                                <option value="active" {{ old('status', $faq->status) == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ old('status', $faq->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save me-2"></i>Update FAQ
                        </button>
                        <a href="{{ route('admin.faqs.index') }}" class="btn btn-secondary">
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
                <h6 class="mb-0">FAQ Preview</h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <strong class="text-primary">Q:</strong>
                    <p class="mb-2">{{ $faq->question }}</p>
                </div>
                <div>
                    <strong class="text-success">A:</strong>
                    <p class="mb-2">{{ Str::limit($faq->answer, 200) }}</p>
                </div>
                <hr>
                <div class="d-flex justify-content-between">
                    <small class="text-muted">Order: {{ $faq->order }}</small>
                    <span class="badge bg-{{ $faq->status === 'active' ? 'success' : 'secondary' }}">
                        {{ ucfirst($faq->status) }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

