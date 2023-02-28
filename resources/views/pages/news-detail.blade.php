@extends('layouts.app')
@section('title')
    News Detail
@endsection

@section('content')
    <!-- subheader begin -->
    <section id="subheader" class="page-news no-bottom" data-stellar-background-ratio="0.5">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>News
                        <span>Stay Update With Us</span>
                        </h1>
                        <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->
    
    <div class="clearfix"></div>

    <div class="container">
        <div class="row my-5 d-flex justify-content-center">
            <div class="col-md-8 col-xs-12">
                <div class="media">
                    <img src="https://ui-avatars.com/api/?name={{ $post->user->name }}" class="mr-3 img-fluid profile-img rounded-circle" alt="...">
                    <div class="media-body">
                        <h5 class="mt-0 d-inline">{{ $post->user->name }}</h5>
                        <p>{{ $post->created_at->diffForHumans() }} <span class="separator">|</span> Category : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p>
                    </div>
                </div>
    
    
                <h3 class="my-3 title">{{ $post->title }}</h3>
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-responsive"
                        alt="{{ $post->category->name }}">
                @else
                    <img src="https://source.unsplash.com/900x400/?{{ $post->category->name }}" class="img-fluid rounded my-4" alt="{{ $post->category->name }}">
                @endif

                
                <!-- Begin Post -->
                <div class="article-post text-justify">
                    <p>
                        {!! $post->body !!}
                    </p>
                </div>
                <!-- End Post -->

                {{-- <div>
                    <ul class="tags">
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Growth Mindset</a></li>
                        <li><a href="#">Productivity</a></li>
                        <li><a href="#">Personal Growth</a></li>
                    </ul>
                </div> --}}
            </div>
        </div>


        <!-- Begin Related Post -->
        {{-- <div class="row">
            <div class="col-md-4 my-5">
                <div class="card border-0">
                    <a href="#anotherpost">
                        <img src="https://source.unsplash.com/350x150/?{{ $post->category->name }}" class="img-fluid rounded" alt="nama gambar">
                    </a>
    
                    <div class="card-body">
                        <h5 class="card-title card-title font-weight-bold">Pesanan antar makanan cepat</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
    
                        <div class="media mt-4">
                            <img src="frontend/img/avatar.jpg" class="mr-3 img-fluid rounded-circle profile-img" alt="...">
                            <div class="media-body">
                                <p class="d-inline">Ahmad Ali Mutezar</p>
                                <p>22 Agustus 2022</p>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
    
            <div class="col-md-4 my-5">
                <div class="card border-0">
                    <a href="#anotherpost">
                        <img src="https://source.unsplash.com/350x150/?{{ $post->category->name }}" class="img-fluid rounded" alt="nama gambar">
                    </a>
    
                    <div class="card-body">
                        <h5 class="card-title card-title font-weight-bold">Pesanan antar makanan cepat</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
    
                        <div class="media mt-4">
                            <img src="frontend/img/avatar.jpg" class="mr-3 img-fluid rounded-circle profile-img" alt="...">
                            <div class="media-body">
                                <p class="d-inline">Ahmad Ali Mutezar</p>
                                <p>22 Agustus 2022</p>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
    
            <div class="col-md-4 my-5">
                <div class="card border-0">
                    <a href="#anotherpost">
                        <img src="https://source.unsplash.com/350x150/?{{ $post->category->name }}" class="img-fluid rounded" alt="nama gambar">
                    </a>
    
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Pesanan antar makanan cepat</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    
    
                        <div class="media mt-4">
                            <img src="frontend/img/avatar.jpg" class="mr-3 img-fluid rounded-circle profile-img" alt="...">
                            <div class="media-body">
                                <p class="d-inline">Ahmad Ali Mutezar</p>
                                <p>22 Agustus 2022</p>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- End Related Post -->
    </div>
@endsection

@prepend('prepend-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ url('frontend/css/news.css') }}">
@endprepend