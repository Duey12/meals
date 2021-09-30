<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\meal;
use App\Models\category;
use Illuminate\Support\Facades\DB;

class get_meals extends Controller
{
  function all_meal(){
    $meals=DB::table('categories')->join('meals','meals.category_id','=','categories.id')->get();
    $meal=json_decode(json_encode($meals),true);
    return view('dashboard',['meals'=>$meal]);
  }
  function add_meal_view(){
    $category=category::all();
    return view('addmeal',['category'=>$category]);
  }
  function add_meal(Request $request){
    $add=meal::insert(['meal_type'=>$request->meal,'category_id'=>$request->cat]);
    return redirect('dashboard');
  }
  function update_meal_view(Request $request){
    $category=category::all();
    return view('updatemeal',['meal_id'=>$request->meal,'category'=>$category]);
  }
  function update_meal(Request $request){
    meal::where('id',$request->meal_id)->update(['meal_type'=>$request->meal_name,'category_id'=>$request->cat]);
    return redirect('dashboard');
  }
  function delete_meal(Request $request){
    meal::where('id',$request->meal)->delete();
    return redirect('dashboard');
  }
}
