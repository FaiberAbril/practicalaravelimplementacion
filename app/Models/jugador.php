<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jugador extends Model
{
     protected $fillable=['idequipo','nombre','apellido', 'fecha_nacimiento', 'nacionalidad', 'posicion', 'numero_camiseta', 'fecha_contratacion', 'salario'];

    public function equipo(){
        return $this->belongsTo(equipo::class, 'idequipo');
    }
}
