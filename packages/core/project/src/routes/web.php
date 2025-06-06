<?php

use Core\Project\App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => []], function() {
    Route::get('/project', [ProjectController::class, 'index']);
    Route::get('/project/list', [ProjectController::class, 'list']);
});
