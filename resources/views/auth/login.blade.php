@extends('layouts.app')

@section('content')

<!------ Include the above in your HEAD tag ---------->

<section class="login-block">
    <div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-12 col-lg-5 login-sec">
				<h2 class="text-center">Login Now</h2>
				<form method="POST" action="{{ route('login') }}">
                        @csrf
					  <div class="form-group">
						<label for="exampleInputEmail1" class="text-uppercase">Username</label>
                        <input id="inputEmail" type="email"   class="form-control @error('email') is-invalid @enderror" placeholder="Email address"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

						
                      </div>
                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					  <div class="form-group">
						<label for="exampleInputPassword1" class="text-uppercase">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                      </div>
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
<!-- 
					 <div class="form-group custom-control custom-checkbox">
                     <input class="form-check-input" type="checkbox" name="remember" id="customCheck" {{ old('remember') ? 'checked' : '' }}>

						<label class="custom-control-label" for="customCheck">Remember</label>
					 </div> -->
                     <div class="form-group custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="remember" id="customCheck" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customCheck">Remember</label>
                             </div>
					<button type="submit" class="btn btn-login login-btn">Submit</button>
                </form>
                @if (Route::has('password.request'))
                                    <a class="fpass" id="forgotPass" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
				
			</div>
			
			<div class="col-md-7 col-sm-12 col-lg-7 banner-sec">
			</div>
		</div>
	</div>
</section>

    <!-- <div class="row justify-content-center">
       <div class="card card-login mx-auto mt-5">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">



							 <div class="form-label-group">
                                <input id="inputEmail" type="email"   class="form-control @error('email') is-invalid @enderror" placeholder="Email address"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
								<label for="inputEmail"><span>Email address</span></label>
                            </div>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>


                        <div class="form-group">


                             <div class="form-label-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
								 <label for="password"><span> password</span></label>
                               </div>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

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
    </div> -->

@endsection
