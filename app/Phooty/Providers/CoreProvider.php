<?php

namespace App\Phooty\Providers;

use App\Phooty\Simulation\EventLoop;
use Illuminate\Support\ServiceProvider;

class CoreProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(EventLoop::class, function () {
            return new EventLoop();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
