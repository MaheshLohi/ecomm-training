<?php

namespace App\Http\Controllers;

use App\Repository\productRepo;
use Exception;
use Illuminate\Http\Request;

class itemdetailsController extends Controller
{
    public $productRepo;
    public function __construct(productRepo $productRepo)
    {
        $this->productRepo = $productRepo;
    }

    public function details(Request $req)
    {
        try {
            $id = $req->get('id');

            $response = $this->productRepo->getProductById($id);
            $data = json_decode($response[0]);
            return view('details', ["productData" => $data]);
        } catch (Exception $e) {
            return redirect()->back();
        }
    }
}
