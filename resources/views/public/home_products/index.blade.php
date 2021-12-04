@include('public._sections.header')

<main class="main-prod" style="height: 100vh;">

    <div class="container h-100">
        <div class="row h-100">
                <div class="col-md-6 m-auto">
                    @include('public._sections.product-photos')
                </div>
                <div class="col-md-6 sintese-prod d-flex flex-column justify-content-xl-center justify-content-lg-center text-center" >
                    <h2>{{ $product->nome }}</h2>
                </div>

                <div class="col-md-12 sintese-prod">
                    <h3>{{ $product->descricao }}</h3>
                </div>
        </div>
    </div>
</main>

@include('public._sections.footer')
