(function () {
    'use strict';

    angular
        .module('app')
        .controller('LogoutController', LogoutController);

    LogoutController.$inject = ['$rootScope', '$location', 'AuthenticationService'];
    function LogoutController($rootScope, $location, AuthenticationService) {
        var vm = this;
        vm.session = $rootScope.globals.currentUser.sessionId;

        (function initController() {
          AuthenticationService.Logout(vm.session, function (response) {
              if (response.code === 0) {
                $rootScope.showNav = $location.path() !== '/login';
                AuthenticationService.ClearCredentials();
                $rootScope.globals = {};
                $location.path('/');
              }
          });

        })();
      
    }

})();
