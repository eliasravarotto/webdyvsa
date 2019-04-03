<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Usado extends Model
{
    use HasSlug;

    protected $table = 'usados';

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(['marca', 'modelo', 'color'])
            ->saveSlugsTo('slug');
    }

 	public function scopeMarca($query, $marca)
    {
        if (!is_null($marca)) {
            return $query->where('marca', 'like', '%'.$marca.'%');
        }

        return $query;
    }

    public function scopeColor($query, $color)
    {
        if (!is_null($color)) {
            return $query->where('color', $color);
        }

        return $query;
    }

    public function scopeAnio($query, $anio)
    {
        if (!is_null($anio)) {
            return $query->where('anio', '=', $anio);
        }

        return $query;
    }

    public function imagenes()
    {
        return $this->hasMany('App\ImagenGaleriaUsado');
    }

}
