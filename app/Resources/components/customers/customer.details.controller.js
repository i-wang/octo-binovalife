(function () {
    'use strict';

    angular
        .module('app')
        .controller('CustomerDetailsController', CustomerDetailsController);

    CustomerDetailsController.$inject = ['$routeParams', '$location', 'CustomerService', '$rootScope', 'AuthenticationService', 'UserService'];
    function CustomerDetailsController($routeParams, $location, CustomerService, $rootScope, AuthenticationService, UserService) {
        var ct = this;

        ct.user = null;
        ct.mailLink = "mailto:" + "example@gmail.com" + "?subject=" + "Hello" + '&body=' +"Boooooo ,,,,,";
        ct.id = $routeParams.id;
        ct.logout = logout;
        ct.updateVisit = updateVisit;
        ct.updateNote = updateNote;
        ct.session = ''+$rootScope.globals.currentUser.sessionId;
        ct.user = $rootScope.globals.currentUser;
        getCustomerById($routeParams.id);
        initController();
        function initController() {
            //getCurrentUser();
            $rootScope.showNav = true;
            $rootScope.showRefresh = false;
            $rootScope.hideRefresh = true;
        }
        function updateVisit() {
            //var val = ct.visitsDate + "" + ct.visitsTime + "" + ct.visitsAction + ct.visitsNotes;
            var t = ct.visitsTime.toISOString().substr(11, 8).split(':')[0];
            var h = ct.visitsTime.toISOString().substr(11, 8).split(':')[1];
            var a = 'AM';
            if (t > 12) {
              a = 'PM';
            }
            var time = t + ':' + h + ' ' + a;
            var visit = {
              "date" : ct.visitsDate.toISOString().slice(0,10),
              "time"  : time,
              "action"  : ct.visitsAction,
              "notes" : ct.visitsNotes
            };
            var id = ct.id.toString();
            CustomerService.UpdateVisit(ct.session,id , visit)
                .then(function (visits) {
                  console.log(visit);
                });
        }
        function updateNote() {
            var val = ct.notesNote + "" + ct.notesStatus;
            var id = ct.id.toString();
            CustomerService.UpdateNote(ct.session, id, ct.notesStatus, ct.notesNote)
                .then(function (note) {

                });
        }

        function getCurrentUser() {
          // Use user from database or use local storage.
            UserService.GetByUsername($rootScope.globals.currentUser.username)
                .then(function (user) {
                  ct.user = user;
                });
        }
        function getCustomerById(id) {
            CustomerService.GetCustomerById(id)
                .then(function (response) {
                    var customer = [];
                    var address = [];

                    customer.id = response.id;
                    customer.customername = response.customername;
                    customer.productname = response.productname;
                    customer.status = response.status;
                    customer.a_id = response.addresses.id;
                    ct.cust = customer;
                    // address = response.addresses;
                    ct.addresses = response.addresses;
                    ct.visits = [];
                    ct.visits.push(response.visit);
                    ct.communications = response.communications;
                    var values = response.communications;
                    var phones = [],
                      skypes = [],
                      emails = [];
                    angular.forEach(values, function(value, key) {
                        if (value.category === "Phone") {
                          phones.push(value);
                        }
                        if (value.category === "Skype") {
                          skypes.push(value);
                        }
                        if (value.category === "Email") {
                          emails.push(value);
                        }

                    });
                    ct.skypes = skypes;

                    ct.phones = phones;
                    ct.emails = emails;

                });
        }
        ct.tab = 1;
        ct.setTab = function(newTab){
            ct.tab = newTab;
        };
        ct.isSet = function(tabNum){
          return $ct.tab === tabNum;
        };
        function logout() {
            AuthenticationService.Logout(function (response) {
                if (response.code === 0) {
                    AuthenticationService.ClearCredentials();
                    $location.path('/login');
                } else {
                    var message = 'Username or password is incorrect';

                }
            });
        }
    }

})();
