<?php

namespace App\Repository;

use App\Models\Product;

class productRepo
{


    public $productModel;
    public function __construct(Product $productModel)
    {
        $this->productModel = $productModel;
    }
    public function saveProduct($prod_name, $prod_desc, $prod_cat, $prod_price, $quantity, $img_url)
    {

        $this->productModel->product_name=$prod_name;
        $this->productModel->product_category=$prod_cat;
        $this->productModel->description=$prod_desc;
        $this->productModel->quantity=$quantity;
        $this->productModel->price=$prod_price;
        $this->productModel->image_url=$img_url;


        $this->productModel->save();
    }

    public function fetchProduct($prod_cat) {
        $data = $this->productModel->where('product_category',$prod_cat)->get();
        return json_decode($data);
 
    } 
}
