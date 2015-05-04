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


var app = angular.module('app', []);

app.controller('MainCtrl', function ($scope, $http) {
    $scope.shareFB = function () {
        //alert('fb');
        facebookshare();
        //$http({
        //    method: 'POST',
        //    url: emailUrl
        //}).success(function (data, status) {
        //   alert(data);
        //}).error(function (data, status) {
        //    alert(0);
        //});
    }
})
//
//$(function() {
//   //$('.fadein').fadeIn('slow');
//    alert(1);
//    var swiper = new Swiper('.swiper-container', {
//        pagination: '.swiper-pagination',
//        speed: 800,
//        direction: 'vertical',
//        slidesPerView: 1,
//        paginationClickable: true,
//        mousewheelControl: true,
//        onSlideChangeStart: function(swiper){
//            if (swiper.activeIndex == 3) {
//                alert('services');
//                $(".fadein").fadein("slow");
//                ;
//            }
//        }
//    });
//});