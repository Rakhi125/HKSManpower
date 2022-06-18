<?php

Route::group([
        'prefix'     => 'automobiletheme',
        'middleware' => ['web', 'theme', 'locale', 'currency']
    ], function () {

        Route::get('/trending-products', 'HKSManpower\AutomobileTheme\Http\Controllers\Shop\AutomobileThemeController@getTrendingProducts')
            ->name('shop.automobiletheme.trending-products');

});