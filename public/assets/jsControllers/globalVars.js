window.g = {
	jsBaseUrl: function(){
		return $('#ghetto-domain-for-js-holder').val();
	},
	mapConfig: {},
	windowHeight: function(){
		return $( window ).height();
	},
	adjustedWindowHeight: function(){
		return $( window ).height() - 100;
	},
	adjustedWindowHeightLarge: function(){
		return $( window ).height() - 58;
	},
	windowWidth: function(){
		return $( window ).width();
	},
	oneQuarterWidth: function(){
		console.log(this.windowWidth());
		return this.windowWidth() / 4;
	},
	halfWidth: function(){
		return this.oneQuarterWidth() + this.oneQuarterWidth();
	},
	windowLargeWidth: function(){
		return this.windowWidth() + this.oneQuarterWidth();
	},
	triPageSetup: function(){

		var windowHeight = this.windowHeight();
		var adjustedWindowHeight = this.adjustedWindowHeight();
		var adjustedWindowHeightLarge = this.adjustedWindowHeightLarge();
		var windowWidth = this.windowWidth();
		var oneQuarterWidth = this.oneQuarterWidth();
		var halfWidth = this.halfWidth();
		var windowLargeWidth = this.windowLargeWidth();

		$("#body-dash").css("overflow", "hidden"); 
	    $(".container-dash").css('min-width', windowLargeWidth + 'px');
	    $(".container-dash").css('position','absolute');
	    $(".container-dash").css('top', '98px');
	    $(".container-dash").css('left', '-' + oneQuarterWidth + 'px');

	    $(".options-area").css("width", windowWidth + "px");
	    $(".options-area").css('position','absolute');
	    $(".options-area").css('top', '60px');

	    $(".dash-left-list").css("width", halfWidth + "px");
	    $(".dash-center").css("width", halfWidth + "px");
	    $(".dash-center-shell").css("width", halfWidth + "px");
	    $(".dash-right-list").css("width", oneQuarterWidth + "px");
	    $(".dash-options").css("width", oneQuarterWidth + "px");

	    $(".dash-left-list").css("height", adjustedWindowHeight + "px");
	    $(".dash-center").css("height", adjustedWindowHeight + "px");
	    $(".dash-center-shell").css("height", adjustedWindowHeight + "px");
	    $(".dash-right-list").css("height", adjustedWindowHeight + "px");
	    $(".dash-options").css("height", adjustedWindowHeight + "px");
	    $(".dash-search-options").css("height", (adjustedWindowHeight - 40) + "px");

	    //special handling for this guy
	    $(".dash-left-inter-margin").css("margin-left", "0px");
	    $(".dash-left-inter-margin").css("width", oneQuarterWidth + "px");

	    //also this guy
	    $(".dash-search-controls").css("top", (adjustedWindowHeight - 40) + "px");
	    $(".dash-search-controls").css("width", oneQuarterWidth + "px");

	    //width for serach top action items
	    $("#search-top-action-holder").css("width", halfWidth + "px");

	    //absolute positioning for elements
	    $(".dash-left-list").css("position", "absolute");
	    $(".dash-left-list").css("top", "0px");
	    $(".dash-left-list").css("left", windowWidth + "px");

	    $(".polygon-div").css("position", "absolute");
	    $(".polygon-div").css("top", (adjustedWindowHeight - 40) + "px");
	    $(".polygon-div").css("left", (halfWidth - 310) + "px");

	    $(".dash-center-shell").css("position", "absolute");
	    $(".dash-center-shell").css("top", "0px");
	    $(".dash-center-shell").css("left", halfWidth + "px");

	    $(".dash-right-list").css("position", "absolute");
	    $(".dash-right-list").css("top", "0px");
	    $(".dash-right-list").css("left", oneQuarterWidth + "px");

	    $(".dash-options").css("position", "absolute");
	    $(".dash-options").css("top", "0px");
	    $(".dash-options").css("left", "0px");

	    //flyout for multi-query support
	    $(".dash-list-query-area").css("position", "absolute");
	    $(".dash-list-query-area").css("z-index", "90000000");
	    $(".dash-list-query-area").css("height", adjustedWindowHeightLarge + "px");
	    $(".dash-list-query-table-area").css("height", (adjustedWindowHeightLarge - 80) + "px")
	    $(".dash-list-query-area").css("top", "57px");
	    $(".dash-list-query-area").css("left", "-" + halfWidth + "px");
	    $(".dash-list-query-area").css("width", halfWidth + "px");

	    //set width for header
	    $('.left-action-buttons').css("width", halfWidth + "px");

	    //set up communique
	    $("#communique").css("width", windowWidth + "px");

	    $('#dash-list-query-area').show();

	},
	twoLeftPageSetup: function(){

		var windowHeight = this.windowHeight();
		var adjustedWindowHeight = this.adjustedWindowHeight();
		var windowWidth = this.windowWidth();
		var oneQuarterWidth = this.oneQuarterWidth();
		var halfWidth = this.halfWidth();
		var windowLargeWidth = this.windowLargeWidth();

		$("#body-dash").css("overflow-x", "hidden"); 
	    $(".container-dash").css('min-width', windowWidth + 'px');
	    $(".container-dash").css('position','absolute');
	    $(".container-dash").css('top', '98px');
	    $(".container-dash").css('left', '0px');

	    $(".options-area").css("width", windowWidth + "px");
	    $(".options-area").css('position','absolute');
	    $(".options-area").css('top', '60px');

	    $(".menu-left-list-1").css("width", oneQuarterWidth + "px");
	    $(".menu-left-list-2").css("width", oneQuarterWidth + "px");
	    $(".dash-center").css("width", halfWidth + "px");

	    $(".menu-left-list-1").css("height", adjustedWindowHeight + "px");
	    $(".menu-left-list-2").css("height", adjustedWindowHeight + "px");
	    $(".dash-center").css("height", adjustedWindowHeight + "px");
	    $(".dash-center-top-container").css("height", (adjustedWindowHeight - 150) + "px");

	    //absolute positioning for elements
	    $(".menu-left-list-1").css("position", "absolute");
	    $(".menu-left-list-1").css("top", "0px");
	    $(".menu-left-list-1").css("left", "0px");

	    $(".menu-left-list-2").css("position", "absolute");
	    $(".menu-left-list-2").css("top", "0px");
	    $(".menu-left-list-2").css("left", oneQuarterWidth + "px");

	    $(".dash-center").css("position", "absolute");
	    $(".dash-center").css("top", "0px");
	    $(".dash-center").css("left", halfWidth + "px");

	    $(".dash-center-bottom").css("position", "absolute");
	    $(".dash-center-bottom").css("top", (adjustedWindowHeight - 150) + "px");

	    $(".dash-center-top-container").css("position", "absolute");
	    $(".dash-center-top-container").css("top", "0px");
	    

	    //set width for header
	    $('.left-action-buttons').css("width", halfWidth + "px");

	    //set up communique
	    $("#communique").css("width", windowWidth + "px");

	},
	populateTopMenu: function(menuJson){
		var source = $("#top-menu").html();
  		var topMenuTemplate = Handlebars.compile(source);
  		var templateResult = topMenuTemplate(menuJson);
  		$('#body-dash').prepend(templateResult);
  		window.g.generalLoaderHtml = $("#general-loader").html();
	},
	highlightLastItem: function(targetClassName, event, activeClass){
        $( targetClassName ).removeClass( activeClass );
        $(event.target).closest( targetClassName ).addClass( activeClass );
    },
    toggleClickedItem: function(defaultClassName, event, activeClass){
        $( activeClass ).hide();
        $( defaultClassName ).show();
        $(event.target).closest('div').find( defaultClassName ).hide();
        $(event.target).closest('div').find( activeClass ).show();
    },
    scrollItemToTop: function(nameOfScrollBinding, scrollToMe ){
    	$( nameOfScrollBinding ).mCustomScrollbar("scrollTo", scrollToMe );
    },
    communiqueOpen: function(content){
    	$( "#communique-text" ).html(content);
    	$( "#communique" ).animate({
          	top: "0"
        	}, 400, function() {
        });
    },
    communiqueClose: function(){
    	setTimeout(function(){ 
	    	$( "#communique" ).animate({
	          	top: "-35"
	        	}, 1100, function() {
	        });
    	}, 1400);
    },
	mapRowData: {}
}	

