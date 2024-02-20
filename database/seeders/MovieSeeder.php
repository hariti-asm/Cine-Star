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
                'genre_id' => 2, 
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
                'genre_id' => 3, // Assuming 'Other' genre has ID 3
                'actors' => 'Actor 5, Actor 6',
                'producer' => 'Producer 3',
                'running_time' => null, // Not available
                'image' => 'images/upcoming-3.png',
                'publication_date' => '2022-02-01',
                'rating' => null, 
                'quality' => '2K',
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
