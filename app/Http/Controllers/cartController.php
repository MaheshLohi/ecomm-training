<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;

class cartController extends Controller
{
    //

    public function addProduct()
    {
      //  Redis::set('name', 'Taylor');
        $name=Redis::del('nam');
        print_r($name);

    
    }

}
