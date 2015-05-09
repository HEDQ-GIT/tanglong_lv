function test() {
    //$('.work-img').magnificPopup({
    //    type: 'image'
    //});

}

var app = angular.module('app', []);

app.controller('MainCtrl', function ($scope, $http) {
    $scope.getImgUrl = function (idx) {
        requesturl = worksUrl+ '/' + idx;
        $http({
            method: 'POST',
            url: requesturl
        }).success(function (data, status) {
            var result = new Array();
            for (i in data) {
                result.push('/img/'+ data[i]);
            }
            $scope.imgUrls = result;
        }).error(function (data, status) {
            alert('getWorks fail');
        });
    }

    $scope.getWorkDetail = function (url) {
        requesturl = workDetailUrl;
        data = {url: url};
        $http({
            method: 'POST',
            url: requesturl,
            data: $.param(data),  // pass in data as strings
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
        }).success(function (data, status) {
            //alert(data);
            $.magnificPopup.open({
                items: {
                    //src: data, // can be a HTML string, jQuery object, or CSS selector
                    src: '<div class="white-popup"><div class="mfp-close">X</div>' + data + '</div>', // can be a HTML string, jQuery object, or CSS selector
                    //
                    type: 'inline'
                },
                closeBtnInside: true

            });
        }).error(function (data, status) {
            alert('getWorkDetail fail');
        });
    }

    $scope.shareFB = function() {
        alert('fb');
        //$http({
        //    method: 'POST',
        //    url: emailUrl
        //}).success(function (data, status) {
        //   alert(data);
        //}).error(function (data, status) {
        //    alert(0);
        //});
    }
    $scope.formData = {};

    $scope.submitContact = function() {
        //$scope.formData.data = new Date();
        //alert($scope.formData);
        //alert(emailUrl);
        $http({
            method: 'POST',
            url: emailUrl,
            data    : $.param($scope.formData),  // pass in data as strings
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' }  // set the headers so angular passing info as form data (not request payload)
        }).success(function (data, status) {
            alert(data);
        }).error(function (data, status) {
            alert(data);
        });
    }
});



$(function () {
    //filter start
    $('.nav-tabs li').click(function () {
        $(this).find('a').addClass('filter-hover').parent('li').siblings().find('a').removeClass('filter-hover');
    })
    //filter end

    $('.work-img').magnificPopup({
        items: {
            src: '<div><img src="/img/list13.jpg" alt=""/><p style="color: #ffffff">Thumbnail labelThumbnail labelThumbnail labelThumbnail labelThumbnail label</p></div>',
            type: 'inline'
        }
    });
});
