<?php

namespace App\Phooty\Providers;

use App\Phooty\Contracts\Footy;
use App\Phooty\Entities\Sherrin;
use App\Phooty\Exceptions\PhootyException;
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

        $this->app->singleton(Footy::class, function () {
            $className = config('phooty.footyClassName', Sherrin::class);
            if (!class_exists($className) || !isset(class_implements($className)[Footy::class])) {
                throw new PhootyException(
                    'Invalid Footy class!'
                );
            }
            return new $className();
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
