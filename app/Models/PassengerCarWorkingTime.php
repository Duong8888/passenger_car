<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassengerCarWorkingTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'working_time_id',
        'passenger_car_id',
    ];
}
