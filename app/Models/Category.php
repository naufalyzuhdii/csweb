<?php

namespace App\Models;

use App\Models\Course;
use App\Models\ThreadsPostProject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    // protected $table = 'categories';
    // protected $primaryKey = 'category_id';

    protected $fillable = [
        'name', 'parent_id'
    ];

    public function course(){
        return $this->hasMany(Course::class);
    }

    public function thread(){
        return $this->hasMany(ThreadsPostProject::class);
    }

    public function subcategory(){
        return $this->hasMany( Category::class, 'parent_id');
    }
}