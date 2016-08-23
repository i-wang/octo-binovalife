(function () {
    'use strict';

    angular
        .module('app')
        .controller('LoginController', LoginController);

    LoginController.$inject = ['$location', '$rootScope','AuthenticationService', 'FlashService', 'UserService'];
    function LoginController($location,$rootScope, AuthenticationService, FlashService, UserService) {

        var cx = this;
        cx.user = { username : cx.username, password : cx.password};
        cx.login = login;
        (function initController() {
            AuthenticationService.ClearCredentials();
            $rootScope.showNav = false;
        })();

        function login() {
            cx.dataLoading = true;
            AuthenticationService.Login(cx.username, cx.password, function (response) {
                if (response.sessionId && response.code === 0) {
                    AuthenticationService.SetCredentials(cx.username, response.sessionId);

                    UserService.Create(response.data)
                        .then(function (response) {
                          $location.path('/customers');
                        });

                } else {
                    var message = 'Username or password is incorrect';
                    FlashService.Error(response.message);
                    cx.dataLoading = false;

                }
            });

        }

    }

})();
