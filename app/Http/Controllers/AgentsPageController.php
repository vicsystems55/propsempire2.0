<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\SubscriptionPlan;

use App\Listing;

use App\Message;

use App\Category;

use App\Type;

use App\ListingSubType;

use App\Notification;

use App\ListingImage;

use App\MemberSubscription;

use Carbon\Carbon;

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

        $my_listings = Listing::where('posted_by', Auth::user()->id)->get();




        return view('agents.dashboard',[
            'my_subscription' => $my_subscription,
            'my_listings' => $my_listings,
            'my_messages' => $my_messages
        ]);
    }
    


    public function notifications()
    {
        //

        $my_notificaions = Notification::where('user_id', Auth::id())->paginate(2);

        return view('agents.notifications',[
            'my_notifications' => $my_notificaions
        ]);
    }

    public function add_property()
    {
        //

        $categories = Category::latest()->get();

        $types = Type::latest()->get();

        $subtypes = ListingSubType::latest()->get();



        return view('agents.add_property',[
            'categories' => $categories,
            'types' => $types,
            'subtypes' => $subtypes
        ]);
    }

    public function all_listings()
    {
        //

        $all_listings = Listing::where('posted_by', Auth::id())->with('categories')->with('types')->with('subtypes')->get();

        // dd($all_listings);

        return view('agents.all_listings',[
            'all_listings' => $all_listings
        ]);
    }

    public function free_listings()
    {
        //
        $free_listings = Listing::where('posted_by', Auth::id())->with('categories')->with('types')->with('subtypes')->where('status', 'inactive')->get();

        return view('agents.free_listings',[
            'free_listings' => $free_listings
        ]);
    }

    public function premium_listings()
    {
        //
        $premium_listings = Listing::where('posted_by', Auth::id())->with('categories')->with('types')->with('subtypes')->where('premium', '1')->get();

        return view('agents.premium_listings',[
            'premium_listings' => $premium_listings
        ]);
    }

    public function published_listings()
    {
        //
        $published_listings = Listing::where('posted_by', Auth::id())->with('categories')->with('types')->with('subtypes')->where('status', 'published')->get();

        return view('agents.published_listings',[
            'published_listings' => $published_listings
        ]);
    }

    public function unpublished_listings()
    {
        //
        $unpublished_listings = Listing::where('posted_by', Auth::id())->with('categories')->with('types')->with('subtypes')->where('status', 'inactive')->get();

        return view('agents.unpublished_listings',[
            'unpublished_listings' => $unpublished_listings
        ]);
    }

    public function expired_listings()
    {
        //
        $expired_listings = Listing::where('posted_by', Auth::id())->with('categories')->with('types')->with('subtypes')->where('status', 'inactive')->get();


        return view('agents.expired_listings',[
            'expired_listings' => $expired_listings
        ]);
    }

    public function inactive_listings()
    {
        //
        $inactive_listings = Listing::where('posted_by', Auth::id())->with('categories')->with('types')->with('subtypes')->where('status', 'inactive')->get();


        return view('agents.inactive_listings',[
            'inactive_listings' => $inactive_listings
        ]);
    }

    public function favourite_listings()
    {
        //
        $favourite_listings = Listing::where('posted_by', Auth::id())->with('categories')->with('types')->with('subtypes')->where('status', 'inactive')->get();


        return view('agents.favourite_listings',[
            'favourite_listings' => $favourite_listings
        ]);
    }


    public function single_listing($slug)
    {
        //

        $single_listing = Listing::where('slug', $slug)->with('categories')->with('types')->with('subtypes')->first();

        $my_subscription = MemberSubscription::where('agent_id', Auth::id())->first();

        $listing_images = ListingImage::where('listing_slug', $slug)->latest()->get();

        return view('agents.single_listing_details',[
                
            'single_listing' => $single_listing,
            'my_subscription' => $my_subscription,
            'listing_images' => $listing_images
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
