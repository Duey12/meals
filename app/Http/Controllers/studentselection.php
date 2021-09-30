<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\meal;
use App\Models\User;
use App\Models\student_meal;

class studentselection extends Controller
{
  function student_meal_list(){
    $student_list=student_meal::join('Users','Users.id','=','student_meal.student_id')->
    join('meals','meals.id','=','student_meal.meal_id')->join('categories','categories.id','=','meals.id')->get();
    $meal_list=json_decode(json_encode($student_list), true);
    return view('student_meal_list',['meal_list'=>$meal_list]);
  }
}
