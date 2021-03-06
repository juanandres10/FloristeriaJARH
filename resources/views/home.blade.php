@extends('plantilla')
@section('contenido')
<div class="home">
    <!-- Banner -->
    <div class="row marg-bann">
        <div class="col">
            <img class="h-100 w-100" src="../../images/banner.jpg" >
        </div>
    </div>
    <!-- Banner -->
    <!-- Menu -->
    <div class="row mr-1 ml-1">
        <div class="col-12">
            <h1 class="font-weight-light text-center text-degradado_red_blue mt-4 mb-0">@lang('Florist JARH')</h1>
        </div>
    </div>
    <div class="row caja">
        <div class="col-12 col-md-5 mb-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="col-12">
                        <h1 class="font-weight-light text-center text-jugadores mb-0">@lang('Bouquets')</h1>
                    </div>
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../../images/ramo1.jfif" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../../images/ramo2.jfif" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../../images/ramo3.jfif" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../../images/ramo4.jfif" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../../images/ramo5.jpg" alt="Fifth slide">
                    </div>
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
            </div>
            <div class="col-12 col-md-3">
                <div class="row d-flex flex-column">
                    <div class="col-12">
                        <h1 class="font-weight-light text-center text-jugadores mb-0">@lang('Catalogue')</h1>
                    </div>
                    <div class="col-12">
                        <figure class="figure d-flex">
                            <a href="https://www.interflora.es/cumpleanos" target="_blank"><img src="../../images/cumple.png" class="img-fluid"></a>
                            <figcaption class="figure-caption d-flex align-items-center ml-1 font-weight-bold">@lang('Birthday')</figcaption>
                        </figure>
                    </div>
                    <div class="col-12">
                        <figure class="figure d-flex">
                            <a href="https://www.interflora.es/ocasion" target="_blank"><img src="../../images/ocasion.png" class="img-fluid"></a>
                            <figcaption class="figure-caption d-flex align-items-center ml-1 font-weight-bold">@lang('Occasions')</figcaption>
                        </figure>
                    </div>
                    <div class="col-12">
                        <figure class="figure d-flex">
                            <a href="https://www.interflora.es/funerarios" target="_blank"><img src="../../images/funeral.png" class="img-fluid"></a>
                            <figcaption class="figure-caption d-flex align-items-center ml-1 font-weight-bold">@lang('Funeral')</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="col-12">
                        <h1 class="font-weight-light text-center text-jugadores mb-0">@lang('History')</h1>
                    </div>
                    <div class="col-12">
                        <figure class="figure d-flex flex-column">
                            <figcaption class="figure-caption text-justify">Todas nuestras flores y plantas son confeccionados en el d??a de la entrega por una de nuestras florister??as situadas en toda Espa??a y m??s de 150 pa??ses para su Env??o Internacional.Recuerda que siempre te llevas la garant??a de servicio y calidad de una empresa con m??s de 65 a??os entregando flores a domicilio en Espa??a.</figcaption>
                            <figcaption class="figure-caption text-justify">En floristeria JARH encontrar??s una gran selecci??n de flores, ramos confeccionados a mano y preciosos centros de flores que har??n las delicias de todos vosotros. Promover y apoyar a los floristas locales es muy importante para nosotros, ya que sin nuestra red de grandes florister??as no ser??amos capaz de poder enviar las flores m??s hermosas y bonitas a lo largo de todo el mundo. Como ves, nos encantan las flores, y para ello hacemos posible que las nuevas tendencias en ramos de flores tengan cabida en nuestro cat??logo. Si por el contrario, no te interesa tanto las ??ltimas tendencias en ramos de flores y prefieres encontrar flores a un precio m??s asequible, te recomendamos que entren en nuestra secci??n de ofertas.</figcaption>
                            <figcaption class="figure-caption text-justify">En floristeria JARH tambi??n encontrar??s todo tipo de centros y de cestas de plantas de diferentes tama??os y formas para cualquier ocasi??n. Sorprende a su ser querido enviando una de nuestra amplia variedad de plantas preciosas preparadas con mucha dedicaci??n por uno de nuestros floristas. Enviar plantas online nunca fue tan f??cil como hoy en d??a. Si no tienes tiempo de poder comprar flores o plantas en tu florister??a de tu barrio, nosotros te ayudamos y te llevamos la floristeria a tu casa.</figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
  </div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection

@section('titulo', 'Home')