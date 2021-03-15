<?php

namespace App\Http\Controllers;

use App\MemberSubscription;
use App\Notification;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Paystack;
use Carbon\Carbon;
use Illuminate\Support\Str;

class MemberSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create_subscription()
    {
        //

        $paymentDetails = Paystack::getPaymentData();

        $duration = (($paymentDetails['data']['amount'])/100)/$paymentDetails['data']['metadata']['subscription_fee'];

        $expiration_date = Carbon::now()->addMonth($duration);

        $subscription_plan_id = $paymentDetails['data']['metadata']['subscription_plan_id'];

        $plan_name = $paymentDetails['data']['metadata']['plan_name'];

        $agent_id = $paymentDetails['data']['metadata']['agent_id'];

        $slug = Str::random(5);

        $total_cost = $paymentDetails['data']['amount'];

         $sub = MemberSubscription::updateOrCreate([
            'agent_id' => $agent_id
         ],[
            'subscription_plan_id' => $subscription_plan_id,
            'plan_name' => $plan_name,
            'agent_id' => $agent_id,
            'slug' => $slug,
            'duration' => $duration,
            'subscription_plan_cost' => $paymentDetails['data']['metadata']['subscription_fee'],
            'total_cost' => (($paymentDetails['data']['amount'])/100),
            'expiry_date' => $expiration_date
         ]);

        

         Notification::Create([
            'user_id' => $agent_id,
            'title' => 'Subscription Notice',
            'body' => 'You just successfully subscribed for '.$plan_name
         ]);

      

      


        

        return redirect('/sub_success');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MemberSubscription  $memberSubscription
     * @return \Illuminate\Http\Response
     */
    public function show(MemberSubscription $memberSubscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MemberSubscription  $memberSubscription
     * @return \Illuminate\Http\Response
     */
    public function edit(MemberSubscription $memberSubscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MemberSubscription  $memberSubscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MemberSubscription $memberSubscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MemberSubscription  $memberSubscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemberSubscription $memberSubscription)
    {
        //
    }
}
