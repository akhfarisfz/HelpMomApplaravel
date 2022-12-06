<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
