<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use App\Models\User;
use App\Models\HaloModel;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Http\Middleware;




class LogController extends Controller

{


  
    // public function authenticate(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);
 
    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
 
    //         return redirect()->intended('/dash');
    //     }
 
    //     return back()->with('loginError', 'Yahh Login kamu gagal!');
    // }

    // public function logout(Request $request){
    //     Auth::logout();
     
    //     $request->session()->invalidate();
     
    //     $request->session()->regenerateToken();
     
    //     return redirect('/login');
    // }

    public function Login(Request $request){
        $credentials=$request->only(['email','password','name']);
        if(Auth::attempt($credentials)){
            return redirect('/regAll');
        }
        return redirect('/')->with('message', 'Login gagal! Data tidak sesuai!');
    }

    public function logout(Request $request)
{
    Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
}

public function loginn(){
 
    return view('pages.login.loginPage');
}


    
    // ini fungsi buat return ke table aja

    // ini method untuk login
   

    // public function authenticate(Request $request){
   
    //     if (Auth::attempt([
    //         'email' => $request->email,
    //         'password' => $request->password])){
    //         return redirect('/dashboard');
    //     }
    //     return redirect('/')->with('loginError', 'login gagal!');
        
    // }
   
    

}