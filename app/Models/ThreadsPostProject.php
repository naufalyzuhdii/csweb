<?php

namespace App\Models;

use App\Models\User;
use App\Models\Skills;
use App\Models\Category;
use App\Models\ChatRoom;
use App\Models\ThreadAttachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ThreadsPostProject extends Model
{
    use HasFactory;


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function skills()
    {
        return $this->hasMany(Skills::class);
    }

    public function chat_room(){
        return $this->hasMany(ChatRoom::class);
    }

    public function thread_attachment(){
        return $this->hasMany(ThreadAttachment::class);
    }


}