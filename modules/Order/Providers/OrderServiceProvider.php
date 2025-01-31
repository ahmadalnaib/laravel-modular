<?php
namespace Modules\Order\Providers;

use Illuminate\Routing\Route;
use Illuminate\Support\ServiceProvider;
use Modules\Order\Providers\RouteServiceProvider;

class OrderServiceProvider extends ServiceProvider
{

    public function boot() : void
    {
       $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
       $this->mergeConfigFrom(__DIR__ . '/../config.php', 'order');
       $this->app->register(RouteServiceProvider::class);
       
    }


}