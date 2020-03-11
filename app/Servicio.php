<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
	protected $fillable = ['nombre', 'precio', 'modelo_id'];

    public function modelo()
    {
        return $this->belongsTo('App\Modelo');
    }
}
