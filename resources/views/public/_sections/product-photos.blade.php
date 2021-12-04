
<div id="carouselPhotosProduct" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($fotos as $key => $f )

                @php
                    $str = '';
                    if ($key == 0) {
                        $str = 'active';
                    }
                @endphp
                <li data-target="#carouselPhotosProduct" data-slide-to="{{$key}}" class="{{$str}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" style="height: 357px;">
            @foreach ($fotos as $key => $f )

                @php
                    $str = '';
                    if ($key == 0) {
                        $str = 'active';
                    }
                @endphp
                <div class="carousel-item {{$str}}">
                    <img style="height: 357px; object-fit: cover;" class="d-block w-100" src="{{ asset(''.$f->url) }}" alt="{{ $product->nome }}">
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselPhotosProduct" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselPhotosProduct" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

</div>
