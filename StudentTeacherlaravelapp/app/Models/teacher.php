<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TeacherCourse;

class teacher extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function taught_courses(){
        return $this->hasMany(TeacherCourse::class,'t_id');
    }
}
