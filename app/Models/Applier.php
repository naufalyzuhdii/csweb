<?php

namespace App\Models;

use App\Models\ThreadsPostProject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Applier extends Model
{
    use HasFactory;
    protected $fillable = [
        'apply_price', 'description', 'status', 'user_id', 'threads_post_projects_id'
    ];

    public function threads_post_projects(){
        return $this->belongsTo(ThreadsPostProject::class);
    }
}
