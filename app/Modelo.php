<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'modelos';


    public function caracteristicas()
    {
        return $this->hasMany('App\CaracteristicaModelo');
    }

    public function portada()
    {
        return $this->hasOne('App\PortadaModelo');
    }

    public function accesorios()
    {
        return $this->hasMany('App\Accesorio');
    }
}
