<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\PlantController;
use App\Spiders\PlantSpider;
use Illuminate\Support\Facades\Route;
use RoachPHP\Roach;
use Symfony\Component\CssSelector\CssSelectorConverter;

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

    dd(Roach::collectSpider(PlantSpider::class));

    return view('welcome');

});
Route::get('plants', [PlantController::class, 'index'])->name('plants.index');
Route::resource('activities', ActivityController::class);
