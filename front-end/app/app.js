(function () {
    "use strict";
        angular.module('finsys-app',
        [ 'finsys-app.router',
           'finsys-app.controller'
        ]).
        
        
        config(['$qProvider', function ($qProvider) {
            $qProvider.errorOnUnhandledRejections(false);
        }])
        .controller('mainController',mainController);
        
        mainController.$inject = ['$window','$scope','$log'];
        
        function mainController(window,scope,log){
        	var vm = this;
        	
        	var year = new Date().getFullYear();
        	vm.modalApp = {
        		header:"Car App",
        		footer:"All rights reserved "+ year
        	};
        	window.baseUrl = window.location.href;
        	
        	log.info("main controller ");
        	
        }

})();