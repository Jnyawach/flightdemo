<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminAirlineController;
use App\Http\Controllers\Admin\AdminPlaneController;
use App\Http\Controllers\Admin\AdminAirportController;
use App\Http\Controllers\Admin\AdminJourneyController;
use App\Http\Controllers\Admin\AdminController;
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

Route::group([], function(){
    Route::resource('admin/journey',AdminJourneyController::class);
    Route::resource('admin/airline',AdminAirlineController::class);
    Route::resource('admin/planes',AdminPlaneController::class);
    Route::resource('admin/airports',AdminAirportController::class);
    Route::resource('admin',AdminController::class);
});
