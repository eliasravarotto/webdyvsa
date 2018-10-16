<?php
namespace App\Repositories;
use App\CaracteristicaModelo;
use App\ImagenColorModelo;
use App\ImagenGaleriaModelo;
use App\ImagenSliderModelo;
use App\ParallaxModelo;
use App\Version;
use Illuminate\Support\Facades\DB;

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

	public function getVersiones($id)
	{
		return Version::where('modelo_id', '=', $id)->get();
	}
}