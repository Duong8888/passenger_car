<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'departure',
        'arrival',
        'price',
    ];

    public function passengerCars(){
        return $this->hasMany(PassengerCar::class);
    }
    public function stops(){
        return $this->hasMany(Stops::class);
    }
}
