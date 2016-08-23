(function () {
    'use strict';

    angular
        .module('app')
        .factory('AuthenticationService', AuthenticationService);

    AuthenticationService.$inject = ['$http', '$cookieStore', '$rootScope', '$timeout', 'UserService'];
    function AuthenticationService($http, $cookieStore, $rootScope, $timeout, UserService) {
        var service = {};

        service.Login = Login;
        service.Logout = Logout;
        service.SetCredentials = SetCredentials;
        service.ClearCredentials = ClearCredentials;

        return service;

        function Login(username, password, callback) {

            /* Authentificate user and save data in session
             ----------------------------------------------*/
           var hash = (CryptoJS.MD5(password).toString(CryptoJS.enc.Base64));
           var token = (CryptoJS.SHA256(password)).toString().slice(0,32);
           var digest = username + "," + hash + "," + token;
           digest = CryptoJS.MD5(digest);
           digest = digest.toString(CryptoJS.enc.Base64);
           var data = { "token" : token, "digest" : digest, "user" : { "username" : username, "password" : hash}};
           // url http://localhost:8080/SRA/authenticate

          //  $http.post('/api/authenticate/auth.js', data)
          //       .success(function (data) {
          //         callback(data);
          //       });
          $http.post('server/classes/users/login.php', data)
            .success(function (data) {
                      console.log(data);
                      callback(data);


          });

        }
        function Logout(session, callback) {

            var data = { "sessionId" : session};
             // url http://localhost:8080/SRA/logout
            $http.post('/api/authenticate/auth.js', data)
                .success(function (data) {
                  callback(data);

                });
        }

        function SetCredentials(username, sessionId) {

            $rootScope.globals = {
                currentUser: {
                    username: username,
                    sessionId: sessionId
                }
            };
            $http.defaults.headers.common['Authorization'] = 'Basic ' + sessionId;
            $cookieStore.put('globals', $rootScope.globals);
        }

        function ClearCredentials() {
            $rootScope.globals = {};
            $cookieStore.remove('globals');
            $http.defaults.headers.common.Authorization = 'Basic';
        }
    }
    // Base64 encoding service, for authentification service
    // Username - Base64 of MD5 password - Random 32 bits token - digest = Base64(username +','+token)

    var Base64 = {
        token: function (password) {
          return (CryptoJS.SHA256(password)).toString().slice(0,32);

        },
        digest: function (username, password) {

          var token = (CryptoJS.SHA256(password)).toString().slice(0,32);
          var digest = username + "," + hash + "," + token;
          digest = CryptoJS.MD5(digest);
          digest = digest.toString(CryptoJS.enc.Base64);
          return digest;

        }
      }

    })();
