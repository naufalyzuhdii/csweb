<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';
    protected $primaryKey = 'course_id';

    protected $fillable = [
        'title', 'description', 'price', 'image'
    ];
    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function CourseDetail(){
        return $this->hasMany(CourseDetail::class);
    }

    public function transaction_detail(){
        return $this->belongsTo(TransactionDetail::class);
    }

    // public function transaction_header(){
    //     return $this->hasMany(Tra)
    // }

    public static function get_course($course_id){
        $data = Course::where('id', $course_id)->first();
        
        return $data;
    }
}
