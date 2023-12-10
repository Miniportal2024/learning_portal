<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function display(){
        $categories = Category::all();
        // $courses = $courses->find(1);
        // dd($courses[0]);
        return view('pages.category', compact('categories'));
    }
}
