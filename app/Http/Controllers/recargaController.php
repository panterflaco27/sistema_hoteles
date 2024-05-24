<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;



class recargaController extends Controller
{
    public function showform(){
        return view('recargar');
    }
    
    public function actualizarFondos(Request $request)
    {
        // Obtén el usuario autenticado
        $user = auth()->user();

        // Actualiza los fondos sumando el monto proporcionado en la solicitud
        $user->updateFondos($request->input('monto'));

        return redirect('/home')->with('success', 'Recarga de cartera exitosa');
    }
}
