<span style="display:none;" id="environment">{{App::environment();}}</span>
<!--top menu goes here-->
<div class="options-area" style="margin-left:5px;margin-right:10px;">
  <h5 style="color:white;" class="left-result-heading dash-heading-4 pull-left">
    &nbsp;&nbsp;&nbsp;Welcome, please choose a state, then a county from the menu below:
  </h5>
</div>

<div class="container-dash">
  <div class="menu-left-list-1" style="background-color:rgba(13,106,146,0.9);">
    <div class="menu-left-inter-margin-1" >
      @foreach($usStates as $usState)
        <!--start item-->
          <div class="custom-well-dash-left left-open-1" data-result-index="{{$usState->id}}">
            <table style="margin-left:15px;margin-right:5px;width:95%;">
              <tr>
                <td style="width:90%;">
                  <h4 class="heading">{{$usState->name}}</h4>
                </td>
                <td style="width:10%;">
                <span class="glyphicon glyphicon-chevron-right pull-right" aria-hidden="true" style="color:white;margin-right:10px;"></span>
                </td>
              </tr>
            </table>
          </div>
        <!--end item--> 
      @endforeach
      <div style="height:300px;">
        &nbsp;
      </div>  
    </div>
  </div>
  <div class="menu-left-list-2" style="background-color:rgba(13,106,146,0.9);">
    <div class="menu-left-inter-margin-2">
      <!--this is populated using avatarTemplate-->
    </div>
 </div>
 <div id="map-canvas" class="dash-center" style="background-color:rgba(13,106,146,0.9);">
    <div class="dash-center-top-container" style="width: 100%;background-color:#7692AA;display:none;">
      
        <div class="menu-user-agreement">
          <!--this is populated using avatarTemplate-->
        </div>
     
    </div>
    <div class="dash-center-bottom" style="width:100%;height:150px;padding:15px;background-color:rgb(51, 122, 183);display:none;">
      <p style="color:white;">
        I, {{Auth::user()->firstname}}</b> {{Auth::user()->lastname}}, agree to the Terms above on <span id="agree-date"></span>, and will not provide another party with access to login credentials provided without the express written consent of Aaron DuChateau.
      </p>
      <div style="margin-top:20px;">
      <a class="btn btn-primary pull-right" id="decline" style="margin-right:5px;">
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> 
        DECLINE
      </a>
      <a class="btn btn-primary pull-right" id="accept" style="margin-right:5px;">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> 
        ACCEPT
      </a>
      </div>
    </div>    
  </div>
</div>
<!--include this on every sub page-->
<input type="hidden" id="client-email-holder" value="{{Auth::user()->email}}">
<input type="hidden" id="client-account-type" value="{{Auth::user()->accountType}}">
<input type="hidden" id="client-name-holder" value="{{Auth::user()->firstname}} {{Auth::user()->lastname}}">


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&v=3&libraries=geometry"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script src="{{ URL::asset('dist/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('dist/js/handlebars-v2.0.0.js') }}"></script>
<script src="{{ URL::asset('dist/js/jQuery.print.js') }}"></script>
<script src="{{ URL::asset('dist/js/moment.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ URL::asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>

<script src="{{ URL::asset('assets/jsModels/menuModel.js') }}"></script>
<script src="{{ URL::asset('assets/jsControllers/googleMapPopulateScoped.js') }}"></script>
<script src="{{ URL::asset('assets/jsControllers/globalVars.js') }}"></script>
<script src="{{ URL::asset('dist/scroll/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!--$(selector).mCustomScrollbar("scrollTo",position,options);-->
<!--//http://manos.malihu.gr/jquery-custom-content-scroller/-->

<!--include handlbar templates-->
@include('handlebarTemplates.menuTemplate')
@include('handlebarTemplates.globalTemplate')

<script>
 
  $( document ).ready(function() {
    //set up everything to have the right margins and what not
    window.g.twoLeftPageSetup();
    
    //load global template and populate top menu
    window.g.populateTopMenu(
      { menu: {class: " active", link: "javascript:void(0);", action: ""},
        dash: {class: "", link: "javascript:void(0);", action: ""},
        emailHeld: $('#client-email-holder').val(),
        accountType: $('#client-account-type').val()});
      
    

    $(".menu-left-list-1").mCustomScrollbar({
        theme:"minimal"
    });

    $(".menu-left-list-2").mCustomScrollbar({
        theme:"minimal"
    });

    $(".dash-center-top-container").mCustomScrollbar({
        theme:"minimal"
    });

    var populateUserAgreement = function (){ 
        //this loads our template for the second left pain
        var source = $("#menu-terms-template").html();
        var agreementTemplate = Handlebars.compile(source);
        templateResult = agreementTemplate({username: $('#client-name-holder').val()});
        $('.menu-user-agreement').html(templateResult);
    }
    populateUserAgreement();


    var populateSecondMenu = function (data){ 
        //this loads our template for the second left pain
        var source = $("#menu-left-2-template").html();
        var leftDashTemplate = Handlebars.compile(source);
        templateResult = leftDashTemplate({menu: data});
        $('.menu-left-inter-margin-2').html(templateResult);
    }
    
    

    //action for first menu, populate second from left menu bar
    $(document).on('click', '.left-open-1', function(event) {
        var closestDiv = $(event.target).closest('div');

        var indexTracker = closestDiv.attr('data-result-index');
        //highlight the last clicked item
        window.g.highlightLastItem('.left-open-1', event, 'active-item-right');
        //call model provide index and callback
        window.menu.fetchCounties(indexTracker, populateSecondMenu);
        $('.dash-center-top-container').slideUp();
        $('.dash-center-bottom').slideUp();
        
        window.g.scrollItemToTop(".menu-left-list-1", closestDiv);
    });

    //action for second menu, reveal terms and populate button
    var state;
    var countyConcat;
    $(document).on('click', '.left-open-2', function(event) {
        var closestDiv = $(event.target).closest('div');

        var indexTracker = closestDiv.attr('data-result-index');
        state = closestDiv.attr('data-result-state');
        countyConcat = closestDiv.attr('data-result-county-concat');
        
        //highlight the last clicked item
        window.g.highlightLastItem('.left-open-2', event, 'active-item-right');
        //scroll to last clicked item
        window.g.scrollItemToTop(".menu-left-list-2", closestDiv);
        
        $('#agree-date').text(moment().format('MMMM Do YYYY'));

        $('.dash-center-top-container').slideDown( "slow");
        $('.dash-center-bottom').slideDown( "slow");
    });

    $(document).on('click', '#decline', function(event) {
        alert('Please Agree to the Terms and Condtions to Continue');
    });

    $(document).on('click', '#accept', function(event) {
        mixpanel.people.increment('has_agreed_to_terms', 1);
        window.location.href = "{{ URL::asset('') }}users/dashboard/" + state + "/" + countyConcat;
    });
    
  });
  /////////////////////////////////////////////
  //mixpanel analytics
  mixpanel.people.set_once(
    { "FirstName": "{{Auth::user()->firstname}}",
      "LastName": "{{Auth::user()->lastname}}",
      "email": $('#client-email-holder').val(),
      "accountType": $('#client-account-type').val(),
      "Name": "{{Auth::user()->firstname}} {{Auth::user()->lastname}}"
    }
  );
  // identify must be called along with people.set
  mixpanel.identify($('#client-email-holder').val());
  mixpanel.people.increment('LoggedIn', 1);

</script>