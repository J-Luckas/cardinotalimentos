<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top border-bottom">
        <a class="navbar-brand" href="{{ route('site.index')}}">
            <img src=" {{ asset('img/logo.png') }} " alt="Logo Cardinot Alimentos" width="190">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div id="navbarContent" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ route('site.index')}}" class="">Início</a></li>
                <li class="nav-item"><a href="#produtos" class="">Produtos</a></li>
                <li class="nav-item"><a href="#about" class="">Quem somos</a></li>
                <li class="nav-item"><a href="#contact" class="">Contato</a></li>

            </ul>

        </div>
    </nav>
</header>
<div style="height:105px;" ></div>
