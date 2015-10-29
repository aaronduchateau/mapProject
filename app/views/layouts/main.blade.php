<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <link rel="icon" href="../../favicon.ico">

    <title>LotHooppers - Taxlot data made easy.</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('dist/css/bootstrap.min.css') }}
   

    <!-- Custom styles for this template -->
    {{ HTML::style('assets/css/main.css') }}
    {{ HTML::style('assets/css/sales.css') }}
    {{ HTML::style('dist/scroll/jquery.mCustomScrollbar.css') }}
   
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://libs.cartodb.com/cartodb.js/v3/3.14/themes/css/cartodb.css" />
    <!-- start Mixpanel -->
    <script type="text/javascript">
    (function(e,b){if(!b.__SV){var a,f,i,g;window.mixpanel=b;b._i=[];b.init=function(a,e,d){function f(b,h){var a=h.split(".");2==a.length&&(b=b[a[0]],h=a[1]);b[h]=function(){b.push([h].concat(Array.prototype.slice.call(arguments,0)))}}var c=b;"undefined"!==typeof d?c=b[d]=[]:d="mixpanel";c.people=c.people||[];c.toString=function(b){var a="mixpanel";"mixpanel"!==d&&(a+="."+d);b||(a+=" (stub)");return a};c.people.toString=function(){return c.toString(1)+".people (stub)"};i="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
    for(g=0;g<i.length;g++)f(c,i[g]);b._i.push([a,e,d])};b.__SV=1.2;a=e.createElement("script");a.type="text/javascript";a.async=!0;a.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";f=e.getElementsByTagName("script")[0];f.parentNode.insertBefore(a,f)}})(document,window.mixpanel||[]);
    mixpanel.init("b8e92505ac3b65d5d69e8a6557a7f58f");
    </script>
    <!-- end Mixpanel -->

  </head>

  <body id="body-dash" style="background-color: #337ab7;">
    <div id="communique">
      <h5 id="communique-text-holder">
        <span id="communique-text">This is Placeholder Communique Text</span>
      </h5>  
    </div>  
            
	    @if(Session::has('message'))
				<p class="alert">{{ Session::get('message') }}</p>
			@endif

	    	{{ $content }}

        <div class="modal fade" id="myModalContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Contact lotHoppers</h4>
              </div>
              <div class="modal-body">
                <form class="well hide-mail" action="" method="post" style="margin: 5px 10px;" >
                 <div class="col-md-6">

                        <input type="text" name="" id="emailFormPublic" class="input-spacing" placeholder="Return Email"><br/>
                        <input type="text" name="" id="phoneFormPublic" class="input-spacing" placeholder="Return Phone"><br/>
                        <textarea name="" id="messageFormPublic" class="input-spacing" style="height:120px;" placeholder="Your Message"></textarea>
                 </div>  
                 <div class="col-md-6">             
                        Please fill out the form to your right.<br/><br/>
                        We are excited to hear from you and get back to you at our next possible convenience! Please include as much context as possible in your message so we can get back to you in the most professional and accurate way possible. 
                 </div>       
                 <div style="clear:both;"></div>    
                </form>      
                <div class="show-mail" style="display:none;"> 
                    <h3>Thank you.</h3>
                    <p>
                        We will be in touch shortly with a response to your message!<br/> 
                        We look forward to speaking with you!
                    </p>
                </div>
              </div>
              <div class="modal-footer">
                <a href="javascript:void(0)" id="submitm" class="btn btn-primary hide-mail">Send Message</a>
              </div>
            </div>
          </div>
        </div>
	    	
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Get in Touch!</h4>
              </div>
              <div class="modal-body">
                 <table>
                    <tr>
                      <td>
                        <img src="http://www.pivot2dream.com/images/team/aaron.png" style="float:right">
                        If you're reading this, it's because I wanted to show you what I believe is the beginning of something large. There is a huge need in a variety of verticals to present taxlot data in a way that is fast, user navigable, and reliably up-to-date. What you see here is just one personification of what i believe this underlying infrastructure, will be able to deliver.
                        <br/><br/>
                        Please do not share your login information with anyone else, as the user end license agreement indicates. If you'd like to chat, get in touch, or get someone in touch with me, please contact me directly at:
                        <br/>
                        <br/>
                        <p>
                        <b>ChateauConcept@gmail.com</b><br/>
                        <b>541-653-0973</b><br/>
                        </p>
                        - a note from: Aaron DuChateau (Owner, Software Architect, UI developer)

                      </td>
                      <td>
                        
                      </td>
                    </tr>
                </table>      
              </div>
              <div class="modal-footer">
                <a href="http://www.aaronduchateau.com/" class="btn btn-primary" target="_blank">View My Portfolio</a>
              </div>
            </div>
          </div>
        </div>
  	</body>
</html>
<script src="{{ URL::asset('dist/js/messageAaron.js') }}"></script>