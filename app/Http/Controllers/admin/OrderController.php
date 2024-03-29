<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // for new orders
    public function new(){
        return view('admin.orders.new');
    }
    // for order history
    public function history(){
        return view('admin.orders.history');
    }
}
