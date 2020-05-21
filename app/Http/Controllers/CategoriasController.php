<?php

namespace App\Http\Controllers;

use App\categoria;
use App\Http\Requests\CreateCategoriasRequest;
use App\Http\Requests\EditCategoriasRequest;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
    }


    public function index()
    {
        //
         return view('categorias.index')->with('categorias' , categoria::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCategoriasRequest $request)
    {
        //Cadastro de categorias

        categoria::create([
            'name' => $request->name
        ]);

        session()->flash('success' , 'Categoria Criada com sucesso');

        return redirect(route('categorias.index'));
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
    public function edit(categoria $categoria)
    {
        //

        return view('categorias.edit')->with('categorias' , $categoria);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditCategoriasRequest $request, categoria $categoria)
    {
        //

        $categoria->update([
            'name' => $request->name
        ]);

        session()->flash('success' , 'Categoria alterada com sucesso');

        return redirect(route('categorias.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
