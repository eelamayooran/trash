<?php

namespace MintPackages\Trash;

use Illuminate\Support\ServiceProvider;

class TrashServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/trash.php' => config_path('trash.php')
        ]);
    }

    public function register()
    {
        $this->app->singleton(Trash::class, function () {
            return new Trash();
        });
    }
}
