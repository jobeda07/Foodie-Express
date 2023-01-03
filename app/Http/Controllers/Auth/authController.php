<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class authController extends Controller
{
    
    public function register(){
        return view('auth.registerpage');
    }
    public function register_submit(Request $request){
        //dd($request);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
       ]);
       return back();
    }
    
    public function login(){
        return view('auth.loginpage');
    }
    public function login_submit(Request $request){
        $credentials=$request->except('_token');
        if(auth()->attempt($credentials)){
            return redirect()->route('dashboard');
        }
 
        return redirect()->back();
    }


}
