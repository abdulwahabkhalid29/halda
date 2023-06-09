@extends('layout.scaffold')
@push('title')
Blog Detail
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
                                        <h2 class="title">news Details</h2>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">news details</li>
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

            <!-- blog-details-area -->
            <section class="blog-details-area black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="blog-item mb-60">
                                <div class="blog-thumb mb-50">
                                    <img src="{{asset('assets/img/blog/blog_img01.jpg')}}" alt="">
                                </div>
                                <div class="blog-content blog-details-content">
                                    <h4 class="small-title">dota 2 game</h4>
                                    <h2 class="title">online games including shooting games, arcade free games the racing car games and many more</h2>
                                    <div class="blog-meta">
                                        <ul>
                                            <li><a href="#">BY thomas lee</a></li>
                                            <li><i class="far fa-clock"></i>march 10, 2022</li>
                                            <li><a href="#"><i class="far fa-comment"></i>25 COMMENTS</a></li>
                                            <li><i class="far fa-eye"></i>4,735 VIEWS</li>
                                        </ul>
                                    </div>
                                    <p>Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. In auctor lobortis lacus. Phasellus gravida semper nisi. Aliquam lobortis printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting remaining unchanged.</p>
                                    <p>Placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. In auctor lobortis lacus. Phasellus gravida semper nisi. Aliquam lobortis printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 150 when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially.</p>
                                    <blockquote>
                                        <p>“ Aliquam lobortis printing and typesetting industry. Lorem Ipsum been the industry's standard dummy text ever since the 15s, when an unknown printer took galley of type and scrambled it to make a type specimen book. It has survived not only </p>
                                        <cite>Alexander Lee</cite>
                                    </blockquote>
                                    <p>Aliquam lobortis printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 150 when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially.</p>
                                    <h5 class="title-two">racing car games and many more</h5>
                                    <p> Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. In auctor lobortis lacus. Phasellus gravida semper nisi. Aliquam lobortis printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting essentially.</p>
                                    <figure class="details-img-wrap">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="blog-details-img">
                                                    <img src="{{asset('assets/img/blog/blog_detaice_img.jpg')}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-12 col-md-6">
                                                <div class="blog-details-list-content">
                                                    <p>Aliquam lobortis printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                                        text ever since the 150 when an unknown printer took a galley of type and scrambled it to make a type
                                                        specimen book.</p>
                                                    <ul class="blog-details-list">
                                                        <li>Aliquam lobortis printing and typesetting industry.</li>
                                                        <li>Maecenas ullamcorper, dui et placerat feugiat</li>
                                                        <li>Scrambled type specimen book</li>
                                                        <li>But also the leap into electronic typesetting</li>
                                                        <li>Dliquam lobortis printing and typesetting industry.</li>
                                                    </ul>
                                                </div>
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
                            <div class="avatar-post mb-50">
                                <div class="avatar-post-img">
                                    <img src="{{asset('assets/img/blog/avater_post_img.png')}}" alt="">
                                </div>
                                <div class="avatar-post-content">
                                    <div class="ap-content-top">
                                        <h4 class="title">kamaliya deo</h4>
                                        <a href="#">Admin</a>
                                    </div>
                                    <p>Aliquam lobortis printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 150 when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <ul class="social">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-next-prev mb-75">
                                <a href="#"><i class="fas fa-angle-double-left"></i>PREVIOUS ARTICLE</a>
                            </div>
                            <div class="comment-reply-box">
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
            <!-- blog-details-area-end -->

        </main>
        <!-- main-area-end -->


@endsection