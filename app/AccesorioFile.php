<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class AccesorioFile extends Pivot
{
    protected $table = 'accesorio_files';
}
