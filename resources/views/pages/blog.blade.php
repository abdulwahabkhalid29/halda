@extends('layout.scaffold')
@push('title')
Blog
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
            <section class="breadcrumb-area breadcrumb-bg breadcrumb-bg-two">
                <div class="breadcrumb-overflow">
                    <div class="container">
                        <div class="breadcrumb-inner">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="breadcrumb-content">
                                        <h2 class="title">latest news</h2>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">latest news</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-md-6 d-none d-md-block">
                                    <div class="breadcrumb-img-two text-center">
                                        <img src="{{asset('assets/img/images/breadcrumb_img04.png')}}" alt="">
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

            <!-- blog-area -->
            <section class="blog-area black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-item mb-60">
                                <div class="blog-thumb mb-50">
                                    <a href="blog-details.html"><img src="{{asset('assets/img/blog/blog_img01.jpg')}}" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="small-title">dota 2 game</h4>
                                    <h2 class="title"><a href="blog-details.html">online games including shooting games, arcade free games the racing car games and many more.</a></h2>
                                    <div class="blog-meta">
                                        <ul>
                                            <li>BY <a href="#">thomas lee</a></li>
                                            <li><i class="far fa-clock"></i>march 10, 2022</li>
                                            <li><a href="#"><i class="far fa-comment"></i>25 COMMENTS</a></li>
                                            <li><i class="far fa-eye"></i>4,735 VIEWS</li>
                                        </ul>
                                    </div>
                                    <div class="blog-content-bottom">
                                        <a href="blog-details.html" class="btn">Read more</a>
                                        <ul class="social">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item mb-60">
                                <div class="blog-thumb mb-50">
                                    <a href="blog-details.html"><img src="{{asset('assets/img/blog/blog_img02.jpg')}}" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="small-title">virtual games</h4>
                                    <h2 class="title"><a href="blog-details.html">Best Offline Games on Android That Don't Need Internet games racing car games and many more.</a></h2>
                                    <div class="blog-meta">
                                        <ul>
                                            <li><a href="#">BY thomas lee</a></li>
                                            <li><i class="far fa-clock"></i>march 10, 2022</li>
                                            <li><a href="#"><i class="far fa-comment"></i>25 COMMENTS</a></li>
                                            <li><i class="far fa-eye"></i>4,735 VIEWS</li>
                                        </ul>
                                    </div>
                                    <div class="blog-content-bottom">
                                        <a href="blog-details.html" class="btn">Read more</a>
                                        <ul class="social">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-item mb-60">
                                <div class="blog-thumb mb-50">
                                    <a href="blog-details.html"><img src="{{asset('assets/img/blog/blog_img03.jpg')}}" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h4 class="small-title">virtual games</h4>
                                    <h2 class="title"><a href="blog-details.html">online games including shooting games, arcade free games the racing car games and many more</a></h2>
                                    <div class="blog-meta">
                                        <ul>
                                            <li><a href="#">BY thomas lee</a></li>
                                            <li><i class="far fa-clock"></i>march 10, 2022</li>
                                            <li><a href="#"><i class="far fa-comment"></i>25 COMMENTS</a></li>
                                            <li><i class="far fa-eye"></i>4,735 VIEWS</li>
                                        </ul>
                                    </div>
                                    <div class="blog-content-bottom">
                                        <a href="blog-details.html" class="btn">Read more</a>
                                        <ul class="social">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <aside class="blog-sidebar">
                                <div class="blog-widget">
                                    <h4 class="widget-title">Searching</h4>
                                    <div class="sidebar-search">
                                        <form action="#">
                                            <input type="text" placeholder="Search...">
                                            <button><i class="fas fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="blog-widget">
                                    <h4 class="widget-title">CATEGORIES</h4>
                                    <div class="blog-categories">
                                        <ul>
                                            <li>
                                                <a href="blog-details.html" data-background="{{asset('assets/img/blog/categories_img01.jpg')}}">
                                                    shooting games <span>26</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-details.html" data-background="{{asset('assets/img/blog/categories_img02.jpg')}}">
                                                    arcade free games <span>14</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-details.html" data-background="{{asset('assets/img/blog/categories_img03.jpg')}}">
                                                    online games <span>16</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-widget">
                                    <h4 class="widget-title">Recent Post</h4>
                                    <div class="rc-post-list">
                                        <ul>
                                            <li>
                                                <div class="rc-post-thumb">
                                                    <a href="blog-details.html"><img src="{{asset('assets/img/blog/rc_post_img01.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="rc-post-content">
                                                    <h5 class="title"><a href="blog-details.html">online games includi shooting game</a></h5>
                                                    <span class="date"><i class="far fa-clock"></i>march 10, 2022</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="rc-post-thumb">
                                                    <a href="blog-details.html"><img src="{{asset('assets/img/blog/rc_post_img02.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="rc-post-content">
                                                    <h5 class="title"><a href="blog-details.html">Best Offline Games on Android Don't It.</a></h5>
                                                    <span class="date"><i class="far fa-clock"></i>march 10, 2022</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="rc-post-thumb">
                                                    <a href="blog-details.html"><img src="{{asset('assets/img/blog/rc_post_img03.jpg')}}" alt=""></a>
                                                </div>
                                                <div class="rc-post-content">
                                                    <h5 class="title"><a href="blog-details.html">Best Offline Games on IOS Devices Need You.</a></h5>
                                                    <span class="date"><i class="far fa-clock"></i>march 10, 2022</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-widget">
                                    <h4 class="widget-title">Newsletter</h4>
                                    <div class="sidebar-newsletter text-center">
                                        <div class="sn-thumb mb-30">
                                            <img src="{{asset('assets/img/blog/newsletter_img.png')}}" alt="">
                                        </div>
                                        <div class="sn-content">
                                            <p>A newsletter is an email you can send to customers!</p>
                                            <form action="#">
                                                <input type="text" placeholder="Enter email">
                                                <button>Subscribe Now</button>
                                            </form>
                                            <p class="last-text">Don’t worry, we don’t spam</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-widget">
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
            <!-- blog-area-end -->

        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <!-- footer-area-end -->





@endsection