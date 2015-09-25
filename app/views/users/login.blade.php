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