<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenthicate(Request $request)
    {
        $credentials=$request->validate([
            'username'=>'required',
            'password'=>'required'
        ]);

        // dd($credentials);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();                                                   
            return redirect()->intended('/homepage');
        }                        

        return back()->with('loginError','login Failed!');
    }
}
