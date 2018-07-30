<?php

namespace App\Models\Listing;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //
    protected $table = 'listings';

    public function getThumbnailAttribute()
    {
      $thumbnail = $this->attributes['image'];

      return $thumbnail;
    }
}
