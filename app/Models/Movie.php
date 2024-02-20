<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'genre_id', 'actors', 'producer', 'running_time', 'image', 'publication_date', 'rating', 'quality','slug'];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($movie) {
            $movie->slug = Str::slug($movie->title);
        });
    }
   
}
