<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticies;
use App\Histories;
use App\User;

class NoticiesController extends Controller {
    private $autor = [];
    private $user = [];
    public function __construct() {
        foreach (User::all() as $usuari) {
            $this->user[$usuari->id] = $usuari->name;
            $this->autor[$usuari->id] = $usuari->name;
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
          $historia_rand['nom_autor'] = $this->autor[$historia_rand->usuari];
            
        $last_histories = Histories::orderBy('id', 'DESC')
                ->limit(3)
                ->get();
        foreach ($last_histories as $historia) {
          $historia['nom_autor'] = $this->autor[$historia->usuari];
       }
        
        return view('web.index', compact('noticies'), compact('historia_rand', 'last_histories'));
    }

}
