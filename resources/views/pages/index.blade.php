@extends('layout.scaffold')
@push('title')
Index
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

            <!-- banner-area -->
            <div id="parallax" class="banner-area banner-bg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xxl-8 col-lg-9">
                            <div class="banner-content text-center">
                                <h4 class="small-title">the Season 8</h4>
                                <h2 class="title layer" data-depth="-0.2">steam</h2>
                                <div class="banner-btn">
                                    <a href="match-single.html" class="btn">watch live<i class="fas fa-play-circle"></i></a>
                                    <a href="contact.html" class="text-btn">dream making</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- banner-area-end -->

            <!-- area-bg -->
            <div class="area-bg">

                <!-- just-gamer-area -->
                <section class="just-gamer-area pt-120 pb-100">
                    <div class="just-gamer-shape"></div>
                    <div class="container">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-xl-6 col-lg-8 order-2 order-xl-0">
                                <div class="just-gamer-content-box">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="team-tab" data-bs-toggle="tab" data-bs-target="#team"  role="tab" aria-controls="team" aria-selected="true">find team member</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="game-tab" data-bs-toggle="tab" data-bs-target="#game"  role="tab" aria-controls="game" aria-selected="false">our game shop</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="team" role="tabpanel" aria-labelledby="team-tab">
                                            <div class="section-title">
                                                <h2 class="title">EXPERIENCE just for gamers <span>OFFER</span></h2>
                                                <p>Nullam quis ante. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. In auctor lobortis lacus. Phasellus gravida semper nisi. Aliquam lobortis.</p>
                                            </div>
                                            <div class="gamer-content">
                                                <i class="far fa-arrow-alt-circle-right"></i>
                                                <p>Will sharpen your brain and focus</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="game" role="tabpanel" aria-labelledby="game-tab">
                                            <div class="section-title">
                                                <h2 class="title">EXPERIENCE just for gamers <span>OFFER</span></h2>
                                                <p>Nullam quis ante. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. In auctor lobortis lacus. Phasellus gravida semper nisi. Aliquam lobortis.</p>
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
                                    <img src="{{asset('assets/img/images/game_img02.png')}}" alt class="shape-1 wow fadeInRight" data-wow-delay=".3s">
                                    <img src="{{asset('assets/img/images/game_img03.png')}}" alt class="shape-2 wow fadeInRight" data-wow-delay=".6s">
                                    <img src="{{asset('assets/img/images/game_img04.png')}}" alt class="shape-3 wow fadeInLeft" data-wow-delay=".9s">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- just-gamer-area-end -->

                <!-- tournament-area -->
         
                <!-- tournament-area-end -->

                <!-- gallery-area -->
                <div class="gallery-area">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div class="gallery-active">
                                    <div class="gallery-item">
                                        <img src="{{asset('assets/img/gallery/gallery_img01.jpg')}}" alt="">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="{{asset('assets/img/gallery/gallery_img02.jpg')}}" alt="">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="{{asset('assets/img/gallery/gallery_img03.jpg')}}" alt="">
                                    </div>
                                    <div class="gallery-item">
                                        <img src="{{asset('assets/img/gallery/gallery_img04.jpg')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-nav"></div>
                    </div>
                </div>
                <!-- gallery-area-end -->
                 <!-- team-area -->
                <section class="team-area-two">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title">
                                <div class="section-title title-style-two text-center mb-60">
                                    <h2 class="title">Active Team Members</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="team-thumb mb-30">
                                <img src="{{asset('assets/img/team/team_img01.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="team-thumb mb-30">
                                <img src="{{asset('assets/img/team/team_img02.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="team-thumb mb-30">
                                <img src="{{asset('assets/img/team/team_img03.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="team-thumb mb-30">
                                <img src="{{asset('assets/img/team/team_img04.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="counter-area-two">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-20">
                                <div class="counter-item-two text-center">
                                    <div class="counter-content">
                                        <h2 class="count"><span class="odometer" data-count="7878"></span>K</h2>
                                        <p>Unique Design</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-20">
                                <div class="counter-item-two text-center">
                                    <div class="counter-content">
                                        <h2 class="count"><span class="odometer" data-count="15"></span> +</h2>
                                        <p>Years Of Experience</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-20">
                                <div class="counter-item-two text-center">
                                    <div class="counter-content">
                                        <h2 class="count"><span class="odometer" data-count=".45"></span> euro</h2>
                                        <span>Last Year</span>
                                        <p>Winning Price</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-20">
                                <div class="counter-item-two text-center">
                                    <div class="counter-content">
                                        <h2 class="count"><span class="odometer" data-count=".55"></span> euro</h2>
                                        <span>30th Dec</span>
                                        <p>Public Sale</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-20">
                                <div class="counter-item-two text-center">
                                    <div class="counter-content">
                                        <p>Creative and <br> online game Pictionary or office Halda</p>
                                        <i class="far fa-copyright"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                <!-- team-area-end -->

                <!-- live-stream-area -->

                <!-- live-stream-area-end -->

                <!-- shop-area -->
                <section class="shop-area pt-115 pb-60">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="section-title title-style-two text-center mb-70">
                                    <h2 class="title">check our gears</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-9">
                                <div class="shop-item mb-60">
                                    <div class="shop-thumb">
                                        <img src="{{asset('assets/img/shop/shop_wrap_img.png')}}" alt class="shape">
                                        <a href="shop-details.html"><img src="{{asset('assets/img/shop/shop_img01.png')}}" alt class="shop-img"></a>
                                        <div class="shop-date">
                                            <span>in 4 days</span>
                                        </div>
                                        <div class="shop-share">
                                            <a href="shop-details.html"><i class="fas fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="shop-content">
                                        <div class="shop-content-top">
                                            <div class="shop-title">
                                                <h5 class="title"><a href="shop-details.html">HEADPHONES</a></h5>
                                                <p>E-SPORTS</p>
                                            </div>
                                            <div class="price">
                                                <span>$18</span>
                                            </div>
                                        </div>
                                        <div class="shop-content-bottom">
                                            <div class="shop-btn">
                                                <a href="shop-details.html" class="btn"><i class="fas fa-plus"></i>add to cart</a>
                                            </div>
                                            <div class="shop-wishlist">
                                                <a href="shop-details.html"><i class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-9">
                                <div class="shop-item mb-60">
                                    <div class="shop-thumb">
                                        <img src="{{asset('assets/img/shop/shop_wrap_img.png')}}" alt class="shape">
                                        <a href="#"><img src="{{asset('assets/img/shop/shop_img02.png')}}" alt class="shop-img"></a>
                                        <div class="shop-date">
                                            <span>in 4 days</span>
                                        </div>
                                        <div class="shop-share">
                                            <a href="shop-details.html"><i class="fas fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="shop-content">
                                        <div class="shop-content-top">
                                            <div class="shop-title">
                                                <h5 class="title"><a href="shop-details.html">controller</a></h5>
                                                <p>E-SPORTS</p>
                                            </div>
                                            <div class="price">
                                                <span>$29</span>
                                            </div>
                                        </div>
                                        <div class="shop-content-bottom">
                                            <div class="shop-btn">
                                                <a href="shop-details.html" class="btn"><i class="fas fa-plus"></i>add to cart</a>
                                            </div>
                                            <div class="shop-wishlist">
                                                <a href="shop-details.html"><i class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-9">
                                <div class="shop-item mb-60">
                                    <div class="shop-thumb">
                                        <img src="{{asset('assets/img/shop/shop_wrap_img.png')}}" alt class="shape">
                                        <a href="shop-details.html"><img src="{{asset('assets/img/shop/shop_img03.png')}}" alt class="shop-img"></a>
                                        <div class="shop-date">
                                            <span>in 4 days</span>
                                        </div>
                                        <div class="shop-share">
                                            <a href="shop-details.html"><i class="fas fa-share-alt"></i></a>
                                        </div>
                                    </div>
                                    <div class="shop-content">
                                        <div class="shop-content-top">
                                            <div class="shop-title">
                                                <h5 class="title"><a href="shop-details.html">gaming mask</a></h5>
                                                <p>E-SPORTS</p>
                                            </div>
                                            <div class="price">
                                                <span>$45</span>
                                            </div>
                                        </div>
                                        <div class="shop-content-bottom">
                                            <div class="shop-btn">
                                                <a href="shop-details.html" class="btn"><i class="fas fa-plus"></i>add to cart</a>
                                            </div>
                                            <div class="shop-wishlist">
                                                <a href="shop-details.html"><i class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- shop-area-end -->

                <!-- newsletter-area -->
                <section class="newsletter-area pb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="newsletter-wrap">
                                    <div class="newsletter-content">
                                        <div class="newsletter-icon">
                                            <img src="{{asset('assets/img/icon/newsletter_icon.png')}}" alt="">
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

            </div>
            <!-- area-bg-end -->

        </main>
        <!-- main-area-end -->

@endsection
