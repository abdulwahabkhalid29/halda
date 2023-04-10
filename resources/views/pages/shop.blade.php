@extends('layout.scaffold')
@push('title')
Shop
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
                                        <h2 class="title">our shop</h2>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">our shop</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-md-6 d-none d-md-block">
                                    <div class="breadcrumb-img text-center text-lg-end">
                                        <img src="{{asset('assets/img/images/breadcrumb_img03.png')}}" alt="">
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

            <!-- shop-area -->
            <section class="inner-shop-area black-bg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="shop-top-meta">
                                <p class="shop-show-result">Total Items 1-12 of 13</p>
                                <div class="shop-top-right">
                                    <form action="#">
                                        <label for="shortBy">sort By</label>
                                        <select id="shortBy" name="select" class="form-select" aria-label="Default select example">
                                            <option value="">Sort by Latest</option>
                                            <option>Free Shipping</option>
                                            <option>Best Match</option>
                                            <option>Newest Item</option>
                                            <option>Size A - Z</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-6 col-sm-9">
                                    <div class="shop-item mb-60">
                                        <div class="shop-thumb">
                                            <img src="{{asset('assets/img/shop/shop_wrap_img02.png')}}" alt="img" class="shape">
                                            <a href="shop-details.html"><img src="{{asset('assets/img/shop/shop_img01.png')}}" alt="img" class="shop-img"></a>
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
                                <div class="col-md-6 col-sm-9">
                                    <div class="shop-item mb-60">
                                        <div class="shop-thumb">
                                            <img src="{{asset('assets/img/shop/shop_wrap_img02.png')}}" alt="img" class="shape">
                                            <a href="shop-details.html"><img src="{{asset('assets/img/shop/shop_img02.png')}}" alt="img" class="shop-img"></a>
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
                                <div class="col-md-6 col-sm-9">
                                    <div class="shop-item mb-60">
                                        <div class="shop-thumb">
                                            <img src="{{asset('assets/img/shop/shop_wrap_img02.png')}}" alt="img" class="shape">
                                            <a href="shop-details.html"><img src="{{asset('assets/img/shop/shop_img03.png')}}" alt="img" class="shop-img"></a>
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
                                <div class="col-md-6 col-sm-9">
                                    <div class="shop-item mb-60">
                                        <div class="shop-thumb">
                                            <img src="{{asset('assets/img/shop/shop_wrap_img02.png')}}" alt="img" class="shape">
                                            <a href="shop-details.html"><img src="{{asset('assets/img/shop/shop_img04.png')}}" alt="img" class="shop-img"></a>
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
                                                    <h5 class="title"><a href="shop-details.html">flag grenade</a></h5>
                                                    <p>E-SPORTS</p>
                                                </div>
                                                <div class="price">
                                                    <span>$39</span>
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
                                <div class="col-md-6 col-sm-9">
                                    <div class="shop-item mb-60">
                                        <div class="shop-thumb">
                                            <img src="{{asset('assets/img/shop/shop_wrap_img02.png')}}" alt="img" class="shape">
                                            <a href="shop-details.html"><img src="{{asset('assets/img/shop/shop_img05.png')}}" alt="img" class="shop-img"></a>
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
                                                    <h5 class="title"><a href="shop-details.html">gaming Console</a></h5>
                                                    <p>E-SPORTS</p>
                                                </div>
                                                <div class="price">
                                                    <span>$99</span>
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
                                <div class="col-md-6 col-sm-9">
                                    <div class="shop-item mb-60">
                                        <div class="shop-thumb">
                                            <img src="{{asset('assets/img/shop/shop_wrap_img02.png')}}" alt="img" class="shape">
                                            <a href="shop-details.html"><img src="{{asset('assets/img/shop/shop_img06.png')}}" alt="img" class="shop-img"></a>
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
                                                    <h5 class="title"><a href="shop-details.html">royal pass</a></h5>
                                                    <p>E-SPORTS</p>
                                                </div>
                                                <div class="price">
                                                    <span>$12</span>
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
                            <div class="pagination-wrap mt-10">
                                <nav>
                                    <ul>
                                        <li class="active"><a href="#">01</a></li>
                                        <li><a href="#">02</a></li>
                                        <li><a href="#">03</a></li>
                                        <li><a href="#">04</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6">
                            <aside class="shop-sidebar">
                                <div class="widget">
                                    <h4 class="widget-title">Searching</h4>
                                    <form action="#" class="sidebar-search">
                                        <input type="text" placeholder="Search...">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="widget">
                                    <h4 class="widget-title">price filter</h4>
                                    <div class="price_filter">
                                        <div id="slider-range"></div>
                                        <div class="price_slider_amount">
                                            <span>Price :</span>
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                        <input type="submit" class="btn" value="Filter">
                                    </div>
                                </div>
                                <div class="widget">
                                    <h4 class="widget-title">CATEGORIES</h4>
                                    <ul class="shop-sidebar-cat">
                                        <li><a href="#">E-SPORTS <span>26</span></a></li>
                                        <li><a href="#">xbox controller <span>24</span></a></li>
                                        <li><a href="#">Head phone <span>06</span></a></li>
                                        <li><a href="#">Gaming Mask <span>12</span></a></li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h4 class="widget-title">tagS</h4>
                                    <ul class="shop-sidebar-tags">
                                        <li><a href="#">game</a></li>
                                        <li><a href="#">offline</a></li>
                                        <li><a href="#">online gaming</a></li>
                                        <li><a href="#">shooting</a></li>
                                        <li><a href="#">online games</a></li>
                                        <li><a href="#">X-box</a></li>
                                        <li><a href="#">zombie games</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- shop-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <!-- footer-area-end -->






		<!-- JS here -->
@endsection