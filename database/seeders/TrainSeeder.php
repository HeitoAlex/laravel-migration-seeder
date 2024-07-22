<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10; $i++) {
            $trains = new Train();
            $trains->company = $faker->word();
            $trains->departure_station = $faker->city();
            $trains->arrival_station = $faker->city();
            $trains->departure_time = $faker->dateTime();
            $trains->arrival_time = $faker->dateTime();
            $trains->train_code = $faker->randomNumber(5, true);
            $trains->wagons_no = $faker->numberBetween(0,20);
            $trains->on_time = $faker->boolean();
            $trains->deleted = $faker->boolean();
            $trains->save();
        }

    }
}
