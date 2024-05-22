@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Habitaciones del Hotel</h1>
        <ul>
            @foreach($habitaciones as $habitacion)
                <li>
                    Tipo: {{ $habitacion->tipo }}<br>
                    Disponible: {{ $habitacion->disponible ? 'Sí' : 'No' }}<br>
                    Precio: ${{ $habitacion->precio }}
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection