@extends('layout.master')
@section('content')
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1><span>{{ config('app.name') }}</span></h1>
            <h2>We deal in all kind of PhotoCopier parts</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section>

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about my-5">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>About Us</h3>
                        <p>
                            {{config('app.name')}} is supplier of Small, Medium, Office and Commercial Segment photocopiers Parts and Service. The Company has established in the year of 2008.
                            <br><br>
                            Over 10 years successfull in the photocopier, We have Customers all over the Madhya Pardesh and other cities by delivering high quality products and also by providing best service to them.
                        </p>
                        {{-- <ul>
                            <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</li>
                            <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate
                                velit.</li>
                            </ul> --}}
                            <br><br>
                        <div class="row icon-boxes">
                            <div class="col-md-6">
                                <i class="bx bx-receipt"></i>
                                <h4>Photocopier & Lamination Part and Machines</h4>
                                {{-- <p>We deal in all type of photocopier parts and products and sale Lamination & spiral machines and their parts.</p> --}}
                            </div>
                            <div class="col-md-6 mt-4 mt-md-0">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Sales & Service</h4>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>We provide these Services with Best Quality.</p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-box">
                            <i class="bi bi-briefcase"></i>
                            <h4><a href="#">Photocopier Parts</a></h4>
                            {{-- <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate
                                non provident</p> --}}
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="bi bi-card-checklist"></i>
                            <h4><a href="#">Lamination and Spiral Machines</a></h4>
                            {{-- <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat tarad
                                limino ata</p> --}}
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="icon-box">
                            <i class="bi bi-bar-chart"></i>
                            <h4><a href="#">Printer Parts</a></h4>
                            {{-- <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur
                            </p> --}}
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="icon-box">
                            <i class="bi bi-binoculars"></i>
                            <h4><a href="#">Pouch & Roll</a></h4>
                            {{-- <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est
                                laborum</p> --}}
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="ewaste" class="ewaste my-5">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <h3>Manage E-Waste</h3>
                        <p>

                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="assets/img/ewaste.jpg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </section>

        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Any enquiry, get in touch!</p>
                </div>

                <div class="row mt-5 justify-content-center">

                    <div class="col-lg-10">

                        <div class="info-wrap">
                            <div class="row">
                                <div class="col-lg-4 info">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>Shop No 211, Murrai Mohalla<br>Grain House (2nd Floor)</p>
                                    <p>Chhawani, Indore</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>sushantgulgulia@gmail.com</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+91 96300-35421<br>+91 98066-39401</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-10">
                        <form action="{{ route('contact.post') }}" method="post" role="form" class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input autocomplete="off" type="text" name="name" class="form-control"
                                        id="name" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input autocomplete="off" type="email" class="form-control" name="email"
                                        id="email" placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input autocomplete="off" type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>

    </main>
@endsection
