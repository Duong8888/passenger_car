<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'passenger_car_id',
        'user_id',
        'star',
        'content',
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function PassengerCar(){
        return $this->belongsTo(PassengerCar::class,'comments',);
    }
}
