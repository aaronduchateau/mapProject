window.gmd = {
	//keep configurations crap out of intereact map
	pointMarkerUrl: function(){
		return (window.g.jsBaseUrl() + '/images/icon-map-new-small.png');
	},
	interactMap: {
		panToPosition: function(latMap, lngMap){
			var jacksonCounty = new google.maps.LatLng(latMap, lngMap);
			var marker = new google.maps.Marker({
			    position: jacksonCounty,
			    icon: window.gmd.pointMarkerUrl(),
			    map: window.map,
			    title: 'Hello World!'
			});
			window.map.panTo(jacksonCounty);
		},
		//this is temporary, and ugly 
		addressLookup: function(address){
			var holdThis = this;
			var geocoder = new google.maps.Geocoder();
			geocoder.geocode( { 'address': address}, function(results, status) {
			  if (status == google.maps.GeocoderStatus.OK)
			  {
			      
			      $('#latMap').val(results[0].geometry.location.lat());
			      $('#lngMap').val(results[0].geometry.location.lng());
			      $('#search-click').click();
			      
			      //console.log(lat);
			      //var lng = results[0].geometry.location.B;
			      //console.log(lng);
			      //holdThis.panToPosition (lat, lng);
			      
			  } else {
			  	alert('Sorry, looks like we could not find that address');
			  }
			});
		},
		nestedMap: function(){

			var jacksonCounty = new google.maps.LatLng(window.infoWindowLat, window.infoWindowLng);
			console.log(jacksonCounty);
			var mapOptions = {
				center: jacksonCounty,
				zoom: 17,
				mapTypeId: google.maps.MapTypeId.HYBRID,
				suppressInfoWindows: true
			};

			window.nestedMap = new google.maps.Map(document.getElementById('nested-map'),
			  mapOptions);
			//console.log(customAccount);
			//console.log('ddd', window.g.mapRowData.queryVal);
			console.log('column name');
			console.log(window.g.mapConfig.nestedMapColumnName);
			console.log('query value');
			console.log(window.g.mapRowData.queryVal.value);
			var customAccountString = window.g.mapConfig.nestedMapColumnName + ' = ' + window.g.mapRowData.queryVal.value;
			var layer = new google.maps.FusionTablesLayer({
		    query: {
		      select: 'geometry',
		      from: window.g.mapConfig.remoteTableId,
		      where: customAccountString
		    },
		    styles: [{
		      polygonOptions: {
		      	strokeColor: '#8a0002',
		      	strokeOpacity: 1,
    			strokeWeight: 2,
		        fillOpacity: 0.01,
		        suppressInfoWindows: true
		      }
		    }]
		  });

		  layer.setMap(window.nestedMap);
		  //sometimes our map kinks up on slide down
		  setTimeout(function(){ 
		  	google.maps.event.trigger(window.nestedMap, 'resize');
		  }, 4000);
		

		}
	},
	populateMap : function (latMap, lngMap){
		var poly;
		window.map;
		var marker;
		var markers = [];
		var initialMakerPoint;
		var masterCount = 0;
		var masterLatLng;
		var infowindow = null;
		var jacksonCounty = new google.maps.LatLng(latMap, lngMap);


	    setTimeout(function(){
	    	window.map = new google.maps.Map(document.getElementById('map-canvas'), {
				center: jacksonCounty,
				zoom: 16,
				mapTypeId: google.maps.MapTypeId.HYBRID
			});

			var marker = new google.maps.Marker({
			    position: jacksonCounty,
			    map: window.map,
			    icon: window.gmd.pointMarkerUrl(),
			    title: 'Hello World!'
			});

	    	populateMap();
	   
		    var hasLoadedOnce = false;
		    google.maps.event.addListener(window.map, 'idle', function() {
		    	if (!hasLoadedOnce){
		    		setTimeout(function(){
			    		$( ".dash-left-inter-margin" ).slideDown( "slow", function() {
						    	//google.maps.event.trigger(map, 'resize');
						    	$( ".dash-center" ).show();
						    	google.maps.event.trigger(map, 'resize');
						    	$( ".dash-right-inter-margin" ).slideDown( "slow", function() {
								    $( ".options-inter-margin" ).show();
								});
							
						});
		    		},300);
		    	}
		    	hasLoadedOnce = true;
			});
		},1300);

		function sanatizeValue(value){
			if (value){
		    	var currencyParse =  value.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
		    	var splitNum = currencyParse.split(".");
		    	return splitNum[0];
			} else {
				return 'EMPTY';
			}
		}

	    function populateMap(){
		  layer = new google.maps.FusionTablesLayer({
		    query: {
		      select: 'geometry',
		      from: window.g.mapConfig.remoteTableId
		    },
		    styles: [{
		      polygonOptions: {
		      	//strokeColor: '#0d6a92',
		      	strokeColor: '#FFFFFF',
		      	strokeOpacity: 1,
    			strokeWeight: 1,
		        fillColor: '#0d6a92',
		        fillOpacity: 0.5
		      }
		    }]
		  });

		  layer.setMap(window.map);

		  google.maps.event.addListener(layer, 'click', function(e) {
		  	window.infoWindowLng = e.latLng.lng();
		  	window.infoWindowLat = e.latLng.lat();

		  	//let's translate our data
		  	//console.log(window.g.mapConfig[0]);
		  	var row = window.translations[window.g.mapConfig.countyNameConcat].translate(e.row);
		  	//console.log(row);

		    if (row['ownerName']){
		    	var feeOwner = row['ownerName'].value;
		    } else {
		    	var feeOwner = 'unavailable';
		    }
		    if (row['acreage']){
		    	var acreage = row['acreage'].value;
		    } else {
		    	var acreage = 'unavailable';
		    }
		    if (row['totalValue']){
		    	var totalValue = sanatizeValue(row['totalValue']);
		    }
		    // else {
		    //	var totalValue= 'unavailable';
		    //}

		    e.infoWindowHtml = "<div style='width:300px;'><h5>Fee Owner: " + feeOwner + "</h5>";
		    e.infoWindowHtml += "<hr/><a href='javascript:void(0);' data-result-index='288' class='btn btn-primary pull-right left-open'>Full Information</a>";
      		e.infoWindowHtml += "<div style='pull-left'><b>Acreage: </b>" + acreage + "<br/>";
      		e.infoWindowHtml += "<b>Total Value: </b>$" + totalValue + "</div><br/><br/><div style='clear:both;'></div>";
      		e.infoWindowHtml += "</div>";
		    
		    
		    window.g.mapRowData = row;
		    window.g.mapRowData.lat = window.infoWindowLat;
		    window.g.mapRowData.lng = window.infoWindowLng;
		    window.g.mapRowData.accountOwnerName = window.g.mapConfig.accountOwnerName;
		    window.g.mapRowData.accountOwnerPhone = window.g.mapConfig.accountOwnerPhone;
		    window.g.mapRowData.countyName = window.g.mapConfig.countyName;
		    console.log('window.g.mapRowData');
		    console.log(window.g.mapRowData);
		   
		  });
		}
	}
};