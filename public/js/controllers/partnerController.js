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
    .controller('partnerformController', function ($scope, appfactory, $location,$window) {
    	$scope.init = function() {
			appfactory.getDataPartner($location.search().id)
			.success(function($data){
				$scope.partnerData = $data[0];
			});
		}
		
		$scope.save_change = function() {
			appfactory.updatePartner($scope.partnerData)
			.success(function($data){
				$scope.edit = !$scope.edit;
			});
		}

		$scope.delete_confirm = function() {
			$('.ui.basic.modal')
			  .modal('show');
		}

		$scope.delete_partner = function(partner_id) {
			console.log(partner_id);
			appfactory.deletePartner(partner_id)
			.success(function($data){
				$window.location.href = '/partners';
			});
		}		

		// Inicializo datos de vista
		$scope.init();
    }
);