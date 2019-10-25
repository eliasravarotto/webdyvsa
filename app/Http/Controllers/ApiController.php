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

        foreach ($posts as $post) {
            $post->url = 'https://www.derkayvargas.com/posts/'.$post->slug;;
        }

    	return response()->json(['data' => $posts ], 200);
    }
}
