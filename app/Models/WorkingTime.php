<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingTime extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'departure_time',
        'arrival_time',
    ];

    public function passengerCars(){
        return $this->belongsToMany(PassengerCar::class,'passenger_car_working_times');
    }

    public function hasManyTicket(){
        return $this->hasMany(Ticket::class, 'time_id', 'id');
    }
}
