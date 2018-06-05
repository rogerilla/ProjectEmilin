<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Histories;
use App\Category;
use App\User;
class HistoriesCRUDController extends Controller
{
   private $categories = [];
   private $autor = [];
    public function __construct() {
        foreach (Category::all() as $categoria) {
            $this->categories[$categoria->id] = $categoria->nom;
        }
        foreach (User::all() as $usuari) {
            $this->autor[$usuari->id] = $usuari->name;
        }
    }
    public function index()
    {
        $histories = Histories::all();
        foreach ($histories as $historia) {
            //En cas de volguer més de una categoria buscar mes de 1 id que fagi
            $historia['nom_autor'] = $this->autor[$historia->usuari];
        }
        
        //dd($categories);
        return view('web.backend.admin.fanfics.index', compact('histories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($historia)
    {
        $deleted = Histories::destroy($historia);
//        $deleted = $historia->delete();
        $message = $deleted ? 'historia eliminada correctament!' : 'La historia NO s´ha pogut eliminar!';
        return redirect()->route('fanfics.index')->with('message', $message);
    }
}
