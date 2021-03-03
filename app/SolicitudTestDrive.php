<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudTestDrive extends Model
{
	protected $table = 'solicitud_test_drives';

	protected $fillable = ['cliente', 'telefono','email', 'fecha_estimada', 'modelo', 'sucursal'];

    public function sucursal()
    {
        return $this->belongsTo('App\Sucursal');
    }
}
