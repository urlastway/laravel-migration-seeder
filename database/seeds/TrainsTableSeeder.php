<?php

use Illuminate\Database\Seeder;

use App\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i<20; $i++){
            $newTrain = new Train();
            $newTrain->train_code = $faker->regexify('[A-Z]{5}[0-4]{3}');
            $newTrain->cpmpany = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_date = $faker->dateTimeBetween(date('Y_m_d'), '+1 week');
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_date = $faker->dateTimeBetween(date('Y_m_d'), '+1 week');
            $newTrain->arrival_time = $faker->time();
            $newTrain->number_of_carriages = rand(1, 30);
            $newTrain->on_time = $faker->boolean();
            $newTrain->void = $faker->boolean();

            $newTrain->save();
        }
    }
}
