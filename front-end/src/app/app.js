(function () {
    "use strict";
        angular.module('finsys-app',
        [ 
            'finsys-app.client',
            'finsys-app.stAccount',
            'finsys-app.dashboard',
            'finsys-app.suppliers',
            'finsys-app.directives',
            'ui.router'
        ]).
        
        
        config(['$qProvider', function ($qProvider) {
            $qProvider.errorOnUnhandledRejections(false);
        }])


        .config(function ($stateProvider, $urlRouterProvider,$locationProvider){               
                    $urlRouterProvider.otherwise('/dashboard');
                    //for removable of # in url
                    //TODO: uncomment this once the context path confirmed
                    // $locationProvider.html5Mode(true);
            })
        .controller('mainController',mainController);
        
        mainController.$inject = ['$window','$scope','$log','$rootScope'];
        
        function mainController(window,scope,log,$rootScope){
            var vm = this;
            
            var year = new Date().getFullYear();

            vm.modalApp = {
                header:"finsys-app",
                footer:"All rights reserved "+ year
            };
           // window.baseUrl = window.location.href;
            
            

            $rootScope.$on('$stateChangeSuccess', function(event, toState, toParams, fromState, fromParams) {
            log.info("main controller ",toState);
          } );
            
        }

})();