<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i<10; $i++){
            $newTrain= new Train();
            $newTrain->company = $faker->randomElement(['Trenitalia','Italo']);
            $newTrain->depature_station= $faker->city();
            $newTrain->arrival_station= $faker->city();
            $newTrain->departure_time= $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->arrival_time= $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->train_code= $faker->unique()->bothify('??#####');
            $newTrain->number_of_carriages = $faker->numberBetween('3', '15');
            $newTrain->is_in_time= $faker->numberBetween('0', '1');
            $newTrain->is_canceled= $faker->numberBetween('0', '1');
            $newTrain->save();
        }
    }
}
