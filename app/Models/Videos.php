<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Videos extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $fillable = ['id', 'title', 'chapter', 'file_location', 'duration', 'access_number'];
    
    public function course(){
        return $this->belongsToMany(Course::class, 'course_video', 'video_id', 'course_id');
    }
}
