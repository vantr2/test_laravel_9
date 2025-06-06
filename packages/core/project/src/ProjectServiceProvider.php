<?php

namespace Core\Project;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ProjectServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $vendor = 'core';

    /**
     * @var string
     */
    protected $package = 'project';

    protected $namespace = __NAMESPACE__ . '\App\Http\Controllers';

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'v-' . $this->package);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
