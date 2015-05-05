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
		var windowWidth = this.windowWidth();
		var oneQuarterWidth = this.oneQuarterWidth();
		var halfWidth = this.halfWidth();
		var windowLargeWidth = this.windowLargeWidth();

		$("#body-dash").css("overflow-x", "hidden"); 
	    $(".container-dash").css('min-width', windowLargeWidth + 'px');
	    $(".container-dash").css('position','absolute');
	    $(".container-dash").css('top', '98px');
	    $(".container-dash").css('left', '-' + oneQuarterWidth + 'px');

	    $(".options-area").css("width", windowWidth + "px");
	    $(".options-area").css('position','absolute');
	    $(".options-area").css('top', '60px');

	    $(".dash-left-list").css("width", halfWidth + "px");
	    $(".dash-center").css("width", halfWidth + "px");
	    $(".dash-right-list").css("width", oneQuarterWidth + "px");
	    $(".dash-options").css("width", oneQuarterWidth + "px");

	    $(".dash-left-inter-margin").css("margin-left", oneQuarterWidth + "px");

	    $(".dash-left-list").css("height", adjustedWindowHeight + "px");
	    $(".dash-center").css("height", adjustedWindowHeight + "px");
	    $(".dash-right-list").css("height", adjustedWindowHeight + "px");

	    //absolute positioning for elements
	    $(".dash-left-list").css("position", "absolute");
	    $(".dash-left-list").css("top", "0px");
	    $(".dash-left-list").css("left", "0px");

	    $(".dash-center").css("position", "absolute");
	    $(".dash-center").css("top", "0px");
	    $(".dash-center").css("left", halfWidth + "px");

	    $(".dash-right-list").css("position", "absolute");
	    $(".dash-right-list").css("top", "0px");
	    $(".dash-right-list").css("left", windowWidth + "px");

	    $(".dash-options").css("position", "absolute");
	    $(".dash-options").css("top", "0px");
	    $(".dash-options").css("left", windowWidth + oneQuarterWidth + "px");

	    //set width for header
	    $('.left-action-buttons').css("width", halfWidth + "px");

	    //set up communique
	    $("#communique").css("width", windowWidth + "px");

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

