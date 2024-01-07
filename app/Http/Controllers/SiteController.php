<?php

namespace App\Http\Controllers;

// use App\Services\PayMe;
use App\Contracts\PaymentGateway;

class SiteController extends Controller
{
    public function bind(PaymentGateway $paymentGateway)
    {
        $paymentGateway->pay();
    }
}
