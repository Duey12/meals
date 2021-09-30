<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
  function userlogin(Request $request){
    $credentials=$request->only('email','password',);
      if ($user=Auth::attempt($credentials)) {
        return redirect('dashboard');
      }
      return redirect('/login')->with('fail','Invalid login');
  }
  function createuser(Request $req){
          $data = $req->input();
          $person = new User;
          $person->name = 'Duwaine';
          $person->password=Hash::make('Firmino9!');
          $person->email ='chessmaster4c@gmail.com';
          $person->roleid=0;
          $person->save();
          return redirect('/login')->with('status',"Insert successfully");
        }
}
