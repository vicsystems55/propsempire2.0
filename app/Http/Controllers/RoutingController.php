<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class RoutingController extends Controller
{
    //
    public function logout()
    {
        
        Auth::logout();
        return redirect('/login');
    }
}
