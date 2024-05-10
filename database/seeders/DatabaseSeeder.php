<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\User;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $genres = [
            ['name' => 'Drama', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Crime', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Action', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Thriller', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Adventure', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Comedy', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Science Fiction', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Fantasy', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Horror', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        foreach ($genres as $genreData) {
            Genre::create($genreData);
        }

        $movies = [
            [
                'title' => 'The Shawshank Redemption',
                'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
                'trailer_url' => 'https://www.youtube.com/embed/PLl99DlL6b4?si=XFBXIgzYTaHuPe0y',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://occ-0-2794-2219.1.nflxso.net/dnm/api/v6/Qs00mKCpRvrkl3HZAN5KwEL1kpE/AAAABSReLSEth1pL2krM-Ywy1SjN6D8DgBU8CEDQzU-apYfPjJfut4r3hgc0AcOmeNqHmL5cJQZ2O5t43dZh9qJZedRLHJjrQJ6suG27.jpg?r=390',
            ],
            [
                'title' => 'The Godfather',
                'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'trailer_url' => 'https://www.youtube.com/embed/UaVTIH8mujA?si=bUK21NWEe19_vDT0',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://pbs.twimg.com/media/D2NxypoW0AAlJn-.jpg',
            ],
            [
                'title' => 'The Dark Knight',
                'description' => 'When the menace known as The Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
                'trailer_url' => 'https://www.youtube.com/embed/EXeTwQWrcwY?si=Wo0d2YaOZVAG6RG0',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://theilluminerdi.com/wp-content/uploads/2022/03/The-Dark-Knight-in-2022.png',
            ],
            [
                'title' => 'Inception',
                'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
                'trailer_url' => 'https://www.youtube.com/embed/YoHD9XEInc0?si=Ln3RVkRSQ_kGfKmV',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://lawliberty.org/app/uploads/2020/06/Inception-1060x530.jpg',
            ],
            [
                'title' => 'Pulp Fiction',
                'description' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'trailer_url' => 'https://www.youtube.com/embed/s7EdQ4FqbhY?si=rl3m32K0cTN-wCi1',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://www.looper.com/img/gallery/pulp-fiction-2-will-it-ever-happen-upgrade/intro-1685472872.jpg',
            ],
            [
                'title' => 'The Matrix',
                'description' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
                'trailer_url' => 'https://www.youtube.com/embed/vKQi3bBA1y8?si=4fWCcrWJ4F4jHyV0',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://static1.colliderimages.com/wordpress/wp-content/uploads/2023/05/the-matrix-code-keanu-reeves.jpeg',
            ],
            [
                'title' => 'Forrest Gump',
                'description' => 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold from the perspective of an Alabama man with an IQ of 75, whose only desire is to be reunited with his childhood sweetheart.',
                'trailer_url' => 'https://www.youtube.com/embed/bLvqoHBptjg?si=9ugTTTM6oVRgNFJ1',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://i.ytimg.com/vi/187trX0mo1o/maxresdefault.jpg',
            ],
            [
                'title' => 'Interstellar',
                'description' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
                'trailer_url' => 'https://www.youtube.com/embed/zSWdZVtXT7E?si=W1HWMTFnsV_d5FiS',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://imageio.forbes.com/blogs-images/markhughes/files/2014/11/interstellar-4-1940x8971.jpg?format=jpg&height=600&width=1200&fit=bounds',
            ],
            [
                'title' => 'The Lord of the Rings: The Return of the King',
                'description' => 'Gandalf and Aragorn lead the World of Men against Sauron\'s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.',
                'trailer_url' => 'https://www.youtube.com/embed/V75dMMIW2B4?si=BCCPOVBS6-11U4yU',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://facts.net/wp-content/uploads/2023/06/49-facts-about-the-movie-the-lord-of-the-rings-the-return-of-the-king-1687250236.jpg',
            ],
            [
                'title' => 'Fight Club',
                'description' => 'An insomniac office worker and a devil-may-care soapmaker form an underground fight club that evolves into something much, much more.',
                'trailer_url' => 'https://www.youtube.com/embed/qtRKdVHc-cE?si=QdN4VBDhgc_xeB9e',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://c4.wallpaperflare.com/wallpaper/324/188/882/fight-club-tyler-durden-edward-norton-movies-wallpaper-preview.jpg',
            ],
            [
                'title' => 'The Social Network',
                'description' => 'As Harvard student Mark Zuckerberg creates the social networking site that would become known as Facebook, he is sued by the twins who claimed he stole their idea, and by the co-founder who was later squeezed out of the business.',
                'trailer_url' => 'https://www.youtube.com/embed/lB95KLmpLR4?si=o0EUcPThnVbcPvoO',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://i.ytimg.com/vi/bynULuoHi98/maxresdefault.jpg',
            ],
            [
                'title' => 'The Silence of the Lambs',
                'description' => 'A young F.B.I. cadet must receive the help of an incarcerated and manipulative cannibal killer to help catch another serial killer, a madman who skins his victims.',
                'trailer_url' => 'https://www.youtube.com/embed/6iB21hsprAQ?si=nVEps-UOkLLtRvxn',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://www.financial-world.org/world/media/image23624.jpg',
            ],
            [
                'title' => 'Gladiator',
                'description' => 'A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family and sent him into slavery.',
                'trailer_url' => 'https://www.youtube.com/embed/P5ieIbInFpg?si=s6LJnicVUImSOnJg',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://rukminim2.flixcart.com/image/850/1000/kt0enww0/poster/r/t/n/medium-crowe-gladiator-movie-matte-finish-poster-original-imag6ghspeugdwng.jpeg?q=20&crop=false',
            ],
            [
                'title' => 'Schindler\'s List',
                'description' => 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.',
                'trailer_url' => 'https://www.youtube.com/embed/veztNJQyRJg?si=oulC3ImQfX2Op0bR',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://facts.net/wp-content/uploads/2023/06/48-facts-about-the-movie-schindlers-list-1687269412.jpeg',
            ],
            [
                'title' => 'The Departed',
                'description' => 'An undercover cop and a mole in the police attempt to identify each other while infiltrating an Irish gang in South Boston.',
                'trailer_url' => 'https://www.youtube.com/embed/r-MiSNsCdQ4?si=_O62jes_CSgqX5NQ',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://www.tallengestore.com/cdn/shop/products/TheDeparted-LeonardoDiCaprioJackNicholson-MartinScorseseHollywoodEnglishMoviePoster_edc47e64-e517-4d1a-9a20-b202c3220018_large.jpg?v=1600762008',
            ],
            [
                'title' => 'Goodfellas',
                'description' => 'The story of Henry Hill and his life in the mob, covering his relationship with his wife Karen Hill and his mob partners Jimmy Conway and Tommy DeVito in the Italian-American crime syndicate.',
                'trailer_url' => 'https://www.youtube.com/embed/2ilzidi_J8Q?si=RznJNesZxGOhoHOK',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://wallpapers.com/images/hd/goodfellas-widescreen-cover-nqvb6c5yyzv0ldcy.jpg',
            ],
            [
                'title' => 'The Usual Suspects',
                'description' => 'A sole survivor tells of the twisty events leading up to a horrific gun battle on a boat, which began when five criminals met at a seemingly random police lineup.',
                'trailer_url' => 'https://www.youtube.com/embed/oiXdPolca5w?si=15NPUfNPw3I22UXC',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://www.vintagemovieposters.co.uk/wp-content/uploads/2015/07/usualsuspectsquadlarge1.jpg',
            ],
            [
                'title' => 'Se7en',
                'description' => 'Two detectives, a rookie and a veteran, hunt a serial killer who uses the seven deadly sins as his motives.',
                'trailer_url' => 'https://www.youtube.com/embed/SpKbZ_3zlb0?si=YB9Qx02V5ibOLSCx',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJtcl7E4Tb5EddwQ5g3cynCqC3SR0OH2rRF81HVNh4UQ&s',
            ],
            [
                'title' => 'Saving Private Ryan',
                'description' => 'Following the Normandy Landings, a group of U.S. soldiers go behind enemy lines to retrieve a paratrooper whose brothers have been killed in action.',
                'trailer_url' => 'https://www.youtube.com/embed/S1Qj_AVu2pA?si=tfcdEnUBfpKP6M1i',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://i.pinimg.com/originals/ef/a0/56/efa056bb6bb2b5e14a7e1f615a874003.jpg',
            ],
            [
                'title' => 'The Green Mile',
                'description' => 'The lives of guards on Death Row are affected by one of their charges: a black man accused of child murder and rape, yet who has a mysterious gift.',
                'trailer_url' => 'https://www.youtube.com/embed/Bg7epsq0OIQ?si=xfbBSPtlbKXeFUcV',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
                'img_url' => 'https://i0.wp.com/www.irishfilmcritic.com/wp-content/uploads/2022/01/The-Green-Mile.jpg?fit=1392%2C696&ssl=1',
            ]
        ];

        foreach ($movies as $movieData) {
            $movie = Movie::create($movieData);

            $genres = Genre::inRandomOrder()->take(rand(1, 5))->get();
            $movie->genres()->attach($genres);
        }
    }
}
