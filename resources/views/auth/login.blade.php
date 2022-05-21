{{-- @extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card mx-4">
            <div class="card-body p-4">
                <h1>{{ trans('panel.site_title') }}</h1>

                <p class="text-muted">{{ trans('global.login') }}</p>

                @if(session('message'))
                    <div class="alert alert-info" role="alert">
                        {{ session('message') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>

                        <input id="email" name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">

                        @if($errors->has('email'))
                            <div class="invalid-feedback">
                                {{ $errors->first('email') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>

                        <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">

                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                    </div>

                    <div class="input-group mb-4">
                        <div class="form-check checkbox">
                            <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />
                            <label class="form-check-label" for="remember" style="vertical-align: middle;">
                                {{ trans('global.remember_me') }}
                            </label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary px-4">
                                {{ trans('global.login') }}
                            </button>
                        </div>
                        <div class="col-6 text-right">
                            @if(Route::has('password.request'))
                                <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                    {{ trans('global.forgot_password') }}
                                </a><br>
                            @endif

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection --}}

@extends('layouts.master')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="pageHeading">Sign In</h1>
                <h6>Welcome back! Please login to your account.</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-5 voffset3">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="col-xs-12 voffset2">

                            <label class="lblHead" for="login_email"></label>

                         

                            <input id="email" name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">

                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif


                        </div>
                        <div class="col-xs-12 voffset2">
                            <label class="lblHead" for="login_password"></label>
                          

                      <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">

                        @if($errors->has('password'))
                            <div class="invalid-feedback">
                                {{ $errors->first('password') }}
                            </div>
                        @endif


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 voffset3">
                            <button type="submit" class="formBtn submitFormBtn fullWidth darkBg">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 voffset3">
                <a href="{{ URL::to('/forgot-password') }}" class="underline bold">Forgot your password?</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 voffset5">
                <h6>Don't have an account?</h6>
                <div class="listButton voffset2">
                    <a href="{{ URL::to('/register') }}" class="linkBtn whiteShadow">Create account</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
