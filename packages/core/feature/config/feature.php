<?php

// config/master_feature_map.php
return [
    'report' => \Core\Report\ReportServiceProvider::class,
    // Feature riêng của Project A cũng có thể được quản lý ở đây
    // Hoặc được load bởi một provider riêng của project
    'project_a_special_report' => \Projects\ProjectA\SpecialReport\SpecialReportServiceProvider::class,
];
