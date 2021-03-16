<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscriptionPlan extends Model
{
    //
    protected $guarded = [];

    public function members_subscriptions()
    {
        
        return $this->hasMany('App\MemberSubscription', 'subscription_plan_id', 'id');
    }
}
