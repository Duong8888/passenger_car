<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Routes extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'slug',
        'departure',
        'arrival',
        'price',
        'description'
    ];
    public $timestamps = false;
    public function passengerCars(){
        return $this->hasMany(PassengerCar::class,'route_id','id');
    }
    public function stops(){
        return $this->hasMany(Stops::class);
    }
}
