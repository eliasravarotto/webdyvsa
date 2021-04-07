<?php

namespace App\Http\Controllers;

use App\File;
use App\Modelo;
use App\Traits\ApiResponser;
use App\Traits\ImageHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ModeloGalleryController extends Controller
{
    use ImageHandler;
    use ApiResponser;



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modelo = Modelo::where('id', $id)->with('gallery.photos')->first();

        return view('backend.modelos.formGaleria', compact('modelo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $modelo = Modelo::find($id);

        if ($request->hasFile('file')) {
            $photo = new File;

            $photo->path = $this->storeAndReziseImage($request, 'public/fotos', 'file')->imagePath;

            $photo->public_path = Storage::url($photo->path);

            $modelo->gallery->photos()->save($photo);
            
        }
        
        return $this->showOne($modelo);
    }

}
