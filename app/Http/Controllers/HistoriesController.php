<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Histories;

class HistoriesController extends Controller {

    public function index() {
       // $histories = histories::all();
        $histories = histories::orderBy('titol', 'ASC')->get();
         //dd($histories);
           return view('web.historia', compact('histories'));
   }
    public function veure_fanfic($titol) {
        $historia = Histories::where('titol', $titol)->first();
        return view('web.mostrar_fanfic', compact('historia'));
    }

}
