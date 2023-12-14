<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Videos;

class Course extends Model
{
    use HasFactory;
    public $table = 'courses';
    public $fillable = ['name','description', 'state', 'duration', 'course_img', 'author','author_img', 'author_profile', 'rating'];

    public function videos(){
        return $this->hasMany(Videos::class);
    }
}

