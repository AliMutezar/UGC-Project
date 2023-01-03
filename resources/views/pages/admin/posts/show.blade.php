@extends('layouts.dashboard')
@section('title')
    Detail Post
@endsection

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin/posts">News</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
            </ol>
        </nav>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="row mt-5 d-flex justify-content-center">
                    <div class="col-md-10 col-xs-12">
                        <div class="media">
                            <img src="{{ url('frontend/img/avatar.jpg') }}" class="mr-3 img-profile rounded-circle" alt="profile-image">
                            <div class="media-body">
                                <p class="mt-0 d-inline">Ahmad Ali Mutezar</p>
                                <p>22 July 2022 <span class="separator">|</span> Category : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> </p>
                            </div>
                        </div>
            
            
                        <h3 class="my-3 title">{{ $post->title }}</h3>
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid img-news rounded my-4"
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
        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection