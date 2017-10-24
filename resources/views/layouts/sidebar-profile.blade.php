
<!-- Overlay for fixed sidebar -->
<div class="sidebar-overlay"></div>
<!-- Material sidebar -->
<aside id="sidebar" class="sidebar-profile sidebar-inverse sidebar-stacked open" role="navigation">
    <!-- Sidebar header -->
    <div class="sidebar-header header-cover" style="background-image: url({{ asset('img/header-1.jpg') }});">
        <!-- Top bar -->
        <div class="top-bar"></div>
        <!-- Sidebar toggle button -->
        <button type="button" class="sidebar-toggle" onclick="document.getElementById('show-my-account').style.display='inline'; document.getElementById('hide-my-account').style.display='none';">
            <i class="fa fa-chevron-right fa-2x" style="margin-top: 5px;"></i>
        </button>
        <!-- Sidebar brand image -->
        <div class="sidebar-image">
            @if (Auth::user() -> is_social_connected_only == 1)
                <img src="{{ Auth::user()->avatar }}">
            @else
                <img src="/uploads/avatars/{{ Auth::user()->avatar }}">
            @endif
        </div>
        <!-- Sidebar brand name -->
            <a href="{{ route('logout') }}" id="setting" class="sidebar-brand" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="{{ Auth::user()->name }} - Logout">
                <strong>
                    {{ Auth::user()->name }}
                    <span class="fa fa-power-off fa-lg"></span>
                </strong>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>

    <!-- Sidebar navigation -->
    <ul class="nav sidebar-nav">
        <li>
            <a href="{{ url('/show-profile') }}" title="Edit Profile">
                <i class="sidebar-icon icon-wrench"></i>
                Edit Profile
            </a>
        </li>
        <li>
            <a href="#" title="Promo Codes">
                <i class="sidebar-icon icon-check"></i>
                Promo Codes
            </a>
        </li>
        <li>
            <a href="#" title="My Activities">
                <i class="sidebar-icon icon-note-pad"></i>
                My Activities
            </a>
        </li>
        <li>
            <a href="#" title="My Wishlists">
                <i class="sidebar-icon icon-gift"></i>
                My Wishlists
            </a>
        </li>
        <li class="divider"></li>
        <li>
            <a href="{{ url('/show') }}" title="My Shopping Cart">
                My Shopping Cart
                <span class="sidebar-badge badge-circle">{{ $cart_count }}</span>
            </a>
        </li>
        <li>
            <?php $total_amount = 0; ?>
            @foreach ($carts as $cart)
                <?php 
                    $each_price = $cart -> product_price * $cart -> product_quantity;
                    $total_amount += $each_price;
                ?>
            @endforeach
            <a href="#" title="Go to Checkout">
                Go to Checkout
                <span class="sidebar-badge" style="background: transparent; color: white;">
                    <strong><h4>$&nbsp;{{ $total_amount }}</h4></strong>
                </span>
            </a>
        </li>
    </ul>
    <!-- Sidebar divider -->
    <!-- <div class="sidebar-divider"></div> -->
    
    <!-- Sidebar text -->
    <!--  <div class="sidebar-text">Text</div> -->
</aside>
