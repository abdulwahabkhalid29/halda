@extends('layout.scaffold')
@push('title')
Detail
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
                                        <h2 class="title">shop details</h2>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">shop details</li>
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

            <!-- shop-details-area -->
            <section class="shop-details-area black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="shop-details-images">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane show active" id="one" role="tabpanel" aria-labelledby="one-tab">
                                        <div class="shop-details-thumb">
                                            <img src="{{asset('assets/img/shop/sd_wrap_img.png')}}" alt="" class="wrap-bg">
                                            <img src="{{asset('assets/img/shop/sd_thumb01.png')}}" alt="" class="main-img">
                                            <div class="shop-date">
                                                <span>in 4 days</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="two" role="tabpanel" aria-labelledby="two-tab">
                                        <div class="shop-details-thumb">
                                            <img src="{{asset('assets/img/shop/sd_wrap_img.png')}}" alt="" class="wrap-bg">
                                            <img src="{{asset('assets/img/shop/sd_thumb02.png')}}" alt="" class="main-img">
                                            <div class="shop-date">
                                                <span>in 4 days</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="three" role="tabpanel" aria-labelledby="three-tab">
                                        <div class="shop-details-thumb">
                                            <img src="{{asset('assets/img/shop/sd_wrap_img.png')}}" alt="" class="wrap-bg">
                                            <img src="{{asset('assets/img/shop/sd_thumb03.png')}}" alt="" class="main-img">
                                            <div class="shop-date">
                                                <span>in 4 days</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="one-tab" data-bs-toggle="tab" data-bs-target="#one" type="button" role="tab" aria-controls="one" aria-selected="true">
                                            <img src="{{asset('assets/img/shop/sd_nav_img01.jpg')}}" alt="">
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="two-tab" data-bs-toggle="tab" data-bs-target="#two" type="button" role="tab" aria-controls="two" aria-selected="false">
                                            <img src="{{asset('assets/img/shop/sd_nav_img02.jpg')}}" alt="">
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="three-tab" data-bs-toggle="tab" data-bs-target="#three" type="button" role="tab" aria-controls="three" aria-selected="false">
                                            <img src="{{asset('assets/img/shop/sd_nav_img03.jpg')}}" alt="">
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="shop-details-content">
                                <span>Kettlebell</span>
                                <h3 class="title">Best Offline Games on Android</h3>
                                <div class="shop-details-rating">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <span>( 01 Review )</span>
                                </div>
                                <div class="shop-details-price">
                                    <h2 class="price">$52.00</h2>
                                    <h5 class="stock-status">- IN Stock</h5>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the prig and typesetting industry. Lorem Ipsum has been text of the prig and typesetting industry.</p>
                                <div class="shop-details-quantity">
                                    <span class="quantity">Quantity</span>
                                    <div class="cart-plus-minus">
                                        <input type="text" value="1">
                                    </div>
                                </div>
                                <div class="shop-details-button-wrap">
                                    <a href="#" class="btn disabled">Sold Out</a>
                                    <a href="#" class="btn">buy it now</a>
                                </div>
                                <div class="shop-details-bottom">
                                    <ul class="bottom-list">
                                        <li><span>Categories :</span><a href="#">controller, </a><a href="#">xbox</a></li>
                                        <li><span>SKU :</span><a href="#">4589654</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="shop-description-wrap">
                                <ul class="nav nav-tabs" id="myTabTwo" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="true">DESCRIPTION</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab" aria-controls="info" aria-selected="false">ADDITIONAL INFORMATION</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews" aria-selected="false">REVIEWS (0)</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContentTwo">
                                    <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                        <div class="product-desc-content">
                                            <p>Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. auctor loboorti lacus. Phasellus gravida semper nisi. Aliquam lobortis printing and typesetting industry. Lorem Ipsum has been in the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic.</p>
                                            <p><span>*Call branch</span> to verify availability dummy text of the printing and typesetting industry.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
                                        <div class="product-desc-info">
                                            <div class="row">
                                                <div class="col-xl-3 col-md-5">
                                                    <div class="product-desc-img">
                                                        <img src="{{asset('assets/img/shop/desc_img.jpg')}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-9 col-md-7">
                                                    <h5 class="small-title">Kettlebell Gaming Console</h5>
                                                    <p>Cramond Leopard & Pythong Print Anorak Jacket In Beige but also the leap into
                                                        electronic typesetting, remaining lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                    <ul class="product-desc-list">
                                                        <li>65% poly, 35% rayon</li>
                                                        <li>Partially lined</li>
                                                        <li>Button cuff sleeves</li>
                                                        <li>Hard Gaming Console</li>
                                                        <li>Lightweight semi-sheer fabrication</li>
                                                        <li>Made in USA</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                        <div class="product-desc-review">
                                            <div class="review-title mb-20">
                                                <h4 class="title">Customer Reviews (0)</h4>
                                            </div>
                                            <div class="left-rc">
                                                <p>No reviews yet</p>
                                            </div>
                                            <div class="right-rc">
                                                <a href="#">Write a review</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="related-products-wrap">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="section-title title-style-two text-center mb-60">
                                    <h2 class="title">related product</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-9">
                                <div class="shop-item mb-60">
                                    <div class="shop-thumb">
                                        <img src="{{asset('assets/img/shop/shop_wrap_img02.png')}}" alt class="shape">
                                        <a href="shop-details.html"><img src="{{asset('assets/img/shop/shop_img01.png')}}" alt class="shop-img"></a>
                                        <div class="shop-date">
                                            <span>in 4 days</span>
                                        </div>
                                        <div class="shop-share">
                                            <a href="#"><i class="fas fa-share-alt"></i></a>
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
                                                <a href="#" class="btn"><i class="fas fa-plus"></i>add to cart</a>
                                            </div>
                                            <div class="shop-wishlist">
                                                <a href="#"><i class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-9">
                                <div class="shop-item mb-60">
                                    <div class="shop-thumb">
                                        <img src="{{asset('assets/img/shop/shop_wrap_img02.png')}}" alt class="shape">
                                        <a href="shop-details.html"><img src="{{asset('assets/img/shop/shop_img02.png')}}" alt class="shop-img"></a>
                                        <div class="shop-date">
                                            <span>in 4 days</span>
                                        </div>
                                        <div class="shop-share">
                                            <a href="#"><i class="fas fa-share-alt"></i></a>
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
                                                <a href="#" class="btn"><i class="fas fa-plus"></i>add to cart</a>
                                            </div>
                                            <div class="shop-wishlist">
                                                <a href="#"><i class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-5 col-md-6 col-sm-9">
                                <div class="shop-item mb-60">
                                    <div class="shop-thumb">
                                        <img src="{{asset('assets/img/shop/shop_wrap_img02.png')}}" alt class="shape">
                                        <a href="shop-details.html"><img src="{{asset('assets/img/shop/shop_img03.png')}}" alt class="shop-img"></a>
                                        <div class="shop-date">
                                            <span>in 4 days</span>
                                        </div>
                                        <div class="shop-share">
                                            <a href="#"><i class="fas fa-share-alt"></i></a>
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
                                                <a href="#" class="btn"><i class="fas fa-plus"></i>add to cart</a>
                                            </div>
                                            <div class="shop-wishlist">
                                                <a href="#"><i class="far fa-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- shop-details-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <!-- footer-area-end -->




@endsection