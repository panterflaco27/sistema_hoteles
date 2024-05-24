<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Habitacion;
use App\Models\Hotel;

class HotelController extends Controller
{

    public function habitaciones($hotel_id){
        $hotel = Hotel::find($hotel_id);
        $habitaciones = Habitacion::where('hotel_id', $hotel_id)->get();
        return view('hotelhabitaciones', compact('hotel', 'habitaciones'));
    }

}

