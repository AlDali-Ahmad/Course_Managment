<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_User extends Model
{
    protected $fillable=[
      'course_id','user_id',
    ];
    use HasFactory;
}
