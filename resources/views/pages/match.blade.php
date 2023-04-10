@extends('layout.scaffold')
@push('title')
Match
@endpush
@section('content')

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




        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg breadcrumb-bg-three">
                <div class="breadcrumb-overflow">
                    <div class="container">
                        <div class="breadcrumb-inner">
                            <div class="row align-items-center">
                                <div class="col-lg-4 col-sm-6 order-2 order-lg-1">
                                    <div class="breadcrumb-img-three text-center">
                                        <img src="{{asset('assets/img/images/breadcrumb_team_bg.png')}}" alt="">
                                        <img src="{{asset('assets/img/images/team_logo01.png')}}" alt="" class="team-logo">
                                        <h4 class="team-name">sky warrior</h4>
                                    </div>
                                </div>
                                <div class="col-lg-4 order-0 order-lg-1">
                                    <div class="breadcrumb-content">
                                        <h2 class="title">match single</h2>
                                        <div class="coming-time" data-countdown="2022/5/29"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6 order-3 order-lg-2">
                                    <div class="breadcrumb-img-three right-team text-center">
                                        <img src="{{asset('assets/img/images/breadcrumb_team_bg.png')}}" alt="">
                                        <img src="{{asset('assets/img/images/team_logo02.png')}}" alt="" class="team-logo">
                                        <h4 class="team-name">heater killer</h4>
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

            <!-- blog-details-area -->
            <section class="blog-details-area black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-item match-single-content">
                                <div class="blog-content blog-details-content">
                                    <h2 class="title">online games including shooting games</h2>
                                    <div class="blog-meta">
                                        <ul>
                                            <li><a href="#">BY thomas lee</a></li>
                                            <li><i class="far fa-clock"></i>march 10, 2022</li>
                                            <li><i class="far fa-eye"></i>4,735 VIEWS</li>
                                        </ul>
                                    </div>
                                    <p>Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. In auctor lobortis lacus. Phasellus gravida semper nisi. Aliquam lobortis printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting remaining five centuries, but also the leap into electronic.</p>
                                    <p>Placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. In auctor lobortis lacus. Phasellus id gravida semper nisi. Aliquam lobortis printing and typesetting industry. Lorem Ipsum has been the industr standard dummy text ever since the 150 when an unknown printer took a galley of type and scrambled it to make a type book specimen. It has survived not only five centuries, but also the leap electronic typesetting essentially.</p>
                                    <figure class="match-single-img">
                                        <div class="row">
                                            <div class="col-md-7">
                                                <img src="{{asset('assets/img/images/game_single_img01.jpg')}}" alt="">
                                            </div>
                                            <div class="col-md-5">
                                                <img src="{{asset('assets/img/images/game_single_img02.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </figure>
                                    <p>Aliquam lobortis printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 150 when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially.</p>
                                    <div class="blog-details-content-bottom">
                                        <div class="post-tags">
                                            <h6 class="title">post Tags :</h6>
                                            <ul class="tags">
                                                <li><a href="#">Online Game,</a></li>
                                                <li><a href="#">Dota 2,</a></li>
                                                <li><a href="#">Offline,</a></li>
                                                <li><a href="#">Shooting</a></li>
                                            </ul>
                                        </div>
                                        <ul class="social">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-reply-box">
                                <h4 class="widget-title">ADD COMMENT</h4>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="text" placeholder="Your Name *">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <input type="email" placeholder="Your E-mail *">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-grp">
                                        <textarea name="comments" placeholder="Comments *"></textarea>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Save my name, email, and website in this browser
                                        </label>
                                    </div>
                                    <button class="btn" type="submit">POST COMMENT</button>
                                </form>
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
                                                <a href="blog-details.html" data-background="{{asset('assets/img/blog/categories_img01.jpg">
                                                    shooting games <span>26</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-details.html" data-background="{{asset('assets/img/blog/categories_img02.jpg">
                                                    arcade free games <span>14</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-details.html" data-background="{{asset('assets/img/blog/categories_img03.jpg">
                                                    online games <span>16</span>
                                                </a>
                                            </li>
                                        </ul>
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
            <!-- blog-details-area-end -->

        </main>
        <!-- main-area-end -->


@endsection