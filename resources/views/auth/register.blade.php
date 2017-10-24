@extends('layouts.app')


@section('content')
    <section class="timeline-part" id="signin-part">
        <div class="content">
            <div class="container-template">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-11">
                            <div class="headergroup register">
                                <h4>
                                    One of our guests?
                                </h4>
                                <h2>
                                    <span>Sign Up Now</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-1"></div>
                            <div class="col-md-5 content-template">
                                <div style="text-align: justify; text-align-last: left;">
                                    <div class="col-md-12">
                                        <img src="{{ asset('TEMPLATES/Luxury-master/images/ADDED/template-mac.png') }}" width="100%" height="auto" style="margin-bottom: 20px;">
                                    </div>
                                    <p><strong>The leading provider and third-party supplier of latest technologies and PC games on the Philippines, today. </strong></p>
                                    <p style="margin-top: 10px;">Connect your different social media account to shout in the whole world that you will be part of the Pert Republic.</p>
                                </div>
                                <div class="row" style="margin-top: -10px;">
                                    <div class="col-md-6">
                                        <a class="btn btn-block btn-social btn-facebook" href="/login/facebook" title="Sign up with Facebook">
                                            <span class="fa fa-facebook"></span> Sign up with Facebook
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="btn btn-block btn-social btn-google" href="/login/google" title="Sign up with Google">
                                            <span class="fa fa-google"></span> Sign up with Google
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1">
                                
                            </div>
                            <div class="col-md-5">
                                <div class="form-box">
                                    <div class="form-top">
                                        <div class="form-top-left">
                                            <h3>Pert Republic - Sign up</h3>
                                            <p>Enter necessary details to create an account:</p>
                                        </div>
                                        <div class="form-top-right">
                                            <i class="fa fa-lock"></i>
                                        </div>
                                    </div>
                                    <div class="form-bottom">
                                        <form action="{{ route('register') }}" method="POST" id="register-form">
                                        {{ csrf_field() }}
                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                <div class="input-group col-md-12">
                                                    <span class="input-group-addon" for="form-name"><b>FULL NAME</b></span>
                                                    <input type="text" class="form-name form-control" name="name" id="name" value="{{ old('name') }}" required>
                                                </div>
                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
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
                                            <div class="form-group">
                                                <div class="input-group col-md-12">
                                                    <span class="input-group-addon" for="form-confirm-password"><b>CONFIRM PASS.</b></span>
                                                    <input type="password" class="form-confim-password form-control" name="password_confirmation" id="password-confirm" required>
                                                </div>
                                            </div>
                                            <div class="row" style="text-align: center;">
                                                <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> I agree with all of the Terms and Condition.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3"></div>
                                                <div class="col-md-6">
                                                    <a href="{{ route('register') }}" onclick="event.preventDefault();
                                                     document.getElementById('register-form').submit();" class="btn btn-block btn-template-transparent-black" title="Sign Up Now">
                                                        Sign Up Now
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (Session::has('status'))
                <div class="alert alert-success">{!! Session::get('status') !!}</div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
