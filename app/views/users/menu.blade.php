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
        window.location.href = "{{ URL::asset('') }}users/dashboard/" + state + "/" + countyConcat;
    });
    


    /*

    $(window).load(function(){
        
      $(".dash-left-list").mCustomScrollbar({
        theme:"minimal"
      });

      $(".dash-right-list").mCustomScrollbar({
        theme:"minimal"
      });
      
    });

    //print the left dash pain
    $(document).on('click', '#print-left-dash', function(event) {
      $('.dash-left-full-margin').print({
        globalStyles : false, // Use Global styles
        mediaPrint : false, // Add link with attrbute media=print
        //stylesheet : "http://fonts.googleapis.com/css?family=Inconsolata", //Custom stylesheet
        iframe : false, //Print in a hidden iframe
        noPrintSelector : ".avoid-this", // Don't print this
        append : "custom tip can go here", // Add this on top
        prepend : "<h2>Avatar RFP - MyEyesRemote.com</h2>" // Add this at bottom
      });
    });

    fetchCounties

    $(document).on('click', '.left-open', function(event) {
        //$(".container-dash").css('left','0px');
        //if (window.nestedMap){
          //window.nestedMap.setMap(null);
        //}
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
          var indexTracker = $(event.target).closest('div').attr('data-result-index');
        
          var templateResult = leftDashTemplate(window.g.mapRowData);
          $('.dash-left-full-margin').html(templateResult);

          //
          window.gmd.interactMap.nestedMap(window.g.mapRowData['ACCOUNT'].value);

          //this loads the work description for the expanded view
          source   = $("#job-description").html();
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
          $('.dash-left-full-margin').slideDown('slow');
        });
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
       window.gmd.interactMap.panToPosition( $('#latMap').val(), $('#lngMap').val() );
       console.log('click');
    });

    $(document).on('click', '#current-loc-click', function() {
       navigator.geolocation.getCurrentPosition(myLocationCallback);
    });

    $(document).on('click', '.single-right-item', function(event) {
       var latMap = $(event.target).closest('table').attr('data-attr-lat');
       var lngMap = $(event.target).closest('table').attr('data-attr-lng');
       $( ".single-right-item" ).each(function() {
         $( this ).removeClass('active-item-right');
       });
       $(event.target).closest('.single-right-item').addClass('active-item-right');
       window.gmd.interactMap.panToPosition( latMap, lngMap );
      
    });
    */
    
  });

</script>