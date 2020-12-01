<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasSlug;

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

    public function marca()
    {
        return $this->belongsTo('App\Marca');
    }

    public function servicios()
    {
        return $this->hasMany('App\Servicio');
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(['nombre'])
            ->saveSlugsTo('slug');
    }

    public function colores()
    {
        return $this->hasMany('App\ImagenColorModelo');
    }
}
