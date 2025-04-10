@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4">{{ isset($content) ? 'Edit' : 'Create' }} Content</h1>

    <div class="card shadow-sm">
        <div class="card-body">
            <form method="POST" 
                  action="{{ isset($content) ? route('admin.contents.update', $content->id) : route('admin.contents.store') }}">
                @csrf
                @if(isset($content))
                    @method('PUT')
                @endif

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="section" class="form-label">Section</label>
                        <input type="text" class="form-control @error('section') is-invalid @enderror" 
                               id="section" name="section" 
                               value="{{ old('section', $content->section ?? '') }}" required>
                        @error('section')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="content_key" class="form-label">Content Key</label>
                        <input type="text" class="form-control @error('content_key') is-invalid @enderror" 
                               id="content_key" name="content_key" 
                               value="{{ old('content_key', $content->content_key ?? '') }}" required>
                        @error('content_key')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="mb-3">
                    <label for="content_text" class="form-label">Content Text</label>
                    <textarea class="form-control @error('content_text') is-invalid @enderror" 
                              id="content_text" name="content_text" rows="5" required>{{ old('content_text', $content->content_text ?? '') }}</textarea>
                    @error('content_text')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('admin.contents.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Back
                    </a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
