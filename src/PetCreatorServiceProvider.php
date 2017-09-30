<?php

namespace Zelindm\PetCreator;

use Illuminate\Support\ServiceProvider;

class PetCreatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__ . '/config/objects.php' => config_path('objects.php')]);
    }

    public function register()
    {
        $this->app->bind('petcreator', function() {
            return new PetCreator();
        });
    }
}