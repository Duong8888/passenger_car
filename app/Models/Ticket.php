<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'phone',
        'email',
        'user_id',
        'passenger_car_id',
        'quantity',
        'total_price',
        'payment_method',
        'status',
        'departure',
        'arrival',
    ];
    protected $attributes =[
        'email' => NULL,
        'user_id' => 0
    ];
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function passengerCar():BelongsTo{
        return $this->belongsTo(PassengerCar::class,'passenger_car_id','id');
    }

}
