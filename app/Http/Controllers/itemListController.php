<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itemListController extends Controller
{
    public $itemObj;
    public function __construct( itemListView $itemClass)
    {
        $this->itemObj = $itemClass;
    }

    public function itemListView(){
        return view('admin.itemList');
    }
}
