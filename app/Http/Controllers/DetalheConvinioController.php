<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\Produto;
use App\Models\InfoProduto;
use Illuminate\Http\Request;

class DetalheConvinioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $produto = Produto::find($id);
        $info = InfoProduto::with('estado')->where('produto_id', $id)->first();
        $estados = State::all();
        return view('site.step-3', get_defined_vars() );
    }

    public function filtroEstado(Request $request)
    {
        $produto = Produto::find($request->produto);
        $info = InfoProduto::with('estado')->where('produto_id', $request->produto)->where('estado_id', $request->estado)->first();
        $view = view('includes.info-produto', get_defined_vars())->render();

        return response()->json([get_defined_vars()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $estados = State::all();

        return view('pages.calculadoras.step-3', get_defined_vars());
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
