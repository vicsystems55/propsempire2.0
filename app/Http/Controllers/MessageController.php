<?php

namespace App\Http\Controllers;

use App\Message;
use App\Listing;
use App\Notification;
use Illuminate\Http\Request;

class MessageController extends Controller
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
    public function store(Request $request)
    {
        //

        // $request->validate([
            
        // ]);

        $message = Message::updateOrCreate([
            'from_name' => $request->from_name,
            'from_phone' => $request->from_phone,
            'from_email' => $request->from_email,
            'prop_slug' => $request->slug,
            'body' => $request->body
        ],[
            'from_name' => $request->from_name,
            'from_phone' => $request->from_phone,
            'from_email' => $request->from_email,
            'to' => $request->to,
            'prop_slug' => $request->slug,
            'to_name' => $request->to_name,
            'title' => 'Request',
            'body' => $request->body,
          
            ]);

            $listing = Listing::where('slug', $request->slug)->first();

            Notification::Create([
                'user_id' => $request->to,
                'title' => 'Request Notice',
                'body' => 'You just received a request on a property: ' .$listing->title,
             ]);

        return $message;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
}
