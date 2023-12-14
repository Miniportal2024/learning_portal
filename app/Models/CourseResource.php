<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseResource extends Model
{
    use HasFactory;
    protected $table="course_resources"; 
    protected $fillable=['course_id', 'video_id', 'file_id', 'quiz_id'];
}
