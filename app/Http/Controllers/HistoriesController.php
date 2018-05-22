<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Histories;
use App\Category;

class HistoriesController extends Controller {

    private $categories = [];

    public function __construct() {
        foreach (Category::all() as $categoria) {
            $this->categories[$categoria->id] = $categoria->nom;
        }
    }

    public function index() {
        $histories = histories::orderBy('titol', 'ASC')->get();
        foreach ($histories as $historia) {
            //En cas de volguer més de una categoria buscar mes de 1 id que fagi
            $historia['nom_categoria'] = $this->categories[$historia->id_categoria];
        }
        //dd($histories);
        
        return view('web.historia', compact('histories'));
    }

    public function veure_fanfic($titol) {

        $historia = Histories::where('titol', $titol)->first();
        $historia['nom_categoria'] = $this->categories[$historia->id_categoria];
        return view('web.mostrar_fanfic', compact('historia'));
    }
    public function ultims(){
        $histories = histories::orderBy('id', 'DESC')->get();
        foreach ($histories as $historia) {
            //En cas de volguer més de una categoria buscar mes de 1 id que fagi
            $historia['nom_categoria'] = $this->categories[$historia->id_categoria];
        }
        //dd($histories);
        
        return view('web.historia', compact('histories'));
    }
    
    

}
