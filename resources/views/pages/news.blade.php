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
                                <input type="text" class="form-control" placeholder="Judul Berita ..." name="search"  value="{{ request('search') }}">
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
                                        <a href="/news/{{ $post->slug }}" target="_blank">
                                            <img src="{{ asset('storage/' . $post->image) }}" class="img-responsive rounded-sm"
                                                alt="{{ $post->category->name }}">
                                        </a>
                                    @else
                                        <a href="/news/{{ $post->slug }}" target="_blank">
                                            <img src="https://source.unsplash.com/400x200/?{{ $post->category->name }}" class="img-responsive rounded-sm" alt="{{ $post->category->name }}">
                                        </a>
                                    @endif

                                    <div class="desc">
                                        <a href="/news/{{ $post->slug }}" target="_blank">
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

                    {{-- <div class="widget latest_news">
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
                    </div> --}}

                    <!-- widget category -->
                    <!-- widget tags -->
                    {{-- <div class="widget widget_tags">
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
                    </div> --}}

                    <!-- widget text -->
                    <div class="widget widget-text">
                        <h3>Our Address</h3>

                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3966.1862484632456!2d106.843806657148!3d-6.239166374185659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d-6.2390975!2d106.84560549999999!4m5!1s0x2e69f3be5c26ec77%3A0x64c26418600922f!2sJl.%20Prof.%20DR.%20Soepomo%20No.45%2C%20RT.14%2FRW.6%2C%20Tebet%20Bar.%2C%20Kec.%20Tebet%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012870!3m2!1d-6.2392518!2d106.8455975!5e0!3m2!1sen!2sid!4v1671435661174!5m2!1sen!2sid"></iframe>
                        </div>


                        Jl. Prof Soepomo SH No.45 BZ Blok C,<br>
                        Tebet, Jakarta Selatan 12810<br>
                        Indonesia<br>
                        service@ugc.co.id<br>
                    </div>
                    <!-- widget text -->

                    <div class="widget widget-text">
                        <h3>About UGC</h3>
                        <p>UGC Logistics adalah Logistik & Transportasi layanan lengkap yang menawarkan pengiriman udara, angkutan laut, truk, LTL, dipercepat, antar moda, manajemen proyek, dan layanan khusus. Kami memiliki keahlian yang memungkinkan kami untuk mempersiapkan dan memproses dokumentasi dan melakukan kegiatan terkait yang berkaitan dengan pengiriman internasional. Dengan solusi transportasi termasuk <strong>Udara</strong> dan <strong>Laut</strong>, di seluruh Indonesia (termasuk <strong>Muatan Truk</strong> dan <strong>Kurang Dari Beban Truk</strong>), <strong> Layanan 3PL, Manajemen Gudang</strong> dan <strong> Intermodal </strong>, kami dapat menciptakan solusi logistik rantai pasokan unik yang memungkinkan Anda untuk fokus pada hal yang paling penting – tujuan inti Anda.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- content close -->
@endsection