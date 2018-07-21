<?php

namespace App\Models\Affiliate;

use Illuminate\Database\Eloquent\Model;
//
use App\Models\Affiliate\AffiliateLink;
use App\Models\Affiliate\AffiliateSession;

class AffiliateTracking extends Model
{
    //
    public static function boot()
    {
      $today = date('Y-m-d H:i:s', time());
      $next_day = time() + (60 * 60 * 24);

      $aid = request('aid', '');
      if ($aid) {
        $user = \App\User::where('id', '=', $aid)->first();

        if ($user) {
          if ($aid) setcookie('affiliate_aid', $aid, $next_day, '/');

          $client_ip = request()->getClientIp();
          $landing_url = request()->getUri();

          $campaign_exists = AffiliateLink::where('uri', '=', $landing_url)->orWhere('uri', '=', basename($landing_url))->first();
          echo "<pre>"; print_r($campaign_exists); echo "</pre>";

          $session = request()->cookie('luxury_properties_pattaya_session');

          $exists = AffiliateSession::where('client_ip', $client_ip)->where('created_at', '>=', $today)->first();
          if ($exists) {
            echo "<pre>"; print_r($exists); echo "</pre>";

            $session_id = $exists->id;
            $session = $exists->session;
          } else {
            $session_id = AffiliateSession::insertGetId([
              'client_ip' => $client_ip,
              'url' => $landing_url,
              'session' => $session,
            ]);

            if (!$session_id) {
              //
            }
          }

          setcookie('affiliate_tracking', $session_id . ' ' . $client_ip . ' ' . $session, $next_day, '/');
        }
      }
    }
}
