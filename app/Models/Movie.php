<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['title', 'description', 'release_date', 'trailer_url', 'movie_url', 'thumbnail_image', 'slug'];
    public function sluggable(): array{
        return [
            'slug'=>[
                'source'=> 'title'
            ]
        ];
    }
}
