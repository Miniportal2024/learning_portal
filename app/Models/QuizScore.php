<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuizScore extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'quiz_score';
    protected $fillable = ['user_id', 'course_id', 'score'];
}
