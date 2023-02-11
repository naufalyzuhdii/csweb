<?php

namespace App\Models;

use App\Models\Course;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionDetail extends Model
{
    use HasFactory;

    public function courses(){
        return $this->belongsTo(Course::class);
    }

    // public function transaction_header(){
    //     return $this->belongsTo(TransactionHeader::class);
    // }

    protected $table = 'transaction_details';
    protected $primaryKey = 'transaction_detail_id';

    protected $fillable = [
        'transaction_header_id', 'course_id'
    ];

    public static function add_transaction_detail($course_id, $transaction_header_id){
        TransactionDetail::create([
            'course_id' => $course_id,
            'transaction_header_id' => $transaction_header_id,
        ]);
    }
}
