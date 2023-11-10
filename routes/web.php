<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', function () {
    return view('dashboard');
});


Route::get('/loginportal', function () {
    return view('welcome');
});


Route::get('/login', 'App\Http\Controllers\AuthController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout')->name('logout');

Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');

Route::get('/clientdashboard', 'App\Http\Controllers\ClientDashboardController@index')->name('clientdashboard');
Route::get('/clientplc', 'App\Http\Controllers\PLCController@index')->name('clientplc');
Route::get('/clienthmi', 'App\Http\Controllers\HMIController@index')->name('clienthmi');
Route::get('/clientipc', 'App\Http\Controllers\IPCController@index')->name('clientipc');
Route::get('/clientec', 'App\Http\Controllers\ECController@index')->name('clientec');
Route::get('/clienthydraulic', 'App\Http\Controllers\HydraulicController@index')->name('clienthydraulic');
//clientpneumatics
Route::get('/clientpneumatics', 'App\Http\Controllers\PneumaticsController@index')->name('clientpneumatics');

Route::get('/superuser', function () {
    return view('superuser');
});