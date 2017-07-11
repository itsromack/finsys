(function(){
	/**
	*  Module
	*
	* Description
	*/
	angular.module('finsys-app.dashboard',['ui.router','ui.bootstrap','ngTable'])
	
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

	dashBoardController.$inject = ['$scope','$log','NgTableParams','$window'];

	function dashBoardController(scope,log,NgTableParams,window){
			log.info("dashboard controller test");
	}




})();