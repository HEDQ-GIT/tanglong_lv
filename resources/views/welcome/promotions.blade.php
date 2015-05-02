<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Swiper demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    {!! Html::style("css/bootstrap.min.css") !!}
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="/css/swiper.min.css">
    {!! Html::style("css/works.css") !!}
    {!! Html::style("css/promotions.css") !!}


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
            padding: 30px 30px;
        }

        .swiper-promotion h1 {
            font-size: 100px;
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
@include('common.top-menu')

<!-- Swiper -->
<div class="swiper-promotion">
    <h1>SUPER PROMOTION</h1>

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