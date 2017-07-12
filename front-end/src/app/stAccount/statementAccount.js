(function(){
	/**
	*  Module
	*
	* Description
	*/
	angular.module('finsys-app.stAccount',['ui.router','ui.bootstrap'])

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

	stAccountController.$inject = ['$scope','$log','$window'];

	function stAccountController(scope,log,window){
			log.info("stAccount controller test");
	}


})();