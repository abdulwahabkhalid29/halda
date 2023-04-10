@extends('layout.scaffold')
@push('title')
Login
@endpush
@section('content')
<section class="breadcrumb-area breadcrumb-bg">
   <div class="breadcrumb-overflow">
      <div class="container">
         <div class="breadcrumb-inner">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <div class="breadcrumb-content">
                     <h2 class="title">Login</h2>
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Login</li>
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
<main class="main--area about-area about-bg">
        <div class="container">
            <div class="row ">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div style="margin-top: 150px; margin-bottom: 100px;" class="p-3">
                        <h2 class=" text-center">login Form</h2>
                                <div class="contact__form-wrap">
                                    <form action="{{ route('login') }}" method="POST" class="contact-form">
                                        @csrf
                                        <div class="row">
                                        <div class="form-grp">
                                            <label for="email">Your Email <span>*</span></label>
                                            <input id="email" name="email" class=" @error('email') is-invalid @enderror" type="email" placeholder="Email *" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror      
                                        </div>
                                        <div class="form-grp">
                                            <label for="password">Your Password <span>*</span></label>
                                            <input id="password" class="@error('password') is-invalid @enderror" name="password" type="password" placeholder="password *" required autocomplete="current-password">
                                            @error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror      
                                        </div>
                                                
                                            </div>
                                            <a href="{{ route('register') }}">Don't Have an account</a>
                                        </div>
                                        <button class="submit-btn btn">Submit Now</button>
                                    </form>
                                    <p class="ajax-response"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </main>
    @endsection