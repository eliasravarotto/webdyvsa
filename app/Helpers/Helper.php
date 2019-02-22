<?php
namespace App\Helpers;

use App\Sucursal;
use App\Modelo;


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

	public static function getRecentPostInstagram()
	{
		// Supply a user id and an access token
          $userid = "3040871634";
          $accessToken = "3040871634.0b0a53a.271afbc2524c47b0b5b38e701bf0e98d";

          // Gets our data
          function fetchData($url){
               $ch = curl_init();
               curl_setopt($ch, CURLOPT_URL, $url);
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
               curl_setopt($ch, CURLOPT_TIMEOUT, 20);
               $result = curl_exec($ch);
               curl_close($ch); 
               return $result;
          }

          // Pulls and parses data.
          $result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?access_token={$accessToken}");
          $result = json_decode($result);

          return $result;
	}


	public static function getModelos()
	{
		return Modelo::all();
	}
}