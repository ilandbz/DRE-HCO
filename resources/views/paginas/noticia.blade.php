@extends('principal.plantilla')
@section('title', 'DRE HUANUCO')
@section('content')

<main id="main">
<section class="pt-4">

@php
    $image_path2 = public_path('../../public_html/img/noticias/').$noticia->img2;
    $image_path3 = public_path('../../public_html/img/noticias/').$noticia->img3;
@endphp
    <div class="container">
        <div class="row">
            <div class="col-md-12" align="center">
                <h2>{{$noticia->titulo}}</h2>
                <img src="{{ asset('img/noticias/'.$noticia->img1) }}" class="w-fluid" alt="">
                <div class="text-justify"><?php echo $noticia->contenido ?></div>
                <?php if (file_exists($image_path2)){  ?>
                <div class="carousel-item p-0" data-img-src="">
                    <img src="{{ asset('img/noticias/'.$noticia->img2) }}" class="w-fluid" height="260px" alt="">
                </div>
                <?php } ?>
                <?php if (file_exists($image_path3)){  ?>
                <div class="carousel-item p-0" data-img-src="">
                    <img src="{{ asset('img/noticias/'.$noticia->img3) }}" class="w-fluid" height="260px" alt="">
                </div>
                <?php } ?>
                <br><br>
                <h6 class="widget_title">COMPARTIR</h6>
                <div class="row">
                    <div class="col-md-6">
                        <a target="_blank" class="" href="https://www.facebook.com/sharer.php?u=https://drehuanuco.gob.pe/noticia/{{$noticia->id}}" title="Facebook">
                            <img src="{{asset('img/facebook.png')}}" width="50px" alt="">
                        </a>&nbsp;&nbsp;
                        <a target="_blank" href="https://wa.me/51935179345" class="" title="WhatsApp">
                            <img src="{{asset('img/wasap.png')}}" width="50px" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</section><!-- End About Section -->

</main>

@endsection
