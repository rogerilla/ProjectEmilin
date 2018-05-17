<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoriesController extends Controller {

    public function index() {
        $histories = Histories::all();
        //dd($noticies);
        return view('web.historia', compact('histories'));
    }

}
