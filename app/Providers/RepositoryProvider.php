<?php

namespace App\Providers;

use App\Repositories\Color\ColorRepository;
use App\Repositories\Transport\TransportRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(TransportRepository::class, \App\Repositories\Transport\Eloquent::class);
        $this->app->bind(ColorRepository::class, \App\Repositories\Color\Eloquent::class);
    }
}
