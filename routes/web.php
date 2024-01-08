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

Route::get('/', function(){
    return view('welcome');
});

Route::get('/bind', 'Web\SiteController@request');
Route::get('/response', 'Web\SiteController@response')->name('response');
Route::get('/response/redirect/{reason}', 'Web\SiteController@responseRedirect')->name('response.redirect');
// Route::get('/bind', 'App\Http\Controllers\SiteController@bind');

Route::get('/info', function(){
    dd("informacje");
});


