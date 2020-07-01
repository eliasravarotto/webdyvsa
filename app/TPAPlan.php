<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TPAPlan extends Model
{
    protected $table = 'tpa_planes';

    protected $fillable = ['unidad', 'modalidad', 'precio_lista', 'cuota_pura', 'integracion', 'activo'];

    const MODALIDAD_70_30 = '70/30';
    const MODALIDAD_100 = '100%';

    public function adjudicados()
    {
        return $this->hasMany('App\TPaAdjudicado', 'plan_id');
    }

    public function agrupados()
    {
        return $this->hasMany('App\TpaAgrupado', 'plan_id');
    }
}
