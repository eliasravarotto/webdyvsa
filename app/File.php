<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class File extends Model
{
    protected $table = 'files';
    protected $fillable = ['name', 'extension', 'path', 'public_path'];

    public function store( $fileRequest )
    {
    	$foto = $fileRequest;
        $this->path = $foto->store('public/fotos');
        $this->public_path = Storage::url($this->path);
    }

    public function notable()
    {
        return $this->morphTo();
    }
}
