<header>
            <div id="header-top-fixed"></div>
            <div id="sticky-header" class="menu-area">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="#"><img src="{{asset('assets/img/logo/logo.png')}}" alt=""></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active menu-item-has-children"><a href="{{route('pages.index')}}">Home</a>

                                            </li>
                                            <li><a href="{{route('pages.about')}}">About Us</a></li>
                                            <li><a href="{{route('pages.tournament')}}">Tournament</a></li>
                                            <li class="menu-item-has-children"><a href="#">Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{route('pages.blog')}}">Our Blog</a></li>
                                                    <li><a href="{{route('pages.blog_detail')}}">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Pages</a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{route('pages.squad')}}">Our Squad</a></li>
                                                    <li><a href="{{route('pages.match')}}">Match Single</a></li>
                                                    <li><a href="{{route('pages.shop')}}">Our Shop</a></li>
                                                    <li><a href="{{route('pages.detail')}}">Shop Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{route('pages.contact')}}">contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action">
                                        <ul>
                                            <li class="header-search">
                                                <a href="#"><i class="fas fa-search"></i></a>
                                            </li>
                                            <li class="header-sine">
                                                @auth
                         <a href="{{route('pages.profile.edit')}}">Hello, {{auth()->user()->name}}</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:;" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @endauth
                    @guest
                        <a style="margin-left:20px;"  href="{{route('login')}}">LOGIN</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="{{route('register')}}">REGISTER</a>&nbsp;&nbsp;
                    @endguest
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <nav class="menu-box">
                                    <div class="close-btn"><i class="fas fa-times"></i></div>
                                    <div class="nav-logo"><a href="index.html"><img src="{{asset('assets/img/logo/logo.png')}}" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu-backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
                <div class="header-icon">
                    <a href="#" class="menu-tigger"><img src="{{asset('assets/img/icon/hader_icon.png')}}" alt=""></a>
                </div>
            </div>
            <!-- header-search -->
            <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="search-close">
                    <span><i class="fas fa-times"></i></span>
                </div>
                <div class="search-wrap text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h2 class="title">... Search Here ...</h2>
                                <div class="search-form">
                                    <form action="#">
                                        <input type="text" name="search" placeholder="Type keywords here">
                                        <button class="search-btn"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-search-end -->

            <!-- offCanvas-menu -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button><i class="far fa-window-close"></i></button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index.html"><img src="{{asset('assets/img/logo/logo.png')}}" alt="Logo"></a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli <br> Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                        <p>+(090) 8765 86543 85</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                        <p>example.mail@hum.com</p>
                    </div>
                </div>
                <ul class="side-instagram">
                    <li><a href="our-squad.html"><img src="{{asset('assets/img/images/sd_insta01.jpg')}}" alt=""></a></li>
                    <li><a href="our-squad.html"><img src="{{asset('assets/img/images/sd_insta02.jpg')}}" alt=""></a></li>
                    <li><a href="our-squad.html"><img src="{{asset('assets/img/images/sd_insta03.jpg')}}" alt=""></a></li>
                    <li><a href="our-squad.html"><img src="{{asset('assets/img/images/sd_insta04.jpg')}}" alt=""></a></li>
                    <li><a href="our-squad.html"><img src="{{asset('assets/img/images/sd_insta05.jpg')}}" alt=""></a></li>
                    <li><a href="our-squad.html"><img src="{{asset('assets/img/images/sd_insta06.jpg')}}" alt=""></a></li>
                </ul>
                <div class="social-icon-right mt-30">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offCanvas-menu-end -->

        </header>