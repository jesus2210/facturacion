angular.module('mainApp')
  	.factory('appfactory', function ($http) {
    return{
      	getPartners : function(){
        	return $http.get('partnersList')                        
      	},
    }
});