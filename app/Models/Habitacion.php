<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;
    protected $fillable = ['hotel_id', 'numero', 'tipo', 'disponible', 'precio'];

    protected $table ='habitaciones';

    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }
}
