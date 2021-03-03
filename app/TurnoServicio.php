<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurnoServicio extends Model
{
    //
    protected $table = 'turno_servicios';

    protected $fillable = ['cliente', 'telefono', 'email', 'fecha', 'modelo', 'dominio', 'servicio', 'sucursal', 'comentario', 'from'];
 
}
