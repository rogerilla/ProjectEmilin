<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticies;
use App\Histories;
use App\User;

class NoticiesController extends Controller {

    private $user = [];
    public function __construct() {
        foreach (User::all() as $administrador) {
            $this->user[$administrador->id] = $administrador->name;
        }
    }

    public function index() {

        $noticies = Noticies::orderBy('id', 'DESC')
                ->limit(2)
                ->get();
        foreach ($noticies as $noticia) {
            //En cas de volguer més de una categoria buscar mes de 1 id que fagi
            $noticia['autor'] = $this->user[$noticia->id_user];
        }
        //dd($noticies);
        $historia_rand = Histories::inRandomOrder()
                ->first();
        
            
        $last_histories = Histories::orderBy('id', 'DESC')
                ->limit(3)
                ->get();
        
        return view('web.index', compact('noticies'), compact('historia_rand', 'last_histories'));
    }

}
