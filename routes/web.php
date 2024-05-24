<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\reservacionController;
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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function (){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //rutas de recarga de dinero
    Route::get('recargar-cartera', 'App\Http\Controllers\recargaController@showform')->name('recargar-cartera');
    Route::post('recargar-cartera', 'App\Http\Controllers\recargaController@actualizarFondos')->name('home');
    
    Route::get('/reservar/{id}', 'App\Http\Controllers\reservacionController@reservar')->name('reservar');

    Route::post('/reservar', 'App\Http\Controllers\reservacionController@store')->name('reservar.store');

});




Route::get('/hotel/{hotel_id}/habitaciones', '\App\Http\Controllers\HotelController@habitaciones')->name('hotel.habitaciones');

