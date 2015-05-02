<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple icons</title>
    <link rel="stylesheet" type="text/css" href="css/contact.css" />

    {{--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>--}}
    {{--<script>--}}
        {{--function initialize() {--}}
            {{--var mapOptions = {--}}
                {{--zoom: 16,--}}
                {{--center: new google.maps.LatLng(1.355261,103.8798769)--}}
            {{--}--}}
            {{--var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);--}}

            {{--var image = 'img/pin.png';--}}
            {{--var myLatLng = new google.maps.LatLng(1.355261,103.8798769);--}}
            {{--var beachMarker = new google.maps.Marker({--}}
                {{--position: myLatLng,--}}
                {{--map: map,--}}
                {{--icon: image--}}
            {{--});--}}
        {{--}--}}

        {{--google.maps.event.addDomListener(window, 'load', initialize);--}}
    {{--</script>--}}
    {!! Html::script('js/angular.min.js') !!}
    {!! Html::script('js/works.js') !!}
    <script>
        var emailUrl = "{{ URL('/contact/email') }}";
    </script>
</head>
<body  ng-app="app" ng-controller="MainCtrl">
{{--<section class="header-bar">--}}
    {{--<div id="logo">TANGLONG LOGO</div>--}}
    {{--<nav id="menu">--}}
        {{--<a href="index.html" class="home-btn menu-btn"><span class="hover-anim" data-hover="HOME">HOME</span></a>--}}
        {{--<a href="about.html" class="about-btn menu-btn"><span class="hover-anim" data-hover="ABOUT">ABOUT</span></a>--}}
        {{--<a href="service.html" class="service-btn menu-btn"><span class="hover-anim" data-hover="SERVICE">Service</span></a>--}}
        {{--<a href="#" class="service-btn menu-btn"><span class="hover-anim" data-hover="PROMOTION">PROMOTION</span></a>--}}
        {{--<a href="portfolio.html" class="portfolio-btn menu-btn"><span class="hover-anim" data-hover="PORTFOLIO">PORTFOLIO</span></a>--}}
        {{--<a href="contact.html" class="contact-btn menu-btn"><span class="hover-anim" data-hover="CONTACT">CONTACT</span></a>--}}
    {{--</nav>--}}
    {{--<nav id="auth-menu">--}}
        {{--<a href="#" class="login-btn menu-btn"><span class="hover-anim" data-hover="简体中文">简体中文</span></a>--}}
    {{--</nav>--}}
{{--</section>--}}
@include('common.top-menu')


<section id="summary">
    <h1>Want to know more?</h1>
    <p class="subheader">
        We are available to discuss your requirement.
    </p>
</section>

<section id="contact-info">
    <div id="map-wraper">
        <p id="address">806 Upper Serangoon Road, S'534674</p>
        <div id="dummy"></div>
        <div id="map-canvas"></div>
    </div>
    <div id="contact">
        <div>
            <div class="pastille-picto mail"><div class="picto-mail"></div></div>
            <p>tanglong806@gmail.com</p>
        </div>
        <div>
            <div class="pastille-picto tel"><div class="picto-tel"></div></div>
            <p>+65 6282 8253</p>
        </div>
    </div>
</section>

<section id="form-sec">
    <h1>Want to know more?</h1>
    <form id="contact-form" ng-submit="submitContact()">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input id="name-input" type="text" name="name" value="" placeholder="Your name" required ng-model="formData.name" class="text">
        <input id="email-input" name="email" value="" placeholder="Your email" type="email" ng-model="formData.email" class="text">
        <textarea name="message" rows="10" placeholder="Put your message here" required ng-model="formData.message" class="message"></textarea>
        <input id="submit" type="submit" value="Submit">
        {{--@{{ formData.name }}--}}
        {{--@{{ formData.email }}--}}
        {{--@{{ formData.msg }}--}}
    </form>
    <p id="copy">
        © 2014 TANGLONG DESIGN
    </p>
</section>
</body>
</html>


{{--**********************************************************************************************--}}
{{--test email--}}
{{--@extends('layout.master')--}}
{{--@section('head-js')--}}
    {{--{!! Html::script('js/angular.min.js') !!}--}}
   {{--{!! Html::script('js/works.js') !!}--}}
    {{--<script>--}}
        {{--var emailUrl = "{{ URL('/contact/email') }}";--}}
    {{--</script>--}}
{{--@stop--}}

{{--@section('content')--}}
    {{--<a ng-click="testEmail()" class="btn btn-primary">email me</a>--}}
    {{--<a href="{{ URL('/contact/email') }}" class="btn btn-primary">email me</a>--}}

    {{--@include('forms.contactus')--}}

{{--@stop--}}