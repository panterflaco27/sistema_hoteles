<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class recargaController extends Controller
{
    public function showform(){
        return view('recargar');
    }

    public function recargar(Request $request)
    {
        /** @var \App\Models\User $user **/
        $user = auth()->user();
        $user->fondos += $request->input('monto');
        $user->save();

        return redirect('/home')->with('success', 'Recarga de cartera exitosa');
    }
}
