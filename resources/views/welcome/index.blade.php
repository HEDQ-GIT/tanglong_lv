<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <title>Tang Long Design</title>
    <link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/headermenu.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/index.css" />

    <script src="js/jquery-2.1.1.min.js"></script>
    {{--{!! Html::script('js/angular.min.js') !!}--}}
    {{--{!! Html::script('js/index.js') !!}--}}
    <script type="text/javascript">
        $(function () {
            var cw = $('.team-member').width();
            $('.team-member').css('height', 3 * cw / 4);

            $('#slide-menu-btn').click(function(){
                $('body').toggleClass('menu-active');
            });
        });




//        FB start
        window.fbAsyncInit = function() {
            FB.init({
                appId      : '469549633201488',
                xfbml      : true,
                version    : 'v2.3'
            });
        };

        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "http://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        function facebookshare(){
            FB.ui({
                method: 'share',
                href: 'http://phplaravel-6964-15387-35548.cloudwaysapps.com/',
            }, function(response){});
        }
        //        FB end



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
            <a href="{{ url('/') }}" class="home-btn menu-btn"><span class="hover-anim" data-hover="HOME">HOME</span></a>
            <a href="{{ url('/about') }}" class="about-btn menu-btn"><span class="hover-anim" data-hover="ABOUT">ABOUT</span></a>
            <a href="{{ url('/services') }}" class="service-btn menu-btn"><span class="hover-anim" data-hover="SERVICE">Service</span></a>
            <a href="{{ url('/promotions') }}" class="promo-btn menu-btn"><span class="hover-anim" data-hover="PROMOTION">PROMOTION</span></a>
            <a href="{{ url('/works') }}" class="portfolio-btn menu-btn"><span class="hover-anim" data-hover="PORTFOLIO">PORTFOLIO</span></a>
            <a href="{{ url('/contact') }}" class="contact-btn menu-btn"><span class="hover-anim" data-hover="CONTACT">CONTACT</span></a>
        </nav>
        <nav id="auth-menu">
            <a href="#" class="login-btn menu-btn"><span class="hover-anim" data-hover="简体中文">简体中文&nbsp;</span></a>
        </nav>
    </section>

    <section id="slider">
        <div id="large-header" class="large-header"></div>
        <canvas id="demo-canvas"></canvas>
        <h1>Design Folk<span>Advertising Design Studio</span></h1>
        <h6>We dream, explore, create and craft progressive visual experiences</h6>
    </section>

    <section id="work">
        <div class="team-member">
            <a class="team-member-image" style="background-image: url('http://static.wix.com/media/1f3c0f_fae86a70261f4f80a101aef4742ec621.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>
            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image" style="background-image: url('http://static.wix.com/media/1f3c0f_0c113a44ca0f4c6fa90ff62c62d62c0f.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>
            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image" style="background-image: url('http://static.wix.com/media/1f3c0f_50532853063549acb4b52be5dd45adf1.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>
            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image" style="background-image: url('http://static.wix.com/media/84770f_2888228f185046ac91588bf8baf4b0b3.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>
            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image" style="background-image: url('http://static.wix.com/media/84770f_2888228f185046ac91588bf8baf4b0b3.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>
            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image" style="background-image: url('http://static.wix.com/media/1f3c0f_05f1b15b043d45ee90b8c2e14dc5e7f2.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>
            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image" style="background-image: url('http://static.wix.com/media/1f3c0f_5db437a2da444f55a0197e4854893b8c.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>
            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image" style="background-image: url('http://static.wix.com/media/1f3c0f_dc8dc5eb7579445ea959d5c007848469.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>
            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image" style="background-image: url('http://static.wix.com/media/1f3c0f_fae86a70261f4f80a101aef4742ec621.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>
            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image" style="background-image: url('http://static.wix.com/media/1f3c0f_0c113a44ca0f4c6fa90ff62c62d62c0f.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>
            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image" style="background-image: url('http://static.wix.com/media/1f3c0f_50532853063549acb4b52be5dd45adf1.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>
            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
        <div class="team-member">
            <a class="team-member-image" style="background-image: url('http://static.wix.com/media/84770f_2888228f185046ac91588bf8baf4b0b3.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>
            <div class="team-member-overlay">
                <p class="image-title">Image description here</p>
            </div>
        </div>
    </section>
    <section id="client">
        <h1>Some Of Our Clients</h1>
        <div class="row">
            <div class="col col-xs-12 col-sm-6 col-md-3" style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img src="img/client-unilever-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3" style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img src="img/client-sharjahaiirport-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3" style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img src="img/client-axiom-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3" style="border-bottom:1px dotted #cccccc"><img src="img/client-alissa-bw.png" style="display: inline;"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3" style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img src="img/client-alattarji-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3" style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img src="img/client-etisalatacademy-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3" style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img src="img/client-fine-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3" style="border-bottom:1px dotted #cccccc"><img src="img/client-kimmco-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3" style="border-right:1px dotted #cccccc"><img src="img/client-aliel-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3" style="border-right:1px dotted #cccccc"><img src="img/client-namachemicals-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3" style="border-right:1px dotted #cccccc"><img src="img/client-gruposarralle-bw.png"></div>
            <div class="col col-xs-12 col-sm-6 col-md-3"><img src="img/client-alkhoorigroup-bw.png"></div>
        </div>
    </section>
    <section class="svc-list" id="features">
        <h1>Our Services</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-4 svc wp2">
                        <div class="svc-icon blue">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="svc-content">
                            <h1 class="subtitle">Responsive</h1>
                            <p>Built using HTML5/CSS3 and jQuery, and built using one of the world's most powerful CSS frameworks available, Bootstrap.</p>
                            <a href="http://tympanus.net/codrops/?p=22554" class="read-more-btn blue">Read More <i class="blue fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 svc wp2 delay-05s">
                        <div class="svc-icon yellow">
                            <i class="fa fa-flash"></i>
                        </div>
                        <div class="svc-content">
                            <h1 class="subtitle">Multi-Purpose</h1>
                            <p>Perfect if you run your own start-up, product or service. Boxify can showcase your business converting your visits to income.</p>
                            <a href="http://tympanus.net/codrops/?p=22554" class="yellow read-more-btn">Read More <i class="yellow fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 svc wp2 delay-1s">
                        <div class="svc-icon pink">
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="svc-content">
                            <h1 class="subtitle">Absolutely Free</h1>
                            <p>As aways, download Boxify for free exclusively from Codrops. If you love Boxify and want to thank me, simply <a href="http://peterfinlan.com/">buy me a beer</a>. </p>
                            <a href="http://tympanus.net/codrops/?p=22554" class="pink read-more-btn">Read More <i class="pink fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 svc wp2 delay-15s">
                        <div class="svc-icon red">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <div class="svc-content">
                            <h1 class="subtitle">Responsive</h1>
                            <p>Built using HTML5/CSS3 and jQuery, and built using one of the world's most powerful CSS frameworks available, Bootstrap.</p>
                            <a href="http://tympanus.net/codrops/?p=22554" class="red read-more-btn">Read More <i class="red fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 svc wp2 delay-2s">
                        <div class="svc-icon purple">
                            <i class="fa fa-flash"></i>
                        </div>
                        <div class="svc-content">
                            <h1 class="subtitle">Multi-Purpose</h1>
                            <p>Perfect if you run your own start-up, product or service. Boxify can showcase your business converting your visits to income.</p>
                            <a href="http://tympanus.net/codrops/?p=22554" class="purple read-more-btn">Read More <i class="purple fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 svc wp2 delay-25s">
                        <div class="svc-icon green">
                            <i class="fa fa-heart"></i>
                        </div>
                        <div class="svc-content">
                            <h1 class="subtitle">Absolutely Free</h1>
                            <p>As aways, download Boxify for free exclusively from Codrops. If you love Boxify and want to thank me, simply <a href="http://peterfinlan.com/">buy me a beer</a>. </p>
                            <a href="http://tympanus.net/codrops/?p=22554" class="green read-more-btn">Read More <i class="green fa fa-chevron-circle-right"></i></a>
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

                <p><a href="">contact@tanglong.com</a></p>

                <ul class="list-inline banner-social-buttons">
                    <li><a href="" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="">TWITTER</span></a>
                    </li>
                    {{--<li><a href="" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="">FACEBOOK</span></a>--}}
                    {{--</li>--}}
                    <li><a onclick="facebookshare();" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="">FACEBOOK</span></a></li>
                    {{--<li><a ng-click="shareFB()" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="">FACEBOOK</span></a></li>--}}
                    <li><a href="" class="btn btn-default btn-lg"><i class="fa fa-rss fa-fw"></i> <span class="">BLOG</span></a></li>
                </ul>
                <p class="copy">© 2014 TANGLONG DESIGN</p>
            </div>
        </div>
    </section>
</div>
<script src="js/rAF.js"></script>
<script src="js/demo-2.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/scripts-min.js"></script>
</body>
</html>
