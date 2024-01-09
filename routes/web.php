<?php

use Illuminate\Http\Request;
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

Route::get('/form', 'Web\SiteController@form');

Route::post('/form', function(Request $request){
    return $request->input();
});

Route::get('/bind', 'Web\SiteController@request');
Route::get('/view', 'Web\SiteController@view');
Route::get('/response', 'Web\SiteController@response')->name('response');
Route::get('/response/redirect/{reason}', 'Web\SiteController@responseRedirect')->name('response.redirect');
// Route::get('/bind', 'App\Http\Controllers\SiteController@bind');

Route::get('/info', function(){
    dd("informacje");
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
