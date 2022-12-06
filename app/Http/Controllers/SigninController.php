<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class SigninController extends Controller
{
    public function index(){
        return view('signin');
    }

    public function store(Request $request){
        $validatedData=$request->validate([
            'username'=>'required',
            'email' => 'email:rfc,dns',
            'password' => 'min:6|required_with:confirm-password|same:confirm-password',
            'confirm-password' => 'min:6'
        ]);
        // dd($validatedData);
        User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        $request->session()->flash('success','Registrasi berhasil! Silahkan Login');
        
        return redirect('/login');
    }
}
