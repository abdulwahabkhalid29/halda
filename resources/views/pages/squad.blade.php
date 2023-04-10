@extends('layout.scaffold')
@push('title')
Squad
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
                                        <h2 class="title">our squad</h2>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">our squad</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-md-6 d-none d-md-block">
                                    <div class="breadcrumb-img text-center text-lg-end">
                                        <img src="{{asset('assets/img/images/breadcrumb_img02.png')}}" alt="">
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

            <!-- squad-area -->
            <section class="our-squad-area black-bg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                            <div class="squad-item">
                                <div class="squad-thumb">
                                    <a href="tournament.html"><img src="{{asset('assets/img/squad/squad_img01.jpg')}}" alt=""></a>
                                </div>
                                <div class="squad-content">
                                    <div class="squad-info">
                                        <h4 class="title"><a href="tournament.html">aries zodiac</a></h4>
                                        <span>mission con</span>
                                    </div>
                                    <div class="squad-social">
                                        <div class="social-list">
                                            <a href="#"><i class="fab fa-twitter-square"></i></a>
                                            <a href="#"><i class="fab fa-vimeo"></i></a>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                            <a href="#"><i class="fab fa-twitch"></i></a>
                                        </div>
                                        <span class="follow-us">follow us</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                            <div class="squad-item">
                                <div class="squad-thumb">
                                    <a href="tournament.html"><img src="{{asset('assets/img/squad/squad_img02.jpg')}}" alt=""></a>
                                </div>
                                <div class="squad-content">
                                    <div class="squad-info">
                                        <h4 class="title"><a href="tournament.html">wolf ninja</a></h4>
                                        <span>team</span>
                                    </div>
                                    <div class="squad-social">
                                        <div class="social-list">
                                            <a href="#"><i class="fab fa-twitter-square"></i></a>
                                            <a href="#"><i class="fab fa-vimeo"></i></a>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                            <a href="#"><i class="fab fa-twitch"></i></a>
                                        </div>
                                        <span class="follow-us">follow us</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                            <div class="squad-item">
                                <div class="squad-thumb">
                                    <a href="tournament.html"><img src="{{asset('assets/img/squad/squad_img03.jpg')}}" alt=""></a>
                                </div>
                                <div class="squad-content">
                                    <div class="squad-info">
                                        <h4 class="title"><a href="tournament.html">ignite zodiac</a></h4>
                                        <span>mission con</span>
                                    </div>
                                    <div class="squad-social">
                                        <div class="social-list">
                                            <a href="#"><i class="fab fa-twitter-square"></i></a>
                                            <a href="#"><i class="fab fa-vimeo"></i></a>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                            <a href="#"><i class="fab fa-twitch"></i></a>
                                        </div>
                                        <span class="follow-us">follow us</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                            <div class="squad-item">
                                <div class="squad-thumb">
                                    <a href="tournament.html"><img src="{{asset('assets/img/squad/squad_img04.jpg')}}" alt=""></a>
                                </div>
                                <div class="squad-content">
                                    <div class="squad-info">
                                        <h4 class="title"><a href="tournament.html">hunter x</a></h4>
                                        <span>weapon</span>
                                    </div>
                                    <div class="squad-social">
                                        <div class="social-list">
                                            <a href="#"><i class="fab fa-twitter-square"></i></a>
                                            <a href="#"><i class="fab fa-vimeo"></i></a>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                            <a href="#"><i class="fab fa-twitch"></i></a>
                                        </div>
                                        <span class="follow-us">follow us</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                            <div class="squad-item">
                                <div class="squad-thumb">
                                    <a href="tournament.html"><img src="{{asset('assets/img/squad/squad_img05.jpg')}}" alt=""></a>
                                </div>
                                <div class="squad-content">
                                    <div class="squad-info">
                                        <h4 class="title"><a href="tournament.html">aries zodiac</a></h4>
                                        <span>weapon</span>
                                    </div>
                                    <div class="squad-social">
                                        <div class="social-list">
                                            <a href="#"><i class="fab fa-twitter-square"></i></a>
                                            <a href="#"><i class="fab fa-vimeo"></i></a>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                            <a href="#"><i class="fab fa-twitch"></i></a>
                                        </div>
                                        <span class="follow-us">follow us</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                            <div class="squad-item">
                                <div class="squad-thumb">
                                    <a href="tournament.html"><img src="{{asset('assets/img/squad/squad_img06.jpg')}}" alt=""></a>
                                </div>
                                <div class="squad-content">
                                    <div class="squad-info">
                                        <h4 class="title"><a href="tournament.html">warzone</a></h4>
                                        <span>mission</span>
                                    </div>
                                    <div class="squad-social">
                                        <div class="social-list">
                                            <a href="#"><i class="fab fa-twitter-square"></i></a>
                                            <a href="#"><i class="fab fa-vimeo"></i></a>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                            <a href="#"><i class="fab fa-twitch"></i></a>
                                        </div>
                                        <span class="follow-us">follow us</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                            <div class="squad-item">
                                <div class="squad-thumb">
                                    <a href="tournament.html"><img src="{{asset('assets/img/squad/squad_img07.jpg')}}" alt=""></a>
                                </div>
                                <div class="squad-content">
                                    <div class="squad-info">
                                        <h4 class="title"><a href="tournament.html">aries zodiac</a></h4>
                                        <span>mission</span>
                                    </div>
                                    <div class="squad-social">
                                        <div class="social-list">
                                            <a href="#"><i class="fab fa-twitter-square"></i></a>
                                            <a href="#"><i class="fab fa-vimeo"></i></a>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                            <a href="#"><i class="fab fa-twitch"></i></a>
                                        </div>
                                        <span class="follow-us">follow us</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-9">
                            <div class="squad-item">
                                <div class="squad-thumb">
                                    <a href="tournament.html"><img src="{{asset('assets/img/squad/squad_img08.jpg')}}" alt=""></a>
                                </div>
                                <div class="squad-content">
                                    <div class="squad-info">
                                        <h4 class="title"><a href="tournament.html">madfux ninja</a></h4>
                                        <span>mission</span>
                                    </div>
                                    <div class="squad-social">
                                        <div class="social-list">
                                            <a href="#"><i class="fab fa-twitter-square"></i></a>
                                            <a href="#"><i class="fab fa-vimeo"></i></a>
                                            <a href="#"><i class="fab fa-pinterest"></i></a>
                                            <a href="#"><i class="fab fa-twitch"></i></a>
                                        </div>
                                        <span class="follow-us">follow us</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="load-more-squad text-center">
                                <a href="our-squad.html" class="btn">load more squad</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- squad-area-end -->

        </main>
        <!-- main-area-end -->

@endsection