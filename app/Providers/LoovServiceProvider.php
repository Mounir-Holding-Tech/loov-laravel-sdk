<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Loovpayment\LaravelSdk\LoovService;

class LoovServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('payment', function ($app) {
            return new LoovService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
