(function(){
	/**
	*  Module
	*
	* Description
	*/
	angular.module('finsys-app.dashboard',['ui.router','ui.bootstrap'])
	
	.config(routeConfig)
	.controller('dashBoardCtrl',dashBoardController);


	function routeConfig($stateProvider, $urlRouterProvider,$locationProvider){
		 $stateProvider
            	.state('dashBoard', {
                    url: '/dashBoard',
                    templateUrl: 'app/dashboard/dashboard.html',
                    controller :  'dashBoardCtrl as client'
                });
	}

	dashBoardController.$inject = ['$scope','$log','$window'];

	function dashBoardController(scope,log,window){
			log.info("dashboard controller test");
	}




})();