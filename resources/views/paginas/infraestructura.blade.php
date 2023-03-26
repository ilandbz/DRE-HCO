@extends('principal.plantilla')
@section('title', 'DRE - HUANUCO')
@section('content')
<main id="main">
<section id="about" class="about pt-2">
  <div class="container">
    <h4>INFRAESTRUCTURA</h4><br>
    <div class="row m-0">
        <div class="col banner_section m-0 p-2 full_screen">


            <div id="carouselExampleControls" class="banner_content_wrap carousel slide" data-ride="carousel">
                <div class="carousel-inner" style="">
                  <?php $estado=false; ?>
                  @foreach($registros as $row)
                    <div class="carousel-item {{ $estado==false ? 'active' : '' }} background_bg" data-img-src="{{asset('img/infraestructura/'.$row->imagen)}}">
                    </div>
                  <?php $estado = true ?>
                  @endforeach
                </div>
                <div class="carousel-nav">
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <i class="ion-chevron-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <i class="ion-chevron-right"></i>
                    </a>
                </div>
            </div>

        </div>

    </div>
  </div>
</section><!-- End About Section -->
</main>
@endsection
