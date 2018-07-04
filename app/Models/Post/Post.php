<?php

namespace App\Models\Post;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
      'name',
      'slug',
      'description',
      'keywords',
      'status',
    ];
}
