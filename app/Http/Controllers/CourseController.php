<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function display(){
        $courses = Course::all();
        // $courses = $courses->find(1);
        // dd($courses[0]);
        return view('pages.courses', compact('courses'));
    }
    public function select(Request $request){
        $course = Course::find($request->id);
        return view('pages.course-details', compact('course'));
    }
}
