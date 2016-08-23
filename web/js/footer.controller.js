(function () {
    'use strict';

    angular
        .module('app')
        .controller('FooterController', FooterController);

    FooterController.$inject = ['$routeParams', '$location', 'CustomerService', '$rootScope', 'AuthenticationService', 'UserService'];
    function FooterController($routeParams, $location, CustomerService, $rootScope, AuthenticationService, UserService) {
        var fc = this;
        // function saveNotes() {
        //     CustomerService.UpdateNote()
        //         .then(function (customers) {
        //           // $rootScope.customers = customers;
        //           // $rootScope.sortType     = 'customername';
        //           // $rootScope.sortReverse  = false;
        //             console.log(notes);
        //
        //         });
        //
        // };
        // function saveVisits() {
        //     CustomerService.UpdateVisit()
        //         .then(function (customers) {
        //           // $rootScope.customers = customers;
        //           // $rootScope.sortType     = 'customername';
        //           // $rootScope.sortReverse  = false;
        //           console.log('Visits saved')
        //         });
        //
        // };


    }

})();
