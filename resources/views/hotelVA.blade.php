@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Habitaciones del Hotel</h1>
        <ul>
            @foreach($habitaciones as $habitacion)

            <li class="list-group-item {{ $habitacion->disponible ? 'disponible' : 'no-disponible' }}">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5>Tipo: {{ $habitacion->tipo }}</h5>
                        <p>Disponible: {{ $habitacion->disponible ? 'Sí' : 'No' }}</p>
                        <p>Precio: ${{ $habitacion->precio }}</p>
                    </div>
                    @if($habitacion->disponible)
                        <button class="btn btn-success" type="button">Reservar</button>
                    @else
                        <button class="btn btn-danger" type="button" disabled>No disponible</button>
                    @endif
                </div>
            </li>
                <!--li>
                    <li class="{{ $habitacion->disponible ? 'disponible' : 'no-disponible' }}">
                    Tipo: {{ $habitacion->tipo }}<br>
                    Disponible: {{ $habitacion->disponible ? 'Sí' : 'No' }}<br>
                    Precio: ${{ $habitacion->precio }}
                </li>
                <style>
                    .disponible {
                        color: green;
                    }
                
                    .no-disponible {
                        color: red;
                    }
                </style-->
            @endforeach
        </ul>
    </div>
</div>
@endsection