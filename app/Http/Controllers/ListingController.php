<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use App\Listing;

use App\MemberSubscription;

use Auth;


use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function get_monthly_report()
    {
        $march_views = Listing::where('posted_by', Auth::id())->whereMonth('created_at', '3')->sum('views');
        $april_views = Listing::where('posted_by', Auth::id())->whereMonth('created_at', '4')->sum('views');
        $may_views = Listing::where('posted_by', Auth::id())->whereMonth('created_at', '5')->sum('views');
        $june_views = Listing::where('posted_by', Auth::id())->whereMonth('created_at', '6')->sum('views');
        $july_views = Listing::where('posted_by', Auth::id())->whereMonth('created_at', '7')->sum('views');
        $august_views = Listing::where('posted_by', Auth::id())->whereMonth('created_at', '8')->sum('views');
        $sep_views = Listing::where('posted_by', Auth::id())->whereMonth('created_at', '9')->sum('views');

        $views = array(
            $march_views,
            $april_views,
            $may_views,
            $june_views,
            $july_views,
            $august_views,
            $sep_views
        );

        
        

        return $views;
    }
    public function make_premium(Request $request)
    {
        //

        // dd($request);

        $listing = Listing::where('slug', $request->slug)->update([
            'premium' => '1'
        ]);

        // $listing_published = Listing::where('posted_by', Auth::id())->where('status', 'published')->get();

        // $my_subscription = MemberSubscription::with('subscription_plans')->where('agent_id', Auth::id())->first();


        return $listing;

        // return back()->with('msg', 'Done');
    }
    public function unmake_premium(Request $request)
    {
        //

        // dd($request);

        $listing = Listing::where('slug', $request->slug)->update([
            'premium' => '0'
        ]);

        // $listing_published = Listing::where('posted_by', Auth::id())->where('status', 'published')->get();

        // $my_subscription = MemberSubscription::with('subscription_plans')->where('agent_id', Auth::id())->first();


        return $listing;

        // return back()->with('msg', 'Done');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function publish(Request $request)
    {
        //

        // dd($request);

        $listing = Listing::where('slug', $request->slug)->update([
            'status' => 'published'
        ]);

        $listing_published = Listing::where('posted_by', Auth::id())->where('status', 'published')->get();

        // $my_subscription = MemberSubscription::with('subscription_plans')->where('agent_id', Auth::id())->first();


        return $listing_published->count();

        // return back()->with('msg', 'Done');
    }

    public function unpublish(Request $request)
    {
        //

        $listing = Listing::where('slug', $request->slug)->update([
            'status' => 'inactive'
        ]);

        $listing_published = Listing::where('posted_by', Auth::id())->where('status', 'published')->get();

        // $my_subscription = MemberSubscription::with('subscription_plans')->where('agent_id', Auth::id())->first();

        return $listing_published->count();
    }

    public function delete(Request $request)
    {
        //

        $listing = Listing::where('slug', $request->slug)->update([
            'status' => 'published'
        ]);

        $listing_published = Listing::where('posted_by', Auth::id())->where('status', 'published')->get();

        $my_subscription = MemberSubscription::with('subscription_plans')->where('agent_id', Auth::id())->first();

        return $listing;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create_listing(Request $request)
    {
        //

        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'location' => 'required'
         ]);

        //  dd($request->all());

         $listing = Listing::Create([
            'slug' =>  Str::random(7),
            'posted_by' => Auth::id(),
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'category_id' => $request->category_id,
            'type_id' => $request->type_id,
            'subtype_id' => $request->subtype_id,
            'bedrooms' => $request->bedrooms,
            'toilets' => $request->toilets,
            'bathrooms' => $request->bathrooms,
            'parking' => $request->parkings,
            'total_area' => $request->total_area,
            'covered_area' => $request->covered_area,
            'price' => $request->price,
            'discount' => $request->discount
            
         ]);

        return redirect('/agents/single_listing/'.$listing->slug);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $listing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $listing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $listing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Listing  $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $listing)
    {
        //
    }
}
