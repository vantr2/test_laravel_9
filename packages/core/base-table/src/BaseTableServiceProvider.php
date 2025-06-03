<?php

namespace Core\BaseTable;

use Illuminate\Support\ServiceProvider;

class BaseTableServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Đăng ký binding, config, helper ở đây
    }

    public function boot(): void
    {
        // Load route, config, view, migration nếu cần
    }
}
