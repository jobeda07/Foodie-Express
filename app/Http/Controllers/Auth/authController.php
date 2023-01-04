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

        $request->validate([
            'name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required|min:4'
        ]);

       if( 
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
       ])  )           
        {
       return back()->with('warning','Register Successfully.');
       } 
      
       return redirect()->back()->with('danger','Register Not Successfully.');
      
    }

    public function login(){
        return view('auth.loginpage');
    }
    public function login_submit(Request $request){
        $credentials=$request->except('_token');
        if(auth()->attempt($credentials)){
            return redirect()->route('dashboard')->with('message','login Successfully.');
        }
 
        return redirect()->back()->with('danger','information not correct.');
    }

     public function logout(){
        auth()->logout();
        return to_route('login')->with('message','logout Successfully.');
     }

}
