<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public function items()
    {
        return $this->hasMany('App\SlideItem')
        			->orderBy('orden', 'ASC')
        			->with('image');
    }

}
