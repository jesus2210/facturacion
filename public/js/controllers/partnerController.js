angular.module('mainApp')
    .controller('partnerController', function ($scope, appfactory) {
    	$scope.init = function() {
			appfactory.getPartners()
	        .success(function($data){
            	$scope.partners = $data;
	        });
		}

		// Inicializo datos de vista
		$scope.init();
    }
);