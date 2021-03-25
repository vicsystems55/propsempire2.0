<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();
Route::get('logout', 'QovexController@logout');

// Route::get('pages-login', 'QovexController@index');
// Route::get('pages-login-2', 'QovexController@index');
// Route::get('pages-register', 'QovexController@index');
// Route::get('pages-register-2', 'QovexController@index');
// Route::get('pages-recoverpw', 'QovexController@index');
// Route::get('pages-recoverpw-2', 'QovexController@index');
// Route::get('pages-lock-screen', 'QovexController@index');
// Route::get('pages-lock-screen-2', 'QovexController@index');
// Route::get('pages-404', 'QovexController@index');
// Route::get('pages-500', 'QovexController@index');
// Route::get('pages-maintenance', 'QovexController@index');
// Route::get('pages-comingsoon', 'QovexController@index');
// Route::post('login-status', 'QovexController@checkStatus');


// You can also use auth middleware to prevent unauthenticated users
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    // Route::get('{any}', 'QovexController@index');
});

Route::get('/choose', 'ChooseRoleController@index')->name('choose');

Route::get('/account_logout', 'RoutingController@logout')->name('account_logout');

// Laravel 5.1.17 and above
Route::post('/pay', 'PaymentController@redirectToGateway')->name('pay');

Route::get('/check_notifications', 'NotificationController@check')->name('check_notification');



Route::get('/create_subscription', 'MemberSubscriptionController@create_subscription')->name('create_subscription');

Route::post('/create_listing', 'ListingController@create_listing')->name('create_listing');

Route::get('/get_monthly_report', 'ListingController@get_monthly_report')->name('get_monthly_report');

Route::get('/get_types', 'ListingController@get_types')->name('get_types');

Route::get('/get_subtypes', 'ListingController@get_subtypes')->name('get_subtypes');



Route::post('/upload_pix', 'ListingImageController@upload_pix')->name('upload_pix');

Route::get('/publish', 'ListingController@publish')->name('publish_listing');

Route::get('/unpublish', 'ListingController@unpublish')->name('unpublish_listing');

Route::post('/delete', 'ListingController@delete')->name('delete_listing');

Route::get('/make_premium', 'ListingController@make_premium')->name('make_premium');

Route::get('/unmake_premium', 'ListingController@unmake_premium')->name('unmake_premium');

Route::view('/sub_success', 'agents/sub_success')->name('sub_success');

Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

// route group for agents

Route::group(['middleware' => ['auth','agents'], 'prefix' => 'agents'], function(){

    Route::get('/', 'AgentsPageController@index')->name('agents');
    
    Route::get('/notifications', 'AgentsPageController@notifications')->name('agents.notifications');

    Route::get('/add_property', 'AgentsPageController@add_property')->name('agents.add_property');

    Route::get('/all_listings', 'AgentsPageController@all_listings')->name('agents.all_listings');

    Route::get('/free_listings', 'AgentsPageController@free_listings')->name('agents.free_listings');

    Route::get('/premium_listings', 'AgentsPageController@premium_listings')->name('agents.premium_listings');

    Route::get('/published_listings', 'AgentsPageController@published_listings')->name('agents.published_listings');

    Route::get('/unpublished_listings', 'AgentsPageController@unpublished_listings')->name('agents.unpublished_listings');

    Route::get('/expired_listings', 'AgentsPageController@expired_listings')->name('agents.expired_listings');

    Route::get('/inactive_listings', 'AgentsPageController@inactive_listings')->name('agents.inactive_listings');

    Route::get('/favourite_listings', 'AgentsPageController@favourite_listings')->name('agents.favourite_listings');

    Route::get('/single_listing/{slug}', 'AgentsPageController@single_listing')->name('agents.single_listing');

    Route::get('/all_plans', 'AgentsPageController@all_plans')->name('agents.all_plans');

    Route::get('/single_plan_details/{plan_name}', 'AgentsPageController@single_plan_details')->name('agents.single_plan_details');

    Route::get('/my_subscriptions', 'AgentsPageController@my_subscriptions')->name('agents.my_subscriptions');

    Route::get('/history', 'AgentsPageController@history')->name('agents.history');

    Route::get('/accounts', 'AgentsPageController@accounts')->name('agents.accounts');

    Route::get('/messages', 'AgentsPageController@messages')->name('agents.messages');

    Route::get('/notifications', 'AgentsPageController@notifications')->name('agents.notifications');



   
	
});

// route group for agencies

Route::group(['middleware' => ['auth','agency'], 'prefix' => 'agency'], function(){

    Route::get('/', 'AgencyPageController@index')->name('agency');
    
    Route::get('/notifications', 'AgencyPageController@notifications')->name('agency.notifications');

    Route::get('/add_property', 'AgencyPageController@add_property')->name('agency.add_property');

    Route::get('/all_listings', 'AgencyPageController@all_listings')->name('agency.all_listings');

    Route::get('/all_plans', 'AgencyPageController@all_plans')->name('agency.all_plans');

    Route::get('/my_subscriptions', 'AgencyPageController@my_subscriptions')->name('agency.my_subscriptions');

    Route::get('/history', 'AgencyPageController@history')->name('agency.history');

    Route::get('/accounts', 'AgencyPageController@accounts')->name('agency.accounts');

    Route::get('/messages', 'AgencyPageController@messages')->name('agency.messages');

    Route::get('/notifications', 'AgencyPageController@notifications')->name('agency.notifications');
	
});


// route group for vendor

Route::group(['middleware' => ['auth','vendor'], 'prefix' => 'vendor'], function(){

    Route::get('/', 'VendorPageController@index')->name('vendor');

    Route::get('/notifications', 'VendorPageController@notifications')->name('vendor.notifications');

    Route::get('/all_plans', 'VendorPageController@all_plans')->name('vendor.all_plans');

    Route::get('/messages', 'VendorPageController@messages')->name('vendor.messages');

    Route::get('/notifications', 'VendorPageController@notifications')->name('vendor.notifications');

	
});


// route group for admin

Route::group(['middleware' => ['auth','admin'], 'prefix' => 'admin'], function(){

    Route::get('/', 'AdminPageController@index')->name('admin');

    Route::get('/notifications', 'AdminPageController@notifications')->name('admin.notifications');

    Route::get('/add_property', 'AdminPageController@add_property')->name('admin.add_property');

    Route::get('/all_listings', 'AdminPageController@all_listings')->name('admin.all_listings');

    Route::get('/all_plans', 'AdminPageController@all_plans')->name('admin.all_plans');

    Route::get('/messages', 'AdminPageController@messages')->name('admin.messages');

    Route::get('/notifications', 'AdminPageController@notifications')->name('admin.notifications');

	
});