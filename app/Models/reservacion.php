<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservacion extends Model
{
    use HasFactory;

    protected $table = 'reservaciones'; // Nombre de la tabla

    protected $fillable = [
        'id_usuario',
        'id_hotel',
        'id_habitacion',
        'fecha_inicio',
        'fecha_salida',
        'montocobro',
    ]; 

    // Relación con el modelo User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    // Relación con el modelo Hotel
    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'id_hotel');
    }

    // Relación con el modelo Habitacion
    public function habitacion()
    {
        return $this->belongsTo(Habitacion::class, 'id_habitacion');
    }
}
