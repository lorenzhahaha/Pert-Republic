@extends('layouts.app')

<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-4.0.0/dist/css/bootstrap.css') }}">
<style type="text/css">
    input[type=number]::-webkit-inner-spin-button {
        opacity: 1;
    }
    .container {
        margin: 100px 0px 100px 250px !important;
    }
</style>

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"> CART ITEM 
                    <span class="badge badge-warning"> {{ $cart_count }} </span>
                        <?php $total_amount = 0; ?>
                        @foreach ($carts as $cart)
                            <?php 
                                $each_price = $cart -> product_price * $cart -> product_quantity;
                                $total_amount += $each_price;
                            ?>
                        @endforeach
                    <span class="badge"> {{ $total_amount }} </span>
                </div>

                <!-- PAYPAL PAYMENT -->
                <?php  $cart_products_number = 0; ?>
                <form>
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="upload" value="1">
                    <!-- The value property holds the business email -->
                    <input type="hidden" name="business" value="lorenzflorentino18-seller@gmail.com">
                    
                    <!-- PRODUCT INFO -->
                    @foreach ($carts as $cart)
                        <?php $cart_products_number ++; ?>
                        <input type="hidden" name="item_name_{{ $cart_products_number }}" value="{{ $cart -> product_name }}">
                        <input type="hidden" name="item_number_{{ $cart_products_number }}" value="{{ $cart -> serial_code }}">
                        <input type="hidden" name="amount_{{ $cart_products_number }}" value="{{ $cart -> product_price }}">
                        <input type="hidden" name="quantity_{{ $cart_products_number }}" value="{{ $cart -> product_quantity }}">

                        <!-- SURCHARGES -->
                        <input type="hidden" name="shipping_{{ $cart_products_number }}" value="1.75">
                        <input type="hidden" name="tax_{{ $cart_products_number }}" value="0.12">

                        <input type="hidden" name="return" id="cancel_return" value="http://localhost:8000">
                        <input type="hidden" name="cancel_return" id="cancel_return" value="http://localhost:8000/show">
                    @endforeach
                    <br>

                    <!-- To implement in live, remove 'sandbox'. -->
                    <input name="submit" formaction="https://www.sandbox.paypal.com/cgi-bin/webscr" type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/gold-pill-paypalcheckout-34px.png">
                </form>

                <div class="panel-body">
                    <table class="table table-inverse table-bordered">
                        <thead>
                            <tr>
                                <th> Cart ID </th>
                                <th> Serial Code </th>
                                <th> Name </th>
                                <th> Price </th>
                                <th> Quantity </th>
                                <th> &nbsp; </th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($carts->reverse() as $cart)
                            <tr style="color: #000;">
                                <td> {{ $cart -> cart_id }} </td>
                                <td> {{ $cart -> serial_code }} </td>
                                <td> {{ $cart -> product_name }} </td>
                                <td> {{ $cart -> product_price }} </td>
                                <td> 
                                    <form action="/update" method="POST" accept-charset="utf-8">
                                    {{ csrf_field() }}
                                    <div class="input-group" style="z-index: 1 !important;">
                                        <input type="number" min="1" max="10" class="form-control" name="product_quantity" value="{{ $cart -> product_quantity }}">
                                        <input type="hidden" name="customer_id" value="{{ Auth::user()->id  }}">
                                        <input type="hidden" name="serial_code" value="{{ $cart -> serial_code }}">
                                        
                                            <span class="input-group-btn">
                                                <button class="btn btn-warning" type="submit">
                                                    <i class="fa fa-refresh"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </form>
                                </td>
                                <td>
                                    <form action="/remove" method="POST" accept-charset="utf-8">
                                    {{ csrf_field() }}
                                        <input type="hidden" name="customer_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="serial_code" value="{{ $cart -> serial_code }}">
                                        <button class="btn btn-success" type="submit">
                                            <i class="fa fa-trash"></i>
                                        </button> 
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
