<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/all_listings', 'Api\ListingController@all_listings');

Route::post('/single_listing', 'Api\ListingController@single_listing');


Route::post('/search', 'Api\ListingController@search');

Route::get('/like/{slug}', 'Api\ListingController@single_listing');
