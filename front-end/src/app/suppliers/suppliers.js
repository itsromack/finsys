(function(){
	/**
	*  Module
	*
	* Description
	*/
	angular.module('finsys-app.suppliers',['ui.router','ui.bootstrap'])
	
	.config(routeConfig)
	.controller('supplierCtrl',suppliersController);


	function routeConfig($stateProvider, $urlRouterProvider,$locationProvider){
		 $stateProvider
            	.state('suppliers', {
                    url: '/suppliers',
                    templateUrl: 'app/suppliers/suppliers.html',
                    controller :  'supplierCtrl as supplier'
                });
	}

	suppliersController.$inject = ['$scope','$log','$window'];

	function suppliersController(scope,log,window){
			log.info("suppliers controller test");
	}




})();