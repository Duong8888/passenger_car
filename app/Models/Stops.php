<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;

class Stops extends Model
{
    use HasFactory;

    protected $fillable = [
        'stop_name',
        'stop_type',
        'route_id',
    ];
    public function route(){
        return $this->belongsTo(Route::class);
    }
}
