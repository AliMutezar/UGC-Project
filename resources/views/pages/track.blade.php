@extends('layouts.app')
@section('title')
    Track
@endsection

@section('content')
    <!-- subheader begin -->
    <section id="subheader" class="page-track no-bottom" data-stellar-background-ratio="0.5">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Track
                        <span>Your Package Info</span>
                        </h1>
                        <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <div class="clearfix"></div>

    <!-- content begin -->
    <div id="content"  class="no-padding">
        <section id="section-tracking">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <form action="/track" class="mb-4" enctype ="multipart/form-data">
                            <div class="cta-form">
                                <input type="text" placeholder="Input Marking Number" name="search"  value="{{ request('search') }}">
                                <input type="submit" value="search">
                                <div class="clearfix"></div>
                            </div>
                        </form>

                        @if ($shipment_history->count())
                            <div class="wrapper-line padding40 rounded10" style="margin-top: 4rem;">
                                <ul class="timeline custom-tl">
                                    @foreach ($shipment_history as $shipment)
                                        <li class="timeline-inverted">
                                            <div class="timeline-date wow zoomIn" data-wow-delay=".2s">
                                                {{ date('d-m-Y', strtotime($shipment->updated_at))}}
                                                <span>{{ date('H:i:s', strtotime($shipment->updated_at)) }}</span>
                                            </div>
                                            <div class="timeline-badge">
                                                @if ($shipment->status == 'create')
                                                    <i class="fa fa-file-pdf-o"></i>
                                                @elseif ($shipment->status == 'loading')
                                                    <i class="fa fa-spinner"></i>
                                                @elseif ($shipment->status == 'process')
                                                    <i class="fa fa-truck-loading"></i>
                                                @else
                                                    <i class="fa fa-check"></i>
                                                @endif
                                            </div>
                                            <div class="timeline-panel wow fadeInRight" data-wow-delay=".6s">
                                                <div class="timeline-body">
                                            
                                                    {{ $shipment->note }} 
                                                    <span class="location">Status barang sekarang {{ $shipment->status }} 
                                                        @if ($shipment->image)
                                                            <a href="{{ asset('storage/' . $shipment->image) }}" class="popup-gmaps">Lihat gambar</a>
                                                        @elseif ($shipment->image_bukti_kirim)
                                                            <a href="{{ asset('storage/' . $shipment->image_bukti_kirim) }}" class="popup-gmaps">Lihat gambar</a>
                                                        @endif
                                                    </span>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @else
                            <p class="text-center" style="margin-top: 3rem;">Marking number is not found</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="light-text">
                
            </div>
        </section>


    </div>
    <!-- content close -->
@endsection