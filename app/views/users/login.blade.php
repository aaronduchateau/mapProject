<div style="display:none;">{{App::environment()}}</div>
<div class="sign-in-div">
	{{ Form::open(array('url'=>'users/signin')) }}
		<h4 class="form-signin-heading" style="color:white;">Please Login</h4>

		{{ Form::text('email', null, array('class'=>'input input-block-level', 'placeholder'=>'Email Address')) }}
		<br/>
		{{ Form::password('password', array('class'=>'input input-block-level', 'placeholder'=>'Password')) }}

		{{ Form::submit('Login', array('class'=>'btn btn-large btn-primary btn-block'))}}
	{{ Form::close() }}
</div>
<div class="chrome-message" style="width: 600px;margin: 0 auto;color:white;display:none;">
<h3>for the best experience using this beta application, please use google chrome.<h3>
<h4>don't have it? you can quickly download it by <a href="https://www.google.com/chrome/browser/desktop/" target="_blank" class="btn" style="color:white;">*CLICKING HERE*</a>.</h4>
<img src="https://bandpad.co/livescore/images/chrome.png" style="width:200px;">
</div>

<script type="text/javascript">

  $( document ).ready(function() {
	var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
	if (!is_chrome){
		$('.sign-in-div').hide('slow');
		$('.chrome-message').show('slow');
	}
  });

</script>