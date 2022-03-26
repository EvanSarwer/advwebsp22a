<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseAPIController extends Controller
{
    //
    public function list(){
        $courses = Course::all();
        return $courses;
    }
    public function create(Request $req){
        $crs = new Course();
        $crs->name = $req->name;
        $crs->offered_by = $req->offered_by;
        $crs->save();
        //return "Course Created Successfully";
        return response()->json(["msg"=>"Course Created Successfully","Values"=>$crs],200); 
    }
    public function edit(Request $req){
        $crs = Course::where('id',$req->id)->first();
        if($crs){
            $crs->name = $req->name;
            $crs->offered_by = $req->offered_by;
            $crs->save();
            return response()->json(["msg"=>"Course Updated Successfully","value"=>$crs],200);
        }
        return response()->json(["msg"=>"Course Not Found"],404);
    }

    public function delete(Request $req){
        $crs = Course::where('id',$req->id)->first();
        if($crs){
            $crs->delete();
            return response()->json(["msg"=>"Course Deleted Successfully"],200);
        }
        return response()->json(["msg"=>"Course Not Found"],404);
    }

    public function details(Request $req){
        $crs = Course::where('id',$req->id)->first();
        if($crs){
            return response()->json([
                                    "id" => $crs->id,
                                    "name" => $crs->name,
                                    "dept_name" => $crs->department->name,
                                ],200);
        }
        return response()->json(["msg"=>"Course Not Found"],404);
    }


}
