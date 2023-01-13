@extends('layouts.app')
@section('title')
    About Us
@endsection

@section('content')
    <!-- subheader begin -->
    <section id="subheader" class="page-about no-bottom" data-stellar-background-ratio="0.5">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>About Us
                        <span>Fast International Cargo Services</span>
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
                <div class="col-md-6">
                    <img src="frontend/img/pic-1.jpg" class="img-responsive" alt="">
                    <div class="divider-single"></div>
                    <h2>Who We Are</h2>
                    <div class="tiny-border"></div>
                    <p>Ketika Anda mencari perusahaan logistik & pengiriman barang yang berdedikasi dan dapat dipercaya, lihat kami.. Didirikan pada tahun 1995, UGC Logistics adalah salah satu perusahaan pengiriman barang domestik & internasional terkemuka, relokasi dan perusahaan manajemen logistik proyek yang memberikan solusi hemat biaya dengan standar kelas dunia jasa.</p>

                    {{-- <p>UGC Logistics adalah Logistik & Transportasi layanan lengkap yang menawarkan pengiriman udara, angkutan laut, truk, LTL, dipercepat, antar moda, manajemen proyek, dan layanan khusus. Kami memiliki keahlian yang memungkinkan kami untuk mempersiapkan dan memproses dokumentasi dan melakukan kegiatan terkait yang berkaitan dengan pengiriman internasional. Dengan solusi transportasi termasuk <strong>Udara</strong> dan <strong>Laut</strong>, di seluruh Indonesia (termasuk <strong>Muatan Truk</strong> dan <strong>Kurang Dari Beban Truk</strong>), <strong> Layanan 3PL, Manajemen Gudang</strong> dan <strong> Intermodal </strong>, kami dapat menciptakan solusi logistik rantai pasokan unik yang memungkinkan Anda untuk fokus pada hal yang paling penting – tujuan inti Anda.</p>

                    <p>Melalui pendidikan berkelanjutan dari agen kami - baik layanan pelanggan dan pengangkutan - serta melalui mitra kami, UGC Logistics memastikan Anda akan ditangani oleh tim kami yang berpengalaman dan berdedikasi.</p>

                    <p>UGC Logistics adalah pemimpin yang terbukti di antara perusahaan pengiriman barang domestik dan internasional di pasar. Ini dicapai dengan mempelajari tujuan pasti pelanggan sehubungan dengan persyaratan internal dan eksternal mereka. Layanan kami disesuaikan dan disesuaikan berdasarkan kebutuhan. Ketika Anda siap untuk mempelajari lebih lanjut tentang solusi transportasi kami kapan saja.</p>

                    <p>Sebagai pemasok pilihan untuk berbagai perusahaan Fortune ratusan kami sangat bangga dengan reputasi kami dan selalu berusaha untuk mempertahankannya.</p> --}}

                </div>
                <div class="col-md-6">
                    <img src="frontend/img/pic-2.jpg" class="img-responsive" alt="">
                    <div class="divider-single"></div>
                    <h2>What We Do</h2>
                    <div class="tiny-border"></div>

                    <p>Multi-modal container units, designed as reusable carriers to facilitate unit load handling of the goods contained, are also referred to as cargo, specially by shipping lines and logistics operators. Similarly, aircraft ULD boxes are also documented as cargo, with associated packing list of the items contained within. When empty containers are shipped each unit is documented as a cargo and when goods are stored within, the contents are termed as containerised cargo.</p>
                </div>

                <div class="col-md-12">
                    <div class="divider-line"></div>

                    <div class="text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="0">Board of Directors</h2>
                        <div class="small-border wow flipInY" data-wow-delay=".2s" data-wow-duration=".8s"></div>
                    </div>

                    <div class="col-md-3">
                        <div class="team-profile">
                            <img class="img-responsive wow fadeInUp" data-wow-delay="0" data-wow-duration="1s" src="frontend/img/team/pic%20(1).jpg" alt="">
                            <div class="text wow fadeInUp" data-wow-delay=".2s">
                                <h3>Tom Walker</h3>
                                <h4>President Director</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                <div class="team-social-icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="team-profile">
                            <img class="img-responsive wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s" src="frontend/img/team/pic%20(2).jpg" alt="">
                            <div class="text wow fadeInUp" data-wow-delay=".4s">
                                <h3>Amanda Trust</h3>
                                <h4>Refining Director</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                <div class="team-social-icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="team-profile">
                            <img class="img-responsive wow fadeInUp" data-wow-delay=".4s" data-wow-duration="1s" src="frontend/img/team/pic%20(3).jpg" alt="">
                            <div class="text wow fadeInUp" data-wow-delay=".6s">
                                <h3>Emma Stone</h3>
                                <h4>Finance Director</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                <div class="team-social-icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="team-profile">
                            <img class="img-responsive wow fadeInUp" data-wow-delay=".6s" data-wow-duration="1s" src="frontend/img/team/pic%20(4).jpg" alt="">
                            <div class="text wow fadeInUp" data-wow-delay=".8s">
                                <h3>James Doe</h3>
                                <h4>Marketing Director</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                <div class="team-social-icons">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="divider-line"></div>
                </div>

                <div class="text-center">
                    <h2 class="wow fadeInUp" data-wow-delay="0">Why Choose Us</h2>
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
            </div>
        </div>
    </div>
    <!-- content close -->
@endsection