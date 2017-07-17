(function(){
	/**
	*  Module
	*
	* Description
	*/
	angular.module('finsys-app.client',['ui.bootstrap','ui.utils','ui.router'])
	
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

	clientController.$inject = ['$scope','$log','$window','clientService'];

	function clientController(scope,log,window,clientService){
		var vm = this;
		
		vm.modal = new Modal("Client Information","app/client/modal-client.html","Cancel","Save Changes");

		vm.data = clientService.showClients();

		vm.addClient = function(){
			log.info("new client was succesfuly added, " ,clientService.addClient(vm.clientInfo));
		}


		vm.viewInfo = function(client){
			vm.clientInfo = client;
		}
	}




})();