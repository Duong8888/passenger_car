<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatsLayout extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'row',
        'seat'
    ];
    public function vehicle(){
        return $this->belongsTo(Vehicles::class,'vehicle_id');
    }
}
