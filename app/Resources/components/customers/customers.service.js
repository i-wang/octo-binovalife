(function () {
    'use strict';

    angular
        .module('app')
        .factory('CustomerService', CustomerService);

    CustomerService.$inject = ['$http', '$timeout', '$filter', '$q'];
    function CustomerService($http, $timeout, $filter, $q) {

        var service = {};

        service.GetCustomers = GetCustomers;
        service.GetCustomerById = GetCustomerById;
        service.UpdateVisit = UpdateVisit;
        service.UpdateNote = UpdateNote;
        // service.SortList = SortList;
        return service;
        // function SortList(){
        //
        // }
        function GetCustomers(session) {
           // url http://localhost:8080/SRA/customer/list
            var data = {"sessionId" : session};
            return $http.post('/api/customer/list.json').then(handleSuccess, handleError('Error getting customers'));
        }

        function GetCustomerById(session, id) {
             // url http://localhost:8080/SRA/customer/details
            var data = {"sessionId" : session, "customerid" : id};
            return $http.post('/api/details.json', data).then(handleSuccess, handleError('Error getting customer details'));
        }
        function UpdateVisit(session, id, visit) {
          // url http://localhost:8080/SRA/customer/savevisit
          var data = {"sessionId" : session, "customerid" : id, "visit" : visit};
          return $http.post('/api/customer/list.json', data).then(handleSuccess, handleError('Error updating visit'));
        }
        // Update and save ************ put ***********
        function UpdateNote(session, id, status, note) {
          var data = {"sessionId" : session, "customerid" : id, "status" : status, "notes" : note};
          // url PUT http://localhost:8080/SRA/customer/savenotes
          return $http.post('/api/customer/list.json', data).then(handleSuccess, handleError('Error updating note'));
        }
        function handleSuccess(res) {
            return res.data.data;
        }

        function handleError(error) {
            return function () {
                return { success: false, message: error };
            };
        }
    }
})();
