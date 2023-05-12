<?php

namespace Database\Seeders;
use database\seeders\UsersTableSeeder;
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
    public function run()
    {
            $newTrain = new Train();

            $newTrain->azienda = 'Trenitalia';
            $newTrain->stazione_di_partenza = 'Parma';
            $newTrain->stazione_di_arrivo = 'Bologna';
            $newTrain->orario_di_partenza = '12:12:56';
            $newTrain->orario_di_arrivo = '01:02:56';
            $newTrain->codice_treno = 'TRNTL00001';
            $newTrain->numero_carrozze = 7;
            $newTrain->in_orario = true;
            $newTrain->cancellato = false;
    }
}
