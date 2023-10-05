<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassengerCarService extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'passenger_car_id',
    ];
}
