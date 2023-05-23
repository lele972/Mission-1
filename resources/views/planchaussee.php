
</header>
<!--La page suit le modèle de page "modele_pages.blade.php"-->
@extends('layout.modele_pages')

<!-- Commence ici le corps de la page -->
@section('content')


<article>
    <header class="section background-dark">
        <div class="line">
            <h1 class="text-white margin-top-bottom-40 text-size-30 text-line-height-1">Sorties et événements</h1>
            <p class="margin-bottom-0 text-size-16">Quelques suggestions....</p>
        </div>
    </header>


    <section class="section-top-padding full-width">

    <header>
    <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
        <div class="item">
            <div class="s-12">
                <img src="img/planrezdechaussee.png" alt="">
                <div class="carousel-content">
                    <div class="content-center-vertical line">
                        <div class="margin-top-bottom-200">
                        </div>
                    </div>
                </div>
            </div>
        

    <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
        <div class="item">
                <img src="img/amphitheatre.jpg"  width=400  height=350>
                <div class="carousel-content">
                    <div class="content-center-vertical line">
                        <div class="margin-top-bottom-50">
                        </div>
                </div>
            </div>
            
    <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
        <div class="item">
                <img src="img/restauration.jpg" width=400  height=350>
                <div class="carousel-content">
                    <div class="content-center-vertical line">
                        <div class="margin-top-bottom-50">
                        </div>
                    </div>
                </div>
            </div>

    <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
        <div class="item">
                <img src="img/reunion3.jpg"  width=400  height=350>
                <div class="carousel-content">
                    <div class="content-center-vertical line">
                        <div class="margin-top-bottom-200">
                        </div>
                </div>
            </div>



</header>
         <div class="container text-center">

<div class="row">
    <div class="col-12">
        <img src="{{ asset('img/multimedia.jpg') }} " width="00px">
    </div>
</div>

            <div class="row">
                <div class="col border border-2 border-dark">
                    c1
                </div>
                <div class="col border border-2 border-dark">
                    c2
                </div>
                <div class="col border border-2 border-dark">
                    c3
                </div>
            </div>

        </div>

    </section>

</article>

<!-- termine le corps de la page -->
@endsection