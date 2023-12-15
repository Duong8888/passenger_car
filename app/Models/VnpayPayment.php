<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VnpayPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'vnp_TmnCode',
        'vnp_CreateDate',
        'vnp_TxnRef',
        'passenger_car_id',
        'status',
        'other_field',
        'inc_id'
    ];
    public $timestamps = false;
}
