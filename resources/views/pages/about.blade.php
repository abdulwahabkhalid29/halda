
@extends('layout.scaffold')
@push('title')
About
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
                                        <h2 class="title">About us</h2>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">About us</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-md-6 d-none d-md-block">
                                    <div class="breadcrumb-img text-center text-lg-end">
                                        <img src="{{asset('assets/img/images/breadcrumb_img01.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="breadcrumb-shape shape-1 wow slideInLeft" data-wow-delay=".2s" data-wow-duration="2.5s"><img src="{{asset('assets/img/bg/breadcrumb_shape01.png')}}" alt=""></div>
                    <div class="breadcrumb-shape shape-2 wow slideInRight" data-wow-delay=".2s" data-wow-duration="2.5s"><img src="{{asset('assets/img/bg/breadcrumb_shape02.png')}}" alt=""></div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

            <!-- area-bg -->
            <div class="area-bg-two">

                <!-- just-gamer-area -->
                <section class="just-gamer-area pt-130 pb-105">
                    <div class="just-gamer-shape"></div>
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-6 col-lg-8 order-2 order-xl-0">
                                <div class="just-gamer-content-box">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="team-tab" data-bs-toggle="tab" data-bs-target="#team"
                                                role="tab" aria-controls="team" aria-selected="true">find team member</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="game-tab" data-bs-toggle="tab" data-bs-target="#game" role="tab"
                                                aria-controls="game" aria-selected="false">our game shop</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="team" role="tabpanel" aria-labelledby="team-tab">
                                            <div class="section-title">
                                                <h2 class="title">EXPERIENCE just for gamers <span>OFFER</span></h2>
                                                <p>Nullam quis ante. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius
                                                    nisi, condimentum viverra felis nunc et lorem. In auctor lobortis lacus. Phasellus
                                                    gravida semper nisi. Aliquam lobortis.</p>
                                            </div>
                                            <div class="gamer-content">
                                                <i class="far fa-arrow-alt-circle-right"></i>
                                                <p>Will sharpen your brain and focus</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="game" role="tabpanel" aria-labelledby="game-tab">
                                            <div class="section-title">
                                                <h2 class="title">EXPERIENCE just for gamers <span>OFFER</span></h2>
                                                <p>Nullam quis ante. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius
                                                    nisi, condimentum viverra felis nunc et lorem. In auctor lobortis lacus. Phasellus
                                                    gravida semper nisi. Aliquam lobortis.</p>
                                            </div>
                                            <div class="gamer-content">
                                                <i class="far fa-arrow-alt-circle-right"></i>
                                                <p>Will sharpen your brain and focus</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-8">
                                <div class="just-gamer-img position-relative text-center text-xxl-end">
                                    <img src="{{asset('assets/img/images/game_img01.png')}}" alt class="main-img">
                                    <img src="{{asset('assets/img/images/game_img02.png')}}" alt class="shape-1 wow fadeInRight"
                                        data-wow-delay=".3s">
                                    <img src="{{asset('assets/img/images/game_img03.png')}}" alt class="shape-2 wow fadeInRight"
                                        data-wow-delay=".6s">
                                    <img src="{{asset('assets/img/images/game_img04.png')}}" alt class="shape-3 wow fadeInLeft" data-wow-delay=".9s">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- just-gamer-area-end -->

                <!-- offer-area -->
                <section class="offer-area pb-70">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="section-title">
                                    <h2 class="title">EXPERIENCE just for <br> gamers <span>OFFER</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6">
                                <div class="offer-item mb-30">
                                    <h4 class="title">gamers offer</h4>
                                    <p>Exploring the universe gaming sloth</p>
                                    <h5 class="overlay-text">offer</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="offer-item mb-30">
                                    <h4 class="title">YOU’LL BE WATCHING</h4>
                                    <p>Exploring the universe gaming sloth</p>
                                    <h5 class="overlay-text">offer</h5>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="offer-item mb-30">
                                    <h4 class="title">FINISHED MATCHES</h4>
                                    <p>Exploring the universe gaming sloth</p>
                                    <h5 class="overlay-text">offer</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- offer-area-end -->

                <!-- counter-area -->
                <section class="counter-area pb-70">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="counter-item mb-50">
                                    <div class="counter-img">
                                        <img src="{{asset('assets/img/icon/counter_icon01.png')}}" alt="">
                                    </div>
                                    <div class="counter-content">
                                        <h2 class="count"><span class="odometer" data-count="39"></span>k+</h2>
                                        <p>active fan flowers</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="counter-item mb-50">
                                    <div class="counter-img">
                                        <img src="{{asset('assets/img/icon/counter_icon02.png')}}" alt="">
                                    </div>
                                    <div class="counter-content">
                                        <h2 class="count"><span class="odometer" data-count="280"></span>k+</h2>
                                        <p>Will sharpen your</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="counter-item mb-50">
                                    <div class="counter-img">
                                        <img src="{{asset('assets/img/icon/counter_icon03.png')}}" alt="">
                                    </div>
                                    <div class="counter-content">
                                        <h2 class="count">$<span class="odometer" data-count="40"></span>k+</h2>
                                        <p>your earnings</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- counter-area-end -->
            </div>
            <!-- area-bg-end -->

            <!-- about-area -->
            <section class="about-area about-bg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <div class="about-title text-center">
                                <h2 class="title">We Are A Crative Gaming Agency, Building Websites that Gaming Traffic, Engagement & Conversion For Game Leanding Brands</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="about-info-item">
                                <div class="about-info-icon">
                                    <img src="{{asset('assets/img/icon/gp_icon02.png')}}" alt="">
                                </div>
                                <div class="about-info-content">
                                    <h4 class="title">Discover</h4>
                                    <p>Nullam quis Macenas thats ullmcorper dui et placerat feugia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="about-info-item">
                                <div class="about-info-icon">
                                    <img src="{{asset('assets/img/icon/gp_icon01.png')}}" alt="">
                                </div>
                                <div class="about-info-content">
                                    <h4 class="title">Live Streaming</h4>
                                    <p>Nullam quis Macenas thats ullmcorper dui et placerat feugia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="about-info-item">
                                <div class="about-info-icon">
                                    <img src="{{asset('assets/img/icon/gp_icon05.png')}}" alt="">
                                </div>
                                <div class="about-info-content">
                                    <h4 class="title">Gaming Updates</h4>
                                    <p>Nullam quis Macenas thats ullmcorper dui et placerat feugia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-gallery-area">
                    <div class="container">
                        <div class="row about-gallery-active">
                            <div class="col-12">
                                <div class="about-gallery-item">
                                    <a href="{{asset('assets/img/images/about_gallery01.jpg')}}" class="popup-image"><img src="{{asset('assets/img/images/about_gallery01.jpg')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="about-gallery-item">
                                    <a href="{{asset('assets/img/images/about_gallery02.jpg')}}" class="popup-image"><img src="{{asset('assets/img/images/about_gallery02.jpg')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="about-gallery-item">
                                    <a href="{{asset('assets/img/images/about_gallery03.jpg')}}" class="popup-image"><img src="{{asset('assets/img/images/about_gallery03.jpg')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="about-gallery-item">
                                    <a href="{{asset('assets/img/images/about_gallery04.jpg')}}" class="popup-image"><img src="{{asset('assets/img/images/about_gallery04.jpg')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="about-gallery-item">
                                    <a href="{{asset('assets/img/images/about_gallery05.jpg')}}" class="popup-image"><img src="{{asset('assets/img/images/about_gallery05.jpg')}}" alt=""></a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="about-gallery-item">
                                    <a href="{{asset('assets/img/images/about_gallery06.jpg')}}" class="popup-image"><img src="{{asset('assets/img/images/about_gallery06.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

        </main>
        <!-- main-area-end -->


@endsection