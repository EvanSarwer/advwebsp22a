<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentAPIController extends Controller
{
    //
    public function list(){
        $depts = Department::all();
        return $depts;
    }

    public function create(Request $req){
        $dept = new Department();
        $dept->name = $req->name;
        $dept->save();
        //return "Department Created Successfully";
        return response()->json(["msg"=>"Department Created Successfully","Values"=>$dept],200); 
    }
    public function edit(Request $req){
        $dept = Department::where('id',$req->id)->first();
        if($dept){
            $dept->name = $req->name;
            $dept->save();
            return response()->json(["msg"=>"Department Updated Successfully","value"=>$dept],200);
        }
        return response()->json(["msg"=>"Department Not Found"],404);
    }
    public function delete(Request $req){
        $dept = Department::where('id',$req->id)->first();
        if($dept){
            $dept->delete();
            return response()->json(["msg"=>"Department Deleted Successfully"],200);
        }
        return response()->json(["msg"=>"Department Not Found"],404);
    }
    public function details(Request $req){
        $dept = Department::where('id',$req->id)->first();
        if($dept){
            return response()->json([
                                    "id" => $dept->id,
                                    "name" => $dept->name,
                                    "courses" => $dept->courses,
                                ],200);
        }
        return response()->json(["msg"=>"Department Not Found"],404);
    }


    
}
