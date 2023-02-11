<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    public function thread_attachment(){
        return $this->belongsTo(ThreadAttachment::class, 'thread_attachment_id');
    }
}
