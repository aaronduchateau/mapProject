<script id="messages-center-template" type="text/x-handlebars-template">
	{{#messages}} 
	<!--start item-->
	    <div data-result-index="{{@index}}" style="padding-top:10px;padding-bottom:5px;color:white;">
	      <table style="margin-left:15px;margin-right:5px;width:95%;">
	        <tr>
	          <td style="width:10%;vertical-align: top;">
                <img src="../images/icon-user-default.png" style="margin-left:0px;margin-right:10px;margin-top:4px;" class="small-user">
              </td>
	          <td style="width:88%;">
	            <p><span style="font-weight:bold;">{{../name}}</span> with <span style="font-weight:bold;">{{../company}}</span></p>
	            <p class="body">{{messageContent}}</p>
	            <p class="small">
	            {{#if joblinkTitle}}
	            <span class="pull-left">
		            <a href="javascript:void(0);" class="label label-primary left-open-job" style="font-size:100%;">
		            	<span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
		            	<span class="date-holder">job link - {{hasJobLink}}</span>
		            </a>
	            </span>
	            {{/if}}
	            <span class="pull-right">
	            	<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
	            	<span class="date-holder">{{messageDate}}</span>
	            </span>
	            </p>
	          </td>
	        </tr>
	      </table>
	    </div>
	<!--end item--> 
	{{/messages}} 
</script>
<script id="messages-left-template" type="text/x-handlebars-template">
	{{#messageResults}} 
	<!--start item-->
	    <div class="custom-well-dash-left left-open" data-result-index="{{@index}}" style="padding-top:10px;padding-bottom:5px;">
	      <table style="margin-left:15px;margin-right:5px;width:95%;">
	        <tr>
	          <td style="width:10%;vertical-align: top;">
                <img src="../images/icon-user-default.png" style="margin-left:0px;margin-right:10px;margin-top:4px;" class="small-user">
              </td>
	          <td style="width:78%;">
	            <p style="font-weight:bold;">{{name}}</p>
	            <p class="body">{{trimString messages.[0].messageContent}}...</p>
	            <p class="small">
	            <span class="pull-left">
	            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
	            <span class="date-holder">{{registered}}</span>
	            </p>
	          </td>
	          <td style="width:10%;">
	          <span class="glyphicon glyphicon-chevron-right pull-right" aria-hidden="true" style="color:white;margin-right:10px;"></span>
	          </td>
	        </tr>
	      </table>
	    </div>
	<!--end item--> 
	{{/messageResults}} 
</script>
<script type="text/javascript">
Handlebars.registerHelper('trimString', function(passedString) {
    var theString = passedString.substring(0,80);
    return new Handlebars.SafeString(theString)
});
Handlebars.registerHelper("last", function(arrayPassed) {
	if (arrayPassed){	
  		return arrayPassed[arrayPassed.length-1];
	}
});
</script>