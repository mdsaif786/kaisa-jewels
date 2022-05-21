@extends('layouts.master')
@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="pageHeading">Sign Up</h1>
                <h6>It's free and take less than 60 seconds.</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-5 voffset3">
                <form method="POST" action="{{ route('register') }}">
                        @csrf
                    <div class="row">
                        <div class="col-xs-12 voffset2">
                            <label class="lblHead" for="signup_name"></label>

                          
                            <input placeholder="* Full name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="col-xs-12 voffset2">
                            <label class="lblHead" for="signup_email"></label>

                         
                          <input  placeholder="* Email address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                        </div>
                        <div class="col-xs-12 voffset2">
                            <label class="lblHead" for="signup_mobile"></label>

                         

                              <input placeholder="* Mobile number"  id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="col-xs-12 voffset2">
                            <label class="lblHead" for="signup_password"></label>

                           
                            <input placeholder="* Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror


                        </div>
                        <div class="col-xs-12 voffset2">
                            <label class="lblHead" for="signup_password_confirmation"></label>

                            

                            <input placeholder="* Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">


                        </div>
                        <div class="col-xs-12 voffset3">
                            <p><small>By clicking Create Account button, you agree to our <a href="{{ URL::to('/terms-and-condition') }}" class="underline">Term & conditions</a>, <a href="{{ URL::to('/privacy-policy') }}" class="underline">Privacy Policy</a> and <a href="{{ URL::to('/cookies-policies') }}" class="underline">Cookie Policy</a>.</small></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 voffset3">
                            <button type="submit" class="formBtn submitFormBtn fullWidth darkBg">Create account</button>
                        </div>
                    </div>                  
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 voffset5">
                <h6>Already have an account?</h6>
                <div class="listButton voffset2">
                    <a href="{{ URL::to('/login') }}" class="linkBtn whiteShadow">Login here</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
