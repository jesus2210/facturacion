angular.module('mainApp')
  	.factory('appfactory', function ($http) {
    return{
      	getPartners : function(){
        	return $http.get('partnersList')                        
      	},
      	getDataPartner : function(partner_id){
      		return $http.get('partnerinfo/' + partner_id)
      	},
      	getFormPartner : function(){
      		return $http.get('partnerform')
      	},
        updatePartner : function(partner){
          return $http.post('updatePartner', partner)
        },
        deletePartner : function(partner_id){
          return $http.delete('deletePartner/' + partner_id)
        }
    }
});