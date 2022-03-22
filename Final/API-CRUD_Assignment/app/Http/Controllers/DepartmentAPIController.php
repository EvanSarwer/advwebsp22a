<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Department;
class DepartmentAPIController extends Controller
{
    public function getall(){
        return Department::all();
    }
    public function createDepartmentSubmit(Request $req){
        $dp = new Department();
        $dp->name = $req->name;
        $dp->save();
        return response()->json(["msg"=>"Department Created","Values"=>$dp],200);  
    }
    public function editDepartmentSubmit(Request $req){
        $dp = Department::where('id',$req->id)->first();
        if($dp){
            $dp->name = $req->name;
            $dp->save();
            return response()->json(["msg"=>"Department Updated","Updated Values"=>$dp],200);
        }
        return response()->json(["msg"=>"Department not found"],404); 
    }
    public function deleteDepartment(Request $req){
        $dp = Department::where('id',$req->id)->first();
        if($dp){
            $dp->delete();
            return response()->json(["msg"=>"Department deleted"],200);
        }
        return response()->json(["msg"=>"Department not found"],404); 
    }
    public function departmentDetails(Request $req){
        $dp = Department::where('id',$req->id)->first();
        if($dp){
            //return $dept->courses;
            return response()->json(["Id"=>$dp->id,
                                "Name"=>$dp->name,
                                "Courses"=>$dp->courses],200);
            
        }
        return response()->json(["msg"=>"Department not found"],404); 
        
    }
}
