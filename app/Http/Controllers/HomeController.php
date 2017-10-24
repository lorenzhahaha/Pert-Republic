<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $customer_id = Auth::user()->customer_id;

        $cart_items = DB::table('cart_items')
        -> join('carts', 'carts.cart_id', '=', 'cart_items.cart_id')
        -> where([
            ['carts.customer_id', '=', $customer_id],
            ['cart_items.in_cart', '=', 1]
        ])
        -> pluck('cart_items.serial_code')
        -> all();

        $products = DB::table('products')
        -> whereNotIn('serial_code', $cart_items)
        -> get();

        $products_in_cart = DB::table('products')
        -> whereIn('serial_code', $cart_items)
        -> get();

        $cart_count = DB::table('cart_items') 
        -> join('carts', 'carts.cart_id', '=', 'cart_items.cart_id')
        -> join('users', 'users.customer_id', 'carts.customer_id')
        -> where([
            ['carts.customer_id', '=', $customer_id],
            ['cart_items.in_cart', '=', 1]
        ]) -> count();

        $carts = DB::table('cart_items') 
        -> join('carts', 'carts.cart_id', '=', 'cart_items.cart_id')
        -> join('users', 'users.customer_id', 'carts.customer_id')
        -> where([
            ['carts.customer_id', '=', $customer_id],
            ['cart_items.in_cart', '=', 1]
        ]) -> get();

        Session::flash('in_cart', 'Product added to cart.');

        return view('home', [
            'products' => $products,
            'products_in_cart' => $products_in_cart,
            'cart_count' => $cart_count,
            'carts' => $carts,
        ]);
    }
}
