<?php
use \Illuminate\Database\Seeder;
use App\Promotion;

//require_once 'vendor\fzaninotto\faker\src\autoload.php';

class PromotionsTableSeeder extends Seeder{
    public function run()
    {
        $faker = Faker\Factory::create();

        Promotion::truncate();

        foreach (range(1, 20) as $idx) {
            Promotion::create([
                'title' => $faker->name,
                'expiredate' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'description' => $faker->paragraph(10),
                'discount' => $faker->numberBetween($min = 10, $max = 90),
                'imgUrl' => 'demo_1.gif'
            ]);
        }
    }
}