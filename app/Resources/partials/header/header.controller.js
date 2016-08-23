(function () {
    'use strict';

    angular
        .module('app')
        .controller('HeaderController', HeaderController);

    HeaderController.$inject = ['$routeParams', '$location', 'CustomerService', '$rootScope', 'AuthenticationService', 'UserService'];
    function HeaderController($routeParams, $location, CustomerService, $rootScope, AuthenticationService, UserService) {
        var hc = this;
        $rootScope.showNav = $location.path() !== '/login';
        hc.customer = null;
        hc.user = null;
        hc.id = $routeParams['id'];
        hc.logout = logout;
        hc.username = $rootScope.globals.currentUser.username;
        getCustomerById($routeParams['id']);
        initController();
        function initController() {
            getCurrentUser();

        }
        function updateVisit() {
            CustomerService.UpdateVisit($rootScope.globals.currentUser.username)
                .then(function (user) {
                  hc.user = user;
                });
        }
        function updateNote() {
            CustomerService.UpdateNote()
                .then(function (customer) {
                    hc.customer = customer;
                });
        };

        function getCurrentUser() {
          // Use user from database or use local storage.
            UserService.GetByUsername($rootScope.globals.currentUser.username)
                .then(function (user) {
                  hc.user = user;
                });
        }
        function getCustomerById(id) {
            CustomerService.GetCustomerById(id)
                .then(function (customer) {

                    hc.customer = customer.data;
                });
        };
        function logout() {
            AuthenticationService.Logout(function (response) {
                if (response.code == 0) {
                    AuthenticationService.ClearCredentials();
                    $location.path('/login');
                } else {
                    var message = 'Username or password is incorrect';

                }
            });
        };
    }

})();
