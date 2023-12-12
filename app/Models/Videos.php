<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $fillable = ['id', 'title', 'chapter', 'file_location', 'duration', 'access_number'];
}
