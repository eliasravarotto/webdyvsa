<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SolicitudTestDrive extends Model
{
	protected $table = 'solicitud_test_drives';

    public function sucursal()
    {
        return $this->belongsTo('App\Sucursal');
    }
}
