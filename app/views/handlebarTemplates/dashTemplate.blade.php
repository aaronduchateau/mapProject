<script type="infowindow/html" id="infowindow_template">
  <div class="cartodb-popup">
    <a href="#close" class="cartodb-popup-close-button close">x</a>
     <div class="cartodb-popup-content-wrapper" style="width: auto;max-width: 300px;">
       <div class="cartodb-popup-content" style="height:100px;">
       </div>
     </div>
     <div class="cartodb-popup-tip-container"></div>
  </div>
</script>
<script id="user-reviews" type="text/x-handlebars-template">
	@{{#userReviews}} 
	<!--start item-->
	<div class="well custom-well-info">
        <h6 class="review-heading">@{{title}}:
        <span class="pull-right">
        	<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
			<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
			<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
        </h6>
        </p>
        <p class="review-date">@{{rDate}}<p>
        <p class="body">@{{body}}</p>
    </div>
	<!--end item--> 
	@{{/userReviews}} 
</script>
<script id="dash-list-query-table-template" type="text/x-handlebars-template">
    <table style="width:100%;padding-bottom:15px;">
        @{{#listData}} 
        <tr class="query-table-row" data-result-index="@{{@index}}">
            <td style="padding-left:10px;width:25%;">
                <span class="just-custom-font">
                    total value:
                </span><br/>
                <span class="label label-primary darker-blue-backgroud-class text-overflow">
                    $@{{formatCurrency totalValue}}
                </span>
            </td>  
            <td style="max-width:225px;">
                <span class="just-custom-font">
                    owner name:
                </span><br/>
                <span class="label label-primary darker-blue-backgroud-class text-overflow">
                    @{{ownerName}}
                </span>
            </td>
            <td style="width:25%;">
                <span class="just-custom-font">
                    acreage:
                </span><br/>
                <span class="label label-primary darker-blue-backgroud-class text-overflow">
                    @{{formatAcreage acreage}}
                </span>
            </td>
            <td style="padding-right:10px;width:25%;">
                <span class="just-custom-font">
                    map taxlot #:
                </span><br/>
                <span class="label label-primary darker-blue-backgroud-class text-overflow">
                    @{{mapTaxLotNumber}}
                </span>
            </td>
            <td>
            </td>
        </tr>
        @{{/listData}} 
    </table>
</script>
<script id="job-description" type="text/x-handlebars-template">
	@{{#jobDescription}} 
	<!--start item-->
	<div class="white-class">
        <h4 class="heading just-custom-font-header">@{{title}}:</h4>
        <p class="body just-custom-font-header">@{{body}}</p>
    </div>
	<!--end item--> 
	@{{/jobDescription}} 
</script>
<script id="dash-left-template" type="text/x-handlebars-template">
	@{{#if dashLeftArrayData}}
	@{{#dashLeftArrayData}} 
	<!--start item-->
	    <div class="custom-well-dash-left left-saved-open" data-result-index="@{{@index}}" data-result-lat="@{{lat}}" data-result-lng="@{{lng}}" data-result-owner="@{{ownerName}}">
	      <table style="margin-left:15px;margin-right:5px;width:95%;padding-bottom:15px;">
	        <tr>
	          <td style="width:90%;">
	            <p class="heading">@{{ownerName}}</p>
	            <p class="body">total value: $@{{formatCurrency totalValue}}</p>
	            <p class="body">lat: @{{lat}}</p>
	            <p class="body">lng: @{{lng}}</p>
	            <p class="small">
	            <span class="pull-right">
	            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
	            <span class="date-holder">@{{passedDatePretty created_at}}</span>
	            </span>
	            <br/>
	            </p>
	          </td>
	          <td style="width:10%;">
	          <span class="glyphicon glyphicon-chevron-right pull-right arrow-hide" aria-hidden="true" style="color:white;margin-right:10px;"></span>
	          <span class="glyphicon glyphicon-trash pull-right trash-hide" data-result-index="@{{id}}" aria-hidden="true" style="color:white;margin-right:10px;"></span>
	          </td>
	        </tr>
	      </table>
	    </div>
	<!--end item--> 
	@{{/dashLeftArrayData}} 
	@{{else}}
		<div style="padding-left:20px;padding-top:10px;padding-right:20px;color:white;">
			<p class="small">
				<span class="glyphicon glyphicon-heart-empty" aria-hidden="true"></span>
				This area holds saved taxlots. To save a taxlot, select one from the map on the right, click 'full information' and then select the 'options' menu.
			</p>
		</div>
	@{{/if}}
</script>

<script id="dash-right-template" type="text/x-handlebars-template">
	
	<!--start item-->
        <div class="custom-well-dash-left single-right-item">
          <table style="margin-left:10px;margin-right:5px;" 
            data-attr-lat="@{{mapLat}}" 
            data-attr-lng="@{{mapLng}}"
            data-address="@{{fullAddress}}"
            data-owner="@{{owner}}"
            data-acreage-first="@{{acreageFirst}}"
            data-acreage-second="@{{acreageSecond}}"
            data-taxlot-id="@{{mapTaxLotId}}"
            data-search-type="@{{searchType}}"
            >
            <tr>
              <td style="width:18%;">
                @{{#xIf mode "===" "single"}}
                    <img src="{{ URL::asset('images/icon-map-new.png') }}" style="margin-left:5px;margin-right:10px;width:40px;" class="small-user">
                @{{/xIf}}
                @{{#xIf mode "===" "multi"}}
                    <img src="{{ URL::asset('images/list.png') }}" style="margin-left:5px;margin-right:10px;width:40px;" class="small-user">
                @{{/xIf}}
              </td>
              <td>
                <div style='margin-top:10px;margin-bottom:10px;'>
                <!--<span class="heading"></span> - -->
                <span class="body">
                    @{{#xIf searchType "===" "latLng"}}
                       <b>lat:</b> @{{mapLat}} &nbsp;&nbsp;&nbsp;<b>lng:</b> @{{mapLng}}
                    @{{/xIf}}
                    @{{#xIf searchType "===" "address"}}
                       @{{fullAddress}}
                    @{{/xIf}}
                    @{{#xIf searchType "===" "owner"}}
                       <b>owned by:</b> @{{owner}}
                    @{{/xIf}}
                    @{{#xIf searchType "===" "taxlot"}}
                       <b>map taxlot #:</b> @{{mapTaxLotId}}
                    @{{/xIf}}
                    @{{#xIf searchType "===" "acreage"}}
                       <b>acreage between:</b> @{{acreageFirst}} and @{{acreageSecond}} acres
                    @{{/xIf}}
                </span>
                <p class="small">
                <span class="pull-left">
                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                <span class="date-holder">@{{mapTime}}</span>
                <br><br>
                </p>
                </div>
        
              </td>
            </tr>
          </table>
        </div>
    <!--end item--> 
	
</script>

<script id="map-info-template" type="text/x-handlebars-template">
	<div class="content-marker">
		<div id="bodyContent" style="margin-left:15px;">
			<h4 class="just-custom-font-header">Avatar Needed</h4>
			<h5 class="just-custom-font-header">@{{ORIGINALSOURCE}}</h5>
			<h6 class="just-custom-font-header"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>@{{Property}} (1.7mi)</h6>
			<p>Looking for qualified applicant to survey factory floor, and check for sealent defects. Desired applicant should be...
			</p>
			<div style="width:130px;" class="pull-left">
				<h6>
					<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> @{{DATE}}
				</h6>
				<h6>
					<span class="glyphicon glyphicon-time" aria-hidden="true"></span> @{{STARTTIME}} - @{{ENDTIME}}
				</h6>
				<h5 style="color:#0D6A92;">
					<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
					<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
					<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
				</h5>
		    </div>		
		    <div style="width:150px;" class="pull-right" data-result-index="@{{TRACKER}}">
			    <h2 class="pull-right" style="margin-top:3px;color:#0D6A92;">
			    <span style="font-size:0.6em;">$</span>@{{ORIGINALLISTPRICE}}<span style="font-size:0.4em;">/ hr</span>
			    </h2>
			    <a href="javascript:void(0);" data-result-index="@{{TRACKER}}" class="btn btn-primary pull-right left-open" style="margin-top:-3px;">
					View Gig Information
				</a>
		    </div>
		</div>
	</div>
</script>

<script id="dash-expanded-info-template" type="text/x-handlebars-template">
	<div class="content-info">
		<div id="bodyContentInfo">
			<div class="dash-expanded-info-title pull-left" style="width:50%;">
				<h4 class="just-custom-font-header white-class" style="margin-top:0px;">@{{ORIGINALSOURCE}}</h4>
			</div>
            <div style="clear:both;"></div>
            <div class="custom-well-info letter" contenteditable="true" style="padding-top:10px;padding-left:10px;padding-right:10px;padding-bottom: 10px;border-radius: 4px;">
	            Dear @{{emptyCheck ownerName}}, <br/>
	            My name is @{{emptyCheck accountOwnerName}} and I'm interested in purchasing your @{{emptyCheck acreage}} property in @{{emptyCheck countyName}} (please find the enclosed map). If you're interested in selling please let me know. My number is @{{emptyCheck accountOwnerPhone}}. If you can't reach me by phone, feel free to shoot me an email at @{{emptyCheck accountOwnerEmail}}.
	            <br/><br/>
				Thank you,
				<br/>
				@{{emptyCheck accountOwnerName}}
            </div>
            <div style="width:100%;">
            	<div class="block-container-toggle-left">
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
        					Owner Name / In Care of:
        				</span>
        				<br/>
        				<h5>
            				<span class="label label-primary darker-blue-backgroud-class text-overflow">
            					@{{emptyCheck ownerName}} / @{{emptyCheck inCareOf}}
            				</span>	
        				</h5>
        			</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
        				 	Estimated Land Value / Improvment Value:
        				</span>
        				<br/>
        				<h5>
        					<span class="label label-primary darker-blue-backgroud-class text-overflow">
        						$@{{formatCurrency landValue}} / $@{{formatCurrency impValue}}
    						</span>
						</h5>
					</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
							Measurment in Acres:
						</span>
						<br/>
						<h5>
							<span class="label label-primary darker-blue-backgroud-class text-overflow">
							@{{emptyCheck acreage}}
							</span>
						</h5>
        			</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
							County Account Reference:
						</span>
						<br/>
						<h5>
							<span class="label label-primary darker-blue-backgroud-class text-overflow">
							#@{{emptyCheck account}}
							</span>
						</h5>
        			</div>
            	</div>
            	<div class="block-container-toggle-right">
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
        				 	Contact Mailing Address 1:
        				</span>
        				<br/>
        				<h5>
        					<span class="label label-primary darker-blue-backgroud-class text-overflow">
        						@{{emptyCheck ownerAddress1}}
    						</span>
						</h5>
					</div>
            		<div class="well custom-well-info detail">
        				<span class="just-custom-font">
        					Contact Mailing Address 2:
        				</span>
        				<br/>
        				<h5>
            				<span class="label label-primary darker-blue-backgroud-class text-overflow">
            					@{{emptyCheck ownerAddress2}}
            				</span>	
        				</h5>
        			</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
        				 	Contact Mailing Address 3:
        				</span>
        				<br/>
        				<h5>
        					<span class="label label-primary darker-blue-backgroud-class text-overflow">
        						@{{emptyCheck ownerAddress2}}
    						</span>
						</h5>
					</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
							City, State, ZIP
						</span>
						<br/>
						<h5>
							<span class="label label-primary darker-blue-backgroud-class text-overflow">
							@{{emptyCheck ownerCity}}, @{{emptyCheck ownerState}} @{{emptyCheck ownerZip}} 
							</span>
						</h5>
        			</div>
        		</div>
        	</div>	

            <div style="clear:both;">
            </div>

            <div class="custom-well-info" style="margin-top: 10px;padding-top: 10px;padding-bottom: 10px;border-radius: 4px;">
	            <div id="nested-map" style="height:400px;">
	            </div>
            </div>
            <div style="width:100%;">
            	<div class="block-container-toggle-left">
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
        					Latitude:
        				</span>
        				<br/>
        				<h5>
            				<span class="label label-primary darker-blue-backgroud-class text-overflow">
            					@{{emptyCheck lat}} 
            				</span>	
        				</h5>
        			</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
        					Map Taxlot Number:
        				</span>
        				<br/>
        				<h5>
            				<span class="label label-primary darker-blue-backgroud-class text-overflow">
            					@{{emptyCheck mapTaxLotNumber}} 
            				</span>	
        				</h5>
        			</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
        				 	Taxlot Number:
        				</span>
        				<br/>
        				<h5>
        					<span class="label label-primary darker-blue-backgroud-class text-overflow">
        						@{{emptyCheck taxLot}} 
    						</span>
						</h5>
					</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
							Number of Owners:
						</span>
						<br/>
						<h5>
							<span class="label label-primary darker-blue-backgroud-class text-overflow">
							@{{emptyCheck numberOwners}}
							</span>
						</h5>
        			</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
							Taxable Land Value / Taxable Improvment Value
						</span>
						<br/>
						<h5>
							<span class="label label-primary darker-blue-backgroud-class text-overflow">
								$@{{formatCurrency assesedLandValue}} / $@{{formatCurrency assesedImpValue}}
							</span>
						</h5>
        			</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
							Zoning:
						</span>
						<br/>
						<h5>
							<span class="label label-primary darker-blue-backgroud-class text-overflow">
							@{{emptyCheck zoning}}
							</span>
						</h5>
        			</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
							Land Use Number:
						</span>
						<br/>
						<h5>
							<span class="label label-primary darker-blue-backgroud-class text-overflow">
							@{{emptyCheck landUseNumber}}
							</span>
						</h5>
        			</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
							Plan Description
						</span>
						<br/>
						<h5>
							<span class="label label-primary darker-blue-backgroud-class text-overflow">
							@{{emptyCheck planDescription}}
							</span>
						</h5>
        			</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
							Fire District:
						</span>
						<br/>
						<h5>
							<span class="label label-primary darker-blue-backgroud-class text-overflow">
							@{{emptyCheck fireDistrict}}
							</span>
						</h5>
        			</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
							School District:
						</span>
						<br/>
						<h5>
							<span class="label label-primary darker-blue-backgroud-class text-overflow">
							@{{emptyCheck schoolDistrict}}
							</span>
						</h5>
        			</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
							Nieghborhood:
						</span>
						<br/>
						<h5>
							<span class="label label-primary darker-blue-backgroud-class text-overflow">
							@{{emptyCheck nieghborHood}}
							</span>
						</h5>
        			</div>
        		</div>	
        		<div class="block-container-toggle-left">
        			<div class="well custom-well-info detail detail">
        				<span class="just-custom-font">
        					Longitude:
        				</span>
        				<br/>
        				<h5>
            				<span class="label label-primary darker-blue-backgroud-class text-overflow">
            					@{{emptyCheck lng}} 
            				</span>	
        				</h5>
        			</div>
        			<div class="well custom-well-info detail detail">
        				<span class="just-custom-font">
        				 	Map Number:
        				</span>
        				<br/>
        				<h5>
        					<span class="label label-primary darker-blue-backgroud-class text-overflow">
        						@{{emptyCheck mapNumber}}
    						</span>
						</h5>
					</div>
            		<div class="well custom-well-info detail">
        				<span class="just-custom-font">
        					Tax Code:
        				</span>
        				<br/>
        				<h5>
            				<span class="label label-primary darker-blue-backgroud-class text-overflow">
            					@{{emptyCheck taxcode}}
            				</span>	
        				</h5>
        			</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
        				 	Year Built:
        				</span>
        				<br/>
        				<h5>
        					<span class="label label-primary darker-blue-backgroud-class text-overflow">
        						@{{emptyCheck yearBuilt}}
    						</span>
						</h5>
					</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
							Total Taxable Value:
						</span>
						<br/>
						<h5>
							<span class="label label-primary darker-blue-backgroud-class text-overflow">
								@{{formatCurrency assesedTaxableValue}}
							</span>
						</h5>
        			</div>
        			<div class="well custom-well-info detail">
        				<span class="just-custom-font">
        				 	Building Type:
        				</span>
        				<br/>
        				<h5>
        					<span class="label label-primary darker-blue-backgroud-class text-overflow">
        						@{{emptyCheck buildingType}}
    						</span>
						</h5>
					</div>
					<div class="well custom-well-info detail">
        				<span class="just-custom-font">
        				 	Exempt Description:
        				</span>
        				<br/>
        				<h5>
        					<span class="label label-primary darker-blue-backgroud-class text-overflow">
        						@{{emptyCheck exemptDescription}}
    						</span>
						</h5>
					</div>
					<div class="well custom-well-info detail">
        				<span class="just-custom-font">
        				 	Property Class Code:
        				</span>
        				<br/>
        				<h5>
        					<span class="label label-primary darker-blue-backgroud-class text-overflow">
        						@{{emptyCheck propertyClassCode}}
    						</span>
						</h5>
					</div>
					<div class="well custom-well-info detail">
        				<span class="just-custom-font">
        				 	Property Class Description:
        				</span>
        				<br/>
        				<h5>
        					<span class="label label-primary darker-blue-backgroud-class text-overflow">
        						@{{emptyCheck propertyClassDescription}}
    						</span>
						</h5>
					</div>
					<div class="well custom-well-info detail">
        				<span class="just-custom-font">
        				 	State Class Code (or) Build Code:
        				</span>
        				<br/>
        				<h5>
        					<span class="label label-primary darker-blue-backgroud-class text-overflow">
        						@{{emptyCheck stateClassCodeOrBuildCode}}
    						</span>
						</h5>
					</div>
					<div class="well custom-well-info detail">
        				<span class="just-custom-font">
        				 	State Class Description:
        				</span>
        				<br/>
        				<h5>
        					<span class="label label-primary darker-blue-backgroud-class text-overflow">
        						@{{emptyCheck stateClassDescription}}
    						</span>
						</h5>
					</div>
            	</div>
            </div>
		</div>
	</div>
</script>
<script type="text/javascript">
Handlebars.registerHelper('emptyCheck', function(passedString) {
    var theString = passedString ? passedString : "Empty"; 
    return new Handlebars.SafeString(theString)
});
Handlebars.registerHelper("last", function(arrayPassed) {
	if (arrayPassed){	
  		return arrayPassed[arrayPassed.length-1];
	}
});
Handlebars.registerHelper('formatCurrency', function(value) {
	if (value){
    	var currencyParse =  value.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
    	var splitNum = currencyParse.split(".");
    	return splitNum[0];
	} else {
		return 'EMPTY';
	}
});
Handlebars.registerHelper('formatAcreage', function(value) {
    if (value){
        return parseFloat(Math.round(value * 100) / 100).toFixed(2);
    } else {
        return 'EMPTY';
    }
});
Handlebars.registerHelper('xIf', function (lvalue, operator, rvalue, options) {

    var operators, result;

    if (arguments.length < 3) {
        throw new Error("Handlerbars Helper 'compare' needs 2 parameters");
    }

    if (options === undefined) {
        options = rvalue;
        rvalue = operator;
        operator = "===";
    }

    operators = {
        '==': function (l, r) { return l == r; },
        '===': function (l, r) { return l === r; },
        '!=': function (l, r) { return l != r; },
        '!==': function (l, r) { return l !== r; },
        '<': function (l, r) { return l < r; },
        '>': function (l, r) { return l > r; },
        '<=': function (l, r) { return l <= r; },
        '>=': function (l, r) { return l >= r; },
        'typeof': function (l, r) { return typeof l == r; }
    };

    if (!operators[operator]) {
        throw new Error("'xIf' doesn't know the operator " + operator);
    }

    result = operators[operator](lvalue, rvalue);

    if (result) {
        return options.fn(this);
    } else {
        return options.inverse(this);
    }
});
//reference at https://github.com/wycats/handlebars.js/issues/616
</script>