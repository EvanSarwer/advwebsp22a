<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function listCourse(){
        $courses = array();

        $course=array(

            "Course"=>"Programming With Python",

            "Instructor"=> "Mr. David",

            "Duration"=> "4 Months",

            "Starts"=> "10th February 2022",
        );
         $course=(object) $course;

        $courses[] = $course;

        $course=array(

            "Course"=>"Programming With C#",

            "Instructor"=> "Mr. David",

            "Duration"=> "4 Months",

            "Starts"=> "10th February 2022",
        );

        $course=(object) $course;

        $courses[] = $course;

        return view('home.listcourse')

        ->with ('course', $courses);
    }
}
