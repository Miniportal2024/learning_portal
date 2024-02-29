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
        $course = Course::find($id);
        $category = $course->category->first();
        $suggested_categories = Category::whereNotIn('id', [$category->id])->inRandomOrder()->limit(3)->get();
        $suggested_courses = $category->courses;
        if(count($suggested_courses) >= 5){
            $suggested_courses = $category->courses->random(5);
        }else{
            $suggested_courses = $category->courses;
        }
        return view('pages.course-details', compact('course','category', 'suggested_categories', 'suggested_courses'));
    }
}
