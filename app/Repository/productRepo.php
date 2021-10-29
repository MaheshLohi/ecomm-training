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

        $this->productModel->product_name = $prod_name;
        $this->productModel->product_category = $prod_cat;
        $this->productModel->description = $prod_desc;
        $this->productModel->quantity = $quantity;
        $this->productModel->price = $prod_price;
        $this->productModel->image_url = $img_url;


        $this->productModel->save();
    }


    public function fetchProduct($prodCat)
    {
        $data = $this->productModel->where('product_category', $prodCat)->get();
        return json_decode($data);
    }

    public function getProductById($id)
    {
        $data = $this->productModel->where('id', $id)->get();
        return $data;
    }


    public function deleteProduct($id)
    {
        $data = Product::findOrFail($id);
        $data->delete();

        return $data;
    }
}
