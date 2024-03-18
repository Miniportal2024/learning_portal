<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Http\Requests\QuizRequest;
use App\Models\Course;
use App\Models\Videos;
use App\Models\CourseVideo;
use App\Models\UserVideo;
use App\Models\QuizScore;
use Auth;
// use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class QuizController extends Controller
{
    public function index(Request $request){
        $id = $request->id;
        $user_id = Auth::user()->id;
        $course = Course::find($id);
        $list_of_videos = $course->videos->sortBy('id');
        $user_video = UserVideo::where('user_id', $user_id)->where('course_id', $course->id)->get()->pluck('level');
        $level = (count($user_video) <= 0) ? 0 : $user_video->first();
        $questions = count(Quiz::where('course_id', $course->id)->get());
        $course = $course->toArray();

        $questions_list = Quiz::where('course_id', $id)->get()->toArray();
        $score = QuizScore::where('user_id', $user_id)->where('course_id', $course['id'])->first();
        if($score != null){
            $remarks = ($score->score >= 60) ? 'PASSED' : 'FAILED';
        }else{  
            $remarks = null;
        }
        return view('pages.quiz', compact('questions_list', 'course', 'list_of_videos', 'level', 'questions', 'score', 'remarks'));
    }
    public function check(Request $request){
        $user_id = Auth::user()->id;
        $correct = array();
        $course_id = $request->course_id;
        $answers = $request->answers;
        $correct = 0;

        $questions = Quiz::where('course_id', $course_id)->get();
        foreach($answers as $id => $answer){
            $question = $questions->where('id', $id)->first();
            if($answer == $question->answer){
                $question->result = 'correct';
                $correct++;
            }else{
                $question->result = 'incorrect';
            }
        }

        $score = (int)$correct/count($questions);
        $remarks = ($score >= 0.6) ? 'PASSED' : 'FAILED';

        $score = $score * 100;


        //Save score in quiz_score table
        $quiz_score = QuizScore::where('user_id', $user_id)->where('course_id', $course_id);
        $quiz_score = QuizScore::where('user_id', $user_id)->where('course_id', $course_id);
        if($quiz_score->exists()){
            $quiz_score->update([
                'score' => $score
            ]);
        }else{
            QuizScore::create([
                'user_id' => $user_id,
                'course_id' => $course_id,
                'score' => $score
            ]);
        }

        return json_encode(['results' => $questions, 'score' => $score, 'remarks' => $remarks]);
    }
    public function list(){
        $courses = Course::all();
        return view('dashboard.quiz', compact('courses'));
    }
    public function display()
    {
        $quizzes = Quiz::all();
        foreach($quizzes as $question){
            $question->course_name          = Course::find($question->course_id)->name;
        }
        return response()->json($quizzes);
    }
    public function save(QuizRequest $request)
    {
        try {
            Quiz::create([
                'title'     =>  $request->title,
                'course_id' =>  $request->course_id,
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
        return response()->json(['question' => $question]);
    }
    public function update(QuizRequest $request)
    {
        //If inputs is good
        $quiz = Quiz::find($request->id);
        if ($quiz) {
            $quiz->update([
                'title'     =>  $request->title,
                'course_id' =>  $request->course_id,
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
