<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;

class CategoryController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $categories = Category::all();
        //dd($categories);
        return view('web.backend.admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
//       
        return view('web.backend.admin.category.crearCategoria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validacio = $this->validate($request, [
            'nom' => 'required|unique:categories|max:25',
        ]);
        if ($validacio) {
            $category = Category::create([
                        'nom' => $request->get('nom'),
            ]);
        }
        $message = $category ? 'Categoria creada correctament!' : 'La Categoria NO s`ha pogut afegir!';
        return redirect()->route('category.index')->with('message', $message);
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
    public function edit(Category $category) {
        return view('web.backend.admin.category.editarCategoria', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Category $category) {
        $category->fill($request->all());
        $category->nom = $request->get('nom');
        
        $updated = $category->save();
        
        $message = $updated ? 'Categoria actualitzada correctament!' : 'La Categoria NO s´ha pogut actualitzar!';
        return redirect()->route('category.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($category) {
        
        $deleted = $category->delete();
        $message = $deleted ? 'Categoria eliminada correctament!' : 'La Categoria NO s´ha pogut eliminar!';
        return redirect()->route('category.index')->with('message', $message);
    }

}
