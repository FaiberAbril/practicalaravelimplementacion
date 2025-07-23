<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    protected $fillable = ['nombre', 'ciudad', 'pais', 'fundacion', 'liga'];

    public function jugador(){
        return $this->hasMany(jugador::class);

    }
}
