<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getNovedades(Request $request, $categoria = null ){

    	if ($categoria == null) {
    		$posts = Post::orderBy('created_at', 'DESC')->get();
    	}else{
    		$posts = Post::where('tema_id', '!=', 5)
    						->take($limit)
    						->orderBy('created_at', 'DESC')
    						->get();
    	}

    	return response()->json(['novedades' => $posts ], 200);
    }
}
