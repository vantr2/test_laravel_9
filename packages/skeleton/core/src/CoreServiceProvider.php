<?php

namespace Skeleton\Core;

use Illuminate\Support\ServiceProvider;
use Skeleton\Core\Console\HelloCommand;
use Skeleton\Core\Console\Package\MakePackageCommand;

class CoreServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/packages.php',
            'packages'
        );
        $this->mergeConfigFrom(
            __DIR__ . '/../config/repositories.php',
            'repositories'
        );

        // Register commands, configs, bindings
        $this->commands([
            HelloCommand::class,
            MakePackageCommand::class,
        ]);
    }

    public function boot()
    {
        // Publish config, routes, views nếu cần
    }
}