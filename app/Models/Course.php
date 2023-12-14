<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Videos;
use App\Models\Category;

class Course extends Model
{
    use HasFactory;
    public $table = 'courses';
    protected $fillable = ['name', 'overview', 'description', 'state', 'number_of_videos','number_of_files', 'duration', 'instructor', 'img', 'file', 'rating'];

    public function videos(){
        return $this->hasMany(Videos::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
}

    
    

