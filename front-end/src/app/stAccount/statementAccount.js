(function(){
	/**
	*  Module
	*
	* Description
	*/
	angular.module('finsys-app.stAccount',['ui.router','ui.bootstrap','ngTable'])

	.config(routeConfig)
	.controller('stAccountCtrl',stAccountController);

	
	function routeConfig($stateProvider, $urlRouterProvider,$locationProvider){
		 $stateProvider
            	.state('stAccount', {
                    url: '/stAccount',
                    templateUrl: 'app/stAccount/stAccount.html',
                    controller :  'stAccountCtrl as stAccount'
                });
	}

	stAccountController.$inject = ['$scope','$log','NgTableParams','$window'];

	function stAccountController(scope,log,NgTableParams,window){
			log.info("stAccount controller test");
	}


})();