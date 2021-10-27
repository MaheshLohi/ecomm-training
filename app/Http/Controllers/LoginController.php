<?php

namespace App\Http\Controllers;

use App\Repository\loginRepo;

use Illuminate\Http\Request;

class LoginController extends Controller
{



    public $loginRepo;
    public function __construct(loginRepo $loginRepo)
    {
        $this->loginRepo = $loginRepo;
    }



    public function login(Request $request)
    {
        
        if ($request->user_type == "Consumer") {
            $response = $this->loginRepo->userLogin($request->email_id, $request->password);
            if (session('user')) {
                return redirect('/');
            } else{
                return redirect('/login')->with('alert',$response);
            }
            
        } else {
            $response=$this->loginRepo->adminLogin($request->email_id, $request->password);
            if (session('admin')) {
                return redirect('/dashboard');
            } else{
                return redirect('/login')->with('alert',$response);
            }
        }
    }
}
