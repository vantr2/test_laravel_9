<?php

use Core\Report\App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => []], function() {
    Route::get('/report', [ReportController::class, 'index']);
    Route::get('/report/list', [ReportController::class, 'list']);
});
