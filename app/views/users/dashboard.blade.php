<!--top menu goes here-->
<div class="options-area" style="margin-left:5px;margin-right:10px;">
  <h5 style="color:white;" class="left-result-heading dash-heading-4 pull-left">
    &nbsp;&nbsp;&nbsp;Welcome! you are viewing taxlot data for <span id="county-label"></span>, <span id="state-label"></span>
  </h5>
  <div class="pull-left left-action-buttons" style="display:none;">
    <span class="left-action-buttons-title">
      <input type="checkbox" class="letter-toggle" value="1" checked>
    </span>
    <a class="btn btn-primary pull-right back" style="margin-right: 20px;">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> 
    </a>
    <div class="dropdown pull-right" style="margin-right:20px;">
      <a class="btn btn-primary" style="" id="print-me">
        <span class="glyphicon glyphicon-print" aria-hidden="true"></span> 
      </a>
      <a class="btn btn-primary" style="" id="save-me">
        <span class="glyphicon glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> 
      </a>
      
      <!--<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true" style="margin-right:10px;">
        More options <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
        <li role="presentation"><a id="save-me" role="menuitem" tabindex="-1" href="#">Save this taxlot</a></li>
        <li role="presentation"><a id="print-me" role="menuitem" tabindex="-1" href="#">Print this view</a></li>
      </ul>-->
    </div>
    <!--<a href="javascript:void(0);" id="review-scroll" class="btn btn-primary pull-right">
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
      <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
      <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
    </a>-->
  </div>
  <button id="config" class="btn btn-primary pull-right" style="margin-right:10px;">
    <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> 
  </button>
  <button class="btn btn-primary pull-right back-right" style="margin-right:10px;display:none;">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  </button>
   <button id="current-loc-click" class="btn btn-primary pull-right" style="margin-right:10px;">
    <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
  </button>
</div>
<div class="container-dash">
  <div class="dash-left-list" style="background-color:rgba(13,106,146,0.9);">
    <div class="dash-left-inter-margin" style="display:none;">
      <!--this is populated using avatarTemplate-->
    </div>
    <div class="dash-left-full-margin">
    </div>
  </div>
  <div id="map-canvas" class="dash-center" style="">
    <h4 class="white-class" style="width:300px;text-align:center;margin-top:50px;">
    <img src="{{ URL::asset('images/loader.GIF') }}" style="width:32px;height:32px;">
    Loading Content...
    </h4>
    <!--map goes here-->
  </div>
  <div class="dash-right-list" style="background-color:rgba(13,106,146,0.9);">
    <div class="dash-right-inter-margin" style="display:none;">
      <!--this is populated using avatarTemplate-->
    </div>
  </div>
  <div class="dash-options" style="background-color:rgba(13,106,146,0.0);">
    <div class="options-inter-margin" style="display:none;">
      <!--content-->
      <form role="form">
        <!--<div class="form-group">
          <label for="exampleInputEmail1">Search by Keyword:</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Filter by Keywords">
        </div>-->
        <div class="form-group">
          <label for="exampleInputEmail1">Search by Lat & Long:</label>
          <input type="text" class="form-control" id="lngMap" placeholder="longitude" value="-122.877734">
          <input type="text" class="form-control" id="latMap" placeholder="lattitude" value="42.320921">
          <a href="javascript:void(0);" id="search-click"class="btn btn-default" >Search</a>
          <br/>
          <label for="exampleInputEmail1">Search Location:</label>
          <input type="text" class="form-control" placeholder="Address" id="search-address">
          <input type="text" class="form-control" placeholder="City" id="search-city">
          <input type="text" class="form-control" placeholder="State" id="search-state">
          <input type="text" class="form-control" placeholder="Zip" id="search-zip">
          <!--<input type="checkbox"> <span style="color:white;">Reset to saved Address</span>-->
          <a href="javascript:void(0);" class="btn btn-default" id="search-all-address">Search By Address</a>
        </div>
        <!--<div class="form-group">
           <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                filter within 50 miles
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">10 miles</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">25 miles</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">50 miles</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">75 miles</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">100 miles</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">200 miles</a></li>
              </ul>
            </div>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Day Range:</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Start Date:">
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="End Date:">
        </div>
        <button type="submit" class="btn btn-default">Update Search Results</button>
      </form>-->
      <!--content-->
    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-lg blue-background" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="background-color:rgba(13,106,146,0.8);">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <p class="modal-title" id="exampleModalLabel" style="color:#d3d3d3;font-size:15px;">Don't have an Account? <a href="#" style="color:white;">Sign Up Here</a>.</p>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4">
            <form class="navbar-form navbar-left well custom-form-well" role="form" >
              <p class="custom-font" style="margin-top:0px;">Sign into Avatar Account</p>
              <div class="form-group form-margin">
                <input type="text" placeholder="Email" class="form-control">
              </div>
              <div class="form-group form-margin">
                <input type="password" placeholder="Password" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
          </div>
          <div class="col-md-4">
            <form class="navbar-form navbar-left well custom-form-well" role="form" >
              <p class="custom-font" style="margin-top:0px;">Sign into Company Account</p>
              <div class="form-group form-margin">
                <input type="text" placeholder="Email" class="form-control">
              </div>
              <div class="form-group form-margin">
                <input type="password" placeholder="Password" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
          </div>
          <div class="col-md-4">
           <h2 class="custom-text-brand"> MyEyesRemote&#0153;</h2>
           <img src="{{ URL::asset('images/logo-small.png')}}" style="margin-left:10px;margin-top:10px;"/>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--include this on every page-->
<input type="hidden" id="client-email-holder" value="{{Auth::user()->email}}">
<input type="hidden" id="ghetto-domain-for-js-holder" value="{{ URL::asset('')}}">

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&v=3&libraries=geometry -->
<!-- start new libs -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&v=3&libraries=geometry"></script>
<script src="http://libs.cartocdn.com/cartodb.js/v3/3.14/cartodb.js"></script>
<script src="{{ URL::asset('dist/js/layer/tile/Google.js') }}"></script>
<!-- end new libs -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

<script src="{{ URL::asset('dist/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('dist/js/handlebars-v2.0.0.js') }}"></script>
<script src="{{ URL::asset('dist/js/jQuery.print.js') }}"></script>
<script src="{{ URL::asset('dist/js/moment.js') }}"></script>

<script src="{{ URL::asset('assets/jsModels/avatarDashboardModel.js') }}"></script>
<script src="{{ URL::asset('assets/jsModels/dashModel.js') }}"></script>
<script src="{{ URL::asset('assets/jsControllers/googleMapPopulateScoped.js') }}"></script>
<script src="{{ URL::asset('assets/jsControllers/globalVars.js') }}"></script>

<script src="{{ URL::asset('assets/jsTranslations/OR.js') }}"></script>

<script src="{{ URL::asset('dist/scroll/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ URL::asset('dist/js/jQuery.switchButton.js') }}"></script>
<!--$(selector).mCustomScrollbar("scrollTo",position,options);-->
<!--//http://manos.malihu.gr/jquery-custom-content-scroller/-->

<!--include handlbar templates-->
@include('handlebarTemplates.dashTemplate')
@include('handlebarTemplates.globalTemplate')

<script>
  function timeNow() {
    return moment().format('MMMM Do YYYY, h:mm a');
  }

  function rightTemplateJson(){
    var tempJson = {mapLat: $('#latMap').val(), mapLng: $('#lngMap').val(), mapTime: timeNow()};
    return tempJson;
  }

  function myLocationCallback(position){
    $('#latMap').val(position.coords.latitude);
    $('#lngMap').val(position.coords.longitude);
    $('#search-click').click();
  }

  $( document ).ready(function() {
    
    window.g.mapConfig = {{$mapCountyData}};
    window.g.mapConfig = window.g.mapConfig[0];
    window.g.mapConfig.userId = {{Auth::user()->id}};
    window.g.mapConfig.accountOwnerName = '{{Auth::user()->firstname}} {{Auth::user()->lastname}}';
    window.g.mapConfig.accountOwnerPhone = '{{Auth::user()->phone}}';

    console.log(window.g.mapConfig);
    $('#county-label').text(window.g.mapConfig.countyName);
    $('#state-label').text(window.g.mapConfig.stateAb);
    $('#latMap').val(window.g.mapConfig.startLat);
    $('#lngMap').val(window.g.mapConfig.startLng);

    //set up everything to have the right margins and what not
    window.g.triPageSetup();
    
    //load global template and populate top menu
     window.g.populateTopMenu(
      { menu: {class: "", link: "{{ URL::asset('/users/menu') }}", action: ""},
        dash: {class: " active", link: "javascript:void(0);", action: ""},
        emailHeld: $('#client-email-holder').val() });
    
    //load dash specific template
    var rightDashTemplate;
    var templateResult;

    //this loads our template for the left pain
    var loadLeftBar = function(data){
      var source = $("#dash-left-template").html();
      var leftDashTemplate = Handlebars.compile(source);
      //templateResult = leftDashTemplate({dashLeftArrayData: JSON.parse(data)});
      templateResult = leftDashTemplate({dashLeftArrayData: data});
      $('.dash-left-inter-margin').prepend(templateResult);
    }

    window.dashModel.getSavedTaxlots(loadLeftBar);


    //var source   = $("#dash-left-template").html();
    //var leftDashTemplate = Handlebars.compile(source);
    //templateResult = leftDashTemplate(window.avatar);
    //$('.dash-left-inter-margin').append(templateResult);

    //this load our template for the right pain 
    source = $("#dash-right-template").html();
    rightDashTemplate = Handlebars.compile(source);
    templateResult = rightDashTemplate(rightTemplateJson());
    $('.dash-right-inter-margin').append(templateResult);
    $('.single-right-item:first').addClass('active-item-right');

    //populate the map
    window.gmd.populateMap( $('#latMap').val(), $('#lngMap').val() );
   

    $(window).load(function(){
        
      $(".dash-left-list").mCustomScrollbar({
        theme:"minimal"
      });

      $(".dash-right-list").mCustomScrollbar({
        theme:"minimal"
      });
      
    });

    //print the left dash pain
    $(document).on('click', '#print-me', function(event) {
      $('.dash-left-full-margin').print({
        globalStyles : false, // Use Global styles
        mediaPrint : false, // Add link with attrbute media=print
        //stylesheet : "http://fonts.googleapis.com/css?family=Inconsolata", //Custom stylesheet
        iframe : true, //Print in a hidden iframe
        noPrintSelector : ".avoid-this"
        //, // Don't print this
        //append : "custom tip can go here", // Add this on top
        //prepend : "<h2>Avatar RFP - MyEyesRemote.com</h2>" // Add this at bottom
      });
    });

    function toggleLetter(){
      if ( $('.letter-toggle').prop('checked') ){
        $('.detail').hide();
        $('.letter').show();
      } else {
        $('.letter').hide();
        $('.detail').show();
      }
    }

    //toggle letter view vs detail view
    $(document).on('change', '.letter-toggle', function(event) {
      toggleLetter();
    });

    
    //as far as i can tell this should be bubbling up and working, don't know why it isn't
    //for now i'll use ghetto onclick event from info window, but not happy about it
    //$(document).on('click', '.left-open', function(event) {  
    window.leftPainOpenFromInfoWindow = function(event){  
      
        $('#config').hide();
        $('.back').show();
        $('.back-right').hide()
        //start: toggle heading area
        $('.left-result-heading').hide();
        $('.left-action-buttons').show();
        //end: toggle heading area
        $('.dash-left-inter-margin').slideUp('slow');
        $('.dash-left-full-margin').slideUp('slow');
        $( ".container-dash" ).animate({
          left: "0"
        }, 400, function() {
          // Animation complete.
          
          //this loads our template for the expanded info view in the left pain
          var source = $("#dash-expanded-info-template").html();
          var leftDashTemplate = Handlebars.compile(source);
          //var indexTracker = $(event.target).attr('data-result-index');
          //var indexTracker = $(event.target).closest('div').attr('data-result-index');
        
          var templateResult = leftDashTemplate(window.g.mapRowData);
          $('.dash-left-full-margin').html(templateResult);
          //trigger Nested Map
          window.gmd.interactMap.nestedMap();
          //this loads the work description for the expanded view
          /*source   = $("#job-description").html();
          leftDashTemplate = Handlebars.compile(source);
          templateResult = leftDashTemplate(window.avatar);
          $('.dash-left-full-margin').append(templateResult);
          //load empty div for binding
          $('.dash-left-full-margin').append("<h4 id='top-review' class='white-class'>User Reviews:</h4>");
          //this loads the user reviews for the expanded view
          source   = $("#user-reviews").html();
          leftDashTemplate = Handlebars.compile(source);
          templateResult = leftDashTemplate(window.avatar);
          $('.dash-left-full-margin').append(templateResult);
          $('#image-thumb-slider').css("max-width", (window.g.halfWidth() - 80) + "px");
          */
          $('.dash-left-full-margin').slideDown('slow');
          toggleLetter();
        });
    //});
    };
    
    //bind scroll click to view user reviews
    $(document).on('click', '#review-scroll', function() {
        $(".dash-left-list").mCustomScrollbar("scrollTo","#top-review");
    });

    $(document).on('click', '.back', function() {
       goBack();
    });

    $(document).on('click', '.back-right', function() {
       goBack();
    });

    //handle response from save taxlot event
    var afterSaveTaxlot = function(data){
      loadLeftBar(data);
    };

    //save taxlot data
    $(document).on('click', '#save-me', function() {
      window.dashModel.saveTaxlot(afterSaveTaxlot);
      window.g.communiqueOpen('Taxlot saved! click the back button to see it in your left hand pane');
      setTimeout(function(){ 
         window.g.communiqueClose();
      }, 4000);
       
    });

    function removeSavedItemCallback(data){
      console.log(data);
      window.g.communiqueClose();
    }

    function removeSavedItem(item){
      var removeIndex = item.attr('data-result-index');
      var userIndex = window.g.mapConfig.userId;
      window.dashModel.unsetSavedLeft(removeIndex, userIndex, removeSavedItemCallback);
      window.g.communiqueOpen('removing this item from your saved list...');
      item.closest('div').slideUp();
    }

    //add map marker and pan to saved taxlot
    $(document).on('click', '.left-saved-open', function(event) {
       //check for remove click
       if( $(event.target).hasClass('trash-hide') ){
          removeSavedItem($(event.target));
          return false;
       }

       window.g.highlightLastItem('.left-saved-open', event, 'active-item-right');
       window.g.toggleClickedItem('.arrow-hide', event, '.trash-hide');
       var lat = $(event.target).closest('div').attr('data-result-lat');
       var lng = $(event.target).closest('div').attr('data-result-lng');
       var owner = $(event.target).closest('div').attr('data-result-owner');
       window.g.communiqueOpen('Adding marker, and centering map, for taxlot owned by ' + owner);
       window.gmd.interactMap.panToPosition('tree', lat, lng);
       setTimeout(function(){ 
         window.g.communiqueClose();
       }, 4000);
    });


    function goBack(){
      $('.back-right').hide();
      $('#config').show();
        //start: toggle heading area
      $('.left-result-heading').show();
      $('.left-action-buttons').hide();
      //end: toggle heading area
      $('.dash-left-full-margin').slideUp('slow');
      $( ".container-dash" ).animate({
        left: - window.g.oneQuarterWidth()
      }, 400, function() {
        $('.dash-left-inter-margin').slideDown('slow');
          // Animation complete.
      });
      window.g.communiqueClose();
    }

    $(document).on('click', '#config', function() {
       //$(".container-dash").css('left','0px');
       $('#config').hide();
       $('.back-right').show();
        $( ".container-dash" ).animate({
          left: - window.g.halfWidth()
        }, 400, function() {
          // Animation complete.
        });
    });

    $(document).on('click', '#search-click', function() {
       templateResult = rightDashTemplate(rightTemplateJson());
       $('.dash-right-inter-margin').prepend(templateResult);
       $( ".single-right-item" ).each(function() {
         $( this ).removeClass('active-item-right');
       });
       $('.single-right-item:first').addClass('active-item-right');
       window.gmd.interactMap.panToPosition('blueMarker', $('#latMap').val(), $('#lngMap').val() );
       goBack();
    });

    $(document).on('click', '#search-all-address', function() {
      window.g.communiqueOpen("Give us a second to find that address for you");
      var address = $('#search-address').val();
      var city = $('#search-city').val();
      var state = $('#search-state').val();
      var zip = $('#search-zip').val();
      var fullAddy = address + ' ' + city + ' ' + state + ' ' + zip;
      window.gmd.interactMap.addressLookup(fullAddy);
      goBack();
    });

    $(document).on('click', '#current-loc-click', function() {
       window.g.communiqueOpen("Please wait while we find your location");
       navigator.geolocation.getCurrentPosition(myLocationCallback);
    });

    //this manages lat lng results on the right
    $(document).on('click', '.single-right-item', function(event) {
       var latMap = $(event.target).closest('table').attr('data-attr-lat');
       var lngMap = $(event.target).closest('table').attr('data-attr-lng');
       window.g.highlightLastItem('.single-right-item', event, 'active-item-right');
       window.gmd.interactMap.panToPosition('blueMarker', latMap, lngMap );
      
    });


    //set up our checkbox slider for letter view vs detail view
    $("input[type=checkbox]").switchButton({
      width: 30,
      height: 15,
      button_width: 15,
      on_label: 'Letter',
      off_label: 'Detail',
      checked: false
    });
    
  });

</script>