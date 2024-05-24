@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Habitaciones del {{ $hotel->nombre }}</h1>
        <ul>
            @foreach ($habitaciones as $habitacion)
            <li class="list-group-item {{ $habitacion->disponible ? 'disponible' : 'no-disponible' }}">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h5>tipo: {{ $habitacion->tipo }} </h5>
                        <p>Número de habitación: {{ $habitacion->numero }}</p>
                        <p>Disponible: {{ $habitacion->disponible ? 'Sí' : 'No' }}</p>
                        <p>Precio: ${{ $habitacion->precio }}</p>
                    </div>
                    @if($habitacion->disponible)
                        <a href="{{ route('reservar', ['id' => $habitacion->id]) }}" class="btn btn-success">Reservar</a>
                    @else
                        <button class="btn btn-danger" type="button" disabled>No disponible</button>
                    @endif
                </div>
            </li>
        @endforeach
        </ul>
    </div>
</div>
@endsection