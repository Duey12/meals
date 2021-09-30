<?php

namespace App\Http\Controllers;
use App\Models\category;

use Illuminate\Http\Request;

class cat_controller extends Controller
{
  function view_cat(){
    $category=category::all();
    return view('view_cat',['category'=>$category]);
  }
  function add_cat(){
    return view('add_cat');
  }
  function store_cat(Request $request){
    $add_cat=category::Insert(['cat_name'=>$request->cat,'desc'=>$request->desc]);
    return redirect()->route('view_cat');
  }
}
