<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Noticies;
use App\User;
use Illuminate\Support\Facades\Auth;
class NoticiesCRUDController extends Controller {

    private $autor = [];

    public function __construct() {
        foreach (User::all() as $usuari) {
            $this->autor[$usuari->id] = $usuari->name;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $noticies = Noticies::all();
        foreach ($noticies as $noticia) {
            //En cas de volguer més de una categoria buscar mes de 1 id que fagi
            $noticia['nom_autor'] = $this->autor[$noticia->id_user];
        }
        return view('web.backend.admin.noticies.index', compact('noticies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('web.backend.admin.noticies.crearNoticia');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        $validacio = $this->validate($request, [
          'titol' => 'required|unique:noticies|max:255',
           'noticia'=>'required|unique:noticies'
        ]);
        $idUsuari = Auth::id();
        if ($validacio){
        $noticies = noticies::create([
            'titol' => $request->get('titol'),
            'noticia' => $request->get('noticia'),
            'id_user' => $idUsuari
        ]);
        }
        $message = $noticies ? 'Noticia creada correctament!' : 'La noticia NO s`ha pogut afegir!';
        return redirect()->route('noticies.index')->with('message', $message);
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
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
