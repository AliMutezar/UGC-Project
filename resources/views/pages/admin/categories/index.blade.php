@extends('layouts.dashboard')
@section('title')
    Manage Category
@endsection

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary align-self-center">{{ $table_title }}</h6>
                <a class="btn btn-primary btn-sm" href="/admin/categories/create" role="button" data-toggle="modal" data-target="#createCategory">
                    Create Category <i class="ml-2 fas fa-plus"></i>
                </a>
            </div>

            
            <!-- Create Category Modal -->
            <div class="modal fade" id="createCategory" tabindex="-1" aria-labelledby="editCategoryLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editCategoryLabel">Create Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form action="/admin/categories" method="POST">
                            @csrf

                            <div class="modal-body">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="category">Category Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" autofocus value="{{ old('name') }}">

                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="slug" class="form-label">Slug</label>
                                        <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" readonly value="{{ old('slug') }}">
                            
                                        @error('slug')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>
    
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="Submit" class="btn btn-primary">Create Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="card-body">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success</strong> {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="table-responsive table-hover table-borderless">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">No</th>
                                <th>Category</th>
                                <th>Slug</th>
                                <th class="text-center">Act</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Judul</th>
                                <th>Slug</th>
                                <th class="text-center">Act</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->slug }}</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu text-right animated--fade-in">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#editCategory{{ $category->id }}">Edit</a>

                                                <form action="/admin/categories/{{ $category->slug }}" method="POST">
                                                    @method('delete')
                                                    @csrf

                                                    <button class="dropdown-item text-danger" onclick="return confirm('Are you sure to delete this category, All posts in this category will be deleted ?')">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Edit Category Modal -->
                                <div class="modal fade" id="editCategory{{ $category->id }}" tabindex="-1" aria-labelledby="editCategoryLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editCategoryLabel">Edit Category</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <form action="/admin/categories/{{ $category->slug }}" method="POST">
                                                @method('put')
                                                @csrf

                                                <div class="modal-body">
                                                    <div class="form-row">
                                                        <div class="col-md-6">
                                                            <label for="category">Category Name</label>
                                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="nameEdit{{ $category->id }}" autofocus value="{{ old('name', $category->name) }}">

                                                            @error('name')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="slug" class="form-label">Slug</label>
                                                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slugEdit{{ $category->id }}" value="{{ old('slug', $category->slug) }}">
                                                
                                                            @error('slug')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                </div>
                        
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update Category</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script>
        // Sluggable Create
        const name = document.querySelector("#name");
        const slugCategory = document.querySelector("#slug");

        name.addEventListener("change", function() {
            let preslug = name.value;
            preslug = preslug.replace(/ /g,"-");
            slugCategory.value = preslug.toLowerCase();
        });
    </script>
@endsection