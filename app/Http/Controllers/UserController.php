<?php

namespace App\Http\Controllers;

use Image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
	 /*
     * Ensure the user is signed in to access this page
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function showProfile() {
    	$user = Auth::user();

    	return view ('profile-form', [
    		'user' => $user
    	]);
    }
 
    public function updatePassword(Request $request) {
        $this->validate($request, [
            'old' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);
 
        $user = User::find(Auth::id());
        $hashedPassword = $user->password;
 
        if (Hash::check($request->old, $hashedPassword)) {
            //Change the password
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();
 
            $request->session()->flash('success', 'Your password has been changed.');
            return back();
        }
 
        $request->session()->flash('failure', 'Your password has not been changed.');
        return back();
    }

    public function updateAvatar(Request $request) {
    	//Handle the User upload of avatar
        $user = Auth::user();

    	if ($request->hasFile('avatar')) {
    		$avatar = $request -> file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();

    		// Delete current image before uploading new image
            if ($user -> avatar !== 'default.jpg') {
                $file = public_path('/uploads/avatars/' . $user->avatar);

                if (File::exists($file)) {
                    unlink($file);
                }
            }
            Image::make($avatar) -> resize(300, 300) -> save( public_path('/uploads/avatars/' . $filename) );
    		$user -> avatar = $filename;
    		$user -> save();
    	}

    	return redirect ('/show-profile');
    }
}
