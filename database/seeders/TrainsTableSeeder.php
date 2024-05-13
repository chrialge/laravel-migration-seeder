<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        $trains = config('db.trains');
        // $trains = [
        //     [
        //         'agency' => 'TrenoEuropeo',
        //         'starting_station' => 'Milano',
        //         'arrival_station' => 'Amsterdam',
        //         'starting_time' => '10:00:00',
        //         'arrival_time' => '23:00:00',
        //         'data' => '2024-05-13',
        //         'code_train' => 'EDF3214',
        //         'number_binary' => '9',
        //         'in_time' => 1,
        //         'deleted' => 0,

        //     ]
        // ];

        for ($i=0; $i < 1; $i++) { 
            $newTrain = new Train();
            $newTrain->agency = 'Treno'. ucfirst($faker->word(10));
            $newTrain->starting_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->starting_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->data = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->code_train = strtoupper($faker->bothify('???####'));
            $newTrain->number_binary = $faker->randomDigitNotNull();
            $newTrain->in_time = 0;
            $newTrain->deleted = 0;
            $newTrain->save();
        }

        // foreach ($trains as $train) {
        //     $newTrain = new Train();
        //     $newTrain->agency = $train['agency'];
        //     $newTrain->starting_station = $train['starting_station'];
        //     $newTrain->arrival_station = $train['arrival_station'];
        //     $newTrain->starting_time = $train['starting_time'];
        //     $newTrain->arrival_time = $train['arrival_time'];
        //     $newTrain->data = $train['data'];
        //     $newTrain->code_train = $train['code_train'];
        //     $newTrain->number_binary = $train['number_binary'];
        //     $newTrain->in_time = $train['in_time'];
        //     $newTrain->deleted = $train['deleted'];
        //     $newTrain->save();
        // }

    }
}

