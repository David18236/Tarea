<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehiculoModel extends Model
{
    protected $fillable = [
        'placa', 'marca', 'dueno'
    ];

    public function marca()
    {
        return $this->belongsTo('App\MarcaModel', 'marca', 'nombre');
    }

    public function dueno()
    {
        return $this->hasOne('App\PersonaModel', 'dueno', 'cedula');
    }

}