<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;
use App\Models\Course;

class VideoController extends Controller
{
    public function read(){
        $videos = Videos::first();
        // $courses = $courses->find(1);
        return view('pages.course-video', compact('videos'));
    }
    public function select($id){
        $course = Course::find($id);
        $list_of_videos = $course->videos->sortByDesc('id');
        $video = $list_of_videos->first()->toArray();
        $course = $course->toArray();
        // dd($video, $course, $list_of_videos);
        return view('pages.course-video', compact('video', 'course', 'list_of_videos'));
    }
    public function view($id){
        $video = Videos::find($id);
        $course = $video->course->first();
        $list_of_videos = $course->videos->sortByDesc('id');
        $course = $course->toArray();
        $video = $video->toArray();
        // dd($video, $course, $list_of_videos);
        return view('pages.course-video', compact('video', 'course', 'list_of_videos'));
    }
}
