<div class="arrow-left"></div>
<!--list query area chills here-->
<div id="dash-list-query-area" class="dash-list-query-area" style="">
  <div style="height:40px;background-color:#337ab7;">
    <h5 style="color:white;padding-top:5px;padding-left:10px;" class="paginatedTitleHolder left-result-heading dash-heading-4 pull-left">
      &nbsp;&nbsp;&nbsp;Results for Acreage Between 2 and 4 Acres
    </h5>
  <button class="btn btn-primary pull-right back-right-list-query" style="margin-right:10px;margin-top:3px;">
    <span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span>
  </button>
  </div>
  <div class="dash-list-query-table-area">
    <div class="dash-list-query-table-area-list">
    asdfasdfasdfasdfasdfa
    </div>
  </div>
  <div style="height:40px;background-color:#337ab7;padding:5px 0px 5px 10px;">
    <ul id="pagination" class="pagination-sm"></ul>
    <h5 style="color:white;margin-right:10px;" class="left-result-heading dash-heading-4 pull-right">
      &nbsp;&nbsp;&nbsp;Showing 1-100 of 2500 results
    </h5>
  </div>  
</div>
<!--top menu goes here-->
<div class="options-area" style="margin-left:5px;margin-right:10px;">
  <h5 style="color:white;margin-right:10px;" class="left-result-heading dash-heading-4 pull-right">
    &nbsp;&nbsp;&nbsp;Welcome! you are viewing taxlot data for <span id="county-label"></span>, <span id="state-label"></span>
  </h5>
  <div class="pull-right left-action-buttons" style="display:none;">
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
      <a class="btn btn-primary" style="" id="list-v-grid">
        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> 
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
  <span id="search-top-action-holder" class="pull-left">
    <button id="config" class="btn btn-primary pull-left" style="margin-left:5px;">
      <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> 
    </button>
    <button class="btn btn-primary pull-left back-right" style="margin-left:5px;display:none;">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    </button>
    <span class="right-switch-detail-results-holder pull-right" style="margin-right:15px;margin-top:5px;display:none;">
      <input type="checkbox" class="toggle-list-mode" value="1" checked>
    </span>
  </span>
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
    <div class="dash-search-options">
      <!--<div class="search-dropdown-holder">
        <div class="search-dropdown-nested-holder">
          <div class="dropdown">
            Search by:&nbsp;
            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
              <span id="search-but-label-shown">Address</span>
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
              <li role="presentation"><a class="dropdown-search-selection" data-action="address-div" role="menuitem" tabindex="-1" href="#">Address</a></li>
              <li role="presentation"><a class="dropdown-search-selection" data-action="owner-div" role="menuitem" tabindex="-1" href="#">Owner</a></li>
              <li role="presentation"><a class="dropdown-search-selection" data-action="latLon-div" role="menuitem" tabindex="-1" href="#">Lat and lon</a></li>
              <li role="presentation"><a class="dropdown-search-selection" data-action="acreage-div" role="menuitem" tabindex="-1" href="#">Acreage</a></li>
              <li role="presentation"><a class="dropdown-search-selection" data-action="taxlot-div" role="menuitem" tabindex="-1" href="#">Taxlot id</a></li>
            </ul>
          </div>
        </div>
        <div style="clear:both"></div>
      </div>-->
      <div class="options-inter-margin" style="display:none;">
        <!--content-->
        <form role="form">
          <!--<div class="form-group">
            <label for="exampleInputEmail1">Search by Keyword:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Filter by Keywords">
          </div>-->
          <div class="form-group">
            <!--Search By Owner-->
            <div class="search-field-holder owner-div well custom-well-info-dark-blue" style="margin-top:0px;">
              <!--<label for="exampleInputEmail1">Search By Owner:</label>-->
              <input type="text" class="form-control" placeholder="Full Owner Name" id="search-owner">

              <!--<input type="checkbox"> <span style="color:white;">Reset to saved Address</span>-->
              <a href="javascript:void(0);" class="btn btn-default" id="search-all-owners">Search</a>
            </div>
            <!--Search Location-->
            <div class="search-field-holder address-div well custom-well-info-dark-blue">
              <!--<label for="exampleInputEmail1">Search Location:</label>-->
              <input type="text" class="form-control" placeholder="Address" id="search-address">
              <input type="text" class="form-control" placeholder="City" id="search-city">
              <input type="text" class="form-control" placeholder="State" id="search-state">
              <input type="text" class="form-control" placeholder="Zip" id="search-zip">
              <!--<input type="checkbox"> <span style="color:white;">Reset to saved Address</span>-->
              <a href="javascript:void(0);" class="btn btn-default" id="search-all-address">Search</a>
            </div>
            <!--Search Between Acreage-->
            <div class="search-field-holder acreage-div well custom-well-info-dark-blue">
              <!--<label for="exampleInputEmail1">Search Between Acreage:</label>-->
              <select id="acreage-between-1" class="form-control">
                <option value=".01">.01 acres</option>
                <option value=".02">.02 acres</option>
                <option value=".03">.03 acres</option>
                <option value=".04">.04 acres</option>
                <option value=".05">.05 acres</option>
                <option value=".06">.06 acres</option>
                <option value=".07">.07 acres</option>
                <option value=".08">.08 acres</option>
                <option value=".09">.09 acres</option>
                <option value="1">.1 acres</option>
                <option value="1.5">1.5 acres</option>
                <option value="2">2 acres</option>
                <option value="2.5">2.5 acres</option>
                <option value="3">3 acres</option>
                <option value="3.5">3.5 acres</option>
                <option value="4">4 acres</option>
                <option value="5">5 acres</option>
                <option value="6">6 acres</option>
                <option value="7">7 acres</option>
                <option value="8">8 acres</option>
                <option value="9">9 acres</option>
                <option value="10">10 acres</option>
                <option value="15">15 acres</option>
                <option value="20">20 acres</option>
                <option value="25">25 acres</option>
                <option value="30">30 acres</option>
                <option value="40">40 acres</option>
                <option value="50">50 acres</option>
                <option value="60">60 acres</option>
                <option value="70">70 acres</option>
                <option value="80">80 acres</option>
                <option value="90">90 acres</option>
                <option value="100">100 acres</option>
                <option value="130">130 acres</option>
                <option value="160">160 acres</option>
                <option value="190">190 acres</option>
                <option value="200">200 acres</option>
                <option value="225">225 acres</option>
                <option value="250">250 acres</option>
                <option value="275">275 acres</option>
                <option value="300">300 acres</option>
                <option value="325">325 acres</option>
                <option value="350">350 acres</option>
                <option value="375">375 acres</option>
                <option value="400">400 acres</option>
                <option value="425">425 acres</option>
                <option value="450">450 acres</option>
                <option value="475">475 acres</option>
                <option value="500">500 acres</option>
                <option value="525">525 acres</option>
                <option value="550">550 acres</option>
                <option value="575">575 acres</option>
                <option value="600">600 acres</option>
                <option value="625">625 acres</option>
                <option value="650">650 acres</option>
                <option value="675">675 acres</option>
                <option value="700">700 acres</option>
                <option value="750">750 acres</option>
                <option value="800">800 acres</option>
                <option value="850">850 acres</option>
                <option value="900">900 acres</option>
                <option value="950">950 acres</option>
                <option value="1000">1000 acres</option>
                <option value="1500">1500 acres</option>
                <option value="2000">2000 acres</option>
                <option value="2500">2500 acres</option>
                <option value="3000">3000 acres</option>
                <option value="3500">3500 acres</option>
                <option value="4000">4000 acres</option>
                <option value="4500">4500 acres</option>
                <option value="5000">5000 acres</option>
                <option value="10000">10000 acres</option>
                <option value="20000">20000 acres</option>
                <option value="30000">30000 acres</option>
                <option value="40000">40000 acres</option>
              </select>
              <select id="acreage-between-2" class="form-control">
                <option value=".01">.01 acres</option>
                <option value=".02" selected="selected">.02 acres</option>
                <option value=".03">.03 acres</option>
                <option value=".04">.04 acres</option>
                <option value=".05">.05 acres</option>
                <option value=".06">.06 acres</option>
                <option value=".07">.07 acres</option>
                <option value=".08">.08 acres</option>
                <option value=".09">.09 acres</option>
                <option value="1">.1 acres</option>
                <option value="1.5">1.5 acres</option>
                <option value="2">2 acres</option>
                <option value="2.5">2.5 acres</option>
                <option value="3">3 acres</option>
                <option value="3.5">3.5 acres</option>
                <option value="4">4 acres</option>
                <option value="5">5 acres</option>
                <option value="6">6 acres</option>
                <option value="7">7 acres</option>
                <option value="8">8 acres</option>
                <option value="9">9 acres</option>
                <option value="10">10 acres</option>
                <option value="15">15 acres</option>
                <option value="20">20 acres</option>
                <option value="25">25 acres</option>
                <option value="30">30 acres</option>
                <option value="40">40 acres</option>
                <option value="50">50 acres</option>
                <option value="60">60 acres</option>
                <option value="70">70 acres</option>
                <option value="80">80 acres</option>
                <option value="90">90 acres</option>
                <option value="100">100 acres</option>
                <option value="130">130 acres</option>
                <option value="160">160 acres</option>
                <option value="190">190 acres</option>
                <option value="200">200 acres</option>
                <option value="225">225 acres</option>
                <option value="250">250 acres</option>
                <option value="275">275 acres</option>
                <option value="300">300 acres</option>
                <option value="325">325 acres</option>
                <option value="350">350 acres</option>
                <option value="375">375 acres</option>
                <option value="400">400 acres</option>
                <option value="425">425 acres</option>
                <option value="450">450 acres</option>
                <option value="475">475 acres</option>
                <option value="500">500 acres</option>
                <option value="525">525 acres</option>
                <option value="550">550 acres</option>
                <option value="575">575 acres</option>
                <option value="600">600 acres</option>
                <option value="625">625 acres</option>
                <option value="650">650 acres</option>
                <option value="675">675 acres</option>
                <option value="700">700 acres</option>
                <option value="750">750 acres</option>
                <option value="800">800 acres</option>
                <option value="850">850 acres</option>
                <option value="900">900 acres</option>
                <option value="950">950 acres</option>
                <option value="1000">1000 acres</option>
                <option value="1500">1500 acres</option>
                <option value="2000">2000 acres</option>
                <option value="2500">2500 acres</option>
                <option value="3000">3000 acres</option>
                <option value="3500">3500 acres</option>
                <option value="4000">4000 acres</option>
                <option value="4500">4500 acres</option>
                <option value="5000">5000 acres</option>
                <option value="10000">10000 acres</option>
                <option value="20000">20000 acres</option>
                <option value="30000">30000 acres</option>
                <option value="40000">40000 acres</option>
              </select>

              <!--<input type="checkbox"> <span style="color:white;">Reset to saved Address</span>-->
              <a href="javascript:void(0);" class="btn btn-default" id="search-all-acreage">Search</a>
            </div>
            <!--Search By Map Taxlot-->
            <div class="search-field-holder taxlot-div well custom-well-info-dark-blue">
              <!--<label for="exampleInputEmail1">Search By Map Taxlot #:</label>-->
              <input type="text" class="form-control" placeholder="Taxlot number" id="search-taxlot-field">

              <!--<input type="checkbox"> <span style="color:white;">Reset to saved Address</span>-->
              <a href="javascript:void(0);" class="btn btn-default" id="search-all-taxlots">Search</a>
            </div>
            <!--Search by Lat & Long-->
            <div class="search-field-holder latLon-div well custom-well-info-dark-blue">
              <!--<label for="exampleInputEmail1">Search by Lat & Long:</label>-->
              <input type="text" class="form-control" id="lngMap" placeholder="longitude" value="-122.877734">
              <input type="text" class="form-control" id="latMap" placeholder="lattitude" value="42.320921">
              <a href="javascript:void(0);" id="search-click"class="btn btn-default" >Search</a>
            </div>
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
  <div class="dash-search-controls" style="height:40px;position:relative;">
    <button id="current-loc-click" class="btn btn-primary pull-left" style="margin-left:10px;margin-top:5px;">
      <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Current Location
    </button>
    <button id="advanced-options" class="btn btn-primary pull-right" style="margin-right:10px;margin-top:5px;">
      Advanced Options
    </button>
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
<script src="http://api-maps.yandex.ru/2.0/?load=package.map&lang=ru-RU" type="text/javascript"></script>
<script src="http://libs.cartocdn.com/cartodb.js/v3/3.14/cartodb.js"></script>
<script src="{{ URL::asset('dist/js/layer/tile/Google.js') }}"></script>
<script src="{{ URL::asset('dist/js/layer/tile/Bing.js') }}"></script>

<!-- end new libs -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

<script src="{{ URL::asset('dist/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('dist/js/handlebars-v2.0.0.js') }}"></script>
<script src="{{ URL::asset('dist/js/jQuery.print.js') }}"></script>
<script src="{{ URL::asset('dist/js/jQuery.pagination.js') }}"></script>
<script src="{{ URL::asset('dist/js/moment.js') }}"></script>

<script src="{{ URL::asset('assets/jsModels/avatarDashboardModel.js') }}"></script>
<script src="{{ URL::asset('assets/jsModels/dashModel.js') }}"></script>
<script src="{{ URL::asset('assets/jsControllers/googleMapPopulateScoped.js') }}"></script>
<script src="{{ URL::asset('assets/jsControllers/globalVars.js') }}"></script>

<script src="{{ URL::asset('assets/jsTranslations/OR.js') }}"></script>

<script src="{{ URL::asset('dist/scroll/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ URL::asset('dist/js/jQuery.switchButton.js') }}"></script>

<script src="{{ URL::asset('dist/js/layer/tile/Common.js') }}"></script>
<!--$(selector).mCustomScrollbar("scrollTo",position,options);-->
<!--//http://manos.malihu.gr/jquery-custom-content-scroller/-->

<!--include handlbar templates-->
@include('handlebarTemplates.dashTemplate')
@include('handlebarTemplates.globalTemplate')

<script>
  //load dash specific template
  var rightDashTemplate;
  var templateResult;

  function timeNow() {
    return moment().format('MMMM Do YYYY, h:mm a');
  }

  //create our jquery deferred object
  var deferedAddressLookup = $.Deferred();

  function rightTemplateJson( searchType, numResults){
    var tempJson = {};
    tempJson.mapTime = timeNow();
    tempJson.numResults = numResults;
    if ( searchType === 'latLng' ){
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

      //architecturally this is strange, however i want to cheat a little so we have the lat and lng available without an additional lookup
      //maybe i should consider not caring about that to make the code cleaner
      var geocoder = new google.maps.Geocoder();
      geocoder.geocode( { 'address': fullAddy}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK)
        {   
            $('#latMap').val(results[0].geometry.location.lat());
            $('#lngMap').val(results[0].geometry.location.lng());
            var returnCoords = {mapLat: results[0].geometry.location.lat(), mapLng: results[0].geometry.location.lng()};
            $.extend( tempJson, returnCoords );
            console.log('important');
            console.log(tempJson);
            templateResult = rightDashTemplate(tempJson);
            $('.dash-right-inter-margin').prepend(templateResult);
            $( ".single-right-item" ).each(function() {
              $( this ).removeClass('active-item-right');
            });
            $('.single-right-item:first').addClass('active-item-right');
            window.gmd.interactMap.panToPosition('blueMarker', tempJson.mapLat, tempJson.mapLng );
            window.g.communiqueClose();

        } else {
          window.g.communiqueClose();
          alert('Sorry, looks like we could not find that address');
        }
      });
      
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
    //console.log(tempJson);
    
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
    window.g.mapConfig.accountOwnerEmail = '{{Auth::user()->email}}';

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
    //may get rid of this, but here we start with a marker
    templateResult = rightDashTemplate(rightTemplateJson( 'latLng', 1 ));
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

      $(".dash-list-query-table-area").mCustomScrollbar({
        theme:"minimal"
      });

      $(".dash-search-options").mCustomScrollbar({
        theme:"minimal"
      });
      
    });


    //print the left dash pain
    $(document).on('click', '#print-me', function(event) {
      $('.dash-left-full-margin').print({
        globalStyles : true, // Use Global styles
        mediaPrint : false, // Add link with attrbute media=print
        //stylesheet : "http://fonts.googleapis.com/css?family=Inconsolata", //Custom stylesheet
        iframe : true, //Print in a hidden iframe
        noPrintSelector : ".avoid-this"
        //, // Don't print this
        //append : "custom tip can go here", // Add this on top
        //prepend : "<h2>Avatar RFP - MyEyesRemote.com</h2>" // Add this at bottom
      });
    });

    var listOrGridToggleState = 'list';
    //list v grid toggle
    $(document).on('click', '#list-v-grid', function(event) {
      if (listOrGridToggleState == 'list'){
        $('.block-container-toggle-left').css('width', '100%');
        $('.block-container-toggle-left').css('float', 'none');
        $('.block-container-toggle-right').css('width', '100%');
        $('.block-container-toggle-right').css('float', 'none');
        $('#list-v-grid .glyphicon').removeClass('glyphicon-th-list').addClass('glyphicon-th');
        listOrGridToggleState = 'grid';
      }else{
        $('.block-container-toggle-left').css('width', '50%');
        $('.block-container-toggle-left').css('float', 'left');
        $('.block-container-toggle-right').css('width', '50%');
        $('.block-container-toggle-right').css('float', 'right');
        $('#list-v-grid .glyphicon').removeClass('glyphicon-th').addClass('glyphicon-th-list');
        listOrGridToggleState = 'list';
      }
      
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

    function toggleListMode(){
      if ( $('.toggle-list-mode').prop('checked') ){
        window.gmd.paginatedResultsData.shouldShowListResults = true;
        console.log(window.gmd.paginatedResultsData.shouldShowListResults);
      } else {
        window.gmd.paginatedResultsData.shouldShowListResults = false;
        console.log(window.gmd.paginatedResultsData.shouldShowListResults);
      }
    }

    //toggle letter view vs detail view
    $(document).on('change', '.letter-toggle', function(event) {
      toggleLetter();
    });

    $(document).on('change', '.toggle-list-mode', function(event) {
      toggleListMode();
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
          left: - window.g.halfWidth()
        }, 400, function() {
          // Animation complete.
          
          //this loads our template for the expanded info view in the left pain
          var source = $("#dash-expanded-info-template").html();
          var leftDashTemplate = Handlebars.compile(source);
          //var indexTracker = $(event.target).attr('data-result-index');
          //var indexTracker = $(event.target).closest('div').attr('data-result-index');
          console.log(window.g.mapRowData);
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

    $(document).on('click', '.dropdown-search-selection', function(event) {
        console.log(event);
        var insideText = $(event.target).text();
        $('#search-but-label-shown').text(insideText);
        $('.search-field-holder').hide();
        var currentAction = $(event.target).attr('data-action');
        $('.' + currentAction).slideDown('fast');
        console.log(currentAction);
    });
    
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

    //activate pagination
    window.activatePagination = function(count, resultsPerPage){
      var totalPages = Math.floor(count / resultsPerPage);
      if (totalPages < 1){
        totalPages = 1;
      }
      
      var pageData = $('#pagination').data();
      console.log(pageData);
      if ( !jQuery.isEmptyObject(pageData) ){
          $('#pagination').twbsPagination('destroy'); 
      } 

      $('#pagination').twbsPagination({
          totalPages: totalPages,
          visiblePages: 5,
          startPage: 1,
          loop: true,
          onPageClick: function (event, page) {
            window.gmd.paginatedResultsData.currentOffset = window.gmd.paginatedResultsData.resultsPerPage * page;
            window.gmd.interactMap.listLimitedQuery(null, window.gmd.paginatedResultsData.sqlString, null);
          }
      });
    }

    window.showListQueryAreaWithResults = function(paginatedResults){
      $( ".dash-list-query-area" ).animate({
        left: window.g.halfWidth()
      }, 400, function() {
        console.log('paginatedResults');
        console.log(paginatedResults);
        //compile result into template
        var source = $("#dash-list-query-table-template").html();
        var listQueryTemplate = Handlebars.compile(source);
        var templateResult = listQueryTemplate({listData: paginatedResults});
        $('.dash-list-query-table-area-list').html(templateResult);
        //update query title 
        var title = window.gmd.paginatedResultsData.totalResultCount + " " + window.gmd.paginatedResultsData.readableQueryTitle;
        $('.paginatedTitleHolder').html(title);
        
      });
    }

    window.hideListQueryArea = function(){
      $( ".dash-list-query-area" ).animate({
        left: window.g.windowLargeWidth()
      }, 400, function() {
        $('.dash-left-inter-margin').slideDown('slow');
          // Animation complete.
      });
    }

    $(document).on('click', '.back-right-list-query', function(event) {
      window.hideListQueryArea();
    });

    function goBack(){
      $('.back-right').hide();
      $('#config').show();
      $('.right-switch-detail-results-holder').hide();
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

    window.populateRightMenuWithResults = function(linkMode, numResults){
      //start: populates right menu with correct data and highlights 
      templateResult = rightDashTemplate(rightTemplateJson(linkMode), numResults);
      $('.dash-right-inter-margin').prepend(templateResult);
      $( ".single-right-item" ).each(function() {
        $( this ).removeClass('active-item-right');
      });
      $('.single-right-item:first').addClass('active-item-right');
      //end: populates right menu with correct data and highlights 
    }

    $(document).on('click', '#config', function() {
       //$(".container-dash").css('left','0px');
       $('#config').hide();
       $('.back-right').show();
       $('.right-switch-detail-results-holder').show('fast');
  
        $( ".container-dash" ).animate({
          left: "0"
        }, 400, function() {
          // Animation complete.
        });
    });

    $(document).on('click', '#search-click', function() {
       //templateResult = rightDashTemplate(rightTemplateJson());
       //var tempJson = {searchType: 'latLng', mapLat: $('#latMap').val(), mapLng: $('#lngMap').val(), mapTime: timeNow()};
       
       window.gmd.interactMap.panToPosition('blueMarker', $('#latMap').val(), $('#lngMap').val() );

       //window.populateRightMenuWithResults('latLng');
       //goBack();
    });

    $(document).on('click', '#search-all-address', function() {
      window.g.communiqueOpen("Give us a second to find that address for you");

      //this function below also handles latlng lookup
      rightTemplateJson('address');

      
      //goBack();
    });

    $(document).on('click', '#search-all-acreage', function() {
      //window.gmd.interactMap.userQuery();
      var first = $('#acreage-between-1').val();
      var second = $('#acreage-between-2').val();

      //type, params, shouldPopulateRightList, shouldPerformListQuery
      window.gmd.interactMap.multiQueryApplyToMap('acreage', { 'acreageFirst': first, 'acreageSecond': second }, true, true); 

      //window.populateRightMenuWithResults('acreage');
    });

    $(document).on('click', '#search-all-taxlots', function() {
      var mapTaxLot = $('#search-taxlot-field').val();
      window.gmd.interactMap.multiQueryApplyToMap('taxlot', { 'mapTaxLotId': mapTaxLot }, true, true); 

      //window.populateRightMenuWithResults('taxlot');
    });

    function moveSelectionLeftArrow(domElementToMatch){
      var x = $(domElementToMatch).offset().left;
      var y = $(domElementToMatch).offset().top;
      var h = $(domElementToMatch).height();
      var h2 = (h * .5);
      $('.arrow-left').css('left', (x - h2 +1) + 'px');
      $('.arrow-left').css('top', y + 'px');
      $('.arrow-left').css('border-top', h2 + 'px solid transparent');
      $('.arrow-left').css('border-bottom', h2 + 'px solid transparent');
      $('.arrow-left').css('border-right', h2 + 'px solid #337ab7');
    }

    //this handles tr clicks for our list flyout menu
    $(document).on('click', '.query-table-row', function() {
      //used for grabbing our last result set index
      var resultIndex = $(event.target).closest('tr').attr('data-result-index');
      console.log('resultIndex', resultIndex);
      var resultQueryData = window.paginatedResults[resultIndex].queryVal;
      console.log(resultQueryData);
      window.gmd.interactMap.multiQueryApplyToMap('custom', resultQueryData, false, false);
      
      moveSelectionLeftArrow($(event.target).closest('tr'));
      $( ".query-table-row" ).each(function() {
        $( this ).removeClass('active-query-table-row');
      });
      $(event.target).closest('tr').addClass('active-query-table-row');
    });


    $(document).on('click', '#search-all-owners', function() {
      //window.gmd.interactMap.userQuery();
      var owner = $('#search-owner').val();
      window.gmd.interactMap.multiQueryApplyToMap('owner', { 'owner': owner }, true, window.gmd.paginatedResultsData.shouldShowListResults); 

      //window.populateRightMenuWithResults('owner');
    });

    $(document).on('click', '#current-loc-click', function() {
       window.g.communiqueOpen("Please wait while we find your location");
       navigator.geolocation.getCurrentPosition(myLocationCallback);
    });

    //this manages ALL responses to Search Results from Right column. 
    $(document).on('click', '.single-right-item', function(event) {
        var latMap = $(event.target).closest('table').attr('data-attr-lat');
        var lngMap = $(event.target).closest('table').attr('data-attr-lng');

       var tempJson = {};

       tempJson.mapLat = $(event.target).closest('table').attr('data-attr-lat');
       tempJson.mapLng = $(event.target).closest('table').attr('data-attr-lng');
       tempJson.address = $(event.target).closest('table').attr('data-address');
       tempJson.owner = $(event.target).closest('table').attr('data-owner');
       tempJson.acreageFirst = $(event.target).closest('table').attr('data-acreage-first');
       tempJson.acreageSecond = $(event.target).closest('table').attr('data-acreage-second');
       tempJson.mapTaxLotId = $(event.target).closest('table').attr('data-taxlot-id');
       tempJson.searchType = $(event.target).closest('table').attr('data-search-type');


       window.g.highlightLastItem('.single-right-item', event, 'active-item-right');

       /*
       if( tempJson.searchType == 'latLng' ){
          window.gmd.interactMap.panToPosition('blueMarker', latMap, lngMap );
       } else {
          window.gmd.interactMap.multiQueryApplyToMap(tempJson.searchType, tempJson); 
       }*/
       window.gmd.interactMap.multiQueryApplyToMap(tempJson.searchType, tempJson, false, window.gmd.paginatedResultsData.shouldShowListResults);
    });


    //set up our checkbox slider for letter view vs detail view
    $(".left-action-buttons-title input[type=checkbox]").switchButton({
      width: 30,
      height: 15,
      button_width: 15,
      on_label: 'Letter',
      off_label: 'Detail',
      checked: false
    });

    $(".right-switch-detail-results-holder input[type=checkbox]").switchButton({
      width: 30,
      height: 15,
      button_width: 15,
      on_label: 'List Results',
      off_label: 'Map Results',
      checked: false
    });
    
  });

</script>