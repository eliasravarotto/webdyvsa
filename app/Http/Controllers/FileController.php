<?php

namespace App\Http\Controllers;

use App\File;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
	use ApiResponser;

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\File  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = File::findOrFail($id);

     	Storage::delete($file->path);

        $file->delete();

        return $this->showOne($file);
    }
}
