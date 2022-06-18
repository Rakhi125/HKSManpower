<?php

namespace HKSManpower\AutomobileTheme\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Event::listen(
            'bagisto.shop.products.view.after',
            'HKSManpower\AutomobileTheme\Http\Controllers\Shop\AutomobileThemeController@increaseProductViewCount'
        );
    }
}
