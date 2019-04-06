<?php

namespace Nepchure\Test\Services;

use Themosis\Facades\Route;
use Themosis\Foundation\ServiceProvider;

class RoutingService extends ServiceProvider
{
    /**
     * Register plugin routes.
     * Define a custom namespace.
     */
    public function register()
    {
        Route::group([
            'namespace' => 'Nepchure\Test\Controllers'
        ], function () {
            require themosis_path('plugin.nepchure.test.resources').'routes.php';
        });
    }
}