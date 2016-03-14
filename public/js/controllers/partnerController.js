angular.module('mainApp')
    .controller('partnerController', function ($scope, appfactory, $window) {
    	$scope.init = function() {
			appfactory.getPartners()
	        .success(function($data){
            	$scope.partners = $data;
	        });
		}

		$scope.show_partner = function(partner_id){
	        $window.location.href = '/partnerform#?id=' + partner_id;
		}
		// Inicializo datos de vista
		$scope.init();
    }
)
    .controller('partnerformController', function ($scope, appfactory, $location) {
    	$scope.init = function() {
			appfactory.getDataPartner($location.search().id)
			.success(function($data){
				$scope.partnerData = $data[0];;
			});
		}
		// Inicializo datos de vista
		$scope.init();
    }
);