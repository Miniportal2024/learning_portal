<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videos;
use App\Models\Course;
use App\Models\CourseVideo;
use App\Models\UserVideo;
use Auth;

class VideoController extends Controller
{
    public function read(){
        $videos = Videos::first();
        // $courses = $courses->find(1);
        return view('pages.course-video', compact('videos'));
    }
    public function select($id){
        $user_id = Auth::user()->id;
        $course = Course::find($id);
        $list_of_videos = $course->videos->sortBy('id');
        $video = $list_of_videos->shift();
        $course = $course->toArray();

        $user_video = UserVideo::where('user_id', $user_id)->get()->pluck('video_id, is_locked')->toArray();
        foreach($list_of_videos as $row){
            if(in_array($row->id, $user_video)){
                $row->is_locked = 0;
            }else{
                $row->is_locked = 1;
            }
        }
        // dd($video, $course, $list_of_videos);
        return view('pages.course-video', compact('video', 'course', 'list_of_videos'));
    }
    public function view($id){
        $video = Videos::find($id);
        $course = $video->course->first();
        $list_of_videos = $course->videos->sortBy('id');
        $course = $course->toArray();
        $video = $video->toArray();
        // dd($video, $course, $list_of_videos);
        return view('pages.course-video', compact('video', 'course', 'list_of_videos'));
    }
    public function list(Request $request){
        $video_ids = CourseVideo::where('course_id', $request->id)->get()->pluck('video_id');
        $videos = Videos::whereIn('id', $video_ids)->get();
        return json_encode($videos);
    
    }
    public function update_user_video(Request $request){
        // TO DO 
    }
}
