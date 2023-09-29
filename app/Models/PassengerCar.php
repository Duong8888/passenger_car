<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;

class PassengerCar extends Model
{
    use HasFactory;
    protected $table = "passenger_cars";
    protected $fillable = [
        'license_plate',
        'capacity',
        'description',
        'transport_unit_id',
        'route_id',
    ];
    public $timestamps = false;

    public function albums(){
        return $this->hasMany(Album::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function route(){
        return $this->belongsTo(Route::class);
    }
    public function workingTime() {
        return $this->belongsToMany(WorkingTime::class);
    }
    public function services(){
        return $this->belongsToMany(Service::class);
    }
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
