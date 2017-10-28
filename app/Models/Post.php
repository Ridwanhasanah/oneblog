<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'title','content','category_id','slug'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        /*Relasi one to many di laravel*/
        return $this->hasMany(Comment::class);
    }
}
