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
}
