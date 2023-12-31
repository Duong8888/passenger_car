<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_name',
    ];
    public function passengerCars(){
        return $this->belongsToMany(PassengerCar::class,'passenger_car_services');
    }
}
