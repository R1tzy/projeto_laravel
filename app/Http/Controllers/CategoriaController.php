<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Catch_;

class CategoriaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view("Categoria.index", compact("categorias"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Categoria.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $categoria = new Categoria();
            $dados = $request->only($categoria->getFillable());
            Categoria::create($dados);
            return redirect()->action([CategoriaController::class, "index"]);
        }catch(\Exception $e){
            echo "Erro ao inserir";
        }
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
        $categoria = Categoria::findOrFail($id);
        return view("Categoria.edit", compact("categoria"));
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
        try{
            $categoria = new Categoria();
            $dados = $request->only($categoria->getFillable());
            Categoria::whereId($id)->update($dados);
            return redirect()->action([CategoriaController::class, "index"]);
        }
        catch(\Exception $e){
            echo "Erro ao atualizar";
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            Categoria::destroy($id);
            return redirect()->action([CategoriaController::class, "index"]);
        }
        catch(\Exception $e){
            echo "Erro ao deletar";
        }
    }
}
