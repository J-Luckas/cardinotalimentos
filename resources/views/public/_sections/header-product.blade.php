<!DOCTYPE html>
<html lang="pt-BR">
    <head>

        <meta charset="UTF-8">

        <!-- SEO -->
        <title> Cardinot Alimentos - {{ $product->nome }} </title>
        <link rel="icon" href="{{asset('img/logo-icone.ico')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:title" content="Cardinot Alimentos">
        <meta name="description" content=" {{ $product->descricao }}"/>
        <meta name="keywords" content="Pão, queijo, pão de queijo, pao de queijo, cardinot, paes de queijo, Cardinot Alimentos, alimentos">
        <link rel="canonical" href="https://www.cardinotalimentos.com">
        <meta name="author" content="Jairo Luckas">
        <meta name="robots" content="index">
        <meta http-equiv=”content-language” content=”pt-br”>
        <meta http-equiv=”content-type” content=”text/html; charset=UTF-8″>

        <!-- Open Graph Facebook -->
        <meta property="og:title" content="Cardinot Alimentos - {{ $product->nome }}">
        <meta property="og:description" content="{{ $product->descricao }}"/>
        <meta property="og:url" content="https://www.cardinotalimentos.com">
        <meta property="og:site_name" content="Cardinot Alimentos"/>
        <meta property="og:type" content="website">
        <meta property="og:image" itemprop="image" content="{{ asset($fotos->first()->url) }}">
        <meta property="og:image:type" content="image/webp">

        <!-- Twitter -->
        <meta name="twitter:title" content="Cardinot Alimentos - {{ $product->nome }}">
        <meta name="twitter:description" content="{{ $product->descricao }}">
        <meta name="twitter:url" content="https://www.cardinotalimentos.com">
        <meta name="twitter:card" content="Temos planos e preços especiais para sua empresa. Entre em contato conosco, será uma honra conhecê-los! CARDINOT ALIMENTOS - A SUA CASA DO PÃO DE QUEIJO!">
        <meta name="twitter:image" content="{{ asset($fotos->first()->url) }}">
        <meta property="twitter:image:type" content="image/webp">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Custom CSS -->
        <link rel="stylesheet" href=" {{ asset('css/style.css') }} ">

        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <script src="{{asset('js/contact.js')}}"></script>

    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    @include('public._sections.menu')
