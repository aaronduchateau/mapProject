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

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    {{ HTML::style('dist/css/bootstrap.min.css') }}
   

    <!-- Custom styles for this template -->
    {{ HTML::style('assets/css/main.css') }}
    {{ HTML::style('dist/scroll/jquery.mCustomScrollbar.css') }}
   
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,800,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://libs.cartodb.com/cartodb.js/v3/3.14/themes/css/cartodb.css" />
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