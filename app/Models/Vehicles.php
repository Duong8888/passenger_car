<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicles extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_name'
    ];
    public function passengerCars(){
        return $this->hasMany(PassengerCar::class);
    }
    public function seatsLayout(){
        return $this->hasMany(SeatsLayout::class);
    }
}
