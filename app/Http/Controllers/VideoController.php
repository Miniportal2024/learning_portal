<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;

class VideoController extends Controller
{
    public function read(){
        $videos = Videos::first();
        // $courses = $courses->find(1);
        return view('pages.course-video', compact('videos'));
    }
}
