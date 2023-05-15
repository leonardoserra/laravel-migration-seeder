<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
class PageController extends Controller
{
    public function index(){
        // $trains = Train::whereDate('data_di_partenza', '=', date('Y-m-d'))->get();
        $trains = Train::all();
        // dd($trains);
        return view('home', compact('trains'));
    }
}
