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

        $user_video = UserVideo::where('user_id', $user_id)->where('course_id', $course['id'])->get()->pluck('level');
        $level = (count($user_video) <= 0) ? 0 : $user_video->first();

        return view('pages.course-video', compact('video', 'course', 'list_of_videos', 'level'));
    }
    public function view($id){
        $user_id = Auth::user()->id;
        $video = Videos::find($id);
        $course = $video->course->first();
        $list_of_videos = $course->videos->sortBy('id');
        $course = $course->toArray();
        $video = $video->toArray();
        $user_video = UserVideo::where('user_id', $user_id)->where('course_id', $course['id'])->get()->pluck('level');
        $level = (count($user_video) <= 0) ? 0 : $user_video->first();

        return view('pages.course-video', compact('video', 'course', 'list_of_videos', 'level'));
    }
    public function list(Request $request){
        $video_ids = CourseVideo::where('course_id', $request->id)->get()->pluck('video_id');
        $videos = Videos::whereIn('id', $video_ids)->get();
        return json_encode($videos);
    
    }
    public function update_user_video(Request $request){
        $user_id = Auth::user()->id;
        $course_id = $request->course_id;
        $video_id = $request->video_id;

        $user_video = UserVideo::where('user_id', $user_id)->where('course_id', $course_id);
        if($user_video->exists()){
            $isGreater = $user_video->pluck('video_id')->first();
            if($isGreater > $video_id){
                $level = $user_video->pluck('level')->first();
                $user_video->update(['video_id'  => (int) $video_id, 'level' => $level+1]);
            }else{
                return response()->json(['message' => 'Already Finished', 'success' => true]);
            }
        }else{
            UserVideo::create([ 
                'user_id'   => $user_id,
                'course_id'  => (int) $course_id,
                'video_id'  => (int) $video_id,
                'level' => 1
            ]);
        }

        return response()->json(['message' => 'Successfully', 'success' => true]);


    }
}
