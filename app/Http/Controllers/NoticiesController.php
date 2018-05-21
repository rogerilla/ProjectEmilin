<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticies;
use App\Histories;

class NoticiesController extends Controller {

    public function index() {
        
        $noticies = Noticies::latest()
                ->limit(3)
                ->get();
        //dd($noticies);
        $historia_rand = Histories::inRandomOrder()
                ->first();
        $last_histories = Histories::latest()
                ->limit(3)
                ->get();
        return view('web.index', compact('noticies'), compact('historia_rand'), compact('last_histories'));
    }

}
