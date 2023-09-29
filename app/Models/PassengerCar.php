<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;

class PassengerCar extends Model
{
    use HasFactory;
    protected $fillable = [
        'license_plate',
        'capacity',
        'description',
        'user_id',
        'route_id',
    ];

    public function albums(){
        return $this->hasMany(Album::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'comments');
    }
    public function route(){
        return $this->belongsTo(Routes::class,'route_id');
    }
    public function workingTime() {
        return $this->belongsToMany(WorkingTime::class, 'passenger_car_working_times');
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
