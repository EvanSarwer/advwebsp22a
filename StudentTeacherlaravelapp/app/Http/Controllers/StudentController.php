<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use App\Models\Student;

class StudentController extends Controller
{
    //
    public function create(){
        return view('student.create');
    }
    public function edit(){
        return view('student.edit');
    }
    public function delete(){
        //return view('student.delete');
    }
    public function get(Request $req){
        /*$student = array(
            "name" => $req->name,
            "id" => $req->id,
            "uname" => $req->uname
        );
        $student = (object) $student;*/

        //select * from students where id= $req->id
        $student = Student::where('id','=',decrypt($req->id))
        ->select('name','id','dob','d_id')
        ->first();
        //return $student;
        //return $student->courses;

        $sum = 12+13;
        return view('student.get')
        ->with('student',$student)
        ->with('sum',$sum);
    }
    public function list(){

        /*$students=[];
        for($i=1;$i<=10;$i++){
            $date = new DateTime();
            $date = $date->format('Y-m-d H:i:s');
            $student = array(
                "name" => "Student $i",
                "id" => $i,
                "dob" => $date
            );
            $students[] = (object)$student;
        }*/

        //select * from students_info
        $students = Student::all();
        //return $students;
        return view('student.list')
        ->with('students',$students);
    }
}
