<?php

use App\Http\Controllers\CacheController;
use Illuminate\Support\Facades\Route;
use Laravel\Octane\Facades\Octane;

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
    return view('welcome');
});

Route::get('/cache', [CacheController::class, 'showForm']);
Route::post('/cache/put', [CacheController::class, 'put']);
Route::post('/cache/get', [CacheController::class, 'get']);
