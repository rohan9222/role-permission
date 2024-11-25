<?php

namespace Rohan\Library\Providers;

use Illuminate\Support\ServiceProvider;

class LibraryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        // You can register bindings or configuration here if needed.
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // Load routes from the library's web.php
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
