<?php

namespace Core\Permission;

use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
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
