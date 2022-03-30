<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
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
        $fornecedor = Fornecedor::all();
        return view("Fornecedor.index", compact("fornecedor"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Fornecedor.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // try{
            $fornecedor = new Fornecedor();
            $dados = $request->only($fornecedor->getFillable());
            Fornecedor::create($dados);
            return redirect()->action([FornecedorController::class, "index"]);
        // }
        // catch(\Exception $e){
        //     echo "Erro ao Inserir!!";
        // }
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
        $fornecedor = Fornecedor::findOrFail($id);
        return view("Fornecedor.edit", compact("fornecedor"));
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
            $fornecedors = new Fornecedor();
            $dados = $request->only($fornecedors->getFillable());
            Fornecedor::whereId($id)->update($dados);
            return redirect()->action([FornecedorController::class, "index"]);
        }
        catch(\Exception $e){
            echo "Erro ao Atualizar!!";
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
            Fornecedor::destroy($id);
            return redirect()->action([FornecedorController::class, "index"]);
        }
        catch(\Exception $e){
            echo "Erro ao Excluir!!";
        }
        
    }
}
