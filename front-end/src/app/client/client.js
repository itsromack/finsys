(function(){
	/**
	*  Module
	*
	* Description
	*/
	angular.module('finsys-app.client',['ui.router','ui.bootstrap','ngTable'])
	
	.config(routeConfig)
	.controller('clientCtrl',clientController);


	function routeConfig($stateProvider, $urlRouterProvider,$locationProvider){
		 $stateProvider
            	.state('client', {
                    url: '/client',
                    templateUrl: 'app/client/client.html',
                    controller :  'clientCtrl as client'
                });
	}

	clientController.$inject = ['$scope','$log','NgTableParams','$window'];

	function clientController(scope,log,NgTableParams,window){
			log.info("client controller test");
	}




})();