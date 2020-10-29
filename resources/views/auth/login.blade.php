{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
@endsection
--}}
<!DOCTYPE html>
<html lang="zxx">
    
<head>
        <!-- meta tag -->
        <meta charset="utf-8">
        @include('frontlayouts.title')
        <meta name="description" content="">
        <!-- responsive tag -->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('frontlayouts.css')
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="home3">
   <div class="full-width-header login">
	<div class="rs-banner-section3">
        <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-4"></div>
              <div class="col-lg-4 md-pt-40">
              	<div class="register-form" >
              	    <div class="form-title text-center">
              	         <h4 class="title">Login</h4>
              	    </div>
              	     <div class="form-group text-center">
                       <form method="POST" id="contact-form" class="contact-form" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror mb-2" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror mb-2" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <input type="submit" value="Login" class="wpcf7-form-control wpcf7-submit">
                                </div>
                            </div>
                        </form>
              	     </div>
              	 </div>
              </div>
              <div class="col-lg-4"></div>
            </div>
        </div>
	</div>
	<!--Banner Section End-->
        
        @include('frontlayouts.javascript')
    </body>

<!-- Mirrored from keenitsolutions.com/products/html/edulearn/edulearn-demo/index8.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Aug 2020 07:25:07 GMT -->
</html>

