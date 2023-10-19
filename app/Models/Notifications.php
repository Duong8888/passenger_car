<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_send',
        'content',
        'is_read',
        'url',
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_send','id');
    }
}
