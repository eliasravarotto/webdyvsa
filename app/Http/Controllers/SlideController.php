<?php

namespace App\Http\Controllers;

use App\File;
use App\Slide;
use App\SlideItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides = Slide::with('items')->get();
        return view('backend.slides.index', compact('slides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slide = new Slide;
        return view('backend.slides.create', compact('slide'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $slide = new Slide;
        $slide->nombre = $request->nombre;
        $slide->save();
       
        $files = $request->file('image');
        $i=0;
        foreach ($files as $foto) {
            $file = new File;
            $file->store($foto);

            $slideItem = new SlideItem;
            $slideItem->slide_id = $slide->id;
            $slideItem->orden = $request->orden[$i];
            $slideItem->url = $request->url[$i];
            $slideItem->size = $request->size[$i];
            $slideItem->save();
            $slideItem->image()->create($file->toArray());
            $i = $i + 1;
        }
        
        $slides = Slide::all();
        return view('backend.slides.index', compact('slides'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        // return $id;
        $slide = Slide::find($id);
        $slide->items = $slide->items()->get();

        return view('backend.slides.edit', compact('slide'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $slide = Slide::findOrFail($id);
        $slide->nombre = $request->nombre;
        $slide->update();

        $files = $request->file('image');
        $i=0;
        foreach ($files as $foto) {
            $file = new File;
            $file->store($foto);

            $slideItem = new SlideItem;
            $slideItem->slide_id = $slide->id;
            $slideItem->orden = $request->orden[$i];
            $slideItem->url = $request->url[$i];
            $slideItem->size = $request->size[$i];
            $slideItem->save();
            $slideItem->image()->create($file->toArray());
            $i = $i + 1;
        }
        
        return back()->with('success', 'Actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $slide_id)
    {
        $slide = Slide::find($slide_id);
        $items = $slide->items()->get();
        foreach ($items as $item)
            $this->deleteItem($item->id);
        
        $slide->delete();

        return back()->with('success', 'Slider eliminado correctamente.');

    }


    public function getDataSlide(Request $request, $id)
    {
        $slide = Slide::find($id)->with('items')->first();
        return $slide;
    }

    public function eliminarItem(Request $request, $id)
    {
        $item = SlideItem::findOrFail($id);
        $image = $item->image()->first();
        Storage::delete($image->path);
        $image->delete();
        $item->delete();
        return back()->with('success', 'Item eliminado correctamente.');

    }

    private function deleteItem($item_id)
    {
        $item = SlideItem::findOrFail($item_id);
        $image = $item->image()->first();
        Storage::delete($image->path);
        $image->delete();
        $item->delete();

        return;
    }
}
