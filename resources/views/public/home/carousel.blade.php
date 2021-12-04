<div style="display: none;" id="inicio-div"></div>
<div id="carouselExampleIndicators" style="margin-top: 0;" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($fotos as $key => $f )

            @php
                $str = '';
                if ($key == 0) {
                    $str = 'active';
                }
            @endphp
            <div class="carousel-item {{$str}}">
                <img style="height: 100%; object-fit: cover;" class="d-block w-100" src="{{ asset(''.$f->url) }}" alt="{{ $f->produto->nome }}">
            </div>
        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
