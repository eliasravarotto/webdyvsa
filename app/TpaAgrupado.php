<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TpaAgrupado extends Model
{
    protected $fillable = ['grupo_orden', 'plan_id','avance_cuotas', 'precio_venta', 'activo'];

	protected $table = 'tpa_agrupados';

	const MODALIDAD_70_30 = '70/30';
	const MODALIDAD_100 = '100%';

	public function planTpa()
    {
        return $this->belongsTo('App\TPAPlan', 'plan_id');
    }
}
