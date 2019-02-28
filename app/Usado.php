<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usado extends Model
{
     protected $table = 'usados';


 	public function scopeMarca($query, $marca)
    {
        if (!is_null($marca)) {
            return $query->where('marca', 'like', '%'.$marca.'%');
        }

        return $query;
    }

    public function scopeColor($query, $color)
    {
        if (!is_null($color)) {
            return $query->where('color', $color);
        }

        return $query;
    }

    public function scopeAnio($query, $anio)
    {
        if (!is_null($anio)) {
            return $query->where('anio', '=', $anio);
        }

        return $query;
    }

}
