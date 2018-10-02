<?php
namespace App\Repositories;
use Illuminate\Support\Facades\DB;
use App\ImagenSliderModelo;
use App\ImagenColorModelo;
use App\ImagenGaleriaModelo;
use App\CaracteristicaModelo;
use App\ParallaxModelo;

class ModeloRepository
{
	public function getImagenesSlider($id)
	{
		return ImagenSliderModelo::where('modelo_id', '=', $id)->get();
	}

	public function getImagenesColores($id)
	{
		return ImagenColorModelo::where('modelo_id', '=', $id)->get();
	}

	public function getImagenesGaleria($id)
	{
		return ImagenGaleriaModelo::where('modelo_id', '=', $id)->get();
	}

	public function getCaracteristicas($id)
	{
		return CaracteristicaModelo::where('modelo_id', '=', $id)->get();
	}

	public function getParallax($id)
	{
		return ParallaxModelo::where('modelo_id', '=', $id)->get();
	}
}