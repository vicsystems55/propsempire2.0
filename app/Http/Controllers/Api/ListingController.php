<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

use App\Listing;

use App\Category;

use App\Type;

use App\ListingSubType;

use App\MemberSubscription;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all_listings()
    {
        //

        $all_listings = Listing::with('images')->where('status', 'published')->latest()->get();

        return $all_listings;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function single_listing(Request $request)
    {
        //

        $single_listing = Listing::with('images')->where('slug', $request->slug)->where('status', 'published')->first();

        Listing::find($single_listing->id)->increment('views');

        return $single_listing;
    }

    public function search(Request $request)
    {
        //

        $results = Listing::where('title','like', $request->key.'%')->orwhere('description','like', $request->key.'%')->orwhere('location','like', $request->key.'%')->get();

        // Listing::find($single_listing->id)->increment('views');

        return $results;
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
