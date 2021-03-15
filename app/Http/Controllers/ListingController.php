<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

use App\Listing;

use Auth;


use Illuminate\Http\Request;

class ListingController extends Controller
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
