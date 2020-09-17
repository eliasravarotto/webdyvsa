<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

 	protected $fillable = [
    	'name',
    	'description'
    ];

    public function products()
    {
    	return $this->belongsToMany(Post::class);
    }
}
