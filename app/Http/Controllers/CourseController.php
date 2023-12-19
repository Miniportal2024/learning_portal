<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;

class CourseController extends Controller
{
    public function display($id){
        $category = Category::find($id);
        $courses = $category->courses;
        // $courses = $courses->find(1);
        // dd($courses[0]);
        return view('pages.courses', compact('courses'));
    }
    public function new_courses(){
        $courses = Course::where('state', 'new');
        return view('pages.new-courses', compact('courses'));
    }
    public function old_courses(){
        $courses = Course::where('state', 'old')->get();
        return view('pages.courses', compact('courses'));
    }
    public function select($id){
        $suggested_courses = array();
        $course = Course::find($id);
        $category = $course->category->first();
        $suggested_categories = Category::all()->whereNotIn('id', [$category->id])->take(3);
        $suggested_courses = $category->courses->take(5);
        
        return view('pages.course-details', compact('category', 'suggested_categories', 'suggested_courses'));
    }
}
