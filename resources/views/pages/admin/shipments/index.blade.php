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
                    <table class="table table-borderless table-hover text-nowrap" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">No</th>
                                <th style="width: 20%">Marking Number</th>
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
                                <th class="text-center">No</th>
                                <th style="width: 20%">Marking Number</th>
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
                        <tbody>
                            @foreach ($shipments as $shipment)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $shipment->marking_number }}</td>
                                    <td>{{ $shipment->service }}</td>
                                    <td>{{ $shipment->shipper }}</td>
                                    <td>{{ $shipment->consignee }}</td>
                                    <td>{{ $shipment->volume }}</td>
                                    <td>{{ $shipment->origin }}</td>
                                    <td>{{ $shipment->pickup_date }}</td>
                                    <td>{{ $shipment->delivery_date }}</td>
                                    <td>{{ $shipment->actual_delivered_date }}</td>
                                    <td>{{ $shipment->dimension }}</td>
                                    <td>{{ $shipment->weight }}</td>
                                    <td>{{ $shipment->destination }}</td>
                                    <td>{{ $shipment->status }}</td>
                                    <td>{{ $shipment->note }}</td>
                                    <td>{{ $shipment->updated_at }}</td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <button class="btn btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <div class="dropdown-menu text-right animated--fade-in">
                                                <a class="dropdown-item" href="/admin/shipments/{{ $shipment->marking_number }}/edit">Edit</a>

                                                <form action="/admin/shipments/{{ $shipment->marking_number }}" method="POST">
                                                    @method('delete')
                                                    @csrf

                                                    <button class="dropdown-item text-danger" onclick="return confirm('Are you sure to delete this shipment data ?')">Delete</button>
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