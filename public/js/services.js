var app = angular.module('app', []);

app.controller('MainCtrl', function ($scope, $http) {
    $scope.shareFB = function () {
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
})