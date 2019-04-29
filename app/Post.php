<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'posts';

	 /**
	 * Get the post that owns the comment.
	 */
    public function tema()
    {
        return $this->belongsTo('App\PostTema');
    }
}
