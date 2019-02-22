<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurnoServicio extends Model
{
    //
    protected $table = 'turno_servicios';

    public function sucursal()
    {
        return $this->belongsTo('App\Sucursal');
    }

    public function servicio()
    {
        return $this->belongsTo('App\TipoServicio');
    }
}
