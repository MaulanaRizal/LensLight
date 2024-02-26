<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        $user = Auth::user();

        if($user){
            return redirect()->route('dashboard');
        }
        
        return view('auth.login');
    }

    public function authenticate(Request $request){
        $credential = $request->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            
            
            return redirect()->route('dashboard');
        }
        
        return back()->withErrors([
            'email'=>'The email provided not match with our record.',
            'password' => "Password provided is incorrect"
        ]);
    }

    public function invalidate(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect()->route('login');
    }
}
