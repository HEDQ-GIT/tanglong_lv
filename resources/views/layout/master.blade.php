<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatwible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('title')

    {{--css start--}}
    {!! Html::style("Css/bootstrap.min.css") !!}
    {!! Html::style("Css/animate.css") !!}

    @yield('css')
    {{--css end--}}

    {{--js start--}}
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    {!! Html::script('js/angular.min.js') !!}

    @yield('head-js')
    {{--js end--}}

    <!-- HTML5 shim and Respond.Js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.Js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.Js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.Js"></script>
    <![endif]-->
</head>

<body ng-app="app" ng-controller="MainCtrl">
{{--ng-app="app" ng-controller="MainCtrl"--}}
@yield('header')
@yield('content')
{{--@yield('footer')--}}
{{--@include('common.footer')--}}
@yield('body-js')
</body>
</html>