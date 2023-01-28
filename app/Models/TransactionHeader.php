<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;

    protected $table = "transaction_header";
    protected $primaryKey = "transaction_header_id";

    protected $fillable = [
        'transaction_date'
    ];

    public function add_transaction_header(){
        Course::create([
            "transaction_date" => date("Y-m-d"),
        ]);
    }
}
