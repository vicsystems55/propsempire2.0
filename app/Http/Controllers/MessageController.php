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
            '_from_name' => $request->_from_name,
            '_from_phone' => $request->_from_phone,
            '_from_email' => $request->_from_email,
            'prop_slug' => $request->slug,
            'body' => $request->body
        ],[
            '_from_name' => $request->_from_name,
            '_from_phone' => $request->_from_phone,
            '_from_email' => $request->_from_email,
            '_to' => $request->_to,
            'prop_slug' => $request->slug,
            '_to_name' => $request->_to_name,
            'title' => 'Request',
            'body' => $request->body,
          
            ]);

            $listing = Listing::where('slug', $request->slug)->first();

            Notification::Create([
                'user_id' => $request->_to,
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
