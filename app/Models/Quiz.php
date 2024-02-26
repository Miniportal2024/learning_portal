<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $table = 'quiz';
    protected $fillable = [
        'title',
        'course_id',
        'after_video_id',
        'quiz_item',
        'answer',
        'question',
        'option1',
        'option2',
        'option3',
        'option4'
    ];
}
