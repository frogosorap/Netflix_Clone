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
                'trailer_url' => 'https://www.youtube.com/embed/PLl99DlL6b4?si=XFBXIgzYTaHuPe0y',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'The Godfather',
                'description' => 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.',
                'trailer_url' => 'https://www.youtube.com/embed/UaVTIH8mujA?si=bUK21NWEe19_vDT0',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'The Dark Knight',
                'description' => 'When the menace known as The Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
                'trailer_url' => 'https://www.youtube.com/embed/EXeTwQWrcwY?si=Wo0d2YaOZVAG6RG0',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'Inception',
                'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
                'trailer_url' => 'https://www.youtube.com/embed/YoHD9XEInc0?si=Ln3RVkRSQ_kGfKmV',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'Pulp Fiction',
                'description' => 'The lives of two mob hitmen, a boxer, a gangster and his wife, and a pair of diner bandits intertwine in four tales of violence and redemption.',
                'trailer_url' => 'https://www.youtube.com/embed/s7EdQ4FqbhY?si=rl3m32K0cTN-wCi1',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'The Matrix',
                'description' => 'A computer hacker learns from mysterious rebels about the true nature of his reality and his role in the war against its controllers.',
                'trailer_url' => 'https://www.youtube.com/embed/vKQi3bBA1y8?si=4fWCcrWJ4F4jHyV0',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'Forrest Gump',
                'description' => 'The presidencies of Kennedy and Johnson, the Vietnam War, the Watergate scandal and other historical events unfold from the perspective of an Alabama man with an IQ of 75, whose only desire is to be reunited with his childhood sweetheart.',
                'trailer_url' => 'https://www.youtube.com/embed/bLvqoHBptjg?si=9ugTTTM6oVRgNFJ1',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'Interstellar',
                'description' => 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.',
                'trailer_url' => 'https://www.youtube.com/embed/zSWdZVtXT7E?si=W1HWMTFnsV_d5FiS',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'The Lord of the Rings: The Return of the King',
                'description' => 'Gandalf and Aragorn lead the World of Men against Sauron\'s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring.',
                'trailer_url' => 'https://www.youtube.com/embed/V75dMMIW2B4?si=BCCPOVBS6-11U4yU',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ], [
                'title' => 'Fight Club',
                'description' => 'An insomniac office worker and a devil-may-care soapmaker form an underground fight club that evolves into something much, much more.',
                'trailer_url' => 'https://www.youtube.com/embed/qtRKdVHc-cE?si=QdN4VBDhgc_xeB9e',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'The Social Network',
                'description' => 'As Harvard student Mark Zuckerberg creates the social networking site that would become known as Facebook, he is sued by the twins who claimed he stole their idea, and by the co-founder who was later squeezed out of the business.',
                'trailer_url' => 'https://www.youtube.com/embed/lB95KLmpLR4?si=o0EUcPThnVbcPvoO',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'The Silence of the Lambs',
                'description' => 'A young F.B.I. cadet must receive the help of an incarcerated and manipulative cannibal killer to help catch another serial killer, a madman who skins his victims.',
                'trailer_url' => 'https://www.youtube.com/embed/6iB21hsprAQ?si=nVEps-UOkLLtRvxn',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'Gladiator',
                'description' => 'A former Roman General sets out to exact vengeance against the corrupt emperor who murdered his family and sent him into slavery.',
                'trailer_url' => 'https://www.youtube.com/embed/P5ieIbInFpg?si=s6LJnicVUImSOnJg',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'Schindler\'s List',
                'description' => 'In German-occupied Poland during World War II, industrialist Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazis.',
                'trailer_url' => 'https://www.youtube.com/embed/veztNJQyRJg?si=oulC3ImQfX2Op0bR',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'The Departed',
                'description' => 'An undercover cop and a mole in the police attempt to identify each other while infiltrating an Irish gang in South Boston.',
                'trailer_url' => 'https://www.youtube.com/embed/r-MiSNsCdQ4?si=_O62jes_CSgqX5NQ',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'Goodfellas',
                'description' => 'The story of Henry Hill and his life in the mob, covering his relationship with his wife Karen Hill and his mob partners Jimmy Conway and Tommy DeVito in the Italian-American crime syndicate.',
                'trailer_url' => 'https://www.youtube.com/embed/2ilzidi_J8Q?si=RznJNesZxGOhoHOK',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'The Usual Suspects',
                'description' => 'A sole survivor tells of the twisty events leading up to a horrific gun battle on a boat, which began when five criminals met at a seemingly random police lineup.',
                'trailer_url' => 'https://www.youtube.com/embed/oiXdPolca5w?si=15NPUfNPw3I22UXC',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'Se7en',
                'description' => 'Two detectives, a rookie and a veteran, hunt a serial killer who uses the seven deadly sins as his motives.',
                'trailer_url' => 'https://www.youtube.com/embed/SpKbZ_3zlb0?si=YB9Qx02V5ibOLSCx',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'Saving Private Ryan',
                'description' => 'Following the Normandy Landings, a group of U.S. soldiers go behind enemy lines to retrieve a paratrooper whose brothers have been killed in action.',
                'trailer_url' => 'https://www.youtube.com/embed/S1Qj_AVu2pA?si=tfcdEnUBfpKP6M1i',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ],
            [
                'title' => 'The Green Mile',
                'description' => 'The lives of guards on Death Row are affected by one of their charges: a black man accused of child murder and rape, yet who has a mysterious gift.',
                'trailer_url' => 'https://www.youtube.com/embed/Bg7epsq0OIQ?si=xfbBSPtlbKXeFUcV',
                'created_at' => '2024-05-03 08:50:24',
                'updated_at' => '2024-05-03 08:50:24',
            ]
        ]);
    }
}
