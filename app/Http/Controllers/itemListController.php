<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itemListController extends Controller
{
    public function itemListView(){
        return view('admin.itemList');
    }
}
