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

    <title>LotHoppers - Taxlot data made easy.</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('dist/css/bootstrap.min.css') }}
   

    <!-- Custom styles for this template -->
    {{ HTML::style('assets/css/main.css') }}
    {{ HTML::style('assets/css/sales.css') }}
    {{ HTML::style('dist/scroll/jquery.mCustomScrollbar.css') }}
   
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>
  </head>

  <body id="body-dash">

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
        <div style="width:100%;background-color: #0D6A92;color:white;text-align:right;padding:10px;">
            <a href="{{ URL::asset('')}}" style="color:white;">Home</a> |
            <a href="javascript:void(0)" style="color:white;" data-toggle="modal" data-target="#myModalContact">Contact</a> |
            <a href="{{ URL::asset('/users/login')}}" style="color:white;">Sign in</a> |
            <a href="https://www.facebook.com/lothoppers" target="_blank" style="color:white;">Facebook</a>
        </div>    

  	</body>
</html>
<script src="{{ URL::asset('dist/js/messageAaron.js') }}"></script>