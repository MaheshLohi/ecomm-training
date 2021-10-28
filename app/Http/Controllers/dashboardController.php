<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\productRepo;

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
 
}
