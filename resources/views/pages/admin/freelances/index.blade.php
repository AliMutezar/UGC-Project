@extends('layouts.dashboard')
@section('title')
    UGC Freelance
@endsection

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            {{-- <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary align-self-center">{{ $table_title }}</h6>
                <a class="btn btn-primary btn-sm" href="/admin/users/create" role="button">
                    Create User <i class="ml-2 fas fa-plus"></i>
                </a>
            </div> --}}

            <div class="card-body">

                {{-- @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success</strong> {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif --}}

                <div class="table-responsive">
                    <table class="table table-borderless table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>No. Telpon</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th class="text-center">No</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>No. Telpon</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($freelances as $freelance)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $freelance->name }}</td>
                                    <td>{{ $freelance->email }}</td>
                                    <td>{{ $freelance->tlpn }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection