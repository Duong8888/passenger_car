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
        'order',
    ];

    public function toSearchableArray()
    {
        return [
            'stop_name' => $this->stop_name,
            'stop_type' => $this->stop_type,
            'route_id' => $this->route_id,
        ];
    }

    public function route()
    {
        return $this->belongsTo(Route::class,'route_id','id',);
    }

}
