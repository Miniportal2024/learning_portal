<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVideo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'user_video';
    protected $fillable = ['id', 'user_id', 'course_id', 'video_id', 'level'];

}
