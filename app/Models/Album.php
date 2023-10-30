<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'path',
        'passenger_car_id',
    ];

    public function passengerCar() {
        return $this->belongsTo(PassengerCar::class,'passenger_car_id','id');
    }
}
