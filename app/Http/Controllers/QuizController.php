<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Http\Requests\QuizRequest;
use App\Models\Course;
use App\Models\Videos;
use App\Models\CourseVideo;
// use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class QuizController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('dashboard.quiz', compact('courses'));
    }
    public function display()
    {
        $quizzes = Quiz::all();
        foreach($quizzes as $question){
            $question->course_name          = Course::find($question->course_id)->name;
            $question->after_video_name     = Videos::find($question->after_video_id)->title;
        }
        return response()->json($quizzes);
    }
    public function save(QuizRequest $request)
    {
        try {
            Quiz::create([
                'title'     =>  $request->title,
                'course_id' =>  $request->course_id,
                'after_video_id'  =>  $request->after_video_id,
                'quiz_item' =>  $request->quiz_item,
                'answer'    =>  $request->answer,
                'question'  =>  $request->question,
                'option1'   =>  $request->option1,
                'option2'   =>  $request->option2,
                'option3'   =>  $request->option3,
                'option4'   =>  $request->option4,
            ]);
            return response()->json(['message' => 'Quiz Added Successfully', 'success' => true]);
        } catch (Exception $e) {
            if ($e->errorInfo[1] == 1062) { // MySQL unique constraint violation error code
                return response()->json(['message' => 'Quiz is already registered', 'success' => false]);
            }
            // Handle other database-related exceptions if needed
            return response()->json(['message' => $e, 'success' => false]);
        }
        
    }
    public function edit($id)
    {
        $question = Quiz::find($id);
        $question->course_name          = Course::find($question->course_id)->name;
        $question->after_video_name     = Videos::find($question->after_video_id)->title;
        $video_ids = CourseVideo::where('course_id', $question->course_id)->get()->pluck('video_id')->toArray();
        $videos = Videos::whereIn('id', $video_ids)->get()->pluck('title', 'id')->toArray();
        return response()->json(['question' => $question, 'videos' => $videos]);
    }
    public function update(QuizRequest $request)
    {
        //If inputs is good
        $quiz = Quiz::find($request->id);
        if ($quiz) {
            $quiz->update([
                'title'     =>  $request->title,
                'course_id' =>  $request->course_id,
                'after_video_id'  =>  $request->after_video_id,
                'quiz_item' =>  $request->quiz_item,
                'answer'    =>  $request->answer,
                'question'  =>  $request->question,
                'option1'   =>  $request->option1,
                'option2'   =>  $request->option2,
                'option3'   =>  $request->option3,
                'option4'   =>  $request->option4,
            ]);
            return response()->json(['message' => 'Quiz Updated Successfully', 'success' => true]);
        }
        return response()->json('Quiz not found', 404);
    }
    public function delete(Request $request)
    {
        Quiz::whereid($request->id)->delete();
        return response()->json(['message' => 'Quiz Deleted Successfully', 'success' => true]);
    }
}
