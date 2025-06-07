<?php

namespace Core\Feature;

use Illuminate\Support\ServiceProvider;

class FeatureServiceProvider extends ServiceProvider
{
    /**
     * @var string
     */
    protected $vendor = 'core';

    /**
     * @var string
     */
    protected $package = 'feature';

    protected $namespace = __NAMESPACE__ . '\App\Http\Controllers';

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/feature.php', 'feature');
        $featureService = $this->app->make('Core\Feature\App\Services\ProjectFeatureService');

        // 1. Lấy ra danh sách 40 feature được "đăng ký" của dự án này
        $activeFeatureKeys = $featureService->getActiveFeatureKeys();
        // 2. Lấy "bản đồ tổng"
        $featureMap = config('feature', []);


        // 3. Chỉ lặp qua 40 feature đang active
        foreach ($activeFeatureKeys as $featureKey) {
            if (isset($featureMap[$featureKey]) && class_exists($featureMap[$featureKey])) {
                // 4. Load Service Provider tương ứng
                $this->app->register($featureMap[$featureKey]);
            }
        }

    }
}
