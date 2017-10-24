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
    <script type="text/javascript" src="{{ asset('js/jquery-1.9.1.js') }}"></script>

    <!-- STYLES AND LINKS -->
    <link rel='stylesheet' type='text/css' href="{{ asset('fonts/elusive/elusive-webfont.css') }}" />
    <link rel='stylesheet' type='text/css' href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app-styles.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />

    <!-- FONTS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet" />

    <!-- CUSTOM CSS -->
   <style type="text/css">
        body {
            height: 1000px;
            background-color: #4e5555;
            font-family: 'Quicksand', sans-serif;
            color: #fff;
        }
    </style>

</head>
<body>
    <div class="top-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                    <a href="{{ url('/home') }}" title="" style="text-decoration: none; color: #fff;">
                        <img src="{{ asset('img/icons/ICON-PERT.png') }}" style="margin-left: 10px;" width="50px" height="50px" alt="">
                        <h3 class="primary medium logo-text">
                            Pert Republic
                        </h3>
                    </a>
                </div>
                <div class="col-md-5 search-function">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                                <i class="fa fa-search fa-lg"></i>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4 right-choice">
                    <a href="{{ url('/show') }}" onclick="event.preventDefault();
                                document.getElementById('show-cart').submit();" title="My Cart">
                        <span class="badge badge-default cart">
                            <i class="icon-shopping-cart"></i>
                        </span>
                    </a>
                    <form id="show-cart" action="{{ url('/show') }}" method="GET" style="display: none;">
                        {{ csrf_field() }}
                        <input type="hidden" name="customer_id" value="{{ Auth::user()->id }}">
                    </form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Logout">
                        @if (Auth::user() -> is_social_connected_only == 1)
                        <img src="{{ Auth::user() -> avatar }}" class="img-navbar" alt="{{ Auth::user() -> name }}">
                        @else
                        <img src="/uploads/avatars/{{ Auth::user() -> avatar }}" class="img-navbar" alt="{{ Auth::user() -> name }}">
                        @endif
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="customized-container">
        <div id="getFixed">
            <div class="main-nav">
                <nav class="navigation">
                    <a href="{{ url('/home') }}" class="active home">
                        <span class="icon"><i class="icon-home"></i></span> <span class="content thin">Home</span>
                    </a>
                    <a href="#app_nav" class="green">
                        <span class="icon"><i class="icon-website"></i></span> <span class="content">Apps</span>
                    </a>
                    <div class="second_level" id="app_nav">
                        <a href="#" class="back">
                            <i class="icon-chevron-left"></i>
                        </a>
                        <div class="content">
                            <a href="http://www.google.com">
                                <span class="content" style="margin-top: 100px !important;">Popular Apps</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Most Viewed Apps</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Most Commented Apps</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Recent Apps</span>
                            </a>
                        </div>
                    </div>
                    {{-- <a href="#movies_nav" class="red">
                        <span class="icon">
                            <i class="icon-youtube"></i>
                        </span>
                        <span class="content">Movies &amp; TV</span>
                    </a>
                    <div class="second_level" id="movies_nav">
                        <a href="#" class="back">
                            <i class="icon-chevron-left"></i>
                        </a>
                        <div class="content">
                            <a href="http://www.google.com">
                                <span class="content">Popular Movies</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Most Viewed Movies</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Most Commented Movies</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Recent Movies</span>
                            </a>
                        </div>
                    </div> --}}
                    {{-- <a href="#music_nav" class="orange">
                        <span class="icon">
                            <i class="icon-headphones"></i>
                        </span>
                        <span class="content">Music</span>
                    </a>
                    <div class="second_level" id="music_nav">
                        <a href="#" class="back">
                            <i class="icon-chevron-left"></i>
                        </a>
                        <div class="content">
                            <a href="http://www.google.com">
                                <span class="content">Popular Music</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Most Viewed Music</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Most Commented Music</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Recent Music</span>
                            </a>
                        </div>
                    </div>
                    <a href="#books_nav" class="blue">
                        <span class="icon">
                            <i class="icon-book"></i>
                        </span>
                        <span class="content">Books</span>
                    </a>
                    <div class="second_level" id="books_nav">
                        <a href="#" class="back">
                            <i class="icon-chevron-left"></i>
                        </a>
                        <div class="content">
                            <a href="http://www.google.com">
                                <span class="content">Popular Books</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Most Viewed Books</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Most Commented Books</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Recent Books</span>
                            </a>
                        </div>
                    </div> --}}
                    <a href="#magazines_nav" class="purple">
                        <span class="icon">
                            <i class="icon-picture"></i>
                        </span>
                        <span class="content">Magazines</span>
                    </a>
                    <div class="second_level" id="magazines_nav">
                        <a href="#" class="back">
                            <i class="icon-chevron-left"></i>
                        </a>
                        <div class="content">
                            <a href="http://www.google.com">
                                <span class="content">Popular Magazines</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Most Viewed Magazines</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Most Commented Magazines</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Recent Magazines</span>
                            </a>
                        </div>
                    </div>
                    <a href="#devices_nav" class="grey">
                        <span class="icon">
                            <i class="icon-screen"></i>
                        </span>
                        <span class="content">Devices</span>
                    </a>
                    <div class="second_level" id="devices_nav">
                        <a href="#" class="back">
                            <i class="icon-chevron-left"></i>
                        </a>
                        <div class="content">
                            <a href="http://www.google.com">
                                <span class="content">Popular Devices</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Most Viewed Devices</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Most Commented Devices</span>
                            </a>
                            <a href="http://www.google.com">
                                <span class="content">Recent Devices</span>
                            </a>
                        </div>
                    </div>
                    <hr class="colorgraph">
                    <div class="list-group" style="margin-top: -10px; margin-bottom: 10px;">
                        <a href="#" onclick="event.preventDefault(); document.getElementById('account-form').submit();" title="Account" class="list-group-item light">Account</a>
                        <a href="#" class="list-group-item light">Redeem</a>
                        <a href="#" class="list-group-item light">My Wishlist</a>
                        <a href="#" class="list-group-item light">My Order History</a>
                        <a href="#" class="list-group-item light">Parent Guide</a>
                    </div>
                    <form id="account-form" action="{{ url('/show-profile') }}" method="GET" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </nav>
            </div>
        </div>
        <div id="getFixedRight">
            <div class="secondary-nav">
                <div class="horizontal-nav"></div>
            </div>
        </div>
    </div>

    @yield('content')

    <script type="text/javascript" src="{{ asset('js/app-nav.js') }}"></script>
    <script type="text/javascript">
        jQuery(function($) {
            function fixDiv() {
                var $cache = $('#getFixed');
                var $right = $('#getFixedRight');
                if ($(window).scrollTop() > 60)
                    $cache.css({
                        'position': 'fixed',
                        'top': '0px',
                        'z-index': '3'
                    });
                else
                    $cache.css({
                        'position': 'relative',
                        'top': 'auto',
                        'z-index': '3'
                    });

                if ($(window).scrollTop() > 60)
                    $right.css({
                        'position': 'fixed',
                        'top': '0px',
                        'width': '100%',
                        'z-index': '2',
                    });
                else
                    $right.css({
                        'position': 'relative',
                        'top': 'auto',
                        'z-index': '2',
                        'margin-bottom': '-50px'
                    });
            }
            $(window).scroll(fixDiv);
            fixDiv();
        });
    </script> 
</body>
</html>
