@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1>Reservar habitación en {{ $hotel->nombre }}</h1>
        <div>
            <h5>Tipo: {{ $habitacion->tipo }}</h5>
            <p>Número de habitación: {{ $habitacion->numero }}</p>
            <p>Disponible: {{ $habitacion->disponible ? 'Sí' : 'No' }}</p>
            <p>Precio por día: ${{ $habitacion->precio }}</p>
        </div>
        <form method="POST" action="{{ route('reservar.store') }}">
            @csrf
            <input type="hidden" name="habitacion_id" value="{{ $habitacion->id }}">
            <input type="hidden" id="costo_total" name="costo_total">
            <div class="form-group">
                <label for="fecha_inicio">Fecha de inicio:</label>
                <input type="date" id="fecha_inicio" name="fecha_inicio" class="form-control">
            </div>
            <div class="form-group">
                <label for="fecha_fin">Fecha de salida:</label>
                <input type="date" id="fecha_fin" name="fecha_fin" class="form-control">
            </div>
            <div class="form-group">
                <label for="total">Total a pagar:</label>
                <p id="total"></p>
            </div>
            <button type="submit" class="btn btn-primary">Reservar</button>
        </form>
    </div>
</div>
<script>
    const precioPorDia = {{ $habitacion->precio }};
    const fechaInicio = document.getElementById('fecha_inicio');
    const fechaFin = document.getElementById('fecha_fin');
    const total = document.getElementById('total');
    const costoTotal = document.getElementById('costo_total');

    function calcularTotal() {
        const inicio = new Date(fechaInicio.value);
        const fin = new Date(fechaFin.value);
        const dias = (fin - inicio) / (1000 * 60 * 60 * 24);
        const costo = dias * precioPorDia;
        total.textContent = '$' + costo.toFixed(2);
        costoTotal.value = costo;
    }

    fechaInicio.addEventListener('change', calcularTotal);
    fechaFin.addEventListener('change', calcularTotal);
</script>
@endsection
