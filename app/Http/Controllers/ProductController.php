<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Foto_produto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index( string $slug_produto ) {
        $product = new Produto();
        $product = $product->where('slug', $slug_produto)->first();

        $fotos = $product->fotos;
        return view('public.home_products.index', compact('product', 'fotos'));
    }
}
