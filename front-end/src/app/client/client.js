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

		var clients = [ 

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
		
		var p = [];
		 
		for(var i=0;  i < clients.length; i++){
		 var arr = Object.keys(clients[i]).map(function(_) { return clients[i][_]; });
		  p.push(arr);
		 console.log(arr)
		}

		vm.data = p;
	}




})();