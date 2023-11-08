@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'login','titlePage' => __('Login'),$rtemplate])

@section('content')
<div class="container-fluid" id="login">
	<div class="login-cover">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-4 col-md-offset-3 col-sm-offset-3 ">
			<form class="form  form-horizontal " id="loginForm" method="POST" action="login" data-parsley-validate>      
				<div class="card card-login">
					<div class="login-card-header text-center">
						<p class="login-card-title"><strong>{{ __('Login') }}</strong> with social accounts:</p>
						  <div id="b-element" class="form-group">
							<div class="col-sm-offset-1 col-sm-10">			
									<button type="submit" class="btn btn-lg btn-primary col-lg-5 col-md-5 col-sm-10  " id="fb-btn">Facebook  <i class="fa fa-facebook"></i></button>
									<button type="submit" class="btn btn-lg btn-danger col-lg-5 col-md-5 col-sm-10  col-lg-offset-1 col-md-offset-1" id="g-btn">Google  <i class="fa fa-google"></i></button>
							</div>
						  </div>			
					</div>
					<div class="login-card-body">
						<p class="card-description text-center">Or Sign In with<strong> email address</strong> and account <strong>password</strong></p>
						<div class="form-group">
							<input type="hidden" value="{{csrf_token()}}" name="_token" />				
							<div class="col-lg-10 col-md-10 col-md-offset-1">
							<input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email', '') }}" required>
							</div>
						</div>				  
						<div class="form-group">  
							<div class=" col-md-10 col-md-offset-1">
								<input type="password" name="password" id="password" class="form-control" placeholder="{{ __('Password...') }}" value="{{ old('password') ? 'secret' : '' }}" required>
							</div>
						</div>
						<div class="form-group">
						  <label class="control-label label-mr">
							<input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember me') }}
							<span class="form-check-sign">
							  <span class="check"></span>
							</span>
						  </label>
						</div>
						<div class="card-footer justify-content-center">
							<button type="submit" class="btn btn-success col-sm-10 col-xs-10 " id="login-btn">Sign in now</button>
						</div>	
						<div class="col-6">
							@if (Route::has('password.request'))
								<a href="{{ route('password.request') }}" class="text-light">
									<small>{{ __('Forgot password?') }}</small>
								</a>
							@endif
						</div>			  
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
