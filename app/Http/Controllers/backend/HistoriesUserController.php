<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Histories;
use App\Category;
use App\User;
use App\Categoriahistoria;
use Illuminate\Support\Facades\Auth;

class HistoriesUserController extends Controller {

//   private $categories = [];
    public function __construct() {
//        foreach (Category::all() as $categoria) {
//            $this->categories[$categoria->id] = $categoria->nom;
//        }
    }
    public function index() {
        $usuari = Auth::id();
        $histories = Histories::where('usuari', $usuari)
                ->get();
        return view('web.backend.user.fanfic.fanfiction', compact('histories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories = Category::orderBy('id', 'ASC')->get();
        return view('web.backend.user.fanfic.crearFanfic', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validacio = $this->validate($request, [
            'titol' => 'required|unique:histories|max:255',
            'resum' => 'required'
        ]);
        $idUsuari = Auth::id();
        if ($validacio) {
            $id_histories = Histories::create([
                        'usuari' => $idUsuari,
                        'titol' => $request->get('titol'),
                        'resum' => $request->get('resum'),
                        'contingut' => $request->get('contingut'),
                    ])->id;

            $categories = $request->get('categoria');

            foreach ($categories as $categoria) {
                $crearhistoriacategoria = Categoriahistoria::create([
                            'id_historia' => $id_histories,
                            'id_categories' => $categoria
                ]);
            }
        }

       return redirect()->route('fanfiction.index', Auth::User()->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Histories $historia) {
        return view('web.backend.user.fanfic.editarFanfic', compact('historia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Histories $historia) {
        
        $historia->fill($request->all());
        $historia->titol = $request->get('titol');
        $historia->resum = $request->get('resum');
        $historia->contingut = $request->get('contingut');
        
        $updated = $historia->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($historia) {
        $deleted = Histories::destroy($historia);
//        $deleted = $historia->delete();
        return redirect()->route('fanfiction.index', Auth::User()->name);
    }

}
