<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'skills_requirement',
    ];

    public function setColumnAttribute($value)
    {
        $this->attributes['skills_requirement'] = serialize($value);
    }

    public function getColumnAttribute($value)
    {
        return unserialize($value);
    }
}