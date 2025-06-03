<?php

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    $keys = Redis::connection('sentinel')->keys('*');
    $value = Redis::connection('sentinel')->get('kienlt');
    $value2 = Redis::connection('sentinel')->get('test2');
    dump($value);
    dump($value2);
    dd($keys);
    return view('welcome');
});
