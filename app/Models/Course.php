<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Videos;
use App\Models\Category;
use App\Models\QuizScore;

class Course extends Model
{
    use HasFactory;
    public $table = 'courses';
    protected $fillable = ['name', 'overview', 'description', 'state', 'number_of_videos','number_of_files', 'duration', 'instructor', 'img', 'file', 'rating'];

    public function videos(){
        return $this->belongsToMany(Videos::class, 'course_video', 'course_id', 'video_id');
    }
    public function category(){
        return $this->belongsToMany(Category::class, 'category_course', 'course_id');
    }

    public function quiz_score(){
        return $this->hasMany(QuizScore::class);
    }
    
}

    
    

