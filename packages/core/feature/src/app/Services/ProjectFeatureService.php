<?php

namespace Core\Feature\app\Services;

/**
 * Class TestService
 * @package Core\Report\App\Services
 */
class ProjectFeatureService
{
    private ?array $activeFeatureKeys = null;
    // ... constructor, inject ProjectConfigService

    /**
     * Lấy danh sách các feature key đang active cho dự án này.
     * Dữ liệu được cache vĩnh viễn và chỉ xóa khi có thay đổi.
     */
    public function getActiveFeatureKeys(): array
    {
        return ['report', 'another_feature']; // Giả sử đây là kết quả từ bảng pivot

    }
}
