<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseQuiz extends Model
{
    use HasFactory;
    protected $table="course_quiz"; 
    protected $fillable=['course_id', 'quiz_id'];
}
