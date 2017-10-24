<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart(Request $request){
		$customer_id = Auth::user()->customer_id;

        $carts = DB::table('cart_items') 
        -> join('carts', 'carts.cart_id', '=', 'cart_items.cart_id')
        -> join('users', 'users.customer_id', 'carts.customer_id')
        -> where([
            ['carts.customer_id', '=', $customer_id],
            ['cart_items.in_cart', '=', 1]
        ]) -> get();
        $cart_count = DB::table('cart_items') 
        -> join('carts', 'carts.cart_id', '=', 'cart_items.cart_id')
        -> join('users', 'users.customer_id', 'carts.customer_id')
        -> where([
            ['carts.customer_id', '=', $customer_id],
            ['cart_items.in_cart', '=', 1]
        ]) -> count();

		return view ('cart', [
            'carts' => $carts,
            'cart_count' => $cart_count,
        ]);
	}

    public function addToCart(Request $request){
    	$serial_code = $request -> serial_code;
    	$product_name = $request -> product_name;
    	$product_price = $request -> product_price;
        $product_picture = $request -> product_picture;

        $customer_id = Auth::user()->customer_id;
        $cart_id = DB::table('carts')
        -> where('customer_id', '=', $customer_id)
        -> value('cart_id');

        $cart = new CartItem;
        $cart -> cart_id = $cart_id;
        $cart -> serial_code = $serial_code;
        $cart -> product_name = $product_name;
        $cart -> product_price = $product_price;
        $cart -> product_picture = $product_picture;
        $cart -> save();

    	return redirect ('/home');
    }

    public function removeToCart(Request $request){
        $customer_id = $request -> customer_id;
        $serial_code = $request -> serial_code;

        $cart = DB::table('cart_items')
        -> join('carts', 'carts.cart_id', '=', 'cart_items.cart_id')
        -> where([
            ['carts.customer_id', '=', $customer_id],
            ['cart_items.serial_code', '=', $serial_code]
        ])
        -> update(['cart_items.in_cart' => 0]);

        return redirect ('/show'); 
    }

    public function removeToCartInHome(Request $request){
        $customer_id = $request -> customer_id;
        $serial_code = $request -> serial_code;

        $cart = DB::table('cart_items')
        -> join('carts', 'carts.cart_id', '=', 'cart_items.cart_id')
        -> where([
            ['carts.customer_id', '=', $customer_id],
            ['cart_items.serial_code', '=', $serial_code]
        ])
        -> update(['cart_items.in_cart' => 0]);

        return redirect ('/home'); 
    }

    public function updateQuantity(Request $request){
        $product_quantity = $request -> product_quantity;
        $customer_id = $request -> customer_id;
        $serial_code = $request -> serial_code;

        $cart = DB::table('cart_items')
        -> join('carts', 'carts.cart_id', '=', 'cart_items.cart_id')
        -> where([
            ['carts.customer_id', '=', $customer_id],
            ['cart_items.serial_code', '=', $serial_code]
        ])
        -> update(['cart_items.product_quantity' => $product_quantity]);

        return redirect ('/show');
    }
}
