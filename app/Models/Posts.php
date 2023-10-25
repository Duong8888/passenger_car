<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'image',
        'slug',
        'category_id',
        'author_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'author_id','id');
    }

    public function category()
    {
        return $this->belongsTo(PostsCategory::class,'category_id','id');
    }
}
