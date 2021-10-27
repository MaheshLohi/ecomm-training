<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //



    public function providerView()
    {

        // session()->forget('user');
        //print_r(session('admin'));
       return view('admin.dashboard');
    }
}
