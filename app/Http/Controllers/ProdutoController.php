<?php

namespace App\Http\Controllers;

use App\Models\InfoProduto;
use App\Models\State;
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
        $estados = State::all();
        return view('dashboard.produtos.create', get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Produto::create($request->all());

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

        $produtos = Produto::findOrFail($id);

        // return response()->json($produto);
        return view('dashboard.produtos.show', get_defined_vars());
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
    public function destroy(Request $request)
    {
        Produto::findOrFail($request->id)->delete();

        return redirect('/dashboard/produtos')->with('delete', 'Produto excluído com sucesso!');
    }
    public function createInfo()
    {
        $estados = State::all();
        $produtos = Produto::all();
        return view('dashboard.produtos.create-info', get_defined_vars());
    }

    public function storeInfo(Request $request)
    {
        InfoProduto::create($request->all());

        return redirect()->back();

    }

    public function teste()
    {
        $produto = Produto::with('estado')->get();
        dd($produto);
    }

    public function teste2()
    {
        $produto = Produto::where('estado_id', 1)->get();
        dd($produto);
    }
}
