<!-- header begin -->
<header>
    <div class="container">
        <span id="menu-btn"></span>
        <div class="row">
            <div class="col-md-3">

                <!-- logo begin -->
                <div id="logo">
                    <div class="inner">
                        <a href="index.html">
                            <img src="img/logo.png" alt="" class="logo-1">
                            <img src="img/logo-2.png" alt="" class="logo-2">
                        </a>

                    </div>
                </div>
                <!-- logo close -->

            </div>

            <div class="col-md-9">

                <!-- mainmenu begin -->
                <nav id="mainmenu-container">
                    <ul id="mainmenu">
                        <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                        <li><a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">Freelance</a></li>

                        @auth
                            <li><a href="/dashboard">Dashboard</a></li>
                        @endauth
                        
                        <li><a href="/services" class="{{ Request::is('services') ? 'active' : '' }}">Services</a>
                            <ul>
                                <li><a href="/services">All Services</a></li>
                            </ul>
                        </li>
                        <li><a href="/about" class="{{ Request::is('about') ? 'active' : '' }}">About Us</a></li>
                        <li><a href="/track" class="{{ Request::is('track') ? 'active' : '' }}">Track</a></li>
                        <li><a href="/news" class="{{ Request::is('news') ? 'active' : '' }}">News</a></li>
                        <li><a href="/gallery" class="{{ Request::is('gallery') ? 'active' : '' }}">Gallery</a></li>
                    </ul>
                </nav>
                <!-- mainmenu close -->

                <!-- social icons -->
                {{-- <div class="social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-rss"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-envelope-o"></i></a>
                </div> --}}
                <!-- social icons close -->

            </div>
        </div>
    </div>
</header>
<!-- header close -->