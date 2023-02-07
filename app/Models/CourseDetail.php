<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'chapter'
    ];

    public function course(){
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function course_video(){
        return $this->hasMany(CourseVideo::class);
    }
}
