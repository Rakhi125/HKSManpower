<?php

Route::group([
        'prefix'        => 'admin/automobiletheme',
        'middleware'    => ['web', 'admin']
    ], function () {

        Route::get('', 'HKSManpower\AutomobileTheme\Http\Controllers\Admin\AutomobileThemeController@index')->defaults('_config', [
            'view' => 'automobiletheme::admin.index',
        ])->name('admin.automobiletheme.index');

        Route::get('/seed-category', 'HKSManpower\AutomobileTheme\Http\Controllers\Admin\AutomobileThemeController@createBulkCategories')
            ->name('admin.automobiletheme.seed-category');
});