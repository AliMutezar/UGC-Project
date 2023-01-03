@extends('layouts.dashboard')
@section('title')
    Manage News
@endsection

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary align-self-center">{{ $table_title }}</h6>
                <a class="btn btn-primary btn-sm" href="/admin/posts/create" role="button">
                    Create News <i class="ml-2 fas fa-plus"></i>
                </a>
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
                                <th>Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th class="text-center">Act</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="w-50">Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th class="text-center">Act</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="w-50">{{ $post->title }}</td>
                                    <td>{{ $post->category->name }}</td>
                                    <td>{{ $post->user->name }}</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu text-right animated--fade-in">
                                                <a class="dropdown-item text-info" href="/admin/posts/{{ $post->slug }}">Show</a>
                                                <a class="dropdown-item" href="/admin/posts/{{ $post->slug }}/edit">Edit</a>

                                                <form action="/admin/posts/{{ $post->slug }}" method="POST">
                                                    @method('delete')
                                                    @csrf

                                                    <button class="dropdown-item text-danger" onclick="return confirm('Are you sure to delete this news ?')">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection