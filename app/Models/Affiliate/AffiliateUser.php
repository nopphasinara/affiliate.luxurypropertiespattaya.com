<?php

namespace App\Models\Affiliate;

use Illuminate\Database\Eloquent\Model;

class AffiliateUser extends Model
{
    //
    protected $table = 'affiliate_users';
    protected $fillable = [
      'name', 'email', 'password',
    ];
    protected $hidden = [
      'password',
    ];
}
