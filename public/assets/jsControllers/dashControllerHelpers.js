window.dashHelp = {
	myLocationCallback: function(position){
	    $('#latMap').val(position.coords.latitude);
	    $('#lngMap').val(position.coords.longitude);
	    $('#search-click').click();
	},
	polygonSearchInstructionsShow: function(){
		$('#search-form-polygon-search-1').show();
		$('#search-form-polygon-search-2').hide();
		//hide the joined query checkbox
		$('.custom-checkbox-polygon').hide();
		$('.custom-checkbox-polygon input[type=checkbox]').attr('checked', false);
	},
	polygonSearchButtonsShow: function(){
		$('#search-form-polygon-area').text(window.gmd.polygonQueryGeoJson.readableArea);
		$('#search-form-polygon-search-2').show('fast');
		$('#search-form-polygon-search-1').hide('fast');
		//show the joined query checkbox
		$('.custom-checkbox-polygon').show();
	},
	validateSearchInput: function(myVal, valType, item, reset){
	  if(reset){	
      	item.css('border', '1px solid #ccc');
  	  }
      if(!myVal){
      	return true;
      }
      if (valType === 'alphanumeric'){
        if( (/[^-,.'#A-Za-z0-9\x20]/.test( myVal )) ) {
           //input not alphanumeric
           item.css('border', '1px solid red');
           return false;
        }
        return true;     
      } else if (valType === 'numeric'){
      	if( (/[^-.#0-9]/.test( myVal )) ) {
           //input not alphanumeric
           item.css('border', '1px solid red');
           return false;
        }
        return true;
      }
   	},
   	validationList: {
   		"owner": [
   			'search-owner'
   		],
   		//leave this blank as the geocoder
   		//will take care of it for us
 		"address":[],
 		"totalValue": [
 			'value-between-1',
 			'value-between-2'
		],
		"acreage": [
   			'acreage-between-1',
   			'acreage-between-2'
   		],
		"taxLot": [
   			'search-taxlot-field'
   		],
		"latLng": [
   			'lngMap',
   			'latMap'
   		],
		"polygon":[]
   	},
   	//this gets called on every search click
   	validateEmpty: function(releventGroups){
   		//start out with the assumption everything is cool.
   		this.globalInputErrorStatus = true;
   		var thisHeld = this;
   		var releventGroupsArr = [];
   		if (typeof(releventGroups) === 'string') {
   			releventGroupsArr.push(releventGroups);
   		} else {
   			releventGroupsArr = releventGroups;
   		}
   		//check for empty
   		_.each(releventGroupsArr, function(group){
   			_.each(thisHeld.validationList[group], function(field){
   				var field = $('#' + field);
   				//catch blank values
   				if(!field.val() || field.val() === " "){
   					field.css('border', '1px solid red');
   					window.dashHelp.globalInputErrorStatus = false;
   				}

   			});
   		});
   		//iterate over all fields and check for type specific errors
   		$( ".search-field" ).each(function(index, item) {
	        var item = $(item);
	        var errorType = item.attr('data-search-type');
	        var myVal = item.val();
	        if(thisHeld.validateSearchInput(myVal, errorType, item) === false){
	          thisHeld.globalInputErrorStatus = false;
	        }
      	});
   	},
	timeNow: function() {
    	return moment().format('MMMM Do YYYY, h:mm a');
  	},
  	timeNowHoursMin: function() {
    	return moment().format('h:mm a');
  	},
  	showSpinButton: function(searchType){
  		$(".btn-search-spin[data-type-attribute='" + searchType + "']").css('display','inline-block');
  	},
  	hideSpinButton: function(){
  	  //show all of our search btns, hide spinner
      $("[class$=btn-search]").show();
      $("[class$=btn-search-spin]").hide();
  	},
  	linkedSearchList: [],
  	lastSearchUuid : null,
  	sessionSearchArray: [],
  	generateUUID: function() {
	    var d = new Date().getTime();
	    var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
	        var r = (d + Math.random()*16)%16 | 0;
	        d = Math.floor(d/16);
	        return (c=='x' ? r : (r&0x3|0x8)).toString(16);
	    });
	    return uuid;
	},
  	singleVsMultiLookup: {
  		'totalValue' : 'multi',
  		'latLng'	 : 'single',
  		'address'	 : 'single',
  		'owner'	     : 'multi',
  		'acreage'	 : 'multi',
  		'taxlot'	 : 'single',
  		'polygon'	 : 'multi'
  	},
  	leftTemplateJson: function( searchType, numResults){
	    var tempJson = {};
	    tempJson.mapTime = this.timeNowHoursMin();
	    tempJson.numResults = numResults;
	    //uuid
	    var uuid = this.generateUUID();
	    tempJson.uuid = uuid;
	    this.lastSearchUuid = uuid;
	    //mode
	    if (typeof(searchType) != 'string'){
	    	tempJson.mode = 'multi';
	    } else {	
	    	tempJson.mode = this.singleVsMultiLookup[searchType];
		}
	    //slurp up all form data
	    tempJson.searchType = searchType;
	    //totalValue
        tempJson.totalFirst = $('#value-between-1').val();
        tempJson.totalSecond = $('#value-between-2').val();
        //latLng
        tempJson.mapLat = $('#latMap').val();
        tempJson.mapLng = $('#lngMap').val();
        //address
        var address = $('#search-address').val();
		var city = $('#search-city').val();
		var state = $('#search-state').val();
		var zip = $('#search-zip').val();
		var fullAddy = address + ' ' + city + ' ' + state + ' ' + zip;
		tempJson.fullAddress = fullAddy;
		//deal with duplicate here
		tempJson.mapLatHidden = $('#latMapAddressHidden').val();
		tempJson.mapLngHidden = $('#lngMapAddressHidden').val();
		//owner
		tempJson.owner = $('#search-owner').val();
		//acreage
		tempJson.acreageFirst = $('#acreage-between-1').val();
	    tempJson.acreageSecond = $('#acreage-between-2').val();
	    //taxlot
	    tempJson.mapTaxLotId = $('#search-taxlot-field').val();
	    tempJson.polygon = window.gmd.polygonQueryGeoJson.geoJson;
	    tempJson.polygonReadableArea = window.gmd.polygonQueryGeoJson.readableArea;

	    //push into our global store
	    this.sessionSearchArray.push(tempJson);
	    return tempJson;
  	},
	rightTemplateJson: function( searchType, numResults){
	    var tempJson = {};
	    tempJson.mapTime = this.timeNow();
	    tempJson.numResults = numResults;
	    if ( searchType === 'totalValue' ){
	      tempJson.searchType = searchType;
	      tempJson.totalFirst = $('#value-between-1').val();
	      tempJson.totalSecond = $('#value-between-2').val();
	      tempJson.mode = 'multi';
	      return tempJson;
	    } else if ( searchType === 'latLng' ){
	      tempJson.searchType = searchType;
	      tempJson.mapLat = $('#latMap').val();
	      tempJson.mapLng = $('#lngMap').val();
	      tempJson.mode = 'single';
	      return tempJson;
	    } else if ( searchType === 'address' ) {
	      tempJson.searchType = searchType;
	      tempJson.mode = 'single';

	      var address = $('#search-address').val();
	      var city = $('#search-city').val();
	      var state = $('#search-state').val();
	      var zip = $('#search-zip').val();
	      var fullAddy = address + ' ' + city + ' ' + state + ' ' + zip;

	      tempJson.fullAddress = fullAddy;
	      var returnCoords = {mapLat: $('#latMapAddressHidden').val(), mapLng: $('#lngMapAddressHidden').val()};
	      $.extend( tempJson, returnCoords );
	      return tempJson;
	    } else if ( searchType === 'owner' ){
	      tempJson.searchType = searchType;
	      tempJson.owner = $('#search-owner').val();
	      tempJson.mode = 'multi';
	      return tempJson;
	    } else if ( searchType === 'acreage' ){
	      tempJson.searchType = searchType;
	      tempJson.acreageFirst = $('#acreage-between-1').val();
	      tempJson.acreageSecond = $('#acreage-between-2').val();
	      tempJson.mode = 'multi';
	      return tempJson;
	    } else if ( searchType === 'taxlot' ){
	      tempJson.searchType = searchType;
	      tempJson.mapTaxLotId = $('#search-taxlot-field').val();
	      tempJson.mode = 'single';
	      return tempJson;
	    } else {
	      alert('issue!');
	    }
  	},
  	moveSelectionLeftArrow: function(forceBlowOut){
      if (forceBlowOut){
        $('.arrow-left').css('opacity', 0.0);
        return false;
      }
      //left arrow states, 1) default state, 2) full_search state (two pains) 3) multi_result state 
      //window.g.visualDashState = 'default'; 
      var domElementToMatch = undefined;
      var leftHeld = -9999;

      if (window.g.visualDashState === 'default'){
        domElementToMatch = $('.single-right-item').closest('.active-item-right');
        leftHeld = window.g.oneQuarterWidth();
      } else if (window.g.visualDashState === 'full_search'){
        domElementToMatch = $('.single-right-item').closest('.active-item-right');
        leftHeld = window.g.halfWidth();
      } else if (window.g.visualDashState === 'multi_result'){
        domElementToMatch = $('.query-table-row').closest('.active-query-table-row');
        leftHeld = window.g.halfWidth(); 
      } 

      //if no active item is available, blow her away
      if (!domElementToMatch.length) {
        $('.arrow-left').css('opacity', 0.0);
        return false;
      }

      var x = $(domElementToMatch).offset().left;
      var y = $(domElementToMatch).offset().top;
      var h = $(domElementToMatch).height();
      var h2 = (h * .5);

      //if our arrow is out of scroll view, blow her away
      if (y < 95) {
        $('.arrow-left').css('opacity', 0.0);
        return false;
      }

      $('.arrow-left').css('border-top', h2 + 'px solid transparent');
      $('.arrow-left').css('border-bottom', h2 + 'px solid transparent');
      $('.arrow-left').css('border-left', h2 + 'px solid #337ab7');

      $( ".arrow-left" ).animate({
        opacity: 1,
        left: (leftHeld - 1)
      }, 400, function() {
        // Animation complete.
        $( ".arrow-left" ).animate({
          opacity: 1,
          top: y
        }, 400, function() {
          // Animation complete.
        });
      });
    },
  	instantiateScrollers: function(){
  		var thisHeld = this;
  		//enforce all content is loaded with window.load
	    $(window).load(function(){
			$(".dash-left-list").mCustomScrollbar({
				theme:"minimal"
			});
			$(".dash-right-list").mCustomScrollbar({
				theme:"minimal",
				callbacks:{
				    //scroll begins
				    onScrollStart:function(){
				        thisHeld.moveSelectionLeftArrow(true);
				    },
				    //scroll ends
				    onScroll:function(){
				        thisHeld.moveSelectionLeftArrow(false);
				    }
				}
			});
			$(".dash-list-query-table-area").mCustomScrollbar({
				theme:"minimal",
				callbacks:{
				    //scroll begins
				    onScrollStart:function(){
				        thisHeld.moveSelectionLeftArrow(true);
				    },
				    //scroll ends
				    onScroll:function(){
				        thisHeld.moveSelectionLeftArrow(false);
				    }
				}
			});
			$(".dash-search-options").mCustomScrollbar({
				theme:"minimal"
			});
	    });
  	}
};