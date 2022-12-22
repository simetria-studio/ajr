<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TesteController extends Controller
{
    public function index()
    {
        $url = Http::get('https://api-hml.gs1br.org/gs1/v0/products/');

        return response()->json($url);
    }
}
