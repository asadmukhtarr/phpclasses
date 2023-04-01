<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // for create product
    public function create(){
        return view('admin.products.create');
    }
    // for show all products
    public function products(){
        return view('admin.products.products');
    }
}
