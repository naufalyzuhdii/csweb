<?php

namespace App\Models;

use App\Models\User;
use App\Models\MyLearning;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MyLearning extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'title', 'description', 'image', 'user_id'
    ];

}
