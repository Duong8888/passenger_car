<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'username',
        'phone',
        'email',
        'passenger_car_id',
        'quantity',
        'total_price',
        'payment_method',
        'status',
        'departure',
        'arrival',
        'date',
        'time_id',
        'vnpay_status',
        'inc_id',
        'reason',
        'seat_id'
    ];
    protected $attributes =[
        'email' => NULL,
    ];
    public function user():BelongsTo{
        return $this->belongsTo(User::class);
    }
    public function passengerCar():BelongsTo{
        return $this->belongsTo(PassengerCar::class,'passenger_car_id','id');
//            ->where('user_id', auth()->id());
    }

}
