@extends('layouts.dashboard')   
@section('title')
    Update Shipment
@endsection

@section('content')

    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/shipments">Shipments</a></li>
            <li class="breadcrumb-item active" aria-current="page">Update Shipment</li>
            </ol>
        </nav>

        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Update Shipment</h6>
                </div>
                <div class="card-body">
                    {{-- karena pake route resource, form method post ini akan otomatis mengarah ke method store di DashboardPostController --}}
                    <form method="POST" action="/admin/shipments/{{ $shipment->marking_number }}" class="mb-5" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="marking_number" class="form-label">Marking Number</label>
                                <input type="text" class="form-control @error('marking_number') is-invalid @enderror" id="marking_number" name="marking_number" autofocus value="{{ old('marking_number', $shipment->marking_number) }}">
                    
                                @error('marking_number')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="service" class="form-label">Service</label>
                                <input type="text" class="form-control @error('service') is-invalid @enderror" id="service" name="service" value="{{ old('service', $shipment->service) }}">
                    
                                @error('service')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="shipper" class="form-label">Shipper</label>
                                <input type="text" class="form-control @error('shipper') is-invalid @enderror" id="shipper" name="shipper" autofocus value="{{ old('shipper', $shipment->shipper) }}">
                    
                                @error('shipper')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="consignee" class="form-label">Consignee</label>
                                <input type="text" class="form-control @error('consignee') is-invalid @enderror" id="consignee" name="consignee" value="{{ old('consignee', $shipment->consignee) }}">
                    
                                @error('consignee')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="volume" class="form-label">Volume</label>
                                <input type="text" class="form-control @error('volume') is-invalid @enderror" id="volume" name="volume" autofocus value="{{ old('volume', $shipment->volume) }}">
                    
                                @error('volume')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="origin" class="form-label">Origin</label>
                                <input type="text" class="form-control @error('origin') is-invalid @enderror" id="origin" name="origin" value="{{ old('origin', $shipment->origin) }}">
                    
                                @error('origin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="pickup_date" class="form-label">Pickup Date</label>
                                <div class="input-group date" id="pickupdatetime" data-target-input="nearest">
                                    <input type="datetime-local" class="form-control @error('pickup_date') is-invalid @enderror" name="pickup_date" value="{{ old('pickup_date', $shipment->pickup_date) }}"/>

                                    @error('pickup_date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="delivery_date" class="form-label">Delivery Date</label>
                                <div class="input-group date" id="deliverydatetime" data-target-input="nearest">
                                    <input type="datetime-local" class="form-control @error('delivery_date') is-invalid @enderror" name="delivery_date" value="{{ old('delivery_date', $shipment->delivery_date) }}"/>

                                    @error('delivery_date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="actual_delivered_date" class="form-label">Actual Date</label>
                                <div class="input-group date" id="actualdatetime" data-target-input="nearest">
                                    <input type="datetime-local" class="form-control @error('actual_delivered_date') is-invalid @enderror" name="actual_delivered_date" value="{{ old('actual_delivered_date', $shipment->actual_delivered_date) }}"/>

                                    @error('actual_delivered_date')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="dimension" class="form-label">Dimension</label>
                                <input type="text" class="form-control @error('dimension') is-invalid @enderror" id="dimension" name="dimension" value="{{ old('dimension', $shipment->dimension) }}">
                    
                                @error('dimension')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="weight" class="form-label">Weight</label>
                                <input type="text" class="form-control @error('weight') is-invalid @enderror" id="weight" name="weight" value="{{ old('weight', $shipment->weight) }}">
                    
                                @error('weight')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="destination" class="form-label">Destination</label>
                                <input type="text" class="form-control @error('destination') is-invalid @enderror" id="destination" name="destination" autofocus value="{{ old('destination', $shipment->destination, $shipment->status) }}">
                    
                                @error('destination')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
            
                        <div class="form-row justify-content-between">
                            <div class="col-md-5 my-custom-file">
                                <input class="custom-file-input @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                                <label for="formFile" class="custom-file-label">Upload Image</label>
                                <input type="hidden" name="oldImage" value="{{ $shipment->image }}">
                                
                                @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row my-3">
                            @if ($shipment->image)
                                <div class="col-md-6">
                                    <img src="{{ asset('storage/' . $shipment->image) }}" class="img-fluid rounded img-preview" alt="preview-uploaded-image">
                                </div>
                            @else
                                <div class="col-md-6">
                                    <p class="text-center">No Picture</p>
                                </div>
                            @endif
                        </div>

                        <div class="form-row my-3">
                            <div class="col-md-6 mb-3">
                                <label for="status" class="form-label">Shipment Status</label>
                                <select class="custom-select @error('status') is-invalid @enderror" name="status">
                                    <option value="0">Choose status</option>
                                    <option value="create" {{ old('status', $shipment->status) == 'create' ? 'selected' : '' }}>Create</option>
                                    <option value="loading" {{ old('status', $shipment->status) == 'loading' ? 'selected' : '' }}>Loading</option>
                                    <option value="process" {{ old('status', $shipment->status) == 'process' ? 'selected' : '' }}>Process</option>
                                    <option value="success_delivered" {{ old('status', $shipment->status) == 'success_delivered' ? 'selected' : '' }}>Success Delivered</option>
                                </select>

                                @error('status')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="note" class="form-label">Note for Shipment</label>
                                <input type="text" class="form-control @error('note') is-invalid @enderror" id="note" name="note" autofocus value="{{ old('note', $shipment->note) }}">
                    
                                @error('note')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary mt-4">
                            <i class="fas fa-save mr-2"></i> Update Shipment
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection