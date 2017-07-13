(function(){
	 "use strict";
	  angular.module('finsys-app.directives').
	     directive('finsysNavBar', createNavBar);
	  
		  function createNavBar(){
			  var result = {
					     restrict :'AE',
			    		link : createView,
			    		replace: false,
			    		templateUrl:"common/views/finsys-nav-bar.html",
			    		
			  };
			  
			  function createView(scope, el, attr) {
				  
			  }
			  
			  return result;
		  }
})();