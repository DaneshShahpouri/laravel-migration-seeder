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
        $trainFile = fopen(__DIR__ . '/../trains.csv', 'r');
        //dd($trainFile);
        // $trainCSV = fgetcsv($trainFile);
        $trainCSV = fgetcsv($trainFile);
        $trainCSV = fgetcsv($trainFile);
        //dd($trainCSV);

        for ($tranCSV = fgetcsv($trainFile); $tranCSV != false; $tranCSV = fgetcsv($trainFile)) {
            $newTrain = new Train();

            $newTrain->company = $trainCSV[0];
            $newTrain->departure_station = $trainCSV[1];
            $newTrain->arrival_station = $trainCSV[2];
            $newTrain->departure_time = $trainCSV[3];
            $newTrain->arrival_time = $trainCSV[4];
            $newTrain->train_code = $trainCSV[5];
            $newTrain->wagons_number = $trainCSV[6];
            $newTrain->on_time = $trainCSV[7];
            $newTrain->cancelled = $trainCSV[8];

            $newTrain->save();
        };

        // for ($i = 0; $i < 1; $i++) {
        //     $newTrain = new Train();

        //     $newTrain->company = $faker->company();
        //     $newTrain->departure_station = $faker->city();
        //     $newTrain->arrival_station = $faker->city();
        //     $newTrain->departure_time = $faker->datetime();
        //     $newTrain->arrival_time = $faker->datetime();
        //     $newTrain->train_code = $faker->numerify('trn-###');
        //     $newTrain->wagons_number = $faker->randomNumber(2, false);
        //     $newTrain->on_time = $faker->boolean();
        //     $newTrain->cancelled = $faker->boolean();

        //     $newTrain->save();
        // }
    }
}
