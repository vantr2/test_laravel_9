<?php

namespace Core\Frontend;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class FrontendServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $vendor = 'core';

    /**
     * @var string
     */
    protected $package = 'frontend';

    protected $namespace = __NAMESPACE__ . '\App\Http\Controllers';

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        Log::info('[FrontendServiceProvider] booted');
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'v-' . $this->package);

        View::share('layoutName', 'desktop');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
