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

        $fotos = $product->fotos()->where('seo_og_image', false)->get();
        $fotoSeo = $product->fotos()->where('seo_og_image', true)->first();
        return view('public.home_products.index', compact('product', 'fotos', 'fotoSeo'));
    }
}
