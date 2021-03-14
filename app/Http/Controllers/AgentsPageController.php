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

    public function all_plans()
    {
        //

        return view('agents.all_plans',[

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
