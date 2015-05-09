<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <title>Tang Long Design</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/headermenu.css"/>
    <link rel="stylesheet" type="text/css" href="/css/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/css/animate.css"/>
    {{--<link rel="stylesheet" type="text/css" href="/css/jquery.pagepiling.css"/>--}}
    <link type="text/css" href="/css/jplayer.pink.flag.css" rel="stylesheet"/>

    <link rel="stylesheet" type="text/css" href="/css/index.css"/>
    {{--audio start--}}
    <style>
        .jp-controls {
            width: 50%;
            background: transparent !important;
        }
        .jp-interface, .jp-audio {
            padding: 0 !important;
            border: none !important;
            background-color: transparent !important;
        }
        #jp_container_1 {
            position: absolute;
            top: 8px;
            right: -60px;
            z-index: 1000;
        }
        .jp-type-single .jp-play {
            background: transparent !important;
            text-indent: 0;
            border-radius: 50px;
            width: 45px !important;
            border: 3px solid #EEEEEE;
        }
        *:focus {
            outline: none !important;
        }
    </style>
    {{--audio end--}}

    <script src="/js/jquery-2.1.1.min.js"></script>
    {{--<script src="/js/jquery.pagepiling.min.js"></script>--}}
    <script type="text/javascript" src="/js/jquery.jplayer.min.js"></script>

    {{--{!! Html::script('/js/angular.min.js') !!}--}}
    {{--{!! Html::script('/js/index.js') !!}--}}
    <script type="text/javascript">
//        audio start
        $(document).ready(function () {
            $("#jquery_jplayer_1").jPlayer({
                ready: function () {
                    $(this).jPlayer("setMedia", { // Set the media
                        m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a"
                    }).jPlayer("play"); // Attempt to auto play the media
                },
                cssSelectorAncestor: "#jp_container_1",
                swfPath: "/js",
                supplied: "m4a, oga",
                useStateClassSkin: true,
                autoBlur: false,
                smoothPlayBar: true,
                keyEnabled: true,
                remainingDuration: true,
                toggleDuration: true
            }).jPlayer("play");
            $('.jp-play').click( function () {
                if ($('#jp_container_1').hasClass('jp-state-playing')) {
                    $(this).find('span.glyphicon').addClass('glyphicon-play').removeClass('glyphicon-pause');
                }
                else {
                    $(this).find('span.glyphicon').addClass('glyphicon-pause').removeClass('glyphicon-play');
                }
            });
        });
//        audio end

$(function () {
            var cw = $('.team-member').width();
            $('.team-member').css('height', 3 * cw / 4);

            $('#slide-menu-btn').click(function () {
                $('body').toggleClass('menu-active');
            });

    $('.popup').click(function(event) {
        var width  = 575,
                height = 400,
                left   = ($(window).width()  - width)  / 2,
                top    = ($(window).height() - height) / 2,
                url    = this.href,
                opts   = 'status=1' +
                        ',width='  + width  +
                        ',height=' + height +
                        ',top='    + top    +
                        ',left='   + left;

        window.open(url, 'twitter', opts);

        return false;
    });

        });


        //        FB start
        window.fbAsyncInit = function () {
            FB.init({
                appId: '469549633201488',
                xfbml: true,
                version: 'v2.3'
            });
        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "http://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        function facebookshare() {
            FB.ui({
                method: 'share',
                href: 'http://phplaravel-6964-15387-35548.cloudwaysapps.com/',
            }, function (response) {
            });
        }
        //        FB end


    </script>
    <script>
        window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return t;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
    </script>
</head>
{{--<body ng-app="app" ng-controller="MainCtrl">--}}
<body>
<div id="main">
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

    {{--audio start--}}
    <div id="jquery_jplayer_1"></div>
    <div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
        <div class="jp-type-single">
            <div class="jp-gui jp-interface">
                <div class="jp-controls">
                    <button type="button" class="btn btn-default jp-play">
                        <span class="glyphicon glyphicon-pause" style="color: white;"></span>
                    </button>
                    {{--<button class="jp-play" role="button" tabindex="0">play</button>--}}
                </div>
            </div>
        </div>
    </div>
    {{--audio end--}}
    <section id="slider">
        <div id="large-header" class="large-header"></div>
        <canvas id="demo-canvas"></canvas>
        <h1>Design Folk<span>Advertising Design Studio</span></h1>
        <h6>We dream, explore, create and craft progressive visual experiences</h6>
    </section>

    <section id="work">
        <div class="team-member">
            <a class="team-member-image"
               style="background: url('/img/index1.jpg') no-repeat center center;background-size: cover"></a>

            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image"
               style="background: url('/img/index2.jpg') no-repeat center center;background-size: cover"></a>

            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image"
               style="background: url('/img/index8.jpg') no-repeat center center;background-size: cover"></a>

            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image"
               style="background: url('/img/index10.jpg') no-repeat center center;background-size: cover"></a>

            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image"
               style="background: url('/img/index4.jpg') no-repeat center center;background-size: cover"></a>

            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image"
               style="background: url('/img/index7.jpg') no-repeat center center;background-size: cover"></a>

            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image"
               style="background: url('/img/index3.jpg') no-repeat center center;background-size: cover"></a>

            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image"
               style="background: url('/img/index5.jpeg') no-repeat center center;background-size: cover"></a>

            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image"
               style="background: url('/img/index9.jpg') no-repeat center center;background-size: cover"></a>

            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image"
               style="background: url('/img/index6.jpeg') no-repeat center center;background-size: cover"></a>

            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image"
               style="background: url('/img/index12.jpg') no-repeat center center;background-size: cover"></a>

            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image"
               style="background: url('/img/index13.jpg') no-repeat center center;background-size: cover"></a>

            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
    </section>
    <section id="client">
        <h1>Some Of Our Clients</h1>

        <div class="row">
            <div class="col col-xs-12 col-sm-6 col-md-3"
                 style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img
                        src="/img/client-unilever-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3"
                 style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img
                        src="/img/client-sharjahaiirport-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3"
                 style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img
                        src="/img/client-axiom-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3" style="border-bottom:1px dotted #cccccc"><img
                        src="/img/client-alissa-bw.png" style="display: inline;"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3"
                 style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img
                        src="/img/client-alattarji-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3"
                 style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img
                        src="/img/client-etisalatacademy-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3"
                 style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img
                        src="/img/client-fine-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3" style="border-bottom:1px dotted #cccccc"><img
                        src="/img/client-kimmco-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3" style="border-right:1px dotted #cccccc"><img
                        src="/img/client-aliel-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3" style="border-right:1px dotted #cccccc"><img
                        src="/img/client-namachemicals-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3" style="border-right:1px dotted #cccccc"><img
                        src="/img/client-gruposarralle-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3"><img src="/img/client-alkhoorigroup-bw.png"></div>
        </div>
    </section>
    <section class="svc-list" id="features">
        <h1>Our Services</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 svc wp2">
                        <div class="svc-icon blue">
                            <i class="glyphicon glyphicon-bed"></i>
                        </div>
                        <div class="svc-content">
                            <h1 class="subtitle">Lightbox Signboard</h1>
                            <p>Lightbox signages are one of the best methods of displaying attractive images, logos, names and designs. They promote your business effectively and are ideal to illuminate advertisement or logo. </p>
                            <a href="{{ url('services') }}" class="read-more-btn blue">Read More <i class="blue fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 svc wp2 delay-05s">
                        <div class="svc-icon yellow">
                            <i class="fa fa-lightbulb-o"></i>
                        </div>
                        <div class="svc-content">
                            <h1 class="subtitle">LED Signboard</h1>
                            <p>With LED-Light getting your message across, you can easily attract passersby into your shop, thus leading to more profits. Our LED-Light now for daily specials, promotions and other significant events in your store.</p>
                            <a href="{{ url('services') }}" class="yellow read-more-btn">Read More <i class="yellow fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 svc wp2 delay-1s">
                        <div class="svc-icon pink">
                            <i class="fa fa-cubes"></i>
                        </div>
                        <div class="svc-content">
                            <h1 class="subtitle">3D Wording</h1>
                            <p>Our metal letterbox signage offers a high-quality, durable finish that is easy to clean and maintain. We understand that a well-designed letterbox can make a great visual impact on your business.</p>
                            <a href="{{ url('services') }}" class="pink read-more-btn">Read More <i class="pink fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 svc wp2 delay-15s">
                        <div class="svc-icon red">
                            <i class="fa fa-flash"></i>
                        </div>
                        <div class="svc-content">
                            <h1 class="subtitle">Flashing Sign</h1>
                            <p>Flashing sign contains a sequential flashing light source where the period of time of illumination is equal to the period of non-illumination, and is used solely to attract attention in a non-informative way.</p>
                            <a href="{{ url('services') }}" class="red read-more-btn">Read More <i class="red fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 svc wp2 delay-2s">
                        <div class="svc-icon purple">
                            <i class="fa fa-tags"></i>
                        </div>
                        <div class="svc-content">
                            <h1 class="subtitle">Banner & Namecard</h1>
                            <p>We brings to you an amazing collection of customized business cards, name cards and visiting cards printing in Singapore.</p>
                            <a href="{{ url('services') }}" class="purple read-more-btn">Read More <i class="purple fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 svc wp2 delay-25s">
                        <div class="svc-icon green">
                            <i class="fa fa-newspaper-o"></i>
                        </div>
                        <div class="svc-content">
                            <h1 class="subtitle">Menu & Flyer</h1>
                            <p>We provide individually designed concepts and style for your menu and flyer. Our team will ensure that it turns out looking fantastic every time.</p>
                            <a href="{{ url('services') }}" class="green read-more-btn">Read More <i class="green fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="row">
            <div class="col-md-8  col-md-offset-2" id="contact-us">
                <h2>MADE WITH LOVE IN TANGLONG DESIGN, SG</h2>

                <p>Feel free to contact us with any questions, to provide some feedback or if you just want to say
                    hello!</p>

                <p><a href="">tanglong806@gmail.com</a></p>

                <ul class="list-inline banner-social-buttons">
                    <li><a
                                href="https://twitter.com/intent/user?user_id=3189394639"
                                class="twitter popup btn btn-default btn-lg">
                            <i class="fa fa-twitter fa-fw"></i>
                            <span class="">TWITTER</span>
                        </a></li>
                    {{--<li><a href="" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="">FACEBOOK</span></a>--}}
                    {{--</li>--}}
                    <li><a onclick="facebookshare();" class="btn btn-default btn-lg"><i
                                    class="fa fa-facebook fa-fw"></i> <span class="">FACEBOOK</span></a></li>
                    {{--<li><a ng-click="shareFB()" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="">FACEBOOK</span></a></li>--}}
                    <li><a href="" class="btn btn-default btn-lg"><i class="fa fa-rss fa-fw"></i> <span
                                    class="">BLOG</span></a></li>
                </ul>
                <p class="copy">© 2014 TANGLONG DESIGN</p>
            </div>
        </div>
    </section>
</div>
<script src="/js/rAF.js"></script>
<script src="/js/demo-2.js"></script>
<script src="/js/waypoints.min.js"></script>
<script src="/js/scripts-min.js"></script>
</body>
</html>
