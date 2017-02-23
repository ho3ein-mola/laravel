<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\Sign;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
	public function getDashboard(){
		return view('dashboard');
	}

    public function postSignUp(Request $request){
	    $this->validate($request,[
	        'email' => 'required|email|unique:users',
            'first_name' => 'required',
            'password' => 'required | min:6'
        ]);

    	$user = new User;
    	$user->email = $request->email;
    	$user->first_name = $request->first_name;
    	$user->password = bcrypt("$request->password");
    	$user->save();

    	return redirect()->back();
    }

    public function postSignIn(Sign $request){
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password ]))
        {
            return redirect()->route('dashboard') ;
        }
        return redirect()->back() ;
    }

   
}
