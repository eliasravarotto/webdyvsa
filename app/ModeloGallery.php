<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeloGallery extends Model
{
    protected $table = 'imagen_galeria_modelos';

    public function photos()
    {
        return $this->morphMany('App\File', 'notable');
    }
}
