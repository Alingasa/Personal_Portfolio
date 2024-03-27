{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("login-form/vendor/bootstrap/css/bootstrap.min.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("login-form/fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("login-form/fonts/iconic/css/material-design-iconic-font.min.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("login-form/vendor/animate/animate.css")}}>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href={{asset("login-form/vendor/css-hamburgers/hamburgers.min.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("login-form/vendor/animsition/css/animsition.min.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("login-form/vendor/select2/select2.min.css")}}>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href={{asset("login-form/vendor/daterangepicker/daterangepicker.css")}}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{asset("login-form/css/util.css")}}>
	<link rel="stylesheet" type="text/css" href={{asset("login-form/css/main.css")}}>
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('porfolio/assets/img/bg.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" method="POST" action="{{route('login')}}">
                    @csrf
					<span class="login100-form-title p-b-49">
						Login
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
                        @error('email')
						<span class="invalid-input100"><strong class="text-danger">{{ $message }}</strong></span> <br>
					@else
						@error('password')
						<span class="invalid-input100"><strong class="text-danger">{{ $message }}</strong></span> <br>
						@enderror
						@enderror
						<span class="label-input100">Email</span>
						<input id="email" type="email"  class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Type your email">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input id="password" type="password" class="input100 @error('password') is-invalid @enderror"  name="password" required autocomplete="current-password" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-31">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
                    
					<div class="flex-col-c">
						<span class="txt1 p-b-17">
						
						</span>

						<a href="{{url('/')}}" class="txt2">
							back
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src={{asset("login-form/vendor/jquery/jquery-3.2.1.min.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("login-form/vendor/animsition/js/animsition.min.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("login-form/vendor/bootstrap/js/popper.js")}}></script>
	<script src={{asset("login-form/vendor/bootstrap/js/bootstrap.min.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("login-form/vendor/select2/select2.min.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("login-form/vendor/daterangepicker/moment.min.js")}}></script>
	<script src={{asset("login-form/vendor/daterangepicker/daterangepicker.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("login-form/vendor/countdowntime/countdowntime.js")}}></script>
<!--===============================================================================================-->
	<script src={{asset("login-form/js/main.js")}}></script>

</body>
</html>