<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8"/>
    <title>Tang Long Design</title>
    <link rel="shortcut icon" href="../favicon.ico">

    {!! Html::style("css/headermenu.css") !!}
    {!! Html::style("css/normalize.css") !!}
    {!! Html::style("css/bootstrap.min.css") !!}
    {!! Html::style("css/animate.css") !!}
    {!! Html::style("css/index.css") !!}
    {!! Html::style("css/bootstrap.min.css") !!}
    {!! Html::style("css/animate.css") !!}

    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.0.6/css/swiper.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.0.6/js/swiper.min.js"></script>
    <script src="js/swiper.animate1.0.2.min.js"></script>
    {!! Html::script('js/angular.min.js') !!}
    <script type="text/javascript">
        $(function () {
            var b3ani = true;
            var b4ani = true;

            var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                speed: 800,
                direction: 'vertical',
                slidesPerView: 1,
                paginationClickable: true,
                mousewheelControl: true,
                onInit: function (swiper) {
                    swiperAnimateCache(swiper);
                },
                onSlideChangeStart: function (swiper) {
                    switch (swiper.activeIndex) {
                        case 3:
                            if (b3ani) {
                                b3ani = false;
                                swiperAnimate(swiper);
                                $('.fadein').removeClass('ani');
                            }
                            break;
                        case 4:
                            if (b4ani) {
                                b4ani = false;
                                swiperAnimate(swiper);
                            }
                            break;
                    }
                }
            });
            var cw = $('.team-member').width();
            $('.team-member').css('height', 3 * cw / 4);
        });
    </script>
</head>
<body>
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            @include('common.top-menu')
            <section id="slider">
                <div id="large-header" class="large-header"></div>
                <canvas id="demo-canvas"></canvas>
                <!--<h1>Design Folk<span>Advertising Design Studio</span></h1>-->
                <!--<h6>We dream, explore, create and craft progressive visual experiences</h6>-->
                <!--<a href="javascript" class="btn btn-primary" id="enter">TANG LONG</a>-->
                {{--<a href="javascript:void(0);" onclick="swiper.slideNext(false);" id="enter" role="button">FIND OUT--}}
                {{--MORE</a>--}}
                <span class='line'></span>
            </section>
        </div>
        <div class="swiper-slide">
            <section id="work">
                <div class="team-member">
                    <a class="team-member-image"
                       style="background-image: url('http://static.wix.com/media/1f3c0f_fae86a70261f4f80a101aef4742ec621.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>

                    <div class="team-member-overlay">
                        <p class="image-title">Image description here</p>
                    </div>
                </div>
                <div class="team-member">
                    <a class="team-member-image"
                       style="background-image: url('http://static.wix.com/media/1f3c0f_0c113a44ca0f4c6fa90ff62c62d62c0f.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>

                    <div class="team-member-overlay">
                        <p class="image-title">Image description here</p>
                    </div>
                </div>
                <div class="team-member">
                    <a class="team-member-image"
                       style="background-image: url('http://static.wix.com/media/1f3c0f_50532853063549acb4b52be5dd45adf1.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>

                    <div class="team-member-overlay">
                        <p class="image-title">Image description here</p>
                    </div>
                </div>
                <div class="team-member">
                    <a class="team-member-image"
                       style="background-image: url('http://static.wix.com/media/84770f_2888228f185046ac91588bf8baf4b0b3.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>

                    <div class="team-member-overlay">
                        <p class="image-title">Image description here</p>
                    </div>
                </div>
                <div class="team-member">
                    <a class="team-member-image"
                       style="background-image: url('http://static.wix.com/media/84770f_2888228f185046ac91588bf8baf4b0b3.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>

                    <div class="team-member-overlay">
                        <p class="image-title">Image description here</p>
                    </div>
                </div>
                <div class="team-member">
                    <a class="team-member-image"
                       style="background-image: url('http://static.wix.com/media/1f3c0f_05f1b15b043d45ee90b8c2e14dc5e7f2.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>

                    <div class="team-member-overlay">
                        <p class="image-title">Image description here</p>
                    </div>
                </div>
                <div class="team-member">
                    <a class="team-member-image"
                       style="background-image: url('http://static.wix.com/media/1f3c0f_5db437a2da444f55a0197e4854893b8c.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>

                    <div class="team-member-overlay">
                        <p class="image-title">Image description here</p>
                    </div>
                </div>
                <div class="team-member">
                    <a class="team-member-image"
                       style="background-image: url('http://static.wix.com/media/1f3c0f_dc8dc5eb7579445ea959d5c007848469.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>

                    <div class="team-member-overlay">
                        <p class="image-title">Image description here</p>
                    </div>
                </div>
                <div class="team-member">
                    <a class="team-member-image"
                       style="background-image: url('http://static.wix.com/media/1f3c0f_fae86a70261f4f80a101aef4742ec621.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>

                    <div class="team-member-overlay">
                        <p class="image-title">Image description here</p>
                    </div>
                </div>
                <div class="team-member">
                    <a class="team-member-image"
                       style="background-image: url('http://static.wix.com/media/1f3c0f_0c113a44ca0f4c6fa90ff62c62d62c0f.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>

                    <div class="team-member-overlay">
                        <p class="image-title">Image description here</p>
                    </div>
                </div>
                <div class="team-member">
                    <a class="team-member-image"
                       style="background-image: url('http://static.wix.com/media/1f3c0f_50532853063549acb4b52be5dd45adf1.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>

                    <div class="team-member-overlay">
                        <p class="image-title">Image description here</p>
                    </div>
                </div>
                <div class="team-member">
                    <a class="team-member-image"
                       style="background-image: url('http://static.wix.com/media/84770f_2888228f185046ac91588bf8baf4b0b3.jpg_srz_319_239_75_22_0.5_1.2_75_jpg_srz');"></a>

                    <div class="team-member-overlay">
                        <p class="image-title">Image description here</p>
                    </div>
                </div>
            </section>
        </div>
        <div class="swiper-slide">
            <section id="client">
                <h1>Some Of Our Clients</h1>

                <div class="container-fluid">
                    <div class="row">
                        <div class="col col-xs-12 col-sm-6 col-md-3"
                             style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img
                                    src="img/client-unilever-bw.png"></div>
                        <div class="col col-xs-12 col-sm-6 col-md-3"
                             style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img
                                    src="img/client-sharjahaiirport-bw.png"></div>
                        <div class="col col-xs-12 col-sm-6 col-md-3"
                             style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img
                                    src="img/client-axiom-bw.png"></div>
                        <div class="col col-xs-12 col-sm-6 col-md-3" style="border-bottom:1px dotted #cccccc"><img
                                    src="img/client-alissa-bw.png" style="display: inline;"></div>
                        <div class="col col-xs-12 col-sm-6 col-md-3"
                             style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img
                                    src="img/client-alattarji-bw.png"></div>
                        <div class="col col-xs-12 col-sm-6 col-md-3"
                             style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img
                                    src="img/client-etisalatacademy-bw.png"></div>
                        <div class="col col-xs-12 col-sm-6 col-md-3"
                             style="border-right:1px dotted #cccccc;border-bottom:1px dotted #cccccc"><img
                                    src="img/client-fine-bw.png"></div>
                        <div class="col col-xs-12 col-sm-6 col-md-3" style="border-bottom:1px dotted #cccccc"><img
                                    src="img/client-kimmco-bw.png"></div>
                        <div class="col col-xs-12 col-sm-6 col-md-3" style="border-right:1px dotted #cccccc"><img
                                    src="img/client-aliel-bw.png"></div>
                        <div class="col col-xs-12 col-sm-6 col-md-3" style="border-right:1px dotted #cccccc"><img
                                    src="img/client-namachemicals-bw.png"></div>
                        <div class="col col-xs-12 col-sm-6 col-md-3" style="border-right:1px dotted #cccccc"><img
                                    src="img/client-gruposarralle-bw.png"></div>
                        <div class="col col-xs-12 col-sm-6 col-md-3"><img src="img/client-alkhoorigroup-bw.png"></div>
                    </div>
                </div>
            </section>
        </div>
        <div class="swiper-slide">
            <section class="svc-list" id="features">
                <h1>Our Services</h1>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4 fadein ani" swiper-animate-effect="fadeInDown"
                                 swiper-animate-duration="2s" swiper-animate-delay="0.3s">
                                <div class="svc-icon blue">
                                    <i class="fa fa-desktop"></i>
                                </div>
                                <div class="svc-content">
                                    <h1 class="subtitle">Responsive</h1>

                                    <p>Built using HTML5/CSS3 and jQuery, and built using one of the world's most
                                        powerful
                                        CSS
                                        frameworks available, Bootstrap.</p>
                                    <a href="http://tympanus.net/codrops/?p=22554" class="read-more-btn blue">Read More
                                        <i
                                                class="blue fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4 fadein ani" swiper-animate-effect="fadeInDown"
                                 swiper-animate-duration="1.5s" swiper-animate-delay="0.8s">

                                <div class="svc-icon yellow">
                                    <i class="fa fa-flash"></i>
                                </div>
                                <div class="svc-content">
                                    <h1 class="subtitle">Multi-Purpose</h1>

                                    <p>Perfect if you run your own start-up, product or service. Boxify can showcase
                                        your
                                        business converting your visits to income.</p>
                                    <a href="http://tympanus.net/codrops/?p=22554" class="yellow read-more-btn">Read
                                        More <i
                                                class="yellow fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4 fadein ani" swiper-animate-effect="fadeInDown"
                                 swiper-animate-duration="1.8s" swiper-animate-delay="1s">

                                <div class="svc-icon pink">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="svc-content">
                                    <h1 class="subtitle">Absolutely Free</h1>

                                    <p>As aways, download Boxify for free exclusively from Codrops. If you love Boxify
                                        and
                                        want
                                        to thank me, simply <a href="http://peterfinlan.com/">buy me a beer</a>. </p>
                                    <a href="http://tympanus.net/codrops/?p=22554" class="pink read-more-btn">Read More
                                        <i
                                                class="pink fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4 fadein ani" swiper-animate-effect="fadeInUp"
                                 swiper-animate-duration="2s" swiper-animate-delay="0.3s">

                                <div class="svc-icon red">
                                    <i class="fa fa-desktop"></i>
                                </div>
                                <div class="svc-content">
                                    <h1 class="subtitle">Responsive</h1>

                                    <p>Built using HTML5/CSS3 and jQuery, and built using one of the world's most
                                        powerful
                                        CSS
                                        frameworks available, Bootstrap.</p>
                                    <a href="http://tympanus.net/codrops/?p=22554" class="red read-more-btn">Read More
                                        <i
                                                class="red fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4 fadein ani" swiper-animate-effect="fadeInUp"
                                 swiper-animate-duration="1.5s" swiper-animate-delay="0.8s">

                                <div class="svc-icon purple">
                                    <i class="fa fa-flash"></i>
                                </div>
                                <div class="svc-content">
                                    <h1 class="subtitle">Multi-Purpose</h1>

                                    <p>Perfect if you run your own start-up, product or service. Boxify can showcase
                                        your
                                        business converting your visits to income.</p>
                                    <a href="http://tympanus.net/codrops/?p=22554" class="purple read-more-btn">Read
                                        More <i
                                                class="purple fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-md-4 fadein ani" swiper-animate-effect="fadeInUp"
                                 swiper-animate-duration="1.8s" swiper-animate-delay="1s">

                                <div class="svc-icon green">
                                    <i class="fa fa-heart"></i>
                                </div>
                                <div class="svc-content">
                                    <h1 class="subtitle">Absolutely Free</h1>

                                    <p>As aways, download Boxify for free exclusively from Codrops. If you love Boxify
                                        and
                                        want
                                        to thank me, simply <a href="http://peterfinlan.com/">buy me a beer</a>. </p>
                                    <a href="http://tympanus.net/codrops/?p=22554" class="green read-more-btn">Read More
                                        <i
                                                class="green fa fa-chevron-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="swiper-slide">
            <section id="contact">
                <div class="row">
                    <div class="col-md-8  col-md-offset-2" id="contact-us">
                        <h2 class="ani" swiper-animate-effect="zoomIn" swiper-animate-duration="1.5s"
                            swiper-animate-delay="0.5s">
                            MADE WITH LOVE IN TANGLONG DESIGN, SG</h2>

                        <p>Feel free to contact us with any questions, to provide some feedback or if you just want to
                            say
                            hello!</p>

                        <p><a href="">contact@tanglong.com</a></p>

                        <ul class="list-inline banner-social-buttons">
                            <li><a href="" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span
                                            class="">TWITTER</span></a>
                            </li>
                            <li><a href="" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span
                                            class="">FACEBOOK</span></a>
                            </li>
                            <li><a href="" class="btn btn-default btn-lg"><i class="fa fa-rss fa-fw"></i> <span
                                            class="">BLOG</span></a></li>
                        </ul>
                        <p class="copy">© 2014 TANGLONG DESIGN</p>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script src="js/rAF.js"></script>
<script src="js/canvas-pp.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/scripts-min.js"></script>

<script>
</script>
</body>
</html>
