<?php

namespace App;

use App\Post;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

	use HasSlug;

 	protected $fillable = [
    	'name',
    	'description'
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(['name'])
            ->saveSlugsTo('slug');
    }

    public function products()
    {
    	return $this->belongsToMany(Post::class);
    }
}
