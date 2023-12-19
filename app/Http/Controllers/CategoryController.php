<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function display(){
        $categories = Category::all();
        return view('pages.category', compact('categories'));
    }
    public function select($id){
        $suggested_courses = array();
        $category = Category::find($id);
        $suggested_categories = Category::all()->whereNotIn('id', [$id])->take(3);
        $suggested_courses = $category->courses->take(5);
        // foreach($courses as $course){
        //     $suggested_courses[] = $course->videos->toArray();
        // }
        return view('pages.course-details', compact('category', 'suggested_categories', 'suggested_courses'));
    }
}
