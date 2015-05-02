@extends('layout.master')

@section('css')
    {!! Html::style("css/works.css") !!}
    {!! Html::style("css/magnific-popup.css") !!}
    {!! Html::style("css/lightbox.css") !!}
    {!! Html::style("css/aboutcomy.css") !!}
@stop

@section('head-js')
    {!! Html::script('js/magnific-popup.js') !!}
    {!! Html::script('js/works.js') !!}
    {!! Html::script('js/responsiveslides.min.js') !!}

    <script>
        var worksUrl = "{{ URL('/works/getWorks') }}";
        var workDetailUrl = "{{ URL('/works/getWorkDetails') }}";

        $(function () {
            $(".rslides").responsiveSlides({
                speed: 300
            });
        });
    </script>
@stop

@section('content')
    <!-- header start -->
    <ul id="slider" class="rslides">
        <li>
            <div class="image" style="background-image: url('img/demo-2-bg.jpg');"/>
            <h1>Tang Long Design<span>Advertising Design Studio</span></h1>
            <h6>At Tang Long Design, each project is considered new and developed with passion!</h6>
        </li>
        <li>
            <div class="image" style="background-image: url('img/demo-1-bg.jpg');"/>
            <h1>Tang Long Design<span>Advertising Design Studio</span></h1>
            <h6>At Tang Long Design, each project is considered new and developed with passion!</h6>
        </li>
        <li>
            <div class="image" style="background-image: url('img/slider2_bg.jpg');"/>
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
                            <a class="filter filter-hover" ng-init="getImgUrl(0)" ng-click="getImgUrl(0)">All
                                <span class="badge pull-right">80</span>
                            </a>
                        </li>
                        <li class=""><a class="filter" ng-click="getImgUrl(1)">Website<span
                                        class="badge pull-right">25</span></a></li>
                        <li class=""><a class="filter" ng-click="getImgUrl(2)">Applications<span
                                        class="badge pull-right">15</span></a></li>
                        <li class=""><a class="filter" ng-click="getImgUrl(3)">Branding<span class="badge pull-right">15</span></a>
                        </li>
                        <li class=""><a class="filter" ng-click="getImgUrl(4)">Animation<span class="badge pull-right">13</span></a>
                        </li>
                        <li class=""><a class="filter" ng-click="getImgUrl(5)">Marketing<span class="badge pull-right">12</span></a>
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
                        <a href="javascript:void(0);" ng-click="getWorkDetail(1)" class="work-img">
                        {{--<a href=@{{imgUrl}} class="work-img" onclick="test()">--}}
                        {{--<a href="javascript:void(0);" class="work-img" onclick="test()">--}}
                        <img src=@{{imgUrl}} alt="...">

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
@stop