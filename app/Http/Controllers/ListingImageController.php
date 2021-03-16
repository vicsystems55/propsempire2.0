<?php

namespace App\Http\Controllers;

use App\ListingImage;
use Illuminate\Http\Request;
use Auth;

class ListingImageController extends Controller
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
    public function upload_pix(Request $request)
    {
        
        $image = $request->file('file');

        $listing_id = $request->listing_id;
        $listing_slug = $request->listing_slug;

        $newname = rand(233,9000).'.'.$image->getClientOriginalExtension();

        $image->move(public_path('listing_images'), $newname);
       
            $upload = ListingImage::Create([
                'listing_slug' => $listing_slug,
                'listing_id' => $listing_id,
                'user_id' => Auth::id(),
                'img_path' => $newname,
                'order' => 2
                
            ]);

        return $upload;


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ListingImage  $listingImage
     * @return \Illuminate\Http\Response
     */
    public function show(ListingImage $listingImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ListingImage  $listingImage
     * @return \Illuminate\Http\Response
     */
    public function edit(ListingImage $listingImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ListingImage  $listingImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListingImage $listingImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ListingImage  $listingImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListingImage $listingImage)
    {
        //
    }
}
