@extends('layouts.app')

@section('content')
<section class="login-block">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-5 col-sm-12 col-12 login-sec">
                <div class="card">
                    <h2 class="text-center">{{ __('Reset Password') }}</h2>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                        <div class="col-md-12 col-sm-12 col-12 col-lg-12">
                            <div class="form-group ">
                                <label for="email">{{ __('E-Mail Address') }}</label>

                                
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-12 col-lg-12">
                                <div class="form-group btngap">
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Send Password Reset Link') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-12 col-lg-7 banner-sec">
                </div>
        </div>
    </div>
</section>
@endsection
