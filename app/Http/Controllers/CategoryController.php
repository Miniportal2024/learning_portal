<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\QuizScore;
use App\Models\Course;

class CategoryController extends Controller
{
    public function display(){
        $categories = Category::all();
        return view('pages.category', compact('categories'));
    }
    public function select($id){
        $category = Category::find($id);
        $courses = $category->courses;
        $course_list = array();
        foreach($courses as $course){
            $quiz_score = $course->quiz_score->first();
            $course->score = $quiz_score != null ? $quiz_score->score : 0;
        }
        return view('pages.courses', compact('courses'));
    }
}
