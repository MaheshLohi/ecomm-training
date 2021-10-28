<?php

namespace App\Http\Controllers;

use App\Repository\productRepo;
use Exception;
use Illuminate\Http\Request;

class productController extends Controller
{
    //
    public $productRepo;
    public function __construct(productRepo $productRepo)
    {
        $this->productRepo = $productRepo;
    }



    public function showForm()
    {
        return view('admin.add');
    }


    public function addProduct(Request $request)
    {


        $productName = $request->product_name;
        $productCategory = session('admin')->category;
        $description = $request->product_description;
        $quantity = $request->quantity;
        $price = $request->price;

        $this->validate($request, [
            'product_name' => 'required',
            'product_description' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            try {
                $image_url = $image_name;
                $this->productRepo->saveProduct($productName, $description, $productCategory, $price, $quantity, $image_url);
                $image->move($destinationPath, $image_name);
                return back()->with('success', 'product added succesffully');
            } catch (Exception $e) {
                return back()->with('alert', 'Upload error');
            }
        }
    }


    public function fetchProduct($cat)
    {

        $response =   $this->productRepo->fetchProduct($cat);
        return view('itemList', ["productList" => $response]);
    }

}
