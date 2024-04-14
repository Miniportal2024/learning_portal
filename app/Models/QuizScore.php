<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class QuizScore extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'quiz_score';
    protected $fillable = ['user_id', 'course_id', 'score'];

    public function course(){
        return $this->belongsToMany(Course::class, 'id');
    }
}
