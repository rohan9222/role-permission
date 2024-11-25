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
    {
        // Publish routes
        $this->publishes([
            __DIR__ . '/../routes/web.php' => base_path('routes/vendor/library-web.php'),
        ], 'library-routes');
    }
}
