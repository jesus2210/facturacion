angular.module('mainApp')
	.controller('ProductController', function ($scope, appfactory, $window){
		$scope.init = function(){
			appfactory.getProducts()
			.success(function($data){
				console.log($data);
				$scope.products = $data;
			});
		}
		$scope.show_product = function(product_id){
			$window.location.href = '/productform#?id=' + product_id;

		}
		//Inicializando datos de vista
		$scope.init()
	}
)
	.controller('ProductFormController', function ($scope, appfactory, $location, $window){
		$scope.init = function(){
			appfactory.getDataProduct($location.search().id)
			.success(function($data){
				$scope.productData = $data[0];
			})
		}
		$scope.save_change = function(){
			appfactory.updateProduct($scope.productData)
			.success(function($data){
				$scope.edit = !$scope.edit;
			})

		}
		$scope.delete_confirm = function(){
			$('.ui.basic.modal')
			   .modal('show');
		}
		$scope.delete_product = function(product_id){
			appfactory.deleteProduct(product_id)
			.success(function($data){
				$window.location.href = '/products';
			})
		}
		//inicializo datos de vista
		$scope.init();
	});