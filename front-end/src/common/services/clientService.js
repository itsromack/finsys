(function (){
	 "use strict";
	angular.module('finsys-app.services')
		   .factory('clientService',clientService);
			clientService.$inject = ['$http','$q','$window'];
	
	    function clientService($http,$q,window){

		 var showClients = function () {
			 var method = constants.GET;
			 console.log("method ",method);
			 var response = http({
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
	                });
			 
			 return response;
		 }
		 
		 var service = {
		     showClients:showClients
		 };
		 return service;
		 
		
		
	}
	 
})();