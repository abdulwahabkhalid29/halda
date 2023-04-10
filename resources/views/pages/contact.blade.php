@extends('layout.scaffold')
@push('title')
Contact
@endpush
@section('content')
        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div class="loader">
                    <div class="loader-outter"></div>
                    <div class="loader-inner"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
     
        <!-- header-area-end -->


        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg">
                <div class="breadcrumb-overflow">
                    <div class="container">
                        <div class="breadcrumb-inner">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="breadcrumb-content">
                                        <h2 class="title">CONTACT US</h2>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">CONTACT US</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-md-6 d-none d-md-block">
                                    <div class="breadcrumb-img text-center text-lg-end">
                                        <img src="assets/img/images/breadcrumb_img03.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="breadcrumb-shape shape-1 wow slideInLeft" data-wow-delay=".2s" data-wow-duration="2.5s"><img src="assets/img/bg/breadcrumb_shape01.png" alt=""></div>
                    <div class="breadcrumb-shape shape-2 wow slideInRight" data-wow-delay=".2s" data-wow-duration="2.5s"><img src="assets/img/bg/breadcrumb_shape02.png" alt=""></div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- contact-area -->
            <section class="contact-area black-bg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="contact-wrap">
                                <div class="contact-title">
                                    <h2 class="title"><span>Contact Us</span> Let's Talk Question.</h2>
                                    <p>Lorem Ipsum is simply dummy text of the prig and typesetting industry. Lorem Ipsum has been text of the prig and typesetting industry.</p>
                                </div>
                                    <form action="{{route('contact.store')}}" methode="POST" class="contact-form">
                                        @csrf
                                        <div class="form-grp">
                                            <label for="name">Your Name <span>*</span></label>
                                            <input type="text" name="name" id="name" placeholder="Jon Deo..." value="{{ old('name') }}">
                                           <small class="text-danger">@error ('name') {{$message}}@enderror</small>
                                        </div>
                                        <div class="form-grp">
                                            <label for="email">Your email <span>*</span></label>
                                            <input type="email" name="email" id="email" placeholder="info@example.com" value="{{ old('email') }}">
                                            <small class="text-danger">@error ('email') {{$message}}@enderror</small>
                                        </div>
                                        <div class="form-grp">
                                            <label for="message">Your Message <span>*</span></label>
                                            <textarea name="message" name="message" id="message" placeholder="Opinion..." value="{{ old('message') }}"></textarea>
                                            <small class="text-danger">@error ('message') {{$message}}@enderror</small>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Don’t show your email address
                                            </label>
                                        </div>
                                        
                                        <button type="submit" class="btn submit">submit now</button>
                                    </form>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-8">
                            <div class="contact-info-wrap">
                                <div class="contact-info-map">
                                    <img src="assets/img/images/contact_info_map.png" alt="">
                                </div>
                                <div class="contact-info-list">
                                    <ul>
                                        <li>
                                            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                                            <div class="content">
                                                <p>W84 New Park Lan, New York, NY 4586 <br> United States</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fas fa-phone-alt"></i></div>
                                            <div class="content">
                                                <p>+9 (256) 254 9568</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon"><i class="fas fa-envelope-open"></i></div>
                                            <div class="content">
                                                <p>Contact@ info.com</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="contact-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

            <!-- newsletter-area -->
            <section class="newsletter-area black-bg pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="newsletter-wrap">
                                <div class="newsletter-content">
                                    <div class="newsletter-icon">
                                        <img src="assets/img/icon/newsletter_icon.png" alt="">
                                    </div>
                                    <div class="newsletter-title">
                                        <h2 class="title">SUBSCRIBE TO OUR NEWSLETTER</h2>
                                    </div>
                                </div>
                                <div class="newsletter-form">
                                    <form action="#">
                                        <input type="email" placeholder="Your Email Address">
                                        <button class="btn"><i class="fas fa-plus"></i>add to cart</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- newsletter-area-end -->

            <!-- contact-map -->
            <div id="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96811.54759587669!2d-74.01263924803828!3d40.6880494567041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25bae694479a3%3A0xb9949385da52e69e!2sBarclays%20Center!5e0!3m2!1sen!2sbd!4v1636195194646!5m2!1sen!2sbd" allowfullscreen loading="lazy"></iframe>
            </div>
            <!-- contact-map-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <!-- footer-area-end -->






		<!-- JS here -->
@endsection