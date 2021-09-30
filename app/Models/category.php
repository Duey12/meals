<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable=['cat_name','desc'];
    public function meal_link(){
      return $this->hasMany(meal::class);
    }
}
