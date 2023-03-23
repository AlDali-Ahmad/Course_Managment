<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable =
        [
            'Name_Courses','description','teacher_id','course_type_id','count_hours'
    ];



    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }
    public function teacher(){
        return $this->belongsTo(Teacher::class,);
    }
    public function course_type(){
        return$this->belongsTo(Course_type::class);
    }
}
