<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $table = "transaction_detail";
    protected $primaryKey = "transaction_detail_id";

    protected $fillable = [
        'course_id',
        'transaction_header_id',
        'quantity'
    ];

    public function add_transaction_detail($course_id, $transaction_header_id){
        Course::create([
            "course_id" => $course_id,
            "transaction_header_id" => $transaction_header_id,
            "quantity" => $quantity,
        ]);
    }
}
