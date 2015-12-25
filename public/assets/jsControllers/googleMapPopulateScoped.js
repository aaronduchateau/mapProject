window.gmd = {
	//keep configurations crap out of intereact map
	pointMarkerUrl: function(){
		//return (window.g.jsBaseUrl() + '/images/icon-map-new-small.png');
	},
	cartoSqlConfig: new cartodb.SQL({
    	user: 'devtest', // Required
    	type: 'cartodb', // Required
    	host: 'anonymoustransaction.com:8080',
    	version: 'v1',
    	port:'8080',
    	protocol: 'http',
    	type: 'get',
		dataType: 'json',
		crossDomain: true
	}),
	cartoLayerConfig: function(sql, styles){
		var layerConfig = {
	    	user_name: 'devtest', // Required
	    	type: 'cartodb', // Required
	    	tiler_domain: 'anonymoustransaction.com',
	    	tiler_port:     "8181",
	    	tiler_protocol: 'http',
	    	cartodb_logo: false,
	    	sublayers: [{
	        	sql: sql, // Required
	        	cartocss: styles
	        	//interactivity: 'cartodb_id, the_geom, acreage, id, created_at'
	    	}]
	  	};

	  	return layerConfig;

	},
	paginatedResultsData: {
		readableQueryTitle: "Showing Results X in y",
		sqlString: "Select * FROM x",
		totalPages: 15,
		visiblePages: 5,
		totalResultCount: 0,
		currentPage: 1,
		resultsPerPage: 50,
		currentOffset: 0,
		shouldShowListResults: false,
		orderBy: 'acreage'
	},
	polygonQueryGeoJson: {
		geoJson: {},
		readableArea: null,
	},
	helper: {
		//look at our translation to find relevent column name
		findLocalColumn: function(columnKeyWord){
			var column = window.translations[window.g.mapConfig.countyNameConcat]['nameColumn'];
			switch (columnKeyWord) {
			    case 'acreage':
			        column = window.translations[window.g.mapConfig.countyNameConcat]['acreageColumn'];
			        break;
			    case 'name':
			        column = window.translations[window.g.mapConfig.countyNameConcat]['nameColumn'];
			        break;
			    case 'mapTaxlot':
			        column = window.translations[window.g.mapConfig.countyNameConcat]['mapTaxLotColumn'];
			        break;
		        case 'impValue':
			        column = window.translations[window.g.mapConfig.countyNameConcat]['impValue'];
			        break;
		        case 'landValue':
			        column = window.translations[window.g.mapConfig.countyNameConcat]['landValue'];
			        break;
			    case 'generatedTotal':
			        column = 'generatedtotal';
			        break;
			}
			return column;
		},
		constructSqlPrefix: function(searchType, countOrSelect){
			var prefixString = ""
			if (countOrSelect === 'select'){
				prefixString = "SELECT *, (" + this.findLocalColumn('impValue') + "::integer + " + this.findLocalColumn('landValue') + "::integer) AS generatedTotal";
			} else {

			}
			return prefixString;
		}
	},
	interactMap: {
		panToPosition: function(iconType, latMap, lngMap){
			/*
			var jacksonCounty = new google.maps.LatLng(latMap, lngMap);
			var marker = new google.maps.Marker({
			    position: jacksonCounty,
			    icon: window.gmd.pointMarkerUrl(),
			    map: window.map,
			    title: 'Hello World!'
			});
			window.map.panTo(jacksonCounty);
			*/
			if (iconType == 'blueMarker'){
				var currentIcon = L.icon({
				    iconUrl: window.g.jsBaseUrl() + '/images/icon-map-new-small.png',
				    iconSize: [32, 37],
				    iconAnchor: [16, 37]
				});
			}
			if (iconType == 'tree'){
				var currentIcon = L.icon({
				    iconUrl: window.g.jsBaseUrl() + '/images/leaf-green.png',
				    shadowUrl: window.g.jsBaseUrl() + '/images/leaf-shadow.png',

				    iconSize:     [38, 95], // size of the icon
				    shadowSize:   [50, 64], // size of the shadow
				    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
				    shadowAnchor: [4, 62],  // the same for the shadow
				    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
				});
			}
			L.marker([latMap, lngMap], {icon: currentIcon}).addTo(window.map);
		
			setTimeout(function(){ 
		  		window.map.panTo(new L.LatLng(latMap, lngMap));
		  	}, 500);
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
			      var returnCoords = {mapLat: results[0].geometry.location.lat(), mapLng: results[0].geometry.location.lng()};
			      
			  } else {
			  	alert('Sorry, looks like we could not find that address');
			  	window.dashHelp.hideSpinButton();
			  }
			});
		},
		queryAndPanToBounds: function(map, query) {
			return window.gmd.cartoSqlConfig.getBounds(query).done(function(bounds) {
	       		//fit map to bounds
	       		map.fitBounds(bounds);
	       		//chill for a sec and check the zoom level, some of the third party tile providers can't handle 
	       		//zoom level 20 or greater
	       		//ghetto solution for bing zoom level issue
	       		setTimeout(function(){ 
        			if(map.getZoom() > 18){
        				map.setZoom(18);
        			}
        			
        		}, 1700);
	       		console.log('BOUNDS')
	       		console.log(bounds);
	       		return bounds;
	       });

		},
		//this calls back to dom
		listTableQueryResultHandler: function(type, sqlString, data, count){
			var sanitizedResults = [];
			
			$.each(data.rows, function( index, value ) {
			  sanitizedResults.push(window.translations[window.g.mapConfig.countyNameConcat].translate(value));
			});

			window.paginatedResults = sanitizedResults;
			window.showListQueryAreaWithResults(sanitizedResults);
			console.log('sanitizedResults');
			console.log(sanitizedResults);
		},

		listLimitedQuery: function(type, sqlString, count){ 
			console.log('listLimitedQuery');
			//console.log(sqlString);
			//mixpanel.track("LimitedMapQuery", {"sqlString": sqlString});
			thisHeld = this;
			//var table = window.g.mapConfig.dashTableName;
			//window.gmd.cartoSqlConfig.execute("SELECT * FROM devtest." + table + " WHERE ownname = 'RNS MANAGEMENT LLC'")
			var limit = window.gmd.paginatedResultsData.resultsPerPage;
			var offset = window.gmd.paginatedResultsData.currentOffset;
			var orderColumn = window.gmd.helper.findLocalColumn(window.gmd.paginatedResultsData.orderBy);
			var prefixString = window.gmd.helper.constructSqlPrefix(type, 'select');
			//save below working basic
			//countSqlString = "SELECT *" + sqlString + " ORDER BY " + orderColumn + " LIMIT " + limit + " OFFSET " + offset;
			
			//countSqlString = "SELECT *, (CONVERT(INT, impval) + convert(INT, landval)) AS generatedTotal" + sqlString + " ORDER BY " + orderColumn + " LIMIT " + limit + " OFFSET " + offset;
			//countSqlString = "SELECT *, (impval::integer + landval::integer) AS generatedTotal" + sqlString + " ORDER BY " + orderColumn + " LIMIT " + limit + " OFFSET " + offset;
			countSqlString = prefixString + sqlString + " ORDER BY " + orderColumn + " LIMIT " + limit + " OFFSET " + offset;

			//sql += " AND SELECT (CONVERT(INT, impval) + convert(INT, landval)) AS generatedTotal"
			window.gmd.cartoSqlConfig.execute(countSqlString)
			  .done(function(data) {

			  	console.log('BIG FAT RESULTS');
			    console.log(data.rows);
			    thisHeld.listTableQueryResultHandler(type, sqlString, data, count);
			  })
			  .error(function(errors) {
			    // errors contains a list of errors
			    console.log("errors:" + errors);
			  });
		},
		listCountQueryResultHandler: function(type, sqlString, listCountQueryResult, shouldPopulateRightMenu, shouldPerformListQuery){
			
			var count = listCountQueryResult.rows[0].count;
			window.gmd.paginatedResultsData.totalResultCount = count;
			window.gmd.paginatedResultsData.currentOffset = 0;
			window.activatePagination(count, window.gmd.paginatedResultsData.resultsPerPage);
			if (listCountQueryResult.rows[0].count === 0 ){
				//should use communique here rather than alert
				window.populateLeftMenuWithResults('noResults', count);
			} else if (shouldPopulateRightMenu && shouldPerformListQuery) {
				window.populateLeftMenuWithResults(type, count);
				this.listLimitedQuery(type, sqlString, count);
			} else if (shouldPopulateRightMenu) {
				//populates our right menu, and passes in count 
				window.populateLeftMenuWithResults(type, count);
			} else if(shouldPerformListQuery) {
				this.listLimitedQuery(type, sqlString, count);
			}
			
		},

		listCountQuery: function(type, sqlString, shouldPopulateRightMenu, shouldPerformListQuery){ 
			thisHeld = this;
			countSqlString = "SELECT COUNT(*)" + sqlString;
			console.log(countSqlString);

			window.gmd.cartoSqlConfig.execute(countSqlString)
			  .done(function(data) {
			    //console.log(data.rows);
			    thisHeld.listCountQueryResultHandler(type, sqlString, data, shouldPopulateRightMenu, shouldPerformListQuery);
			  })
			  .error(function(errors) {
			    // errors contains a list of errors
			    console.log("errors:" + errors);
			  });
		},
		fromTableQueryBuilder: function(){
			var table = window.g.mapConfig.dashTableName;
			return " FROM devtest." + table;
		},
		multiResultQueryBuilder: function(type, params){
			
			if (type == 'owner'){
				var userColumn = window.gmd.helper.findLocalColumn('name');
				window.gmd.paginatedResultsData.readableQueryTitle = "Results with owner name like '" + params.owner +"'";
				var sql = " " + userColumn + " ILIKE '%" + params.owner + "%'";
				//sql += " AND SELECT (CONVERT(INT, impval) + convert(INT, landval)) AS generatedTotal"
				//window.gmd.paginatedResultsData.sqlString = sql;
				return sql;
			} else if (type == 'acreage'){
				var acreageColumn = window.gmd.helper.findLocalColumn('acreage');

				window.gmd.paginatedResultsData.readableQueryTitle = "Results between " + params.acreageFirst + " and " + params.acreageSecond + " acres";
				var sql = " " + acreageColumn + " BETWEEN " + params.acreageFirst + " AND " + params.acreageSecond;
				//window.gmd.paginatedResultsData.sqlString = sql;
				return sql;
			} else if(type === 'totalValue'){
				window.gmd.paginatedResultsData.readableQueryTitle = "Results between " + params.totalFirst + " and " + params.totalSecond + " in $";
				var sumLandImp = "(" + window.gmd.helper.findLocalColumn('impValue') + "::integer + " + window.gmd.helper.findLocalColumn('landValue') + "::integer)";
				var sql = " " + sumLandImp + " BETWEEN " + params.totalSecond + " AND " + params.totalFirst;
				//window.gmd.paginatedResultsData.sqlString = sql;
				return sql;
			} else if (type == 'taxlot'){
				var mapTaxLotColumn = window.gmd.helper.findLocalColumn('mapTaxlot');
				
				window.gmd.paginatedResultsData.readableQueryTitle = "Results where Assesor Parcel Number = '" + params.mapTaxLotId + "'";
				var sql = " " + mapTaxLotColumn + " = " + params.mapTaxLotId;
				//window.gmd.paginatedResultsData.sqlString = sql;
				return sql;
			} else if (type === 'latLng'){
				window.gmd.paginatedResultsData.readableQueryTitle = "Result Lat & Long ('" + params.mapLat + "', '" + params.mapLng + "')";
				var sql = " ST_Intersects(the_geom,CDB_LatLng(" + params.mapLat + "," + params.mapLng + "))";
				console.log(sql);
				//window.gmd.paginatedResultsData.sqlString = sql;
				return sql;
			} else if (type === 'address'){
				window.gmd.paginatedResultsData.readableQueryTitle = "Result for '" + params.fullAddress + "'";
				var sql = " ST_Intersects(the_geom,CDB_LatLng(" + params.mapLatHidden + "," + params.mapLngHidden + "))";
				//window.gmd.paginatedResultsData.sqlString = sql;
				return sql;
			} else if (type === 'polygon'){
				window.gmd.paginatedResultsData.readableQueryTitle = "Result for shape with area " + params.polygonReadableArea + " km<sup>2</sup>";
				var sql = " ST_Intersects(ST_Centroid(the_geom),ST_GeomFromGeoJSON('" + JSON.stringify(params.polygon) + "')) AND " + window.gmd.helper.findLocalColumn('name') + " IS NOT NULL";
				//window.gmd.paginatedResultsData.sqlString = sql;
				//MULTIPOLYGON(((-43.162879943848 -22.913021404896,-43.183307647705 -22.891041392518,-43.209915161133 -22.897841345212,-43.209915161132 -22.909068428006,-43.21626663208 -22.92092701284,-43.220729827881 -22.93310074698,-43.196353912354 -22.940372845276,-43.187084197998 -22.953493251659,-43.168888092041 -22.953809390333,-43.148288726807 -22.921875654802,-43.162879943848 -22.913021404896)),((-43.142280578613 -22.966296276961,-43.175239562988 -22.944482988916,-43.207511901855 -22.941953684522,-43.233604431152 -22.9495414559,-43.246307373047 -22.98115258902,-43.262100219727 -22.984313295763,-43.264846801758 -22.965031834579,-43.293685913086 -22.963767380373,-43.29231262207 -23.004224047371,-43.215408325195 -22.988422103968,-43.189830780029 -22.991266590272,-43.142280578613 -22.966296276961)),((-43.220901489258 -22.922349973292,-43.221416473389 -22.93626257684,-43.305015563965 -22.995059145473,-43.243560791016 -22.999799689663,-43.122024536133 -22.947960705279,-43.164596557617 -22.9043247036,-43.198757171631 -22.903692194474,-43.213176727295 -22.912072700955,-43.220901489258 -22.922349973292)))
				//https://github.com/csvsoundsystem/nicar-cartodb-postgis
				//SELECT ST_AsText(ST_Centroid('MULTIPOINT ( -1 0, -1 2, -1 3, -1 4, -1 7, 0 1, 0 3, 1 1, 2 0, 6 0, 7 8, 9 8, 10 6 )'));
				//something like below...
				//https://groups.google.com/forum/#!topic/cartodb/zEncez3tYZs
				return sql;
			//i think i can delete this....	
			} else if (type === 'custom'){
				if (params.type === 'string'){
		        	var customAccountString = params.name + " = '" + params.val + "'";
		    	} else if (params.type === 'number'){
		    		var customAccountString = params.name + " = " + params.val;
		    	}
				var sql = " " + customAccountString;
				return sql;
			}

		},
		//this calls the function above it to build our query
		//handle sql count and multi result vs single result here
		multiQueryApplyToMap: function(type, params, shouldPopulateRightMenu, shouldPerformListQuery){
			var thisHeld = this;

			//if the layer exists, nuke the old results
			if (window.layerOwnerResults){
				window.map.removeLayer(window.layerOwnerResults);
			}
			//comprise our sql string, depending on string or array
			if (type.length === 1) {
				var fromTable = this.fromTableQueryBuilder();
				var mainQuery = this.multiResultQueryBuilder(type[0], params);	
				var sql = fromTable + " WHERE" + mainQuery;
			} else {
				var firstType = _.first(type);
				var fromTable = this.fromTableQueryBuilder();
				var mainQuery = this.multiResultQueryBuilder(firstType, params);	
				var sql = fromTable + " WHERE" + mainQuery;
				var rest = _.rest(type);
				_.each(rest, function(type){
			        sql += " AND" + thisHeld.multiResultQueryBuilder(type, params);
			    });
			    window.gmd.paginatedResultsData.readableQueryTitle = "Results for custom linked query";
			}
			//this is used later by listLimitedQuery
			window.gmd.paginatedResultsData.sqlString = sql;
			

			var prefixString = window.gmd.helper.constructSqlPrefix(type, 'select');
			var sqlAsSelect = prefixString + sql; 
			/////////////////////////////////////////////////////////////
			//mixpanel tracking:
			mixpanel.track("MapQuery", {"sqlString": sqlAsSelect, "params": params});

			/////////////////////////////////////////////////////////////
			var boundingBox = this.queryAndPanToBounds(window.map, sqlAsSelect);
			//view-source:http://andrew.hedges.name/experiments/haversine/

	    	var styles = '#douglas83feet {polygon-fill: #0D6A92; polygon-opacity: 0.0; line-color: #8a0002; line-width: 4; line-opacity: 1;}'
			var LayerConfig = window.gmd.cartoLayerConfig(sqlAsSelect, styles);
			
			cartodb.createLayer(window.map, LayerConfig)
	         .addTo(window.map)
	         .on('done', function(layer) {
	         	window.layerOwnerResults = layer;
				//custom is type used by mult result single clicks, and we don't want 
				//that to blow our count out, or interfere with pagination	
				if (_.first(type) !== 'custom'){	
					thisHeld.listCountQuery(type, sql, shouldPopulateRightMenu, shouldPerformListQuery);
				}

	          }).on('error', function() {
	          	mixpanel.track("error", {"MultiQueryMapError": err});
	            console.log("some error occurred");
	        });

		},
		nestedMap: function(){

			var thisScoped = this;
			
			//instantiate map
			window.nestedMap = L.map('nested-map', { 
	          zoomControl: true,
	          center: new L.LatLng(window.infoWindowLat, window.infoWindowLng),
	          zoom: 15,
	          //this is a ghetto way to solve all zoom issues...should be base layer specific
	          //maxZoom: 18,
	          infoWindow: true,
	          attributionControl: false
	        });
	       

	        var gglTerrain = new L.Google('TERRAIN');
	        var gglHybrid = new L.Google('HYBRID');
	        var gglSatelite = new L.Google('SATELLITE');
	        var gglRoadmap = new L.Google('ROADMAP');
	        var bing = new L.BingLayer("Av_xt-ldQjqGScP74Vcd-aD7ArRjnSnV6_Lb2ye2WSmNDAu7lcX0kX2KK_1QWZfR");
	        //var yanSatelite = new L.Yandex();
	        //var yanSatelite = new L.Yandex("satelliteMap", {traffic:true, opacity:0.8, overlay:true});
	        
	        window.nestedMap.addLayer(gglHybrid);
	        //window.nestedMap.addLayer(L.tileLayer.provider('Esri.WorldImagery'));
	        

	        //we know look at the configuration file for these values
	        if (window.g.mapRowData.queryVal.type === 'string'){
	        	var customAccountString = window.g.mapRowData.queryVal.name + " = '" + window.g.mapRowData.queryVal.val + "'";
	    	} else if (window.g.mapRowData.queryVal.type === 'number'){
	    		var customAccountString = window.g.mapRowData.queryVal.name + " = " + window.g.mapRowData.queryVal.val;
	    	}
	       
	        
	        var tableName = window.g.mapConfig.countyNameConcat + "_" + window.g.mapConfig.stateAb;
	        console.log(tableName);
			//console.log(customAccountString);
	        var sql = "SELECT * FROM " + tableName + " WHERE " + customAccountString;
	        window.gmd.trackLastDetailQuery = sql;
	        mixpanel.track("NestedMapQuery", {"sqlString": sql});
	        var styles = '#douglas83feet {polygon-fill: #0D6A92; polygon-opacity: 0.0; line-color: #8a0002; line-width: 2; line-opacity: 1;}';
			var LayerConfig = window.gmd.cartoLayerConfig(sql, styles);

			cartodb.createLayer(window.nestedMap, LayerConfig)
	         .addTo(window.nestedMap)
	         .on('done', function(layer) {

	         	//add controls to our map
	            window.nestedMap.addControl(
		        	new L.Control.Layers( 
		        		{   'Google Satelite' : gglSatelite,
		        		    'Google Terrain' : gglTerrain, 
		        		    'Google Hybrid' : gglHybrid,
		        		    'Google Roadmap' : gglRoadmap,
		        		    //'Bing Satelite' : bing,
		        		    'MapQuest Aerial': L.tileLayer.provider('MapQuestOpen.Aerial'),
		        		    'Esri WorldTopoMap': L.tileLayer.provider('Esri.WorldTopoMap'),
							'Esri WorldImagery': L.tileLayer.provider('Esri.WorldImagery'),
		        		},
		        		{
		        		    'Platlines' : layer	
						}
					)
				);

	            //zoom and pan so our platlines fall nicely in our map
				//thisScoped.queryAndPanToBounds(window.nestedMap, sql);

	          }).on('error', function(err) {
	          	mixpanel.track("error", {"NestedMapError": err});
	            console.log("nested error occurred");
	        });
	        
	        setTimeout(function(){ 
        		$(window).trigger('resize');
        		window.nestedMap.invalidateSize(true);
        		//zoom and pan so our platlines fall nicely in our map
				thisScoped.queryAndPanToBounds(window.nestedMap, sql);
        	}, 700);

		}
	},
	onClickTileManager: function(e, latlng, pos, data, layerNumber){
		window.infoWindowLat = latlng[0];
		window.infoWindowLng = latlng[1];
	

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
	  
	    var infoWindowHtml;
	    infoWindowHtml = "<div><h5>" + feeOwner + "</h5>";
  		infoWindowHtml += "<div style='padding:10px;'><b>Acreage: </b>" + acreage + "<br/>";
  		infoWindowHtml += "<b>Total Value: </b>$" + totalValue + "</div>";
  		infoWindowHtml += "<a href='javascript:void(0);' onclick='leftPainOpenFromInfoWindow()' class='btn btn-primary left-open pull-right' style='color:white;margin-top:-3px;'>Full Report</a>";
  		infoWindowHtml += "</div>";

  		console.log(infoWindowHtml);
	    
		setTimeout(function(){
			$( '.cartodb-popup-content' ).html(infoWindowHtml);
		}, 500);

	    window.g.mapRowData = row;
	    window.g.mapRowData.lat = window.infoWindowLat;
	    window.g.mapRowData.lng = window.infoWindowLng;
	    window.g.mapRowData.accountOwnerName = window.g.mapConfig.accountOwnerName;
	    window.g.mapRowData.accountOwnerPhone = window.g.mapConfig.accountOwnerPhone;
	    window.g.mapRowData.accountOwnerEmail = window.g.mapConfig.accountOwnerEmail;
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

	showPolygonAreaEdited: function(e) {
	  console.log('showPolygonAreaEdited');
	  e.layers.eachLayer(function(layer) {
	    showPolygonArea({ layer: layer });
	  });
	},

	showPolygonArea: function(e) {
		console.log('showPolygonArea');
	  //console.log(e.layer._latlngs);	
	  console.log(e.layer.toGeoJSON());	
	  window.gmd.polygonQueryGeoJson.geoJson = e.layer.toGeoJSON().geometry;
	  window.gmd.polygonQueryGeoJson.geoJson['crs'] = {"type":"name","properties":{"name":"EPSG:4326"}};
	  window.featureGroup.clearLayers();
	  window.featureGroup.addLayer(e.layer);
	  window.gmd.polygonQueryGeoJson.readableArea = (LGeo.area(e.layer) / 1000000).toFixed(2);
	  //e.layer.bindPopup((LGeo.area(e.layer) / 1000000).toFixed(2) + ' km<sup>2</sup>');
	  //e.layer.openPopup();
	},

	removeDrawnLayersFromMap : function(){
		window.dashHelp.polygonSearchInstructionsShow();
		window.featureGroup.clearLayers();
	},

	polygonDrawStart : function(){
		window.mainTileSublayer.setInteraction(false);
	},

	polygonDrawStop : function(){
		window.mainTileSublayer.setInteraction(true);
		window.dashHelp.polygonSearchButtonsShow();
		window.polygonSearchShow('open');
	},

	addDrawingToolsToMap : function(){
		var thisHeld = this;
		if(window.featureGroup){
			window.featureGroup.clearLayers();
		}
		if (window.drawControl){
			window.map.removeControl(window.drawControl);
		}
    	window.featureGroup = L.featureGroup().addTo(window.map);
		window.drawControl = new L.Control.Draw({
		  position: 'topright',
		  //edit: {
		  //  featureGroup: featureGroup
		  //},
		  edit: false,
		  draw: {
		    polygon: {
				allowIntersection: false,
				repeatMode: false,
				drawError: {
					color: '#b00b00',
					timeout: 2500
				},
				shapeOptions: {
					stroke: true,
					color: '#f06eaa',
					weight: 4,
					opacity: 0.5,
					fill: true,
					clickable: false
				}
			},
		    polyline: false,
		    rectangle: false,
		    circle: false,
		    marker: false
		  }
		}).addTo(window.map);

		window.map.on('draw:created', thisHeld.showPolygonArea);
		window.map.on('draw:edited', thisHeld.showPolygonAreaEdited);
		window.map.on('draw:drawstart', thisHeld.polygonDrawStart);
		window.map.on('draw:drawstop', thisHeld.polygonDrawStop);
    },

	//this guy is now the main function
	populateMapAfterTimeout: function(){
        
        var thisScoped = this;

        var tableName = window.g.mapConfig.countyNameConcat + "_" + window.g.mapConfig.stateAb;
        window.g.mapConfig.dashTableName = tableName;

        var sql = "SELECT * FROM " + tableName;
	    var styles = '#douglas83feet {polygon-fill: #0D6A92; polygon-opacity: 0.5; line-color: #FFF; line-width: 1; line-opacity: 1;}'
		var LayerConfig = window.gmd.cartoLayerConfig(sql, styles);

		//here is our main layer containing tiles and info window
		cartodb.createLayer(window.map, LayerConfig)
         .addTo(window.map)
         .on('done', function(layer) {
           var infowindow_model = layer.getSubLayer(0).infowindow;
           // get sublayer 0 and set the infowindow template
           window.mainTileSublayer = layer.getSubLayer(0);
            mainTileSublayer.setInteraction(true);          
          
            layer.getSubLayer(0).set('template', $('#infowindow_template').html())
            .on('error', function(err){
              mixpanel.track("error", {"initialMapLoadSublayerError": err});
              console.log('infowindow error: ', err);
            });
           
            mainTileSublayer.infowindow.set('template', $('#infowindow_template').html());

            mainTileSublayer.on('featureClick', function(e, latlng, pos, data, layerNumber) {
                  //alert("Hey! You clicked " + data.cartodb_id);
                  //console.log(pos);
                  //console.log('latlng');
                  //console.log(latlng);
                  //console.log(data);

                  //maybe comment this guy out
                  infowindow_model.set('visibility', true);
                  //mainTileSublayer.setInteraction(false); 

                  //console.log(infowindow_model);
    			  //console.log(window.translations[window.g.mapConfig.countyNameConcat]['mapArr']);
                  thisScoped.onClickTileManager(e, latlng, pos, data, layerNumber);
            });
            //lets keep this commented out for now
            //mainTileSublayer.on('featureOver', function(e, latlng, pos, data, layerNumber) {
           	//});
            var configurationArray = window.translations[window.g.mapConfig.countyNameConcat]['mapArr'];
            //console.log('configuration array');
            //console.log(window.translations);
            //console.log(configurationArray);
            cdb.vis.Vis.addInfowindow(window.map, layer.getSubLayer(0), configurationArray, {'infowindowTemplate': $('#infowindow_template').html(), 'templateType': 'mustache'})

          }).on('error', function() {
          	mixpanel.track("error", {"NestedMapError": err});
            console.log("some error occurred");
            alert('Something Went Wrong, Please Refresh the Page and let Aaron know');
        });


        //add our county queried bounding layer, with county specific query  
        var countyBoundrySql = "SELECT * FROM cb_2013_us_county_5m";
        var LayerConfigCountyBoundry = window.gmd.cartoLayerConfig(countyBoundrySql, styles);

        cartodb.createLayer(window.map, LayerConfigCountyBoundry)
         .addTo(window.map)
         .on('done', function(layer) {
            window.layerCountyBoundry = layer.getSubLayer(0);
            window.layerCountyBoundry.hide();
          }).on('error', function() {
          	mixpanel.track("error", {"countyLayerMapError": err});
            console.log("some error occurred");
        });

        //toggle layers based on zoom  
        window.map.on("zoomend", function(){
			zoomLev = window.map.getZoom();
			if (zoomLev < 13){
				window.layerCountyBoundry.show();
				window.mainTileSublayer.hide();
			}else{
				window.layerCountyBoundry.hide();
				window.mainTileSublayer.show();
			}
			/*
			if (zoomLev == 13){
				window.g.communiqueOpen('You have Zoomed Out, enjoy these sexy County Platlines');
			    setTimeout(function(){ 
			       window.g.communiqueClose();
			    }, 4000);
			}
			if (zoomLev == 12){
				window.g.communiqueOpen('At this Zoomed In, enjoy these sexy Taxlots');
			    setTimeout(function(){ 
			       window.g.communiqueClose();
			    }, 4000);
			}
			*/
		});

		this.addDrawingToolsToMap();

		//start: add created_at for last update to dom
		var firstResult = "SELECT created_at" + window.gmd.interactMap.fromTableQueryBuilder() + " WHERE cartodb_id = 1";
		window.gmd.cartoSqlConfig.execute(firstResult)
			  .done(function(data) {
			    var lastUpdated = moment(data.rows[0].created_at);
			    $('#created-at').html(lastUpdated.format("MMMM Do, YYYY"));
			  })
			  .error(function(errors) {
			    // errors contains a list of errors
			    console.log("errors grabbing first result for updated val:" + errors);
			  });
		//end: add created_at for last update to dom
    },

    //this is our entry point to the map
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
	          zoomControl: false,
	          center: new L.LatLng(latMap, lngMap),
	          zoom: 16,
	          infoWindow: true,
	          attributionControl: false
	        });

	        new L.Control.Zoom({ position: 'topright' }).addTo(map);

	        //var ggl2 = new L.Google('TERRAIN');
	        var ggl2 = new L.Google('HYBRID');
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

		},1300);
	}
};