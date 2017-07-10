(function(){
	/**
	*  Module
	*
	* Description
	*/
	angular.module('finsys-app.controller').controller('stAccountCtrl',stAccountController);

	stAccountController.$inject = ['$scope','$log','NgTableParams','$window'];

	function stAccountController(scope,log,NgTableParams,window){
			log.info("stAccount controller test");
	}


})();