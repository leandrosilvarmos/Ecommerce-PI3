<?php

namespace App\Http\Controllers;

use App\categoria;
use App\Http\Requests\CreateProdutosRequest;
use App\produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

        public function __construct()
        {
            $this->middleware('VerifyCategoriesCount')->only(['create' , 'store']);
        }

    public function index()
    {
        //

        return view('produtos.index')->with('produtos' , produtos::all())->with('categorias' , categoria::all()) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('produtos.create')->with('categorias' , categoria::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProdutosRequest $request)
    {
        //
            $image = $request->image->store('produtos');
            $produtos = produtos::create($request->all());

            $produtos->image = $image;
            $produtos->save();

            session()->flash('success' , 'Produto Criada com sucesso');

           return redirect(route('produtos.index'));

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
    public function destroy($id)
    {
        //
    }
}
