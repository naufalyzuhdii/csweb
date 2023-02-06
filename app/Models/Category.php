<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'parent_id'
    ];

    public function course(){
        return $this->hasMany(Course::class);
    }

    public function thread(){
        return $this->hasMany(Thread::class);
    }

    public function subcategory(){
        return $this->hasMany('Category', 'parent_id');
    }
}
