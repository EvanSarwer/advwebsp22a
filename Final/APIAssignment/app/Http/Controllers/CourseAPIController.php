<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Department;

class CourseAPIController extends Controller
{
    public function getall(){
        return Course::all();
    }
    public function get(Request $req){
        $cr = Course::where('id',$req->id)->first();
        if($cr){
            return response()->json($cr,200);
        }
        return response()->json(["msg"=>"notfound"],404);
        
    }
    public function createCourseSubmit(Request $req){
        $cr = new Course();
        $cr->name = $req->name;
        $cr->department_id = $req->did;
        $cr->save();
        return response()->json(["msg"=>"Course Created","Values"=>$cr],200);  
    }
    public function editCourseSubmit(Request $req){
        $cr = Course::where('id',$req->id)->first();
        if($cr){
            $cr->name = $req->name;
            $cr->save();
            return response()->json(["msg"=>"Course Updated","Updated Values"=>$cr],200);
        }
        return response()->json(["msg"=>"Course not found"],404); 
    }
    public function deleteCourse(Request $req){
        $cr = Course::where('id',$req->id)->first();
        if($cr){
            $cr->delete();
            return response()->json(["msg"=>"Course deleted"],200);
        }
        return response()->json(["msg"=>"Course not found"],404); 
    }
    
}
