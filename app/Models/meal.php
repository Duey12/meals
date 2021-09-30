<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meal extends Model
{
    use HasFactory;
    protected $fillable=['meal','meal_type'];
    public function category(){
      return $this->belongsTo(category::class);
    }
    public function meal_link(){
      return $this->hasMany(student_meal::class);
    }
}
