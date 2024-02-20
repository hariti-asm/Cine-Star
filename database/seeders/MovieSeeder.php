<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'title' => 'The Northman',
                'description' => 'Description of The Northman.',
                'genre_id' => 1, 
                'actors' => 'Actor 1, Actor 2',
                'producer' => 'Producer 1',
                'running_time' => 137,
                'image' => 'images/upcoming-1.png',
                'publication_date' => '2022-01-01',
                'rating' => 8.5,
                'quality' => 'HD',
            ],
            [
                'title' => 'Doctor Strange in the Multiverse of Madness',
                'description' => 'Description of Doctor Strange in the Multiverse of Madness.',
                'genre_id' => 4, 
                'actors' => 'Actor 3, Actor 4',
                'producer' => 'Producer 2',
                'running_time' => 126,
                'image' => 'images/upcoming-2.png',
                'publication_date' => '2022-01-15',
                'rating' => null, 
                'quality' => '4K',
            ],
            [
                'title' => 'Memory',
                'description' => 'Description of Memory.',
                'genre_id' => 3, 
                'actors' => 'Actor 5, Actor 6',
                'producer' => 'Producer 3',
                'running_time' => null, 
                'image' => 'images/upcoming-3.png',
                'publication_date' => '2022-02-01',
                'rating' => null, 
                'quality' => '2K',
            ],
            [
                'title' => 'The Unbearable Weight of Massive Talent',
                'description' => 'Description of The Unbearable Weight of Massive Talent.',
                'genre_id' => 4, 
                'actors' => 'Actor 7, Actor 8',
                'producer' => 'Producer 4',
                'running_time' => 107,
                'image' => 'images/upcoming-4.png',
                'publication_date' => '2022-02-15',
                'rating' => null, 
                'quality' => 'HD',
            ],
            [
                'title' => 'Sonic the Hedgehog 2',
                'description' => 'Description of Sonic the Hedgehog 2.',
                'genre_id' => 4, 
                'actors' => 'Actor 1, Actor 2',
                'producer' => 'Producer 1',
                'running_time' => 122,
                'image' => 'images/movie-1.png',
                'publication_date' => '2022-01-01',
                'rating' => 7.8, 
                'quality' => '2K',
            ],
            [
                'title' => 'Morbius',
                'description' => 'Description of Morbius.',
                'genre_id' => 4, 
                'actors' => 'Actor 3, Actor 4',
                'producer' => 'Producer 2',
                'running_time' => 104,
                'image' => 'images/movie-2.png',
                'publication_date' => '2022-01-01',
                'rating' => 5.9, 
                'quality' => 'HD',
            ],
            [
                'title' => 'The Adam Project',
                'description' => 'Description of The Adam Project.',
                'genre_id' => 3, 
                'actors' => 'Actor 5, Actor 6',
                'producer' => 'Producer 3',
                'running_time' => 106,
                'image' => 'images/movie-3.png',
                'publication_date' => '2022-01-01',
                'rating' => 7.0, 
                'quality' => '4K',
            ],
            [
                'title' => 'Free Guy',
                'description' => 'Description of Free Guy.',
                'genre_id' => 1, 
                'actors' => 'Actor 7, Actor 8',
                'producer' => 'Producer 4',
                'running_time' => 115,
                'image' => 'images/movie-4.png',
                'publication_date' => '2021-01-01',
                'rating' => 7.7, 
                'quality' => '4K',
            ],
            [
                'title' => 'The Batman',
                'description' => 'Description of The Batman.',
                'genre_id' => 2, 
                'actors' => 'Actor 9, Actor 10',
                'producer' => 'Producer 5',
                'running_time' => 176,
                'image' => 'images/movie-5.png',
                'publication_date' => '2022-01-01',
                'rating' => 7.9, 
                'quality' => '4K',
            ],
            [
                'title' => 'Uncharted',
                'description' => 'Description of Uncharted.',
                'genre_id' => 3, 
                'actors' => 'Actor 11, Actor 12',
                'producer' => 'Producer 6',
                'running_time' => 116,
                'image' => 'images/movie-6.png',
                'publication_date' => '2022-01-01',
                'rating' => 7.0, 
                'quality' => 'HD',
            ],
            [
                'title' => 'Death on the Nile',
                'description' => 'Description of Death on the Nile.',
                'genre_id' => 2, 
                'actors' => 'Actor 13, Actor 14',
                'producer' => 'Producer 7',
                'running_time' => 127,
                'image' => 'images/movie-7.png',
                'publication_date' => '2022-01-01',
                'rating' => 6.5, 
                'quality' => '2K',
            ],
            [
                'title' => 'The King\'s Man',
                'description' => 'Description of The King\'s Man.',
                'genre_id' => 3, 
                'actors' => 'Actor 15, Actor 16',
                'producer' => 'Producer 8',
                'running_time' => 131,
                'image' => 'images/movie-8.png',
                'publication_date' => '2021-01-01',
                'rating' => 7.0, 
                'quality' => 'HD',
            ],
            [
                'title' => 'The Unbearable Weight of Massive Talent',
                'description' => 'Description of The Unbearable Weight of Massive Talent.',
                'genre_id' => 1, 
                'actors' => 'Actor 7, Actor 8',
                'producer' => 'Producer 4',
                'running_time' => 107,
                'image' => 'images/upcoming-4.png',
                'publication_date' => '2022-02-15',
                'rating' => null, 
                'quality' => 'HD',
            ],
        ];
    

        Movie::insert($movies);
    }
}
