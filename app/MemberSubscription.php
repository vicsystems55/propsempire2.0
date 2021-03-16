<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MemberSubscription extends Model
{
    //
    protected $guarded = [];

    public function subscription_plans()
    {
        
        return $this->hasMany('App\SubscriptionPlan', 'subscription_plan_id', 'id');
    }
}
