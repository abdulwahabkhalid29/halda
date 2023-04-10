@extends('layout.scaffold')
@push('title')
Tournament
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
                                        <h2 class="title">TOURNAMENTS</h2>
                                        <nav aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                                <li class="breadcrumb-item active" aria-current="page">TOURNAMENTS</li>
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

            <!-- tournament-area-bg -->
            <div class="tournament-area-bg">

                <!-- live-streams-area -->
                <section class="live-streams-area">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="section-title title-style-two text-center mb-60">
                                    <h2 class="title">WATCH LIVE STREAMS</h2>
                                </div>
                            </div>
                        </div>
                        <div class="live-streams-wrapper">
                            <div class="row live-streams-active">
                                <div class="col-lg-12">
                                    <div class="live-streams-item">
                                        <div class="streams-thumb">
                                            <img src="{{asset('assets/img/images/live_img01')}}" alt="">
                                            <a class="popup-video" href="https://www.youtube.com/watch?v=1R559DWBYbU"><i class="fas fa-play-circle"></i></a>
                                        </div>
                                        <div class="streams-bottom-wrap">
                                            <div class="streams-content">
                                                <a target="_blank" href="https://www.youtube.com/channel/UCtVufP_2Z8vCZjJOCPc3tjQ/live"  class="live-btn">Live MATCHES</a>
                                                <h4 class="title"><a target="_blank" href="https://www.youtube.com/channel/UCtVufP_2Z8vCZjJOCPc3tjQ/live">skyward sword</a></h4>
                                                <span class="date">10th Mar 2022.</span>
                                            </div>
                                            <a href="https://www.youtube.com/channel/UCtVufP_2Z8vCZjJOCPc3tjQ/live" target="_blank" class="watch-stream"><img src="{{asset('assets/img/icon/watch_icon.png')}}" alt=""> watch stream</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="live-streams-item">
                                        <div class="streams-thumb">
                                            <img src="{{asset('assets/img/images/live_img02')}}" alt="">
                                            <a class="popup-video" href="https://www.youtube.com/watch?v=1R559DWBYbU"><i class="fas fa-play-circle"></i></a>
                                        </div>
                                        <div class="streams-bottom-wrap">
                                            <div class="streams-content">
                                                <a target="_blank" href="https://www.youtube.com/channel/UCtVufP_2Z8vCZjJOCPc3tjQ/live"  class="live-btn">Live MATCHES</a>
                                                <h4 class="title"><a target="_blank" href="https://www.youtube.com/channel/UCtVufP_2Z8vCZjJOCPc3tjQ/live">skyward sword</a></h4>
                                                <span class="date">10th Mar 2022.</span>
                                            </div>
                                            <a href="https://www.youtube.com/channel/UCtVufP_2Z8vCZjJOCPc3tjQ/live" target="_blank" class="watch-stream"><img src="{{asset('assets/img/icon/watch_icon.png')}}" alt=""> watch stream</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- live-streams-area-end -->

                <!-- tournament-area -->
                <section class="tournament-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="tournament-content">
                                    <h6 class="sub-title">check out our next</h6>
                                    <h4 class="title">GAMING TOURNAMENTS !</h4>
                                    <p>Lpsum dolor sit amet, consectetur adipiscing elit, sed labore et dolore magna aliqua.</p>
                                    <a href="#" class="btn">Join with us</a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="prize-pool">
                                    <h3 class="title">Prize pool</h3>
                                    <h5 class="prize">$80000</h5>
                                    <div class="coming-time" data-countdown="2022/5/29"></div>
                                    <img src="{{asset('assets/img/images/prize_img.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="winner-wrap">
                                    <h2 class="title">LAST WINNERS</h2>
                                    <div class="winner-active">
                                        <div class="winner-item">
                                            <div class="winner-thumb">
                                                <img src="{{asset('assets/img/images/winner_img01.png')}}" alt="">
                                            </div>
                                            <div class="winner-content">
                                                <span class="place">2nd place</span>
                                            </div>
                                        </div>
                                        <div class="winner-item">
                                            <div class="winner-thumb">
                                                <img src="{{asset('assets/img/images/winner_img02.png')}}" alt="">
                                            </div>
                                            <div class="winner-content">
                                                <span class="place">2nd place</span>
                                            </div>
                                        </div>
                                        <div class="winner-item">
                                            <div class="winner-thumb">
                                                <img src="{{asset('assets/img/images/winner_img03.png')}}" alt="">
                                            </div>
                                            <div class="winner-content">
                                                <span class="place">2nd place</span>
                                            </div>
                                        </div>
                                        <div class="winner-item">
                                            <div class="winner-thumb">
                                                <img src="{{asset('assets/img/images/winner_img02.png')}}" alt="">
                                            </div>
                                            <div class="winner-content">
                                                <span class="place">2nd place</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- tournament-area-end -->

            </div>
            <!-- tournament-area-bg-end -->

            <!-- my-match-area -->
            <section class="my-match-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title title-style-two text-center mb-60">
                                <h2 class="title">see <span>my</span> MATCHES</h2>
                            </div>
                        </div>
                    </div>
                    <div class="my-match-inner">
                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs match-menu" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">ALL MATCHES UP</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button id="coming-tab" data-bs-toggle="tab" data-bs-target="#coming" type="button" role="tab" aria-controls="coming" aria-selected="false">COMING MATCHES</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button id="results-tab" data-bs-toggle="tab" data-bs-target="#results" type="button" role="tab" aria-controls="results" aria-selected="false">LATEST RESULTS</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="my-match-wrap">
                                                <div class="my-match-box-wrap wow fadeInDown" data-wow-delay=".2s">
                                                    <img src="{{asset('assets/img/bg/my_match_box.png')}}" alt="" class="match-box-bg">
                                                    <ul>
                                                        <li>
                                                            <div class="my-match-team">
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan01.png')}}" alt=""></a>
                                                                </div>
                                                                <div class="vs">
                                                                    <img src="{{asset('assets/img/team/match_vs02.png')}}" alt="">
                                                                </div>
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan02.png')}}" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="my-match-info">
                                                                <a href="https://www.twitch.tv/shroud" target="_blank" class="live-btn">Live MATCHES</a>
                                                                <h5>skyward sword</h5>
                                                                <span>10th Mar 2022.</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.twitch.tv/shroud" target="_blank" class="watch-stream"><img src="{{asset('assets/img/icon/watch_icon.png')}}" alt=""> watch stream</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="my-match-box-wrap wow fadeInDown" data-wow-delay=".4s">
                                                    <img src="{{asset('assets/img/bg/my_match_box.png')}}" alt="" class="match-box-bg">
                                                    <ul>
                                                        <li>
                                                            <div class="my-match-team">
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan03.png')}}" alt=""></a>
                                                                </div>
                                                                <div class="vs">
                                                                    <img src="{{asset('assets/img/team/match_vs02.png')}}" alt="">
                                                                </div>
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan04.png')}}" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="my-match-info">
                                                                <a href="https://www.twitch.tv/shroud" target="_blank" class="live-btn">Live MATCHES</a>
                                                                <h5>Call Of Duty Mascot</h5>
                                                                <span>10th Mar 2022.</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.twitch.tv/shroud" target="_blank" class="watch-stream"><img src="{{asset('assets/img/icon/watch_icon.png')}}" alt=""> watch stream</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="my-match-box-wrap wow fadeInDown" data-wow-delay=".6s">
                                                    <img src="{{asset('assets/img/bg/my_match_box.png')}}" alt="" class="match-box-bg">
                                                    <ul>
                                                        <li>
                                                            <div class="my-match-team">
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan05.png')}}" alt=""></a>
                                                                </div>
                                                                <div class="vs">
                                                                    <img src="{{asset('assets/img/team/match_vs02.png')}}" alt="">
                                                                </div>
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan06.png')}}" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="my-match-info">
                                                                <a href="https://www.twitch.tv/shroud" target="_blank" class="live-btn">Live MATCHES</a>
                                                                <h5>Counter Strike Mascot</h5>
                                                                <span>10th Mar 2022.</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.twitch.tv/shroud" target="_blank" class="watch-stream"><img src="{{asset('assets/img/icon/watch_icon.png')}}" alt=""> watch stream</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="coming" role="tabpanel" aria-labelledby="coming-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="my-match-wrap">
                                                <div class="my-match-box-wrap">
                                                    <img src="{{asset('assets/img/bg/my_match_box.png')}}" alt="" class="match-box-bg">
                                                    <ul>
                                                        <li>
                                                            <div class="my-match-team">
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan05.png')}}" alt=""></a>
                                                                </div>
                                                                <div class="vs">
                                                                    <img src="{{asset('assets/img/team/match_vs02.png')}}" alt="">
                                                                </div>
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan06.png')}}" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="my-match-info">
                                                                <a href="https://www.twitch.tv/shroud" target="_blank" class="live-btn">Live MATCHES</a>
                                                                <h5>Counter Strike Mascot</h5>
                                                                <span>10th Mar 2022.</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.twitch.tv/shroud" target="_blank" class="watch-stream"><img src="{{asset('assets/img/icon/watch_icon.png')}}" alt=""> watch stream</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="my-match-box-wrap">
                                                    <img src="{{asset('assets/img/bg/my_match_box.png')}}" alt="" class="match-box-bg">
                                                    <ul>
                                                        <li>
                                                            <div class="my-match-team">
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan01.png')}}" alt=""></a>
                                                                </div>
                                                                <div class="vs">
                                                                    <img src="{{asset('assets/img/team/match_vs02.png')}}" alt="">
                                                                </div>
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan02.png')}}" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="my-match-info">
                                                                <a href="https://www.twitch.tv/shroud" target="_blank" class="live-btn">Live MATCHES</a>
                                                                <h5>skyward sword</h5>
                                                                <span>10th Mar 2022.</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.twitch.tv/shroud" target="_blank" class="watch-stream"><img src="{{asset('assets/img/icon/watch_icon.png')}}" alt=""> watch stream</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="my-match-box-wrap">
                                                    <img src="{{asset('assets/img/bg/my_match_box.png')}}" alt="" class="match-box-bg">
                                                    <ul>
                                                        <li>
                                                            <div class="my-match-team">
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan03.png')}}" alt=""></a>
                                                                </div>
                                                                <div class="vs">
                                                                    <img src="{{asset('assets/img/team/match_vs02.png')}}" alt="">
                                                                </div>
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan04.png')}}" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="my-match-info">
                                                                <a href="https://www.twitch.tv/shroud" target="_blank" class="live-btn">Live MATCHES</a>
                                                                <h5>Call Of Duty Mascot</h5>
                                                                <span>10th Mar 2022.</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.twitch.tv/shroud" target="_blank" class="watch-stream"><img src="{{asset('assets/img/icon/watch_icon.png')}}" alt=""> watch stream</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="results" role="tabpanel" aria-labelledby="results-tab">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="my-match-wrap">
                                                <div class="my-match-box-wrap">
                                                    <img src="{{asset('assets/img/bg/my_match_box.png')}}" alt="" class="match-box-bg">
                                                    <ul>
                                                        <li>
                                                            <div class="my-match-team">
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan03.png')}}" alt=""></a>
                                                                </div>
                                                                <div class="vs">
                                                                    <img src="{{asset('assets/img/team/match_vs02.png')}}" alt="">
                                                                </div>
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan04.png')}}" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="my-match-info">
                                                                <a href="https://www.twitch.tv/shroud" target="_blank" class="live-btn">Live MATCHES</a>
                                                                <h5>Call Of Duty Mascot</h5>
                                                                <span>10th Mar 2022.</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.twitch.tv/shroud" target="_blank" class="watch-stream"><img src="{{asset('assets/img/icon/watch_icon.png')}}" alt=""> watch stream</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="my-match-box-wrap">
                                                    <img src="{{asset('assets/img/bg/my_match_box.png')}}" alt="" class="match-box-bg">
                                                    <ul>
                                                        <li>
                                                            <div class="my-match-team">
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan01.png')}}" alt=""></a>
                                                                </div>
                                                                <div class="vs">
                                                                    <img src="{{asset('assets/img/team/match_vs02.png')}}" alt="">
                                                                </div>
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan02.png')}}" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="my-match-info">
                                                                <a href="https://www.twitch.tv/shroud" target="_blank" class="live-btn">Live MATCHES</a>
                                                                <h5>skyward sword</h5>
                                                                <span>10th Mar 2022.</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.twitch.tv/shroud" target="_blank" class="watch-stream"><img src="{{asset('assets/img/icon/watch_icon.png')}}" alt=""> watch stream</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="my-match-box-wrap">
                                                    <img src="{{asset('assets/img/bg/my_match_box.png')}}" alt="" class="match-box-bg">
                                                    <ul>
                                                        <li>
                                                            <div class="my-match-team">
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan05.png')}}" alt=""></a>
                                                                </div>
                                                                <div class="vs">
                                                                    <img src="{{asset('assets/img/team/match_vs02.png')}}" alt="">
                                                                </div>
                                                                <div class="team-one">
                                                                    <a href="index.html"><img src="{{asset('assets/img/team/my_match_clan06.png')}}" alt=""></a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="my-match-info">
                                                                <a href="https://www.twitch.tv/shroud" target="_blank" class="live-btn">Live MATCHES</a>
                                                                <h5>Counter Strike Mascot</h5>
                                                                <span>10th Mar 2022.</span>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a href="https://www.twitch.tv/shroud" target="_blank" class="watch-stream"><img src="{{asset('assets/img/icon/watch_icon.png')}}" alt=""> watch stream</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- my-match-area-end -->

        </main>
        <!-- main-area-end -->


@endsection