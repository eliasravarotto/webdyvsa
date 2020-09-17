<?php

namespace App;

use App\Category;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasSlug;
    
	protected $table = 'posts';

    protected $fillable = [
        'titulo',
        'imagen_portada',
        'contenido',
        'slug'
    ];


    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(['titulo'])
            ->saveSlugsTo('slug');
    }

    
    public function categories(){
        return $this->belongsToMany('App\Category', 'post_category');
    }

    public function image()
    {
        return $this->morphOne('App\File', 'notable');
    }

    public function scopeContainCategory($query, $category_id)
    {
        if (!is_null($category_id)) {
            return $query->whereHas('categories', function ($query) use ($category_id) {
                return $query->where('id', '=', $category_id);
            });
        }

        return $query;
    }
}
