<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_type extends Model
{
    protected $fillable=
        [
            'Name'
        ];
    use HasFactory;
    public function courses(){
        return $this->hasMany(Course::class);
    }
}
