<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Histories;
use App\Category;
use App\User;
use App\Categoriahistoria;
class HistoriesController extends Controller {

    //   private $categories = [];
  private $autor = [];
  private $categories_nom = [];
    public function __construct() {
        foreach (Category::all() as $categoria) {
            $this->categories_nom[$categoria->id] = $categoria->nom;
        }
        foreach (User::all() as $usuari) {
            $this->autor[$usuari->id] = $usuari->name;
        }
    }

    public function index($button) {
        $histories_tot = histories::all();
        if ($button == 'A-Z') {
            $histories = histories::orderBy('titol', 'ASC')->get();
            foreach ($histories_tot as $historia) {
            $categories = Categoriahistoria::OrderBy('id_categories', 'ASC')
                        ->where('id_historia','=', $historia->id)
                        ->get();
            }
            foreach ($histories as $historia) {
                //En cas de volguer més de una categoria buscar mes de 1 id que fagi
                $historia['nom_autor'] = $this->autor[$historia->usuari];
            }
        } else if ($button == 'ultims') {
            $histories = histories::orderBy('id', 'DESC')->get();
            foreach ($histories_tot as $historia) {
            $categories = Categoriahistoria::OrderBy('id_categories', 'ASC')
                        ->where('id_historia','=', $historia->id)
                        ->get();
            }
            
            //selec * from categories where id_categoria in (select id_categoria frrom categoriahustirua were id_historia = j
            
            foreach ($histories as $historia) {
                //En cas de volguer més de una categoria buscar mes de 1 id que fagi
                $historia['nom_autor'] = $this->autor[$historia->usuari];
            }
        } else if ($button == 'primers') {
            
            $histories = histories::orderBy('id', 'ASC')->get();
            foreach ($histories_tot as $historia) {
            $categories = Categoriahistoria::OrderBy('id_categories', 'ASC')
                        ->where('id_historia','=', $historia->id)
                        ->get();
            }
            foreach ($categories as $categoria){
            $categoria['nom_categoria'] = $this->categoria_nom[$categoria->id_categories];
            }
            foreach ($histories as $historia) {
                //En cas de volguer més de una categoria buscar mes de 1 id que fagi
                $historia['nom_autor'] = $this->autor[$historia->usuari];
            }
        }
        //dd($histories);

        return view('web.historia', compact('histories'), compact('categories'));
    }

    public function veure_fanfic($titol) {

        $historia = Histories::where('titol', $titol)
                ->first();
        $historia['nom_autor'] = $this->autor[$historia->usuari];
        return view('web.mostrar_fanfic', compact('historia'));
    }

   
        

       

}
