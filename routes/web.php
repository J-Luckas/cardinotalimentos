<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "HomeController@index")->name('site.index');

Route::get('/produto/{slug_produto}', "ProductController@index")->name('site.produto.index')->where('slug_produto','[a-zA-Z-]+');

Route::post('/enviar-email', "SendEmailController@create")->name('site.enviar-email');
