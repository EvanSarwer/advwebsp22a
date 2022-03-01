<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    //
    public function create(){
        return view('teacher.create');
    }
    public function edit(){
        return view('teacher.edit');
    }
    public function get(Request $req){
        $teacher = Teacher::where('id','=',decrypt($req->id))
        ->first();

        return view('teacher.get')->with('teacher',$teacher);


    }
    public function list(){
        $teachers = Teacher::all();
        return view('teacher.list')
        ->with('teachers',$teachers);
    }
}
