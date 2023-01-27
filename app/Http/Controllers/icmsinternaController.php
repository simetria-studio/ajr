<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class icmsinternaController extends Controller
{
    public function index($id)
    {


        $produtos = Produto::find($id);
        return view('pages.calculadoras.interna', get_defined_vars());
    }
}
