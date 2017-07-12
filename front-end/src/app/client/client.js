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

	clientController.$inject = ['$scope','$log','$window'];

	function clientController(scope,log,window){
		var vm = this;

		//TODO: remove this once the endpoint has been enabled
		var clientsData = [ 

		{fname:'allan',lastName:'test',email:'e@yahoo.com',mobile:123456,gender:'male',image:''}, 
		{fname:'imee',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'imee',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'imee',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'imee',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'imee',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'imee',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'imee',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'imee',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'imee',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'imee',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'imee',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'imee',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'imee',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}

		];
		
		var arrayDataClient = [];
		 //TODO: Move this logic in service
		for(var index = 0;  index < clientsData.length; index++){
			var clientArray = Object.keys(clientsData[index]).map(function(_) { return clientsData[index][_]; });
				 arrayDataClient.push(clientArray);
				 log.info(clientArray);
		}

		vm.data = arrayDataClient;
	}




})();