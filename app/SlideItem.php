<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideItem extends Model
{
 	public function image()
    {
        return $this->morphOne('App\File', 'notable');
    }

}
