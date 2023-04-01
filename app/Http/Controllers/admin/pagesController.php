<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
class pagesController extends Controller
{
    //
    public function index(){
        return view('admin.dashboard');
    }
    // customers
    public function customers(){
        return view('admin.customers');
    }
    // categories
    public function categories(){
        return view('admin.categories');
    } 
    // for save category
    public function save_categories(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
        ]);
        $categpry = new category;
        $category->title = $request->title;
        $category->save();
        return redirect()->back()->with('message','Category Added Succesfully');
    }

    // settings
    public function settings(){
        return view('admin.settings');
    }
}
