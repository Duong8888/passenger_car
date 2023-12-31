<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'email',
        'phone',
        'passengerCar_name',
        'province',
        'status',
        'images',
        'number_card',
        'rental_code'
    ];

}
