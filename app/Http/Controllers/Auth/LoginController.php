<?php

namespace App\Http\Controllers\Auth;

use App\Cart;
use App\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


/** ------------------- FACEBOOK ---------------------*/

    /**
     * Redirect the user to the Facebook authentication page.
     *
     * @return Response
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from Facebook.
     *
     * @return Response
     */
    public function handleFacebookCallback()
    {
        $userSocial = Socialite::driver('facebook')->user();

        $findUser = User::where('email', '=', $userSocial -> email) -> first();

        if ($findUser) {
            Auth::login($findUser);
            Session::flash('status', 'Logged in using your Facebook account.');

            return redirect('/home');
        } else {
            $customer_id = Str::random(15);

            $user = new User;
            $user -> customer_id = $customer_id;
            $user -> name = $userSocial -> name;
            $user -> email = $userSocial -> email;
            $user -> password = bcrypt($customer_id);
            $user -> avatar = $userSocial -> avatar;
            $user -> status = '1';
            $user -> is_social_connected_only = '1';
            $user -> social_id = $userSocial -> id;
            $user -> save();

            $cart = new Cart;
            $cart -> customer_id = $customer_id;
            $cart -> cart_id = Str::random(10);
            $cart -> save();

            Auth::login($user);
            Session::flash('status', 'Logged in! Connected to your Facebook account.');

            return redirect('/home');
        }
    }


/** ------------------- GOOGLE ---------------------*/

    /**
     * Redirect the user to the Google authentication page.
     *
     * @return Response
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Obtain the user information from Google.
     *
     * @return Response
     */
    public function handleGoogleCallback()
    {
        $userSocial = Socialite::driver('google')->stateless()->user();

        $findUser = User::where('email', '=', $userSocial -> email) -> first();

        if ($findUser) {
            Auth::login($findUser);
            Session::flash('status', 'Logged in using your Google+ account.');

            return redirect('/home');
        } else {
            $customer_id = Str::random(15);

            $user = new User;
            $user -> customer_id = $customer_id;
            $user -> name = $userSocial -> name;
            $user -> email = $userSocial -> email;
            $user -> password = bcrypt($customer_id);
            $user -> avatar = $userSocial -> avatar;
            $user -> status = '1';
            $user -> is_social_connected_only = '1';
            $user -> social_id = $userSocial -> id;
            $user -> save();

            $cart = new Cart;
            $cart -> customer_id = $customer_id;
            $cart -> cart_id = Str::random(10);
            $cart -> save();

            Auth::login($user);
            Session::flash('status', 'Logged in! Connected to your Google+ account.');

            return redirect('/home');
        }
    }
}
