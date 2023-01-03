@extends('layouts.dashboard')
@section('title')
    Create News
@endsection

@section('content')

    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/posts">News</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create News</li>
            </ol>
        </nav>

        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Create News</h6>
                </div>
                <div class="card-body">
                    {{-- karena pake route resource, form method post ini akan otomatis mengarah ke method store di DashboardPostController --}}
                    <form method="POST" action="/admin/posts" class="mb-5" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus value="{{ old('title') }}" required>
                    
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly value="{{ old('slug') }}" required>
                    
                                @error('slug')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
            
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select class="custom-select" name="category_id">
                                    @foreach ($categories as $category)
                                        @if (old('category_id') == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-md-6 my-custom-file">
                                <input class="custom-file-input @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                                <label for="formFile" class="custom-file-label">Upload Image</label>
                                
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row my-3">
                            <div class="col-md-6">
                                <img class="img-fluid rounded img-preview" alt="preview-uploaded-image">
                            </div>
                        </div>

            
                        <div class="form-row mt-3">
                            <div class="col-md-12">
                                <label for="body" class="form-label">News Content</label>
                                <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                                <trix-editor input="body"></trix-editor>
                                @error('body')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary mt-4">
                            <i class="fas fa-save mr-2"></i> Create News
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection