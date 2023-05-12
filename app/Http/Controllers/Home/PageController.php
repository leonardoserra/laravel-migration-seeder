<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Train;
class PageController extends Controller
{
    public function index(){

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

        $trains = Train::all();

        return view('home', compact('trains'));
    }
}
