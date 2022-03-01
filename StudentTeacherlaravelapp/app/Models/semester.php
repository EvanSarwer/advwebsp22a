<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TeacherCourse;

class semester extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function teachers(){
        return $this->hasMany(TeacherCourse::class,'sm_id');
    }
}
