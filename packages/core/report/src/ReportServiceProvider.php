<?php

namespace Core\Report;

use Core\Report\App\Services\ProjectFeatureService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ReportServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * @var string
     */
    protected $vendor = 'core';

    /**
     * @var string
     */
    protected $package = 'report';

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

    }
}
