window.dashModel = {
	saveTaxlot: function(callback){
		var dataSent = {
			countyKey: window.g.mapConfig.id, 
			userKey: window.g.mapConfig.userId, 
			lat: window.g.mapRowData.lat,
			lng: window.g.mapRowData.lng, 
			ownerName: window.g.mapRowData.ownerName,
			totalValue: window.g.mapRowData.totalValue 
		};
		$.ajaxSetup({
		   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
		});
		$.ajax({
			type: "POST",
            url: window.g.jsBaseUrl() + 'saveCountySpecificRecord',
            data : dataSent,
            success:function(data){
            	console.log(data);
            	dataSent.id = data.last_insert_id;
            	callback(dataSent);
                //callback(data);
            }
        });
	},
	getSavedTaxlots: function(callback){
		$.ajax({
			type: "GET",
            url: window.g.jsBaseUrl() + 'listSavedTaxlots/' + window.g.mapConfig.userId + '/' + window.g.mapConfig.id,
            success:function(data){
            	console.log(data);
            	//data = {dashLeftArrayData: JSON.parse(data)};
                callback(data);
            },
            dataType: "json"
        });

	},
	unsetSavedLeft: function(unsetId, userId, callback){
		var dataSent = {
			unsetId: unsetId, 
			userId: userId
		};
		$.ajaxSetup({
		   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
		});
		$.ajax({
			type: "POST",
            url: window.g.jsBaseUrl() + 'unsetSavedLeft',
            data : dataSent,
            success:function(data){
            	console.log(data);
            	callback(data);
                //callback(data);
            }
        });
	}
};