<?php
namespace App\Helpers;

use App\Post;
use App\Usado;
use App\Modelo;
use App\Category;
use App\PostTema;
use App\Sucursal;
use App\TpaAgrupado;
use App\TpaAdjudicado;
use Illuminate\Support\Collection;

/*
	1. Sucursales - getSucursales
	2. Sucursales Posventa - getSucursalesPosventa
	3. Sucursales Convencional - getSucursalesConvencional
	4. Sucursales Plan de Ahorro - getSucursalesPlanDeAhorro
	5. API Instagram - getRecentPostInstagram
	6. Modelos - getModelos
	7. Posts recientes - postRecientes
	8. Posts Populares - postPopulares
	9. Posts Promos y Descuentos - getPostsPromosDtos
	10. Posts, Widget Right - getPostsWidgetRigth
	11. Plan de Ahorro - getAgrupados
	12. Plan de Ahorro - getAdjudicados
	13. Usados de Interés - getUsadosDeInteres
	14. Servicios - getModelosWithServices
*/

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

	public static function getSucursalesConvencional()
	{
		$sucursales = Sucursal::where('negocio_id', '=', 1)->get();

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
		return Modelo::where('activo', 1)->get();
	}

	public static function getModelosDestacados()
	{
		return Modelo::whereIn('id', [44, 42, 43, 28, 30, 29])->get();
	}

	public static function getPostsByCategories($categories, $limit = null)
	{
		if ($limit == null) {
			$posts = Post::whereHas('categories', function ($query) use ($categories) {
                return $query->whereIn('name', '=', $categories);
            })
            ->orderBy('created_at', 'DESC')
			->get();
		}else{
			$posts = Post::whereHas('categories', function ($query) use ($categories) {
                return $query->whereIn('name', $categories);
            })
			->take($limit)
			->orderBy('created_at', 'DESC')
			->get();
		}

		return $posts;
	}

	public static function getPostsWidgetRigth( $cant )
	{

		$posts = Post::inRandomOrder()->limit($cant)->get();

		return $posts;
	
	}

	public static function getCategories()
	{
		$categories = Category::all();
		return $categories;
	}

	public static function getUsadosDeInteres( Usado $usado_in_view )
	{
		$mod = explode(' ', $usado_in_view->modelo);
		$mod = $mod[0];
		$usados = Usado::where('id', '!=', $usado_in_view->id)
						 ->where('visible', 1)
						 ->where('estado', 'DISPONIBLE')
						 ->where(function ($query) use ($mod, $usado_in_view) {
							    $query->where('modelo', 'like', '%' . $mod . '%')
							          ->orWhere('marca', 'like', '%' . $usado_in_view->marca . '%');
						 })->get();
		if ($usados->count() < 4) {
			$usados_ids = $usados->pluck('id');
			$all = Usado::where('id', '!=',$usado_in_view->id )
						->whereNotIn('id', $usados_ids)
						->get();
			foreach ($all as $usado) {
				$usados->push($usado);
			}
		}

		return $usados->take(4);
	}

	public static function getHighOrdenUsados()
	{
		return Usado::where('orden', '<>', null)->orderBy('orden', 'DESC')->first()->orden;
	}

	public static function getModelosWithServices()
	{
		$modelos = Modelo::has('servicios', '>', 0)->get();

		return $modelos;
	}

}