@extends('layouts.app')
@section('title')
    Home Indocargo
@endsection

@section('content')
    <!-- slider -->
    <div id="slider">
        <!-- revolution slider begin -->
        <div class="fullwidthbanner-container">
            <div id="revolution-slider">
                <ul>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                        <!--  BACKGROUND IMAGE -->
                        <img src="frontend/img-rev-slider/hero-3.PNG" alt="" style="filter:brightness(40%)">

                        <div class="tp-caption h-line lft"
                            data-x="20"
                            data-y="130"
                            data-speed="800"
                            data-start="1000"
                            data-easing="easeInOutCubic"
                            data-endspeed="300">
                        </div>

                        <div class="tp-caption sfr custom-font-1"
                            data-x="20"
                            data-y="180"
                            data-speed="800"
                            data-start="800"
                            data-easing="easeInOutCubic">
                            WE CARE
                        </div>

                        <div class="tp-caption sfr custom-font-1"
                            data-x="20"
                            data-y="235"
                            data-speed="800"
                            data-start="1000"
                            data-easing="easeInOutCubic">
                            WHAT WE DELIVERE
                        </div>

                        <div class="tp-caption sfb custom-font-2"
                            data-x="20"
                            data-y="345"
                            data-speed="800"
                            data-start="1400"
                            data-easing="easeInOutCubic">
                            We maintain good relations with our collaborators and stakeholders
                        </div>

                        <div class="tp-caption sfb text-left"
                            data-x="20"
                            data-y="415"
                            data-speed="800"
                            data-start="1600"
                            data-easing="easeInOutCubic">
                            <a class="btn btn-slider" href="https://wa.me/6281284596614?text=Hi...%20UGC%20Aku%20Mau%20Nanya%20Nih" target="_blank">Contact US</a>&nbsp;&nbsp;
                            {{-- <a class="btn btn-border-slider" href="#">Read More</a> --}}
                        </div>
                    </li>

                    <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                        <!--  BACKGROUND IMAGE -->
                        <img src="frontend/img-rev-slider/hero-2.PNG" alt="">

                        <div class="tp-caption h-line lft"
                            data-x="center"
                            data-y="170"
                            data-speed="800"
                            data-start="1000"
                            data-easing="easeInOutCubic"
                            data-endspeed="300">
                        </div>

                        <div class="tp-caption lft custom-font-1"
                            data-x="center"
                            data-y="220"
                            data-speed="800"
                            data-start="800"
                            data-easing="easeInOutCubic">
                            WE LOVE WHATA WE DO
                        </div>

                        <div class="tp-caption sfb custom-font-2"
                            data-x="center"
                            data-y="270"
                            data-speed="800"
                            data-start="1400"
                            data-easing="easeInOutCubic">
                           Our goals is to create a conducive business ecosystem
                        </div>

                        <div class="tp-caption sfb text-left"
                            data-x="center"
                            data-y="330"
                            data-speed="800"
                            data-start="1600"
                            data-easing="easeInOutCubic">
                            <a class="btn btn-slider" href="https://wa.me/6281284596614?text=Hi...%20UGC%20Aku%20Mau%20Nanya%20Nih" target="_blank">Contact US</a>&nbsp;&nbsp;
                            {{-- <a class="btn btn-border-slider" href="#">Read More</a> --}}
                        </div>
                    </li>

                    <li data-transition="fade" data-slotamount="7" data-masterspeed="2500" data-delay="5000">
                        <!--  BACKGROUND IMAGE -->
                        <img src="frontend/img-rev-slider/hero-1.jpeg" alt="">

                        <div class="tp-caption h-line lft"
                            data-x="center"
                            data-y="170"
                            data-speed="800"
                            data-start="1000"
                            data-easing="easeInOutCubic"
                            data-endspeed="300">
                        </div>

                        <div class="tp-caption lft custom-font-1"
                            data-x="center"
                            data-y="220"
                            data-speed="800"
                            data-start="800"
                            data-easing="easeInOutCubic">
                            UGC LOGISTIC
                        </div>

                        <div class="tp-caption sfb custom-font-2"
                            data-x="center"
                            data-y="270"
                            data-speed="800"
                            data-start="1400"
                            data-easing="easeInOutCubic">
                            WE care what WE deliver
                        </div>

                        <div class="tp-caption sfb text-left"
                            data-x="center"
                            data-y="330"
                            data-speed="800"
                            data-start="1600"
                            data-easing="easeInOutCubic">
                            <a class="btn btn-slider" href="https://wa.me/6281284596614?text=Hi...%20UGC%20Aku%20Mau%20Nanya%20Nih" target="_blank">Contact US</a>&nbsp;&nbsp;
                            {{-- <a class="btn btn-border-slider" href="#">Read More</a> --}}
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- revolution slider close -->
    </div>
    <!-- slider close -->

    <div class="clearfix"></div>

    <!-- content begin -->
    <div id="content" class="no-padding">
        <div class="box-container">
            <div id="bg-service-1" class="box-one-third light-text">
                <div class="inner wow" data-wow-delay="0s">
                    <h4 class="wow fadeIn" data-wow-delay=".2s">Air & Sea Freight Export, Import, and Domestics</h4>
                    <h6 class="wow fadeIn" data-wow-delay=".3s">We specialise in all types of commercial freight & cargo.</h6>
                    <div class="divider-single"></div>
                    {{-- <a href="service-details-1.html" class="btn-border-light wow fadeInUp" data-wow-delay=".4s" data-wow-duration=".3s">Read More</a> --}}
                </div>
            </div>



            <div id="bg-service-3" class="box-one-third light-text">
                <div class="inner">
                    <h4 class="wow fadeIn" data-wow-delay=".4s">Medical evacuation & spot charter cargo pax</h4>
                    <h6 class="wow fadeIn" data-wow-delay=".5s">Do you need help booking a jet/boeing or air bus? We can make your goals come true.</h6>
                    <div class="divider-single"></div>
                    {{-- <a href="service-details-3.html" class="btn-border-light wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".3s">Read More</a> --}}
                </div>
            </div>

            <div id="bg-service-2" class="box-one-third light-text">
                <div class="inner">
                    <h4 class="wow fadeIn" data-wow-delay=".6s">Industrial & government and social projects</h4>
                    <h6 class="wow fadeIn" data-wow-delay=".7s">Support for the project and give attention to social and environmental</h6>
                    <div class="divider-single"></div>
                    {{-- <a href="service-details-3.html" class="btn-border-light wow fadeInUp" data-wow-delay=".6s" data-wow-duration=".3s">Read More</a> --}}
                </div>
            </div>
        </div>



        <div class="clearfix"></div>

        <!-- section begin -->
        <section id="section-features">
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h2 class="wow fadeIn" data-wow-delay="0">Why Choose Us?
                    <span>Find reasons to choose us as your freight partner</span>
                        </h2>
                        <div class="small-border wow flipInY" data-wow-delay=".2s" data-wow-duration=".8s"></div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="feature-box">
                            <i class="icon-tools wow zoomIn" data-wow-delay="0s"></i>
                            <div class="text wow fadeIn" data-wow-delay=".2s">
                                <h3>Work Exprerience</h3>
                                <p>We rely on your experience about 27 years in the world of domestic and international cargo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="feature-box">
                            <i class="icon-bargraph wow zoomIn" data-wow-delay=".2s"></i>
                            <div class="text wow fadeIn" data-wow-delay=".4s">
                                <h3>We Love What We Do</h3>
                                <p>We carry out the process in detail to achieve maximum results for our customer satisfaction.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="feature-box">
                            <i class="icon-pricetags wow zoomIn" data-wow-delay=".4s"></i>
                            <div class="text wow fadeIn" data-wow-delay=".6s">
                                <h3>Circumspect</h3>
                                <p>With measurable consideration and accuracy and negotiable price.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="feature-box">
                            <i class="icon-refresh wow zoomIn" data-wow-delay=".6s"></i>
                            <div class="text wow fadeIn" data-wow-delay=".8s">
                                <h3>Safety Responsible and Timely</h3>
                                <p>According to the target and important and prioritizing speed and safety.</p>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                </div>
            </div>
        </section>
        <!-- section close -->
        
        <!-- section begin -->
        <section id="section-gallery">
            <div class="container">
                <div class="row">


                    <div class="col-md-12">
                        <div id="gallery" class="gallery full-gallery ex-gallery zoom-gallery">

                            <!-- gallery item -->
                            <div class="item">
                                <div class="picframe">
                                    <a href="frontend/img-rev-slider/gallery-1.jpg" data-source="frontend/img-rev-slider/gallery-1.jpg" title="Delivery Throughout Indonesia">
                                        <span class="overlay"></span>

                                        <span class="pf_text">
                                            <span class="project-name">Delivery Throughout Indonesia</span>
                                            <span class="small-border"></span>
                                        </span>

                                        <img src="frontend/img-rev-slider/gallery-1.jpg" class="img-custom" alt="" />
                                    </a>

                                </div>
                            </div>
                            <!-- close gallery item -->

                            <!-- gallery item -->
                            <div class="item">
                                <div class="picframe">
                                    <a href="frontend/img-rev-slider/gallery-2.jpg" data-source="frontend/img-rev-slider/gallery-2.jpg" title="Precise and Fast">
                                        <span class="overlay"></span>

                                        <span class="pf_text">
                                            <span class="project-name">Precise and Fast</span>
                                            <span class="small-border"></span>
                                        </span>

                                        <img src="frontend/img-rev-slider/gallery-2.jpg" class="img-custom" alt="" />
                                    </a>

                                </div>
                            </div>
                            <!-- close gallery item -->

                            <!-- gallery item -->
                            <div class="item">
                                <div class="picframe">
                                    <a href="frontend/img-rev-slider/gallery-3.jpg" data-source="frontend/img-rev-slider/gallery-3.jpg" title="Integrity and Commitment">
                                        <span class="overlay"></span>

                                        <span class="pf_text">
                                            <span class="project-name">Integrity and Commitment</span>
                                            <span class="small-border"></span>
                                        </span>

                                        <img src="frontend/img-rev-slider/gallery-3.jpg" class="img-custom" alt="" />
                                    </a>

                                </div>
                            </div>
                            <!-- close gallery item -->





                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        <section id="explore-1" class="side-bg light-text">
            <div class="col-md-6 col-md-offset-6 pull-right image-container">
                <div class="background-image"></div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="inner-padding">
                            <div id="testi-carousel" class="testi-slider wow fadeIn" data-wow-delay="0s" data-wow-duration="1s">
                                <div class="item">
                                    <blockquote>
                                        Multi-modal container units, designed as reusable carriers to facilitate unit load handling of the goods contained, are also referred to as cargo, specially by shipping lines and logistics operators.

                                    </blockquote>
                                    <span class="testi-by">Aline Drummond</span>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        Multi-modal container units, designed as reusable carriers to facilitate unit load handling of the goods contained, are also referred to as cargo, specially by shipping lines and logistics operators. 

                                    </blockquote>
                                    <span class="testi-by">Mortimer Elmo</span>
                                </div>
                                <div class="item">
                                    <blockquote>
                                        Multi-modal container units, designed as reusable carriers to facilitate unit load handling of the goods contained, are also referred to as cargo, specially by shipping lines and logistics operators. 

                                    </blockquote>

                                    <span class="testi-by">Marina Leopold</span>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </section>
        <!-- section close -->

        <!-- section begin -->
        {{-- <section id="section-partners">
            <div class="container">
                <div class="row">

                    <div class="logo-partners">
                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay=".2s" data-wow-duration=".6s" src="frontend/img/logo/1.jpg" alt="">
                        </div>

                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay=".5s" data-wow-duration=".5s" src="frontend/img/logo/2.jpg" alt="">
                        </div>

                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay=".8s" data-wow-duration=".5s" src="frontend/img/logo/3.jpg" alt="">
                        </div>

                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay="1.1s" data-wow-duration=".5s" src="frontend/img/logo/4.jpg" alt="">
                        </div>

                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay="1.4s" data-wow-duration=".5s" src="frontend/img/logo/5.jpg" alt="">
                        </div>

                        <div class="col-md-2 col-xs-4">
                            <img class="wow fadeInRight" data-wow-delay="1.7s" data-wow-duration=".5s" src="frontend/img/logo/6.jpg" alt="">
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </section> --}}
        <!-- section close -->

        <!-- section begin -->
        <section id="section-faq" class="light-text">

            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="0">FAQ
                    <span>Frequently Asked Questions</span>
                        </h2>
                        <div class="small-border wow flipInY" data-wow-delay=".2s" data-wow-duration=".8s"></div>
                    </div>

                    <div class="col-md-6 wow fadeInLeft" data-wow-delay=".5s" data-duration=".75s">

                        <ul class="accordion">

                            <li>
                                <a class="Active" style="font-size: 11px">Bagaimana cara melacak status pengiriman barang ?</a>
                                <div class="content">
                                    Detail status pengiriman dapat dicek melalui Tracking yang ada pada website, dengan memasukkan nomor resi. 
                                </div>
                            </li>

                            <li>
                                <a class="NoneActive" style="font-size: 11px">Berapa lama estimasi waktu pengiriman barang sampai pada tujuan ?</a>
                                <div class="content">
                                    Lama waktu pengiriman akan tergantung pada lokasi alamat pengiriman, dan tipe layanan yang digunakan. 
                                </div>
                            </li>

                            <li>
                                <a class="NoneActive" style="font-size: 11px">Bagaimana saya dapat mengetahui harga dari setiap pengiriman barang yang diinginkan?</a>
                                <div class="content">
                                    Untuk mendapatkan detail harga, dapat menghubungi contact marketing yang sudah tertera pada website. 
                                </div>
                            </li>

                            <li>
                                <a class="NoneActive" style="font-size: 11px">Transportasi darat, laut, udara pilih mana ?</a>
                                <div class="content">
                                    Ini tentu sesuai dengan kebutuhan Anda. Jika Anda ingin cepat pilih jasa transportasi udara namun tarif pengirimannya lebih mahal. Jika ingin lebih murah, Anda bisa pilih jasa transportasi kapal laut atau darat. Akan tetapi waktu pengirimannya lebih lama. 
                                </div>
                            </li>

                            
                        </ul>

                    </div>


                    <div class="col-md-6 wow fadeInRight" data-wow-delay=".5s" data-duration=".75s">
                        <ul class="accordion">

                            <li>
                                <a class="Active" style="font-size: 11px">Bisa Import dari China atau lainnya ke Indonesia, berapa ratesnya ?</a>
                                <div class="content">
                                    Untuk mengetahui rates dengan cepat, jangan lupa sertakan rincian berupa origin, destination, pengiriman jalur darat, laut, udara, MSDS, jenis produk, dan kuantitas product. 
                                </div>
                            </li>

                            <li>
                                <a class="NoneActive" style="font-size: 11px">Saya mau melakukan pengiriman, bisa tidak diambil ketempat saya?</a>
                                <div class="content">
                                    Sangat bisa sekali, karena itu salah satu service yang disediakan ugc logistics, yaitu Door To Door, memudahkan keperluan pengiriman anda. 
                                </div>
                            </li>

                            <li>
                                <a class="NoneActive" style="font-size: 11px">Pengemasan barang (packing) yang disediakan UGC ?</a>
                                <div class="content">
                                    Packing barang yang disediakan ugc logistics, yaitu : Packing Kayu, Packing Bubble Wrap, Packing Karung, Packing Kardus, Packing Plastik. 
                                </div>
                            </li>


                            {{-- <li>
                                <a class="NoneActive">How and where can we pick up the cargo at destination?</a>
                                <div class="content">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                </div>
                            </li> --}}
                        </ul>
                    </div>

                    <div class="divider-single"></div>

                    <div class="text-center">
                        {{-- <a href="https://wa.me/6281284596614?text=Hi...%20UGC%20Aku%20Mau%20Nanya%20Nih" target="_blank" class="btn-border-light wow fadeInUp" data-wow-delay="0">Have More Questions?</a> --}}

                        <a class="btn-border-light wow fadeInUp" href="https://wa.me/6281284596614?text=Hi...%20UGC%20Aku%20Mau%20Nanya%20Nih" target="_blank">Have More Questions ?</a>
                    </div>


                </div>
            </div>

            <div class="clearfix"></div>
        </section>
        <!-- section close -->

        <div class="call-to-action text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <h2>Contact us now to get quote for all your shipping needs.</h2>
                    </div>

                    <div class="col-md-3">
                        {{-- <a href="#" class="btn-border-light">Contact Us</a> --}}
                        <a class="btn-border-light " href="https://wa.me/6281284596614?text=Hi...%20UGC%20Aku%20Mau%20Nanya%20Nih" target="_blank">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection