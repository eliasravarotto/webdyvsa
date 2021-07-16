<?php

namespace App;

use App\User;
use App\Traits\SaveToUpperCase;
use Illuminate\Database\Eloquent\Model;

class UserVehicle extends Model
{

    use SaveToUpperCase;

    protected $fillable = [
        'marca', 
        'modelo', 
        'version', 
        'dominio', 
        'color', 
        'photo', 
        'anio', 
        'km', 
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
