<?php

namespace App\Models\Affiliate;

use Illuminate\Database\Eloquent\Model;

class AffiliateSession extends Model
{
    //
    protected $table = 'affiliate_sessions';
    protected $guard = [
      'id',
    ];
    protected $fillable = [
      'client_ip',
      'session',
      'url',
    ];
}
