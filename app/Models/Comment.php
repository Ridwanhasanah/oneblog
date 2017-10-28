<?php

namespace App\Models;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
      'post_id',
      'user_id',
      'message'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    /*Relasi dari user ke commenr*/
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
