<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content=""/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('img/icons/ICON-PERT.png') }}" type="image/x-icon" />
    <title> Pert Republic - Marketplace made innovative. </title>

    <!-- NECESSARY SCRIPTS -->
    <script type="text/javascript" src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/floating-label.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/checkbox-button.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- STYLES AND LINKS -->
   <link rel="stylesheet" type="text/css" href="{{ asset('css/welcome-styles.css') }}" />
   <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
   <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-social.css') }}" />
   <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-group-btn.css') }}" />
   <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-labeled-btn.css') }}" />

   <!-- FONTS -->
   <link rel='stylesheet' type='text/css' href="{{ asset('fonts/elusive/elusive-webfont.css') }}" />
   <link rel='stylesheet' type='text/css' href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}" />
   <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet" />

   <!-- CUSTOM CSS -->
   <style type="text/css">
        body {
            margin: 10 0;
            background-color: #4e5555;
            font-family: 'Quicksand', sans-serif;
        }

        .btn {
            border-radius: 0px !important;
        }

        .container-fluid {
            background-color: #232b2b;
            margin: 15px 15px;
            box-shadow: -7px 7px 10px #000;
            border-radius: 5px;
        }

        .left-content {
            left: -15px;
            position: relative;
        }

        .left-content img {
            border-top-left-radius: 5px;
        }

        .left-content .row {
            position: absolute;
            top: 0;
            margin-left: 45px;
        }

        .left-content .row .col-md-12 img {
            margin-top: 30px;
            margin-left: 30px;
        }

        .left-content .row .col-md-12 {
            margin-bottom: 50px;
        }

        .right-content {
            left: -30px;
            margin-top: 70px;
            position: relative;
        }

        @if ($errors->has('name') || $errors->has('email') || $errors->has('password'))
        .right-content {
            margin-top: 30px;
        }
        .right-content .row .col-md-5 {
            margin-top: 30px;
        }
        @endif
   </style>

</head>
<body>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-md-4 left-content">
                <img src="{{ asset('img/wallpapers/photogrid.jpg') }}" class="wallpaper-left" width="580px" alt="">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('img/icons/ICON-PERT.png') }}" class="pert-logo" width="150px" alt="">
                        <h2 class="bold primary"> Pert Republic </h2>
                        <hr class="colorgraph" width="50%">
                        <h4 class="thin secondary ">
                            A playstore offering latest technologies and action-packed games just for you.
                        </h4>
                    </div>
                    <div class="col-md-6">
                        <h3 class="primary">
                            <i class="icon-laptop size-54"></i>
                        </h3>
                        <h4 class="secondary light">
                            GAMING DEVICES AND ELECTRONICS
                        </h4>
                    </div>
                    <div class="col-md-6" style="margin-bottom: 30px;">
                        <h3 class="primary">
                            <i class="icon-asl size-54"></i>
                        </h3>
                        <h4 class="secondary light">
                            ONLINE AND OFFLINE GAMES
                        </h4>
                    </div>
                    <div class="col-md-12">
                        <h3 class="primary bold"> WE HAVE COVERED EVERYTHING! </h3>
                        <h4 class="secondary text-center thin">
                            Come on and join the whole community of gamers. Let's unite in the best republic, only here in Pert Republic.
                        </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-7 right-content">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="secondary light" style="margin-bottom: -10px;">
                            Registration is free and always will be.
                        </h4>
                        <h3 class="primary bold">
                            PLEASE SIGN UP
                        </h3>
                        @if (Session::has('status'))
                            <div class="alert alert-primary" style="background-color: #fff !important; color: #000 !important; margin-top: 20px; margin-bottom: -50px;">{!! Session::get('status') !!}</div>
                        @endif
                        <!-- REGISTER -->
                        <form action="{{ route('register') }}" method="POST" id="register-form">
                            {{ csrf_field() }}
                            <hr class="colorgraph" style="margin-top: 80px;">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group float-label-control">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="first_name" id="first_name" class="form-control input-lg placeholder" placeholder="First Name" tabindex="1">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group float-label-control">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" name="last_name" id="last_name" class="form-control input-lg placeholder" placeholder="Last Name" tabindex="2">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} float-label-control">
                                <label for="name">Display Name</label>
                                <input type="text" name="name" id="name" class="form-control form-name input-lg placeholder" placeholder="Display Name" value="{{ old('name') }}" tabindex="3" required="">
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} float-label-control">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control form-email input-lg placeholder" placeholder="Email Address" value="{{ old('email') }}" tabindex="4" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} float-label-control">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control form-password input-lg placeholder" placeholder="Password" tabindex="5" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="form-group float-label-control">
                                        <label for="password_confirmation">Confirm Password</label>
                                        <input type="password" name="password_confirmation" id="password_confirm" class="form-control form-confirm-password input-lg placeholder" placeholder="Confirm Password" tabindex="6" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 secondary text-justify text-last-center">
                                    By clicking <strong class="label label-default" style="background-color: #fff; color: #000;">Register</strong> , you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m" tabindex="7" style="text-decoration: none;">Terms and Conditions</a> set out by this site, including our Cookie Use.
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 secondary text-center" style="margin-top: 10px; margin-bottom: -15px;">
                                    <span class="button-checkbox">
                                        <button type="button" class="btn" data-color="primary" tabindex="8">&nbsp;I Agree</button>
                                        <input type="checkbox" class="hidden" />
                                    </span>
                                </div>
                            </div>
                            <hr class="colorgraph">
                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-lg-12">
                                    <a href="{{ route('register') }}" onclick="event.preventDefault(); document.getElementById('register-form').submit();" class="btn btn-default btn-block btn-lg" title="Register" tabindex="9">Register</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5 sign-in">
                        <h4 class="secondary light" style="margin-bottom: -10px;">
                            Already have an account?
                        </h4>
                        <h3 class="primary bold">
                            SIGN IN HERE
                        </h3>

                        <!-- LOGIN -->
                        <form action="{{ route('login') }}" method="POST" id="login-form">
                            {{ csrf_field() }}
                            <hr class="colorgraph" style="margin-top: 80px;">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} float-label-control">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control form-email input-lg placeholder" placeholder="What's your email?" value="{{ old('email') }}" tabindex="10" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} float-label-control">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" class="form-control form-password input-lg placeholder" placeholder="What's your password?" tabindex="11" required>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 secondary text-center" style="margin-top: 10px; margin-bottom: -10px;">
                                    <span class="button-checkbox">
                                        <button type="button" class="btn" data-color="primary" tabindex="12">&nbsp;Remember Me</button>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="hidden" />
                                    </span>
                                </div>
                            </div>
                            <hr class="colorgraph">
                            <div class="row">
                                <div class="col-xs-12 col-md-12 col-lg-12">
                                    <a href="{{ route('login') }}" onclick="event.preventDefault(); document.getElementById('login-form').submit();" class="btn btn-default btn-block btn-lg" title="Sign In" tabindex="13">Sign In</a>
                                </div>
                            </div>
                            <div class="row text-center">
                                <div class="col-md-12">
                                    <a href="{{ route('password.request') }}" class="btn btn-link" style="text-decoration: none;">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-12">
                                    <h5 class="secondary">
                                        Or sign in with ...
                                    </h5>
                                    <div class="col-md-6 col-lg-6 col-xs-6">
                                        <a href="/login/facebook" class="btn btn-social btn-facebook" title="Sign in using Facebook" tabindex="14" style="width: 100%">
                                            <span class="fa fa-facebook fa-lg"></span>&nbsp; Facebook
                                        </a>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xs-6">
                                        <a href="/login/google" type="button" class="btn btn-social btn-google" title="Sign in using Google" tabindex="15" style="width: 100%">
                                             <span class="fa fa-google fa-lg"></span>&nbsp; Google
                                        </a>
                                    </div>
                                </div>  
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
                    </div>
                    <div class="modal-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </div>
</body>
</html>
