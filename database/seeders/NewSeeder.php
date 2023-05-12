<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class NewSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
        for($i = 0; $i < 20; $i++){

            $train = new Train();

            $train->azienda = $faker->word();
            $train->stazione_di_partenza = $faker->city() ;
            $train->stazione_di_arrivo = $faker->city();
            $train->orario_di_partenza = $faker->time();
            $train->orario_di_arrivo = $faker->time();
            $train->data_di_partenza = $faker->date('Y_m_d');
            $train->codice_treno =  $faker->isbn10();
            $train->numero_carrozze = $faker-> numberBetween(0, 12);
            $train->in_orario = $faker->numberBetween(0, 1);
            $train->cancellato = $faker->numberBetween(0, 1);
        }
    }
}
