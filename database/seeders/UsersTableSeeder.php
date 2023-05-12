<?php

namespace Database\Seeders;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 20; $i++){

            $newTrain = new Train();

            $newTrain->azienda = $faker->word();
            $newTrain->stazione_di_partenza = $faker->city() ;
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->data_di_partenza = date('Y-m-d');
            $newTrain->codice_treno =  $faker->isbn10();
            $newTrain->numero_carrozze = $faker-> numberBetween(0, 12);
            $newTrain->in_orario = $faker->numberBetween(0, 1);
            $newTrain->cancellato = $faker->numberBetween(0, 1);
        }
    }
}
