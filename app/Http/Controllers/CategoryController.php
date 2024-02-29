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
        $category = Category::find($id);
        $courses = $category->courses;
        return view('pages.courses', compact('courses'));
    }
}
