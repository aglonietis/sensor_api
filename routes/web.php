<?php

use App\Http\Controllers\Admin\SensorController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::prefix('/sensors')->group(function () {
    Route::get('/create', [SensorController::class, 'create'])->name('sensors.create');
    Route::post('/', [SensorController::class, 'store'])->name('sensors.store');
});
