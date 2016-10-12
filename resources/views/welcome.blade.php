
@extends('layout.principal')
@section('content')


<!-- barra de navegacion -->
<nav class="orange darken-4" role="navigation">
    <div class="nav-wrapper container">
        <img src="{{ URL::asset('img/caldoicon.ico') }} " class="material-icons left" width="64px">
        <a id="logo-container" href="#" class="brand-logo">ElCaldo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="https://www.facebook.com/elcaldoapp">Facebook</a></li>
            <li><a href="https://twitter.com/caldogt">Twitter</a></li>
            <li><a href="https://play.google.com/store/apps/details?id=com.gt.dev.lazaro.elcaldo" ><i class="material-icons right">android</i>GooglePlay</a></li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
            <li><a href="https://www.facebook.com/elcaldoapp">Facebook</a></li>
            <li><a href="https://twitter.com/caldogt">Twitter</a></li>
            <li><a href="https://play.google.com/store/apps/details?id=com.gt.dev.lazaro.elcaldo" >PlayStore<i class="material-icons">android</i></a></li>

        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>

</nav>

<!-- termina barra de navegacion -->

<!-- media -->

<section>
    <div class="row">


        <div class="slider">
            <ul class="slides">
                <li>
                    <img src="{{ URL::asset('img/banner01.png') }}"> <!-- random image -->
                    <div class="caption center-align">
                        <h2>ElCaldo</h2>
                        <h4 class="light grey-text text-lighten-3">Sabor a eterna primavera</h4>
                    </div>
                </li>
                <li>
                    <img src="{{ URL::asset('img/banner02.png') }}"> <!-- random image -->

                </li>
                <li>
                    <img src="{{ URL::asset('img/banner03.png') }}"> <!-- random image -->

                </li>
                <li>
                    <img src="{{ URL::asset('img/banner04.png') }}"> <!-- random image -->

                </li>
            </ul>
        </div>
    </div>


</section>

<!-- termina media -->

<!-- iniciar boton -->


<section>

    <div class="row">
        <div class="col s12 center">
            <a  class="waves-effect waves-light btn-large" href="{{ url('app') }}" ><i  class="material-icons right">send</i>AppWeb</a>
        </div>
    </div>

</section>


<!-- finalizea boton -->


<!-- Paralax -->
<section>
    <div class="row">
        <div class="col s12">

            <div class="section white">
                <div class="row container">
                    <h2 class="header">Cultura:</h2>
                    <h5><p class="grey-text text-darken-3 lighten-3">ElCaldo es un ecosistema limbico donde todas tus
                            emociones sensoriales se conectan con el arte culinario.</p></h5>
                </div>
            </div>
            <div class="parallax-container">
                <div class="parallax"><img src="{{ URL::asset('img/image01.jpg') }}"></div>
            </div>

            <div class="section white">
                <div class="row container">
                    <h2 class="header">Tecnologia:</h2>
                    <h5><p class="grey-text text-darken-3 lighten-3">Optimizar y agilizar los procesos por herramientas
                            tecnologicas.</p></h5>
                </div>
            </div>
            <div class="parallax-container">
                <div class="parallax"><img src="{{ URL::asset('img/image02.jpg') }}"></div>
            </div>

            <div class="section white">
                <div class="row container">
                    <h2 class="header">Gastronomia:</h2>
                    <h5><p class="grey-text text-darken-3 lighten-3">Un tema importantisimo para todos los
                            guatemaltecos, es
                            triste que te sepas mas el menu del restaurante de comida chatarra pero te cueste recordar
                            almenos 10 platos tipicos guatemaltecos.</p></h5>
                </div>
            </div>
            <div class="parallax-container">
                <div class="parallax"><img src="{{ URL::asset('img/image00.jpg') }}"></div>
            </div>

            <div class="section white">
                <div class="row container">
                    <h2 class="header">Innovación:</h2>
                    <h5><p class="grey-text text-darken-3 lighten-3">Cuando fusionas la cultura con la tecnologia, nace
                            un
                            bebe llamado innovación.</p></h5>
                </div>
            </div>
            <div class="parallax-container">
                <div class="parallax"><img src="{{ URL::asset('img/image03.jpg') }}"></div>
            </div>

        </div>

    </div>


</section>


<!-- termina Paralax -->


<!-- footer -->



@stop