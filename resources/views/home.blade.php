@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>hoteles disponibles</h1>
        @foreach($hoteles as $hotel)
            @if($hotel->nombre === 'Hotel Vista Alegre')
                <a href="{{ route('hotel.habitaciones', ['hotel_id' => $hotel->id]) }}">
            @elseif($hotel->nombre === 'Hotel Buena Vista')
                <a href="{{ route('hotel.habitaciones', ['hotel_id' => $hotel->id]) }}">
            @elseif($hotel->nombre === 'Hotel Costa del Mar')
                <a href="{{ route('hotel.habitaciones', ['hotel_id' => $hotel->id]) }}">
            @endif
                <li>
                    <strong>{{ $hotel->nombre }}</strong><br>
                    Dirección: {{ $hotel->direccion }} <br>
                    Número de habitaciones: {{ $hotel->Nhabitaciones }}
                </li>
            </a>
        @endforeach
    </div>
</div>
@endsection
