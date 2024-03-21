@extends('layouts.header')

@section('contenido')

    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_01.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>Zay</b> eCommerce</h1>
                                <p>
                                Explora Nuestras Categorías Destacadas en Zay eCommerce, donde la Calidad y el Estilo se Unen en Cada Artículo. ¡Tu Tienda de Artículos Únicos, Tu Estilo, Tu Zay!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categorías del Mes</h1>
                <p>
                    Descubre las Mejores Categorías
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="http://localhost/M07/UF3/A2.%20Botiga/Tienda2/resources/templatemo_559_zay_shop/assets/img/category_img_01.jpg" class="rounded-circle img-fluid border"></a>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="http://localhost/M07/UF3/A2.%20Botiga/Tienda2/resources/templatemo_559_zay_shop/assets/img/category_img_02.jpg" class="rounded-circle img-fluid border"></a>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="http://localhost/M07/UF3/A2.%20Botiga/Tienda2/resources/templatemo_559_zay_shop/assets/img/category_img_03.jpg" class="rounded-circle img-fluid border"></a>
            </div>
        </div>
    </section>

    @endsection
   