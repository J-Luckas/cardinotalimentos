<?php

namespace App\Http\Controllers;

use App\Foto_produto;
use App\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $products = Produto::all();
        $fotos = Foto_produto::offset(0)->limit(15)->get();

        return view('public.index', compact('products','fotos'));
    }
}
