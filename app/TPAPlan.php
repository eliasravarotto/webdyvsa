<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TPAPlan extends Model
{
    protected $table = 'tpa_planes';

    protected $fillable = ['unidad', 'modalidad', 'precio_lista', 'cuota_pura', 'integracion', 'activo'];



    public function adjudicados()
    {
        return $this->hasMany('App\TPaAdjudicado', 'plan_id');
    }

    public function agrupados()
    {
        return $this->hasMany('App\TpaAgrupado', 'plan_id');
    }
}
