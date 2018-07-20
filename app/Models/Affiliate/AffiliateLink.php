<?php

namespace App\Models\Affiliate;

use Illuminate\Database\Eloquent\Model;

class AffiliateLink extends Model
{
    //
    protected $table = 'affiliate_links';
    protected $fillable = [
      'name',
      'title',
      'uri',
      'decription',
    ];
    protected $hidden = [
      'description',
    ];

    public function scopeVisible($query)
    {
      return $query->where('web_visible', '=', '1');
    }

    public function scopeBanners($query)
    {
      return $query->where('image', '!=', '')->visible()->get();
    }

    public function scopeLinks($query)
    {
      return $query->where('image', NULL)->visible()->get();
    }

    public function getThumbnailAttribute()
    {
      $thumbnail = '';

      if ($this->attributes['image']) {
        if (is_array($this->attributes['image'])) {
          $thumbnail = $this->attributes['image'][0];
        } else {
          $thumbnail = $this->attributes['image'];
        }
      }

      return env('APP_MAIN_URL') . '/uploads/' . $thumbnail;
    }
}
