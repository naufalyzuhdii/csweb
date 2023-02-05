<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;

    public function threadspostproject()
    {
        return $this->belongsTo(ThreadsPostProject::class);
    }
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }


}