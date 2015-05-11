@extends('layout.master')

@section('title')
    <title>TangLong Works</title>
    @stop
@section('css')
    {!! Html::style("css/headermenu.css") !!}
    {!! Html::style("css/works.css") !!}
    {!! Html::style("css/magnific-popup.css") !!}
    {!! Html::style("css/lightbox.css") !!}
    {{--{!! Html::style("css/aboutcomy.css") !!}--}}
    {!! Html::style("css/about.css") !!}

@stop

@section('head-js')
    {!! Html::script('js/magnific-popup.js') !!}
    {!! Html::script('js/works.js') !!}
    {!! Html::script('js/responsiveslides.min.js') !!}

    <script>
        var worksUrl = "{{ URL('works/getWorks') }}";
        var workDetailUrl = "{{ URL('works/getWorkDetails') }}";

        $(function () {
            $(".rslides").responsiveSlides({
                speed: 600
            });
        });
    </script>
@stop

@section('content')
    <!-- header start -->
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


    <ul id="slider" class="rslides">
        <li>
            <div class="image" style="background: url('/img/slider3_bg.jpg') no-repeat center center"/>
            <h1>Tang Long Design<span>Advertising Design Studio</span></h1>
            <h6>At Tang Long Design, each project is considered new and developed with passion!</h6>
        </li>
        {{--<li>--}}
            {{--<div class="image" style="background-image: url('img/demo-1-bg.jpg');"/>--}}
            {{--<h1>Tang Long Design<span>Advertising Design Studio</span></h1>--}}
            {{--<h6>At Tang Long Design, each project is considered new and developed with passion!</h6>--}}
        {{--</li>--}}
        <li>
            <div class="image" style="background: url('/img/slider_2.jpg') no-repeat center center;background-size: cover"/>
            <h1>Tang Long Design<span>Advertising Design Studio</span></h1>
            <h6>At Tang Long Design, each project is considered new and developed with passion!</h6>
        </li>
    </ul>
    <!-- header end -->
    <!-- filter start -->
    <div class="main-filter">
        <div class="container-fluid filter-container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="">
                            <a class="filter filter-hover" ng-init="getImgUrl(0)" ng-click="getImgUrl(0)">Lightbox
                                {{--<span class="badge pull-right">80</span>--}}
                            </a>
                        </li>
                        <li class="">
                            <a class="filter" ng-click="getImgUrl(1)">LED
                                {{--<span class="badge pull-right">25</span>--}}
                            </a>
                        </li>
                        <li class="">
                            <a class="filter" ng-click="getImgUrl(2)">3D Wording
                                {{--<span class="badge pull-right">15</span>--}}
                            </a>
                        </li>
                        <li class="">
                            <a class="filter" ng-click="getImgUrl(3)">Flashing
                                {{--<span class="badge pull-right">15</span>--}}
                            </a>
                        </li>
                        <li class="">
                            <a class="filter" ng-click="getImgUrl(4)">Banner & Namecard
                                {{--<span class="badge pull-right">13</span>--}}
                            </a>
                        </li>
                        <li class="">
                            <a class="filter" ng-click="getImgUrl(5)">Menu & Flyer
                                {{--<span class="badge pull-right">12</span>--}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- filter end -->
    <!-- content start -->
    <div class="main-content">
        <div class="container-fluid grid-wrap">
            <div class="row grid swipe-down">
                <div class="col-sm-6 col-md-3 content-col" ng-repeat="imgUrl in imgUrls">
                    <div class="thumbnail">
                        <a href="javascript:void(0);" ng-click="getWorkDetail(imgUrl)" class="work-img">
                        {{--<a href=@{{imgUrl}} class="work-img" onclick="test()">--}}
                        {{--<a href="javascript:void(0);" class="work-img" onclick="test()">--}}
                        <img src=@{{imgUrl}} alt="..." style="width:640px;height: 300px;">

                        <div class="caption content-caption">
                            <h3>Thumbnail label</h3>
                            <p>Thumbnail labelThumbnail labelThumbnail labelThumbnail labelThumbnail label</p>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content end -->
    <section id="copy">
        © 2014 TANGLONG DESIGN
    </section>
@stop