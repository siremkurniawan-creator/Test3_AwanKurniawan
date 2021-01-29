<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
    	return view ('login');
    }

    public function postlogin(Request $request){
    	if(Auth::attempt($request->only('email','password'))){
    		return redirect('/list');
    	}
    	return redirect('/login');
    }

    public function logout(){
    	Auth::logout();
    	return redirect ('/login');
    }

    public function postregister(Request $request){
    	$this->validate($request, [
    		'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->back()->with('alert-success','Registration success !');;
    }
}
