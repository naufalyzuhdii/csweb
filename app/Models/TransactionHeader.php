<?php

namespace App\Models;

use App\Models\TransactionHeader;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransactionHeader extends Model
{
    use HasFactory;

    protected $table = 'transaction_headers';
    protected $primaryKey = 'transaction_header_id';

    protected $fillable = [
        'transaction_date', 'user_id', 'total_price'
    ];


    public static function add_transaction_header(){
        $cart = session('cart');
        $totalprice = 0;
        foreach ($cart as $ct => $val) {
            $price = $val['price'];
            $totalprice += $price;
        }
        $data = TransactionHeader::create([
            'transaction_date' => date('Y-m-d'),
            'user_id' => Auth::user()->id,
            'total_price' => $totalprice,
        ]);

        return $data->transaction_header_id;
    }
}
