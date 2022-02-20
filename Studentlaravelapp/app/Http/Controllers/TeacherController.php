<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function list(){

        
        $teachers = Teacher::all();   
        return view('teacher.list')
        ->with('teachers',$teachers);
    }
    public function get(Request $req){
       
        $teacher = Teacher::where('id','=',decrypt($req->id))
        ->select('name','designation')
        ->first();
        
        return view('teacher.get')
        ->with('teacher',$teacher);
    }
}
