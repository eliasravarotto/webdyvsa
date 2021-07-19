<?php

namespace App\Http\Controllers;

use App\Post;
use App\Modelo;
use App\Servicio;
use App\Sucursal;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ApiController extends Controller
{

    use ApiResponser;

    public function getNovedades( Request $request )
    {
    	if ($request->categoria == null) {
    		$posts = Post::where('tema_id', '!=', 5)
                           ->orderBy('created_at', 'DESC')
                           ->paginate(3);
    	}else{
    		$posts = Post::where('tema_id', '!=', 5)
                           ->where('tema_id', $request->categoria)
						   ->orderBy('created_at', 'DESC')
						   ->paginate(4);
    	}

        foreach ($posts as $post) {
            $post->url = 'https://www.derkayvargas.com/posts/'.$post->slug;;
        }

    	return response()->json($posts, 200);
    }

    public function getModelos(Request $request)
    {
        $modelos = Modelo::all();

        return response()->json(['modelos' => $modelos ], 200);
    }

    public function getTiposServicios(Request $request)
    {
        $tiposServicios = Servicio::all();

        return response()->json(['tiposServicios' => $tiposServicios ], 200);
    }

    public function getSucursales( Request $request, $sucursales_de = null )
    {
        switch ($sucursales_de) {
            case 'posventa':
                $sucursales = Sucursal::where('tiene_posventa', 1)->get();
                break;
            case 'tpa':
                $sucursales = Sucursal::where('negocio_id', 2)->get();
                break;
            case 'convencional':
                $sucursales = Sucursal::where('negocio_id', 1)->get();
                break;
            default:
                $sucursales = Sucursal::all();
                break;
        }
        
        return response()->json(['sucursales' => $sucursales ], 200);
    }

    public function getTeamTpa(Request $request)
    {

        $strJsonFileContents = json_decode(file_get_contents("data/team-tpa.json"));

        $collection = new Collection;

        foreach ($strJsonFileContents as $properties) {
            $item = null;
            $item = (object) $item;
            foreach ($properties as $key => $value) {
                $item->$key = $value;
            }

            $collection->push($item);
        }

        return $this->showAll(collect($strJsonFileContents));
    }

    public function sucursalesUsados(Request $request)
    {
        $strJsonFileContents = json_decode(file_get_contents("data/sucursales-usados.json"));

        $collection = new Collection;

        foreach ($strJsonFileContents as $properties) {
            $item = null;
            $item = (object) $item;
            foreach ($properties as $key => $value) {
                $item->$key = $value;
            }

            $collection->push($item);
        }

        return $this->showAll(collect($strJsonFileContents));
    }

    public function sucursalesVentas(Request $request)
    {
        $strJsonFileContents = json_decode(file_get_contents("data/sucursales-ventas.json"));

        $collection = new Collection;

        foreach ($strJsonFileContents as $properties) {
            $item = null;
            $item = (object) $item;
            foreach ($properties as $key => $value) {
                $item->$key = $value;
            }

            $collection->push($item);
        }

        return $this->showAll(collect($strJsonFileContents));
    }

    public function sucursalesPosventa(Request $request)
    {
        $strJsonFileContents = json_decode(file_get_contents("data/sucursales-posventa.json"));

        $collection = new Collection;

        foreach ($strJsonFileContents as $properties) {
            $item = null;
            $item = (object) $item;
            foreach ($properties as $key => $value) {
                $item->$key = $value;
            }

            $collection->push($item);
        }

        return $this->showAll(collect($strJsonFileContents));
    }


    public function modelosVersiones(Request $request)
    {
        $strJsonFileContents = json_decode(file_get_contents("data/modelos-versiones.json"));
        
        $collection = new Collection;

        foreach ($strJsonFileContents as $properties) {
            $item = null;
            $item = (object) $item;
            foreach ($properties as $key => $value) {
                $item->$key = $value;
            }

            $collection->push($item);
        }

        return $this->showAll(collect($strJsonFileContents));
    }
}
