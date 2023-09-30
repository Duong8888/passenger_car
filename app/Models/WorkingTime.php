<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'departure_time',
        'arrival_time',
    ];
    public function passengerCars(){
        return $this->belongsToMany(PassengerCar::class,'passenger_car_working_times');
    }
}
