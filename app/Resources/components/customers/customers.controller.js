(function () {
    'use strict';

    angular
        .module('app')
        .controller('CustomerController', CustomerController);

    CustomerController.$inject = ['$window','$location', 'CustomerService', '$rootScope', 'AuthenticationService', 'UserService'];
    function CustomerController($window, $location, CustomerService, $rootScope, AuthenticationService, UserService) {
        var cs = this;
        $rootScope.showNav = $location.path() !== '/login';
        $rootScope.customers = [];
        cs.customers =   $rootScope;
        // cs.user = null;
        cs.sortType = 'customername';
        cs.sortReverse  = false;
        cs.searchQ   = '';
        cs.logout = logout;
        cs.user = $rootScope.globals.currentUser;
        cs.detailCustomer = detailCustomer;
        cs.refreshCustomers = refreshCustomers;
      
        initController();
        function refreshCustomers() {
          CustomerService.GetCustomers()
              .then(function (customers) {
                  $rootScope.customers = customers;
                  cs.customers =   $rootScope;
                  cs.sortType = 'customername';
                  cs.sortReverse  = false;
                  cs.searchQ   = '';
              });

        };
        function initController() {
            // getCurrentUser();
            getCustomersList();
            $rootScope.showNav = true;
            $rootScope.showRefresh = true;
            $rootScope.hideRefresh = false;

        }
        function getCurrentUser() {
          // Use user from database or use local storage.
            UserService.GetByUsername($rootScope.globals.currentUser.username)
                .then(function (user) {
                  cs.user = user;
                });
        }
        function getCustomersList() {

            CustomerService.GetCustomers()
                .then(function (customers) {
                    $rootScope.customers = customers;
                    cs.customers =   $rootScope;
                });
        };
        function detailCustomer(id) {
          $rootScope.showRefresh = false;
          $rootScope.hideRefresh = true;
          $location.path('/customers/' + id);
        };
        function logout() {
            AuthenticationService.Logout(function (response) {
                if (response.code == 0) {
                    AuthenticationService.ClearCredentials();
                    $rootScope.showNav = false;
                    $location.path('/login');
                } else {
                    var message = 'Username or password is incorrect';

                }
            });
        };
    }

})();
