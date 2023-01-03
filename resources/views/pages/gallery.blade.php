@extends('layouts.app')
@section('title')
    Gallery
@endsection

@section('content')
    <!-- subheader begin -->
    <section id="subheader" class="page-gallery no-bottom" data-stellar-background-ratio="0.5">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>Our Gallery
                    <span>Some Shots of Our Activity</span>
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
                <div class="col-md-12">
                    <div id="gallery" class="gallery full-gallery ex-gallery zoom-gallery">

                        <!-- gallery item -->
                        <div class="item illustration">
                            <div class="picframe">
                                <a href="frontend/img/gallery/pic-1.jpg">
                                    <span class="overlay"></span>

                                    <span class="pf_text">
                                        <span class="project-name">Gallery Sample</span>
                                        <span class="small-border"></span>
                                    </span>
                                    <img src="frontend/img/gallery/pic-1.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="item mobile website">
                            <div class="picframe">
                                <a href="frontend/img/gallery/pic-2.jpg">
                                    <span class="overlay"></span>

                                    <span class="pf_text">
                                        <span class="project-name">Gallery Sample</span>
                                        <span class="small-border"></span>
                                    </span>
                                    <img src="frontend/img/gallery/pic-2.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="item website mobile">
                            <div class="picframe">
                                <a href="frontend/img/gallery/pic-3.jpg">
                                    <span class="overlay"></span>

                                    <span class="pf_text">
                                        <span class="project-name">Gallery Sample</span>
                                        <span class="small-border"></span>
                                    </span>
                                    <img src="frontend/img/gallery/pic-3.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="item illustration photography">
                            <div class="picframe">
                                <a href="frontend/img/gallery/pic-4.jpg">
                                    <span class="overlay"></span>

                                    <span class="pf_text">
                                        <span class="project-name">Gallery Sample</span>
                                        <span class="small-border"></span>
                                    </span>
                                    <img src="frontend/img/gallery/pic-4.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="item website photography mobile">
                            <div class="picframe">
                                <a href="frontend/img/gallery/pic-5.jpg">
                                    <span class="overlay"></span>

                                    <span class="pf_text">
                                        <span class="project-name">Gallery Sample</span>
                                        <span class="small-border"></span>
                                    </span>
                                    <img src="frontend/img/gallery/pic-5.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="item illustration website">
                            <div class="picframe">
                                <a href="frontend/img/gallery/pic-6.jpg">
                                    <span class="overlay"></span>

                                    <span class="pf_text">
                                        <span class="project-name">Gallery Sample</span>
                                        <span class="small-border"></span>
                                    </span>
                                    <img src="frontend/img/gallery/pic-6.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="item illustration photography">
                            <div class="picframe">
                                <a href="frontend/img/gallery/pic-7.jpg">
                                    <span class="overlay"></span>

                                    <span class="pf_text">
                                        <span class="project-name">Gallery Sample</span>
                                        <span class="small-border"></span>
                                    </span>
                                    <img src="frontend/img/gallery/pic-7.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="item photography mobile">
                            <div class="picframe">
                                <a href="frontend/img/gallery/pic-8.jpg">
                                    <span class="overlay"></span>

                                    <span class="pf_text">
                                        <span class="project-name">Gallery Sample</span>
                                        <span class="small-border"></span>
                                    </span>
                                    <img src="frontend/img/gallery/pic-8.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- close gallery item -->

                        <!-- gallery item -->
                        <div class="item photography mobile">
                            <div class="picframe">
                                <a href="frontend/img/gallery/pic-9.jpg">
                                    <span class="overlay"></span>

                                    <span class="pf_text">
                                        <span class="project-name">Gallery Sample</span>
                                        <span class="small-border"></span>
                                    </span>
                                    <img src="frontend/img/gallery/pic-9.jpg" alt="" />
                                </a>
                            </div>
                        </div>
                        <!-- close gallery item -->



                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
    <!-- content close -->
@endsection