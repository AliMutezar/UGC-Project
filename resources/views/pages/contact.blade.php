@extends('layouts.app')
@section('title')
    Contact
@endsection

@section('content')
    <!-- subheader begin -->
    <section id="subheader" class="page-contact no-bottom" data-stellar-background-ratio="0.5">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <h1>Contact Us
                    <span>Get In Touch With Us</span>
                        </h1>
                        <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->



    <!-- content begin -->
    <div id="content">
        <div class="container">
            <div class="row no-gutter">
                <div style="position: relative; overflow: hidden;" class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3966.1862484632456!2d106.843806657148!3d-6.239166374185659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e0!4m3!3m2!1d-6.2390975!2d106.84560549999999!4m5!1s0x2e69f3be5c26ec77%3A0x64c26418600922f!2sJl.%20Prof.%20DR.%20Soepomo%20No.45%2C%20RT.14%2FRW.6%2C%20Tebet%20Bar.%2C%20Kec.%20Tebet%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012870!3m2!1d-6.2392518!2d106.8455975!5e0!3m2!1sen!2sid!4v1671435661174!5m2!1sen!2sid" width="600" height="464" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-md-6">
                    <div id="contact-form-wrapper">
                        <div class="contact_form_holder">
                            <form id="contact" class="row" name="form1" method="post" action="">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your name" />

                                <div id="error_email" class="error">Please check your email</div>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Your email" />

                                <div id="error_message" class="error">Please check your message</div>
                                <textarea cols="10" rows="10" name="message" id="message" class="form-control" placeholder="Your message"></textarea>

                                <div id="mail_success" class="success">Thank you. Your message has been sent.</div>
                                <div id="mail_failed" class="error">Error, email not sent</div>

                                <p id="btnsubmit">
                                    <input type="submit" id="send" value="Send" class="btn btn-custom" />
                                </p>



                            </form>
                        </div>
                    </div>
                </div>


            </div>

            <div class="divider-line"></div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="wow fadeInUp" data-wow-delay=".5s" data-wow-duration=".8s">Our Branch
                    </h2>
                    <div class="small-border wow flipInY" data-wow-delay=".8s" data-wow-duration=".8s"></div>
                </div>

                <div class="col-md-3">
                    <h3>United States</h3>
                    Somewhere Over Rainbow<br>
                    Green World Rainbow Green World<br>
                    T. 0908 1000 1000<br>
                    E. contact@exotheme.com<br>

                    <div class="divider-single"></div>

                    <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="btn-border popup-gmaps">View Location</a>
                </div>

                <div class="col-md-3">
                    <h3>Germany</h3>
                    Somewhere Over Rainbow<br>
                    Green World Rainbow Green World<br>
                    T. 0908 1000 1000<br>
                    E. contact@exotheme.com<br>

                    <div class="divider-single"></div>

                    <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="btn-border popup-gmaps">View Location</a>
                </div>

                <div class="col-md-3">
                    <h3>Singapore</h3>
                    Somewhere Over Rainbow<br>
                    Green World Rainbow Green World<br>
                    T. 0908 1000 1000<br>
                    E. contact@exotheme.com<br>

                    <div class="divider-single"></div>

                    <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="btn-border popup-gmaps">View Location</a>
                </div>

                <div class="col-md-3">
                    <h3>Indonesia</h3>
                    Somewhere Over Rainbow<br>
                    Green World Rainbow Green World<br>
                    T. 0908 1000 1000<br>
                    E. contact@exotheme.com<br>

                    <div class="divider-single"></div>

                    <a href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom" class="btn-border popup-gmaps">View Location</a>
                </div>


            </div>


        </div>
    </div>
    <!-- content close -->
@endsection