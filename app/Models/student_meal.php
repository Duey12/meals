<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_meal extends Model
{
    use HasFactory;
    public $table='student_meal';
    protected $fillable=[
      'student_id','meal_id','created_at'
    ];
    public function student_link(){
      return $this->belongsTo(user::class);
    }
    public function meal_link(){
      return $this->belongsTo(meal::class);
    }
}
