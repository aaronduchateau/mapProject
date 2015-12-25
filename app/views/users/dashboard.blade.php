<div class="arrow-left"></div>

<!--<div class="search-field-holder polygon-div well custom-well-info-dark-blue">
  <div class="checkbox custom-checkbox custom-checkbox-polygon" style="display:none;">
    <label>
      <input type="checkbox" class="link-search" data-type-attribute="polygon"> 
    </label>
  </div>
  <div id="search-form-polygon-search-1">
    <p class="heading">Polygon Search</p>
    <p class="body">
      Use the polygon draw tool (underneath the zoom controls on the map to the right) and draw a complete polygon. Make sure to complete the shape by connecting to the first drawn point, and bring your attention back to this area to perform a search.
    </p>
  </div>
  <div id="search-form-polygon-search-2" style="display:none;">  
    <p class="heading"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> ( <span id="search-form-polygon-area"></span> km<sup>2</sup> )</p>
    <a href="javascript:void(0);" class="btn btn-default btn-search" data-type-attribute="polygon">Search</a>
    <a href="javascript:void(0);" class="btn btn-default btn-search-spin" data-type-attribute="polygon">
      <img src="{{ URL::asset('images/loading_spinner.gif')}}" class="btn-spinner-img"/>
    </a>
    <a href="javascript:void(0);" class="btn btn-default btn-draw" data-type-attribute="clearDraw">Clear</a>
  </div>
</div>-->

<!--list query area chills here-->
<div id="dash-list-query-area" class="dash-list-query-area" style="display:none;">
  <div style="height:40px;background-color:#337ab7;">
    <h5 style="color:white;padding-top:5px;padding-left:10px;" class="paginatedTitleHolder dash-heading-4 pull-left">
      <!--holds results for Acreage Between 2 and 4 Acres-->
    </h5>
  <button class="btn btn-primary pull-right back-right-list-query" style="margin-right:10px;margin-top:3px;">
    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Close results
  </button>
  </div>
  <div class="dash-list-query-table-area">
    <div class="dash-list-query-table-area-list">
      <!--holds multiple results-->
    </div>
  </div>
  <div style="height:40px;background-color:#337ab7;padding:5px 0px 5px 10px;">
    <ul id="pagination" class="pagination-sm"></ul>
    <h5 style="color:white;margin-right:10px;" class="left-result-heading dash-heading-4 pull-right">
      Showing 50 results per page
    </h5>
  </div>  
</div>
<!--top menu goes here-->
<div class="options-area" style="margin-left:5px;margin-right:10px;">
  <h5 style="color:white;margin-right:15px;" class="left-result-heading dash-heading-4 pull-right">
    &nbsp;&nbsp;&nbsp;<span id="county-label"></span>, <span id="state-label"></span> <span style="font-size: 11px;">( updated <span id="created-at">loading date...</span> )</span>
  </h5>
  <div class="pull-right left-action-buttons" style="display:none;">
    <span class="left-action-buttons-title">
      <input type="checkbox" class="letter-toggle" value="1" checked>
    </span>
    <a class="btn btn-primary pull-right back" style="margin-right: 20px;">
      <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Close report 
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
      <span class="glyphicon glyphicon glyphicon-search" aria-hidden="true"></span> 
    </button>
    <button class="btn btn-primary pull-right back-right" style="margin-right:15px;display:none;">
      <span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> Close Search
    </button>
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
  <div id="map-canvas-shell" class="dash-center-shell" style="background-color:red;">
    <div id="map-canvas" class="dash-center" style="">
      <h4 class="white-class" style="width:300px;text-align:center;margin-top:50px;">
      <img src="{{ URL::asset('images/loader.GIF') }}" style="width:32px;height:32px;">
      Loading Content...
      </h4>
    </div>
    <div class="polygon-div">
      <div style="width:100;float:right;cursor:pointer;" class="well custom-well-info-dark-blue polygon-search-handle closed">
        Polygon Search
      </div>  
      <div class="search-field-holder well custom-well-info-dark-blue" style="margin-top:40px;">
        <div class="checkbox custom-checkbox custom-checkbox-polygon" style="display:none;">
          <label>
            <input type="checkbox" class="link-search" data-type-attribute="polygon"> 
          </label>
        </div>
        <div id="search-form-polygon-search-1">
          <p class="body">
            Use the polygon draw tool above and draw a complete polygon. Make sure to complete the entire shape.
          </p>
        </div>
        <div id="search-form-polygon-search-2" style="display:none;"> 
          <span style="float:left;margin-top: -6px;"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> ( check to combine with other criteria )</span><br/> 
          <p class="heading" style="font-size:16px;">Selected Area, ( <span id="search-form-polygon-area"></span> km<sup>2</sup> )</p>
          <a href="javascript:void(0);" class="btn btn-default btn-search" data-type-attribute="polygon">Search Area</a>
          <a href="javascript:void(0);" class="btn btn-default btn-search-spin" data-type-attribute="polygon">
            <img src="{{ URL::asset('images/loading_spinner.gif')}}" class="btn-spinner-img"/>
          </a>
          <a href="javascript:void(0);" class="btn btn-default btn-draw" data-type-attribute="clearDraw">Clear Polygon</a>
        </div>
        <br/>
        <br/>
      </div>
    </div>
    <!--map goes here-->
  </div>
  <div class="dash-right-list" style="background-color:rgba(13,106,146,0.9);">
    <div class="dash-right-inter-margin" style="display:none;">
      <div id="first-search-suggestion" class="well custom-well-search-suggestion">
        <p class="heading">Get started!</p>
        <p class="body">You have automatically been centered in <b class="county-name-start"></b> on the map to the right.
          <br/><br/>
          <b>1)</b> Get started by clicking the search icon (above left). This will allow you to type in specific search criteria to let you find exactly what you are looking for.
          <br/><br/>
          <b>2)</b> Drag the map around and click on parcels, and the info window will prompt you for the next action.       
        </p>
      </div>  
      <div id="second-search-suggestion" class="well custom-well-search-suggestion" style="display:none;">
        <p class="heading">Perform a search!</p>
        <p class="body">Each section to the left represents a different way to search property data
          <br/><br/>
          <b>1)</b> Simply type into the appropriate field and click 'search' below it, to perform a specific kind of search.
          <br/><br/>
          <b>2)</b> Sometimes just viewing results on a map is difficult, especially when many results are returned. Because of this at the top of the search area, you will notice two options, 'Map Only' and 'List & Map'. To get a 
          flyout menu that displays your results in a sorted list menu AND on the map, slide the option over to 'list & Map'.       
        </p>
      </div>  
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
            <!--result configuration-->
            <div class="search-field-holder owner-div well custom-well-info-dark-blue" style="margin-top:0px;">
              Show my results as:
              <span class="right-switch-detail-results-holder pull-left">
                <input type="checkbox" class="toggle-list-mode" value="1" checked>
              </span>
              <div style="clear:both;"></div>
              <div id="order-by-holder" style="margin-top:15px;display:none;">
                Order multiple results by:
                <select id="order-by-select" class="form-control">
                  <option value="acreage">Acreage (size)</option>
                  <option value="name">Owner name</option>
                  <option value="mapTaxLot">Taxlot id</option>
                  <option value="generatedTotal">Total value</option>
                </select>  
              </div>  
            </div>
            <!--Search By Owner-->
            <div class="search-field-holder owner-div well custom-well-info-dark-blue">
              <!--<label for="exampleInputEmail1">Search By Owner:</label>-->
              <div class="checkbox custom-checkbox">
                <label>
                  <input type="checkbox" class="link-search" data-type-attribute="owner"> 
                </label>
              </div>
              <input type="text" class="form-control search-field" data-search-type="alphanumeric" placeholder="Full Owner Name" id="search-owner">

              <!--<input type="checkbox"> <span style="color:white;">Reset to saved Address</span>-->
              <a href="javascript:void(0);" class="btn btn-default btn-search" data-type-attribute="owner">Search</a>
              <a href="javascript:void(0);" class="btn btn-default btn-search-spin" data-type-attribute="owner">
                <img src="{{ URL::asset('images/loading_spinner.gif')}}" class="btn-spinner-img"/>
              </a>
            </div>
            <!--Search Location-->
            <div class="search-field-holder address-div well custom-well-info-dark-blue">
              <!--<label for="exampleInputEmail1">Search Location:</label>-->
              <div class="checkbox custom-checkbox">
                <label>
                  <input type="checkbox" class="link-search" data-type-attribute="address"> 
                </label>
              </div>
              <input type="text" class="form-control search-field" data-search-type="alphanumeric" placeholder="Address" id="search-address">
              <input type="text" class="form-control search-field" data-search-type="alphanumeric" placeholder="City" id="search-city">
              <input type="text" class="form-control search-field" data-search-type="alphanumeric" placeholder="State" id="search-state">
              <input type="text" class="form-control search-field" data-search-type="alphanumeric" placeholder="Zip" id="search-zip">
              <input type="hidden" id="latMapAddressHidden">
              <input type="hidden" id="lngMapAddressHidden">
              <!--<input type="checkbox"> <span style="color:white;">Reset to saved Address</span>-->
              <a href="javascript:void(0);" class="btn btn-default btn-search" data-type-attribute="address">Search</a>
              <a href="javascript:void(0);" class="btn btn-default btn-search-spin" data-type-attribute="address">
                <img src="{{ URL::asset('images/loading_spinner.gif')}}" class="btn-spinner-img"/>
              </a>
            </div>
            <!--Search Total Value-->
            <div class="search-field-holder total-value-div well custom-well-info-dark-blue">
              <!--<label for="exampleInputEmail1">Search Location:</label>-->
              <div class="checkbox custom-checkbox">
                <label>
                  <input type="checkbox" class="link-search" data-type-attribute="totalValue"> 
                </label>
              </div>
              <input type="text" class="form-control search-field" data-search-type="numeric" placeholder="Lowest $" id="value-between-2">
              <input type="text" class="form-control search-field" data-search-type="numeric" placeholder="Highest $" id="value-between-1">
              <!--<input type="checkbox"> <span style="color:white;">Reset to saved Address</span>-->
              <a href="javascript:void(0);" class="btn btn-default btn-search" data-type-attribute="totalValue">Search</a>
              <a href="javascript:void(0);" class="btn btn-default btn-search-spin" data-type-attribute="totalValue">
                <img src="{{ URL::asset('images/loading_spinner.gif')}}" class="btn-spinner-img"/>
              </a>
            </div>
            <!--Search Between Acreage-->
            <div class="search-field-holder acreage-div well custom-well-info-dark-blue">
              <!--<label for="exampleInputEmail1">Search Between Acreage:</label>-->
              <div class="checkbox custom-checkbox">
                <label>
                  <input type="checkbox" class="link-search" data-type-attribute="acreage"> 
                </label>
              </div>
              <input type="text" class="form-control search-field" data-search-type="numeric" placeholder=".05 acres" id="acreage-between-1">
              <input type="text" class="form-control search-field" data-search-type="numeric" placeholder="2.5 acres" id="acreage-between-2">
              <!--<input type="checkbox"> <span style="color:white;">Reset to saved Address</span>-->
              <a href="javascript:void(0);" class="btn btn-default btn-search" data-type-attribute="acreage">Search</a>
              <a href="javascript:void(0);" class="btn btn-default btn-search-spin" data-type-attribute="acreage">
                <img src="{{ URL::asset('images/loading_spinner.gif')}}" class="btn-spinner-img"/>
              </a>
            </div>
            <!--Search By Map Taxlot-->
            <div class="search-field-holder taxlot-div well custom-well-info-dark-blue">
              <!--<label for="exampleInputEmail1">Search By Map Taxlot #:</label>-->
              <div class="checkbox custom-checkbox">
                <label>
                  <input type="checkbox" class="link-search" data-type-attribute="taxLot"> 
                </label>
              </div>
              <input type="text" class="form-control search-field" data-search-type="alphanumeric" placeholder="Taxlot number" id="search-taxlot-field">

              <!--<input type="checkbox"> <span style="color:white;">Reset to saved Address</span>-->
              <a href="javascript:void(0);" class="btn btn-default btn-search" data-type-attribute="taxLot">Search</a>
              <a href="javascript:void(0);" class="btn btn-default btn-search-spin" data-type-attribute="taxLot">
                <img src="{{ URL::asset('images/loading_spinner.gif')}}" class="btn-spinner-img"/>
              </a>
            </div>
            <!--Search by Lat & Long-->
            <div class="search-field-holder latLon-div well custom-well-info-dark-blue">
              <!--<label for="exampleInputEmail1">Search by Lat & Long:</label>-->
              <div class="checkbox custom-checkbox">
                <label>
                  <input type="checkbox" class="link-search" data-type-attribute="latLng"> 
                </label>
              </div>
              <input type="text" class="form-control search-field" data-search-type="numeric" id="lngMap" placeholder="longitude" value="-122.877734">
              <input type="text" class="form-control search-field" data-search-type="numeric" id="latMap" placeholder="lattitude" value="42.320921">
              <a href="javascript:void(0);" id="search-click" class="btn btn-default btn-search" data-type-attribute="latLng">Search</a>
              <a href="javascript:void(0);" class="btn btn-default btn-search-spin" data-type-attribute="latLng">
                <img src="{{ URL::asset('images/loading_spinner.gif')}}" class="btn-spinner-img"/>
              </a>
            </div>
            <!--<div class="search-field-holder polygon-div well custom-well-info-dark-blue">
              
              <div class="checkbox custom-checkbox custom-checkbox-polygon" style="display:none;">
                <label>
                  <input type="checkbox" class="link-search" data-type-attribute="polygon"> 
                </label>
              </div>
              <div id="search-form-polygon-search-1">
                <p class="heading">Polygon Search</p>
                <p class="body">
                  Use the polygon draw tool (underneath the zoom controls on the map to the right) and draw a complete polygon. Make sure to complete the shape by connecting to the first drawn point, and bring your attention back to this area to perform a search.
                </p>
              </div>
              <div id="search-form-polygon-search-2" style="display:none;">  
                <p class="heading"><span class="glyphicon glyphicon-check" aria-hidden="true"></span> ( <span id="search-form-polygon-area"></span> km<sup>2</sup> )</p>
                <a href="javascript:void(0);" class="btn btn-default btn-search" data-type-attribute="polygon">Search</a>
                <a href="javascript:void(0);" class="btn btn-default btn-search-spin" data-type-attribute="polygon">
                  <img src="{{ URL::asset('images/loading_spinner.gif')}}" class="btn-spinner-img"/>
                </a>
                <a href="javascript:void(0);" class="btn btn-default btn-draw" data-type-attribute="clearDraw">Clear</a>
              </div>

            </div>-->
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
    <!--<button id="advanced-options" class="btn btn-primary pull-right" style="margin-right:10px;margin-top:5px;">
      Advanced Options
    </button>-->
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
<link href='https://api.mapbox.com/mapbox.js/plugins/leaflet-draw/v0.2.2/leaflet.draw.css' rel='stylesheet' />
<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-draw/v0.2.2/leaflet.draw.js'></script>
<script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-geodesy/v0.1.0/leaflet-geodesy.js'></script>

<script src="{{ URL::asset('dist/js/layer/tile/Google.js') }}"></script>
<script src="{{ URL::asset('dist/js/layer/tile/Bing.js') }}"></script>

<!-- end new libs -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script src="http://underscorejs.org/underscore.js"></script>


<script src="{{ URL::asset('dist/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('dist/js/handlebars-v2.0.0.js') }}"></script>
<script src="{{ URL::asset('dist/js/jQuery.print.js') }}"></script>
<script src="{{ URL::asset('dist/js/jQuery.pagination.js') }}"></script>
<script src="{{ URL::asset('dist/js/moment.js') }}"></script>

<script src="{{ URL::asset('assets/jsModels/avatarDashboardModel.js') }}"></script>
<script src="{{ URL::asset('assets/jsModels/dashModel.js') }}"></script>
<script src="{{ URL::asset('assets/jsControllers/googleMapPopulateScoped.js') }}"></script>
<script src="{{ URL::asset('assets/jsControllers/globalVars.js') }}"></script>
<script src="{{ URL::asset('assets/jsControllers/dashControllerHelpers.js') }}"></script>

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

  $( document ).ready(function() {
    
    window.g.mapConfig = {{$mapCountyData}};
    window.g.mapConfig = window.g.mapConfig[0];
    window.g.mapConfig.userId = {{Auth::user()->id}};
    window.g.mapConfig.accountOwnerName = '{{Auth::user()->firstname}} {{Auth::user()->lastname}}';
    window.g.mapConfig.accountOwnerPhone = '{{Auth::user()->phone}}';
    window.g.mapConfig.accountOwnerEmail = '{{Auth::user()->email}}';
    window.g.mapConfig.accountType = '{{Auth::user()->accountType}}';
    window.g.mapConfig.accountStatus = '{{Auth::user()->status}}';
    window.g.mapConfig.accountActive = '{{Auth::user()->active}}';
    window.dashHelp.globalInputErrorStatus = true;

    //VISUAL DASH STATES, 1) default state, 2) full_search state (two pains) 3) multi_result state 
    window.g.visualDashState = 'default'; 
    window.g.isInFullDetail = false; 

    var listOrGridToggleState = 'list';

    //console.log(window.g.mapConfig);
    $('#county-label').text(window.g.mapConfig.countyName);
    $('.county-name-start').text(window.g.mapConfig.countyName);
    $('#state-label').text(window.g.mapConfig.stateAb);
    $('#latMap').val(window.g.mapConfig.startLat);
    $('#lngMap').val(window.g.mapConfig.startLng);

    //set up everything to have the right margins and what not
    window.g.triPageSetup();
    
    //load global template and populate top menu
    window.g.populateTopMenu(
      { menu: {class: "", link: "{{ URL::asset('/users/menu') }}", action: ""},
        dash: {class: " active", link: "javascript:void(0);", action: ""},
        emailHeld: $('#client-email-holder').val(),
        accountType:  window.g.mapConfig.accountType
      }
    );



    ////////////////////////////////////////////////////////////////////////////////////////////
    //start: interactions related to SAVED TAXLOTS
    ////////////////////////////////////////////////////////////////////////////////////////////
    
    //compile save list area template
    var leftDashTemplate = Handlebars.compile($("#dash-left-template").html());
    
    //***Start: helper functions relating to save
    var populateSavedTaxlots = function(data){
      var templateResult = leftDashTemplate({dashLeftArrayData: data});
      $('.dash-left-inter-margin').prepend(templateResult);
    }

    var removeSavedItemCallback = function(data){
      window.g.communiqueClose();
    }

    var removeSavedItem = function(item){
      var removeIndex = item.attr('data-result-index');
      var userIndex = window.g.mapConfig.userId;
      window.dashModel.unsetSavedLeft(removeIndex, userIndex, removeSavedItemCallback);
      window.g.communiqueOpen('removing this item from your saved list...');
      item.closest('div').slideUp();
    }
    //***End: helper functions relating to save

    window.dashModel.getSavedTaxlots(populateSavedTaxlots);
    
    //save taxlot data
    $(document).on('click', '#save-me', function() {
      window.dashModel.saveTaxlot(populateSavedTaxlots);
      window.g.communiqueOpen('Taxlot saved! click the back button to see it in your left hand pane');
      setTimeout(function(){ 
         window.g.communiqueClose();
      }, 4000);
       
    });

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
       window.gmd.interactMap.panToPosition('blueMarker', lat, lng);
       setTimeout(function(){ 
         window.g.communiqueClose();
       }, 4000);
    });
    ////////////////////////////////////////////////////////////////////////////////////////////
    //end: interactions related to SAVED TAXLOTS
    ////////////////////////////////////////////////////////////////////////////////////////////

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
      mixpanel.track("Printed", {"query": window.gmd.trackLastDetailQuery});
      mixpanel.people.increment('printCount', 1);
    });

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

    //move to helper file
    function toggleLetter(){
      if ( $('.letter-toggle').prop('checked') ){
        $('.detail').hide();
        $('.letter').show();
      } else {
        $('.letter').hide();
        $('.detail').show();
      }
    }

    //move to helper file
    function toggleListMode(){
      if ( $('.toggle-list-mode').prop('checked') ){
        window.gmd.paginatedResultsData.shouldShowListResults = true;
        $('#order-by-holder').show('fast');
      } else {
        window.gmd.paginatedResultsData.shouldShowListResults = false;
        $('#order-by-holder').hide('fast');
      }
    }

    //toggle letter view vs detail view
    $(document).on('change', '.letter-toggle', function(event) {
      toggleLetter();
    });

    $(document).on('change', '.toggle-list-mode', function(event) {
      toggleListMode();
    });

    //////////////////////////////////////////////////////////////////////////////
    //start: opens *report* mode
    //////////////////////////////////////////////////////////////////////////////
    var expandedInfoTemplate = Handlebars.compile($("#dash-expanded-info-template").html());

    window.leftPainOpenFromInfoWindow = function(event){  
        window.g.isInFullDetail = true;
        $('.back').show();
        $('.back-right').hide()
        //start: toggle heading area
        $('.left-result-heading').hide();
        $('.left-action-buttons').show();
        //end: toggle heading area
        $('.dash-left-inter-margin').slideUp('slow');
        $('.dash-left-full-margin').slideUp('slow');
        
        //if we are NOT in expanded (multi-result) Query view, blow out our arrow
        if( window.g.visualDashState != 'multi_result'){
          window.dashHelp.moveSelectionLeftArrow(true);
        }
        $( ".container-dash" ).animate({
          left: - window.g.halfWidth()
          }, 400, function() {
          // Animation complete.
          
          //this loads our template for the expanded info view in the left pain
          var templateResult = expandedInfoTemplate(window.g.mapRowData);
          $('.dash-left-full-margin').html(templateResult);
          //trigger Nested Map
          window.gmd.interactMap.nestedMap();
          $('.dash-left-full-margin').slideDown('slow');
          toggleLetter();
          //////////////////////////////////////
          //observe mapRowData in full report mode
          //////////////////////////////////////
          //console.log(window.g.mapRowData);
          //////////////////////////////////////
        });
    };
    //////////////////////////////////////////////////////////////////////////////
    //end: opens *report* mode
    //////////////////////////////////////////////////////////////////////////////

    $("#order-by-select").change(function() {
      $("#order-by-select").each(function() {
        window.gmd.paginatedResultsData.orderBy = $(this).val();
      });
    });


    /////////////////////////////////////////////////
    //TO DO TOMORROW: remove this crap below, but use similiar technique for scrolling past map to report stuff
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

    //activate pagination
    window.activatePagination = function(count, resultsPerPage){

      var totalPages = Math.floor((count + 1) / resultsPerPage);
      //console.log('count' + count + ' resultsPerpage' + resultsPerPage);
      //console.log(totalPages);

      if (totalPages < 1){
        totalPages = 1;
      }
      
      var pageData = $('#pagination').data();
      //console.log(pageData);
      if ( !jQuery.isEmptyObject(pageData) ){
          $('#pagination').twbsPagination('destroy'); 
      } 

      $('#pagination').twbsPagination({
          totalPages: totalPages,
          visiblePages: 5,
          startPage: 1,
          loop: true,
          onPageClick: function (event, page) {
            window.dashHelp.moveSelectionLeftArrow(true);
            window.gmd.paginatedResultsData.currentOffset = window.gmd.paginatedResultsData.resultsPerPage * (page - 1);
            window.gmd.interactMap.listLimitedQuery(null, window.gmd.paginatedResultsData.sqlString, null);
          }
      });
    }

    window.showListQueryAreaWithResults = function(paginatedResults){
      $( ".dash-list-query-area" ).animate({
        left: 0 
      }, 400, function() {
        //console.log('paginatedResults');
        //console.log(paginatedResults);
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
        left: -(window.g.halfWidth())
      }, 400, function() {
        //emp
        $('.dash-list-query-table-area-list').html('');
        //$('.dash-left-inter-margin').slideDown('slow');

          // Animation complete.
      });

      //window.g.visualDashState = 'full_search';
      window.g.visualDashState = 'full_search';
      //if in full report mode, blow out the arrow
      if (window.g.isInFullDetail){
        window.dashHelp.moveSelectionLeftArrow(true);
      } else {
        window.dashHelp.moveSelectionLeftArrow();
      }
      
    }

    $(document).on('click', '.back-right-list-query', function(event) {
      window.hideListQueryArea();
    });


    //needs better name, move to helper file
    function goBack(){
      //start: toggle heading area
      $('.left-result-heading').show();
      $('.left-action-buttons').hide();
      //end: toggle heading area
      $('.dash-left-full-margin').slideUp('slow');

      var goBackWidth = window.g.oneQuarterWidth();
      //going back from full detail with multi result
      if (window.g.isInFullDetail){
        //going back from full detail without multi result
        if (window.g.visualDashState !== 'multi_result'){
          $('.back-right').hide();
          $('#config').show();
          window.g.visualDashState = 'default';
          window.dashHelp.moveSelectionLeftArrow();
          goBackWidth = window.g.oneQuarterWidth();

        //we are in multi result  
        } else {
          goBackWidth = 0;
          $('.back-right').show();
          $('#config').hide();
          window.g.visualDashState = 'multi_result';
          window.dashHelp.moveSelectionLeftArrow();
        }
      } else {
        $('.back-right').hide();
        $('#config').show();
        window.g.visualDashState = 'default';
        window.dashHelp.moveSelectionLeftArrow();
      }
    
      //slide our pain the appropriate distance based off of state
      $( ".container-dash" ).animate({
        left: - goBackWidth
      }, 400, function() {
        $('.dash-left-inter-margin').slideDown('slow');
          // Animation complete.
      });

      window.g.isInFullDetail = false;
    }

    //load dash specific template
    var rightDashTemplate = Handlebars.compile($("#dash-right-template").html());

    //move to helper file, rename to left
    window.populateLeftMenuWithResults = function(linkMode, numResults){
      window.dashHelp.hideSpinButton();
      if(linkMode === 'noResults'){
        alert('no results found');
        return false;
      }
      //we no longer need instructions because a search result has been returned
      $('#second-search-suggestion').remove();
      //start: populates right menu with correct data and highlights 
      //var templateResult = rightDashTemplate(window.dashHelp.rightTemplateJson(linkMode, numResults));
      var retrievedSearchItem = _.where(window.dashHelp.sessionSearchArray, {uuid: window.dashHelp.lastSearchUuid});

      //create a copy as to not modify our global object
      var tempJson = _.clone(retrievedSearchItem[0]);
      if(tempJson.searchType.length != 1){
         tempJson.searchType = 'linkedSearch';
      } else {
         tempJson.searchType = tempJson.searchType[0];
      }
      //add the result count to our tempJson
      tempJson.numResults = numResults;
      var templateResult = rightDashTemplate(tempJson);
  
      $('.dash-right-inter-margin').prepend(templateResult);
      $( ".single-right-item" ).each(function() {
        $( this ).removeClass('active-item-right');
      });
      $('.single-right-item:first').addClass('active-item-right');
      
      //start: prep arrow crap 
      if (window.gmd.paginatedResultsData.shouldShowListResults){
          window.g.visualDashState = 'multi_result';
      } else {
          window.g.visualDashState = 'full_search';
      }
      window.dashHelp.moveSelectionLeftArrow();
      //end: prep arrow crap 
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
        $('#first-search-suggestion').hide();
        $('#second-search-suggestion').show('fast');
        window.g.visualDashState = 'full_search';
        window.dashHelp.moveSelectionLeftArrow();
    });

    //manage link-search checkboxes
    $(document).on('click', '.link-search', function(event) {
        var tempArr = [];
        $(".link-search").each(function() {
          if ( $(this).prop('checked') ){
            tempArr.push($(this).attr('data-type-attribute'))
          }
        });
        window.dashHelp.linkedSearchList = tempArr;
    });

    $(document).on('click', '.btn-draw', function(event) {
      var currentType = $(event.target).attr('data-type-attribute');
      if (currentType === 'startDraw'){
        window.gmd.addDrawingToolsToMap();
      }
      if (currentType === 'clearDraw'){
        window.gmd.removeDrawnLayersFromMap();
        window.polygonSearchShow('close');
      }
    });

    //keyup event for error handling
    /*
    $( ".search-field" ).keyup(function() {
      window.dashHelp.globalInputErrorStatus = true;
      $( ".search-field" ).each(function(index, item) {
        var item = $(item);
        var errorType = item.attr('data-search-type');
        var myVal = item.val();
        if(window.dashHelp.validateSearchInput(myVal, errorType, item) === false){
          window.dashHelp.globalInputErrorStatus = false;
        }
      });
       
    });
    */

    $( ".search-field" ).keyup(function(e) {
        var field = $(this);
        var errorType = field.attr('data-search-type');
        var myVal = field.val();
        window.dashHelp.validateSearchInput(myVal, errorType, field, true);
    });

    $(document).on('click', '.btn-search', function(event) {
      $('#config').click();
      var currentType = [];
      currentType.push( $(event.target).attr('data-type-attribute') );
      //see if we are in linked search mode, && there's more than one thing, if so make type an array
      if (!_.isEmpty(window.dashHelp.linkedSearchList) && (window.dashHelp.linkedSearchList.length != 1)){
        currentType = window.dashHelp.linkedSearchList;
      }

      //keyup error handling already taken place, check for empty
      window.dashHelp.validateEmpty(currentType);
  
      if(!window.dashHelp.globalInputErrorStatus){
        alert('please correct errors in your submition before searching');
        return false;
      }
      //end: error handling

      //start: add our spinner for the search in question
      window.dashHelp.showSpinButton(currentType);
      //end: add spinner for search in question
      
      //is our current type address, or if it is an array, does it contain address?
      if (_.indexOf(currentType, 'address') != -1){
        var address = $('#search-address').val();
        var city = $('#search-city').val();
        var state = $('#search-state').val();
        var zip = $('#search-zip').val();
        var fullAddy = address + ' ' + city + ' ' + state + ' ' + zip;
       
        //special use case here as we need to let the geocoder translate our address into lat and lng
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode( { 'address': fullAddy}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK){
              var lat = results[0].geometry.location.lat();
              var lng = results[0].geometry.location.lng();
              $('#latMapAddressHidden').val(lat);
              $('#lngMapAddressHidden').val(lng);
              
              var formData = window.dashHelp.leftTemplateJson(currentType);
              window.gmd.interactMap.multiQueryApplyToMap(formData.searchType, formData, true, window.gmd.paginatedResultsData.shouldShowListResults); 

          } else {
            window.g.communiqueClose();
            window.dashHelp.hideSpinButton();
            alert('Sorry, looks like we could not find that address');
          }
        });
      } else {
        //handle 99.9% of searches here
        var formData = window.dashHelp.leftTemplateJson(currentType);
        window.gmd.interactMap.multiQueryApplyToMap(formData.searchType, formData, true, window.gmd.paginatedResultsData.shouldShowListResults); 

      }
    });

    //this handles tr clicks for our list flyout menu
    $(document).on('click', '.query-table-row', function() {
      //used for grabbing our last result set index
      var resultIndex = $(event.target).closest('tr').attr('data-result-index');
      console.log('resultIndex', resultIndex);
      var resultQueryData = window.paginatedResults[resultIndex].queryVal;
      console.log(resultQueryData);
      window.gmd.interactMap.multiQueryApplyToMap(['custom'], resultQueryData, false, false);
      
      $( ".query-table-row" ).each(function() {
        $( this ).removeClass('active-query-table-row');
      });
      $(event.target).closest('tr').addClass('active-query-table-row');

      window.g.visualDashState = 'multi_result';
      window.dashHelp.moveSelectionLeftArrow();
    });

    $(document).on('click', '#current-loc-click', function() {
       window.g.communiqueOpen("Please wait while we find your location");
       navigator.geolocation.getCurrentPosition(window.dashHelp.myLocationCallback);
    });


    //this manages ALL responses to Search Results from Right column. 
    $(document).on('click', '.single-right-item', function(event) {
        var uuid = $(event.target).closest('table').attr('data-attr-uuid');
        var retrievedSearchItem = _.where(window.dashHelp.sessionSearchArray, {uuid: uuid});

       window.g.highlightLastItem('.single-right-item', event, 'active-item-right');
      
       ////////////////////////////////////////////////////////////////
       //Everytime we populate our right menu with a search result we can 
       //expect either full search, or multi viz state...regardless we set offset left 0
       ////////////////////////////////////////////////////////////////
       if (window.gmd.paginatedResultsData.shouldShowListResults){
          window.g.visualDashState = 'multi_result';
       } else {
          window.g.visualDashState = 'full_search';
       }
       window.dashHelp.moveSelectionLeftArrow();

       $('#config').hide();
       $('.back-right').show();
       $('.right-switch-detail-results-holder').show('fast');
       $( ".container-dash" ).animate({
          left: "0"
        }, 400, function() {
          // Animation complete.
        });
        ////////////////////////////////////////////////////////////////
        console.log('retrievedSearchItemLow');
        console.log(retrievedSearchItem[0]);
        window.gmd.interactMap.multiQueryApplyToMap(retrievedSearchItem[0].searchType, retrievedSearchItem[0], false, window.gmd.paginatedResultsData.shouldShowListResults);
    });

    window.polygonSearchShow = (state) => {
      var openHeight;
      if (state === 'open') {
          $('.polygon-search-handle').removeClass('closed');
          $('.polygon-search-handle').addClass('open');
          openHeight = window.g.adjustedWindowHeight() - 150;
      } else {
          $('.polygon-search-handle').removeClass('open');
          $('.polygon-search-handle').addClass('closed');
          openHeight = window.g.adjustedWindowHeight() -40;
      }
      $( ".polygon-div" ).animate({
          top: openHeight
          }, 400, function() {
         
      });

    }

    $(document).on('click', '.polygon-search-handle', function(e) {
      var openHeight;
      if ($(e.target).hasClass('closed')) {
          $(e.target).removeClass('closed');
          $(e.target).addClass('open');
          openHeight = window.g.adjustedWindowHeight() - 150;
      } else {
          $(e.target).removeClass('open');
          $(e.target).addClass('closed');
          openHeight = window.g.adjustedWindowHeight() -40;
      }
      $( ".polygon-div" ).animate({
          top: openHeight
          }, 400, function() {
         
      });
    });

    ////////////////////////////////////////////////////////////////////////////////////////////
    //Start: Slider Checkbox setup
    ////////////////////////////////////////////////////////////////////////////////////////////
    //letter view vs detail switch
    $(".left-action-buttons-title input[type=checkbox]").switchButton({
      width: 30,
      height: 15,
      button_width: 15,
      on_label: 'Letter',
      off_label: 'Detail',
      checked: false
    });

    //multi-result vs map result switch
    $(".right-switch-detail-results-holder input[type=checkbox]").switchButton({
      width: 30,
      height: 15,
      button_width: 15,
      on_label: 'List & Map',
      off_label: 'Map Only',
      checked: false
    });
    ////////////////////////////////////////////////////////////////////////////////////////////
    //End: Slider Checkbox setup
    ////////////////////////////////////////////////////////////////////////////////////////////

    ////////////////////////////////////////////////////////////////////////////////////////////
    //Kick off our first map function, populate and center at saved lat lng
    ////////////////////////////////////////////////////////////////////////////////////////////
    window.gmd.populateMap( $('#latMap').val(), $('#lngMap').val() );
    ////////////////////////////////////////////////////////////////////////////////////////////
    //Kick off scrolling
    ////////////////////////////////////////////////////////////////////////////////////////////
    window.dashHelp.instantiateScrollers();


    /* //used to handle toggleing search fields, remove this soon//
    $(document).on('click', '.dropdown-search-selection', function(event) {
        console.log(event);
        var insideText = $(event.target).text();
        $('#search-but-label-shown').text(insideText);
        $('.search-field-holder').hide();
        var currentAction = $(event.target).attr('data-action');
        $('.' + currentAction).slideDown('fast');
        console.log(currentAction);
    });
    */
    //instantiate mixpanel user
    mixpanel.identify($('#client-email-holder').val());
    mixpanel.people.increment('dashboardView', 1);
    
  });

</script>