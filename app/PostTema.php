<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTema extends Model
{

	protected $table = 'posts_temas';

    /**
     * Get the comments for the blog post.
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
