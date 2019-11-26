<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accesorio extends Model
{
    protected $table = 'accesorios';

    protected $fillable = ['nombre', 'precio', 'modelo_id', 'activo'];


    public function modelo()
    {
        return $this->belongsTo('App\Modelo');
    }

    public function fotos()
    {
        return $this->belongsToMany('App\File', 'accesorio_files');
    }

    public function foto()
    {
        return $this->fotos()->orderBy('id', 'asc')->first();
    }
}
