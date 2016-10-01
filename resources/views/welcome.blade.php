<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Starter Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ URL::asset('css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ URL::asset('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>

<!-- barra de navegacion -->
<nav class="orange darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">ElCaldo</a>
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


<footer class="grey darken-2">
    <div class="container">
        <div class="row">
            <div class="col 16 s12">
                <h4 class="white-text center">ElCaldo</h4>
                <p class="grey-text text-lighten-4 center">Sabor a eterna primavera.</p>
                <p class="grey-text text-lighten-4 center"> Para mas información: </p>
                <p class="grey-text text-lighten-4 center">info@elcaldogt.com</p>
            </div>
        </div>

        <div class="center">
            <img src="{{ URL::asset('img/icon_playstore_black_min.png') }}">
        </div>

        <div class="footer-copyright center">
            <div class="white-text">
                © 2016 Copyright elcaldo, All rights reserved.
            </div>
        </div>
    </div>
</footer>


<!-- termina foot!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{ URL::asset('js/materialize.js') }}"></script>
<script src="{{ URL::asset('js/init.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.parallax').parallax();
        $('.slider').slider({full_width: true});
    });

</script>
<!-- terminar Scripts -->


</body>
</html>
