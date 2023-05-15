<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $contenutoCSV = Helpers::prelevaDaCvs(__DIR__ . '/trains.csv');

        foreach($contenutoCSV  as $index => $row ){
            if($index > 0){

                $train = new Train();
    
                $train->azienda = $row[0];
                $train->stazione_di_partenza = $row[1]; 
                $train->stazione_di_arrivo = $row[2];
                $train->orario_di_partenza = $row[3];
                $train->orario_di_arrivo = $row[4];
                $train->data_di_partenza = $row[5];
                $train->codice_treno =  $row[6];
                $train->numero_carrozze = $row[7];
                $train->in_orario = $row[8];
                $train->cancellato = $row[9];
                $train->save();
            }

        }
    }
}
