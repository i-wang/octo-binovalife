(function () {
    'use strict';

    angular
        .module('app')
        .controller('LoaderController', LoaderController);

    LoaderController.$inject = ['$routeParams', '$location', 'CustomerService', '$rootScope', 'AuthenticationService', 'UserService'];
    function LoaderController($routeParams, $location, CustomerService, $rootScope, AuthenticationService, UserService) {
        var lc = this;

    }

})();
