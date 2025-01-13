<?php

use App\Models\Order;
use Modules\Order\Providers\OrderServiceProvider;

return [
    App\Providers\AppServiceProvider::class,
    OrderServiceProvider::class,
];
