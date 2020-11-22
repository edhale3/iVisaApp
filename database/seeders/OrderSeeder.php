<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use Faker;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 1;$i <= 113;$i++){
            $even = $i % 2 === 0 ? 0 : 100;
            Order::create([
                'product_title' => $faker->word,
                'owner_id' => $faker->numberBetween($min = 25, $max = 50)
            ]);
        };
    }
}
