<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Department;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function department(){
        return $this->belongsTo(Department::class,'d_id');   //maps student table d_id with departments id
        //return $this->belongsTo(Department::class,'d_id','another column')
    }

}
