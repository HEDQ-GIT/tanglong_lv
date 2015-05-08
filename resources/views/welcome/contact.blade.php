<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Contact TangLong</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/css/headermenu.css" />
    <link rel="stylesheet" type="text/css" href="/css/contact.css" />
    <script src="/js/jquery-2.1.1.min.js"></script>

    {!! Html::script('/js/angular.min.js') !!}
    {!! Html::script('/js/works.js') !!}

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
        $(function () {
            $('#slide-menu-btn').click(function(){

                $('body').toggleClass('menu-active');
            });
        });

        var emailUrl = '{{url("contact/email/")}}';
        function initialize() {
            var mapOptions = {
                zoom: 16,
                center: new google.maps.LatLng(1.355261,103.8798769)
            }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            var image = '/img/pin.png';
            var myLatLng = new google.maps.LatLng(1.355261,103.8798769);
            var beachMarker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                icon: image
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body ng-app="app" ng-controller="MainCtrl">
<nav id="slide-menu">
    <a id="slide-menu-btn" class="glyphicon glyphicon-align-justify"></a>
    <ul>
        <li><a href="{{ url('/') }}">HOME</a></li>
        <li><a href="{{ url('about') }}">ABOUT</a></li>
        <li><a href="{{ url('services') }}">SERVICE</a></li>
        <li><a href="{{ url('promotions') }}">PROMOTION</a></li>
        <li><a href="{{ url('works') }}">PORTFOLIO</a></li>
        <li><a href="{{ url('contact') }}">CONTACT</a></li>
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
        <input id="email-input" name="email" value="" placeholder="Your email" required type="email" ng-model="formData.email" class="text">
        <textarea name="message" rows="10" placeholder="Put your message here" required ng-model="formData.message" class="message"></textarea>
        <input id="submit" type="submit" value="Submit">
        {{--@{{ formData.name }}--}}
        {{--@{{ formData.email }}--}}
        {{--@{{ formData.message }}--}}
    </form>
    <p id="copy">
        © 2014 TANGLONG DESIGN
    </p>
</section>
</body>
</html>
