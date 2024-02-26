<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuizRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'     => 'required',
            'course_id' => 'required',
            'after_video_id'  => 'required',
            'quiz_item' => 'required|numeric',
            'answer'    => 'required',
            'question'  => 'required',
            'option1'   => 'required',
            'option2'   => 'required',
            'option3'   => 'required',
            'option4'   => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'course_id.required' => 'Please select a course name',
            'video_id.required'  => 'Please select a video name',
            'quiz_item.decimal' => 'Please enter a number',
        ];
    }
}
