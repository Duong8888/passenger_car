<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatStatus extends Model
{
    use HasFactory;

    protected $fillable = [
        'passenger_car_id',
        'date',
        'time_id',
        'seat_status',
        'seat_name'
    ];
}
