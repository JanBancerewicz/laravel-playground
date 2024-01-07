<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\PayMe;
use App\Contracts\PaymentGateway;

class CourseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            PaymentGateway::class,
            PayMe::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(PaymentGateway $paymentGateway): void
    {
        // dd($paymentGateway);
    }
}
