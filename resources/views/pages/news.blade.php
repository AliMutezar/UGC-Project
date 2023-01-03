@extends('layouts.app')
@section('title')
    News
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

    <!-- content begin -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <div class="text-center my-3">
                        @if ($title)
                            <p>{{ $title }}</p>
                        @else
                            <p></p>
                        @endif
                    </div>
                    
                    <div style="margin: 15px;">
                        <form action="/news">
                            @if (request('category'))
                                <input type="hidden" name="category" value="{{ request('category') }}" />
                            @endif

                            @if (request('user'))
                                <input type="hidden" name="user" value="{{ request('user') }}">
                            @endif

                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari berita ..." name="search"  value="{{ request('search') }}">
                                <span class="input-group-btn">
                                  <button class="btn" style="padding: 6px;" type="submit">Cari Berita</button>
                                </span>
                            </div>
                        </form>
                    </div>

                    @if ($posts->count())
                        <div id="newslist" class="news-list">
                            @foreach ($posts as $post)
                                <div class="col-md-6 news-item item">
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" class="img-responsive rounded-sm"
                                            alt="{{ $post->category->name }}">
                                    @else
                                        <img src="https://source.unsplash.com/400x200/?{{ $post->category->name }}" class="img-responsive rounded-sm" alt="{{ $post->category->name }}">
                                    @endif

                                    <div class="desc">
                                        <a href="/news/{{ $post->slug }}">
                                            <h3>{{ $post->title }}</h3>
                                        </a>
                                        <div class="post-details">{{ $post->created_at->diffForHumans() }}
                                            <span class="separator">|</span>By: <a href='/news?user={{ $post->user->name }}'>{{ $post->user->name }}</a>
                                            <span class="separator">|</span>Category: <a href="/news?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                                        
                                        </div>
                                        {{ $post->excerpt }}
                                        <br>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-center">Postingan tidak ditemukan</p>
                    @endif

                    <div class="clearfix"></div>

                    <div class="text-center ">
                        {{-- <ul class="pagination">
                            <li><a href="#">Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                        </ul> --}}

                        <ul class="pagination">

                            {{ $posts->links() }}
                        </ul>

                    </div>

                </div>



                <div id="sidebar" class="col-md-4">

                    <div class="widget latest_news">
                        <h3>Latest News</h3>
                        <ul class="bloglist-small">
                            <li>
                                <div class="date-box">
                                    <span class="day">02</span>
                                    <span class="month">FEB</span>
                                </div>
                                <div class="txt">
                                    <h5><a href="css/#">We Opening New Branch on Brooklyn</a></h5>
                                    <div>
                                        <div>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="date-box">
                                    <span class="day">05</span>
                                    <span class="month">FEB</span>
                                </div>
                                <div class="txt">
                                    <h5><a href="css/#">Estimate Cost For Your Shipment</a></h5>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                </div>
                            </li>
                            <li>
                                <div class="date-box">
                                    <span class="day">06</span>
                                    <span class="month">FEB</span>
                                </div>
                                <div class="txt">
                                    <h5><a href="css/#">Tracking Apps For Mobile Phone</a></h5>
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                </div>
                            </li>
                        </ul>
                    </div>

                    <!-- widget category -->
                    <!-- widget tags -->
                    <div class="widget widget_tags">
                        <h3><span>Tags</span></h3>
                        <ul>
                            <li><a href="#link">business</a></li>
                            <li><a href="#link">paralax</a></li>
                            <li><a href="#link">html 5</a></li>
                            <li><a href="#link">css 3</a></li>
                            <li><a href="#link">template</a></li>
                            <li><a href="#link">clean</a></li>
                            <li><a href="#link">flat</a></li>
                            <li><a href="#link">revolution slider</a></li>
                            <li><a href="#link">font awesome</a></li>
                            <li><a href="#link">carousel</a></li>
                            <li><a href="#link">modern</a></li>
                            <li><a href="#link">minimalist</a></li>
                        </ul>
                    </div>

                    <!-- widget text -->
                    <div class="widget widget-text">
                        <h3>Our Address</h3>

                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.id/maps?f=q&amp;source=s_q&amp;hl=en&amp;q=16+Riverside+Rd,+Singapore&amp;sll=-2.547988,118.037109&amp;sspn=29.394918,50.756836&amp;ie=UTF8&amp;geocode=Fb8IFgAdu40vBg&amp;split=0&amp;hq=&amp;hnear=16+Riverside+Rd,+Singapore&amp;ll=1.444031,103.779771&amp;spn=0.014522,0.024784&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=false"></iframe>
                        </div>


                        Somewhere Over Rainbow<br>
                        Green World Rainbow Green World<br>
                        T. 0908 1000 1000<br>
                        E. contact@exotheme.com<br>
                    </div>
                    <!-- widget text -->

                    <div class="widget widget-text">
                        <h3>About GoCargo</h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.

                    
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- content close -->
@endsection