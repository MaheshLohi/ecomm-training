<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\productRepo;
use App\Repository\orderRepo;

class dashboardController extends Controller
{
    public $productRepo;
    public function __construct(productRepo $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    

    public function providerView()
    {
        $admin_cat = session('admin')->category;
        $response = $this->productRepo->fetchProduct($admin_cat);
        // print_r($response);
       return view('admin.dashboard',['datas'=>$response]);

    }


    // public $orderRepo;
    // public function __construct(orderRepo $orderRepo)
    // {
    //     $this->orderRepo = $orderRepo;
    // }
 
    
    public function orderView()
    {
        {
            $users=\DB::table('orders')->where('name','princy')->first();
           return view('admin.dashboard',['users'=>$users]);
        }

    //     $admin_cat = session('admin')->category;
    //     $users = $this->orderRepo->fetchOrder($admin_cat);
    //    print_r($response);
    //     return view('admin.dashboard',['datas'=>$users]);

    }


}
