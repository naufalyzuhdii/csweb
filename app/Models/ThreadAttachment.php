<?php

namespace App\Models;

use App\Models\Attachment;
use App\Models\ThreadsPostProject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ThreadAttachment extends Model
{
    use HasFactory;

    public function thread(){
        return $this->belongsTo(ThreadsPostProject::class, 'threads_post_projects_id');
    }

    public function attachment(){
        return $this->hasMany(Attachment::class);
    }
}
