(function(){
	/**
	*  Module
	*
	* Description
	*/
	angular.module('finsys-app.controller').controller('clientCtrl',clientController);

	clientController.$inject = ['$scope','$log','NgTableParams','$window'];

	function clientController(scope,log,NgTableParams,window){
			log.info("client controller test");
	}


})();