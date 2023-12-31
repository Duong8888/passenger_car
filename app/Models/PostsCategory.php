<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'parent_id',
    ];
    public function posts(){
        return $this->hasMany(Posts::class);
    }
}
