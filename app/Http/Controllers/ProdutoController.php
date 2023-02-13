<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\Produto;
use App\Models\InfoProduto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $estados = State::all();
        $produtos = Produto::all();
        $info = InfoProduto::with('estado')->with('produto')->paginate(10);

        $nome_produto = $request->input('nome_produto');
        $produtos = DB::table('produtos')
        ->where(function($query) use ($nome_produto) {
            $query->where('nome_produto', 'like', '%' . $nome_produto . '%');
        });


        return view('dashboard.produtos.produto', get_defined_vars());
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
        $info = InfoProduto::with('estado')->with('produto')->findOrFail($id);
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
        $estados = State::all();
        $info = InfoProduto::with('estado')->with('produto')->findOrFail($id);
        return view('dashboard.produtos.edit', get_defined_vars());
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
        InfoProduto::findOrFail($request->id)->update($request->all());
        State::findOrFail($request->id)->update($request->all());
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
        InfoProduto::findOrFail($request->id)->delete();

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

        return redirect('/dashboard/produtos')->with('mensagem', 'Informação cadastrada com sucesso!');
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
