(function () {
    "use strict";
    var app = angular.module('finsys-app.router',['ui.router']);

        app.config(function($stateProvider, $urlRouterProvider,$locationProvider) {

           $urlRouterProvider.otherwise('/');

            $stateProvider
            	.state('client', {
                    url: '/client',
                    templateUrl: 'app/views/client.html',
                    controller :  'clientCtrl as client'
                }).state('stAccount', {
                    url: '/stAccount',
                    templateUrl: 'app/views/stAccount.html',
                    controller :  'stAccountCtrl as stAccount'
                });           
            //for removable of # in url
          /*  $locationProvider.html5Mode(true);*/
        });
})();