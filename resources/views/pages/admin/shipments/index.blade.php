@extends('layouts.dashboard')
@section('title')
    Manage Shipment
@endsection

@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary align-self-center">{{ $table_title }}</h6>
                <a class="btn btn-primary btn-sm" href="/admin/shipments/create" role="button">
                    Create Shipment <i class="ml-2 fas fa-plus"></i>
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

                <div class="table-responsive">
                    <table class="table table-borderless table-hover text-nowrap" id="tableShipment" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th>id</th>
                                <th>Marking Number</th>
                                {{-- <th>Email</th>
                                <th>CC Email</th> --}}
                                <th>Service</th>
                                <th>Shipper</th>
                                <th>Consignee</th>
                                <th>Volume</th>
                                <th>Origin</th>
                                <th>Pickup Date</th>
                                <th>Delivery Date</th>
                                <th>Actual Date</th>
                                <th>Dimension</th>
                                <th>Weight</th>
                                <th>Destination</th>
                                <th>Status</th>
                                <th>Note</th>
                                <th>Updated at</th>
                                <th>Act</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>id</th>
                                <th>Marking Number</th>
                                {{-- <th>Email</th>
                                <th>CC Email</th> --}}
                                <th>Service</th>
                                <th>Shipper</th>
                                <th>Consignee</th>
                                <th>Volume</th>
                                <th>Origin</th>
                                <th>Pickup Date</th>
                                <th>Delivery Date</th>
                                <th>Actual Date</th>
                                <th>Dimension</th>
                                <th>Weight</th>
                                <th>Destination</th>
                                <th>Status</th>
                                <th>Note</th>
                                <th>Updated at</th>
                                <th>Act</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection