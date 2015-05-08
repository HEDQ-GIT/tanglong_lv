<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>TangLong Promotions</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    {!! Html::style("/css/bootstrap.min.css") !!}
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/css/swiper.min.css">
    {!! Html::style("/css/works.css") !!}
    {!! Html::style("/css/promotions.css") !!}
    <link rel="stylesheet" type="text/css" href="/css/headermenu.css" />
    <link rel="stylesheet" type="text/css" href="/css/contact.css" />



    <!-- Demo styles -->
    <style>
        body {
            background: #ffffff;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
            /*background: #ffffff;*/
        }

        .swiper-promotion {
            /*margin: 50px auto;*/
            /*background: url(/img/slider3_bg.jpg);*/
            background-color: #ffffff;
            text-align: center;
            padding: 30px 30px 0;
        }

        .swiper-promotion h1 {
            /*font-size: 100px;*/
        }

        .swiper-promotion h5 {
            font-size: 30px;
            /*margin: 0 !important;*/
            margin: 10px auto 20px !important;
        }

        .swiper-slide {
            /*width: 730px;*/
            /*height: 454px;*/
            width: 100%;
            height: 300px;

            text-align: center;
            vertical-align: middle;
        }

        .menu {
            width: 100%;
            height: 50px;
            background-color: #00b3ee;
        }
    </style>
</head>
<body>
{{--<div class="menu">--}}

{{--</div>--}}
{{--@include('common.top-menu')--}}

<nav id="slide-menu">
    <a id="slide-menu-btn" class="glyphicon glyphicon-align-justify"></a>
    <ul>
        <li><a href="{{ url('/') }}">HOME</a></li>
        <li><a href="{{ url('/about') }}">ABOUT</a></li>
        <li><a href="{{ url('/services') }}">SERVICE</a></li>
        <li><a href="{{ url('/promotions') }}">PROMOTION</a></li>
        <li><a href="{{ url('/works') }}">PORTFOLIO</a></li>
        <li><a href="{{ url('/contact') }}">CONTACT</a></li>
    </ul>
</nav>

{{--<section class="header-bar">--}}
    {{--<div id="logo">TANGLONG LOGO</div>--}}
    {{--<nav id="menu">--}}
        {{--<a href="{{ url('/') }}" class="home-btn menu-btn"><span class="hover-anim" data-hover="HOME">HOME</span></a>--}}
        {{--<a href="{{ url('/about') }}" class="about-btn menu-btn"><span class="hover-anim" data-hover="ABOUT">ABOUT</span></a>--}}
        {{--<a href="{{ url('/services') }}" class="service-btn menu-btn"><span class="hover-anim" data-hover="SERVICE">Service</span></a>--}}
        {{--<a href="{{ url('/promotions') }}" class="promo-btn menu-btn"><span class="hover-anim" data-hover="PROMOTION">PROMOTION</span></a>--}}
        {{--<a href="{{ url('/works') }}" class="portfolio-btn menu-btn"><span class="hover-anim" data-hover="PORTFOLIO">PORTFOLIO</span></a>--}}
        {{--<a href="{{ url('/contact') }}" class="contact-btn menu-btn"><span class="hover-anim" data-hover="CONTACT">CONTACT</span></a>--}}
    {{--</nav>--}}
    {{--<nav id="auth-menu">--}}
        {{--<a href="#" class="login-btn menu-btn"><span class="hover-anim" data-hover="简体中文">简体中文&nbsp;</span></a>--}}
    {{--</nav>--}}
{{--</section>--}}
<section id="header-bar">
    <div id="logo">TANGLONG LOGO</div>
    <nav id="menu">
        <a href="{{LL::getLocalizedURL(null, '/') }}" class="home-btn menu-btn">
            <span class="hover-anim" data-hover="{{trans('messages.HOME')}}">{{trans('messages.HOME')}}</span></a>
        <a href="{{LL::getLocalizedURL(null, 'about') }}" class="about-btn menu-btn">
            <span class="hover-anim" data-hover="{{trans('messages.ABOUT')}}">{{trans('messages.ABOUT')}}</span></a>
        <a href="{{LL::getLocalizedURL(null, 'services') }}" class="service-btn menu-btn">
            <span class="hover-anim" data-hover="{{trans('messages.SERVICE')}}">{{trans('messages.SERVICE')}}</span></a>
        <a href="{{LL::getLocalizedURL(null, 'promotions') }}" class="promo-btn menu-btn">
            <span class="hover-anim" data-hover="{{trans('messages.PROMOTION')}}">{{trans('messages.PROMOTION')}}</span></a>
        <a href="{{LL::getLocalizedURL(null, 'works') }}" class="portfolio-btn menu-btn">
            <span class="hover-anim" data-hover="{{trans('messages.PORTFOLIO')}}">{{trans('messages.PORTFOLIO')}}</span></a>
        <a href="{{LL::getLocalizedURL(null, 'contact') }}" class="contact-btn menu-btn">
            <span class="hover-anim" data-hover="{{trans('messages.CONTACT')}}">{{trans('messages.CONTACT')}}</span></a>
    </nav>
    <nav id="auth-menu">
        @if(LL::getCurrentLocale() == 'en')
            <a href="{{LL::getLocalizedURL('zh') }}" class="login-btn menu-btn"><span class="hover-anim" data-hover="{{trans('messages.LANG')}}">{{trans('messages.LANG')}}</span></a>
        @elseif(LL::getCurrentLocale() == 'zh')
            <a href="{{LL::getLocalizedURL('en') }}" class="login-btn menu-btn"><span class="hover-anim" data-hover="{{trans('messages.LANG')}}">{{trans('messages.LANG')}}</span></a>
        @endif
    </nav>
</section>

<!-- Swiper -->
<div class="swiper-promotion">
    {{--<h1>SUPER PROMOTION</h1>--}}
    <section id="summary">
        <h1>SUPER PROMOTION</h1>
    </section>
    <img class="pulp" src="/img/heart.gif" height="128" width="128">

    {{--<div class="swiper-wrapper">--}}
        {{--<div class="swiper-slide" style="background: url(/img/pmt1.jpg) no-repeat;background-position: center;">--}}
            {{--<img src="img/pmt1.jpg" alt=""/>--}}
        {{--</div>--}}
        {{--<div class="swiper-slide" style="background-image: url(/img/pmt2.jpg)">--}}
            {{--<img src="img/pmt2.jpg" alt=""/>--}}
        {{--</div>--}}
        {{--<div class="swiper-slide" style="background-image: url(/img/pmt3.jpg)">--}}
            {{--<img src="img/pmt1.jpg" alt=""/>--}}
        {{--</div>--}}
        {{--<div class="swiper-slide" style="background-image: url(/img/pmt4.jpg)">--}}
            {{--<img src="img/pmt2.jpg" alt=""/>--}}
        {{--</div>--}}
        {{--<div class="swiper-slide" style="background-image: url(/img/pmt5.jpg)">--}}
            {{--<img src="img/pmt1.jpg" alt=""/>--}}
        {{--</div>--}}
        {{--<div class="swiper-slide" style="background-image: url(/img/pmt6.jpg)">--}}
            {{--<img src="img/pmt2.jpg" alt=""/>--}}
        {{--</div>--}}

    {{--</div>--}}
    <!-- Add Pagination -->
    {{--<div class="swiper-pagination"></div>--}}
</div>

<div class="container-fluid promo">
    @foreach($promotions as $key => $promotion)
        <div class="item row">
            @if ($key%2 == 0)
                <img class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 prom-img"
                     src="/img/upload/{{ $promotion->imgUrl }}" alt="...">
                <div class="col-md-7 col-md-offset-1 col-sm-7 col-sm-offset-1 desc">
                    @else
                        <img class="col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-md-push-7 prom-img"
                             src="/img/upload/{{ $promotion->imgUrl }}" alt="...">
                        <div class="col-md-7 col-md-offset-1 col-sm-7 col-sm-offset-1 col-md-pull-4 desc">
                            @endif

                            <h1 class="title">{{ $promotion->title }}</h1>

                            <p class="price red">{{ $promotion->discount }}<span>% OFF</span>
                                <span>(Expire On: {{ date("F-d", strtotime($promotion->expiredate)) }})</span>
                            </p>
                            {{ $promotion->description }}
                        </div>
                </div>
                @endforeach
        </div>
        <!-- Swiper JS -->
        <script src="/js/swiper.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            //    var swiper = new Swiper('.swiper-promotion', {
            //        pagination: '.swiper-pagination',
            //        effect: 'coverflow',
            //        grabCursor: true,
            //        centeredSlides: true,
            //        slidesPerView: 'auto',
            //        autoplay: 1,
            //        autoplayDisableOnInteraction: false,
            //        loop : true,
            //        slidesPerView : 'auto',
            //        loopedSlides :6,
            //        speed: 3000,
            //        coverflow: {
            //            rotate: 50,
            //            stretch: 20,
            //            depth: 100,
            //            modifier: 1,
            //            slideShadows : false
            //        }
            //    });
            var swiper = new Swiper('.swiper-promotion', {
                pagination: '.swiper-pagination',
                paginationClickable: true,
                autoplay: 1,
                autoplayDisableOnInteraction: false,
                loop: true,
                slidesPerView: 'auto',
                loopedSlides: 6,
                speed: 3000

            });
        </script>
</body>
</html>