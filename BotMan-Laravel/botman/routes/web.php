<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;
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

// Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::match(['GET', 'POST'], '/botman', [App\Http\Controllers\BotManController::class, 'handle']);

