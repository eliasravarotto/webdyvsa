<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurnoServicio extends Model
{
    //
    protected $table = 'turno_servicios';

    protected $fillable = ['cliente', 'telefono', 'email', 'fecha', 'modelo', 'dominio', 'servicio', 'sucursal', 'comentario', 'from'];


    public function scopeCliente($query, $cliente)
    {
        if (!is_null($cliente)) {
            return $query->where('cliente', 'like', '%'.$cliente.'%');
        }

        return $query;
    }

    public function scopeFrom($query, $from)
    {
        if (!is_null($from)) {
            return $query->where('from', $from);
        }

        return $query;
    }

    public function scopeEmail($query, $email)
    {
        if (!is_null($email)) {
            return $query->where('email', 'like', '%'.$email.'%');
        }

        return $query;
    }

    public function scopeTelefono($query, $telefono)
    {
        if (!is_null($telefono)) {
            return $query->where('telefono', 'like', '%'.$telefono.'%');
        }

        return $query;
    }
 
}
