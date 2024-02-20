<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'genre_id', 'actors', 'producer','running_time','image','publication_date','rating','quality'];

    public function genre()
        {
            return $this->belongsTo(Genre::class);
        }
}