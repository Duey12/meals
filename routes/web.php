<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login;
use App\Http\Controllers\get_meals;
use App\Http\Controllers\studentselection;
use App\Http\Controllers\logout;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\cat_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/login', function () {
    return view('login');
});
Route::post("/login",[login::class,'userlogin']);
Route::get("/signup",[login::class,'createuser']);
Route::get("/dashboard",[get_meals::class,'all_meal']);
Route::get("/categories",[cat_controller::class,'view_cat'])->name('view_cat');
Route::get("/addcategories",[cat_controller::class,'add_cat'])->name('add_cat_view');
Route::post("/addcategories",[cat_controller::class,'store_cat'])->name('add_cat');
Route::get("/addmeal",[get_meals::class,'add_meal_view']);
Route::post("/addmeal",[get_meals::class,'add_meal']);
Route::get("/updatemeal",[get_meals::class,'update_meal_view']);
Route::post("/updatemeal",[get_meals::class,'update_meal']);
Route::get("/deletemeal",[get_meals::class,'delete_meal']);
Route::get("/studentselection",[studentselection::class,'student_meal_list']);
Route::get("/logout",[logout::class,'userlogout']);
Route::get("/mealselection",[studentcontroller::class,'selection_view']);
Route::post("/logselection",[studentcontroller::class,'select_log']);
Route::get("myselections",[studentcontroller::class,'mymeal']);
