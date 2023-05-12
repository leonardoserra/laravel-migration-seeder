<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Train;
class PageController extends Controller
{
    public function index(){
        $trains = Train::all();
        return view('home', compact('trains'));
    }
}
