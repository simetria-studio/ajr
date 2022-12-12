<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class icmsinternaController extends Controller
{
    public function index()
    {
        return view('pages.calculadoras.interna');
    }
}
