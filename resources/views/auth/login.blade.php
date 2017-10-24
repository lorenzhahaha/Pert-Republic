@extends('layouts.app')

@section('content')
    <section class="timeline-part" id="signin-part">
        <div class="content">
            <div class="container-template">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-11">
                            <div class="headergroup">
                                <h4>
                                    Already have account?
                                </h4>
                                <h2>
                                    <span> Sign in Now </span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-5 content-template">
                            @if (Session::has('status'))
                                <div class="alert alert-default">{!! Session::get('status') !!}</div>
                            @endif
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Pert Republic - Sign In</h3>
                                        <p>Enter your email and password to login:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-lock"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form action="{{ route('login') }}" method="POST" id="login-form">
                                    {{ csrf_field() }}
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <div class="input-group col-md-12">
                                                <span class="input-group-addon" for="form-email"><b>EMAIL ADD.</b></span>
                                                <input type="email" class="form-email form-control" name="email" id="email" value="{{ old('email') }}" required>
                                            </div>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <div class="input-group col-md-12">
                                                <span class="input-group-addon" for="form-password"><b>PASSWORD</b></span>
                                                <input type="password" class="form-password form-control" name="password" id="password" required>
                                            </div>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="row" style="text-align: center;">
                                            <div class="col-md-12">
                                                <label>
                                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-6">
                                                <a href="{{ route('login') }}" onclick="event.preventDefault();
                                                     document.getElementById('login-form').submit();" class="btn btn-block btn-template-transparent-black" title="Sign in Now">
                                                    Sign in Now
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row" style="text-align: center;">
                                            <div class="col-md-12">
                                                <a href="{{ route('password.request') }}" class="btn btn-link" style="text-decoration: none; margin-top: 5px;">
                                                    Forgot Your Password?
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5 content-template">
                        <div style="margin-top: 25px; text-align: justify; text-align-last: left;">
                            <p><strong>The leading provider and third-party supplier of latest technologies and PC games on the Philippines, today. </strong></p><br>
                            <p>Share your experiences to your friends with our best services. Make them know how you were served with the best quality products that we have. We, Pert Republic, will always be glad to serve all gamers around the Philippines.</p><br>
                            <p>Connect your different social media account to shout in the whole world that you are part of the Pert Republic.</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <a class="btn btn-block btn-social btn-facebook" href="/login/facebook" title="Login with Facebook">
                                    <span class="fa fa-facebook"></span> Login with Facebook
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-block btn-social btn-google" href="/login/google" title="Login with Google">
                                    <span class="fa fa-google"></span> Login with Google
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
      </div>
    </section>
@endsection
