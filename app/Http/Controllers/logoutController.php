<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class logoutController extends Controller
{
    //

    public function adminLogout()
    {

        session()->forget('admin');
        return redirect('/');
    }

    public function userLogout()
    {
        session()->forget('user');
        return redirect('/');
    }
}
