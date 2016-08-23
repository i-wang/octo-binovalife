(function () {
    'use strict';
    angular
        .module('app')
        .controller('TabController', TabController);
    TabController.$inject = ['$scope','$timeout'];
    function TabController($scope,  $timeout) {
        this.tab = 1;
        this.status = ['New','InProgress', 'OrderPlaced', 'Support','Cancelled', 'Rejected'];
        this.actions = ['Offer','Lead', 'Opportunity', 'New Customer'];
        this.setTab = function (tabId) {
            this.tab = tabId;
        };
        this.isSet = function (tabId) {
            return this.tab === tabId;
        };
        this.selectedDate = new Date();
        this.selectedDateAsNumber = Date.UTC(1986, 1, 22);
        this.getType = function(key) {
          return Objethis.prototype.toString.call($scope[key]);
        };

        this.clearDates = function() {
          $scope.selectedDate = null;
        };


    }

})();
