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
    function run($rootScope, $location, $cookieStore, $http) {
        $rootScope.globals = $cookieStore.get('globals') || {};
        if ($rootScope.globals.currentUser) {
            $http.defaults.headers.common.Authorization = 'Basic ' + $rootScope.globals.currentUser.authdata;
        }
        $rootScope.$on('$locationChangeStart', function (event, next, current) {
            // redirect to login page if not logged in and trying to access a restricted page
            var restrictedPage = $.inArray($location.path(), ['/web']) === -1;
            var loggedIn = $rootScope.globals.currentUser;
            if (restrictedPage && !loggedIn) {
                $location.path('/web');
            }
        });
    }

})();
