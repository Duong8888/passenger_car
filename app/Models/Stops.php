<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;
use Laravel\Scout\Searchable;

class Stops extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'stop_name',
        'stop_type',
        'route_id',
    ];
    public function route(){
        return $this->belongsTo(Route::class);
    }
}
