<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TestController;

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
Route::controller(TestController::class)->prefix('admin')->group(function() {
    Route::get('test/home', 'home');
});

Route::get('/', function () {
    return view('welcome');
});
