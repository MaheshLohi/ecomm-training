<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\productRepo;
use App\Repository\orderRepo;

class dashboardController extends Controller
{
    public $productRepo;
    public function __construct(productRepo $productRepo,orderRepo $orderRepo)
    {
        $this->productRepo = $productRepo;
        $this->orderRepo=$orderRepo;
    }

    

    public function providerView()
    {
        $admin_cat = session('admin')->category;
        $response = $this->productRepo->fetchProduct($admin_cat);
        
        $users = $this->orderRepo->fetchOrder($admin_cat);
        
       return view('admin.dashboard',['datas'=>$response,'users'=>$users]);

    }


    


}
