<div class="container pb-5" id="produtos">
    <div class="row">
        <div class="title-section text-center" style="width: 100%;">
            <div class="separator"> <h2>Produtos</h2> </div>
        </div>
    </div>
    <div class="row">

        @foreach( $products as $key => $prods )
            <div class="col-xl-3 col-md-6 col-xs-2 card-break card-inteiro">
                <a href="{{ route('site.produto.index', $prods->slug) }}" class="text-decoration-none">
                    <div class="card" id="prod-{{ $key }}" style="margin: auto;width:100%;max-width: 300px;">
                        <img class="card-img-top" src="{{ asset(''.$prods->fotos()->first()->url) }}" alt="Card image" style="width:100%;  height: 220px;">
                        <h4 class="card-title titulo-card"> <?= $prods->nome; ?> </h4>
                        <div class="card-body">
                            <p class="card-text"> <?= $prods->descricao; ?></p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

</div>
