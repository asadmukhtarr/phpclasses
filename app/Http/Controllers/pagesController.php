<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    //
    public function index(){
        return view('welcome');
    }
    // about 
    public function about(){
        return view('about');
    }
    // products 
    public function products(){
        return view('products');
    }
    // contact
    public function contact(){
        return view('contact');
    }
    // cart 
    public function cart(){
        return view('cart');
    }
    // checkout
    public function checkout(){
        return view('checkout');
    }
    // loign
    public function login(){
        return view('login');
    }
    // dashboard ...
    public function dashboard(){
        return view('dashboard');
    }
}
