<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Habitacion;
use App\Models\Hotel;
use Illuminate\Support\Facades\Auth;
use App\Models\reservacion;



class reservacionController extends Controller
{
    public function reservar($id){
        
        $habitacion = Habitacion::find($id);
        $hotel = $habitacion->hotel; // Asegúrate de tener una relación en tu modelo de Habitacion para obtener el hotel

        return view('reservar', ['habitacion' => $habitacion, 'hotel' => $hotel]);
    }

    public function store(Request $request){
        $request->validate([
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
        ]);

        // Obtiene los fondos del usuario
        $user = Auth::user();
        $fondos = $user->fondos;

        // Obtiene el costo total de la reserva desde el formulario
        $costoTotal = $request->input('costo_total');

        switch ($costoTotal){
            case ($costoTotal > $user->fondos):
                return back()->withErrors([
                    'fondos' => 'No tienes suficientes fondos para realizar esta reserva.'
                ]);
            case ($costoTotal == $user->fondos):
                $user->fondos = 0;
                $user->save();
                $habitacion = Habitacion::find($request->input('habitacion_id'));
                // Crea un nuevo registro en la tabla de reservaciones
                $reservacion = new reservacion;
                $reservacion->id_usuario = $user->id;
                $reservacion->id_hotel = $habitacion->hotel->id;
                $reservacion->id_habitacion = $habitacion->id;
                $reservacion->fecha_inicio = $request->input('fecha_inicio');
                $reservacion->fecha_salida = $request->input('fecha_fin');
                $reservacion->montocobro = $costoTotal;
                $reservacion->save();

                 return redirect('/home');
            case ($costoTotal < $user->fondos):
                $user->fondos = ($user->fondos - $costoTotal);
                $user->save();
                $habitacion = Habitacion::find($request->input('habitacion_id'));
                // Crea un nuevo registro en la tabla de reservaciones
                $reservacion = new reservacion;
                $reservacion->id_usuario = $user->id;
                $reservacion->id_hotel = $habitacion->hotel->id;
                $reservacion->id_habitacion = $habitacion->id;
                $reservacion->fecha_inicio = $request->input('fecha_inicio');
                $reservacion->fecha_salida = $request->input('fecha_fin');
                $reservacion->montocobro = $costoTotal;
                $reservacion->save();

                return redirect('/home');
            break;
        }

    }

}
