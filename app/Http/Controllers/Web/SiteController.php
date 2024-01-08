<?php

namespace App\Http\Controllers\Web;

// use App\Services\PayMe;
use App\Contracts\PaymentGateway;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class SiteController extends Controller
{
    // public function bind(PaymentGateway $paymentGateway)
    // {
    //     $paymentGateway->pay();
    // }

    public function request(Request $request){
        $name = $request->input('name', 'default_name');

        return $name;
    }

    public function response(){
        // return response('response', 200)
        // ->withHeaders([
        //     "Accept-Languages" => "pl-PL",
        //     "Laravel-app-version" => app()->version()
        //     ])
        //     ->cookie("Laravel-app-version", app()->version(), 5);

        // return redirect()->route('response.redirect', ['reason'=>'auth']);
        return redirect()->action('Web\SiteController@responseRedirect', ['reason'=>'auth']);
        // return redirect()->away('http://google.com');

    }

    public function responseRedirect(string $reason){
        // return redirect()->route('response.redirect');
        return "response redirect $reason";
    }
}
