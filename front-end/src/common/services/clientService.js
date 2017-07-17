(function (){
	 "use strict";
	angular.module('finsys-app.services')
		   .factory('clientService',clientService);
			clientService.$inject = ['$http','$q','$window'];
	
	    function clientService($http,$q,window){



	   //TODO: to be removed  once the endpoint has been enabled 	
		var clientsData = [ 

		{fname:'allan',lastName:'test',email:'e@yahoo.com',mobile:123456,gender:'male',image:''}, 
		{fname:'imee',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'joseph',lastName:'tae',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'imee',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'bab',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'ccasd',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'xcxc',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'xvcvsa',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'fgfdg',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'nmfhd',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'vbvb',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'erewrw',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'weqeqe',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}, 
		{fname:'vnvnv',lastName:'taal',email:'y@yahoo',mobile:2589631,gender:'female',image:''}

		];

		

		 var showClients = function () {
			 var method = constants.GET;
			 console.log("method ",method);
			 //TODO: uncomment this once the endpoint has been enabled
			 var response = /*http({
	                method: method,
	                url:'reserve/viewAllReservation', //TODO: get API endpoint
	                data: '',
	                headers: {
	                    'Content-Type': 'application/json'
	                }
	            }).then(
	                function(response) {
	                    return response.data;
	                }, 
	                function(errResponse) {
	                    return $q.reject(errResponse);
	                });*/
			  clientsData;
			  var data = arrangeClientsDataInformation(response);
			 return data;
		 }

		 function arrangeClientsDataInformation(clients){
			var arrayDataClient = [];
			for(var index = 0;  index < clients.length; index++){
				 arrayDataClient.push(Object.keys(clients[index]).map(function(_) { return clients[index][_]; }));
			}
			return arrayDataClient;
		}


		function addClient(client){
		     var data = Object.assign({}, client);
		     //TODO: uncomment this once the endpoint has been enabled
		    var response = /* http({
	                method: 'POST',
	                url:window.baseUrl+'reserve/addReservation',//TODO: get API endpoint
	                data: data,
	                headers: {
	                    'Content-Type': 'application/json'
	                }
	            }).then(
	                function(response) {
	                    return response.data;
	                }, 
	                function(errResponse) {
	                    console.error('Error !!');
	                    return $q.reject(errResponse);
	                });*/
	             //TODO: to be removed
				response = client;
				clientsData.push(response);
				return response;
			}

		 var service = {
		     showClients:showClients,
		     addClient: addClient
		 };
		 return service;
		 
		
		
	}
	 
})();