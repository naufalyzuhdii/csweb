<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;

    protected $table = 'transaction_headers';
    protected $primaryKey = 'transaction_header_id';

    protected $fillable = [
        'transaction_date'
    ];

    public static function add_transaction_header(){
        $data = TransactionHeader::create([
            'transaction_date' => date('Y-m-d'),
        ]);

        return $data->transaction_header_id;
    }
}
