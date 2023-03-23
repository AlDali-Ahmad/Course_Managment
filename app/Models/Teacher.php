<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['Full_Name','Phone_number','Academic_education'];
    use HasFactory;

    public function courses()
    {
    return $this->hasMany(Course::class);
    }
}
