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
            $newTrain->orario_di_partenza = $faker->'12:12:56';
            $newTrain->orario_di_arrivo = $faker->'01:02:56';
            $newTrain->codice_treno = $faker->'TRNTL00001';
            $newTrain->numero_carrozze = $faker->;
            $newTrain->in_orario = 1;
            $newTrain->cancellato = 0;
        }
    }
}
