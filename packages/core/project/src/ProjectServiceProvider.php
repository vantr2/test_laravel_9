<?php

namespace Core\Project;

use Core\Report\ReportServiceProvider;
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
        //if
        $features =  [
                    'report' => 'Core\Report\ReportServiceProvider::class'
            ];

        if(config('features.enabled.report')) {
            foreach ($features as $key => $value ) {
                dd($value);
                if (class_exists($value)) {
                    $this->app->register($value);
                } else {
                    \Log::warning("Feature {$key} is enabled but class {$value} does not exist.");
                    dd('a');
                }

            }

        }
    }
}
