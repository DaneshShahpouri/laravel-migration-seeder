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
        $trainCSV = fgetcsv($trainFile);
        //$trainCSV = fgetcsv($trainFile);
        //$trainCSV = fgetcsv($trainFile);
        //dd($trainCSV);



        //Questo ciclo è stata una prova per vedere due cose:
        // 1. Cosa accade al ciclo for se ragioniamo oltre il semplice ciclo incrementale.
        // 2. Ho pensato che dato che il ciclo for richiede di dichiarare una variabile
        //    forse potevo saltare il rigo del nome delle colonne cosi.
        //    Ragionandoci non ha molto senso, perchè credo che il for abbia uno scoope suo e quindi forse ho confuso le cose 
        //    dato che ora mi trovo con due variabili uguali, con lo stesso contenuto, su due ambienti diversi.
        //Avevo sbagliato nello scrivere il nome della variabile... cosi funziona.


        for ($trainCSV = fgetcsv($trainFile); $trainCSV != false; $trainCSV = fgetcsv($trainFile)) {
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
            //$trainCSV = fgetcsv($trainFile);
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
