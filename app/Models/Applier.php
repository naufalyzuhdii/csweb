<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applier extends Model
{
    use HasFactory;
    protected $fillable = [
        'apply_price', 'description', 'status', 'user_id', 'threads_post_projects_id'
    ];

    public function threads_post_projects_(){
        return $this->belongsTo(ThreadsPostProject::class);
    }
}
