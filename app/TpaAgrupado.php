<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TpaAgrupado extends Model
{
        protected $fillable = ['grupo', 'orden', 'unidad', 'modalidad', 'avance_cuotas', 'cuota_pura', 'precio_venta'];

	protected $table = 'tpa_agrupados';
}
