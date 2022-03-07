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
    return view('welcome');
});
Route::get('/home', function () {
    return view('frontend/home');
});
Route::get('/dashboard', function () {
    return view('Admin/dashboard');
});
Route::get('/admin', function () {
    return view('Admin/users_details');
});
Route::get('/orders', function () {
    return view('Admin/orders');
});
Route::get('/profile', function () {
    return view('Admin/profile');
});
// Route::get('/manage_hotels', function () {
//     return view('Admin/manage_hotels');
// });
// Route::get('/manage_trips', function () {
//     return view('Admin/manage_trips');
// });
Route::get('/manage_trips', 'App\Http\Controllers\UploadtripController@index');
Route::get('/delete_trips/{trip_id}', 'App\Http\Controllers\UploadtripController@destroy');
Route::get('/edit_trips/{trip_id}', 'App\Http\Controllers\UploadtripController@edit');
Route::put('/update_trips/{trip_id}', 'App\Http\Controllers\UploadtripController@update');
Route::get('/manage_vehicals', function () {
    return view('Admin/manage_vehicals');
});
Route::get('/trips', function () {
    return view('frontend/trips');
});
Route::get('/about-us', function () {
    return view('frontend/aboutus');
});
Route::get('/contact-us', function () {
    return view('frontend/contactus');
});
Route::get('/stays', function () {
    return view('frontend/stays');
});
Route::get('/rentals', function () {
    return view('frontend/rentals');
});
Route::get('/food-blogs', function () {
    return view('frontend/foodblogs');
});
Route::get('/honey-moon', function () {
    return view('frontend/honeymoon');
});
Route::get('/locations', function () {
    return view('frontend/locations');
});
Route::get('/guidelines', function () {
    return view('frontend/guidelines');
});
Route::get('/discover-more', function () {
    return view('frontend/discover-more');
});
Route::get('/card-view', function () {
    return view('frontend/cardview');
});
Route::get('/agencysignup', function () {
    return view('frontend/agencysignup');
});
Route::get('/usersignup', function () {
    return view('frontend/usersignup');
});
Route::get('/vehiclesignup', function () {
    return view('frontend/vehiclesignup');
});
Route::get('/hotelsignup', function () {
    return view('frontend/hotelsignup');
});
Route::match(['get', 'post'], '/botman', 'BotManController@handle');
// Route::resource('/manual_trip', UploadtripController::class);
Route::post('/create', 'App\Http\Controllers\UploadtripController@store');

Route::resource('hotelbooking', hotelController::class);

Route::post('/create_hotelbooking', 'App\Http\Controllers\hotelController@store');
Route::get('/manage_hotels', 'App\Http\Controllers\hotelController@index');
Route::get('/delete_hotels/{hotel_id}', 'App\Http\Controllers\hotelController@destroy');
Route::get('/edit_hotels/{hotel_id}', 'App\Http\Controllers\hotelController@edit');