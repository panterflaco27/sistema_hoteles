<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;

class HotelController extends Controller
{
    //
    public function mostrarHabitaciones($hotelId){
        $habitaciones = Habitacion::where('hotel_id', $hotelId)->get();
        return view('/hotelVA', compact('habitaciones'));
    }
}

