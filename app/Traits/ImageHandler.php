<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

trait ImageHandler
{

	private function storeAndReziseImage(Request $request, $path, $name = 'image', $size = 800, $quality = 90)
    {
        $imagePath = $request->file($name)->store($path);

        $name = collect(explode('/', $imagePath))->last();

        $image = Image::make(Storage::get($imagePath))
        				->resize($size, null, function ($constraint) { $constraint->aspectRatio(); } )
   						->encode('jpg', $quality);

        Storage::put($imagePath, $image);

        return (object) [
            'name' => $name,
            'imagePath' => $imagePath,
        ];
    }

    private function storeAndRezise($file, $path, $size = 800, $quality = 90)
    {
        $imagePath = $file->store($path);

        $name = collect(explode('/', $imagePath))->last();

        $image = Image::make(Storage::get($imagePath))
                        ->resize($size, null, function ($constraint) { $constraint->aspectRatio(); } )
                        ->encode('jpg', $quality);

        Storage::put($imagePath, $image);

        return (object) [
            'name' => $name,
            'imagePath' => $imagePath,
        ];
    }

}
