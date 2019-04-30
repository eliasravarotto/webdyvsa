<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'posts';

    use HasSlug;

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(['titulo'])
            ->saveSlugsTo('slug');
    }

	 /**
	 * Get the post that owns the comment.
	 */
    public function tema()
    {
        return $this->belongsTo('App\PostTema');
    }

    /**
     * Get the comments for the blog post.
     */
    public function imagenes()
    {
        return $this->hasMany('App\ImagenGaleriaPost');
    }
}
