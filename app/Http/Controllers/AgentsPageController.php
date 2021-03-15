<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\SubscriptionPlan;

use App\Listing;

use App\Message;

use App\MemberSubscription;

use Auth;


class AgentsPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $my_subscription = MemberSubscription::where('agent_id', Auth::user()->id)->get();

        $my_messages = Message::where('_to', Auth::user()->id)->get();

        $my_listings = Listing::where('posted_by', Auth::user()->id)->where('status', 'active')->first();




        return view('agents.dashboard',[
            'my_subscription' => $my_subscription,
            'my_listings' => $my_listings,
            'my_messages' => $my_messages
        ]);
    }
    


    public function notifications()
    {
        //

        return view('agents.notifications',[

        ]);
    }

    public function add_property()
    {
        //

        return view('agents.add_property',[

        ]);
    }

    public function all_listings()
    {
        //

        return view('agents.all_listings',[

        ]);
    }

    public function free_listings()
    {
        //

        return view('agents.free_listings',[

        ]);
    }

    public function premium_listings()
    {
        //

        return view('agents.premium_listings',[

        ]);
    }

    public function published_listings()
    {
        //

        return view('agents.published_listings',[

        ]);
    }

    public function unpublished_listings()
    {
        //

        return view('agents.unpublished_listings',[

        ]);
    }

    public function expired_listings()
    {
        //

        return view('agents.expired_listings',[

        ]);
    }

    public function inactive_listings()
    {
        //

        return view('agents.inactive_listings',[

        ]);
    }

    public function favourite_listings()
    {
        //

        return view('agents.favourite_listings',[

        ]);
    }


    public function single_listing($slug)
    {
        //

        // $listing_details = Listing::where('slug', $slug)->first();

        return view('agents.single_listing_details',[
                // 'listing_details' => $listing_details
        ]);
    }

    public function all_plans()
    {
        //

        $all_plans = SubscriptionPlan::get();

        return view('agents.all_plans',[
            'all_plans' => $all_plans
        ]);
    }

    public function single_plan_details($plan_name)
    {
        //

        $single_plan = SubscriptionPlan::where('plan_name', $plan_name)->first();

        return view('agents.single_plan_details',[
            'single_plan' => $single_plan
        ]);
    }

    public function my_subscriptions()
    {
        //

        return view('agents.my_subscriptions',[

        ]);
    }

    public function history()
    {
        //

        return view('agents.history',[

        ]);
    }

    public function accounts()
    {
        //

        return view('agents.accounts',[

        ]);
    }

    public function messages()
    {
        //

        return view('agents.messages',[

        ]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
