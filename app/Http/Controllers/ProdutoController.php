<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::paginate(10);
        // $produtos = Produto::all();

        return view('dashboard.produtos.produto', [
            'produtos' => $produtos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $produto = new Produto;

        $produto->nome_produto = $request->nome_produto;
        $produto->cest = $request->cest;
        $produto->ncm = $request->ncm;
        $produto->segmento = $request->segmento;
        $produto->descricao = $request->descricao;
        $produto->aliquota = $request->aliquota;
        $produto->mva = $request->mva;
        $produto->fcp = $request->fcp;
        $produto->ajuste1 = $request->ajuste1;
        $produto->ajuste2 = $request->ajuste2;
        $produto->ajuste3 = $request->ajuste3;
        $produto->pauta = $request->pauta;
        $produto->protocolo = $request->protocolo;
        $produto->estados = $request->estados;

        $produto->save();

        return redirect('/dashboard/produtos')->with('mensagem', 'Produto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::findOrFail($id);

        return response()->json($produto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('dashboard.produtos.edit', ['produto' => $produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Produto::findOrFail($request->id)->update($request->all());
        return redirect('/dashboard/produtos')->with('mensagem', 'Produto editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produto::findOrFail($id)->delete();

        return redirect('/dashboard/produtos')->with('delete', 'Produto excluído com sucesso!');
    }
}
