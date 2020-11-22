<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
use Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 1;$i <= 50;$i++){
            $even = $i % 2 === 0 ? 0 : 100;
            User::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
            ]);
        };
    }
}



/*
[
    {
        "user_id": 1,
        "first_name": "Carolyn",
        "last_name": "Borer",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "tschultz@lubowitz.com",
        "has_orders": 1
    },
    {
        "user_id": 2,
        "first_name": "Nadia",
        "last_name": "Ryan",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "waters.mariah@yahoo.com",
        "has_orders": 0
    },
    {
        "user_id": 3,
        "first_name": "Kyla",
        "last_name": "Gerlach",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "pouros.ima@brakus.com",
        "has_orders": 1
    },
    {
        "user_id": 4,
        "first_name": "Josefa",
        "last_name": "Ledner",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "jewel.lynch@gmail.com",
        "has_orders": 0
    },
    {
        "user_id": 5,
        "first_name": "Macy",
        "last_name": "Zboncak",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "name.gleason@roberts.net",
        "has_orders": 1
    },
    {
        "user_id": 6,
        "first_name": "Octavia",
        "last_name": "Rosenbaum",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "hanna55@stanton.com",
        "has_orders": 0
    },
    {
        "user_id": 7,
        "first_name": "Vince",
        "last_name": "Nienow",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "justice78@auer.com",
        "has_orders": 1
    },
    {
        "user_id": 8,
        "first_name": "Brendon",
        "last_name": "Russel",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "jadyn90@gmail.com",
        "has_orders": 0
    },
    {
        "user_id": 9,
        "first_name": "Cloyd",
        "last_name": "Beahan",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "pjacobson@wisoky.net",
        "has_orders": 1
    },
    {
        "user_id": 10,
        "first_name": "Ole",
        "last_name": "Donnelly",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "muhammad.schulist@yost.biz",
        "has_orders": 0
    },
    {
        "user_id": 11,
        "first_name": "Diana",
        "last_name": "Hettinger",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "eichmann.macy@hotmail.com",
        "has_orders": 1
    },
    {
        "user_id": 12,
        "first_name": "Nikko",
        "last_name": "Stanton",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "giuseppe62@muller.com",
        "has_orders": 0
    },
    {
        "user_id": 13,
        "first_name": "Quentin",
        "last_name": "Schumm",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "hshields@rau.com",
        "has_orders": 1
    },
    {
        "user_id": 14,
        "first_name": "Carmela",
        "last_name": "Armstrong",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "lesch.dean@ullrich.info",
        "has_orders": 0
    },
    {
        "user_id": 15,
        "first_name": "Fermin",
        "last_name": "Brekke",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "vweimann@gmail.com",
        "has_orders": 1
    },
    {
        "user_id": 16,
        "first_name": "Mervin",
        "last_name": "Harvey",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "rosamond.koss@yahoo.com",
        "has_orders": 0
    },
    {
        "user_id": 17,
        "first_name": "Toy",
        "last_name": "Schoen",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "smoen@luettgen.biz",
        "has_orders": 1
    },
    {
        "user_id": 18,
        "first_name": "Reta",
        "last_name": "Huels",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "tschimmel@gutmann.com",
        "has_orders": 0
    },
    {
        "user_id": 19,
        "first_name": "Scotty",
        "last_name": "Kuhlman",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "emily.daniel@yahoo.com",
        "has_orders": 1
    },
    {
        "user_id": 20,
        "first_name": "Elaina",
        "last_name": "Kub",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "omraz@yahoo.com",
        "has_orders": 0
    },
    {
        "user_id": 21,
        "first_name": "Dewitt",
        "last_name": "Hane",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "haskell39@yahoo.com",
        "has_orders": 1
    },
    {
        "user_id": 22,
        "first_name": "Ayla",
        "last_name": "Krajcik",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "frankie.cruickshank@mcclure.com",
        "has_orders": 0
    },
    {
        "user_id": 23,
        "first_name": "Lucile",
        "last_name": "Hammes",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "corwin.thelma@hilpert.com",
        "has_orders": 1
    },
    {
        "user_id": 24,
        "first_name": "Mariah",
        "last_name": "Nolan",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "llarson@gmail.com",
        "has_orders": 0
    },
    {
        "user_id": 25,
        "first_name": "Stefan",
        "last_name": "Gleason",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "destiny.murphy@hotmail.com",
        "has_orders": 1
    },
    {
        "user_id": 26,
        "first_name": "Alexys",
        "last_name": "Purdy",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "cordelia82@gmail.com",
        "has_orders": 0
    },
    {
        "user_id": 27,
        "first_name": "Alba",
        "last_name": "Gorczany",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "quitzon.raphael@hotmail.com",
        "has_orders": 1
    },
    {
        "user_id": 28,
        "first_name": "Jennifer",
        "last_name": "Nitzsche",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "kmckenzie@yahoo.com",
        "has_orders": 0
    },
    {
        "user_id": 29,
        "first_name": "Sylvia",
        "last_name": "Barton",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "onie57@yahoo.com",
        "has_orders": 1
    },
    {
        "user_id": 30,
        "first_name": "Andy",
        "last_name": "Ernser",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "bianka22@mraz.com",
        "has_orders": 0
    },
    {
        "user_id": 31,
        "first_name": "Rae",
        "last_name": "Nikolaus",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "wehner.greta@kunde.com",
        "has_orders": 1
    },
    {
        "user_id": 32,
        "first_name": "Cloyd",
        "last_name": "Runolfsdottir",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "will.oran@dickinson.net",
        "has_orders": 0
    },
    {
        "user_id": 33,
        "first_name": "Maximo",
        "last_name": "Wilderman",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "bernadine14@stehr.net",
        "has_orders": 1
    },
    {
        "user_id": 34,
        "first_name": "Madie",
        "last_name": "Bernier",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "evan37@gmail.com",
        "has_orders": 0
    },
    {
        "user_id": 35,
        "first_name": "Gerson",
        "last_name": "Leuschke",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "dan52@hotmail.com",
        "has_orders": 1
    },
    {
        "user_id": 36,
        "first_name": "Otis",
        "last_name": "Keeling",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "eprice@spinka.info",
        "has_orders": 0
    },
    {
        "user_id": 37,
        "first_name": "Hilma",
        "last_name": "Cronin",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "vpfeffer@hotmail.com",
        "has_orders": 1
    },
    {
        "user_id": 38,
        "first_name": "Casandra",
        "last_name": "Auer",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "austin.jacobs@hotmail.com",
        "has_orders": 0
    },
    {
        "user_id": 39,
        "first_name": "Juliet",
        "last_name": "Crooks",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "maximillian.daugherty@gmail.com",
        "has_orders": 1
    },
    {
        "user_id": 40,
        "first_name": "Berry",
        "last_name": "Kub",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "ookeefe@gmail.com",
        "has_orders": 0
    },
    {
        "user_id": 41,
        "first_name": "Lamont",
        "last_name": "Ondricka",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "elta.olson@gmail.com",
        "has_orders": 1
    },
    {
        "user_id": 42,
        "first_name": "Godfrey",
        "last_name": "Leannon",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "qbalistreri@jaskolski.net",
        "has_orders": 0
    },
    {
        "user_id": 43,
        "first_name": "Mikel",
        "last_name": "Bode",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "wanda.gaylord@hotmail.com",
        "has_orders": 1
    },
    {
        "user_id": 44,
        "first_name": "Diego",
        "last_name": "Murray",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "augustine71@nicolas.com",
        "has_orders": 0
    },
    {
        "user_id": 45,
        "first_name": "Ryann",
        "last_name": "Auer",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "orn.elinore@koch.org",
        "has_orders": 1
    },
    {
        "user_id": 46,
        "first_name": "Paolo",
        "last_name": "Sanford",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "runte.myrtis@yahoo.com",
        "has_orders": 0
    },
    {
        "user_id": 47,
        "first_name": "Jerald",
        "last_name": "Kiehn",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "haskell79@yahoo.com",
        "has_orders": 1
    },
    {
        "user_id": 48,
        "first_name": "Winona",
        "last_name": "Friesen",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "ara.orn@hotmail.com",
        "has_orders": 0
    },
    {
        "user_id": 49,
        "first_name": "Irma",
        "last_name": "Kunde",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "vita.lindgren@gmail.com",
        "has_orders": 1
    },
    {
        "user_id": 50,
        "first_name": "Maybell",
        "last_name": "Erdman",
        "created_at": "2020-11-21 07:31:45",
        "updated_at": "2020-11-21 07:31:45",
        "email": "krystal.graham@gmail.com",
        "has_orders": 0
    }
]

*/
