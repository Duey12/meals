<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\meal;
use App\Models\User;
use App\Models\student_meal;
use Illuminate\Support\Facades\Auth;

class studentcontroller extends Controller
{
  function selection_view(){
    $meal=meal::all();
    return view('selectmeal',['meals'=>$meal]);
  }
  function select_log(Request $request){
    $mealselection=student_meal::Insert(['student_id'=>Auth::id(),'meal_id'=>$request->meal,
    'date'=>$request->date]);
    return redirect('dashboard');
  }
  function mymeal(){
    $student_list=student_meal::join('Users','Users.id','=','student_meal.student_id')->
    join('meals','meals.id','=','student_meal.meal_id')->join('categories','categories.id','=','meals.id')
    ->where('student_meal.student_id',Auth::id())->get();
    $meal_list=json_decode(json_encode($student_list), true);
    return view('student_meal_list',['meal_list'=>$meal_list]);
  }
}
