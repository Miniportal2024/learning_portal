<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public $table = 'courses';
    public $fillable = ['name', 'overview', 'description', 'state', 'number_of_videos','number_of_files','duration', 'instructor', 'img', 'file', 'rating'];
}
