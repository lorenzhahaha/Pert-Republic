@extends('layouts.app')
    
<!-- ICON -->
<link rel="shortcut icon" href="{{ asset('img/icons/ICON-PERT.png') }}" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="{{ asset('css/home-styles.css') }}" />
<style type="text/css">
    .container {
        margin: 85px 0px 25px 250px !important;
    }
</style>

@section('content')
    <section class="featured-part">
        <div class="container">
            {{-- NEW AND UPDATED --}}
            <div class="row" style="margin-bottom: 5px;">
                @if (Session::has('status'))
                    <div class="alert alert-primary" style="background-color: #fff !important; color: #000 !important; margin: 20px 0px;">{!! Session::get('status') !!}</div>
                @endif
                <div class="col-md-10">
                    <a href="" class="no-text-decoration main-list-title" style="text-decoration: none;">
                        <h2 style="font-weight: 400;"> New &amp; Updated Games </h2>
                        <h4 style="font-weight: 300; line-height: 40%;"> From your imagination, to reality right at your screen </h4>
                    </a>
                </div>
                <div class="col-md-2">
                    <button type="button" title="See More" class="btn btn-danger btn-no-border btn-more"> See More </button>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                @foreach ($products->slice(0, 6) as $product)
                <div class="col-md-2 products">
                    <div class="whole-card">
                        <div data-content="BUY NOW" class="product-image">
                            <img src="{{ $product -> product_picture }}" class="top-content-img" alt="{{ $product -> product_picture }}">
                            <form id="add-to-cart" action="{{ url('/add') }}" method="POST" >
                                {{ csrf_field() }}
                                <input type="hidden" name="serial_code" value="{{ $product -> serial_code }}">
                                <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                <input type="hidden" name="product_price" value="{{ $product -> product_price }}">
                                <input type="hidden" name="product_picture" value="{{ $product -> product_picture }}">
                                <button class="play-button" type="submit">
                                    <i class="fa fa-cart-plus fa-3x" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                        <div class="middle-content">
                            <div class="product-title">                                
                                <a href="" title="{{ $product -> product_name }}" class="no-text-decoration product-name"> {{ $product -> product_name }}
                                    <span class="paragraph-end"></span>
                                </a>
                            </div>
                            <div class="category-title">
                                <a href="" title="Action" class="no-text-decoration category-name"> Action </a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star-empty stars"></span>
                            <a href="" class="pricing"> &#8369;{{ $product -> product_price }}.00 </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- MOST POPULAR FREE --}}
            <div class="row">
                <div class="col-md-10">
                    <a href="" class="no-text-decoration main-list-title" style="text-decoration: none;">
                        <h2 style="font-weight: 400;"> Most Popular Games </h2>
                        <h4 style="font-weight: 300; line-height: 40%;"> Most played around the globe </h4>
                    </a>
                </div>
                <div class="col-md-2">
                    <button type="button" title="See More" class="btn btn-danger btn-no-border btn-more"> See More </button>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                @foreach ($products->slice(6, 6) as $product)
                <div class="col-md-2 products">
                    <div class="whole-card">
                        <div data-content="BUY NOW" class="product-image">
                            <img src="{{ $product -> product_picture }}" class="top-content-img" alt="{{ $product -> product_picture }}">
                            <form id="add-to-cart" action="{{ url('/add') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="serial_code" value="{{ $product -> serial_code }}">
                                <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                <input type="hidden" name="product_price" value="{{ $product -> product_price }}">
                                <input type="hidden" name="product_picture" value="{{ $product -> product_picture }}">
                                <button class="play-button" type="submit">
                                    <i class="fa fa-cart-plus fa-3x" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                        <div class="middle-content">
                            <div class="product-title">                                
                                <a href="" title="{{ $product -> product_name }}" class="no-text-decoration product-name"> {{ $product -> product_name }}
                                    <span class="paragraph-end"></span>
                                </a>
                            </div>
                            <div class="category-title">
                                <a href="" title="Action" class="no-text-decoration category-name"> Action </a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star-empty stars"></span>
                            <a href="" class="pricing"> &#8369;{{ $product -> product_price }}.00 </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- TOP PAID GAMES --}}
            <div class="row">
                <div class="col-md-10">
                    <a href="" class="no-text-decoration main-list-title" style="text-decoration: none;">
                        <h2 style="font-weight: 400;"> Top Paid Games </h2>
                        <h4 style="font-weight: 300; line-height: 40%;"> Best value from just a little amount </h4>
                    </a>
                </div>
                <div class="col-md-2">
                    <button type="button" title="See More" class="btn btn-danger btn-no-border btn-more"> See More </button>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                @foreach ($products->slice(12, 6) as $product)
                <div class="col-md-2 products">
                    <div class="whole-card">
                        <div data-content="BUY NOW" class="product-image">
                            <img src="{{ $product -> product_picture }}" class="top-content-img" alt="{{ $product -> product_picture }}">
                            <form id="add-to-cart" action="{{ url('/add') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="serial_code" value="{{ $product -> serial_code }}">
                                <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                <input type="hidden" name="product_price" value="{{ $product -> product_price }}">
                                <input type="hidden" name="product_picture" value="{{ $product -> product_picture }}">
                                <button class="play-button" type="submit">
                                    <i class="fa fa-cart-plus fa-3x" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                        <div class="middle-content">
                            <div class="product-title">                                
                                <a href="" title="{{ $product -> product_name }}" class="no-text-decoration product-name"> {{ $product -> product_name }}
                                    <span class="paragraph-end"></span>
                                </a>
                            </div>
                            <div class="category-title">
                                <a href="" title="Action" class="no-text-decoration category-name"> Action </a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star-empty stars"></span>
                            <a href="" class="pricing"> &#8369;{{ $product -> product_price }}.00 </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- EDITOR'S CHOICE --}}
            <div class="row">
                <div class="col-md-10">
                    <a href="" class="no-text-decoration main-list-title" style="text-decoration: none;">
                        <h2 style="font-weight: 400;"> Editor's Choice </h2>
                        <h4 style="font-weight: 300; line-height: 40%;"> Played and chosen just for you </h4>
                    </a>
                </div>
                <div class="col-md-2">
                    <button type="button" title="See More" class="btn btn-danger btn-no-border btn-more"> See More </button>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                @foreach ($products->slice(18, 6) as $product)
                <div class="col-md-2 products">
                    <div class="whole-card">
                        <div data-content="BUY NOW" class="product-image">
                            <img src="{{ $product -> product_picture }}" class="top-content-img" alt="{{ $product -> product_picture }}">
                            <form id="add-to-cart" action="{{ url('/add') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="serial_code" value="{{ $product -> serial_code }}">
                                <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                <input type="hidden" name="product_price" value="{{ $product -> product_price }}">
                                <input type="hidden" name="product_picture" value="{{ $product -> product_picture }}">
                                <button class="play-button" type="submit">
                                    <i class="fa fa-cart-plus fa-3x" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                        <div class="middle-content">
                            <div class="product-title">                                
                                <a href="" title="{{ $product -> product_name }}" class="no-text-decoration product-name"> {{ $product -> product_name }}
                                    <span class="paragraph-end"></span>
                                </a>
                            </div>
                            <div class="category-title">
                                <a href="" title="Action" class="no-text-decoration category-name"> Action </a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star-empty stars"></span>
                            <a href="" class="pricing"> &#8369;{{ $product -> product_price }}.00 </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- OFFLINE GAMES --}}
            <div class="row">
                <div class="col-md-10">
                    <a href="" class="no-text-decoration main-list-title" style="text-decoration: none;">
                        <h2 style="font-weight: 400;"> Offline Games </h2>
                        <h4 style="font-weight: 300; line-height: 40%;"> No WiFi? Just keep playing </h4>
                    </a>
                </div>
                <div class="col-md-2">
                    <button type="button" title="See More" class="btn btn-danger btn-no-border btn-more"> See More </button>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                @foreach ($products->slice(24, 6) as $product)
                <div class="col-md-2 products">
                    <div class="whole-card">
                       <div data-content="BUY NOW" class="product-image">
                            <span class="fa fa-gamepad fa-3x no-text-decoration" style="text-decoration: none;"></span>
                            <img src="{{ $product -> product_picture }}" class="top-content-img" alt="{{ $product -> product_picture }}">
                            <form id="add-to-cart" action="{{ url('/add') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="serial_code" value="{{ $product -> serial_code }}">
                                <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                <input type="hidden" name="product_price" value="{{ $product-> product_price }}">
                                <input type="hidden" name="product_picture" value="{{ $product -> product_picture }}">
                                <button class="play-button" type="submit">
                                    <i class="fa fa-cart-plus fa-3x" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                        <div class="middle-content">
                            <div class="product-title">                                
                                <a href="" title="{{ $product -> product_name }}" class="no-text-decoration product-name"> {{ $product -> product_name }}
                                    <span class="paragraph-end"></span>
                                </a>
                            </div>
                            <div class="category-title">
                                <a href="" title="Action" class="no-text-decoration category-name"> Action </a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star-empty stars"></span>
                            <a href="" class="pricing"> &#8369;{{ $product -> product_price }}.00 </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- BY COMPANY --}}
            <div class="row">
                <div class="col-md-10">
                    <a href="" class="no-text-decoration main-list-title" style="text-decoration: none;">
                        <h2 style="font-weight: 400;"> Games You Might Like </h2>
                        <h4 style="font-weight: 300; line-height: 40%;"> Pressured by the excitement? Try to choose here </h4>
                    </a>
                </div>
                <div class="col-md-2">
                    <button type="button" title="See More" class="btn btn-danger btn-no-border btn-more"> See More </button>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                @foreach ($products->slice(30, 6) as $product)
                <div class="col-md-2 products">
                    <div class="whole-card">
                        <div data-content="BUY NOW" class="product-image">
                            <span class="fa fa-gamepad fa-3x no-text-decoration" style="text-decoration: none;"></span>
                            <img src="{{ $product -> product_picture }}" class="top-content-img" alt="{{ $product -> product_picture }}">
                            <form id="add-to-cart" action="{{ url('/add') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="serial_code" value="{{ $product -> serial_code }}">
                                <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                <input type="hidden" name="product_price" value="{{ $product -> product_price }}">
                                <input type="hidden" name="product_picture" value="{{ $product -> product_picture }}">
                                <button class="play-button" type="submit">
                                    <i class="fa fa-cart-plus fa-3x" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                        <div class="middle-content">
                            <div class="product-title">                                
                                <a href="" title="{{ $product -> product_name }}" class="no-text-decoration product-name"> {{ $product -> product_name }}
                                    <span class="paragraph-end"></span>
                                </a>
                            </div>
                            <div class="category-title">
                                <a href="" title="Action" class="no-text-decoration category-name"> Action </a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star-empty stars"></span>
                            <a href="" class="pricing"> &#8369;{{ $product -> product_price }}.00 </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- BY CATEGORIES --}}
            <div class="row">
                <div class="col-md-10">
                    <a href="" class="no-text-decoration main-list-title" style="text-decoration: none;">
                        <h2 style="font-weight: 400;"> By Categories </h2>
                        <h4 style="font-weight: 300; line-height: 40%;"> Grouped together for your satisfaction </h4>
                    </a>
                </div>
                <div class="col-md-2">
                    <button type="button" title="See More" class="btn btn-danger btn-no-border btn-more"> See More </button>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                @foreach ($products->slice(25, 6) as $product)
                <div class="col-md-2 products">
                    <div class="whole-card">
                        <div data-content="BUY NOW" class="product-image">
                            <span class="fa fa-gamepad fa-3x no-text-decoration" style="text-decoration: none;"></span>
                            <img src="{{ $product -> product_picture }}" class="top-content-img" alt="{{ $product -> product_picture }}">
                            <form id="add-to-cart" action="{{ url('/add') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="serial_code" value="{{ $product -> serial_code }}">
                                <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                <input type="hidden" name="product_price" value="{{ $product -> product_price }}">
                                <input type="hidden" name="product_picture" value="{{ $product -> product_picture }}">
                                <button class="play-button" type="submit">
                                    <i class="fa fa-cart-plus fa-3x" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                        <div class="middle-content">
                            <div class="product-title">                                
                                <a href="" title="{{ $product -> product_name }}" class="no-text-decoration product-name"> {{ $product -> product_name }}
                                    <span class="paragraph-end"></span>
                                </a>
                            </div>
                            <div class="category-title">
                                <a href="" title="Action" class="no-text-decoration category-name"> Action </a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star-empty stars"></span>
                            <a href="" class="pricing"> &#8369;{{ $product -> product_price }}.00 </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- BY CREATOR --}}
            <div class="row">
                <div class="col-md-10">
                    <a href="" class="no-text-decoration main-list-title" style="text-decoration: none;">
                        <h2 style="font-weight: 400;"> By Creators and Developers </h2>
                        <h4 style="font-weight: 300; line-height: 40%;"> Grouped based on creator of the games </h4>
                    </a>
                </div>
                <div class="col-md-2">
                    <button type="button" title="See More" class="btn btn-danger btn-no-border btn-more"> See More </button>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                @foreach ($products->slice(0, 6) as $product)
                <div class="col-md-2 products">
                    <div class="whole-card">
                        <div data-content="BUY NOW" class="product-image">
                            <span class="fa fa-gamepad fa-3x no-text-decoration" style="text-decoration: none;"></span>
                            <img src="{{ $product -> product_picture }}" class="top-content-img" alt="{{ $product -> product_picture }}">
                            <form id="add-to-cart" action="{{ url('/add') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="serial_code" value="{{ $product -> serial_code }}">
                                <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                <input type="hidden" name="product_price" value="{{ $product -> product_price }}">
                                <input type="hidden" name="product_picture" value="{{ $product -> product_picture }}">
                                <button class="play-button" type="submit">
                                    <i class="fa fa-cart-plus fa-3x" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                        <div class="middle-content">
                            <div class="product-title">                                
                                <a href="" title="{{ $product -> product_name }}" class="no-text-decoration product-name"> {{ $product -> product_name }}
                                    <span class="paragraph-end"></span>
                                </a>
                            </div>
                            <div class="category-title">
                                <a href="" title="Action" class="no-text-decoration category-name"> Action </a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star-empty stars"></span>
                            <a href="" class="pricing"> &#8369;{{ $product -> product_price }}.00 </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- GUIDES AND MANUALS --}}
            <div class="row">
                <div class="col-md-10">
                    <a href="" class="no-text-decoration main-list-title" style="text-decoration: none;">
                        <h2 style="font-weight: 400;"> Guides and Manuals </h2>
                        <h4 style="font-weight: 300; line-height: 40%;"> Need help? Find answers here </h4>
                    </a>
                </div>
                <div class="col-md-2">
                    <button type="button" title="See More" class="btn btn-danger btn-no-border btn-more"> See More </button>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                @foreach ($products->slice(0, 6) as $product)
                <div class="col-md-2 products">
                    <div class="whole-card">
                        <div data-content="BUY NOW" class="product-image">
                            <span class="fa fa-gamepad fa-3x no-text-decoration" style="text-decoration: none;"></span>
                            <img src="{{ $product -> product_picture }}" class="top-content-img" alt="{{ $product -> product_picture }}">
                            <form id="add-to-cart" action="{{ url('/add') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="serial_code" value="{{ $product -> serial_code }}">
                                <input type="hidden" name="product_name" value="{{ $product -> product_name }}">
                                <input type="hidden" name="product_price" value="{{ $product -> product_price }}">
                                <input type="hidden" name="product_picture" value="{{ $product -> product_picture }}">
                                <button class="play-button" type="submit">
                                    <i class="fa fa-cart-plus fa-3x" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                        <div class="middle-content">
                            <div class="product-title">                                
                                <a href="" title="{{ $product -> product_name }}" class="no-text-decoration product-name"> {{ $product -> product_name }}
                                    <span class="paragraph-end"></span>
                                </a>
                            </div>
                            <div class="category-title">
                                <a href="" title="Action" class="no-text-decoration category-name"> Action </a>
                            </div>
                        </div>
                        <div class="lower-content">
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star stars"></span>
                            <span class="glyphicon glyphicon-star-empty stars"></span>
                            <a href="" class="pricing"> &#8369;{{ $product -> product_price }}.00 </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- FOOTER --}}
            <div class="row footer" style="margin-top: 20px;">
                <div class="col-md-10" style="font-size: 12px; font-weight: 300;">
                    <p>
                        <strong>&#169; 2017 Pert Republic</strong>
                        <a href="" title="Terms and Condition" class="no-text-decoration" style="margin-left: 20px;"> Terms and Condition </a>
                        <a href="" title="Privacy Policy" class="no-text-decoration"> Privacy Policy </a>
                        <a href="" title="About Pert Republic" class="no-text-decoration"> About Pert Republic</a>
                    </p>
                    <p style="line-height: 20%;">
                        By purchasing and downloading a game, you are transacting with Pert Republic Payments and agreeing to the company payments methods and terms.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
