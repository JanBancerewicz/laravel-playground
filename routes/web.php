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
})->name('index');


Route::get('/test', 'Web\SiteController@test')->name('test');
Route::get('/db-test2', function(){
    
    return dd(DB::connection()->getPdo());
});

Route::get('/db-test', 'Web\SiteController@getall');

Route::post('/test', 'Web\SiteController@store')->name('test.store');

// Route::post('/test', function(Request $request){
//     return $request->all();
// })->name('test.store');


Route::get('/form', 'Web\SiteController@form')->name('form');

Route::post('/form', function(Request $request){
    return $request->input();
})->name('form');

Route::get('/bind', 'Web\SiteController@request')->name('bind');
Route::get('/view', 'Web\SiteController@view')->name('view');
Route::get('/response', 'Web\SiteController@response')->name('response');
Route::get('/response/redirect/{reason}', 'Web\SiteController@responseRedirect')->name('response.redirect');
// Route::get('/bind', 'App\Http\Controllers\SiteController@bind');

Route::get('/session',function(Request $request){

    if(!session()->has('username'))
    {
        session(['username'=> 'new_user']);
    }else{
        session(['username'=> 'old_user']);
    }
    // session()->flush();

    return session()->all();
});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
