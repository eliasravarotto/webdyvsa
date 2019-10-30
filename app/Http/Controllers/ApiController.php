<?php

namespace App\Http\Controllers;

use App\Modelo;
use App\Post;
use App\TipoServicio;
use App\Sucursal;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getNovedades( Request $request ){

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

    public function getModelos(Request $request){

        $modelos = Modelo::all();

        return response()->json(['modelos' => $modelos ], 200);
    }

    public function getTiposServicios(Request $request){

        $tiposServicios = TipoServicio::all();

        return response()->json(['tiposServicios' => $tiposServicios ], 200);
    }

    public function storeTurnoServicio( Request $request ){
        return $request;
    }

    public function getSucursales( Request $request, $sucursales_de = null ){
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
}
