<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'title' => 'The Shawshank Redemption',
                'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'release_date' => '1994-09-23',
                'trailer_url' => 'https://www.youtube.com/embed/PLl99DlL6b4?si=XFBXIgzYTaHuPe0y',
                'movie_url' => 'https://www.netflix.com/title/70097514',
                'slug' => 'the-shawshank-redemption',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'The Godfather',
                'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'release_date' => '1972-03-24',
                'trailer_url' => 'https://www.youtube.com/embed/UaVTIH8mujA?si=bUK21NWEe19_vDT0',
                'movie_url' => 'https://www.netflix.com/title/60011152',
                'slug' => 'the-godfather',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'The Dark Knight',
                'description' => 'When the menace known as The Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
                'release_date' => '2008-07-18',
                'trailer_url' => 'https://www.youtube.com/embed/EXeTwQWrcwY?si=Wo0d2YaOZVAG6RG0',
                'movie_url' => 'https://www.netflix.com/title/70075102',
                'slug' => 'the-dark-knight',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'Inception',
                'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
                'release_date' => '2010-07-16',
                'trailer_url' => 'https://www.youtube.com/embed/YoHD9XEInc0?si=Ln3RVkRSQ_kGfKmV',
                'movie_url' => 'https://www.netflix.com/title/70131314',
                'slug' => 'inception',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'Pulp Fiction',
                'description' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'release_date' => '1994-10-14',
                'trailer_url' => 'https://www.youtube.com/embed/WSLMN6g_Od4?si=Sm57Lpy9y3Vf66Ct',
                'movie_url' => 'https://www.netflix.com/title/880090',
                'slug' => 'pulp-fiction',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'The Matrix',
                'description' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
                'release_date' => '1999-03-31',
                'trailer_url' => 'https://www.youtube.com/embed/vKQi3bBA1y8?si=4fWCcrWJ4F4jHyV0',
                'movie_url' => 'https://www.netflix.com/title/20557937',
                'slug' => 'the-matrix',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'Forrest Gump',
                'description' => 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold from the perspective of an Alabama man with an IQ of 75, whose only desire is to be reunited with his childhood sweetheart.',
                'release_date' => '1994-07-06',
                'trailer_url' => 'https://www.youtube.com/embed/bLvqoHBptjg?si=9ugTTTM6oVRgNFJ1',
                'movie_url' => 'https://www.netflix.com/title/60004499',
                'slug' => 'forrest-gump',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'Interstellar',
                'description' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
                'release_date' => '2014-11-07',
                'trailer_url' => 'https://www.youtube.com/embed/zSWdZVtXT7E?si=W1HWMTFnsV_d5FiS',
                'movie_url' => 'https://www.netflix.com/title/70305903',
                'slug' => 'interstellar',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'The Lord of the Rings: The Return of the King',
                'description' => 'Gandalf and Aragorn lead the World of Men against Sauron\'s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.',
                'release_date' => '2003-12-17',
                'trailer_url' => 'https://www.youtube.com/embed/V75dMMIW2B4?si=BCCPOVBS6-11U4yU',
                'movie_url' => 'https://www.netflix.com/title/60034567',
                'slug' => 'the-lord-of-the-rings-the-return-of-the-king',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ]
        ]);
    }
}
