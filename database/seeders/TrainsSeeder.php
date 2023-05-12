<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 100; $i++) {
            $newTrain = new Train();

            $newTrain->company = $faker->company();
            $newTrain->first_station = $faker->city();
            $newTrain->last_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->departure_date = $faker->date();
            $newTrain->arrival_time = $faker->time();
            $newTrain->arrival_date = $faker->date();
            $newTrain->train_code = $faker->numerify('trn-###');
            $newTrain->wagons_number = $faker->randomNumber(2, false);
            $newTrain->is_in_time = $faker->boolean();
            $newTrain->is_delete = $faker->boolean();

            $newTrain->save();
        }
    }
}
