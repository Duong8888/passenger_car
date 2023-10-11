<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;
use Laravel\Scout\Searchable;

class PassengerCar extends Model
{
    use HasFactory;
    use Searchable;
    protected $fillable = [
        'license_plate',
        'capacity',
        'price',
        'description',
        'user_id',
        'route_id',
    ];

    public function toSearchableArray()
    {
        return [
            'license_plate' => $this->license_plate,
            'capacity'=> $this->capacity,
            'price'=> $this->price,
            'description'=> $this->description,
            'user_id'=> $this->user_id,
            'route_id'=> $this->route_id,
        ];
    }

    public function albums(){
        return $this->hasMany(Album::class);
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function route(){
        return $this->belongsTo(Routes::class,'route_id');
    }
    public function workingTime() {
        return $this->belongsToMany(WorkingTime::class, 'passenger_car_working_times');

    }
    public function services(){
        return $this->belongsToMany(Service::class,'passenger_car_services');
    }
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
