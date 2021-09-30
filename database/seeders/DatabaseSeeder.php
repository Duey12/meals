<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->Insert([
      ['name'=>'Duwaine',
      'email'=>'default@gmail.com',
      'password'=>Hash::make('password'),
      'roleid'=>1],
      
      ['name'=>'Charles',
      'email'=>'email@gmail.com',
      'password'=>Hash::make('password'),
      'roleid'=>0
    ]
      ]);
    }
}
