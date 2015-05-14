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
	onClickTileManager: function(e, latlng, pos, data, layerNumber){
		window.infoWindowLat = latlng[0];
		window.infoWindowLng = latlng[1];
	 

	  	//let's translate our data
	  	//console.log(window.g.mapConfig[0]);

	  	var row = window.translations[window.g.mapConfig.countyNameConcat].translate(data);
	  	console.log(row);

	    if (row['ownerName']){
	    	var feeOwner = row['ownerName'];
	    } else {
	    	var feeOwner = 'unavailable';
	    }
	    if (row['acreage']){
	    	var acreage = row['acreage'];
	    } else {
	    	var acreage = 'unavailable';
	    }
	    if (row['totalValue']){
	    	var totalValue = this.sanatizeTotalValue(row['totalValue']);
	    }
	    // else {
	    //	var totalValue= 'unavailable';
	    //}
	    var infoWindowHtml;
	    infoWindowHtml = "<div><h5>" + feeOwner + "</h5>";
  		infoWindowHtml += "<div style='padding:10px;'><b>Acreage: </b>" + acreage + "<br/>";
  		infoWindowHtml += "<b>Total Value: </b>$" + totalValue + "</div>";
  		infoWindowHtml += "<a href='javascript:void(0);' class='btn btn-primary left-open pull-right' style='color:white;'>Full Information</a>";
  		infoWindowHtml += "</div>";

  		console.log(infoWindowHtml);
	    
		setTimeout(function(){
		    $( '.cartodb-popup-content' ).each(function( index ) {
			  $( this ).html(infoWindowHtml);
			});
		}, 500);

	    window.g.mapRowData = row;
	    window.g.mapRowData.lat = window.infoWindowLat;
	    window.g.mapRowData.lng = window.infoWindowLng;
	    window.g.mapRowData.accountOwnerName = window.g.mapConfig.accountOwnerName;
	    window.g.mapRowData.accountOwnerPhone = window.g.mapConfig.accountOwnerPhone;
	    window.g.mapRowData.countyName = window.g.mapConfig.countyName;
	},

	sanatizeTotalValue: function(value){
		if (value){
	    	var currencyParse =  value.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
	    	var splitNum = currencyParse.split(".");
	    	return splitNum[0];
		} else {
			return 'EMPTY';
		}
	},

	//this guy is now the main function
	populateMapAfterTimeout: function(){
        
        var thisScoped = this;

		var LayerConfig = {
	    	user_name: 'devtest', // Required
	    	type: 'cartodb', // Required
	    	tiler_domain: 'anonymoustransaction.com',
	    	tiler_port:     "8181",
	    	tiler_protocol: 'http',
	    	sublayers: [{
	        	sql: "SELECT * FROM douglas83feet", // Required
	        	cartocss: '#douglas83feet {polygon-fill: #FF6600; polygon-opacity: 0.8; line-color: #FFF; line-width: 1; line-opacity: 1;}'
	        	//interactivity: 'cartodb_id, the_geom, acreage, id, created_at'
	    	}]
	  	};

		cartodb.createLayer(window.map, LayerConfig)
         .addTo(window.map)
         .on('done', function(layer) {
           var infowindow_model = layer.getSubLayer(0).infowindow;
           // get sublayer 0 and set the infowindow template
           var sublayer = layer.getSubLayer(0);
            sublayer.setInteraction(true);          
          
            layer.getSubLayer(0).set('template', $('#infowindow_template').html())
            .on('error', function(err){
              console.log('infowindow error: ', err);
            });

            //console.log($('#infowindow_template').html());
           
            sublayer.infowindow.set('template', $('#infowindow_template').html());
           

            sublayer.on('featureClick', function(e, latlng, pos, data, layerNumber) {
                  //alert("Hey! You clicked " + data.cartodb_id);
                  //console.log(pos);
                  console.log('latlng');
                  console.log(latlng);
                  console.log(data);
                  infowindow_model.set('visibility', true);
                  console.log(infowindow_model);
    			  console.log(window.translations[window.g.mapConfig.countyNameConcat + 'Map']);
                  
                  thisScoped.onClickTileManager(e, latlng, pos, data, layerNumber);

            });

            //lets keep this commented out for now
            //sublayer.on('featureOver', function(e, latlng, pos, data, layerNumber) {
           	//});

            var configurationArray = window.translations[window.g.mapConfig.countyNameConcat + 'Map'];
            console.log(configurationArray);
            cdb.vis.Vis.addInfowindow(window.map, layer.getSubLayer(0), configurationArray, {'infowindowTemplate': $('#infowindow_template').html(), 'templateType': 'mustache'})

          }).on('error', function() {
            console.log("some error occurred");
        });
    },

	populateMap : function (latMap, lngMap){
		var thisScoped = this;

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
	    	window.map = L.map('map-canvas', { 
	          zoomControl: true,
	          center: new L.LatLng(latMap, lngMap),
	          zoom: 13,
	          infoWindow: true
	        });

	        var ggl2 = new L.Google('TERRAIN');
        	window.map.addLayer(ggl2);
	    	/*
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
			*/

	    	thisScoped.populateMapAfterTimeout();
	    	//this should go below
	   		$( ".dash-center" ).show();
	   		$( ".options-inter-margin" ).show();
	   		$( ".dash-left-inter-margin" ).show();
	   		$( ".dash-right-inter-margin" ).show();

	   		/*
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
		*/
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

		//this guy is now the main function
		function populateMainMap(){

			var LayerConfig = {
		    	user_name: 'devtest', // Required
		    	type: 'cartodb', // Required
		    	tiler_domain: 'anonymoustransaction.com',
		    	tiler_port:     "8181",
		    	tiler_protocol: 'http',
		    	sublayers: [{
		        	sql: "SELECT * FROM douglas83feet", // Required
		        	cartocss: '#douglas83feet {polygon-fill: #FF6600; polygon-opacity: 0.8; line-color: #FFF; line-width: 1; line-opacity: 1;}'
		        	//interactivity: 'cartodb_id, the_geom, acreage, id, created_at'
		    	}]
		  	};

			cartodb.createLayer(window.map, LayerConfig)
	         .addTo(window.map)
	         .on('done', function(layer) {
	           var infowindow_model = layer.getSubLayer(0).infowindow;
	           // get sublayer 0 and set the infowindow template
	           var sublayer = layer.getSubLayer(0);
	            sublayer.setInteraction(true);          
	          
	            layer.getSubLayer(0).set('template', $('#infowindow_template').html())
	            .on('error', function(err){
	              console.log('infowindow error: ', err);
	            });

	            //console.log($('#infowindow_template').html());
	           
	            sublayer.infowindow.set('template', $('#infowindow_template').html());
	           

	            sublayer.on('featureClick', function(e, latlng, pos, data, layerNumber) {
	                  //alert("Hey! You clicked " + data.cartodb_id);
	                  //console.log(pos);
	                  console.log(data);
	                  infowindow_model.set('visibility', true);
	                  console.log(infowindow_model);
	    
	                  console.log(window.translations[window.g.mapConfig.countyNameConcat + 'Map']);
	                  //return false;
	                  //this.infowindow.set('template', $('#infowindow_template').html());
	            });

	            sublayer.on('featureOver', function(e, latlng, pos, data, layerNumber) {
	              //$('.leaflet-container').css('cursor','pointer');
	              //console.log(e.layerNumber);
	              //console.log(e, latlng, pos, data, layerNumber);
	              //console.log(data);
	            });

	            //alert('d');
	            var config = window.translations[window.g.mapConfig.countyNameConcat + 'Map'];
	            console.log(config);
	            cdb.vis.Vis.addInfowindow(window.map, layer.getSubLayer(0), config, {'infowindowTemplate': $('#infowindow_template').html(), 'templateType': 'mustache'})

	          }).on('error', function() {
	            console.log("some error occurred");
	        });
	    }

		//this guy is old and no longer called
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