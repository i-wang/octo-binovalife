(function () {
    'use strict';
    angular
        .module('app', ['ngRoute', 'ngCookies','ngAnimate', 'ngSanitize', 'mgcrea.ngStrap'])
        .config(config)
        .directive('loader', function () {
          return {
              restrict: 'E',
              controller: "LoaderController",
              templateUrl: "partials/loader/loader.html",
              controllerAs: 'lc'
          };
        })
      .run(run);
    config.$inject = ['$routeProvider', '$locationProvider'];
    function config($routeProvider, $locationProvider) {
        $routeProvider
            .when('/login', {
                controller: 'LoginController',
                // templateUrl: 'components/authenticate/login.view.html',
                controllerAs: 'cx'
            })
            .otherwise({ redirectTo: '/web' });
    }

    run.$inject = ['$rootScope', '$location', '$cookieStore', '$http'];
})();
