<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//rutas de recarga de dinero
Route::get('recargar-cartera', 'App\Http\Controllers\recargaController@showform')->name('recargar-cartera');
Route::post('recargar-cartera', 'App\Http\Controllers\recargaController@showform')->name('recargar-cartera.submit');

//rutas para las habitaciones
Route::get('/hotelVA',[HotelController::class, 'mostrarHabitaciones'])->name('hotelVA')->defaults('hotelId',1);
Route::get('/hotelBV',[HotelController::class, 'mostrarHabitaciones'])->name('hotelBV')->defaults('hotelId',2);
Route::get('/hotelCM',[HotelController::class, 'mostrarHabitaciones'])->name('hotelCM')->defaults('hotelId',3);