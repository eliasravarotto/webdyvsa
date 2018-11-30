<?php
namespace App\Helpers;

use App\Sucursal;


class Helper
{
	public static function getSucursales()
	{
		$sucursales = Sucursal::all();

		return $sucursales;
	}

	public static function getSucursalesPosventa()
	{
		$sucursales = Sucursal::where('tiene_posventa', '=', 1)->get();

		return $sucursales;
	}

	public static function getSucursalesPlanDeAhorro()
	{
		$sucursales = Sucursal::where('negocio_id', '=', 2)->get();

		return $sucursales;
	}
}