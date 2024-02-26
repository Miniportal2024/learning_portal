<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Http\Requests\QuizRequest;
use App\Models\Course;
use App\Models\Videos;
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
        $user = User::with('roles')->find($id);
        return response()->json($user);
    }
    public function update(Request $request)
    {
        $validator;
        if($request->password != null){
            $validator = Validator::make($request->all(),[
                'role' => 'required',
                'name'     =>  'required',
                'id_number'  =>  'required',
                'email'     =>  'required|email',
                'password'       =>  'required|min:8|']);
        }else{
            $validator = Validator::make($request->all(),[
                'role' => 'required',
                'name'     =>  'required',
                'id_number'  =>  'required',
                'email'     =>  'required|email']);
        }
        if($validator->fails())
        {
            return response()->json([
                'status' => 400,
                'error' => $validator->messages() 
            ]);
        }
        //If inputs is good
        $user = User::find($request->user_id);
        if ($user) {
            if($request->password != null){
                $user->update([
                    'name' => $request->name,
                    'id_number' => $request->id_number,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ]);
            }else{
                $user->update([
                    'name' => $request->name,
                    'id_number' => $request->id_number,
                    'email' => $request->email
                ]);
            }
            $user->syncRoles($request->role);
            return response()->json(['message' => 'User Updated Successfully', 'success' => true]);
        }
        return response()->json('User not found', 404);
    }
    public function delete(Request $request)
    {
        User::whereid($request->id)->delete();
        return response()->json(['message' => 'User Deleted Successfully', 'success' => true]);
    }
}
