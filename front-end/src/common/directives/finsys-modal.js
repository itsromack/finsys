(function(){
	 "use strict";
	angular.module('finsys-app.directives').directive('appModal',finsysModal);
	
	function finsysModal(){
		var dataBodyContent = [];
		  var result =  {
			        restrict: 'AE',
			        scope: {
			            header: '@modalHeader',
			            body: '@modalBody',
			            footer: '=modalFooter',
			            callbackbuttonleft: '&ngClickLeftButton',
			            callbackbuttonright: '&ngClickRightButton',
			            handler: '=modalName',
			            close:'@modalClose',
			            continue:'@modalContinue',
			            ctrl:'='
			        },
			        templateUrl: 'common/views/modal-view.html',
			        transclude: true,
			        controllerAs: 'vm',
			        controller: modalController,
			        link: modalLink
			    };

			    function modalController($scope) {
			        	$scope.handler = 'finsys-modal'; 
			     }
		        function modalLink(scope, el, attr,ngModel) {
		        	dataBodyContent.push(scope.content);
		        	scope.newTest = dataBodyContent;
				}
		
		return result;
	}

})();